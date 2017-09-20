<?php
/**
 * Created by 大师兄
 * 派系: 神秘剑派
 * 技能: zxc秒杀
 * Date: 2017/9/20
 * Time: 11:21
 * QQ:  997823131
 */
class atestControl extends BaseHomeControl{
    public function __construct(){
        parent::__construct();
    }
    public function indexOp(){
//        echo 'ddd';
//          die;
        /*$redis = new Redis();
        $redis->connect("127.0.0.1",6379);
        $redis->set('ddd','aaa');
        $res = $redis->get('ddd');
        $mykey = $redis->get('myKey');
        $list = $redis->getKeys("*");*/

        $cache = Cache::connect('redis');
        $cache->set('test','hello world');
        $cache->set("ceshi",'ceshi');
        echo $cache->get('test');
        echo $cache->get('ceshi');

    }
    public function testOp(){
        $cache = Cache::getInstance();
        echo $cache->get('test');
        echo $cache->get('ceshi');

    }
}