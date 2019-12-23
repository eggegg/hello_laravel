<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());


        $user = User::find(1);
        $user->name = 'Summer';
        $user->email = 'summer@example.com';
        $user->password = bcrypt('password');
        $user->is_admin = true;
        $user->save();

    }
}
