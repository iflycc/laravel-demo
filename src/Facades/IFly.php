<?php
/**
 * Created by PhpStorm.
 * User: iflycc
 * Date: 2019/7/25
 * Time: 10:49
 */

namespace IFly\JustDemo\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class IFly
 * @package IFly\JustDemo\Facades
 *
 * @method static \IFly\JustDemo\IFly npc(string $msg)
 */
class IFly extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return "IFly";
    }
}