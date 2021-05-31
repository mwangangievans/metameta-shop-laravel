<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissionsSeeder::class);

        $user = User::create([
            'name'          => 'Admin',
            'email'         => 'admin@demo.com',
            'password'      => bcrypt('12345678'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user->assignRole('Admin');

        $user2 = User::create([
            'name'          => 'Staff',
            'email'         => 'staff@demo.com',
            'password'      => bcrypt('12345678'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user2->assignRole('Staff');

        $user3 = User::create([
            'name'          => 'Buyer',
            'email'         => 'buyer@demo.com',
            'password'      => bcrypt('12345678'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user3->assignRole('Buyer');


        DB::table('Staffs')->insert([
            [
                'user_id'           => $user2->id,
                'gender'            => 'male',
                'phone'             => '+254798288410',
                'dateofbirth'       => '1997-02-15',
                'address'           => 'Nairobi-00100',
                'created_at'        => date("Y-m-d H:i:s")
            ]
        ]);

        DB::table('buyers')->insert([
            [
                'user_id'           => $user3->id,
                'gender'            => 'male',
                'phone'             => '+254798288410',
                'address'           => 'Nairobi-00100',
                'created_at'        => date("Y-m-d H:i:s")
            ]
        ]);


    }
}
