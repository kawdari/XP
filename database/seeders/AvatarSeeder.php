<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
 
    public function run()
    {
    
        DB::table('avatars')->insert(
            [
                [
                    'name' => 'Avatar1',
                    'src' => 'seeder2.jpeg',
                ],
                [
                    'name' => 'Avatar2',
                    'src' => 'seeder3.jpeg',
                ],
                [
                    'name' => 'Avatar3',
                    'src' => 'seeder4.jpeg',
                ],
            ]
        );
    
    }
    
}
