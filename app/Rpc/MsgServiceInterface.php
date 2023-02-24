<?php


namespace App\Rpc;

/**
 * 定义一个消息服务
 *
 * @\Hyperf\RpcServer\Annotation\RpcService(name="MsgService")
 * class MsgService
 */
interface MsgServiceInterface
{
    /**
     * 定义一个发送消息的方法
     *
     * @param string $msg
     * @return string
     */
    public function send(string $msg): string;
}