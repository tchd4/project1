<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Replay;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Tag::factory()->count(10)->create();
        foreach ((range(1, 20)) as $index) {
            $taggable = ($index > 9) ? Post::all()->random() : Replay::all()->random();
            $taggable_type = ($index > 9) ? '\App\Model\Post' : '\App\Model\Replay';
            DB::table('taggables')->insert(
                [
                    'tag_id' => Tag::all()->random()->id,
                    'taggable_id' => $taggable->id,
                    'taggable_type' => $taggable_type
                ]
            );

        }
    }
}
