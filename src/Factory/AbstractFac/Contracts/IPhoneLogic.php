<?php



/**
 * 手机产品接口
 * Interface IPhoneLogic
 * @package AbstractFac\Contracts
 */
interface IPhoneLogic
{
    public function start();

    public function shutdown();

    public function callup();

    public function sendSMS();
}