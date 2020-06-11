<?php if (isset($_POST['create_post'])) {

    $post_title = $_POST['title'];
    $post_author = $_POST['author'];
    $post_category_id = $_POST['post_category'];
    $post_status = $_POST['post_status'];

    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];

    $post_tags = $_POST['post_tags'];
    $post_comment = $_POST['post_comment'];
    $post_date = date('d-m-y');
    // $post_comment_count = 4;

    move_uploaded_file($post_image_temp, "../images/$post_image");

    $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_comment, post_tags, post_status) ";

    $query .=
        "VALUES({$post_category_id},'{$post_title}','{$post_author}',now(),'{$post_image}','{$post_comment}','{$post_tags}','{$post_status}' ) ";

    $create_post_query = mysqli_query($connection, $query);


    confirmQuery($create_post_query);
}

?>


<form action="" method="post" enctype="multipart/form-data">


    <div class="form-group"><label for="first_name">First Name</label>
        <input type="text" class="form-control" name="user_firstname" id="user_firstname">
    </div>

    <div class="form-group"><label for="last_name">Last Name</label>
        <input type="text" class="form-control" name="last_name">
    </div>




    <div class="form-group">
        <label for="category">Role</label>
        <select name="user_role" id="">

            <?php

            $query = "SELECT * FROM users";
            $select_user = mysqli_query($connection, $query);

            confirmQuery($select_user);
            while ($row = mysqli_fetch_assoc($select_user)) {
                $user_id = $row['user_id'];
                $user_role = $row['user_role'];
                echo "<option value='$user_id'>{$user_role}</option>";
            }
            ?>
        </select>
    </div>

    <!-- 
    <div class="post-group"><label for="post_image">Post Image</label>
        <input type="file" class="form-control-file" name="image">
    </div> -->

    <div class="form-group"><label for="username">Username</label>
        <input type="text" class="form-control" name="user_name">
    </div>

    <div class="form-group"><label for="user_password">Password</label>
        <input type="password" class="form-control" name="user_password">
    </div>

    </div>




    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="user_password" value="Add User">
    </div>

</form>