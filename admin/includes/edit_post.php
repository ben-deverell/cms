<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" class="form-control" name="title">
    </div>

    <div class="form-group"><label for="post_category">Post Category Id</label>
        <input type="text" class="form-control" name="post_category_id">
    </div>

    <div class="form-group"><label for="author">Post Author</label>
        <input type="text" class="form-control" name="author" id="author">
    </div>

    <div class="form-group"><label for="post_status">Post Status</label>
        <input type="text" class="form-control" name="post_status">
    </div>


    <div class="post-group"><label for="post_image">Post Image</label>
        <input type="file" name="image">
    </div>

    <div class="form-group"><label for="post_tags">Post Tags</label>
        <input type="text" class="form-control" name="post_tags">
    </div>

    <div class="form-group">
        <label for="post_comment">Post Content</label>
        <textarea class="form-control" name="post_comment" id="" cols="30" rows="10">
        </textarea>

    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
    </div>

</form>