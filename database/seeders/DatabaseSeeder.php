<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

// Post::create([
        //     "title"=> "Surat apa gitu",
        //     "author_id"=> 1,
        //     "category_id"=> 1, 
        //     "slug"=> "surat-apa-gitu",
        //     "body"=> "Within the DatabaseSeeder class, you may use the call method to execute additional seed classes. Using the call method allows you to break up your database seeding into multiple files so that no single seeder class becomes too large. The call method accepts an array of seeder classes that should be executed:"
        // ]);
        
        $this->call([UserSeeder::class, CategorySeeder::class]);
        Post::factory(100)->recycle([
            User::all(),
            Category::all()
        ])->create();
    }
}
