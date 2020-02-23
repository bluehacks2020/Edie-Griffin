<?php

    use App\User;
    use Illuminate\Database\Seeder;
    use Illuminate\Database\Eloquent\Model;

    class UsersTableSeeder extends Seeder
    {
        public function run()
        {
            $user = new User;
            $user->name = "ediegriffin";
            $user->email = "ediegriffin@gmail.com";
            $user->password = bcrypt('hackathon20');
            $user->is_admin = true;
            $user->save();
        }
    }