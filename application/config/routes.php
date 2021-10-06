<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home/index';


$route['my-blog/:num'] = 'MyBlog/index';
$route['my-blog'] = 'MyBlog/index';

$route['photo-gallery'] = 'PhotoGallery/index';
$route['favorite-sites'] = 'FavoriteSites/index';

$route['comment'] = 'Comment/index';
$route['comment/add'] = 'Comment/addComment';


$route['my-blog/add'] = 'MyBlog/addBlog';
$route['my-blog/update'] = 'MyBlog/updateBlog';
$route['my-blog/delete'] = 'MyBlog/deleteBlog';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
