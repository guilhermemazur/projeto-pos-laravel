<?php

namespace App\Providers;

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
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
        'App\Events\Clinics\CheckClinicSituationEvent' => [
            'App\Listeners\Clinics\UpdateClinicSituationListener',
        ],
        'App\Events\AttendanceWasRequested' => [
            'App\Listeners\TimeoutAttendanceRequested',
        ],
        'App\Events\AttendanceRefused' => [
            'App\Listeners\DispachCallAfterRefused',
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
    }
}
