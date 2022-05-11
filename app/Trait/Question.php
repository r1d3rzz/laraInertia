<?php

namespace App\Trait;

use App\Models\QuestionLike;
use Illuminate\Support\Facades\Auth;

trait Question
{
    public function getLikeDetail($question_id)
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
