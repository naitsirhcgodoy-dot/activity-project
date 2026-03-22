<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::query()
        ->select('student_name', 'student_id', 'time_in', 'time_out')->get();

        return view('attendance', compact('attendances'));
       // return response()->json($attendances);
    }

}
