<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttandenceModel;
use App\Models\classModel;
use DB;

class AttandenceController extends Controller
{
    public function Attandence()
    {
        $class = classModel::get();
        return view('attandence', ['class' => $class]);
    }
}
