<?php

namespace Rampungke\InfrastructureBundle\DoctrineJWT\Providers;

use Tymon\JWTAuth\Providers\User\Illuminate;
use Tymon\JWTAuth\Providers\User\UserInterface;

/**
 * Author: @eezhal92
 * Class DoctrineUserAdapter
 * @package JWTDoctrine\Providers
 */
class DoctrineUserAdapter implements UserInterface
{

    public function getBy($key, $value)
    {
        // TODO: Implement getBy() method.
    }

}