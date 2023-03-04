<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creamos tres usuarios de ejemplo
        User::create([
            'name' => 'Jesús Quintana Esquiliche',
            'email' => 'jesquiliche@gmail.com',
            'password' => Hash::make('3912481Bb'),
        ]);

        User::create([
            'name' => 'Jesús Quintana',
            'email' => 'jesquiliche@hotmail.com',
            'password' => Hash::make('3912481Bb'),
        ]);

        User::create([
            'name' => 'Usuario 2',
            'email' => 'usuario2@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Usuario 3',
            'email' => 'usuario3@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
