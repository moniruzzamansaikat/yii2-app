<?php 

if (!function_exists('isActive')) {
    function isActive($url) {
        return Yii::$app->request->url == $url ? 'active' : '';
    }
}