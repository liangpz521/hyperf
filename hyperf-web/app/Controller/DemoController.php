<?php


namespace App\Controller;

use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\AutoController;
use App\JsonRpc\UserServiceInterface;
use App\JsonRpc\BrokerServiceInterface;
use App\Amqp\Sender;

/**
 * @AutoController()
 */
class DemoController
{
    /**
     * @Inject()
     * @var UserServiceInterface
     */
    private $userService;

    /**
     * @Inject()
     * @var BrokerServiceInterface
     */
    private $brokerService;

    /**
     * @Inject()
     * @var Sender
     */
    private $demoSender;

    public function index()
    {
        $this->demoSender->send(['num'=>100,'broker'=>'李东']);
        $num = $this->userService->add(200, 400);
        return [
            'num' => $num
        ];
    }

    public function broker(){
        $id = $this->brokerService->getBroker(100);
        return ['brokerId'=>$id];
    }
}