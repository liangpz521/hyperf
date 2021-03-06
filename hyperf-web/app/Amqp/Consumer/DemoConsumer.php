<?php

declare(strict_types=1);

namespace App\Amqp\Consumer;

use Hyperf\Amqp\Result;
use Hyperf\Amqp\Annotation\Consumer;
use Hyperf\Amqp\Message\ConsumerMessage;
use PhpAmqpLib\Message\AMQPMessage;

/**
 * 此处暂且不用  API端是生产提供者  微服务端实现消费
 * @@Consumer(exchange="broker", routingKey="broker", queue="broker-web", name ="DemoConsumer", nums=1)
 */
class DemoConsumer extends ConsumerMessage
{
    public function consumeMessage($data, AMQPMessage $message): string
    {
        var_dump($data);
        return Result::ACK;
    }
}
