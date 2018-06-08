<?php
/**
 * Created by PhpStorm.
 * User: yangzhen
 * Date: 2018/5/25
 * Time: 19:27
 */
namespace soul11201\interfaces;

interface TargetCode
{
    function select();
    function from(string $table, string $alias);
    function join(string $table, string $aliase, array $on);
    function where(array $conditoin, array $param);
    function groupby(array $group_column);
    function orderby(array $order_column);
    function having(array $conditon,array $param);
    function limit(int $limit);
    function offset(int $offset);
}