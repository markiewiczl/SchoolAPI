<?php

namespace App\Resolver;

interface GetAllStudentsFromClassInterface
{
    public function getAllStudensFromClass(string $name): array;
}
