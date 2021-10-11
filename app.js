$('.historial').click(function(e){
    e.preventDefault();

    if($('.container_modal').css('display', 'none')){
        $('.container_modal').css('display', 'block')
    }else{
        $('.container_modal').css('display', 'none')
    }
    
});