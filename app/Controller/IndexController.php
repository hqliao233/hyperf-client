<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use App\Rpc\MsgServiceInterface;
use Hyperf\Di\Annotation\Inject;

class IndexController extends AbstractController
{
    /**
     * Di 容器注入 详情参考官方文档
     * @Inject()
     * @var MsgServiceInterface
     */
    private $msgService;

    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        $str = $this->msgService->send('给你一条消息');

        return [
            'method' => $method,
            'message' => "Hello {$user}. " . $str,
        ];
    }
}
