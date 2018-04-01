//прелоудер
$(window).ready(function () {
    setTimeout(function () {
        var preloader = $('.preloader');
        if ( !preloader.hasClass('hide') )
        {
            preloader.addClass('hide');
        }
    }, 1300);
});

//поиск по сайту
$(function () {
    $('nav ul li a.search section.search').hide();
    
    const html = $("content").html(), head = $("content h1.h1");
    var checkedSearch = false;
    $("nav ul li a.search").click(function (e) {e.preventDefault()});
    $("nav ul li a.search span").click(function(e){
        e.preventDefault();
        checkedSearch = !checkedSearch;
        if (checkedSearch == true) {
            $(this).next("section.search").stop().slideDown(1000);
            $(this).css('color', 'lawngreen');
            $("ul.menu").css('transition', 'all 1s ease-in-out').addClass('hide');
            $("nav ul li a.search section.search input").on("keyup change paste", function (e) {
                var txtData = $("nav ul li a.search section.search input").val();
                if ( $(this).val() !== '' && $(this).val() !== ' ' ) {
                    $.post('/blog_d/assets/find_post.php',{value: txtData}, function(data) {
                        $("content").html(data);
                        eachPost($("content .motivators"));
                    });
                } else {
                    $('content').html(html);
                    eachPost($("content .motivators"));
                }
            });
        } else {
            var th = $(this).next("section.search");
            $(this).next("section.search").stop().slideUp(1000);
            $(this).css('color', '');
            $("ul.menu").removeClass('hide');
        }
        
    });
    
    var
        readMoreButton = $('content a.readmore'),
        motivators = $('content .motivators');
    
    eachPost($('content .motivators'));
    
    $('#window-post .background').click(function () {
        $('#window-post').addClass('hide');
        $('body').css({
            'margin-right': '0',
            'overflow': 'auto'
        });
        $('header').css('width', '100%');
    });
    
    $(".all-pictures a.heart").click(function (e) {
        e.preventDefault();
        $(this).find('i').toggleClass('fas far');
        var likespict = $.cookie('likes-pict');
        var p = $(this).parent();
        if ( likespict ) {
            var spl = likespict.split(',');
            $.each(spl, function () {
                if ( this == p.attr('post-id') ) {
                    spl[spl.indexOf(this)] = null;
                }
                $.post('/blog_d/assets/likes.php', {value: -1}, function () {
                    p.find('a span').text(+ p.find('a span').text() - 1);
                });
            });
            $.cookie('likes-pict', spl.join(','));
        } else {
            $.cookie('likes-pict', [p.attr('post-id')].join(','));
            $.post('/blog_d/assets/likes.php', {value: +1}, function () {
                p.find('a span').text( 0 + p.find('a span').text() + 1);
            });
        }
    });
    
    
//    для всех постов обрезать текст и кнопка "читать статью полностью"
        function eachPost (el) {
            el.each(function () {
                cutPostsText(this);
            });
            $('content a.readmore').click(function (e) {
                readmore(e, this);
            });
        }
//обрезание текста статьи
        function cutPostsText (el) {
            if ( $(el).find('.short-text').html().length > 350 ) {
                var
                    txt = $(el).find('.short-text').html(),
                    slicedText = txt.slice(0, 300);
                $(el).find('.short-text').html(slicedText.slice(0, slicedText.lastIndexOf('.') + 1) + '..');
            }
        }
    
// кнопка "читать статью полностью"
        function readmore (e, el) {
            e.preventDefault();
            var parent = $(el).parent();
            $('#window-post').removeClass('hide');
            $('#window-post .container').html('');
            parent.clone().appendTo('#window-post .container');
            $('#window-post .container').find('a.readmore').remove();
            $('#window-post .container').find('p.short-text').remove();
            $('#window-post .container').find('p.full-text').show();
            $('body').css({
                'overflow': 'hidden',
                'margin-right': '10px'
            });
            $('header').css('width', 'calc(100% - 10px)');
        }
    
        
// кнопка вопроса
    $('header a.question').click(function (e) {
        e.preventDefault();
        $('#window-post .container').html('');
        $('header a.question div').clone().css('display', 'block').appendTo('#window-post .container');
        $('#window-post').removeClass('hide');
        
    });
});