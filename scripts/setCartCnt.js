$(async ()=>{
    var cnt = await $.get('lib/cart/getCartCnt.php');
    cnt = JSON.parse(cnt);
    if(cnt.f)
    {
        $(".pcnt").text(cnt.cnt);
    }else{
        $(".pcnt").text(0);
    }
});