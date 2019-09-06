<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$Vd5pCXmTXlTqYUWNft.KPuwto8BmFqMikmrHAqQDvKgjgF7rPhFwC',
                'remember_token' => null,
                'created_at'     => '2019-09-06 02:26:21',
                'updated_at'     => '2019-09-06 02:26:21',
            ],
        ];

        User::insert($users);
    }
}
