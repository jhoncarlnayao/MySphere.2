<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class AttendanceModel extends Model
{
    // 
    use HasFactory;
    protected $fillable = [
        'name',
        'date',
        'subject',
        'time_in',
        'time_out',
        'status',
    ];

    protected $table = 'Attendance';


}
