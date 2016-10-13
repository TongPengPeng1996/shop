<!DOCTYPE html>
<html>
 <head> 
  <title>购物车</title> 
  <link href="../../homes/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> 
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="../../homes/js/jquery.min.js"></script> 
  <!-- Custom Theme files --> 
  <!--theme-style--> 
  <link href="../../homes/css/style.css" rel="stylesheet" type="text/css" media="all" /> 
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
       <li><a class="lock" href="{{URL('/home/login')}}">登录</a></li> 
       <li><a class="lock" href="{{URL('/home/register')}}">注册</a></li> 
       <li> </li> 
      </ul> 
      <div class="cart box_1"> 
       <a href="{{URL('/home/checkout')}}"> <h3> 
         <div class="total"> 
          <span class="simpleCart_total"></span> (
          <span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)
         </div> <img src="../../homes/images/cart.png" alt="" /></h3> </a> 
       <p><a href="javascript:void(0)" class="simpleCart_empty">显示用户名</a></p> 
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
       <li><a class="color1" href="javascript:void(0)">分类</a> 
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
       <li class="grid"><a class="color2" href="javascript:void(0)"> Lookbook</a> 
        <div class="mepanel"> 
         <div class="row"> 
          <div class="col1"> 
           <div class="h_nav"> 
            <ul> 
             <li><a href="{{URL('/home/products')}}">Accessories</a></li> 
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
      </ul> 
     </div> 
     <div class="clearfix"> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="container"> 
   <div class="check"> 
    <h1>我的购物清单</h1> 
    <div class="col-md-9 cart-items"> 
     <script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script> 
     <div class="cart-header"> 
      <div class="close1"> 
      </div> 
      <div class="cart-sec simpleCart_shelfItem"> 
       <div class="cart-item cyc"> 
        <img src="../../homes/images/pic1.jpg" class="img-responsive" alt="" /> 
       </div> 
       <div class="cart-item-info"> 
        <!-- 跳到商品详情 --> 
        <h3><a href="#">商品名(XS R034)</a><span>商品id: 3578</span></h3> 
        <ul class="qty"> 
         <li><p>Size : 5</p></li> 
         <li><p>Qty : 1</p></li> 
        </ul> 
        <div class="delivery"> 
         <p>Service Charges : Rs.100.00</p> 
         <span>??快递状态</span> 
         <div class="clearfix"></div> 
        </div> 
       </div> 
       <div class="clearfix"></div> 
      </div> 
     </div> 
     <script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
							$('.cart-header2').fadeOut('slow', function(c){
						$('.cart-header2').remove();
					});
					});	  
					});
			 </script> 
     <div class="cart-header2"> 
      <div class="close2"> 
      </div> 
      <div class="cart-sec simpleCart_shelfItem"> 
       <div class="cart-item cyc"> 
        <img src="../../homes/images/pic2.jpg" class="img-responsive" alt="" /> 
       </div> 
       <div class="cart-item-info"> 
        <h3><a href="#">商品名(XS R034)</a><span>商品id: 3578</span></h3> 
        <ul class="qty"> 
         <li><p>Size : 5</p></li> 
         <li><p>Qty : 1</p></li> 
        </ul> 
        <div class="delivery"> 
         <p>Service Charges : Rs.100.00</p> 
         <span>到货时间??</span> 
         <div class="clearfix"></div> 
        </div> 
       </div> 
       <div class="clearfix"></div> 
      </div> 
     </div> 
    </div> 
    <div class="col-md-3 cart-total"> 
     <!-- 跳到支付页面 --> 
     <a class="continue" href="#">结款</a> 
     <div class="price-details"> 
      <h3>商品信息</h3> 
      <span>总价格</span> 
      <span class="total1">6200.00</span> 
      <span>数量[]</span> 
      <span class="total1">---</span> 
      <span>单价</span> 
      <span class="total1">150.00</span> 
      <div class="clearfix"></div> 
     </div> 
     <ul class="total_price"> 
      <li class="last_price"> <h4>总金额</h4></li> 
      <li class="last_price"><span>6350.00</span></li> 
      <div class="clearfix"> 
      </div> 
     </ul> 
     <div class="clearfix"></div> 
     <a class="order" href="#">结款</a> 
     <div class="total-item"> 
      <!-- 优惠卷 --> 
      <h3>快把我领回家</h3> 
      <h4>欢迎下次购买</h4> 
      <a class="cpns" href="#">全部结款</a> 
      <p><a href="#">Log In</a> to use accounts - linked coupons</p> 
     </div> 
    </div> 
    <div class="clearfix"> 
    </div> 
   </div> 
  </div> 
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