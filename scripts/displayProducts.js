
$(async ()=> {
    let products = await $.get("lib/api/getProducts.php");
    products = JSON.parse(products);
    var row = jQuery('<div>',{
        'class':'row'
    });
    for(let i =0; i < products.data.length; i++)
    {
        console.log(products.data[i].pname);
        var f = jQuery('<div>',{
            'class': 'col-sm-6 col-lg-4 text-center item mb-4',
            'id' :'product'
        });
        if(i%2 == 0)
        {
            f.append(jQuery('<span>',{
                'class':'tag',
                'text' : 'sale',
            }));
        }
        f.append(jQuery('<a>',{
            'href' : 'shop-single.php?pid='+ products.data[i].productid,
        }).append(jQuery('<img>',{
            'src':products.data[i].pimg,
            'alt' :'Image',
            'id':'pimg',
        })));
        f.append(jQuery('<h3>',{
            'class':'text-dark',
            'text' : products.data[i].pname,
        }).append(jQuery('<a>',{
            'href' : 'shop-single.php?pid='+ products.data[i].productid,
        })));
        f.append(jQuery('<p>',{
            'class' :  'price',
            'text' : '₹ '+ products.data[i].pprice + '.00',
        }));
        row.append(f);
    }
    $('#pend').before(row);

});