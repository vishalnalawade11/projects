$(async()=>{
   let res = await $.get("lib/api/userlogged.php");
   res = JSON.parse(res);
   if(res.success)
   {
    var d = '<div class="btn-group dropright"> <button type="button" class="btn badge-primary badge-pill dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+ res.user +'</button> <div class="dropdown-menu"><a class="dropdown-item" href="user/userProducts.php">My Orders</a><div class="dropdown-divider"></div><a class="dropdown-item" href="user/logout.php"> Logout </a></div> </div>';
    $(".ulogged").html(d);
   }
})