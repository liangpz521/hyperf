<?php


namespace App\JsonRpc;


interface UserServiceInterface
{
    public function add(int $a, int $b):int;
}