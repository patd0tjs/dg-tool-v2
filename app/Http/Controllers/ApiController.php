<?php

namespace App\Http\Controllers;
use App\Models\GradeLevels;
use App\Models\StudentProfile;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getGradeLevelName(Request $request)
    {
        $level = GradeLevels::select('name')->where('id', $request->id)->get();
        
        if (!empty($level))
        {
            return response()->json($level);
        } 
        else
        {
            response()->json(['message' => 'Level not found'], 404);
        }
    }

    public function getAllStudents()
    {
        $students = StudentProfile::join("grade_levels", "student_profiles.level_id", "=", "grade_levels.id")
                                    ->select("student_profiles.id as id", "student_profiles.lrn as lrn", 
                                                \DB::raw("CONCAT(student_profiles.f_name, ' ', student_profiles.m_name, ' ', student_profiles.l_name) as name"),
                                            "grade_levels.name as level", "student_profiles.status as status")
                                    ->get();
        $response = ['data' => $students];
        
        return response()->json($response);
    }
}