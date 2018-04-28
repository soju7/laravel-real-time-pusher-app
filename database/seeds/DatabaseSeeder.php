<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Model\Reply;
use App\Model\Category;
use App\Model\Question;
use App\Model\Like;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,5)->create();
        factory(Category::class,10)->create();
        factory(Question::class,15)->create();
        factory(Reply::class,50)->create();
        factory(Like::class,50)->create();
    }
}
