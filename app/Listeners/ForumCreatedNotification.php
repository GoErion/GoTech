<?php

namespace App\Listeners;

use App\Events\ForumCreated;
use App\Jobs\ForumProcess;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ForumCreatedNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     */
    public function handle(ForumCreated $event): void
    {
        ForumProcess::dispatch($event);
    }
}
