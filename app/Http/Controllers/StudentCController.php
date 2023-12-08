<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentCModel;
use App\Models\ClassModel;
use App\Models\StudentModel;
use DB;
class StudentCController extends Controller
{
    public function createStudentc()
    {
        
    $class = ClassModel::get();
    $student = StudentModel::get();
    
    return view('student_C', ['class' => $class, 'student' => $student]);
    }
         //store secrtion data
    public function storeStudentc(Request $request)
    {        
        $request-> validate([
            'StudentName'=>'required',
            'className'=>'required'

        ]);

     $studentc = new StudentCModel;
     $studentc->student_id = $request['StudentName'];
     $studentc->Class_id = $request['className'];

     $studentc->save();

     return redirect('/student_C');
    }
    public function viewStudentc(Request $request)
    {        
        $data = DB::table('student_class')
        ->join('class1','class1.Class_id', '=', 'student_class.Class_id')
        ->join('student','student.student_id', '=', 'student_class.Student_id')
        ->get();
        //return $data;

        return view('studentC-view',['studentClass' => $data]);
    }
    public function delete($SCid)
    {
        $students = StudentCModel::find($SCid);
        if(!is_null($students)){
            $students->delete();
        }
        return redirect('/student_C/view');
    }
}
