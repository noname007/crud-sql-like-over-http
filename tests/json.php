<?php
/**
 * Created by PhpStorm.
 * User: yangzhen
 * Date: 2018/6/7
 * Time: 11:07
 */


$input = [
    'select' => [
        'column',
        ['column1', 'column1aliase'],
        '*',
    ],

    'from' => [
        'table1',
        ['table', 'tablealise']
    ],

    'innerjoin' => [
        'table2',
        ['table2', 'table2aliase']
    ],
    'leftjoin' => [
        'table2',
        ['table2', 'table2aliase'],
        'on' => [

        ]
    ],

    'righjoin' => [
        'table2',
        ['table2', 'table2aliase'],
        'on' => [

        ]
    ],
    //expression use prefix epression
    //and or in = !=
    'where' => [
        'and',
        ['or',
         ['=', 'columename', 'zhangsan'],
         ['=', 'columename', 'lisi']],
        ['!=', 'age', '4'],
        ['in', 'class', [1,2,3,4]],
        ['like', 'column']
    ],

    'groupby' => [

    ],

    'having' => [

    ],

    'orderby' => [

    ],
    'limit' => [

    ]
];