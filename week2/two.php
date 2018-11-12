<?php
/**
 * Created by PhpStorm.
 * User: 张智彭
 * Date: 2018/11/12
 * Time: 9:09
 */

function get_filetree($path){
    $tree = array();
    foreach(glob($path.'/*') as $single){
        if(is_dir($single)){
            $tree = array_merge($tree,get_filetree($single));
        }
        else{
            $tree[] = $single;
        }
    }
    return $tree;
}
$path = '..';
print_r(get_filetree($path));