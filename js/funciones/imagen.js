$(function(){

    $('.img-anuncio').on({
        mouseenter: function(){
            timer = setTimeout(function() {
                $('.canciones').removeClass('d-none');
            }, 240);
        }, 
        mouseleave: function(){
            $('.canciones').addClass('d-none');
            clearTimeout(timer);
        }, 
         
    })
})