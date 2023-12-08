<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;

class StudentController extends Controller
{
    public function createStudent()
    {
        return view('student');
    }

         //store secrtion data
         public function storeStudent(Request $request)
         {        
            $request -> validate([
                'studentName' => 'required',
                'fatherName' => 'required',
                'dob' => 'required',
                'email' => 'required',
            ]);
             $student = new StudentModel;
             $student->student_name = $request['studentName'];
             $student->father_name = $request['fatherName'];
             $student->dob = $request['dob'];
             $student->email = $request['email'];
             $student->save();

             return redirect('/student');
         }
         public function viewStudent(Request $request)
         {        
             $student = StudentModel::get();
             return view('student_view',['student' => $student]);
         }
         public function delete($id)
         {
            $data = StudentModel::find($id);
            $data->delete($id);
            return redirect('student/view');
         }
         public function edit($id)
         {
            $data = StudentModel::find($id);
            return view('edit',['data'=>$data]);
         }
         public function update(Request $request)
         {
           // return $request->input();
            $data = StudentModel::find($request->id);
            
            // if (!$data) {
            //     return redirect()->back()->with('error', 'Student not found.');
            // }
            $data->student_name = $request['sName'];
            $data->father_name = $request['fName'];
            $data->dob = $request['sdob'];
            $data->email = $request->semail;
            
            $data->save();
            return redirect('student/view');
         }

}
