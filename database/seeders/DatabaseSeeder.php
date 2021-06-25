<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        $author = \App\Models\Author::create([
            'name'=>'Rajan',
            'image'=>'',
            'twitter'=>'@acharyaRBD'
        ]);

        // $category = \App\Models\Category::create([
        //     'name'=>'Sport',
        //     'description'=>'This is the description of Sport category.'
        // ]);

        \App\Models\Post::factory(10)->create( 
            ['auth_id'=>'1']
        );

        \App\Models\Category::factory(5)->create( 
            // ['auth_id'=>'1']
        );
          
        
    }
}
