<?php

return [
    # 这里是user项目消费者配置
    'consumers' => [
        [
            // name 需与服务提供者的 name 属性相同
            'name' => 'MsgService',
            // 服务接口名，可选，默认值等于 name 配置的值，如果 name 直接定义为接口类则可忽略此行配置，如 name 为字符串则需要配置 service 对应到接口类
            // 注意这里需要 写msg服务接口
            'service' => \App\Rpc\MsgServiceInterface::class,
            // 对应容器对象 ID，可选，默认值等于 service 配置的值，用来定义依赖注入的 key
            'id' => \App\Rpc\MsgServiceInterface::class,
            // 如果没有指定上面的 registry 配置，即为直接对指定的节点进行消费，通过下面的 nodes 参数来配置服务提供者的节点信息
            'nodes' => [
                // 这里的ip是服务提供者的ip 因为docker环境我们填写局域网ip 后面住服务治理会去掉这个配置
                // 不知道写什么ip 通过docker容器命令行 ipaddr 查看 ip
                ['host' => '172.17.0.5', 'port' => 9504],
            ],
        ],
    ],
];