<?php
    require('includes/db.inc.php');

    //Select the database posts and order by the last created
    $query = 'SELECT * FROM posts ORDER BY created_at DESC';

    //Get the result
    $result = mysqli_query($conn, $query);

    //Check how many rows
    $rows = mysqli_num_rows($result); 

    //Fetch the data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //Free the result
    mysqli_free_result($result);

    //Close the connection
    mysqli_close($conn);
    
?>
<?php include 'header.php' ?>
    <!--Logo -->
    <header id="logo">
        <a href="index.php"><img src="img/logo.png" alt="Jitter Logo" /></a>
    </header>

    <!--Create a new Post-->
    <section id="newpost">
        <form action="includes/post.inc.php" method="post">
            <textarea name="submitbody" id="mytextarea"></textarea>
            <input type="submit" name="submitpost" value="JITTER IT!">
        </form>
    </section>

    <!--List the new Posts-->
    <div id="flex">
        <section id="feed">
        <h1>Latest Posts</h1>
        <?php $i=0; foreach($posts as $post) : ?>
            <section>
                <p><?php echo $post['body'];?></p>
                <small><?php echo date('M j, Y g:i A', strtotime($post['created_at']));;?></small>
                <button><a href="editpost.php?id=<?php echo $post['id']; ?>">(edit)</a></button>
                <hr>
            </section>
        <?php $i++; if($i >= 5) {break;};?>
        <?php endforeach; ?>
        </section>

        <!--Create the profile-->
        <section id="profile">
            <img src="img/profile image.png" alt="Profile Picture">
            <h1>JohnDoe74</h1>
            <h3>Total Posts: <span id="totalposts"><?php echo $rows;?></span></h3>
            <p>Name: John Doe</p>
            <p>Email: <a href="#">john@lform.com</a></p>
            <p>Website: <a href="www.lform.com">www.lform.com</a></p>
        </section>
    </div>
<?php include 'footer.php' ?>


