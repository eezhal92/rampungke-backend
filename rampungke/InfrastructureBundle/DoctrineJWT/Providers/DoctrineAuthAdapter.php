<?php

namespace Rampungke\InfrastructureBundle\DoctrineJWT\Providers;

use Tymon\JWTAuth\Providers\Auth\AuthInterface;

/**
 * Author: @eezhal92
 * Class DoctrineAuthAdapter
 * @package JWTDoctrine\Providers
 */
class DoctrineAuthAdapter implements AuthInterface
{

    public function byCredentials(array $credentials = [])
    {
        // TODO: Implement byCredentials() method.
    }

    public function byId($id)
    {
        // TODO: Implement byId() method.
    }

    public function user()
    {
        // TODO: Implement user() method.
    }

}