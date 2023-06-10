<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class TaskApiController extends Controller
{
    public function read()
    {
        $task = Artikel::all();
        return response()->json([
            "success" => true,
            "message" => "Sucessfully Getting Data",
            "data" => $task
        ], 200);
    }
    public function create(Request $request)
    {
        $task = Artikel::create([
            'nama' => $request->nama,
            'judul_task' => $request->judul_task,
            'deskripsi_task' => $request->deskripsi_task
        ]);
        if ($task) {
            return response()->json([
                "success" => true,
                "message" => "Data Successfully Added",
                "data" => $task
            ], 200);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Failed to Add Data",
            ], 400);
        }

    }
    public function delete($id)
    {
        $task = Artikel::find($id)->delete();
        if ($task) {
            return response()->json([
                "success" => true,
                "message" => "Data Successfully Deleted",
            ], 200);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Failed to Delete Data",
            ], 400);
        }
    }
    public function update($id, Request $request)
    {
        $task = Artikel::whereId($id)->update([
            'nama' => $request->nama,
            'judul_task' => $request->judul_task,
            'deskripsi_task' => $request->deskripsi_task
        ]);

        if ($task) {
            return response()->json([
                "success" => true,
                "message" => "Data Successfully Edited",
            ], 200);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Failed to Edit Data",
            ], 400);
        }
    }
}
