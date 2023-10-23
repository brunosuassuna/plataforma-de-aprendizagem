<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Importe a classe Auth

class ProfessorController extends Controller
{
    public function index()
    {
        $professor = Auth::user();
        $courses = $professor->courses()->get();

        return view('professor.index', compact('courses'));
    }

    public function averages()
    {
        $professor = Auth::user();
        $courses = $professor->courses()->get();

        $averages = [];
        foreach ($courses as $course) {
            $averages[] = [
                'course' => $course->name,
                'average' => $course->students()->avg('average'),
            ];
        }

        return view('professor.averages', compact('averages'));
    }
}
