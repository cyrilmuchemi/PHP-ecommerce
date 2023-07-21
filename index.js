$(document).ready(function() {
    //banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots:true,
        items:1
    });
    //top sale carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
    //isotope filter
    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });

    $(".button-group").on("click", "button", function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter:filterValue})
    })
    //new phones carousel
    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
    //blogs
    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },

        }
    });

    //product quantity
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");

    $qty_up.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        $.ajax({url: "Partials/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){

            let item_price = parseFloat(result[0].item_price); 

            if($input.val() >= 1 && $input.val() <= 9){
                $input.val(function(i, oldval){
                    return ++oldval;
                });

                $price.text(parseInt(item_price * $input.val()).toFixed(2));

                let subTotal = parseInt($deal_price.text()) + parseInt(item_price);
                $deal_price.text(subTotal.toFixed(2));
            }
        }}); 
    });
    

    $qty_down.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        $.ajax({url: "Partials/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){

            let item_price = parseFloat(result[0].item_price); 

            if($input.val() >= 1 && $input.val() <= 10){
                $input.val(function(i, oldval){
                    return --oldval;
                });

                $price.text(parseInt(item_price * $input.val()).toFixed(2));

                let subTotal = parseInt($deal_price.text()) - parseInt(item_price);
                $deal_price.text(subTotal.toFixed(2));
            }
        }}); 
    });

});