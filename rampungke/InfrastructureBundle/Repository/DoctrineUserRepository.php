<?php

namespace Rampungke\InfrastructureBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Rampungke\InfrastructureBundle\Repository\Contracts\UserRepository;

class DoctrineUserRepository extends EntityRepository implements UserRepository
{
    public function findByEmail($email)
    {
        return $this->findBy(['email' => $email]);
    }

}