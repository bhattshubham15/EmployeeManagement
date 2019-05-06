<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class FormLogic extends Controller
{
    //
    public function DemoFunction(Request $request)
    {
    $customMessages = [
      'name.required' => 'Name required should be letters only',
      'password.min' => 'Hehe whats wrong with you!'
    ];
    $request->validate([
        'name' => 'required',
        'password' => 'required|min:5|max:5',
        'address' => 'required',
        'department' => 'required',
        'designation' => 'required',
    ],$customMessages);
    
   // print_r($request);
    if(!empty($request->all())) {
        $p = Employee::create([
            'emp_id' => $request->get('emp_id'),
            'name' => $request->get('name'),
            'address' => $request->get('address')
        ]);
        return view('home');
    }
    //Employee::create(['']);
}
public function show() {
    return view('home',['emp_id' => 'emp_id']);
}
}
