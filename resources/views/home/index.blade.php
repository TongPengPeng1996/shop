<!DOCTYPE html>
<html>
 <head> 
  <title>主页</title> 
  <link href="{{ asset('/homes/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" /> 
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="{{ asset('/homes/js/jquery.min.js') }}"></script> 
  <script type="text/javascript" src="{{ asset('/homes/js/jquery-1.8.3.min.js') }}"></script>
  <!-- Custom Theme files --> 
  <!--theme-style--> 
  <link href="{{ asset('/homes/css/style.css') }}" rel="stylesheet" type="text/css" media="all" /> 
  <!--//theme-style--> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" /> 
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> 
  <!--fonts--> 
  <!--fonts--> 
  <!-- start menu --> 
  <link href="{{ asset('/homes/css/memenu.css') }}" rel="stylesheet" type="text/css" media="all" /> 
  <script type="text/javascript" src="{{ asset('/homes/js/memenu.js') }}"></script> 
  <script>
    $(document).ready(
        function(){
          $(".memenu").memenu();
        });


  </script> 
  <script src="{{ asset('/homes/js/simpleCart.min.js') }}"> </script> 
 </head> 
 <body> 
  <!--header--> 
  <div class="header"> 
   <div class="header-top"> 
    <div class="container"> 
      <p style='color:magenta;font-size:20px;' id='tid'>时间</p>
     <div class="search"> 
      <form> 
       <input type="text" value="搜索 " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '搜索';}" /> 
       <input type="submit" value="Go"> 
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
         </div> <img src="./homes/images/cart.png" alt="" /></h3> </a> 
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
      <a href="{{URL('/')}}"><img src="./homes/images/logo.png" alt="" /></a> 
     </div> 
     <div class=" h_menu4"> 
      <ul class="memenu skyblue"> 
       <li class="active grid"><a class="color8" href="{{URL('/')}}">主页</a></li> 
       <!-- 顶级类 -->
       
       <li><a class="color1" href="javascript:void(0)">大类</a> 
        
        <!-- 顶级类结束 -->
        <div class="mepanel"> 
         <div class="row"> 
          <div class="col1"> 

           <div class="h_nav"> 
            <ul> 
              <!-- 子类 -->
              @foreach($lei as $le)
              @if($le->pid == 0)
             <li>|-<a href="{{URL('/home/products')}}/{{ $le->id }}" class ='lid' style="color:red;">{{ $le->catename }}</a></li> 
             @else
            <li>|---<a href="{{URL('/home/products')}}/{{ $le->id }}" class ='lid'>{{ $le->catename }}</a></li> 
             @endif
                <!-- 子类结束 -->
            <!--  <li><a href="{{URL('/home/products')}}">Bags</a></li> 
             <li><a href="products.html">Caps &amp; Hats</a></li> 
             <li><a href="products.html">Hoodies &amp; Sweatshirts</a></li> 
             <li><a href="products.html">Jackets &amp; Coats</a></li> 
             <li><a href="products.html">Jeans</a></li> 
             <li><a href="products.html">Jewellery</a></li> 
             <li><a href="products.html">Jumpers &amp; Cardigans</a></li> 
             <li><a href="products.html">Leather Jackets</a></li> 
             <li><a href="products.html">Long Sleeve T-Shirts</a></li> 
             <li><a href="products.html">Loungewear</a></li>  -->
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
              @foreach($recommend as $commend)
             <li><a href="{{URL('/home/single')}}/{{ $commend->id }}/edit">{{ $commend->proname }}</a></li> 
             @endforeach
             <!-- <li><a href="products.html">Persol</a></li> 
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
      <!--  <li class="grid"><a class="color2" href="#"> 女装</a> 
        <div class="mepanel"> 
         <div class="row"> 
          <div class="col1"> 
           <div class="h_nav"> 
            <ul> 
             <li><a href="{{URL('/home/products')}}">列表详情键</a></li> 
             <li><a href="{{URL('/home/products')}}">Bags</a></li> 
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
             <li><a href="{{URL('/home/products')}}">列表详情键</a></li> 
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
             <li><a href="{{URL('/home/products')}}">列表详情键</a></li> 
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
        </div> </li>  -->
       <li><a class="color4" href="{{URL('/home/blog')}}">更多资讯</a></li> 
       <li><a class="color6" href="{{URL('/home/contact')}}">联系</a></li> 
	   <li><a class="color6" href="{{URL('/home/user_center')}}">个人中心</a></li>  
      </ul> 
     </div> 
     <div class="clearfix"> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="banner"> 
   <div class="container"> 
    <script src="{{ asset('/homes/js/responsiveslides.min.js') }}"></script> 
    <script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script> 
    <div id="top" class="callbacks_container"> 
     <ul class="rslides" id="slider"> 
      <li> 
       <div class="banner-text"> 
        <h3>治愈“桃花装”</h3>
        <br /> 
        <h3>挑逗视觉神经</h3> 
        <p>尝试过了夏季的“飞檐走壁”，的超能女汉子，秋季怎么样才能变身浪漫的治愈少女？打造玲珑有致的曲线，提升温暖感！换上秋季新装，接触酷女郎利器，拥抱暖意融融的秋天吧！</p> 
        <!-- 详情 --> 
        <a href="javascript:void(0)">一样的流派，不一样的做派。</a> 
       </div> 
     </li> 
      <li> 
       <div class="banner-text"> 
        <h3>让穿搭造型像音乐一样具有节奏感 </h3>
        <br /> 
        <p>衣服不单单是布料是与你肌肤之亲的生命</p> 
        <a href="javascript:void(0)">Listen to the music</a> 
       </div> </li> 
      <li> 
       <div class="banner-text"> 
        <h3>Still waiting for something</h3> 
        <p>为消费者打造一个风格突出、与众不同的时尚品牌，用合理的价格为中国中产阶级时尚人士提供丰富、精致的时尚产品。</p> 
        <a href="javascript:void(0)">Just do It</a> 
       </div> 
     </li> 
     </ul> 
    </div> 
   </div> 
  </div> &lt; 
  <!--content--> 
  <div class="content"> 
   <div class="container"> 
    <div class="content-top"> 
     <h1>新产品</h1> 
     <div class="grid-in"> 
      <!-- ************新产品****************** -->
      @foreach($newproduct as $newp)
      <div class="col-md-4 grid-top"> 
       <!-- 详情 -->
       @if($newp->state == 3)
       <a href="javascript:void(0)" class="b-link-stripe b-animate-go  thickbox">
        @else
        <a href="{{URL('/home/single')}}/{{ $newp->id }}/edit" class="b-link-stripe b-animate-go  thickbox"> 
        @endif
        <img class="img-responsive" src="{{ asset('/uploads/s_') }}{{ $newp->image }}" alt="" disabled/> 
        <div class="b-wrapper"> 
         <h3 class="b-animate b-from-left    b-delay03 "> <span>{{ $newp->proname }}</span> </h3> 
        </div> </a> 
       <p>
        @if($newp->state == 3)
        <a href="javascript:void(0)">
         @else
         <a href="{{ URL('/admin/single') }}/{{ $newp->id }}/edit">
         @endif 
          {{ $newp->descript }}
        @if($newp->state == 1)
          <span style="color:orange;">【新品上市】</span>
        @elseif($newp->state == 2)
          <span style="color:red;">【火爆热销】</span>
        @else
          <span style="color:grey;">【供不应求】</span>
        @endif
       </a></p> 
      </div> 
      @endforeach
      <!-- *********************************** -->
      
      <!-- 清除左浮动  --> 
      <div class="clearfix"> 
      </div> 
      <!-- 清除左浮动结束 --> 
     </div> 
    </div> 
    <!--遍历的内容--> 
    <div class="content-top-bottom"> 
     <h2>限时抢购</h2> 
     @if($first)
          @if($first->activity == 3)
        <h2 id='dtime'>10<h2>
         @endif
     @endif
     
      @foreach($timerob as $time) 
      
     <div class="col-md-3 men"> 
        <a href="{{URL('/home/single')}}/{{ $time->id }}/edit" class="b-link-stripe b-animate-go  thickbox">
            <img class="img-responsive" src="{{ URL('/uploads') }}/{{ $time->image }}" alt="请等待" style="width:355px;height:280px;" /> 
           <div class="b-wrapper"> 
            <h3 class="b-animate b-from-top top-in   b-delay03 "> 
              <span>{{ $time->proname }}</span> 
            </h3> 
           </div> 
       </a> 
       <center><h3 style="color:red;" class="ing">抢购中</h3></center>
     </div>
     @endforeach
     
     <div class="clearfix"> 
     </div> 
    </div> 
   </div> 
   <!--遍历内容--> 
   <!-- 友情链接 --> 
   <div class="content-bottom"> 
    <ul> 
      @foreach($data as $dataValue)
        <li><a href="{{ $dataValue->url }}"><img class="img-responsive" src="{{ URL('/uploads') }}/{{ $dataValue->image }}" alt="品牌" title="链接"/></a></li>
      @endforeach
     <!-- <li><a href="#"><img class="img-responsive" src="./homes/images/lo.png" alt="" /></a></li> -->
     
     <div class="clearfix"> 
     </div> 
    </ul> 
   </div> 
  </div> 
   <center>
      <table>
           @foreach($list as $v)
          <th><a  style="font-size:18px; color:black; text-decoration:none; font-weight:bold; margin:15px;"href="{{ $v->descript }}">{{ $v->title }}</a></th>
          @endforeach
      </table>
  </center>
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
    <p>Team&copy; 2016.Just tonight do it.<a href="#" target="_blank" title="三人行">三人行</a> - Motto <a href="#" title="三人行" target="_blank">必有我师焉</a></p> 
   </div> 
  </div>  
 </body>
 <script type="text/javascript">
      var tid = document.getElementById('tid');
      setInterval(function (){
          var date = new Date();
          // 年月日 时分秒
          var Y = date.getFullYear();
          var m = date.getMonth();
          var d = date.getDate();
          var H = date.getHours();
          var i = date.getMinutes();
          var s = date.getSeconds();
          // 周几
          var w = date.getDay();
          H = (H<10) ? '0'+H : H;
          i = (i<10) ? '0'+i : i;
          s = (s<10) ? '0'+s : s;
          if(w == 1){
              w = '一';
          }
          if(w == 2){
              w = '二';
          }
          if(w == 3){
              w = '三';
          }
          if(w == 4){
              w = '四';
          }
          if(w == 5){
              w = '五';
          }
          if(w == 6){
              w = '六';
          }
          if(w == 0){
              w = '日';
          }
          var info = Y+'-'+(m+1)+'-'+d+'　'+H+':'+i+':'+s+'　周'+w;
          tid.innerHTML = info;
      },1000);

      $('.lid').mouseover(function(){
        alert(222);
      });
        

       // 做个倒计时
          var dtime = document.getElementById('dtime');
          
          mytime =  setInterval(function(){
             var dtimee= parseInt(dtime.innerHTML);
              var date = new Date();

               dtime.innerHTML = dtimee -1;
              if(dtime.innerHTML <= 0){
                  clearInterval(mytime);
                  $('.ing').html('时间到了');
                  $('.ing').css('color','black');
              }
          },1000);

          
      
            
          
          
            
 </script>

  

 

</html>