<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user->name = "Imperio Puerquil";
        $user->email = "puercoarana@Imperio.com";
        $user->password = bcrypt('puercoAraña');
        $user->rol = 1;
        $user->save();

    }
}
