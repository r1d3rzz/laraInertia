<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','slug','title','description','is_fixed'];

    public function like()
    {
        return $this->hasMany(QuestionLike::class);
    }

    public function comments()
    {
        return $this->hasMany(QuestionComment::class);
    }

    public function questionSave()
    {
        return $this->hasMany(QuestionSave::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'question_tags');//connect pivot table question tags
    }
}
