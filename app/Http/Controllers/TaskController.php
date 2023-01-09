<?php

namespace App\Http\Controllers;

use App\Models\AppTasks;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function reply()
    {
        return view('Tasks.reply');
    }
}
