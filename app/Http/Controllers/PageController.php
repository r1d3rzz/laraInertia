<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function home()
    {
        $questions = Question::with('like', 'comments', 'questionsave', 'tags')->get();
        return Inertia::render('Home', [
            'questions' => $questions
        ]);
    }
}
