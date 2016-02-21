<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create()->each(function($u) {
            $u->posts()->save(factory(\App\Post::class)->make());
            
            $post = \App\Post::find(rand(1,\App\Post::all()->count()));    
            $u->likes()->attach($post);
        });
    }
}
