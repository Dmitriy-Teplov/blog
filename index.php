<!DOCTYPE html>
<html>
    <head>
        <title>
            Teplov Dmitriy
        </title>
       <link rel="icon" href="/blog_d/images/site_icon.png">
       <link rel="stylesheet" href="css/my_style.css">
    </head>
    <body>
        <? include 'assets/connection.php'; ?>
    <!-- прелоадер -->
        <div id="page-preloader" class="preloader">
           <div class="loader"></div>
           <h2>ПОДОЖДИТЕ</h2>
        </div>
        <div id="window-post" class="hide">
            <div class="container"></div>
            <div class="background"></div>
        </div>
        <wrapper>
           
            <header>    
                      
    <!-- логотип сайта-->          
               <a href="index.php" target="_parent" class="header_button">
                   <div class="logo-div">
                       <img src="images/logo.png" class="logo">
                   </div>
                   <div class="logo_text">Teplov <br> Dmitriy</div>
               </a>
               
    <!-- панель навигации-->
               <nav>
                   <ul class="menu">
                       <li><a href="?o=posts"> ВСЕ СТАТЬИ</a>
        <!-- подменю / выпадающее меню -->               
<!--
                               <ul class="submenu">
                                    <li><a href=#>НОВЫЕ</a></li>
                                    <li><a href=#>Картинки от статей</a></li>
                                    <li><a href=#>Some text 3</a></li>
                                </ul>
-->
                       </li>    
                       <li><a>МОИ УВЛЕЧЕНИЯ</a>
         <!-- подменю / выпадающее меню -->               
                               <ul class="submenu">
                                    <li><a href="?o=my_arts"> Дизайн и эскизы</a></li>
<!--                                    <li><a href="../blog_d/edit_photo.html"> Коррекция фото</a></li>-->
                                    <li><a href="?o=buy_my_pictures"> Мои картины</a></li>
                                </ul> 
                        </li>                              
                       <li><a href="?o=who_am_i"> ОБО МНЕ</a>          
                        </li>     
                   </ul>
               </nav>
               
                <nav>
                   <ul>
             <!-- кнопка поиска-->
                       <li><a href="#" class="search" title="поиск"><span><i class="fas fa-search"></i></span>
                           <section class="search">
                                <input type="text" name="search-input" placeholder="Введите ваш запрос">
                           </section>
                           </a>
                       </li>
            <!-- кнопка вопроса-->           
                       <li><a href="#" class="question" title="помощь"><span><i class="far fa-question-circle"></i></span>
                            
                            <div style="display: none" class="help_sect">
                                <p>
                                    <b class="help"> ПОМОЩЬ</b>
                                     <p>Здравствуйте, вы открыли вкладку "помощь".
                                     Здесь вы сможете разобраться в работе с сайтом.</p>
                                     <p>
                                    <b class="help_punkt">КАК ПЕРЕЙТИ НА ГЛАВНУЮ СТРАНИЦУ ?</b>
                                     Чтобы перейти на главную страницу блога вам достаточно нажать на его логотип в левом верхнем углу экрана.</p>
                                     <p>
                                         <b class="help_punkt">ПОИСК ПО САЙТУ</b>
                                         По-умолчанию поле для поиска по блогу скрыто.
                                        По-этому если вы хотите найти какую-то статью вам нужно:
                                     </p>
                                    <ul>
                                         <li>Нажать на кнопку поиска (лупа в правом верхнем углу)</li>
                                         <li>Когда выпадет поле для поиска введите в него запрос.</li>
                                         <li>Вы найдёте нужную вам статью.</li>
                                         <li>Если вы хотите заново увидеть все статьи, то сотрите содержимое в поле поиска.</li>
                                         <li>Если вы нашли то, что хотели и поиск вам больше не нужен, то кликните по его значку снова и он скроется. </li>
                                     </ul>
                                     <b class="help_punkt">ЧТЕНИЕ СТАТЬИ</b>
                                    <p>На сайте вам показаны статьи, которые я выкладываю. НО вы видите их в компактном режиме. То-есть вы видите только картинку статьи, её заголовок и небольшую часть текста.
                                    Если вас заинтересовала та или иная статья, то быстрей жмите на кнопку "ЧИТАТЬ СТАТЬЮ ПОЛНОСТЬЮ" и погружайтесь в чтение.
                                    Хотите свернуть? Не вопрос. Нажмите на тёмное поле вокруг статьи, то-есть за её пределами. </p>
                                    <p>Если у вас возникли неполадки пишите мне в социальных сетях.</p>
                                </p>
                            </div>
                               
                        </a></li>
                        
            <!-- кнопка настроек-->
                       <li><a href="#" class="settings" title="настройки"><span><i class="fas fa-cog"></i></span></a>
                           <div style="display: none" class="setting_sect">
                               <b class="settings">Settings</b>
                           </div>
                       </li>
                   </ul>
               </nav>
            
            </header>          
            
              
    <!-- мотиваторы -->  
                         
                <content>
                    <?
                        if ( isset($_GET['o']) )
                        {
                            $o = $_GET['o'];
                            include 'assets/'.$o.'.php';
                        }
                        else
                        {
                            include 'assets/posts.php';
                        }
                    ?>        
                </content>
                
                <footer>
                    <div class="button_finder_footer">
                        <a href="https://vk.com/dimazadvornov" class="vk_footer"> <i class="fab fa-vk"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=100014856243325&pnref=friends.search" class="fb_footer"> <i class="fab fa-facebook"> </i></a>
                        <a href="https://www.instagram.com/teplov_dmitriy_/?hl=ru" class="ins_footer"> <i class="fab fa-instagram"> </i></a>
                    </div>
                    <p class="note_in_footer"> © Dmitriy Teplov 2018</p>
                </footer>
                  
                      
            
        </wrapper>
        
        <!--Подключение Javascript, jQuery, FontAwesome-->
        
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/main.js"></script>
    
    </body>    
</html>