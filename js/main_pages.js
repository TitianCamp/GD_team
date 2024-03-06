console.log(jQuery().jquery);
//цей скрипт для меню «бургера»

$(document).on('click', '#burger', function () {
    $('.nav-t').toggleClass('active');
});
