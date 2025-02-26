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
    $("#product_find_submit").click(function(){
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
                let products=JSON.parse(xhr.responseText);
                console.log(products);
                $('.catalog').empty();
                let k=1;
                let j=1;
                let o=j;
                for (let i=0; i<products.length; i++)
                {
                    if(k==1||k%4==1)
                    {
                        $('.catalog').append('<div class="row" id="product_row'+j+'"></div>');
                        o=j;
                        j++;
                    }
                    console.log(o);
                    $('#product_row'+o).append('<div class="product" id="product_col'+k+'"></div>');
                    $('#product_col'+k).append('<img src=files/'+products[i].picture+' class="product_image">');
                    $('#product_col'+k).append('<div class="product_name">'+products[i].name+'</div>');
                    $('#product_col'+k).append('<div class="product_description">'+products[i].description+'</div>');
                    $('#product_col'+k).append('<div class="product_price">'+Math.floor(products[i].price/100)+' руб. '+(products[i].price%100)+' коп.</div>');
                    $('#product_col'+k).append('<button class="product_about" id="about_'+products[i].id+'">Подробнее</button>');
                    k++;
                }
            }
        }
        
    });
});