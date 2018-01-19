$(document).ready(function() {
    'use strict';
    // Google Analytics: change UA-XXXXX-X to be your site's ID.

    //menu responsive use slicknav


    // Add carousel js.
    $('.tsp-owl-carousel').each(function() {
        var item_lg = $(this).data('item-lg');
        var item_md = $(this).data('item-md');
        var item_sm = $(this).data('item-sm');
        if (item_lg || item_md) {
            $(this).owlCarousel({
                loop: true,
                margin: 30,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    400: {
                        items: item_sm
                    },
                    600: {
                        items: item_md
                    },
                    1000: {
                        items: item_lg
                    }
                }
            });
        }
    });

    // NAV hotel detail

    //date picker
    $('.tsp-date').datepicker({
        //format: 'dd.mm.yyyy',
    });




    //load more




});