$(document).ready(function(){
    $('.menu_product_container').hover(
        function(){$('.dropdown_product_content').show(); },
        function(){$('.dropdown_product_content').hide(); }
    );
    $('.dropdown_product_content').hover(
        function(){$('.dropdown_product_content').show(); },
        function(){$('.dropdown_product_content').hide(); }
    );
});