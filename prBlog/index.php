<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Blog</title>
</head>
<!-- body -->
<body>
    <!-- header -->
<header>
    <a href="index.php">    
    <h1>Blog</h1>
    </a>    
</header>
<!-- main -->
<main>
    <?php
        // if there is a post id in the url
        if(isset($_GET['post_id'])){
            // get the post id from the url
            $post_id = $_GET['post_id'];
            // get the post from the database
            $post = getPost($post_id);
            // if there is a post
            if($post){
                // display the post
                displayPost($post);
            }
            // if there is no post
            else{
                // display error message
                echo "<p>Post not found.</p>";
            }
        }
        // if there is no post id in the url
        else{
            // get the posts from the database
            $posts = getPosts();
            // if there are posts
            if($posts){
                // display the posts
                displayPosts($posts);
            }
            

    


<nav>

</body>
</html>




