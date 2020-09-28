<?php



class HuaweiPhone implements IPhoneLogic
{
    public function start()
    {
        return "华为手机开机";
    }

    public function shutdown()
    {
        return "华为手机关机";
    }

    public function callup()
    {
       return "华为手机 打电话";
    }

    public function sendSMS()
    {
        return "华为手机 发短信";
    }
}