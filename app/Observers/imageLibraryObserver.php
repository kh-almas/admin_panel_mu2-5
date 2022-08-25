<?php

namespace App\Observers;

use App\Models\Imagelibrary;

class imageLibraryObserver
{
    /**
     * Handle the Imagelibrary "created" event.
     *
     * @param  \App\Models\Imagelibrary  $imagelibrary
     * @return void
     */
    public function created(Imagelibrary $imagelibrary)
    {
        //
    }

    /**
     * Handle the Imagelibrary "updated" event.
     *
     * @param  \App\Models\Imagelibrary  $imagelibrary
     * @return void
     */
    public function updated(Imagelibrary $imagelibrary)
    {
        //
    }

    /**
     * Handle the Imagelibrary "deleted" event.
     *
     * @param  \App\Models\Imagelibrary  $imagelibrary
     * @return void
     */
    public function deleted(Imagelibrary $imagelibrary)
    {
        //
    }

    /**
     * Handle the Imagelibrary "restored" event.
     *
     * @param  \App\Models\Imagelibrary  $imagelibrary
     * @return void
     */
    public function restored(Imagelibrary $imagelibrary)
    {
        //
    }

    /**
     * Handle the Imagelibrary "force deleted" event.
     *
     * @param  \App\Models\Imagelibrary  $imagelibrary
     * @return void
     */
    public function forceDeleted(Imagelibrary $imagelibrary)
    {
        //
    }
}
