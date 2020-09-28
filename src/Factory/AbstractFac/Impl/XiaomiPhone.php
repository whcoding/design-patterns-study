<?php

class XiaomiPhone implements IPhoneLogic
{
    public function start()
    {
        return "小米手机开机";
    }

    public function shutdown()
    {
        return "小米手机关机";
    }

    public function callup()
    {
       return "小米手机 打电话";
    }

    public function sendSMS()
    {
        return "小米手机 发短信";
    }

}