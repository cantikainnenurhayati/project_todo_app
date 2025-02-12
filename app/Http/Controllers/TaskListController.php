<?php

namespace App\Http\Controllers;

use App\Models\TaskList;
use Illuminate\Http\Request;

class TaskListController extends Controller
{
    public function store(Request $request)
    // sebuah metode contoroler yg dugunkan untuk menangani permintaan request
     {
        $request->validate
        // digunakan untuk memvalidasi data nama  //
        ([
            'name' => 'required|max:100'
        ]);

        TaskList::create
        // digunakan untuk membuat tasklist berdasarkan nama //
        ([
            'name' => $request->name
        ]);

        return redirect()->back();
        // digunkan untuk mengembalikan ke halaman awal //
    }

    public function destroy($id)
    // digunakan untuk menghapus tasklist //
     {
        TaskList::findOrFail($id)->delete();

        return redirect()->back();
    }
}