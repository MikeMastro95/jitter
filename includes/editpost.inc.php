<?php
    include 'db.inc.php';

    //Check for an edit
    if(isset($_POST['editpost'])) {
        //Get the form data
        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
        $body = mysqli_real_escape_string($conn, $_POST['submitbody']);

        //Check if the field is empty
        if(empty($body)) {
            header("Location: ../index.php?error=emptyfields");
        } else {
            $query = "UPDATE posts SET body='$body' WHERE id = {$update_id}";
        }
        if(mysqli_query($conn, $query)) {
            header("Location: ../index.php");
        } else {
            echo 'ERROR: ' . mysqli_error($conn);
        }
    //If the user gets to the page without submitting the form it returns them to the index
    } else {
        header("Location: ../index.php");
        exit();
    }
