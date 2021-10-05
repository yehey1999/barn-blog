<div id="content" class="row mx-auto">
    <div id="side-content" class="col-md-4 order-md-1 order-2 p-3 m-0">
        <p class="title title-h3">Blogs</p>
        <ul class="default-line-height m-0 p-0 list-unstyled">
            <?php foreach($posts as $post) : ?>
                <li><a href="https://c.tenor.com/VS3vpfFGoWcAAAAC/jose-mari-chan-merry-christmas.gif"><?php echo $post->title?></a></li>
            <?php endforeach; ?>
            
        </ul>
    </div>