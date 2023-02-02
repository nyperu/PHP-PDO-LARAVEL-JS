<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\category;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        User::truncate();
        category::truncate();
        $user=User::factory()->create([
            'name'=>'John Wick'
        ]);
        $user2=User::factory()->create([
            'name'=>'Ronaldinho'
        ]);
        Post::factory(3)->create([
            'user_id'=>$user->id
        ]);
        Post::factory(2)->create([
            'user_id'=>$user2->id
        ]);
        Post::factory(3)->create([
            'category_id'=>2
        ]);
//        $user=User::factory()->create();
//        $user1=User::factory()->create();
//        $user2=User::factory()->create();
//
//        $family=category::create(['name'=>'Family',
//            'slug'=>'Family'
//
//            ]);
//        $work=category::create(['Name'=>'Work',
//            'slug'=>'work'
//
//        ]);
//        $personal=category::create(['Name'=>'Personal',
//            'slug'=>'personal'
//
//        ]);
//
//        Post::create([
//            'user_id'=>$user->id,
//            'category_id'=>$family->id,
//            'title'=>'My Family Post',
//            'slug'=>'my-family-post',
//            'excerpt'=>'Lorem ipsum...',
//            'body'=>'Lorem ipsum dolooasodoasodasdasdasd'
//        ]);
//        Post::create([
//            'user_id'=>$user1->id,
//            'category_id'=>$family->id,
//            'title'=>'My Family icin 2. Post',
//            'slug'=>'my-family-post-2',
//            'excerpt'=>'Lorem ipsum...',
//            'body'=>'Lorem ipsum dolooasodoasodasdasdasd'
//        ]);
//        Post::create([
//            'user_id'=>$user2->id,
//            'category_id'=>$work->id,
//            'title'=>'My Work Post',
//            'slug'=>'my-work-post',
//            'excerpt'=>'Lorem ipsum...',
//            'body'=>'Lorem ipsum dolooasodoasodasdasdasd'
//        ]);
//        Post::create([
//            'user_id'=>$user->id,
//            'category_id'=>$work->id,
//            'title'=>'My Work Post-222222',
//            'slug'=>'my-work-post-2',
//            'excerpt'=>'Lorem ipsum...',
//            'body'=>'Lorem ipsum dolooasodoasodasdasdasd'
//        ]);

    }
}
