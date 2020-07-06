<?php


namespace App\JsonRpc;


Interface BrokerServiceInterface
{
    public function getBroker(int $brokerId):int;
}