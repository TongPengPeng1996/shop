<!DOCTYPE html>
<html>
 <head> 
  <title>购物车</title> 
  <link href="{{ asset('/homes/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" /> 
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="{{ asset('/homes/js/jquery.min.js') }}"></script> 
  <script src="{{ asset('/homes/js/jquery-1.8.3.min.js') }}"></script> 
  <!-- Custom Theme files --> 
  <!--theme-style--> 
  <link href="{{ asset('/homes/css/style.css') }}" rel="stylesheet" type="text/css" media="all" /> 
  <!--//theme-style--> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" /> 
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> 
   <script src="{{ asset('/homes/js/jquery-1.8.3.min.js') }}"></script> 
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
    <div class="logo"> 
      <a href="{{URL('/')}}"><img src="{{ asset('/homes/images/logo.png') }}" alt="" /></a> 
     </div> 
    
   </div> 
  </div> 
  <div class="container"> 
   <div class="check"> 

    <h1>我的购物清单</h1> 
    <!-- 测试 -->
    <!-- 结款 -->
     <!-- <form action="" method='post' name='payment'>
        <input type='hidden' name="_token" value="{{ csrf_token() }}">
        <input type='hidden' name="_method" value="put">
     </form> -->
     <!-- 结款结束 -->
     <!-- 删除 -->
        <form action="" method='post' display = 'none' name='myform'>
            <input type='hidden' name='_token' value="{{ csrf_token() }}">
            <input type='hidden' name='_method' value="delete">
         </form>
         <!-- 删除 -->
    <!-- form测试 -->
    <form action="" method='post' name='payment'>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="put">
         @foreach($list as $data)
    <div>

        <div class="col-md-9 cart-items"> 
     <script>$(document).ready(function(c) {
          $('.close1').on('click', function(c){
            $('.cart-header').fadeOut('slow', function(c){
              $('.cart-header2').remove();
            });
            });   
          });
         </script> 
     <div class="cart-header"> 
      <!-- <div  id='close'>   -->
         <!-- 删除按钮  -->
         
         <a href="javascript:doDel({{ $data->cid }})" class="close1" id='close'></a>
         <script type="text/javascript">
              function doDel(id){
                  var form = document.myform;
                  form.action = "{{ URL('/home/checkout') }}/"+id;
                  form.submit();
              }
         </script>
      <!-- </div>  -->
      <script type="text/javascript">
          $('#close').click(function(){
            // alert(1); 
          });
      </script>
       <!-- 显示内容  -->
      <input type='checkbox' name='xz'>
      <div class="cart-sec simpleCart_shelfItem"> 
       <div class="cart-item cyc"> 
        <img src="{{ asset('/uploads') }}/{{ $data->image }}" class="img-responsive" alt="请等待" style='width:200px;height:200px;'/> 
       </div> 

       <div class="cart-item-info"> 

        <!-- 跳到商品详情  -->
        <h3><a href="{{ URL('/home/single') }}/{{ $data->ggid }}/edit"><span style="color:red;font-size:20px;">商品名({{ $data->proname }})</span></a><span>商品id:{{ $data->ggid }} </span></h3> 

        <ul class="qty"> 
         <li><p>尺寸 : {{ $data->size }}</p></li> 
         <li><p>颜色 : {{ $data->color }}</p></li> 
        </ul> 
        <div class="delivery"> 
          <p style="color:red;">购物车ID : {{ $data->cid }}</p><br>
         <p>{{ $data->descript }}</p> 
         <!-- <span>??快递状态</span>  -->
         <div class="clearfix"></div> 
        </div> 
       </div> 
       <div class="clearfix"></div> 
      </div> 
      
     <!-- 显示内容结束  -->
     </div> 
     <script>$(document).ready(function(c) {
          $('.close2').on('click', function(c){
              $('.cart-header2').fadeOut('slow', function(c){
            $('.cart-header2').remove();
          });
          });   
          });
       </script> 
     
    </div> 
    <div class="col-md-3 cart-total"> 
     <!-- 跳到支付页面 --> 
     
     <a class="continue" href="javascript:payment({{ $data->cid }})">结款</a> 
     <script type="text/javascript">
           // 结款
        function payment(cid)
        {
            var forme = document.payment;
            // alert(cid);
            forme.action = "{{ URL('/home/checkout') }}/"+cid;
           // alert(cid);
            forme.submit(); 
        }
     </script>
     <div class="price-details"> 
      <h3>商品信息</h3> 
      <span>总价格(元)</span> 
      <span class="total1" style="font-size:18px;"><span id="totalPrice{{ $data->gid }}">{{ $data->totalprice }}</span></span> 
      <span>数量[]</span> 
      <span class="total1">
       <!-- 加减运算 -->
        <a href="javascript:void(0)" style="width:30px;float:left;font-size:30px;text-decoration:none;" class='reduce' onclick="reduce({{ $data->gid }})">-</a>
            <input type='text' name='nums{{ $data->gid }}' id="num{{ $data->gid }}" style="float:left;width:50px;" value="1">
        <a href="javascript:void(0)" style="width:30px;float:left;font-size:30px;text-decoration:none;" class='plus' onclick="plus({{ $data->gid }})">+</a>
        <!-- 加减运算 -->
      </span> 
      <span>单价(元)</span> 
      <span class="total1" style="font-size:18px;"><span id='price{{ $data->gid }}'>{{ $data->price }}</span></span> 
      <div class="clearfix"></div> 
     </div> 
     <ul class="total_price"> 
      <li class="last_price" > <h4>总金额(元)</h4></li> 
      <li class="last_price" ><span id='money{{ $data->gid }}'>{{ $data->price }}</span></li> 
      <div class="clearfix"> 
      </div> 
     </ul> 
     <div class="clearfix"></div> 
    
    </div>
    <!-- 结束 -->
    </div>

    @endforeach
      <input type='submit' value='全部提交' style='float:left;width:200px;height:40px;background-color:orange;'>
    </form>
     <!-- form 测试 结束-->
   
    <!-- 测试 -->
   
     
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
  <script type="text/javascript">
