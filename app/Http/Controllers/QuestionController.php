<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class QuestionController extends Controller
{
    public function show()
    {
        return Inertia::render('QuestionDetail');
    }
}
