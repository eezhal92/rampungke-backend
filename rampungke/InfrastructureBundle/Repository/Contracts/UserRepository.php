<?php

namespace Rampungke\InfrastructureBundle\Repository\Contracts;

interface UserRepository
{
    public function findByEmail($email);
}