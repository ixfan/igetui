<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/26 0026
 * Time: 20:03
 */
namespace V5DJ\Push\IGeTui\Providers;

use Illuminate\Support\ServiceProvider;

class IGeTuiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        parent::boot();
        //载入个推sdk
        require_once __DIR__ . '/../../lib/IGt.Push.php';
        require_once __DIR__ . '/../../lib/igetui/IGt.AppMessage.php';
        require_once __DIR__ . '/../../lib/igetui/IGt.APNPayload.php';
        require_once __DIR__ . '/../../lib/igetui/template/IGt.BaseTemplate.php';
        require_once __DIR__ . '/../../lib/IGt.Batch.php';
        require_once __DIR__ . '/../../lib/igetui/utils/AppConditions.php';
    }
}