<?php

namespace App\Observers;

use App\Jobs\newUserWelcomeJob;
use App\Models\user;
use App\Jobs\passwordUpdateJob;
use App\Notifications\newUserWelcomeNotification;
use App\Notifications\passwordUpdateNotification;

class UserObserver
{
    /**
     * Handle the user "created" event.
     *
     * @param  \App\Models\user  $user
     * @return void
     */
    public function created(user $user)
    {
        //
    }

    /**
     * Handle the user "updated" event.
     *
     * @param  \App\Models\user  $user
     * @return void
     */
    public function updated(user $user)
    {
        if($user->is_welcomed !== 1){
            $user->forceFill([
                'is_welcomed' => 1,
            ])->save();
            newUserWelcomeJob::dispatch($user);
//            $user->notify(new newUserWelcomeNotification($user));
        }
        if($user->isDirty('password')){
            passwordUpdateJob::dispatch($user);
        }
    }

    /**
     * Handle the user "deleted" event.
     *
     * @param  \App\Models\user  $user
     * @return void
     */
    public function deleted(user $user)
    {
        //
    }

    /**
     * Handle the user "restored" event.
     *
     * @param  \App\Models\user  $user
     * @return void
     */
    public function restored(user $user)
    {
        //
    }

    /**
     * Handle the user "force deleted" event.
     *
     * @param  \App\Models\user  $user
     * @return void
     */
    public function forceDeleted(user $user)
    {
        //
    }
}
