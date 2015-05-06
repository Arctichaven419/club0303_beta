<?php
    //  GLOBAL VARIABLES
        //  THEPODCAST
        $currentSeason = "1";
        $totalSeasons = "1";
        
        //  MYSQL CONNECTION
        $connServerName = "localhost";
        $connUserName = "root";
        $connPassword = "shanesorensen";
        $connDatabase = "sm_club0303_01";
        
        // MYSQL QUERY & CHECK CONNECTION
        $conn = mysqli_connect($connServerName, $connUserName, $connPassword, $connDatabase);
        if (!$conn) {
            die("There was an error when connecting to the database. Please contact the webmaster with error:" . mysqli_connect_error());
        }
        $sqlLatestBlogPosts = "SELECT * FROM suku_blog_posts ORDER BY id DESC LIMIT 5";
        $sqlRecentBlogPost = "SELECT * FROM suku_blog_posts ORDER BY id DESC LIMIT 1";
        $sqlRecentVideoPosts = "SELECT * FROM suku_blog_posts WHERE post_type='Video' ORDER BY id DESC";
        $sqlLatestThePodcastPosts = "SELECT * FROM suku_thepodcast_posts WHERE season='$currentSeason' ORDER BY id DESC";
        $queryLatestBlogPosts = $conn->query($sqlLatestBlogPosts);
        $queryRecentBlogPost = $conn->query($sqlRecentBlogPost);
        $queryRecentVideoPosts = $conn->query($sqlRecentVideoPosts);
        $queryLatestThePodcastPosts = $conn->query($sqlLatestThePodcastPosts);
        
?>