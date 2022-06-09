<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
//use App\Models\Users;
//use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       // $faker = Faker::create();
        //DB::table('users')->insert([

            DB::table('users')->insert([
            'name' => 'azim anand',
            'email' => 'azim anand@gmail.com',
            'password'=>'123'
        ]);

    }
}
