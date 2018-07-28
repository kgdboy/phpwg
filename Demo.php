<?php
/**
 * @Author: MARK_W
 * @Date:   2018-07-18 00:25:36
 * @Last Modified by:   MARK_W
 * @Last Modified time: 2018-07-18 00:30:43
 */
class Demo{
    static function  method(){
        echo "3";
    }
}
$d = new Demo();
echo $d->method();
echo Demo::method();