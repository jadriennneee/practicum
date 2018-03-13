$(window).on('scroll', function(){
    if($(window).scrollTop()){
        $('.bg-light').addClass('nav-collapse');
    }
    else{
        $('.bg-light').removeClass('nav-collapse');
    }
});