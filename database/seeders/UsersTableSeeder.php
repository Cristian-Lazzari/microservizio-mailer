<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    
    public function run()
    {
      
      $name = 'Cristian';
      $email = 'cristian.lazzari.cl@gmail.com';
      $password = Hash::make(env('SEEDER_USER_PASSWORD'));

      // $name = "Cristian";
      // $email = "cristian@gmail.com";;
      // $password = Hash::make('12345678');


      // Inserisci l'utente nel database
      DB::table('users')->insert([
          'name' => $name,
          'email' => $email,
          'password' => $password,
      ]);
    }
    
}
