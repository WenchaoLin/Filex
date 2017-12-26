<?php

return [
    [
        //配置唯一标识
        'name'    => 'root_dir',
        //显示的标题
        'title'   => '根目录地址(注意读权限)',
        //类型
        'type'    => 'string',
        //数据字典
        'content' => [
        ],
        //值
        'value'   => './',
        //验证规则 
        'rule'    => 'required',
        //错误消息
        'msg'     => '',
        //提示消息
        'tip'     => '',
        //成功消息
        'ok'      => '',
        //扩展信息
        'extend'  => ''
    ],
    [
        'name'    => 'ix_height',
        'title'   => '框架高度',
        'type'    => 'number',
        'content' => [
        ],
        'value'   => '500',
        'rule'    => 'required',
        'msg'     => '',
        'tip'     => '',
        'ok'      => '',
        'extend'  => ''
    ],
];
