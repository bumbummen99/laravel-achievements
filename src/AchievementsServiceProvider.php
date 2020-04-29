<?php

namespace SkyRaptor\Achievements;

use Illuminate\Support\ServiceProvider;
use SkyRaptor\Achievements\Console\AchievementChainMakeCommand;
use SkyRaptor\Achievements\Console\AchievementMakeCommand;
use SkyRaptor\Achievements\Console\LoadAchievementsCommand;

/**
 * Class AchievementsServiceProvider.
 */
class AchievementsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/Migrations');
        if ($this->app->runningInConsole()) {
            $this->commands(
                [
                    AchievementMakeCommand::class,
                    AchievementChainMakeCommand::class,
                    LoadAchievementsCommand::class,
                ]
            );
        }
        $this->app[Achievement::class] = static function ($app) {
            return $app['gstt.achievements.achievement'];
        };
        $this->publishes(
            [
                __DIR__.'/config/achievements.php' => config_path('achievements.php'),
            ],
            'config'
        );
        $this->publishes(
            [
                __DIR__.'/Migrations/0000_00_00_000000_create_achievements_tables.php' => database_path('migrations'),
            ],
            'migrations'
        );
        $this->mergeConfigFrom(__DIR__.'/config/achievements.php', 'achievements');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
