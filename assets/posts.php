<h1 class="h1"> <?
    if ( isset($_GET[o]) )
    {
        echo '<i class="far fa-file-alt"></i> Все мои статьи: ';
    }
    else
    {
        echo '<i class="far fa-clock"></i>  Недавние статьи:';
    }
?> </h1>
<div class="all_motivators">
    <?
        
        if ( isset($_GET['page']) )
        {
            $page = $_GET['page'];
        }
        else
        {
            $page = 1;
        }
    
        $page_start_from_post = ($page - 1) * 6;
        $get_all_posts = mysqli_query($connection, "SELECT * FROM posts_blog WHERE id > $page_start_from_post ORDER BY id DESC LIMIT 6");
    
        for ( $i = 0; $i < mysqli_num_rows($get_all_posts); $i++ )
        {
            $posts = mysqli_fetch_array($get_all_posts);
            $id = $posts['id'];
            $image = $posts['image'];
            $text = nl2br($posts['text']);
            $likes = $posts['likes'];
            $views = $posts['views'];
            
            ?>
                <div class="motivators">
                    <img src="images/motivators/<? echo $image; ?>">
                    <p class="text-motivator short-text">
                       <? echo $text; ?>
                    </p>
                    <p class="text-motivator full-text">
                       <? echo $text; ?>
                    </p>
                    <a href="#" class="readmore">ЧИТАТЬ СТАТЬЮ ПОЛНОСТЬЮ</a>
                </div>
            <?
        }
    
    ?>
    
</div>