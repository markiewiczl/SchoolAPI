<?php

namespace App\Resolver;

interface OrderByGenderResolverInterface
{
    public function getStudentsOrderByGender($name): array;
}
