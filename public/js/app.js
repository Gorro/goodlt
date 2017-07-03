$(document).ready(function(){
    $('.scrollspy').scrollSpy();
    $(window).scroll(()=>{
        scroll = $(window).scrollTop();
        if(scroll>100){
            $('.menu ul').css({'background':'black'});
            $('.menu ul li').css({'font-size':'1vw'});
            $('.menu ul li img').css({'width':'75'})
        }else{
            $('.menu ul').css({'background':''});                    
            $('.menu ul li').css({'font-size':''});
            $('.menu ul li img').css({'width':''})
        }
    });
    $("#gallery").unitegallery();       
});