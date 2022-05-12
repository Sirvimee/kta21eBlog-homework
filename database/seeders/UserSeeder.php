<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name= env('USER_NAME');
        $user->email=env('USER_EMAIL');
        $user->password = bcrypt(env('USER_PASSWORD'));
        $user->save();
    }
}
