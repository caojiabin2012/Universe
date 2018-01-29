<?php
/**
 * Created by PhpStorm.
 * User: 明月有色
 * Date: 2018/1/28
 * Time: 下午10:23
 */

namespace App\Http\Middleware;

use Universe\Support\Middleware;
use Universe\Swoole\Http\Request;
use Universe\Swoole\Http\Response;

class CounterMiddleware extends Middleware
{
    /**
     * @param Request $request
     * @param $next
     * @return Request
     */
    public function handle(Request $request, $next)
    {
        if( $request->getUri()=='/' ){
            $request->setUri('/test/one');
            return $request;
        }else{
            return $next($request);
        }
    }
}