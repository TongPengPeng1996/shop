<!DOCTYPE html>
<html>
 <head> 
  <title>商品详情</title> 
  <link href="{{ asset('/homes/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" /> 
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="{{ asset('/homes/js/jquery.min.js') }}"></script> 
  <!-- Custom Theme files --> 
  <!--theme-style--> 
  <link href="{{ asset('/homes/css/style.css') }}" rel="stylesheet" type="text/css" media="all" /> 
   <script src="{{ asset('/homes/js/jquery-1.8.3.min.js') }}"></script> 
  <!--//theme-style--> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" /> 
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> 
  <!--fonts--> 
  
  <!--//fonts--> 
  <!-- start menu --> 
  <link href="{{ asset('/homes/css/memenu.css') }}" rel="stylesheet" type="text/css" media="all" /> 
  <script type="text/javascript" src="{{ asset('/homes/js/memenu.js') }}"></script> 
  <script>$(document).ready(function(){$(".memenu").memenu();});</script> 
  <script src="{{ asset('/homes/js/main.js') }}"></script> 
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
       <a href="{{ URL('/home/checkout') }}"> <h3> 
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
              @foreach($lei as $le)

              @if($le->pid == 0)
                  <li>|-<a href="{{URL('/home/products')}}/{{ $le->id }}" style="color:red;">{{ $le->catename }}</a></li> 
              @else
                  <li>|--<a href="{{URL('/home/products')}}/{{ $le->id }}">{{ $le->catename }}</a></li> 
              @endif
             @endforeach
            
            </ul> 
           </div> 
          </div> 
          <div class="col1"> 
           
          </div> 
          <div class="col1"> 
           <div class="h_nav"> 
            <h4>商品推荐</h4> 
            <ul> 
              @foreach($recommend as $rec)
             <li><a href="{{URL('/home/products')}}">{{ $rec->proname }}</a></li> 
             @endforeach
         
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
       <h3 class="cate">Categories</h3> 
      </div> 
      <ul class="menu"> 
       <li class="item1"><a href="javascript:void(0)">分类 </a> 
          <ul class="cute"> 
            @foreach($lei as $lll)
              @if($lll->pid == 0)
                  <li class="subitem1">|-<a href="{{URL('/home/products')}}/{{ $lll->id }}" style="color:red;">{{ $lll->catename }}</a></li> 
              @else
                  <li class="subitem1">|--<a href="{{URL('/home/products')}}/{{ $lll->id }}">{{ $lll->catename }}</a></li> 
              @endif
           @endforeach
          </ul> 
        </li> 
      
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
       <!-- <a href="#" class="shop-now">SHOP NOW</a> --> 
       <div class="clearfix"> 
       </div> 
      </div> 
     </div> 
     <div class="sellers"> 
      <div class="of-left-in"> 
       <!-- 跳商品列表  ?? --> 
       <h3 class="tag">特惠</h3> 
      </div> 
      <div class="tags"> 
       <ul> 
        @foreach($recommend as $recom)
        <li><a href="{{ URL('/home/single') }}/{{ $recom->id }}/edit">{{ $recom->proname }}</a></li>
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
      @foreach($recommend as $commend)
      <div class="product-go"> 
       <div class=" fashion-grid"> 
        <!-- 跳到商品详情 -->
        <a href="{{URL('/home/single')}}/{{ $commend->id }}/edit"><img class="img-responsive " src="{{ asset('/uploads') }}/{{ $commend->image }}" alt="" /></a> 
       </div> 
       <div class=" fashion-grid1"> 
        <h6 class="best2"><a href="{{URL('/home/single')}}">{{ $commend->descript }} </a></h6> 
        <span class=" price-in1"> ￥{{ $commend->price }}</span> 
       </div> 
       <div class="clearfix"> 
       </div>
      </div> 
      @endforeach
      <!-- <div class="product-go"> 
       <div class=" fashion-grid"> 
        <a href="{{URL('/home/single')}}"><img class="img-responsive " src="{{ asset('/homes/images/p2.jpg') }}" alt="" /></a> 
       </div> 
       <div class="fashion-grid1"> 
        <h6 class="best2"><a href="{{URL('/home/single')}}">Lorem ipsum dolor sit amet consectetuer </a></h6> 
        <span class=" price-in1"> $40.00</span> 
       </div> 
       <div class="clearfix"> 
       </div> 
      </div>  -->
     </div> 
     <div class=" per1"> 
      <!-- 跳到商品详情 --> 
      <a href="#"><img class="img-responsive" src="{{ asset('/homes/images/pro.jpg') }}" alt="" /> 
       <div class="six1"> 
        <h4>特惠</h4> 
        <p>抢购</p> 
        
       </div></a> 
     </div> 
    </div> 
    <div class="col-md-9 product-price1"> 
     <div class="col-md-5 single-top"> 
      <div class="flexslider"> 
        <img src="{{ asset('/uploads') }}/{{ $list->image }}" width="300" height="400">
       
      </div> 
      <!-- FlexSlider --> 
      <script defer="" src="{{ asset('/homes/js/jquery.flexslider.js') }}"></script> 
      <link rel="stylesheet" href="{{ asset('/homes/css/flexslider.css') }}" type="text/css" media="screen" /> 
      <script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script> 
     </div> 
     <!-- 张鹏宇 -->
      <form action="{{ URL('/home/ok-order') }}" method="get">
     <!-- 张鹏宇 -->

     <div class="col-md-7 single-top-in simpleCart_shelfItem"> 
      <div class="single-para "> 
       <h4>{{ $list->proname }}</h4> 
       <div class="star-on"> 
        <ul class="star-footer"> 
         <li><a href="#"><i> </i></a></li> 
         <li><a href="#"><i> </i></a></li> 
         <li><a href="#"><i> </i></a></li> 
         <li><a href="#"><i> </i></a></li> 
         <li><a href="#"><i> </i></a></li> 
        </ul> 
        <div class="review"> 
          <!-- {{ $list->id }}   这是商品id -->   
         <a href="javascript:void(0)"> 1 customer review {{ $list->id }}</a> 
        </div> 
        <div class="clearfix"> 
        </div> 
       </div> 
       <h5 class="item_price">￥ {{ $list->price }}</h5> 
       <p>{{ $list->descript }}</p> 
       <div class="available"> 
        <ul> 
         <li>颜色
         
         <input type="text" name='color' value="{{ $detail->color }}" style="width:350px;height:45px;margin-left:32px;" disabled>
       </li> 
         <li class="size-in">尺寸
         
           <input type="text" name='size' value="{{ $detail->size }}" style="width:350px;height:45px;margin-left:32px;" disabled>
        </li> 
         <div class="clearfix"> 
         </div> 
        </ul> 
       </div> 
       <ul class="tag-men"> 
        
          购买数量：
          <!-- 张鹏宇 -->
             <!--  <a href="Javascript:void(0)"><button style="width:30px;" >-</button></a>
                 <input type='text' name='num' class='num' style="float:left;width:50px;" value='1'>
                 <button style="width:30px;" >+</button>
              <a href="Javascript:"> -->
                <!-- 坏的 -->
                件
          <!-- 张鹏宇 -->

       </ul> 
      
        
        <input class="add-cart item_add" type="submit" value="立即购买" style="background-color:#EF5F21;font-size:17px;color:white;height:28px;width:100px;text-decoration:none;">
       <a href="{{URL('/home/checkout')}}/{{ $list->id }}" id="url" class="add-cart item_add">添加到购物车</a> 
       <a href="#" class="add-cart item_add">添加收藏</a>
      </div> 
     </div> 
     <!-- 张鹏宇 -->
          </form>
      <!-- 张鹏宇 -->

     <div class="clearfix"> 
     </div> 
     <!----> 
     <div class="cd-tabs"> 
      <nav> 
       <ul class="cd-tabs-navigation"> 
    <!-- (((((((((((((((((((((()))))))))))))))))))))) -->
        <li><a data-content="cinema" href="#0">产品所有的参数 </a></li> 
      <!-- ((((((((((((((((((())))))))))))))))))) -->
       </ul> 
      </nav> 
      <ul class="cd-tabs-content"> 
     
       <li data-content="cinema"> 
        <div class="facts1"> 
         <div class="color">
          <p>颜色</p> 
          <span>{{ $detail->color }}</span> 
          <div class="clearfix"></div> 
         </div> 
         <div class="color"> 
          <p>尺寸</p> 
          <span>{{ $detail->size }}</span> 
          <div class="clearfix"></div> 
         </div> 
        </div> </li> 
       
       <div class="clearfix"></div> 
      </ul> 
     </div> 
     <div class=" bottom-product"> 
      <center><h2 style="color:magenta;">镇店之宝</h2></center>
      <!-- 镇店之宝  非卖品 -->
      @foreach($introduce as $intro)
      <div class="col-md-4 bottom-cd simpleCart_shelfItem" style="margin-top:20px;"> 
       <div class="product-at "> 
        <a href="javascript:void(0)"><img class="img-responsive" src="{{ asset('/uploads') }}/{{ $intro->GoodsImage }}" style="width:200px;height:200px;" /> <div class="pro-grid">
          <span class="buy-in">{{ $intro->GoodsName }}</span> 
         </div> </a> 
       </div> 
       <p class="tun">{{ $intro->descript }}<span style="font-size:15px;color:red;">(非卖品)</span></p> 
       <a href="javascript:void(0)" class="item_add"><p class="number item_price"><i> </i>￥ {{ $intro->GoodsPrice }}</p></a> 
      </div> 
      @endforeach
      
      <div class="clearfix"> 
      </div> 
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
  <script type="text/javascript">
    // $('#inputid').blur(function(){
    //   var num = $('#inputid').val();
    //   // alert(num);
    //   var id = $('#lid').val();
    //   // console.log(id);
    //   // alert(id);
    //   $ajax({
    //     url:'/home/checkout/create',
    //     type:'get',
    //     asyns:true,
    //     data:{nums:num},
    //     headers: {
    //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    //   });
    // });
    // var url = document.getElementById('url');
    // var num = document.getElementById('num');
    // var a = num.value;

    // id.href = '{{URL('/home/checkouts')}}/{{ $list->id }}/'+a;

    // num.blur(function(){
    //   alert(num.value);
    // });
  </script>   
 </body>
</html>