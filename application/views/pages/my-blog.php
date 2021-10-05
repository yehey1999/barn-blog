
<div class="container">
	<div id="content" class="row mx-auto">
        <div id="side-content" class="col-md-4 order-md-1 order-2 p-3 m-0">
            <div class="d-flex justify-content-end">
                <div class="text-white" style="cursor: pointer;" data-toggle="modal" data-target="#create-blog-modal">
                    Add
                </div>
            </div>

            <p class="title title-h3">Blogs</p>
            <ul class="default-line-height m-0 p-0 list-unstyled">
                <?php foreach($blogs as $blog) : ?>
                    <div class="mt-3">
                        <li?>
                            <a class="
                                <?php if (!is_null($current_blog)) {
                                            if ($current_blog->id == $blog->id) 
                                                echo "text-warning";} ?>" 
                                href="<?php echo base_url()."my-blog/".$blog->id; ?>"><?php echo $blog->title?>
                            </a>
                        </li>
                        <div>
                            <div data-toggle="modal" class="text-white" data-target="<?php echo "#edit-blog-modal".$blog->id ?>" style="cursor: pointer">Edit</div>
                            <div data-toggle="modal" class="text-white" data-target="<?php echo "#delete-blog-modal".$blog->id ?>" style="cursor: pointer">Delete</div>
                        </div>
                    </div>

                    <!-- Create Blog Modal -->
                    <div class="modal fade" id="create-blog-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" action="<?php echo base_url(); ?>my-blog/add">
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="title" name="title" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="genre" class="col-sm-2 col-form-label">Genre</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="genre" name="genres" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="written-by" class="col-sm-2 col-form-label">Written-by</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="written-by" name="written-by" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="body" class="col-sm-2 col-form-label">Content</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="body" rows="3" name="content"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Add Blog</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!-- Create Blog Modal End -->
                    <!-- Edit Blog Modal -->
                    <div class="modal fade" id="<?php echo "edit-blog-modal".$blog->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $blog->title ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" action="<?php echo base_url(); ?>my-blog/update">
                                <div class="modal-body">
                                    <input type="text" class="form-control" hidden id="id" name="id" value="<?php echo $blog->id ?>">
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="title" name="title" value="<?php echo $blog->title ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="genre" class="col-sm-2 col-form-label">Genre</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="genre" name="genres" value="<?php echo $blog->genres ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="written-by" class="col-sm-2 col-form-label">Written-by</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="written-by" name="written-by" value="<?php echo $blog->written_by ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="body" class="col-sm-2 col-form-label">Content</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="body" rows="3" name="content"><?php echo $blog->content ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Update Blog</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!-- Edit Blog Modal End -->
                    <!-- Delete Blog Modal -->
                    <div class="modal fade" id="<?php echo "delete-blog-modal".$blog->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <p class="modal-title" id="exampleModalLabel">Delete: <?php echo $blog->title ?></p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" action="<?php echo base_url(); ?>my-blog/delete">
                                <div class="modal-body">
                                    <input type="text" class="form-control" hidden id="title" name="id" value="<?php echo $blog->id ?>">
                                    Are you sure you want to delete this blog?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete Blog</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!-- Delete Blog Modal End -->
                <?php endforeach; ?>
            </ul>
        </div> 
        <div id="main-content" class="m-0 col-md-8 order-md-2 order-1 pt-3">
            <?php if (is_null($current_blog)) {?>
                <div>Feel free to check my websites.</div>
            <?php } else { ?>
                <div class="d-block">
                    <h6><?php echo $current_blog->title ?></h6>
                    <div>Written by: <?php echo $current_blog->written_by ?></div>
                    <div>Posted on: <?php echo $current_blog->date ?></div>
                    <br>
                    <br>
                    <p class="text-wrap"><?php echo $current_blog->content ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</div>