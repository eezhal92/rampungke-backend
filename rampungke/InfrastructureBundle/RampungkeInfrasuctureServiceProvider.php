<?php

namespace Rampungke\InfrastructureBundle;

use Rampungke\Domain\Entity\User;
use Illuminate\Support\ServiceProvider;
use Rampungke\InfrastructureBundle\Repository\DoctrineUserRepository;
use Rampungke\InfrastructureBundle\Repository\Contracts\UserRepository;

/**
 * Class RampungkeInfrasuctureServiceProvider
 * @package Rampungke\InfrastructureBundle
 */
class RampungkeInfrasuctureServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->registerUserRepository();
    }

    /**
     * Bind user repository.
     */
    private function registerUserRepository()
    {
        $this->app->bind(UserRepository::class, function ($app) {
            return new DoctrineUserRepository($app['em'], $app['em']->getClassMetaData(User::class));
        });
    }

}