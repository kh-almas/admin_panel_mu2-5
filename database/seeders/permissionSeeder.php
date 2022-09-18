<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class permissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *22
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => 'Task category',
            'permission' => 'task_category',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Update user task category by admin',
            'permission' => 'update_user_task_category_by_admin',
        ]);
        DB::table('permissions')->insert([
            'name' => 'task',
            'permission' => 'task',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Update user task by admin',
            'permission' => 'update_user_task_by_admin',
        ]);


        DB::table('permissions')->insert([
            'name' => 'Image gallery',
            'permission' => 'image_gallery',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Update user image by admin',
            'permission' => 'update_user_image_by_admin',
        ]);


        DB::table('permissions')->insert([
            'name' => 'Video gallery',
            'permission' => 'video_gallery',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Update user video by admin',
            'permission' => 'update_user_video_by_admin',
        ]);


        DB::table('permissions')->insert([
            'name' => 'Approve user',
            'permission' => 'approve_user',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Update user',
            'permission' => 'update_user',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Update user role',
            'permission' => 'update_user_role',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Make new user',
            'permission' => 'make_new_user',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Download user information',
            'permission' => 'download_user_information',
        ]);
        DB::table('permissions')->insert([
            'name' => 'User access',
            'permission' => 'user_access',
        ]);


        DB::table('permissions')->insert([
            'name' => 'Update role',
            'permission' => 'update_role',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Update role permission',
            'permission' => 'update_role_permission',
        ]);


        DB::table('permissions')->insert([
            'name' => 'View access information',
            'permission' => 'view_access_information',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete access information',
            'permission' => 'delete_access_information',
        ]);


        DB::table('permissions')->insert([
            'name' => 'Api permission',
            'permission' => 'api_permission',
        ]);
        DB::table('permissions')->insert([
            'name' => 'website settings',
            'permission' => 'web_settings',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Maintenance mood permission',
            'permission' => 'permission_for_set_maintenance_mood',
        ]);
    }
}
