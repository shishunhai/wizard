<?php
/**
 * Wizard
 *
 * @link      https://aicode.cc/
 * @copyright 管宜尧 <mylxsw@aicode.cc>
 */

namespace App\Providers;

use App\Events\CommentCreated;
use App\Events\UserCreated;
use App\Listeners\CommentCreatedListener;
use App\Listeners\UserCreatedListener;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\DocumentCreated'   => [
            'App\Listeners\DocumentCreatedListener',
        ],
        'App\Events\DocumentModified'  => [
            'App\Listeners\DocumentModifiedListener'
        ],
        'App\Events\DocumentRecovered' => [
            'App\Listeners\DocumentRecoveredListener'
        ],
        'App\Events\DocumentDeleted'   => [
            'App\Listeners\DocumentDeletedListener'
        ],
        'App\Events\ProjectCreated'    => [
            'App\Listeners\ProjectCreatedListener'
        ],
        'App\Events\ProjectModified'   => [
            'App\Listeners\ProjectModifiedListener'
        ],
        'App\Events\ProjectDeleted'    => [
            'App\Listeners\ProjectDeletedListener'
        ],
        CommentCreated::class          => [
            CommentCreatedListener::class,
        ],
        UserCreated::class             => [
            UserCreatedListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
