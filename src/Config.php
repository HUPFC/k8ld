<?php
/**
 * Created by PhpStorm.
 * User: hupeng
 * Date: 2018/4/9
 * Time: 10:51
 */

namespace hupfc\k8ld\src;

/**
 * Class Config
 * @package hupfc\k8ld\src
 * 配置初始化，必须调用Config::setParams  Config::setDomain 其他函数可以不使用
 */
class Config
{
    //客户端类型
    const K8LD =1;


    public static $log_options=[
        'env'=>'prod',
        'map'=>[
            'error','warning','info','debug'
        ],
        'type'=>'file',
        'level'=>['error','warning','info','debug'],
        'file'=>[
            'path'=>__DIR__.'/psr.log'
        ]
    ];

    public static $params = [
        'userip'=>'test',//用户ip
        'clientip'=>'test',//客户端服务器ip
        'clienttype'=>0,//客户端业务类型 1:user.mc 2:联机平台
        'key' => '',//key 密钥
    ];

    public static $domain = [
        'k8'=>[
            'user'=>'domain',
            'upload'=>'domain',
        ]
    ];

    public static function setParams($params){
        self::$params = array_merge(self::$params,$params);
    }

    public static function setLogOptions($options){
        self::$log_options = array_merge(self::$log_options,$options);
    }

    public static function setDomain($domain){
        self::$domain = array_merge(self::$domain,$domain);
    }
}