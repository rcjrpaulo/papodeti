<?php

use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Hash;

    class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'is_admin' => 1,
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ]);

        // Create a single App\Models\User instance...
        $user = factory(App\Models\User::class)->create([
            'is_admin' => 0,
            'password' => Hash::make('admin'),
        ]);

        // Create three App\Models\User instances...
        $users = factory(App\Models\User::class, 10)->create([
            'password' => Hash::make('admin'),
        ]);
    }
}
