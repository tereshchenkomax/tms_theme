/** import external dependencies */
import 'jquery';
import 'bootstrap';

/** import local dependencies */
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/**
 * Populate Router instance with DOM routes
 * @type {Router} routes - An instance of our router
 */
const routes = new Router({
  /** All pages */
  common,
  /** Home page */
  home,
  /** About Us page, note the change from about-us to aboutUs. */
  aboutUs,
});

/** Load Events */
jQuery(document).ready(() => routes.loadEvents());

jQuery(function($) {
    $(document).ready(function(){
      // alert('KEK')
    });

    // $(document).find('.dog-btn').click(function () {
    //     var male, female, data;
    //     // // Получаем данные формы
    //     male = $(this).parent().find('.boy').val();
    //     female = $(this).parent().find('.girl').val();
    //     // // Формируем обьект данных который получит AJAX  обработчик
    //     data = {
    //     //     // action: 'guest_book',
    //         male: male,
    //         message: female,
    //     }
    //     // // Вывод данных в консоль браузера
    //     alert(data);
    //     // // console.log(ajaxurl+ '?action=guest_book');
    //
    //     return false;
    // });
    $('#filter').submit(function(){
        var filter = $(this);
        $.ajax({
            // url:myajax.url, // обработчик
            data:filter.serialize(), // данные
            type:filter.attr('method'), // тип запроса
            beforeSend:function(){
                filter.find('.dog-btn').text('Загружаю...'); // изменяем текст кнопки
            },
            success:function(data){
                filter.find('.dog-btn').text('Применить фильтр'); // возвращаеи текст кнопки
                $('#response').html(data);
            },
        });
    });

});
