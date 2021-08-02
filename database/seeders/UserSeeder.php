<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
        ////creo 10 usuarios
        User::factory()->count(20)->create();

        //factory(App\Models\User::class,10)->create();
        //el usuario pro 
        User::create([
            'name'=>'El Root',
            'last_name'=>'GG',
            'phone'=>'+51 111 111 111',
            'email'=>'el_root@bash.su',
            'password'=>bcrypt('T0d0sV4mos@Mor1r'),
            'class'=>'superadmin'
        ]);
    }
}