/**********************************************************/
  
    
    /***************************************************/
    //减
    function reduce(gid)
    {
      // 拿取input数量
      
       var num = document.getElementById('num'+gid);    //数量 

       var price = document.getElementById('price'+gid);   //单价

       var totalPrice = document.getElementById('totalPrice'+gid);   //总价
       var money = document.getElementById('money'+gid);   // 总金额

       // 将数量转型
       
       var inta = parseInt(num.value);
       // alert(inta);
       num.value = inta -1;

        if(num.value <= 1){
           num.value = 1;
        }
         // 单价

          var a = parseInt(price.innerHTML);
          
          var b = parseInt(num.value);
          var total = (a*b);
          // alert(total);
          // 总价
          // var ob = $('#totalPrice1');

          // ob.html(total);
          totalPrice.innerHTML = total;
          // var bo = $('#money1');
          money.innerHTML = total;
          // bo.html(total);
       // alert(inta);
       // num.val(inta -1);

       // alert(gid);

    }
    // 加
    function plus(gid)
    {
     // 拿取input数量
       // var num = $(this).next();
       var num = document.getElementById('num'+gid);    //数量 

       var price = document.getElementById('price'+gid);   //单价

       var totalPrice = document.getElementById('totalPrice'+gid);   //总价
       var money = document.getElementById('money'+gid);   // 总金额

       // 将数量转型
       var inta = parseInt(num.value);
       // alert(inta);
       num.value = inta +1;

       
         // 单价

          var a = parseInt(price.innerHTML);
          
          var b = parseInt(num.value);
          var total = (a*b);
          // alert(total);
          // 总价
          // var ob = $('#totalPrice1');

          // ob.html(total);
          totalPrice.innerHTML = total;
          // var bo = $('#money1');
          money.innerHTML = total;
    }
        
       
   
  </script>   
</html>