<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'slider-list',
            'slider-delete',
            'slider-create',
            'slider-edit',
            'slider-update',
        ];

        foreach ($permissions as $permission) {
            $has_permision = \Spatie\Permission\Models\Permission::where(['name' => $permission])->first();
            if(is_null($has_permision)){
                 \Spatie\Permission\Models\Permission::create(['name' => $permission, 'guard_name' => 'admin']);
            }
           
        }

    }
}
