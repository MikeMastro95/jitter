<?php
    include 'db.inc.php';
    if(isset($_POST['submitpost'])) {
        $body = $_REQUEST['submitbody'];

        //Check to see if the body is empty, if it's not submit the text to the database
        if(empty($body)) {
            header("Location: ../index.php?error=emptyfields");
        }
        else {
            $query = "INSERT INTO posts(body) VALUES ('$body')";
        }

        //Return to the index after submitting the text to the database
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