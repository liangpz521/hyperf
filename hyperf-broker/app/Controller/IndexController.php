<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;
use App\JsonRpc\UserService;
use Hyperf\Di\Annotation\Inject;
class IndexController extends AbstractController
{
    /**
     * @Inject()
     * @var UserService
     */
    private $userService;
    public function index()
    {
        $num = $this->userService->add(100,100);
        return [
            'method' => $num,
            //'message' => "Hello {$user}.",
        ];
    }
}
