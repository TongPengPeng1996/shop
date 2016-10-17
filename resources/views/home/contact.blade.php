<!DOCTYPE html>
<html>
 <head> 
  <title>联系</title> 
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
  <!-- <link href='http://fonts.useso.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'> -->
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
       <input type="text" value="搜索 " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" /> 
       <input type="submit" value="Go" /> 
      </form> 
     </div> 
     <div class="header-left"> 
        @if(session('homeuser'))
    <ul>
      <li><a href="{{URL('/home/register')}}">欢迎 {{ session('homeuser') }} 的光临</a></li> 
      <li><a href="{{URL('/home/logout')}}">退出</a></li>
    </ul>
  @else
    <ul>
      <li><a href="{{URL('/home/login')}}">登录</a></li> 
      <li><a href="{{URL('/home/register')}}">注册</a></li> 
    </ul>
  @endif
      <div class="cart box_1"> 
       <a href="{{URL('/home/checkout')}}"> <h3> 
         <div class="total"> 
          <span class="simpleCart_total"></span> (
          <span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)
         </div> <img src="../../homes/images/cart.png" alt="" /></h3> </a> 
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
       <li><a class="color1" href="javascript:void(0)">男人</a> 
        <div class="mepanel"> 
         <div class="row"> 
          <div class="col1"> 
           <div class="h_nav"> 
            <ul> 
             <li><a href="{{URL('/home/products')}}">商品列表</a></li> 
             <li><a href="{{URL('/home/products')}}">Bags</a></li> 
             <li><a href="{{URL('/home/products')}}">Caps &amp; Hats</a></li> 
             <li><a href="{{URL('/home/products')}}">Hoodies &amp; Sweatshirts</a></li> 
             <li><a href="{{URL('/home/products')}}">Jackets &amp; Coats</a></li> 
             <li><a href="{{URL('/home/products')}}">Jeans</a></li> 
             <li><a href="{{URL('/home/products')}}">Jewellery</a></li> 
             <li><a href="{{URL('/home/products')}}">Jumpers &amp; Cardigans</a></li> 
             <li><a href="{{URL('/home/products')}}">Leather Jackets</a></li> 
             <li><a href="{{URL('/home/products')}}">Long Sleeve T-Shirts</a></li> 
             <li><a href="{{URL('/home/products')}}">Loungewear</a></li> 
            </ul> 
           </div> 
          </div> 
          <div class="col1"> 
           <div class="h_nav"> 
            <ul> 
             <li><a href="{{URL('/home/products')}}">Shirts</a></li> 
             <li><a href="{{URL('/home/products')}}">Shoes, Boots &amp; Trainers</a></li> 
             <li><a href="{{URL('/home/products')}}">Shorts</a></li> 
             <li><a href="{{URL('/home/products')}}">Suits &amp; Blazers</a></li> 
             <li><a href="{{URL('/home/products')}}">Sunglasses</a></li> 
             <li><a href="{{URL('/home/products')}}">Sweatpants</a></li> 
             <li><a href="{{URL('/home/products')}}">Swimwear</a></li> 
             <li><a href="{{URL('/home/products')}}">Trousers &amp; Chinos</a></li> 
             <li><a href="{{URL('/home/products')}}">T-Shirts</a></li> 
             <li><a href="{{URL('/home/products')}}">Underwear &amp; Socks</a></li> 
             <li><a href="{{URL('/home/products')}}">Vests</a></li> 
            </ul> 
           </div> 
          </div> 
          <div class="col1"> 
           <div class="h_nav"> 
            <h4>Popular Brands</h4> 
            <ul> 
             <li><a href="{{URL('/home/products')}}">Levis</a></li> 
             <li><a href="{{URL('/home/products')}}">Persol</a></li> 
             <li><a href="{{URL('/home/products')}}">Nike</a></li> 
             <li><a href="{{URL('/home/products')}}">Edwin</a></li> 
             <li><a href="{{URL('/home/products')}}">New Balance</a></li> 
             <li><a href="{{URL('/home/products')}}">Jack &amp; Jones</a></li> 
             <li><a href="{{URL('/home/products')}}">Paul Smith</a></li> 
             <li><a href="{{URL('/home/products')}}">Ray-Ban</a></li> 
             <li><a href="{{URL('/home/products')}}">Wood Wood</a></li> 
            </ul> 
           </div> 
          </div> 
         </div> 
        </div> </li> 
       <li class="grid"><a class="color2" href="javascript:void(0)"> 女人</a> 
        <div class="mepanel"> 
         <div class="row"> 
          <div class="col1"> 
           <div class="h_nav"> 
            <ul> 
             <li><a href="{{URL('/home/products')}}">商品列表</a></li> 
             <li><a href="{{URL('/home/products')}}">Bags</a></li> 
             <li><a href="{{URL('/home/products')}}">Caps &amp; Hats</a></li> 
             <li><a href="{{URL('/home/products')}}">Hoodies &amp; Sweatshirts</a></li> 
             <li><a href="{{URL('/home/products')}}">Jackets &amp; Coats</a></li> 
             <li><a href="{{URL('/home/products')}}">Jeans</a></li> 
             <li><a href="{{URL('/home/products')}}">Jewellery</a></li> 
             <li><a href="{{URL('/home/products')}}">Jumpers &amp; Cardigans</a></li> 
             <li><a href="{{URL('/home/products')}}">Leather Jackets</a></li> 
             <li><a href="{{URL('/home/products')}}">Long Sleeve T-Shirts</a></li> 
             <li><a href="{{URL('/home/products')}}">Loungewear</a></li> 
            </ul> 
           </div> 
          </div> 
          <div class="col1"> 
           <div class="h_nav"> 
            <ul> 
             <li><a href="{{URL('/home/products')}}">Shirts</a></li> 
             <li><a href="{{URL('/home/products')}}">Shoes, Boots &amp; Trainers</a></li> 
             <li><a href="{{URL('/home/products')}}">Shorts</a></li> 
             <li><a href="{{URL('/home/products')}}">Suits &amp; Blazers</a></li> 
             <li><a href="{{URL('/home/products')}}">Sunglasses</a></li> 
             <li><a href="{{URL('/home/products')}}">Sweatpants</a></li> 
             <li><a href="{{URL('/home/products')}}">Swimwear</a></li> 
             <li><a href="{{URL('/home/products')}}">Trousers &amp; Chinos</a></li> 
             <li><a href="{{URL('/home/products')}}">T-Shirts</a></li> 
             <li><a href="{{URL('/home/products')}}">Underwear &amp; Socks</a></li> 
             <li><a href="{{URL('/home/products')}}">Vests</a></li> 
            </ul> 
           </div> 
          </div> 
          <div class="col1"> 
           <div class="h_nav"> 
            <h4>Popular Brands</h4> 
            <ul> 
             <li><a href="{{URL('/home/products')}}">Levis</a></li> 
             <li><a href="{{URL('/home/products')}}">Persol</a></li> 
             <li><a href="{{URL('/home/products')}}">Nike</a></li> 
             <li><a href="{{URL('/home/products')}}">Edwin</a></li> 
             <li><a href="{{URL('/home/products')}}">New Balance</a></li> 
             <li><a href="{{URL('/home/products')}}">Jack &amp; Jones</a></li> 
             <li><a href="{{URL('/home/products')}}">Paul Smith</a></li> 
             <li><a href="{{URL('/home/products')}}">Ray-Ban</a></li> 
             <li><a href="{{URL('/home/products')}}">Wood Wood</a></li> 
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
  <div class="contact"> 
   <div class="container"> 
    <h1>联系（发送博客）</h1> 
    <div class="contact-form"> 
     <div class="col-md-8 contact-grid"> 
      <form> 
       <input type="text" value="用户名" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}" /> 
       <input type="text" value="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}" /> 
       <input type="text" value="主题" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Subject';}" /> 
       <textarea cols="77" rows="6" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">内容</textarea> 
       <div class="send"> 
        <input type="submit" value="提交" /> 
       </div> 
      </form> 
     </div> 
     <div class="col-md-4 contact-in"> 
      <div class="address-more"> 
       <h4>地址</h4> 
       <p>公司名称</p> 
       <p>三人行工作室</p> 
       <p>创立于2016.9.27</p>
       <p> </p>
       <p>打造国民挨揍牌子</p>
       <p> </p>
      </div> 
      <div class="address-more"> 
       <h4>Address1</h4> 
       <p>Tel:13621323145</p> 
       <p>QQ:1483425810</p> 
       <p>Email:<a href="mailto:SaRnX@qq.com"> SaRnX@qq.com</a></p> 
      </div> 
     </div> 
     <div class="clearfix"> 
     </div> 
    </div> 
    <!-- 加点东西 --> 
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
    <p>Team&copy; 2016.Just tonight do it.<a href="#" target="_blank" title="三人行">三人行</a> - Motto <a href="#" title="三人行" target="_blank">必有我师焉</a></p> 
   </div> 
  </div>   
 </body>
</html>