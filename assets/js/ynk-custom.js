

jQuery(document).ready(function( $ ) {
    
    $('.main-header__mobile-nav-trigger').on('click', function(){
        $('.main-header__primary-wrap, .main-header__mobile-nav-trigger').toggleClass('show-nav');
    });
    
});