<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Joel',
            'avatar' => 'uploads/avatars/admin.png',
            'admin' => 1,
            'email' => 'admin@forum.com',
            'password' => bcrypt('joel1994'),
        ]);
    }
}
