<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->nama_user = 'Admin';
        $user->username = 'admin';
        $user->password = bcrypt('admin');
        $user->save();
    }
}
