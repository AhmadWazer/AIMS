<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttandenceModel extends Model
{
    use HasFactory;
    
    protected $table ="attandence";
    protected $primaryKey = "attend_id";

    public function classroom()
    {
        return $this->belongsTo(StudentCModel::class, 'Class_id', 'Class_name','student_id','Student_name');
    }
    protected $fillable = ['status', 'attend_date'];

}
