<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'dashboard',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'permission-list',
            'permission-create',
            'permission-edit',
            'permission-delete',
            'admin-list',
            'admin-create',
            'admin-edit',
            'admin-delete',
            'event-list',
            'event-create',
            'event-edit',
            'event-delete',

        ];

        foreach ($data as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
