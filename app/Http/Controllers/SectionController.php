<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SectionModel;
use App\Models\ClassModel;

class SectionController extends Controller
{

    public function createSection()
    {
        return view('section');
    }

    public function showClass()
    {
        $class = ClassModel::get(); 
        return view('section', ['class' => $class]);
    }
     //store secrtion data
    public function storeSection(Request $request)
    {        
        $request -> validate([
            'sectionName' => 'required',
            'className' => 'required'
        ]);
        $section = new SectionModel;
        $section->section_name = $request['sectionName'];
        $section->Class_id = $request['className'];

        $section->save();

        return redirect('/section');
    }
     //View Section table
    public function viewSection(Request $request)
    {        
        $section = SectionModel::with('classroom')->get();
        return view('section_view',['section' => $section]);
    }
    public function deleteStudent($id)
    {
        $data = SectionModel::find($id);
        $data->deleteStudent($id);
        return redirect('section/view');
    }

}
