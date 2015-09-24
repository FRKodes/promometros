$( document ).ready(function() {
    $('.menu-menu-top-container').attr('id', 'navbar').addClass('navbar-collapse collapse');
    $('.menu-item-has-children').addClass('dropdown');
    $('.dropdown a:first, .dropdown-two a:first')
            .addClass('dropdown-toggle')
            .attr({
                href:"#", 
                'data-toggle':"dropdown", 
                role:"button"
            });

    $('ul.sub-menu').addClass('dropdown-menu').removeClass('sub-menu');

    console.log( "Menu classes added!" );
    
});