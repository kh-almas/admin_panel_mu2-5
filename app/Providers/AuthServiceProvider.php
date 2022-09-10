<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('create_task_category', function ($user){
            return $user == 'create_task_category';
        });

        Gate::define('update_task_category', function ($user){
            return $user == 'update_task_category';
        });

        Gate::define('edit_task_category', function ($user){
            return $user == 'edit_task_category';
        });

        Gate::define('delete_task_category', function ($user){
            return $user == 'delete_task_category';
        });

        Gate::define('create_task', function ($user){
            return $user == 'create_task';
        });

        Gate::define('update_task', function ($user){
            return $user == 'update_task';
        });

        Gate::define('edit_task', function ($user){
            return $user == 'edit_task';
        });

        Gate::define('delete_task', function ($user){
            return $user == 'delete_task';
        });

        Gate::define('upload_image', function ($user){
            return $user == 'upload_image';
        });

        Gate::define('update_image', function ($user){
            return $user == 'update_image';
        });

        Gate::define('edit_image', function ($user){
            return $user == 'edit_image';
        });

        Gate::define('delete_image', function ($user){
            return $user == 'delete_image';
        });

        Gate::define('upload_video', function ($user){
            return $user == 'upload_video';
        });

        Gate::define('update_video', function ($user){
            return $user == 'update_video';
        });

        Gate::define('edit_video', function ($user){
            return $user == 'edit_video';
        });

        Gate::define('delete_video', function ($user){
            return $user == 'delete_video';
        });

        Gate::define('video_note', function ($user){
            return $user == 'video_note';
        });

        Gate::define('delete_video_note', function ($user){
            return $user == 'delete_video_note';
        });

        Gate::define('approve_user', function ($user){
            return $user == 'approve_user';
        });

        Gate::define('update_user', function ($user){
            return $user == 'update_user';
        });

        Gate::define('make_new_user', function ($user){
            return $user == 'make_new_user';
        });

        Gate::define('reset_user_password', function ($user){
            return $user == 'reset_user_password';
        });

        Gate::define('delete_user', function ($user){
            return $user == 'delete_user';
        });

        Gate::define('download_user_information', function ($user){
            return $user == 'download_user_information';
        });

        Gate::define('view_total_user', function ($user){
            return $user == 'view_total_user';
        });

        Gate::define('update_role', function ($user){
            return $user == 'update_role';
        });

        Gate::define('update_role_permission', function ($user){
            return $user == 'update_role_permission';
        });

        Gate::define('view_access_information', function ($user){
            return $user == 'view_access_information';
        });

        Gate::define('delete_access_information', function ($user){
            return $user == 'delete_access_information';
        });

        Gate::define('clear_browser_sessions', function ($user){
            return $user == 'clear_browser_sessions';
        });

        Gate::define('api_permission', function ($user){
            return $user == 'api_permission';
        });

        Gate::define('update_settings', function ($user){
            return $user == 'update_settings';
        });

        Gate::define('permission_for_set_maintenance_mood', function ($user){
            return $user == 'permission_for_set_maintenance_mood';
        });
    }
}
