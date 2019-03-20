$(function(){
  $('a[href^="#"]').on('click', function(event) {
    
    $("#ham").prop("checked", false);
    /*Закрытие меню при нажатии на ссылку*/ 
      
      
    // отменяем стандартное действие
    event.preventDefault();
    
    var sc = $(this).attr("href"),
        dn = $(sc).offset().top;
    /*
    * sc - в переменную заносим информацию о том, к какому блоку надо перейти
    * dn - определяем положение блока на странице
    */
    
    $('html, body').animate({scrollTop: $(sc) .offset().top-100}, 1000);
    
    /*
    * 1000 скорость перехода в миллисекундах
    */
  });
});
 