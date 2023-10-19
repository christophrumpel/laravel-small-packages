<?php

namespace App\Providers;

use Abraham\TwitterOAuth\TwitterOAuth;
use Illuminate\Support\ServiceProvider;

class TwitterServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(TwitterOAuth::class, function(): TwitterOAuth {
            $twitter = new TwitterOAuth(
                (string) config('services.twitter.consumer_key'),
                (string) config('services.twitter.consumer_secret'),
                (string) config('services.twitter.access_token'),
                (string) config('services.twitter.access_token_secret')
            );

            $twitter->setApiVersion('2');

            return $twitter;
        });
    }
}
