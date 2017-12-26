<?php

namespace addons\fileix;

use app\common\library\Menu;
use think\Addons;

/**
 *  fileix文件管理器
 */
class Fileix extends Addons
{

    /**
     * 插件安装方法
     * @return bool
     */

    public function install()
    {
        $menu = [
            [
                'name'    => 'fileix',
                'title'   => '文件管理',
                'ismenu'  => 1,
                'icon'    => 'fa fa-folder-o',
                'remark'  => '用于管理指定目录下的文件和文件夹，根目录路径请在插件配置中设置',
            ]
        ];
        Menu::create($menu);
        return true;
    }


    /**
     * 插件卸载方法
     * @return bool
     */
    public function uninstall()
    {
        Menu::delete('fileix');
        return true;
    }

}
