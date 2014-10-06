$(function(){
//    var $header = $('.header');
//    $('.main').css('top',$header.height()-50);

// 320
// 480

    var $win = $(window);
    var $header = $('.header');
    var $content = $('.content');
    var $body = $('body');
    var $main = $('.main');
    var $mobilMenu = null;
    var headerHeight = $header.height();
    var menuStatus = 'desktop';
    var scrollStatus = 'full';
    var SCREEN_STATUS_DESKTOP = 0;
    var SCREEN_STATUS_TALBE = 1;
    var SCREEN_STATUS_MOBIL = 2;
    
    var setMenuTables = function () {
        console.log("tables");
        if(scrollStatus !== SCREEN_STATUS_TALBE){
            scrollStatus = SCREEN_STATUS_TALBE;
            $body.addClass('table')
                 .removeClass('mobil');
            removeMobilMenu();
//            $content
//                .addClass('content-tables')
//                .removeClass('content-mobil');
//        
//            $main
//                .addClass('main-tables')
//                .removeClass('main-mobil');
//            $content.css('margin-left',0);
//            $man.css();
        }
    };
    
    var setMenuMobil = function () {
        console.log("mobiles");
        if(scrollStatus !== SCREEN_STATUS_MOBIL) {
            $body.addClass('mobil').removeClass('table');
            
            //crear el menu mobil
            $mobilMenu = $('<a class="btn-menu-mobil sprites mobil_menu">Menu</a>').insertBefore($header.find('.clean'));
//            $content.addClass('content-mobil');
//            $main.addClass('main-mobil');
        }
        scrollStatus = SCREEN_STATUS_MOBIL;
    };
    var removeMobilMenu = function() {
        if($mobilMenu){
            $mobilMenu.remove();
            $mobilMenu = null;
        }
    };
    
    var setMenuDesktop = function () {
        console.log("desktops");
        if(scrollStatus !== SCREEN_STATUS_DESKTOP) {
            scrollStatus = SCREEN_STATUS_DESKTOP;
            $body
                .removeClass('mobil')
                .removeClass('table');
            removeMobilMenu();
//            $content.removeClass('content-tables','content-mobil');
//            $main.removeClass('main-tables','main-mobil');
//            $content.css('margin-left','15em');
        }
        
    };
    
    var setUpMenu = function () {
//        alert(1);
        var winWidth = $win.width();
        if(winWidth>1100){
            setMenuDesktop();
        }else if(winWidth>=480){
            setMenuTables();
            screenStatus= 'table';
        }else{
            setMenuMobil();
        }
//          $('.content').html($win.width());
        
    };
    setUpMenu();
    
    $win.scroll(setUpMenu).resize(setUpMenu);
//    
//    var $minMenu = $('.menuscroll').css({
//            position : 'fixed',
//            width : '100%',
//            top : 0,
//            backgroundColor: 'black',
//            zIndex:30
//        }).addClass('header').hide();
//    $win.scroll(function(e) {
//    var scrollTop = $win.scrollTop();
//    if(scrollTop>=headerHeight){
//        $minMenu.slideDown('slow');
//        
//         console.log($win.width());
//    }else{
//        
//        $minMenu.hide();
//    }
//    
//    }).resize(function(){
//        $win.scroll();
//        headerHeight = $header.height();
//        $('.content').html($win.width());
//        console.log($win.width());
//        if($win.width()<=570){
//            
//        }
//    })
//    ;
});