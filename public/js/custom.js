(function ($) {
    "use strict";
    //progressbar js
    // $(document).ready(function(){
    //     $('#bar4').barfiller({ barColor: '#900', duration: 3000 });
    // });
    
    
    //notification section js
    $(".close_icon").click(function () {
      $(this).parents(".hide_content").slideToggle("0");
    });




    //count up js
    var count= $('.counter');
    if(count.length){
        count.counterUp({
            delay: 100,
            time: 5000
        });
    }


    // data table 

    
    //niceselect select jquery
    $('.nice_Select').niceSelect();
    //niceselect select jquery
    $('.nice_Select2').niceSelect();
    $('.default_sel').niceSelect();

    $(document).ready(function() {
      $('#start_datepicker').datepicker();
      $('#end_datepicker').datepicker();
    });


    //progressbar js
    var delay = 500;
    $(".progress-bar").each(function(i){
        $(this).delay( delay*i ).animate( { width: $(this).attr('aria-valuenow') + '%' }, delay );

        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: delay,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now)+'%');
            }
        });
    });

    //active sidebar
    $('.sidebar_icon').on('click', function(){
        $('.sidebar').toggleClass('active_sidebar');
    });
    $('.sidebar_close_icon i').on('click', function(){
        $('.sidebar').removeClass('active_sidebar');
    });
    
    //active menu
    $('.troggle_icon').on('click', function(){
        $('.setting_navbar_bar').toggleClass('active_menu');
    });

    //active courses option
    // $('.courses_option').on('click', function(){
    //     $(this).parent(".custom_select").toggleClass('active');
    // });

    $('.custom_select').click( function(){
        if ( $(this).hasClass('active') ) {
            $(this).removeClass('active');
        } else {
            $('.custom_select.active').removeClass('active');
            $(this).addClass('active');    
        }
    });
//     $( 'ul.nav li' ).on( 'click', function() {
//         $( this ).parent().find( 'li.active' ).removeClass( 'active' );
//         $( this ).addClass( 'active' );
//   });

    $(document).click(function(event){
        if (!$(event.target).closest(".custom_select").length) {
            $("body").find(".custom_select").removeClass("active");
        }
    });
    //remove sidebar
    $(document).click(function(event){
        if (!$(event.target).closest(".sidebar_icon, .sidebar").length) {
            $("body").find(".sidebar").removeClass("active_sidebar");
        }
    });
    
    // check all
    $("#checkAll").click(function () {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });

    // sumer note
    $('#summernote').summernote({
        placeholder: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        tabsize: 2,
        height: 195
    });

    $('.lms_summernote').summernote({
        placeholder: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        tabsize: 2,
        height: 188
    });
    
    //custom file
    $('.input-file').each(function() {
        var $input = $(this),
            $label = $input.next('.js-labelFile'),
            labelVal = $label.html();
        
       $input.on('change', function(element) {
          var fileName = '';
          if (element.target.value) fileName = element.target.value.split('\\').pop();
          fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass('has-file').html(labelVal);
       });
    });
    
    //custom file
    $('.input-file2').each(function() {
        var $input = $(this),
            $label = $input.next('.js-labelFile1'),
            labelVal = $label.html();
        
       $input.on('change', function(element) {
          var fileName = '';
          if (element.target.value) fileName = element.target.value.split('\\').pop();
          fileName ? $label.addClass('has-file').find('.js-fileName1').html(fileName) : $label.removeClass('has-file').html(labelVal);
       });
    });

    $("#meta_keywords").tagsinput();


    // $('.sidebar_iner li a').on('click',function() {
    //     $('.sidebar_iner li a').removeClass('active');
    // });

    // $('.sidebar_iner li a').on('click',function() {
    //     $(this).addClass('active');
    // });

// $('table').DataTable();
// $(document).ready(function() {
//     var table_rs = $('.lms_table_active')
//     if(table_rs.length){
//       table_rs.DataTable( {
//         'responsive': true,
//         'paging': false,
//         "searching": false,
//         "info": false,
//         "ordering": true
//       });
//     }
//   });
  if ($('.lms_table_active').length) {
    $('.lms_table_active').DataTable({
        bLengthChange: false,
        "bDestroy": true,
        language: {
            search: "<i class='ti-search'></i>",
            searchPlaceholder: 'Quick Search',
            paginate: {
                next: "<i class='ti-arrow-right'></i>",
                previous: "<i class='ti-arrow-left'></i>"
            }
        },
        columnDefs: [{
            visible: false
        }],
        responsive: true,
        searching: false,
    });
}
//   layout select
  $('.layout_style').click( function(){
    if ( $(this).hasClass('layout_style_selected') ) {
        $(this).removeClass('layout_style_selected');
    } else {
        $('.layout_style.layout_style_selected').removeClass('layout_style_selected');
        $(this).addClass('layout_style_selected');    
    }
});

// metisMenu 
$("#sidebar_menu").metisMenu();

// metisMenu 
$("#admin_profile_active").metisMenu();

// switcher menu 
// anly for side switcher menu 
$('.switcher_wrap li.Horizontal').click( function(){
    $('.sidebar').addClass('hide_vertical_menu');
    $('.main_content ').addClass('main_content_padding_hide');
    $('.horizontal_menu').addClass('horizontal_menu_active');
    $('.main_content_iner').addClass('main_content_iner_padding');
    $('.footer_part').addClass('pl-0');
});

$('.switcher_wrap li.vertical').click( function(){
    $('.sidebar').removeClass('hide_vertical_menu');
    $('.main_content ').removeClass('main_content_padding_hide');
    $('.horizontal_menu').removeClass('horizontal_menu_active');
    $('.main_content_iner').removeClass('main_content_iner_padding');
    $('.footer_part').removeClass('pl-0');
});

// switcher_wrap 
// anly for side switcher menu 

$('.switcher_wrap li').click(function(){
    $('li').removeClass("active");
    $(this).addClass("active");
});

$('.custom_lms_choose li').click(function(){
    $('li').removeClass("selected_lang");
    $(this).addClass("selected_lang");
});


$('.spin_icon_clicker').on('click', function(e) {
    $('.switcher_slide_wrapper').toggleClass("swith_show"); //you can list several class names 
    e.preventDefault();
  });

//   color skin 
  $(document).ready(function(){
    $(function () {
        "use strict";
        $(".pCard_add").click(function () {
          $(".pCard_card").toggleClass("pCard_on");
          $(".pCard_add i").toggleClass("fa-minus");
        });
      });
    }); 

}(jQuery));