<!DOCTYPE html>
<html>
 <head> 
  <title>商品列表</title> 
  <link href="{{ asset('/homes/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" /> 
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="{{ asset('/homes/js/jquery.min.js') }}"></script> 
  <!-- Custom Theme files --> 
  <!--theme-style--> 
  <link href="{{ asset('/homes/css/style.css') }}" rel="stylesheet" type="text/css" media="all" /> 
  <link rel="stylesheet" type="text/css" href="{{ asset('/homes/css/bootstrap.min.css') }}">
  <!--//theme-style--> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" /> 
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> 
  <!--fonts--> 
  <!--//fonts--> 
  <!-- start menu --> 
  <link href="{{ asset('/homes/css/memenu.css') }}" rel="stylesheet" type="text/css" media="all" /> 
  <script type="text/javascript" src="{{ asset('/homes/js/memenu.js') }}"></script> 
  <script>$(document).ready(function(){$(".memenu").memenu();});</script> 
  <script src="{{ asset('/homes/js/simpleCart.min.js') }}"> </script> 
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
         </div> <img src="{{ asset('/homes/images/cart.png') }}" alt="" /></h3> </a> 
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
      <a href="{{URL('/')}}"><img src="{{ asset('/homes/images/logo.png') }}" alt="" /></a> 
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
              @foreach($lei as $cate)
              
              @if($cate->pid == 0)
                  <li>|--<a href="{{URL('/home/products')}}/{{ $cate->id }}" style="color:red;">{{ $cate->catename }}</a></li> 
              @else
                  <li>|---<a href="{{URL('/home/products')}}/{{ $cate->id }}">{{ $cate->catename }}</a></li> 
              @endif
      
             @endforeach
            <!--  <li><a href="products.html">Bags</a></li> 
             <li><a href="products.html">Caps &amp; Hats</a></li> 
             <li><a href="products.html">Hoodies &amp; Sweatshirts</a></li> 
             <li><a href="products.html">Jackets &amp; Coats</a></li> 
             <li><a href="products.html">Jeans</a></li> 
             <li><a href="products.html">Jewellery</a></li> 
             <li><a href="products.html">Jumpers &amp; Cardigans</a></li> 
             <li><a href="products.html">Leather Jackets</a></li> 
             <li><a href="products.html">Long Sleeve T-Shirts</a></li> 
             <li><a href="products.html">Loungewear</a></li>  -->
            </ul> 
           </div> 
          </div> 
          <div class="col1"> 
           
          </div> 
          <div class="col1"> 
           <div class="h_nav"> 
            <h4>商品推荐</h4> 
            <ul> 
              @foreach($recommend as $re)
             <li><a href="{{URL('/home/single')}}/{{ $re->id }}/edit">{{ $re->proname }}</a></li> 
              @endforeach
            <!--  <li><a href="products.html">Persol</a></li> 
             <li><a href="products.html">Nike</a></li> 
             <li><a href="products.html">Edwin</a></li> 
             <li><a href="products.html">New Balance</a></li> 
             <li><a href="products.html">Jack &amp; Jones</a></li> 
             <li><a href="products.html">Paul Smith</a></li> 
             <li><a href="products.html">Ray-Ban</a></li> 
             <li><a href="products.html">Wood Wood</a></li>  -->
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
         
           <li class="item1"><a href="javasctipt:void(0)">分类 </a> 
           
              <ul class="cute"> 
                 @foreach($lei as $lll)
                    @if($lll->pid == 0)
                      <li class="subitem1">|-<a href="{{URL('/home/products')}}/{{ $lll->id }}" style="color:red;">{{ $lll->catename }} </a></li> 
                    @else
                      <li class="subitem1">|--<a href="{{URL('/home/products')}}/{{ $lll->id }}">{{ $lll->catename }} </a></li> 
                    @endif
                @endforeach
              </ul>  
             
        </li> 
         
       <!-- <li class="item2"><a href="javascript:void(0)">Women </a> 
        <ul class="cute"> 
         <li class="subitem1"><a href="{{URL('/home/single')}}">Cute Kittens </a></li> 
         <li class="subitem2"><a href="single.html">Strange Stuff </a></li> 
         <li class="subitem3"><a href="single.html">Automatic Fails </a></li> 
        </ul>  -->
      <!-- </li> 
       <li class="item3"><a href="javascript:void(0)">Kids</a> 
        <ul class="cute"> 
         <li class="subitem1"><a href="{{URL('/home/single')}}">Cute Kittens </a></li> 
         <li class="subitem2"><a href="single.html">Strange Stuff </a></li> 
         <li class="subitem3"><a href="single.html">Automatic Fails</a></li> 
        </ul> </li>  -->
       <!-- <li class="item4"><a href="javascript:void(0)">Accesories</a> 
        <ul class="cute"> 
         <li class="subitem1"><a href="{{URL('/home/single')}}">Cute Kittens </a></li> 
         <li class="subitem2"><a href="single.html">Strange Stuff </a></li> 
         <li class="subitem3"><a href="single.html">Automatic Fails</a></li> 
        </ul> </li>  -->
       <!-- <li class="item4"><a href="javascript:void(0)">Shoes</a> 
        <ul class="cute"> 
         <li class="subitem1"><a href="{{URL('/home/single')}}">Cute Kittens </a></li> 
         <li class="subitem2"><a href="product.html">Strange Stuff </a></li> 
         <li class="subitem3"><a href="product.html">Automatic Fails </a></li> 
        </ul> </li>  -->
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
        @foreach($recommend as $com)
        <li><a href="{{ asset('/home/single') }}/{{ $com->id }}/edit">{{ $com->proname }}</a></li> 
        @endforeach
        <!-- <li><a href="#">fashion</a></li> 
        <li><a href="#">lorem</a></li> 
        <li><a href="#">dress</a></li> 
        <li><a href="#">fashion</a></li> 
        <li><a href="#">dress</a></li> 
        <li><a href="#">design</a></li> 
        <li><a href="#">dress</a></li> 
        <li><a href="#">design</a></li> 
        <li><a href="#">fashion</a></li> 
        <li><a href="#">lorem</a></li> 
        <li><a href="#">dress</a></li>  -->
        <div class="clearfix"> 
        </div> 
       </ul> 
      </div> 
     </div> 
     <!----> 
     <div class="product-bottom"> 
      <div class="of-left-in"> 
       <h3 class="best">商城推荐</h3> 
      </div> 
      <!-- 遍历 -->
      @foreach($recommend as $commend)
      <div class="product-go"> 
       <div class=" fashion-grid"> 
        <a href="{{URL('/home/single')}}/{{ $commend->id }}/edit"><img class="img-responsive " src="{{ asset('/uploads') }}/{{ $commend->image }}" alt="" /></a> 
       </div> 
       <div class=" fashion-grid1"> 
        <h6 class="best2"><a href="{{URL('/home/single')}}/{{ $commend->id }}/edit">{{ $commend->descript }}</a></h6> 
        <span class=" price-in1"> ￥ {{ $commend->price }}</span> 
       </div> 
       <div class="clearfix"> 
       </div> 
      </div> 
      @endforeach
      <!-- 遍历 -->
     </div> 
     <!-- 大图 -->
     <div class=" per1"> 
      <a href="{{URL('/home/single')}}"><img class="img-responsive" src="../../homes/images/pro.jpg" alt="" /> 
       <div class="six1"> 
        <h4>特惠</h4> 
        <p>抢购</p> 
         
       </div></a> 
     </div> 
     <!-- 大图 -->
    </div> 
    <div class="col-md-9 product1"> 
     <div class=" bottom-product"> 
      @foreach($list as $goods)
      <div class="col-md-4 bottom-cd simpleCart_shelfItem"> 
       <div class="product-at "> 
        @if($goods->state == 3)
        <a href="javascript:void(0)"><img class="img-responsive" src="{{ asset('/homes/images/timg.jpg') }}" alt="耐心等待" style="width:300px;height:160px;" /> 
         <div class="pro-grid"> 
            <span class="buy-in">暂时下架</span> 
         </div> 
        </a>
        @else
        <a href="{{URL('/home/single')}}/{{ $goods->id }}/edit"><img class="img-responsive" src="{{ asset('/uploads') }}/{{ $goods->image }}" alt="耐心等待" style="width:300px;height:160px;" /> 
         <div class="pro-grid"> 
          <span class="buy-in">查看详情</span> 
         </div> 
        </a>
        @endif 

       </div> 
       <p class="tun">{{ $goods->descript }}
        @if($goods->state == 1)
          <span style='color:orange;'>【新款上市】</span>
        @elseif($goods->state == 2)
          <span style='color:red;'>【火爆销售】</span>
        @else
          <span style='color:grey;'>【供不应求】</span>
        @endif
       </p> 
       <!-- 商品添加到购物车 -->
       @if($goods->state == 3)
       <a href="javascript:void(0)" class="item_add"><p class="number item_price"><i> </i>￥ {{ $goods->price }}</p>
       </a>
       @else
       <a href="{{URL('/home/checkout')}}/{{ $goods->id }}" class="item_add"><p class="number item_price"><i> </i>￥ {{ $goods->price }}</p>
       @endif 
      </div> 
      @endforeach
      <!-- <div class="col-md-4 bottom-cd simpleCart_shelfItem"> 
       <div class="product-at "> 
        <a href="{{URL('/home/single')}}"><img class="img-responsive" src="../../homes/images/pi1.jpg" alt="" /> 
         <div class="pro-grid"> 
          <span class="buy-in">Buy Now</span> 
         </div> </a> 
       </div> 
       <p class="tun">It is a long established fact that a reader</p> 
       <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a> 
      </div>  -->
      <!-- <div class="col-md-4 bottom-cd simpleCart_shelfItem"> 
       <div class="product-at "> 
        <a href="{{URL('/home/single')}}"><img class="img-responsive" src="../../homes/images/pi4.jpg" alt="" /> 
         <div class="pro-grid"> 
          <span class="buy-in">Buy Now</span> 
         </div> </a> 
       </div> 
       <p class="tun">It is a long established fact that a reader</p> 
       <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a> 
      </div>  -->
      <!-- <div class="clearfix"> 
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
      </div>  -->
      <!-- <div class="col-md-4 bottom-cd simpleCart_shelfItem"> 
       <div class="product-at "> 
        <a href="single.html"><img class="img-responsive" src="../../homes/images/pi1.jpg" alt="" /> 
         <div class="pro-grid"> 
          <span class="buy-in">Buy Now</span> 
         </div> </a> 
       </div> 
       <p class="tun">It is a long established fact that a reader</p> 
       <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a> 
      </div>  -->
      <div class="clearfix"> 
      </div> 
     </div> 
     <!-- <div class=" bottom-product"> 
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
     </div>  -->
    </div> 
    <div class="clearfix"> 
    </div> 
    <!-- 分页 --> 
    <nav class="in"> 
     <!-- <ul class="pagination"> 
      <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li> 
      <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li> 
      <li><a href="#">2 <span class="sr-only"></span></a></li> 
      <li><a href="#">3 <span class="sr-only"></span></a></li> 
      <li><a href="#">4 <span class="sr-only"></span></a></li> 
      <li><a href="#">5 <span class="sr-only"></span></a></li> 
      <li> <a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span> </a> </li> 
     </ul>  -->
     {!! $list->render() !!}
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