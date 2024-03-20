<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentCController;
use App\Http\Controllers\AttandenceController;
use App\Http\Controllers\StudentAttandenceController;

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ClassController::class,'index']);
//class route
Route::get('/class',[ClassController::class,'create']);
Route::get('/class/view', [ClassController::class, 'view']);
Route::get('/deleteC/{id}', [ClassController::class, 'deleteClass']);
Route::post('/class',[ClassController::class,'store']);
//section route
Route::get('/section', [SectionController::class,'createSection']);
Route::get('/section', [SectionController::class,'showClass']);
Route::get('/section/view', [SectionController::class, 'viewSection']);
Route::get('/delete{id}', [SectionController::class, 'delete']);
Route::post('/section',[SectionController::class,'storeSection']);
//student route
Route::get('/student', [StudentController::class,'createStudent']);
Route::get('/student/view', [StudentController::class, 'viewStudent']);
Route::get('/delete/{id}', [StudentController::class, 'delete']);
Route::get('/edit/{id}', [StudentController::class, 'edit']);
Route::post('/update', [StudentController::class, 'update']);
Route::post('/student',[StudentController::class,'storeStudent']);
//student class route
Route::get('/student_C',[StudentCController::class, 'createStudentc']);
Route::get('/student_C/view', [StudentCController::class, 'viewStudentc']);
Route::get('/delete-student-c/{id}', [StudentCController::class, 'delete']);
Route::post('/student_C',[StudentCController::class,'storeStudentc']);
//attendance route
Route::get('/attandence', [AttandenceController::class,'attandence']);
//student attendance route
Route::get('/StudentAttandence/view',[StudentAttandenceController::class,'viewAttandence'])->name('Attendance.view');
Route::get('/delete{id}',[StudentAttandenceController::class,'deleteAttend']);
Route::get('/edit{id}', [StudentAttandenceController::class, 'editAttendance']);
Route::get('/ClassAttandence/view',[StudentAttandenceController::class,'viewClassAttend']);
Route::get('/search',[StudentAttandenceController::class, 'search']);
Route::post('/updateAttendance', [StudentAttandenceController::class, 'updateAttendance']);
Route::get('/selectAttendane',[StudentAttandenceController::class, 'selectAttendance']);
Route::post('/updateMultiAttendance', [StudentAttandenceController::class, 'updateMultiAttendance'])->name('update.attendance');
Route::post('/StudentAttandence', [StudentAttandenceController::class,'showStudents'])->name('Student.Attand');
Route::post('/StudentAttandence/store', [StudentAttandenceController::class,'storeAttendance']);

