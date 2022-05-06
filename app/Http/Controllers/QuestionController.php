<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class QuestionController extends Controller
{
    public function home()
    {
        $questions = Question::with('like', 'comments', 'questionsave', 'tags')->get();

        foreach ($questions as $k=>$v) {
            $questions[$k]->is_like = $this->likeDetail($v->id)['is_like'];
            $questions[$k]->like_count = $this->likeDetail($v->id)['like_count'];
        }

        // return $questions; ( check api )

        return Inertia::render('Home', [
            'questions' => $questions
        ]);
    }

    public function show()
    {
        return Inertia::render('QuestionDetail');
    }

    public function likeDetail($question_id)//build helper function
    {
        //check
        $q_like = QuestionLike::where('question_id', $question_id)
                                ->where('user_id', Auth::id())
                                ->first();

        if ($q_like) {
            $is_like = true;
        } else {
            $is_like = false;
        }

        //like count
        $like_count = QuestionLike::where('question_id', $question_id)->count();
        $data['is_like'] = $is_like;
        $data['like_count'] = $like_count;
        return $data;
    }
}
