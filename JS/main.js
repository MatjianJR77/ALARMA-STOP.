//funcion para cambiar
$(document).ready(function(){
    var checkScrollBar = function(){
        s('.bg-main').css({
            backgroundcolor: $(this)
            .scrollTop() > 1 ?
            'rgd(52. 73, 94, .51' : 'bg-centro'
        })
    }
    $(window).on('load resize scroll', checkScrollBar )
})