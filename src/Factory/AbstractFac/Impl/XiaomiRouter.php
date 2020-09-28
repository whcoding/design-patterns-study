<?php

namespace AbstractFac\Impl;

use AbstractFac\Contracts\IRouterLogic;

class XiaomiRouter implements IRouterLogic
{
    public function start()
    {
        return "小米路由器开机";
    }

    public function shutdown()
    {
        return "小米路由器关机";
    }

    public function openWifi()
    {
        return "小米路由器打开wifi";
    }

    public function setting()
    {
        return "小米路由器设置参数";
    }

}