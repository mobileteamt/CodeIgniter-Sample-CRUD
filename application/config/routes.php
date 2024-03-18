<?php

$route['posts'] = 'posts';
$route['posts/create'] = 'posts/create';
 
$route['posts/edit/(:any)'] = 'posts/edit/$1';
 
$route['posts/view/(:any)'] = 'posts/view/$1';
$route['posts/(:any)'] = 'posts/view/$1';

?>
