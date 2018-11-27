var autoload = function(){

    document.getElementById('spinner').style.display = 'none';

    /*--- Date Picker ---*/
    $('.form_date').datetimepicker({
        showOn: "button",
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });

    /*--- Counter Up---*/

    $('.counter').counterUp({
        delay: 10,
        time: 2000
    });

	/*--- OUR CLIENTS CAROUSEL---*/
	
    $(".clients-list").owlCarousel({
        autoPlay: true,
        slideSpeed: 2000,
        pagination: false,
        navigation: false,
        loop: true,
        items: 6,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [980, 3],
        itemsTablet: [768, 4],
        itemsTabletSmall: false,
        itemsMobile: [479, 2],
    });

	/*--- TESTIMONIAL 1---*/
	
    $("#owl-testimonial").owlCarousel({
        navigation: false,  /*Show next and prev buttons*/
        slideSpeed: 600,
        paginationSpeed: 700,
        autoPlay: 5000,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        pagination: false,
        responsive: true,
        loop: true,
        /*"singleItem:true" is a shortcut for:*/
        items: 2

    });

/*--- TESTIMONIAL 2---*/

    $(".owl-testimonial-2").owlCarousel({
        autoPlay: true,
        slideSpeed: 2000,
        pagination: false,
        navigation: false,
        loop: true,
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [980, 2],
        itemsTablet: [768, 2],
        itemsTabletSmall: false,
        itemsMobile: [479, 1]
    });


    /*--- ACCORDIAN---*/

    $('.panel-heading').click(function(e) {
        $('.panel-heading').removeClass('tab-collapsed');
        var collapsCrnt = $(this).find('.collapse-controle').attr('aria-expanded');
        if (collapsCrnt != 'true') {
            $(this).addClass('tab-collapsed');
        }
    });


    /*--- FOOTER REVEAL---*/
	
    /*$('.fixed-footer').footerReveal({
        shadow: false,
        zIndex: -101
    });*/



    /*--- SEACRH FIXED---*/
	
    /*$(window).scroll(function() {

        var scrollTop = $(window).scrollTop();
        if (scrollTop > 300) {
            $(".search").addClass("navbar-fixed-top");

        } else if (scrollTop < 300) {
            $(".search").removeClass("navbar-fixed-top");
        }

    });*/

    /*--- Menu Fixed ---*/

    $(window).scroll(function() {

        var scrollTop = $(window).scrollTop();
        if (scrollTop > 300) {
            $(".mega-menu").addClass("navbar-fixed-top");

        } else if (scrollTop < 300) {
            $(".mega-menu").removeClass("navbar-fixed-top");
        }

    });


    $(".questions-category").select2({
        placeholder: "Select Post Category",
        allowClear: true,
        maximumSelectionLength: 3,
    });

    $(".select-category ").select2({
        placeholder: "Select Job Category",
        allowClear: true,
        maximumSelectionLength: 3,
    });
    $(".select-location ").select2({
        placeholder: "Select Job Location",
        allowClear: true,
        maximumSelectionLength: 3,
    });

    $(".select-resume").select2({
        placeholder: "Select Job Resume",
        allowClear: true,
    });


    /*--- MENU---*/
	
    $('.mega-menu').megaMenu({
        /* MOBILE MODE SETTINGS */
        mobile_settings: {
            collapse: true,
            sibling: true,
            scrollBar: true,
            scrollBar_height: 400,
            top_fixed: true,
            sticky_header: true,
            sticky_header_height: 200
        }
    });



    /*--- SCROLL TO TOP---*/
	
    $(document).ready(function() {

        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });


        $('.scrollup').click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });

    });



    /*--- FILE UPLOADER---*/
	
    $('.image-preview-clear').click(function() {
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse");
    });
    /* Create the preview image*/
    $(".image-preview-input input:file").change(function() {
        var img = $('<img/>', {
            id: 'dynamic',
            width: 250,
            height: 200
        });
        var file = this.files[0];
        var reader = new FileReader();
        /* Set preview image into the popover data-content*/
        reader.onload = function(e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);
            img.attr('src', e.target.result);

        }
        reader.readAsDataURL(file);
    });
}

var AutoLoad = new autoload();