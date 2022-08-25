<?php

namespace App\Observers;

use App\Jobs\settingsJob;
use App\Models\Settings;
use App\Models\User;

class settingsOvserver
{
    /**
     * Handle the Settings "created" event.
     *
     * @param  \App\Models\Settings  $settings
     * @return void
     */
    public function created(Settings $settings)
    {
        //
    }

    /**
     * Handle the Settings "updated" event.
     *
     * @param  \App\Models\Settings  $settings
     * @return void
     */
    public function updated(Settings $settings)
    {
//        if($settings->isDirty('storage_limit'))
//        {
//            $lt = Settings::where('id',1)->firstOrFail();
//            $limit = $lt->storage_limit;
//            $users = User::all();
//            settingsJob::dispatch($limit,$users);
//        }
    }

    /**
     * Handle the Settings "deleted" event.
     *
     * @param  \App\Models\Settings  $settings
     * @return void
     */
    public function deleted(Settings $settings)
    {
        //
    }

    /**
     * Handle the Settings "restored" event.
     *
     * @param  \App\Models\Settings  $settings
     * @return void
     */
    public function restored(Settings $settings)
    {
        //
    }

    /**
     * Handle the Settings "force deleted" event.
     *
     * @param  \App\Models\Settings  $settings
     * @return void
     */
    public function forceDeleted(Settings $settings)
    {
        //
    }
}
