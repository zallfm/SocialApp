<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;


/**
 * @group Photo
 *
 * APIs for photos
 */
class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach(Post::all() as $post){
            
            for($i = random_int(1, 3); $i < 4; $i++){
                $post->photos()->create([
                    'path'=> 'https://picsum.photos/200',
                    'type'=> 'post',
                ]);
            }
        }

        foreach(Comment::all() as $comment){
            
            for($i = random_int(1, 3); $i < 3; $i++){
                $comment->photos()->create([
                    'path'=> 'https://picsum.photos/200',
                    'type'=> 'post',
                ]);
            }
        }
    }
}
