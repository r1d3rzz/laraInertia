<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Trait\Question as QuestionTrait;

class QuestionController extends Controller
{
    use QuestionTrait;
    public function home()
    {
        $questions = Question::with('like', 'comments', 'questionsave', 'tags')->get();

        foreach ($questions as $k=>$v) {
            $questions[$k]->is_like = $this->getLikeDetail($v->id)['is_like'];
            $questions[$k]->like_count = $this->getLikeDetail($v->id)['like_count'];
        }

        // return $questions; ( check api )

        return Inertia::render('Home', [
            'questions' => $questions
        ]);
    }

    public function show($slug)
    {
        $question = Question::where('slug', $slug)->first();
        $question->is_like = $this->getLikeDetail($question->id)['is_like'];
        $question->like_count = $this->getLikeDetail($question->id)['like_count'];
        dd($question);
        return Inertia::render('QuestionDetail');
    }

    public function like($id)
    {
        QuestionLike::create([
            'question_id' => $id,
            'user_id' => Auth::id()
        ]);
        return response()->json(['success'=>true]);
    }
}
