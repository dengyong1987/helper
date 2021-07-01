<?php
/**
 * author: Dee
 * date: 2021/7/1
 * version: 1.0
 */

namespace dengyong\helper;

/**
 *正则
 */
class RegularValidator
{
    /**
     * 逗号间隔 1,2,3,4
     *
     * @param string $string
     *
     * @return bool
     */
    public static function commaAndInt(string $string):bool
    {
        return preg_match('/^\d+(,\d+)*$/', $string);
    }
    
    /**
     * 同时有字符和数字
     *
     * @param string $string
     *
     * @return bool
     */
    public static function letterAndNumber(string $string):bool
    {
        return preg_match('/^(([a-z]+[0-9]+)|([0-9]+[a-z]+))[a-z0-9]*$/i', $string);
    }
    
    /**
     * 是否是日期范围格式
     *
     * @param string $string
     *
     * @return bool
     */
    public static function timeRange(string $string):bool
    {
        return preg_match('/^\d{4}-\d{2}-\d{2}_\d{4}-\d{2}-\d{2}$/', $string);
    }
    
    /**
     * 是否是手机号
     *
     * @param int $mobile
     *
     * @return bool
     */
    public static function mobile(int $mobile):bool
    {
        return preg_match('/^\d{11}$/', $mobile);
    }
}
