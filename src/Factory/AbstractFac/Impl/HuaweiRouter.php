<?php



class HuaweiRouter implements IRouterLogic
{
    public function start()
    {
        return "华为路由器开机";
    }

    public function shutdown()
    {
        return "华为路由器关机";
    }

    public function openWifi()
    {
        return "华为路由器打开wifi";
    }

    public function setting()
    {
        return "华为路由器设置参数";
    }

}