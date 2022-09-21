<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function index()
    {
        // Pendente desenvolvimento
        return response()->json(["status" => true, "data" => [] ], 200);
    }

    public function store(Request $request)
    {
      
        // Pendente desenvolvimento
        return response()->json(["status" => true, "message" => $this->SUCCESS_CREATED], 200);
    }

    public function show($id)
    {

        // Pendente desenvolvimento
        return response()->json(["status" => true, "data" => []], 200);
    }

    public function update(Request $request, $id)
    {
    
        // Pendente desenvolvimento
        return response()->json(["status" => true, "message" => $this->SUCCESS_UPDATED], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
    
        // Pendente desenvolvimento
        return response()->json(["status" => true, "message" => $this->SUCCESS_DELETED], 200);
    }

}
