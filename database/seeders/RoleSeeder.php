<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            [
                "role" => "admin",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "role" => "editor",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "role" => "author",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "role" => "user",
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
    }
}
