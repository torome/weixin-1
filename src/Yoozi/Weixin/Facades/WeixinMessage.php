<?php namespace Yoozi\Weixin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Yoozi\Weixin\Core\WeixinMessage
 */
class WeixinMessage extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Yoozi\Weixin\Core\WeixinMessage';
    }
}
