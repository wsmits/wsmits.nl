<?php

namespace App\Providers;

use App\Models\User;
use App\Notifications\FailedLogin;
use App\Notifications\SuccessfulLogin;
use Illuminate\Auth\Events\Failed;
use Illuminate\Auth\Events\Login;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Notification;

class AuthServiceProvider extends ServiceProvider
{
    protected string $failedEvent = Failed::class;
    protected string $successEvent = Login::class;

    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
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

        $this->registerLoginNotifications();
    }

    private function registerLoginNotifications() {

        $this->app['events']->listen($this->failedEvent, function ($event) {
            if (isset($event->user) && is_a($event->user, Model::class)) {

                Notification::send(User::all(), new FailedLogin($event->user,
                    $this->app['request']->ip(),
                    $this->app['request']->userAgent()
                ));
            }
        });

        $this->app['events']->listen($this->successEvent, function ($event) {
            if (isset($event->user) && is_a($event->user, Model::class)) {
                Notification::send(User::all(), new SuccessfulLogin($event->user,
                    $this->app['request']->ip(),
                    $this->app['request']->userAgent()
                ));
            }
        });

    }

}
