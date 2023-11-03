<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

       
            $createMultipleUsers = [
                ['name' => 'arun', 'email' => 'run@techblogs.com', 'password' => bcrypt('TechvBlogs@123')],
                ['name' => 'bala', 'email' => 'bala@tecvblogs.com', 'password' => bcrypt('Guest@456')],
                ['name' => 'chinu', 'email' => 'chinu@tehvblogs.com', 'password' => bcrypt('Account@789')],
                ['name' => 'dinesh', 'email' => 'dinesh@techblogs.com', 'password' => bcrypt('TechvBlogs@123')],
                ['name' => 'elango', 'email' => 'elango@tecvblogs.com', 'password' => bcrypt('Guest@456')],
                ['name' => 'farook', 'email' => 'farook@tehvblogs.com', 'password' => bcrypt('Account@789')],
                ['name' => 'hari', 'email' => 'hari@techblogs.com', 'password' => bcrypt('TechvBlogs@123')],
                ['name' => 'imran', 'email' => 'imran@tecvblogs.com', 'password' => bcrypt('Guest@456')],
                ['name' => 'jasim', 'email' => 'jasim@tehvblogs.com', 'password' => bcrypt('Account@789')],
                ['name' => 'karan', 'email' => 'karan@tehvblogs.com', 'password' => bcrypt('Account@789')],

            ];

            User::insert($createMultipleUsers);
        }
    
}
