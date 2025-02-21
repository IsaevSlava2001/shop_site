$(document).ready(function(){
    $('.menu_product_container').hover(
        function(){$('.dropdown_product_content').show(); },
        function(){$('.dropdown_product_content').hide(); }
    );
    $('.dropdown_product_content').hover(
        function(){$('.dropdown_product_content').show(); },
        function(){$('.dropdown_product_content').hide(); }
    );

    $('#product_find_reset').click(function(){
        $('#product_find_text').val('');
        $('#product_find_sort').val('default');
    });

    $("#product_find_sumbit").click(function(){
        let product=$('#product_find_text').val();
        let sort=$('#product_find_sort').val();
        let xhr = new XMLHttpRequest();
        xhr.open('GET','get_products.php?name='+product+'&sort='+sort);
        xhr.send();

        xhr.onreadystatechange=function(){
            if(xhr.readyState!=4) return;
            if(xhr.status!=200)
            {
                alert(xhr.status+':'+xhr.statusText);
            }
            else
            {
                console.log(xhr.responseText);
                let products=JSON.parse(xhr.responseText);
            }
        }
    });
});