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