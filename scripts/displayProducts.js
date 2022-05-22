/* <div class="row">
<div class="col-sm-6 col-lg-4 text-center item mb-4">
  <span class="tag">Sale</span>
  <a href="shop-single.html"> <img src="images/product_01.png" alt="Image"></a>
  <h3 class="text-dark"><a href="shop-single.html">Bioderma</a></h3>
  <p class="price"><del>95.00</del> &mdash; $55.00</p>
</div> */

$(async ()=> {
    let products = await $.get("lib/api/getProducts.php");
    products = JSON.parse(products);
    console.log(products.data);
    // var row = jQuery('<div>',{
    //     'class':'row'
    // });
    // for(let i =0; i < products.data.length; i++)
    // {
    //     var f = jQuery('<div>',{
    //         'class': 'col-sm-6 col-lg-4 text-center item mb-4',
    //         'id' :'product'
    //     });
    //     f.append(jQuery('<span>',{
    //         'class':'tag',
    //         'text' : 'sale',
    //     }));
    //     f.append(jQuery('<a>',{
    //         'href' : 'shop-single.php?pid='+ products.data[i].productid,
    //     }).append(jQuery('<img>',{
    //         'src': pimg,
    //         'alt' :'image',
    //     })));
    //     f.append(jQuery('<h3>',{
    //         'class':'text-dark'
    //     }).append(jQuery('<a>',{
    //         'href' : 'shop-single.php?pid='+ products.data[i].productid,
    //     })));
    //     f.append(jQuery('<p>',{
    //         'class' : 'price',
    //         'text' : products.data[i].pprice,
    //     }));
    //     row.append(f);
    // }
    // $('#cont-1').append(row);

});