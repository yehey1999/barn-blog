# barn-blog
 
#### Note: 
    In the application/config/routes.php

/*** routes.php content start ***/
    $route['default_controller'] = 'Home/index'; <br>
    <br>    
    $route['my-blog/:num'] = 'MyBlog/index'; <br>
    $route['my-blog'] = 'MyBlog/index'; <br>
    <br>
    $route['photo-gallery'] = 'PhotoGallery/index'; <br>
    $route['favorite-sites'] = 'FavoriteSites/index'; <br>
    $route['contact-me'] = 'ContactMe/index'; <br>
    <br>
    $route['my-blog/add'] = 'MyBlog/addBlog'; <br>
    $route['my-blog/update'] = 'MyBlog/updateBlog'; <br>
    $route['my-blog/delete'] = 'MyBlog/deleteBlog'; <br>
    <br>
/*** routes.php content end ***/

I've update the route to easy track and read the urls of the website pages.  <br>

ex. <br>
localhost/barn-blog/ -> display the applications/controller/Home(class).index(function) <br>
localhost/barn-blog/photo-gallery -> display the applications/controller/PhotoGallery(class).index(function) <br>



#### Note: 
    In the application/config/config.php <br>

/*** config.php content start ***/

$config['base_url'] = 'http://localhost/barn-blog'; </br>

/*** config.php content end ***/

Make sure the base_url is correct
