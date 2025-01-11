<?php

namespace App\Http\Controllers;
use App\Models\AttendanceModel;

abstract class Controller
{
    public function loadContent($type)
    {
        $attendances = AttendanceModel::all(); 
        $totalAttendance = AttendanceModel::where('status', 'Present')->count(); // Count only "Present" records
        $totalAbsent = AttendanceModel::where('status', 'Absent')->count(); // Count only "Absent" records
        $totalLate= AttendanceModel::where('status', 'Late')->count();  // Count only "Late" records

        if ($type == 'chatbot') {
            return view('CONTENTS.content2',compact('attendances', 'totalAttendance', 'totalAbsent', 'totalLate'));  // Content for the Chatbot
        } else {
            return view('CONTENTS.content',compact('attendances', 'totalAttendance', 'totalAbsent', 'totalLate'));   // Content for the Main Page
        }
    }
}
