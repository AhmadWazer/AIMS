<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAttandanceModel extends Model
{
    use HasFactory;
    protected $table ="attendance";
    protected $primaryKey = "attend_id";
}
