<?php
return array(
    'news/([a-z]+)/([0-9]+)'   => 'news/view/$1/$2',
    'news'      => 'news/index',
    'addnews'   => 'news/add',
    'products'  => 'product/list',
    'students/(name|surname|father|group|score)/(asc|desc)' => 'student/sort/$1/$2',
    'students'  => 'student/index',
    'editInfo'  => 'student/edit',
    'registery' => 'student/register',
);