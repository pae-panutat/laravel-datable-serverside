<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DataTables;

class UserController extends Controller
{
    public function index(Request $request) {
        if ($request->ajax()) {
            $data = User::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('edit', function($row){
     
                           $btn = '<a href="'. route('edit', $row->id) .'" class="edit btn btn-warning btn-sm">Edit</a>';
       
                            return $btn;
                    })
                    ->addColumn('delete', function($row){
     
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-danger btn-sm">Delete</a>';
       
                            return $btn;
                    })
                    ->rawColumns(['edit', 'delete'])
                    ->make(true);
        }
        
        return view('users-data');
    }

    public function edit($id) {
        dd($id);
    }
}
