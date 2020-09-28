<?php



/**
 * 路由器产品接口
 * Interface IRouterLogic
 * @package AbstractFac\Contracts
 */
interface IRouterLogic
{
    public function start();

    public function shutdown();

    public function openWifi();

    public function setting();
}