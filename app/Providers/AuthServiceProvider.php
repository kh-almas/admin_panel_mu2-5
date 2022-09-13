<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    public function __construct($app)
    {
        parent::__construct($app);
    }

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
     *22
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('task_category', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'task_category'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('update_user_task_category_by_admin', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'update_user_task_category_by_admin'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('task', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'task'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('update_user_task_by_admin', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'update_user_task_by_admin'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('image_gallery', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'image_gallery'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('update_user_image_by_admin', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'update_user_image_by_admin'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('video_gallery', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'video_gallery'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('update_user_video_from_admin', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'update_user_video_from_admin'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('user_access', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'user_access'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('approve_user', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'approve_user'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('update_user', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'update_user'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('update_user_role', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'update_user_role'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('make_new_user', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'make_new_user'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('reset_user_password', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'reset_user_password'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('delete_user', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'delete_user'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('download_user_information', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'download_user_information'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('update_role', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'update_role'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('update_role_permission', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'update_role_permission'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('view_access_information', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'view_access_information'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('delete_access_information', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'delete_access_information'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('api_permission', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'api_permission'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('web_settings', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'web_settings'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('permission_for_set_maintenance_mood', function (){
            $permissions = session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
            foreach ($permissions as $permission)
            {
                if($permission == 'permission_for_set_maintenance_mood'){
                    return true;
                }
            }
            return false;
        });
    }
}
