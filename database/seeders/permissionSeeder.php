<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class permissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => 'Create task category',
            'permission' => 'create_task_category',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Update task category',
            'permission' => 'update_task_category',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit task category',
            'permission' => 'edit_task_category',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete task category',
            'permission' => 'delete_task_category',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Create task',
            'permission' => 'create_task',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Update task',
            'permission' => 'update_task',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit task',
            'permission' => 'edit_task',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete task',
            'permission' => 'delete_task',
        ]);


        DB::table('permissions')->insert([
            'name' => 'Upload image',
            'permission' => 'upload_image',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Update image',
            'permission' => 'update_image',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit image',
            'permission' => 'edit_image',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete image',
            'permission' => 'delete_image',
        ]);


        DB::table('permissions')->insert([
            'name' => 'Upload video',
            'permission' => 'upload_video',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Update video',
            'permission' => 'update_video',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit video',
            'permission' => 'edit_video',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete video',
            'permission' => 'delete_video',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Video note',
            'permission' => 'video_note',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete video note',
            'permission' => 'delete_video_note',
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
            'name' => 'Make new user',
            'permission' => 'make_new_user',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Reset user password',
            'permission' => 'reset_user_password',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete user',
            'permission' => 'delete_user',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Download user information',
            'permission' => 'download_user_information',
        ]);
        DB::table('permissions')->insert([
            'name' => 'View total user',
            'permission' => 'view_total_user',
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
            'name' => 'Clear browser sessions',
            'permission' => 'clear_browser_sessions',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Api permission',
            'permission' => 'api_permission',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Update settings',
            'permission' => 'update_settings',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Maintenance mood permission',
            'permission' => 'permission_for_set_maintenance_mood',
        ]);
    }
}
