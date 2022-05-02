<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\QuestionTag;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        ##user
        User::create([
            'name' => 'Rider',
            'email' => "rider@gmail.com",
            'password' => Hash::make('password'),
            'image' => '/images/profile/default.png'
        ]);

        ##tag
        Tag::create([
            'name' => 'Web developer',
            'slug' => Str::slug('web developer')
        ]);

        Tag::create([
            'name' => 'Web Designer',
            'slug' => Str::slug('web designer')
        ]);

        Tag::create([
            'name' => 'Mobile developer',
            'slug' => Str::slug('mobile developer')
        ]);

        ##Question
        Question::create([
            'user_id' => 1,
            'slug' => Str::slug('what is laravel 8'),
            'title' => 'laravel 8',
            'description' => 'testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing',
        ]);

        ##question Tags
        QuestionTag::create([
            'question_id' => 1,
            'tag_id' => 1
        ]);

        QuestionTag::create([
            'question_id' => 1,
            'tag_id' => 2
        ]);
    }
}
