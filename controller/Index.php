<?php

namespace addons\fileix\controller;

use think\addons\Controller;

class Index extends Controller
{

    public function index()
    {
        $this->error("当前插件暂无前台页面,请在配置里添加配置内容");
    }

}

