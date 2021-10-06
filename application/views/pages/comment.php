
<div class="container text-white">
    <div id="content" class="row mx-auto">
        <div>
            <form method="POST" action="<?php echo base_url(); ?>comment/add">
                <div class="form-group row m-3">
                    <label for="username" class="col-sm-2 col-form-label text-white">Username</label>
                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control" id="username" value="">
                    </div>
                </div>
                <div class="form-group row m-3">
                    <label for="message" class="col-sm-2 col-form-label  text-white">Message</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="body" rows="5" name="message"></textarea>
                    </div>
                </div>
                <div class="m-3">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
            </form>
        </div>
        <div class="mb-3">
            <h3 class="text-white">Comments: </h3>
            <?php foreach($comments as $comment) : ?>
                <div class="row text-white">
                    <div class="col-4 d-flex justify-content-end">
                        <?php echo $comment->username ?> :
                    </div>
                    <div class="col-8">
                        <?php echo $comment->message ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php
            function function_alert($message) {
                echo "<script>alert('$message');</script>";
            }
            if (!is_null($message))
                function_alert($message);
        ?>
    </div>
</div>