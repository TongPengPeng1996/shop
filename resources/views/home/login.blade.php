<!DOCTYPE html>
<html>
 <head> 
  <title>登录</title> 
  <link href="../homes/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> 
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="../homes/js/jquery.min.js"></script> 
  <!-- Custom Theme files --> 
  <!--theme-style--> 
  <link href="../homes/css/style.css" rel="stylesheet" type="text/css" media="all" /> 
  <!--//theme-style--> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" /> 
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> 
  <!--fonts--> 
  <!--//fonts--> 
  <!-- start menu --> 
  <link href="../homes/css/memenu.css" rel="stylesheet" type="text/css" media="all" /> 
  <script type="text/javascript" src="../homes/js/memenu.js"></script> 
  <script>$(document).ready(function(){$(".memenu").memenu();});</script> 
  <script src="../homes/js/simpleCart.min.js"> </script> 
 </head> 
 <body> 
  <!--header--> 
  <div class="header"> 
   <div class="header-top"> 
    <div class="container"> 
     <div class="search"> 
      <form> 
       <input type="text" value="搜索 " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" /> 
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
         </div> <img src="../homes/images/cart.png" alt="" /></h3> </a> 
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
      <a href="{{URL('/')}}"><img src="../homes/images/logo.png" alt="" /></a> 
     </div> 
     <div class=" h_menu4"> 
      <ul class="memenu skyblue"> 
       <li class="active grid"><a class="color8" href="{{URL('/')}}">主页</a></li> 
       <li><a class="color1" href="javascript:void(0)">Shop</a> 
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
             <li><a href="{{URL('/home/products')}}">商品列表</a></li> 
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
             <li><a href="{{URL('/home/products')}}">商品列表</a></li> 
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
             <li><a href="{{URL('/home/products')}}">商品列表</a></li> 
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
             <li><a href="{{URL('/home/products')}}">商品列表</a></li> 
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
       <li><a class="color4" href="{{URL('/home/blog')}}">Blog</a></li> 
       <li><a class="color6" href="{{URL('/home/contact')}}">Conact</a></li> 
      </ul> 
     </div> 
     <div class="clearfix"> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!--content--> 
  <div class="container"> 
   <div class="account"> 
    <h1>登录</h1> 
    <div class="account-pass"> 
     <div class="col-md-8 account-top"> 
      <form action="{{ URL('/home/dologin') }}" method="post"> 
	  <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <div> 
        <span>用户名</span> 
        <input type="text" name='username'> 
       </div> 
       <div> 
        <span>密码</span> 
        <input type="password" name='password'> 
       </div> 
       <div> 
        <span>验证码</span> 
        <input type="text" name='code' style="width:200px;height:50px"> 
       </div> 
       <input type="submit" value="登录" />
	  
       <!-- 验证码  --> 
       <img src="{{ URL('/home/check/time()') }}"  onclick="this.src='{{ URL('admin/change') }}/'+Math.random()" style="margin-top:-140px;margin-left:60px;" />
	    <span style="font-size:20px;color:red;">{{ session('msg') }}</span>
      </form> 
     </div> 
     <div class="col-md-4 left-account "> 
      <a href="single.html">
	  <a href="{{URL('/home/register')}}" class="create">注册</a>
	  <img class="img-responsive " src="../homes/images/s1.jpg" alt="" />
	  </a>    
      <div class="clearfix"> 
      </div> 
     </div> 
     <div class="clearfix"> 
     </div> 
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
       <li><a href="#">Location</a></li> 
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
    <p>Team&copy; 2016.Just tonight do it. <a href="#" target="_blank" title="三人行">三人行</a> - Motto <a href="#" title="三人行" target="_blank">三人行</a></p> 
   </div> 
  </div>   
 </body>
</html>