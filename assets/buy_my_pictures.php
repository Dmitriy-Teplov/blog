<? if (!isset($connection)) {include '/blog_d/assets/connection.php';} ?>

<div class="page_notation">
<h2> Мои картины </h2>
    <p>
        На этой странице вы сможете просмотреть созданные мной картины .<br>
        Если вам понравится какая-то зарисовка, то вы сможете поставить лайк под понравившейся картинкой. <br>
        Также можна за определённую цену купить понравившуюся картину или заказать себе создание новой.

    </p>
</div>   
<section id="pictures-buy">
      <div class="all_pictures">
            <?
          
                if ( isset($_POST['page']) )
                {
                    $page = $_POST['page'];
                }
                else
                {
                    $page = 1;
                }
                $page_get_id = ($page - 1) * 6;
                
                $pict = mysqli_query($connection, "SELECT * FROM pictures WHERE id > $page_get_id ORDER BY id DESC LIMIT 6");
          
                for ( $i=0; $i < mysqli_num_rows($pict); $i++ )
                {
                    $arr = mysqli_fetch_array($pict);
                    $id = $arr['id'];
                    $image = $arr['image'];
                    $likes = $arr['likes'];
                    $text = $arr['text'];
                    ?>
                    
                    <div class="picture" post-id="<? echo $id; ?>">
                        <div>
                            <img src="/blog_d/images/pictures/<? echo $image; ?>">
                        </div>
                        <div class="text">
                            <b><? echo nl2br($text); ?></b>
                        </div>
                        <div class="buttons_on_pictures_div"><a class="heart">
                        <?
                            if ( isset($_COOKIE['likes-pict']) )
                            {
                                $spl = split(',', $_COOKIE['likes-pict']);
                                for ( $i=0; $i<count($spl); $i++ )
                                {
                                    if ( $spl[$i] == $id )
                                    {
                                        echo '<i class="fas fa-heart"></i>';
                                    }
                                    else
                                    {
                                        echo '<i class="far fa-heart"></i>';
                                    }
                                }
                            }
                            else
                            {
                                echo '<i class="far fa-heart"></i>';
                            }
                            echo '<span>'.$likes.'</span>';
                        ?></a>
                        </div>
                    </div>
                    
                    <?
                }
            ?>
    </div>
</section>