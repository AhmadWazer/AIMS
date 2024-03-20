<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassModel;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }  

    public function create()
    {
        return view('class');
    }

    public function store(Request $request)
    {
        $request -> validate([
            'classname' => 'required | unique:class1,Class_name'
        ]);
        $class = new ClassModel;
        $class->Class_name = $request['classname'];
        $class->save();

        return redirect('/class');
    }

    public function view(Request $request)
    {
        $search = $request['search'] ?? "";
        if("search" != ""){
             $class = ClassModel::Where('Class_name' ,'LIKE', "%$search%")->get();
        }else{
            $class = ClassModel::get();
        }
        
        $data = compact('class','search');
        return view('class_view')->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteClass($id)
    {
    
            $data = ClassModel::find($id);
            $data->delete($id);
            return redirect('/class/view');
        
    }
}
