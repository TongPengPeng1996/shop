<!DOCTYPE html>
<html>
 <head> 
  <title>商品列表</title> 
  <link href="../../homes/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> 
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="../../homes/js/jquery.min.js"></script> 
  <!-- Custom Theme files --> 
  <!--theme-style--> 
  <link href="../../../homes/css/style.css" rel="stylesheet" type="text/css" media="all" /> 
  <!--//theme-style--> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" /> 
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> 
  <!--fonts--> 
  <!--//fonts--> 
  <!-- start menu --> 
  <link href="../../homes/css/memenu.css" rel="stylesheet" type="text/css" media="all" /> 
  <script type="text/javascript" src="../../homes/js/memenu.js"></script> 
  <script>$(document).ready(function(){$(".memenu").memenu();});</script> 
  <script src="../../homes/js/simpleCart.min.js"> </script> 
 </head> 
 <body> 
  <!--header--> 
  <div class="header"> 
   <div class="header-top"> 
    <div class="container"> 
     <div class="search"> 
      <form> 
       <input type="text" value="搜索 " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '搜索';}" /> 
       <input type="submit" value="Go" /> 
      </form> 
     </div> 
     <div class="header-left"> 
      <ul> 
       <li><a class="lock" href="{{ URL('/home/login') }}">登录</a></li> 
       <li><a class="lock" href="{{ URL('/home/register') }}">注册</a></li> 
       <li> </li> 
      </ul> 
      <div class="cart box_1"> 
       <a href="{{URL('/home/checkout')}}"> <h3> 
         <div class="total"> 
          <span class="simpleCart_total"></span> ( 
          <span id="simpleCart_quantity" class="simpleCart_quantity"></span> items) 
         </div> <img src="../../homes/images/cart.png" alt="" /></h3> </a> 
       <p><a href="javascript:;" class="simpleCart_empty">显示用户名</a></p> 
      </div> 
      <div class="clearfix"> 
      </div> 
     </div> 
     <div class="clearfix"> 
     </div> 
    </div> 
   </div> 
   <div class="container"> 
    <div class="head-top"> 
     <div class="logo"> 
      <a href="{{URL('/')}}"><img src="../../homes/images/logo.png" alt="" /></a> 
     </div> 
     <div class=" h_menu4"> 
      <ul class="memenu skyblue"> 
       <li class="active grid"><a class="color8" href="{{URL('/')}}">主页</a></li> 
       <li><a class="color1" href="javascript:void(0)">购物</a> 
        <div class="mepanel"> 
         <div class="row"> 
          <div class="col1"> 
           <div class="h_nav"> 
            <ul> 
             <li><a href="{{URL('/home/products')}}">商品列表</a></li> 
             <li><a href="products.html">Bags</a></li> 
             <li><a href="products.html">Caps &amp; Hats</a></li> 
             <li><a href="products.html">Hoodies &amp; Sweatshirts</a></li> 
             <li><a href="products.html">Jackets &amp; Coats</a></li> 
             <li><a href="products.html">Jeans</a></li> 
             <li><a href="products.html">Jewellery</a></li> 
             <li><a href="products.html">Jumpers &amp; Cardigans</a></li> 
             <li><a href="products.html">Leather Jackets</a></li> 
             <li><a href="products.html">Long Sleeve T-Shirts</a></li> 
             <li><a href="products.html">Loungewear</a></li> 
            </ul> 
           </div> 
          </div> 
          <div class="col1"> 
           <div class="h_nav"> 
            <ul> 
             <li><a href="{{URL('/home/products')}}">Shirts</a></li> 
             <li><a href="products.html">Shoes, Boots &amp; Trainers</a></li> 
             <li><a href="products.html">Shorts</a></li> 
             <li><a href="products.html">Suits &amp; Blazers</a></li> 
             <li><a href="products.html">Sunglasses</a></li> 
             <li><a href="products.html">Sweatpants</a></li> 
             <li><a href="products.html">Swimwear</a></li> 
             <li><a href="products.html">Trousers &amp; Chinos</a></li> 
             <li><a href="products.html">T-Shirts</a></li> 
             <li><a href="products.html">Underwear &amp; Socks</a></li> 
             <li><a href="products.html">Vests</a></li> 
            </ul> 
           </div> 
          </div> 
          <div class="col1"> 
           <div class="h_nav"> 
            <h4>Popular Brands</h4> 
            <ul> 
             <li><a href="{{URL('/home/products')}}">Levis</a></li> 
             <li><a href="products.html">Persol</a></li> 
             <li><a href="products.html">Nike</a></li> 
             <li><a href="products.html">Edwin</a></li> 
             <li><a href="products.html">New Balance</a></li> 
             <li><a href="products.html">Jack &amp; Jones</a></li> 
             <li><a href="products.html">Paul Smith</a></li> 
             <li><a href="products.html">Ray-Ban</a></li> 
             <li><a href="products.html">Wood Wood</a></li> 
            </ul> 
           </div> 
          </div> 
         </div> 
        </div> </li> 
       <li class="grid"><a class="color2" href="javascript:void(0)"> 分类</a> 
        <div class="mepanel"> 
         <div class="row"> 
          <div class="col1"> 
           <div class="h_nav"> 
            <ul> 
             <li><a href="{{URL('/home/products')}}">商品列表</a></li> 
             <li><a href="products.html">Bags</a></li> 
             <li><a href="products.html">Caps &amp; Hats</a></li> 
             <li><a href="products.html">Hoodies &amp; Sweatshirts</a></li> 
             <li><a href="products.html">Jackets &amp; Coats</a></li> 
             <li><a href="products.html">Jeans</a></li> 
             <li><a href="products.html">Jewellery</a></li> 
             <li><a href="products.html">Jumpers &amp; Cardigans</a></li> 
             <li><a href="products.html">Leather Jackets</a></li> 
             <li><a href="products.html">Long Sleeve T-Shirts</a></li> 
             <li><a href="products.html">Loungewear</a></li> 
            </ul> 
           </div> 
          </div> 
          <div class="col1"> 
           <div class="h_nav"> 
            <ul> 
             <li><a href="{{URL('/home/products')}}">Shirts</a></li> 
             <li><a href="products.html">Shoes, Boots &amp; Trainers</a></li> 
             <li><a href="products.html">Shorts</a></li> 
             <li><a href="products.html">Suits &amp; Blazers</a></li> 
             <li><a href="products.html">Sunglasses</a></li> 
             <li><a href="products.html">Sweatpants</a></li> 
             <li><a href="products.html">Swimwear</a></li> 
             <li><a href="products.html">Trousers &amp; Chinos</a></li> 
             <li><a href="products.html">T-Shirts</a></li> 
             <li><a href="products.html">Underwear &amp; Socks</a></li> 
             <li><a href="products.html">Vests</a></li> 
            </ul> 
           </div> 
          </div> 
          <div class="col1"> 
           <div class="h_nav"> 
            <h4>Popular Brands</h4> 
            <ul> 
             <li><a href="{{URL('/home/products')}}">Levis</a></li> 
             <li><a href="products.html">Persol</a></li> 
             <li><a href="products.html">Nike</a></li> 
             <li><a href="products.html">Edwin</a></li> 
             <li><a href="products.html">New Balance</a></li> 
             <li><a href="products.html">Jack &amp; Jones</a></li> 
             <li><a href="products.html">Paul Smith</a></li> 
             <li><a href="products.html">Ray-Ban</a></li> 
             <li><a href="products.html">Wood Wood</a></li> 
            </ul> 
           </div> 
          </div> 
         </div> 
        </div> </li> 
       <li><a class="color4" href="{{URL('/home/blog')}}">博客</a></li> 
       <li><a class="color6" href="{{URL('/home/contact')}}">联系</a></li> 
       <li><a class="color6" href="{{URL('/home/user_center')}}">个人中心</a></li> 
      </ul> 
     </div> 
     <div class="clearfix"> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!--content--> 
  <!----> 
  <div class="product"> 
   <div class="container"> 
    <div class="col-md-3 product-price"> 
     <div class=" rsidebar span_1_of_left"> 
      <div class="of-left"> 
       <h3 class="cate">类别</h3> 
      </div> 
      <ul class="menu"> 
       <li class="item1"><a href="javasctipt:void(0)">商品类 </a> 
        <ul class="cute"> 
         <li class="subitem1"><a href="{{URL('/home/single')}}">商品详情 </a></li> 
         <li class="subitem2"><a href="{{URL('/home/single')}}">Strange Stuff </a></li> 
         <li class="subitem3"><a href="{{URL('/home/single')}}">Automatic Fails </a></li> 
        </ul> </li> 
       <li class="item2"><a href="javascript:void(0)">Women </a> 
        <ul class="cute"> 
         <li class="subitem1"><a href="{{URL('/home/single')}}">Cute Kittens </a></li> 
         <li class="subitem2"><a href="single.html">Strange Stuff </a></li> 
         <li class="subitem3"><a href="single.html">Automatic Fails </a></li> 
        </ul> </li> 
       <li class="item3"><a href="javascript:void(0)">Kids</a> 
        <ul class="cute"> 
         <li class="subitem1"><a href="{{URL('/home/single')}}">Cute Kittens </a></li> 
         <li class="subitem2"><a href="single.html">Strange Stuff </a></li> 
         <li class="subitem3"><a href="single.html">Automatic Fails</a></li> 
        </ul> </li> 
       <li class="item4"><a href="javascript:void(0)">Accesories</a> 
        <ul class="cute"> 
         <li class="subitem1"><a href="{{URL('/home/single')}}">Cute Kittens </a></li> 
         <li class="subitem2"><a href="single.html">Strange Stuff </a></li> 
         <li class="subitem3"><a href="single.html">Automatic Fails</a></li> 
        </ul> </li> 
       <li class="item4"><a href="javascript:void(0)">Shoes</a> 
        <ul class="cute"> 
         <li class="subitem1"><a href="{{URL('/home/single')}}">Cute Kittens </a></li> 
         <li class="subitem2"><a href="product.html">Strange Stuff </a></li> 
         <li class="subitem3"><a href="product.html">Automatic Fails </a></li> 
        </ul> </li> 
      </ul> 
     </div> 
     <!--initiate accordion--> 
     <script type="text/javascript">
      $(function() {
          var menu_ul = $('.menu > li > ul'),
                 menu_a  = $('.menu > li > a');
          menu_ul.hide();
          menu_a.click(function(e) {
              e.preventDefault();
              if(!$(this).hasClass('active')) {
                  menu_a.removeClass('active');
                  menu_ul.filter(':visible').slideUp('normal');
                  $(this).addClass('active').next().stop(true,true).slideDown('normal');
              } else {
                  $(this).removeClass('active');
                  $(this).next().stop(true,true).slideUp('normal');
              }
          });
      
      });
    </script> 
     <!----> 
     <div class="product-middle"> 
      <div class="fit-top"> 
       <h6 class="shop-top">Lorem Ipsum</h6> 
       <!-- <a href="single.html" class="shop-now">SHOP NOW</a> --> 
       <div class="clearfix"> 
       </div> 
      </div> 
     </div> 
     <div class="sellers"> 
      <div class="of-left-in"> 
       <h3 class="tag">特惠</h3> 
      </div> 
      <!-- 跳到特价商品列表 ?? --> 
      <div class="tags"> 
       <ul> 
        <li><a href="#">小米5s</a></li> 
        <li><a href="#">fashion</a></li> 
        <li><a href="#">lorem</a></li> 
        <li><a href="#">dress</a></li> 
        <li><a href="#">fashion</a></li> 
        <li><a href="#">dress</a></li> 
        <li><a href="#">design</a></li> 
        <li><a href="#">dress</a></li> 
        <li><a href="#">design</a></li> 
        <li><a href="#">fashion</a></li> 
        <li><a href="#">lorem</a></li> 
        <li><a href="#">dress</a></li> 
        <div class="clearfix"> 
        </div> 
       </ul> 
      </div> 
     </div> 
     <!----> 
     <div class="product-bottom"> 
      <div class="of-left-in"> 
       <h3 class="best">爆款热卖</h3> 
      </div> 
      <div class="product-go"> 
       <div class=" fashion-grid"> 
        <a href="{{URL('/home/single')}}"><img class="img-responsive " src="../../homes/images/p1.jpg" alt="" /></a> 
       </div> 
       <div class=" fashion-grid1"> 
        <h6 class="best2"><a href="{{URL('/home/single')}}">产品介绍(自动蹦到商品详情)</a></h6> 
        <span class=" price-in1"> $40.00</span> 
       </div> 
       <div class="clearfix"> 
       </div> 
      </div> 
      <div class="product-go"> 
       <div class=" fashion-grid"> 
        <a href="single.html"><img class="img-responsive " src="../../homes/images/p2.jpg" alt="" /></a> 
       </div> 
       <div class="fashion-grid1"> 
        <h6 class="best2"><a href="{{URL('/home/single')}}">Lorem ipsum dolor sit amet consectetuer </a></h6> 
        <span class=" price-in1"> $40.00</span> 
       </div> 
       <div class="clearfix"> 
       </div> 
      </div> 
     </div> 
     <div class=" per1"> 
      <a href="{{URL('/home/single')}}"><img class="img-responsive" src="../../homes/images/pro.jpg" alt="" /> 
       <div class="six1"> 
        <h4>特惠</h4> 
        <p>抢购</p> 
        <span>60%</span> 
       </div></a> 
     </div> 
    </div> 
    <div class="col-md-9 product1"> 
     <div class=" bottom-product"> 
      <div class="col-md-4 bottom-cd simpleCart_shelfItem"> 
       <div class="product-at "> 
        <a href="{{URL('/home/single')}}"><img class="img-responsive" src="../../homes/images/pi3.jpg" alt="" /> 
         <div class="pro-grid"> 
          <span class="buy-in">查看详情</span> 
         </div> </a> 
       </div> 
       <p class="tun">商品介绍</p> 
       <!--商品添加到购物车--> 
       <a href="{{URL('/home/checkout')}}" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a> 
      </div> 
      <div class="col-md-4 bottom-cd simpleCart_shelfItem"> 
       <div class="product-at "> 
        <a href="{{URL('/home/single')}}"><img class="img-responsive" src="../../homes/images/pi1.jpg" alt="" /> 
         <div class="pro-grid"> 
          <span class="buy-in">Buy Now</span> 
         </div> </a> 
       </div> 
       <p class="tun">It is a long established fact that a reader</p> 
       <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a> 
      </div> 
      <div class="col-md-4 bottom-cd simpleCart_shelfItem"> 
       <div class="product-at "> 
        <a href="{{URL('/home/single')}}"><img class="img-responsive" src="../../homes/images/pi4.jpg" alt="" /> 
         <div class="pro-grid"> 
          <span class="buy-in">Buy Now</span> 
         </div> </a> 
       </div> 
       <p class="tun">It is a long established fact that a reader</p> 
       <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a> 
      </div> 
      <div class="clearfix"> 
      </div> 
     </div> 
     <div class=" bottom-product"> 
      <div class="col-md-4 bottom-cd simpleCart_shelfItem"> 
       <div class="product-at "> 
        <a href="{{URL('/home/single')}}"><img class="img-responsive" src="../../homes/images/pi5.jpg" alt="" /> 
         <div class="pro-grid"> 
          <span class="buy-in">Buy Now</span> 
         </div> </a> 
       </div> 
       <p class="tun">It is a long established fact that a reader</p> 
       <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a> 
      </div> 
      <div class="col-md-4 bottom-cd simpleCart_shelfItem"> 
       <div class="product-at "> 
        <a href="{{URL('/home/single')}}"><img class="img-responsive" src="../../homes/images/pi.jpg" alt="" /> 
         <div class="pro-grid"> 
          <span class="buy-in">Buy Now</span> 
         </div> </a> 
       </div> 
       <p class="tun">It is a long established fact that a reader</p> 
       <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a> 
      </div> 
      <div class="col-md-4 bottom-cd simpleCart_shelfItem"> 
       <div class="product-at "> 
        <a href="single.html"><img class="img-responsive" src="../../homes/images/pi1.jpg" alt="" /> 
         <div class="pro-grid"> 
          <span class="buy-in">Buy Now</span> 
         </div> </a> 
       </div> 
       <p class="tun">It is a long established fact that a reader</p> 
       <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a> 
      </div> 
      <div class="clearfix"> 
      </div> 
     </div> 
     <div class=" bottom-product"> 
      <div class="col-md-4 bottom-cd simpleCart_shelfItem"> 
       <div class="product-at "> 
        <a href="single.html"><img class="img-responsive" src="../../homes/images/pi3.jpg" alt="" /> 
         <div class="pro-grid"> 
          <span class="buy-in">Buy Now</span> 
         </div> </a> 
       </div> 
       <p class="tun">It is a long established fact that a reader</p> 
       <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a> 
      </div> 
      <div class="col-md-4 bottom-cd simpleCart_shelfItem"> 
       <div class="product-at "> 
        <a href="single.html"><img class="img-responsive" src="../../homes/images/pi4.jpg" alt="" /> 
         <div class="pro-grid"> 
          <span class="buy-in">Buy Now</span> 
         </div> </a> 
       </div> 
       <p class="tun">It is a long established fact that a reader</p> 
       <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a> 
      </div> 
      <div class="col-md-4 bottom-cd simpleCart_shelfItem"> 
       <div class="product-at "> 
        <a href="single.html"><img class="img-responsive" src="../../homes/images/pi5.jpg" alt="" /> 
         <div class="pro-grid"> 
          <span class="buy-in">Buy Now</span> 
         </div> </a> 
       </div> 
       <p class="tun">It is a long established fact that a reader</p> 
       <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a> 
      </div> 
      <div class="clearfix"> 
      </div> 
     </div> 
    </div> 
    <div class="clearfix"> 
    </div> 
    <!-- 分页 --> 
    <nav class="in"> 
     <ul class="pagination"> 
      <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li> 
      <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li> 
      <li><a href="#">2 <span class="sr-only"></span></a></li> 
      <li><a href="#">3 <span class="sr-only"></span></a></li> 
      <li><a href="#">4 <span class="sr-only"></span></a></li> 
      <li><a href="#">5 <span class="sr-only"></span></a></li> 
      <li> <a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span> </a> </li> 
     </ul> 
    </nav> 
   </div> 
  </div> 
  <!----> 
  <!--//content--> 
  <div class="footer"> 
   <div class="container"> 
    <div class="footer-top-at"> 
     <div class="col-md-4 amet-sed"> 
      <h4>MORE INFO</h4> 
      <ul class="nav-bottom"> 
       <li><a href="#">How to order</a></li> 
       <li><a href="#">FAQ</a></li> 
       <li><a href="contact.html">Location</a></li> 
       <li><a href="#">Shipping</a></li> 
       <li><a href="#">Membership</a></li> 
      </ul> 
     </div> 
     <div class="col-md-4 amet-sed "> 
      <h4>CONTACT US</h4> 
      <p> Contrary to popular belief</p> 
      <p>The standard chunk</p> 
      <p>office: +12 34 995 0792</p> 
      <ul class="social"> 
       <li><a href="#"><i> </i></a></li> 
       <li><a href="#"><i class="twitter"> </i></a></li> 
       <li><a href="#"><i class="rss"> </i></a></li> 
       <li><a href="#"><i class="gmail"> </i></a></li> 
      </ul> 
     </div> 
     <div class="col-md-4 amet-sed"> 
      <h4>Newsletter</h4> 
      <p>Sign Up to get all news update and promo</p> 
      <form> 
       <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" /> 
       <input type="submit" value="Sign up" /> 
      </form> 
     </div> 
     <div class="clearfix"> 
     </div> 
    </div> 
   </div> 
   <div class="footer-class"> 
    <p>Team&copy; 2016.Just tonight do it. <a href="#" target="_blank" title="三人行">三人行</a> - Motto <a href="#" title="三人行" target="_blank">必有我师焉</a></p> 
   </div> 
  </div>  
 </body>
</html>