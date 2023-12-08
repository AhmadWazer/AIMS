<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCModel extends Model
{
    use HasFactory;

    protected $table ="student_class";
    protected $primaryKey = "StudentC_id";

    public function classroom()
    {
        return $this->belongsTo(ClassModel::class, 'Class_id', 'Class_name');
        return $this->belongsTo(studentModel::class, 'student_id', 'student_name');
    }
}
