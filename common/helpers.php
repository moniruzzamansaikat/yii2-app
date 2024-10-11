<?php

use app\models\GeneralSetting;

if (!function_exists('isActive')) {
    function isActive($url)
    {
        return Yii::$app->request->url == $url ? 'active' : '';
    }
}

if (!function_exists('generalSetting')) {
    function generalSetting()
    {
        $cache = Yii::$app->cache;
        $key = 'generalSetting';
        $duration = 31536000; // 1 year in seconds
        $generalSetting = $cache->get($key);
        if ($generalSetting === false) {
            $generalSetting = GeneralSetting::find()->one();
            $cache->set($key, $generalSetting, $duration);
        }
        return $generalSetting;
    }
}
