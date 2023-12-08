<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionModel extends Model
{
    use HasFactory;
    
    protected $table ="section";
    protected $primaryKey = "section_id";

    public function classroom()
    {
        return $this->belongsTo(ClassModel::class, 'Class_id', 'Class_id');
    }

}
