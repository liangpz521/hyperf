<?php


namespace App\JsonRpc;

use Hyperf\RpcServer\Annotation\RpcService;

/**
 * @RpcService(name="BrokerService",protocol="jsonrpc-http",server="jsonrpc-http",publishTo="consul")
 */
class BrokerService
{
    public function getBroker(int $brokerId):int
    {
        return $brokerId;
    }
}