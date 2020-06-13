<?php

if (isset($_GET['edit_user'])) {
    $the_user_id = $_GET['edit_user'];

    echo $the_user_id;
}


if (isset($_POST['edit_user'])) {


    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_role = $_POST['user_role'];

    // $user_image = $_FILES['image']['name'];
    // $user_image_temp = $_FILES['image']['tmp_name'];

    $username = $_POST['username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    // $post_date = date('d-m-y');


    // move_uploaded_file($user_image_temp, "../images/$user_image");

    $query = "INSERT INTO users(user_firstname, user_lastname, user_role, username, user_email, user_password) ";

    $query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_role}','{$username}','{$user_email}','{$user_password}' ) ";

    $edit_user_query = mysqli_query($connection, $query);


    confirmQuery($edit_user_query);
}

?>


<form action="" method="post" enctype="multipart/form-data">


    <div class="form-group"><label for="user_firstname">First Name</label>
        <input type="text" class="form-control" name="user_firstname" id="user_firstname">
    </div>

    <div class="form-group"><label for="user_lastname">Last Name</label>
        <input type="text" class="form-control" name="user_lastname">
    </div>

    <label for="user_role">Role</label>
    <select name="user_role" id="">
        <option value="subscriber">Select Options</option>
        <option value="admin">admin</option>
        <option value="subscriber">subscriber</option>
    </select>


    <!-- 
<div class="post-group"><label for="user_image">User Image</label>
    <input type="file" class="form-control-file" name="image">
</div> -->

    <div class="form-group"><label for="username">Username</label>
        <input type="text" class="form-control" name="username">
    </div>

    <div class="form-group"><label for="user_email">Email</label>
        <input type="email" class="form-control" name="user_email">
    </div>

    <div class="form-group"><label for="user_password">Password</label>
        <input type="password" class="form-control" name="user_password">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="edit_user" value="Edit User">
    </div>
    </div>

</form>