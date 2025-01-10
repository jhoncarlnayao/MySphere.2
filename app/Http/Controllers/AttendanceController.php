<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttendanceModel;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{

    // !! STORE NEW ATTENDACE
    public function MakeAttendance(Request $request){
        $request->validate([
            'name' => 'required|string',
            'date' => 'required|date',
            'subject' => 'required|string',
            'time_in' => 'required|string', 
            'time_out' => 'required|string',
            'status' => 'required|in:Present,Absent,Late',
        ]);
        
        

            $attendance = new AttendanceModel;
            $attendance -> name = $request->name;
            $attendance -> date = $request->date;
            $attendance -> subject = $request->subject;
            $attendance -> time_in = $request->time_in;
            $attendance -> time_out = $request->time_out;
            $attendance -> status = $request->status;
            $attendance->save();

        return redirect('/')->with('success', 'Attendance data has been successfully added.');
    }

    // !!! VIEW ALL ATTENDANCE IN A TABLE  ALSO GET THE TOTAL PRESENT,LATE AND ABSENT
    public function ViewAttendance(Request $request)
    {
        $attendances = AttendanceModel::all(); 
        $totalAttendance = AttendanceModel::where('status', 'Present')->count(); // Count only "Present" records
        $totalAbsent = AttendanceModel::where('status', 'Absent')->count(); // Count only "Absent" records
        $totalLate= AttendanceModel::where('status', 'Late')->count();  // Count only "Late" records
        return view('welcome', compact('attendances', 'totalAttendance','totalAbsent','totalLate'));
    }

    // !!! DELETE DATA IN ATTENDANCE TABLE
    public function DeleteAttendance($id){
        $attendanceDelete = AttendanceModel::findOrFail($id);
        $attendanceDelete ->delete();

        return redirect('/')->with('success', 'Item deleted successfully!');
    }
    






    

}
