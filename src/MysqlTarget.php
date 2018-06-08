<?php
/**
 * Created by PhpStorm.
 * User: yangzhen
 * Date: 2018/6/7
 * Time: 11:02
 */

namespace soul11201;

use soul11201\interfaces\TargetCode;

class MysqlTarget implements TargetCode
{

    function select()
    {
        // TODO: Implement select() method.
    }

    function from(string $table, string $alias)
    {
        // TODO: Implement from() method.
    }

    function join(string $table, string $aliase, array $on)
    {
        // TODO: Implement join() method.
    }

    function where(array $conditoin, array $param)
    {
        // TODO: Implement where() method.
    }

    function groupby(array $group_column)
    {
        // TODO: Implement groupby() method.
    }

    function orderby(array $order_column)
    {
        // TODO: Implement orderby() method.
    }

    function having(array $conditon, array $param)
    {
        // TODO: Implement having() method.
    }

    function limit(int $limit)
    {
        // TODO: Implement limit() method.
    }

    function offset(int $offset)
    {
        // TODO: Implement offset() method.
    }
}