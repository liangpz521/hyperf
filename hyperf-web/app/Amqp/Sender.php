<?php
/**
 * Created by PhpStorm.
 * User: eboss
 * Date: 7/8/20
 * Time: 4:51 PM
 */

namespace App\Amqp;
use Hyperf\Amqp\Producer;
use App\Amqp\Producer\DemoProducer;
use Hyperf\Utils\ApplicationContext;



class Sender
{
    public function send($data){
        $message = new DemoProducer(1);
        $producer = ApplicationContext::getContainer()->get(Producer::class);
        $result = $producer->produce($message);
    }
}