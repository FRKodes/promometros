$( document ).ready(function() {
    $('.menu-menu-top-container').attr('id', 'navbar').addClass('navbar-collapse collapse');
    $('.menu-item-has-children').addClass('dropdown');
    $('.dropdown a:first, .dropdown-two a:first').addClass('dropdown-toggle').attr({
            href:"#", 
            'data-toggle':"dropdown", 
            role:"button"
        });

    $('ul.sub-menu').addClass('dropdown-menu').removeClass('sub-menu');

    $('.panel-title a').on('click', function (){
        $('span.icon-g').addClass('others');
        $(this).prev().removeClass('others');
        $(this).prev().toggleClass('active');
        $('span.icon-g.others').removeClass('active');
    });

    $( window ).scroll(function() {
        var vertical_position = $('html').scrollTop();
        if (vertical_position >=1) {
            $('.navbar-default').addClass('solid');
        }else{
            $('.navbar-default').removeClass('solid');
        };
    });

    $('.main-banner').slick({
        infinite: true,
        autoplay: true,
        dots : true
    });

    $('.detail-carousel').slick({
        infinite: true,
        autoplay: true,
        dots : true
    });

    var w = window.innerWidth;
    console.log(w);
    if (w >= 1000) { 
        $('.dev-container').addClass('dev-carousel'); 
    };

    
    $('.dev-carousel').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true
    });
    
    /* validator */
    jQuery(function(){
        var formSettings = {
            singleError : function($field, rules){ $field.closest('.form-group').removeClass('valid').addClass('error');},
            singleSuccess : function($field, rules){ $field.closest('.form-group').removeClass('error').addClass('valid'); },
            overallSuccess : function(){
                var form    = jQuery('#contactForm'),
                    name    = form.find( "input[name='name']" ).val(),
                    email   = form.find( "input[name='email']" ).val(),
                    phone   = form.find( "input[name='phone']" ).val(),
                    message = form.find( "textarea[name='message']" ).val(),
                    action  = form.attr( "action"),
                    url     = action;
                var posting = jQuery.post( 
                    url, { e: email, n:name, p:phone, m:message }
                    );
                posting.done(function( data ) {
                    console.log(data);
                    jQuery('#contactForm')[0].reset();
                    jQuery('.sent_mail_alert').fadeIn().delay(2000).fadeOut();
                });
            },
            overallError : function($form, fields){ /*Do nothing, just show the error fields*/ },
            autoDetect : true, debug : true
        };
        var $validate = jQuery('#contactForm').validate(formSettings).data('validate');
    });
    
});