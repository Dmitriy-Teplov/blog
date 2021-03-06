<?
    
    if ( !isset($connection) )
    {
        include 'connection.php';
    }
    
    if ( isset($_POST['value']) and isset($_POST['value']) !== '' )
    {
        $search_text = '%'.$_POST['value'].'%';
        $get_post_from_db = mysqli_query($connection, "SELECT * FROM posts_blog WHERE text LIKE '$search_text' ORDER BY id DESC");
        
        if ( mysqli_num_rows($get_post_from_db) > 0 )
        {
            echo '<div class="all_motivators">';
            for ( $i=0; $i < mysqli_num_rows($get_post_from_db); $i++ )
            {
                $arr = mysqli_fetch_array($get_post_from_db);
                $image = $arr['image'];
                $text = nl2br($arr['text']);
                
                echo '
                    <div class="motivators">
                        <img src="images/motivators/'.$image.'">
                        <p class="text-motivator short-text">
                            '.$text.'
                        </p>
                        <p class="text-motivator full-text">
                            '.$text.'
                        </p>
                        <a href="#" class="readmore">ЧИТАТЬ СТАТЬЮ ПОЛНОСТЬЮ</a>
                    </div>
                ';
            }
            echo '</div>';
        }
        else
        {
            echo '<h1 style="color: white">Статьи не найдены.</h1>';
            $_POST['value'] = '';
            ?>
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

                    $page_start_from_post = ($page - 1) * 10;
                    $get_all_posts = mysqli_query($connection, "SELECT * FROM posts_blog WHERE id > $page_start_from_post ORDER BY id DESC LIMIT 10");

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
                                    <b><? echo $text; ?></b>
                                </p>
                                <p class="text-motivator full-text">
                                    <b><? echo $text; ?></b>
                                </p>
                                <a href="#" class="readmore">ЧИТАТЬ СТАТЬЮ ПОЛНОСТЬЮ</a>
                            </div>
                        <?
                    }

                ?>

            </div> <?
        }
    }
    else if ( isset($_POST['value']) and isset($_POST['value']) == '' )
    {
        header("location: {$_POST['loc']}");
    }
?>