<!DOCTYPE html>
<html>
   <link rel="stylesheet" href="css/my_style.css">
    <head>
       <meta charset="utf-8">
        <title>
            Teplov Dmitriy
        </title>
    </head>
    <body>
        <wrapper>
           
            <header>
    <!--кнопка прочее        
              <a href="#">
                 <span> <i class="fas fa-bars"></i> </span> 
              </a>
    --> 
              
    <!-- логотип сайта-->          
               <a href="index.php" target="_parent">
                   <div class="logo-div">
                       <img src="images/logo.png" class="logo">
                   </div>
               </a>
               
    <!-- панель навигации-->
               <nav>
                   <ul class="menu">
                       <li><a href="../blog_d/all_states.html"> ВСЕ СТАТЬИ</a>
                    <!-- подменю / выпадающее меню -->               
                               <ul class="submenu">
                                    <li><a href=#>НОВЫЕ</a></li>
                                    <li><a href=#>Some text 2</a></li>
                                    <li><a href=#>Some text 3</a></li>
                                </ul>
                       </li>    
                       <li><a href="#"> МОИ УСЛУГИ</a>
                    <!-- подменю / выпадающее меню -->               
                               <ul class="submenu">
                                    <li><a href="../blog_d/my_arts.html"> Дизайн и создание эскизов</a></li>
                                    <li><a href="../blog_d/edit_photo.html" class="active"> Коррекция фото</a></li>
                                    <li><a href="../blog_d/buy_my_pictures.html"> Картины на заказ</a></li>
                                </ul> 
                        </li>                              
                       <li><a href="../blog_d/who_am_i.html"> ОБО МНЕ</a>          
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
            <!-- кнопка вопроса-->           
                           <li><a href="#" class="question" title="помощь"><span><i class="far fa-question-circle"></i></span></a></li>   
                       </a></li>
            <!-- кнопка настроек-->
                       <li><a href="#" class="settings" title="настройки"><span><i class="fas fa-cog"></i></span></a></li>
                   </ul>
               </nav>
            
            </header>          
            
              
 
             <footer>
                    <div class="button_finder_footer">
                        <a href="#" class="vk_footer"> <i class="fab fa-vk"></i></a>
                        <a href="#" class="fb_footer"> <i class="fab fa-facebook"> </i></a>
                        <a href="#" class="ins_footer"> <i class="fab fa-instagram"> </i></a>
                    </div>
                </footer>             
                
                  
                      
            
        </wrapper>
        
        <!--Подключение Javascript, jQuery, FontAwesome-->
        
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/main.js"></script>
    
    </body>    
</html>