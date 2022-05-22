$(async ()=>{
    var cnt = await $.get('lib/cart/getCartCnt.php');
    cnt= JSON.parse(cnt);
    console.log(cnt.cnt);
    $(".pcnt").text(cnt.cnt);
});