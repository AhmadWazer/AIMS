<?php

namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Models\AttandenceModel;
 use App\Models\classModel;
 use App\Models\StudentAttandanceModel;
 use DB;
class StudentAttandenceController extends Controller
{

    public function showStudents(Request $request)
    {
        $id = $request->className;
        $class = null;
        if($id){
       $class = DB::table('class1')
       ->where('Class_id', $id)
       ->first(); // Fetch the class information
        }
       $data = DB::table('student_class')
       ->join('class1','class1.Class_id', '=', 'student_class.Class_id')
       ->join('student','student.student_id', '=', 'student_class.Student_id')
       ->where('class1.Class_id', $id)
       ->get();
        return view('StudentAttandence',['student' => $data , 'class' =>$class]);
    }

    public function storeAttendance(Request $request)
    {
        $classId = $request->input('classid'); 
        $date = $request->input('atdate');
        $attendances = $request->input('attendance');

        foreach ($attendances as $studentId => $attendance) {
            $attendanceString = implode(',', $attendance);
            $record = new StudentAttandanceModel;
            
            $record->class_id = $classId;
            $record->student_id = $studentId;
            $record->attend_date = $date;
            $record->status = $attendanceString;
           
            $record->save();
            
        }
        return redirect('/attandence');
    }

    public function viewAttandence(Request $request)
    {    
           
        $data = DB::table('attendance')
        ->join('class1','class1.Class_id', '=', 'attendance.Class_id')
        ->join('student','student.student_id', '=', 'attendance.Student_id')
        ->get();
        //return $data;

        return view('StudentAttandenceView',['Attendance' => $data]);
    }
    public function deleteAttend($id)
    {
        $data = StudentAttandanceModel::find($id);
        $data->delete($id);
        return redirect('/StudentAttendencre/view');
    }
    public function editAttendance($id)
    {
       //$data = StudentAttandanceModel::find($id);
              $data = DB::table('attendance')
       ->join('class1','class1.Class_id', '=', 'attendance.Class_id')
       ->join('student','student.student_id', '=', 'attendance.Student_id')
       ->where('attendance.attend_id', $id)
       ->first();
       return view('editAttendance',['data1'=>$data]);
    }

    public function updateAttendance(Request $request)
    {
     
       $data = StudentAttandanceModel::find($request->id);

       $data->status = $request['attend'];
       $data->attend_date = $request['date'];
       
       $data->save();
       return redirect('/StudentAttandence/view');
    }


    public function selectAttendance(Request $request)
    {
        $selectedRecordIds = $request->input('selected_records');

        $selectedRecords = DB::table('attendance')
           ->join('class1','class1.Class_id', '=', 'attendance.Class_id')
           ->join('student','student.student_id', '=', 'attendance.Student_id')
           ->whereIn('attendance.attend_id', $selectedRecordIds)
           ->get();
           //StudentAttandanceModel::whereIn('attend_id', $selectedRecordIds)->get();
    
        return view('multiUpdate', ['selectedRecords' => $selectedRecords]);
    }

public function updateMultiAttendance(Request $request)
{

    $selectedRecordIds = $request->input('selected_records');
    $newDate = $request->input('date'); 

    StudentAttandanceModel::whereIn('attend_id', $selectedRecordIds)
        ->update(['status' => $request->input('attendance'), 
        'attend_date' =>$request->input('date')]);

    return redirect()->route('Attendance.view')->with('success', 'Selected records updated successfully.');
}


public function viewClassAttend(Request $request)
{

    $id = $request->className;
    $searchDate = $request->input('date');

    $class = null;
    if($id){
   $class = DB::table('class1')
   ->where('Class_id', $id)
   ->get(); // Fetch the class information
    }
    $data = DB::table('attendance')
    ->join('class1','class1.Class_id', '=', 'attendance.Class_id')
    ->join('student','student.student_id', '=', 'attendance.Student_id')
    ->where('class1.Class_id', $id)
    ->whereDate('attend_date',$searchDate)
    ->get();
    
    return view('ClassAttendance',['student' => $data , 'class' =>$class]);
}


    public function search(Request $request)
    {
        $id = $request->input('class_id');
        $searchDate = $request->input('searchDate');

        $query = StudentAttandanceModel::query();

        if (!empty($searchDate)) {
            $query->whereDate('attend_date', $searchDate);
        }

        $student = $query->get();

        return view('ClassAttendance', compact('student'));
    }
}





 