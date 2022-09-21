<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\PersonalRecord;
use App\Models\Movement;

class RankingMovementController extends Controller
{

    public function ranking($id = 0)
    {

        if ($id === 0)
            return response()->json(["status" => false, "message" => $this->MOVEMENT_ERROR_ID], 400);

        if (!is_numeric($id))
            return response()->json(["status" => false, "message" => $this->MOVEMENT_ERROR_INVALID_ID], 400);

        $data = array();

        try {

            $result = Movement::select('movements.name AS NameMovement','users.name AS User', 'personal_records.date', 'value as record')
                            ->leftJoin('personal_records', function($join) {
                                $join->on('movements.id', '=', 'personal_records.movement_id')
                                    ->on('personal_records.value', '=', DB::raw('(SELECT max(`value`) FROM personal_records pr WHERE pr.user_id = personal_records.user_id AND pr.movement_id = personal_records.movement_id)'));
                            })
                            ->leftjoin('users', 'users.id', '=', 'user_id')
                            ->where('movements.id', '=', $id)
                            ->groupBy('user_id')
                            ->orderBy('record', 'DESC')
                            ->get();

            $data = $this->treatData( $result );

        } catch (\Throwable $th) {

            return response()->json(["status" => false, "message" => $th->getMessage()], 400);

        }

        return response()->json(["status" => true, "data" => $data], 200);
    }

    private function treatData($data) 
    {
        $treat = array();
        $pos   = 1;
        $oldVal=null;

        foreach($data AS $d) {
            
            $pos = $oldVal && $oldVal != $d['value'] ? ++$pos : $pos;

            $treat[$d['NameMovement']][] = !$d['User'] ? [] : [
                'user'      => $d['User'],
                'record'    => $d['record'],
                'position'  => $pos,
                'date'      => $d['date']
            ];
            
            $oldVal = $d['value'];
        }

        return $treat;
    }

}
