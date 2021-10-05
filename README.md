# barn-blog
 
#### Note: 
    In the application/config/routes.php

    $route['default_controller'] = 'Home/index'; 
    default controller means when you try to access localhost/barn-blog, it will read the Home(class)/index(function) controller
   
    $route['my-blog/:num'] = 'MyBlog/index';
    $route['my-blog'] = 'MyBlog/index'; 
    
    $route['photo-gallery'] = 'PhotoGallery/index';
    $route['favorite-sites'] = 'FavoriteSites/index'; 
    $route['contact-me'] = 'ContactMe/index'; 
    
    $route['my-blog/add'] = 'MyBlog/addBlog'; 
    $route['my-blog/update'] = 'MyBlog/updateBlog'; 
    $route['my-blog/delete'] = 'MyBlog/deleteBlog'; 
    

I've update the route to easy track and read the urls of the website pages.  <br>

ex. <br>
localhost/barn-blog/ -> display/call the applications/controller/Home(class)/index(function) <br>
localhost/barn-blog/photo-gallery -> display/call the applications/controller/PhotoGallery(class)/index(function) <br>
<?php echo base_url(); ?>favorite-sites  -> display/call the applications/controller/FavoriteSites(class)/index(function) <br>


#### Note: 
    In the application/config/config.php <br>

/*** config.php content start ***/

$config['base_url'] = 'http://localhost/barn-blog'; </br>

/*** config.php content end ***/

Make sure the base_url is correct <br>


#### Note: 
    I've also attached the barn.sql
