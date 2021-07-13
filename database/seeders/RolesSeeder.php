<?php

namespace Database\Seeders;
namespace Database\Seeders\Hash;

use App\Models\user;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = Role::create(['name' => 'admin']);
        $admin = Role::create(['name' => 'stafHrd']);
        $admin = Role::create(['name' => 'karyawan']);
     
    }
}
