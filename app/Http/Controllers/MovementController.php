<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Movement;

class MovementController extends Controller
{

    public function index()
    {

        return response()->json(["status" => true, "data" => Movement::all() ], 200);
    }

    public function store(Request $request)
    {
      
        Movement::create($request->all());

        return response()->json(["status" => true, "message" => $this->SUCCESS_CREATED], 200);
    }

    public function show($id)
    {

        try {

            $result = Movement::findOrFail($id);

        } catch (\Throwable $th) {

            return response()->json(["status" => false, "message" => $th->getMessage()], 400);

        }

        return response()->json(["status" => true, "data" => $result], 200);
    }

    public function update(Request $request, $id)
    {
    
        Movement::find($id)->update($request->all());

        return response()->json(["status" => true, "message" => $this->SUCCESS_UPDATED], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
    
        Movement::find($id)->delete();
        return response()->json(["status" => true, "message" => $this->SUCCESS_DELETED], 200);
    }

}
