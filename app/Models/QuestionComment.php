<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class QuestionComment extends Model
{
    use HasFactory;

    protected $fillable = ['question_id','user_id','comment'];

    protected $appends = ['date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getDateAttribute()
    {
        $c = new Carbon($this->created_at);
        return $c->diffForHumans();
    }
}
