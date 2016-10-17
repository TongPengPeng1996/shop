<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta name="Generator" content="ECSHOP v2.7.3">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Keywords" content="">
<meta name="Description" content="">

<title>用户信息</title>




<link rel="shortcut icon" href="http://weipin.ecshop119.com/favicon.ico">
<link rel="icon" href="http://weipin.ecshop119.com/animated_favicon.gif" type="image/gif">
<link href="{{ asset('/homes/css/style_5.css') }}" rel="stylesheet" type="text/css">






<script type="text/javascript" src="{{ asset('/homes/js/transport_jquery_4.js') }}"></script><script type="text/javascript" src="{{ asset('/homes/js/common_5.js') }}"></script><script type="text/javascript" src="{{ asset('/homes/js/user.js') }}"></script></head>

<!-- 引入 -->
<link href="{{ asset('/homes/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<script src="{{ asset('/homes/js/jquery.min.js') }}"></script>
<link href="{{ asset('/homes/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
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
<!-- 引入 -->


<body>
<div class="body_user ">
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript">
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>


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
   <div class="head-top"> 
     <div class="logo" style="margin-left:200px;"> 
      <a href="{{URL('/')}}"><img src="{{ asset('/homes/images/logo.png') }}" alt="" /></a> 
     </div> 
      
     <div class="clearfix">

     </div> 
    </div>

    <hr>
</div>
<center>
      <!-- <form action="" method="post" name="myform">
          <input type="hidden" name="_token" value="{{ csrf_token()}}">
      
      </form> -->
      <form  action="{{ URL('/home/adjust') }}" method="post" class="form-inline">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="row cl" style="font-size:18px;">
            收货人姓名：<div><input type="text" name="name"></div>
          </div>

          <div style="height:20px;"></div>

          <div class="row cl" style="font-size:18px;">
            收货人电话：<div><input type="text" name="Telephone"></div>
          </div>

          <div style="height:20px;"></div>

          <div class="row cl" style="font-size:18px;">
          收货地址：<div id="fid" ></div>
          </div>

          <div style="height:20px;"></div>

          <div class="row cl" style="font-size:18px;">
          收货时间：<div><select name="ReceivingTime">
                        <option value="1">星期一</option>
                        <option value="2">星期二</option>
                        <option value="3">星期三</option>
                        <option value="4">星期四</option>
                        <option value="5">星期五</option>
                        <option value="6">星期六</option>
                        <option value="7">星期日</option>
                        <option value="8">星期六日</option>
                    </select></div>
          </div>

          <div style="height:20px;"></div>

          <div class="row cl" style="font-size:18px;">
            <input type="submit" value="提交">
          </div>
      </form>
</center>

<div class="blank5"></div>
<div class="flow">

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
</div>

<script type="text/javascript">
var msg_title_empty = "留言标题为空";
var msg_content_empty = "留言内容为空";
var msg_title_limit = "留言标题不能超过200个字";
</script>
  <script type="text/javascript">
      //js函数 实现select option节点的加载 
      function loadDistrict(upid){
        $.ajax({
          url:"{{ URL('home/addre/') }}"+"/"+upid,
          type:"get",
          dataType:"json",
          success:function (data){
            
            if(data.length==0){
              return;
            }

            var select = "<select  class='form-contorl' name='ReceiptAddress'>";
            select +="<option value='-2'>-请选择-</option>";
            for(var i=0;i<data.length;i++){
              select +="<option value='"+data[i].id+"'>"+data[i].name+"</option>";
            }
            select +="</select>";


            //select option 新产生的节点对象 添加到form表单中 
            // $("#fid").append(select);

            //高版本jquery不支持live 事件委派
            // $("select").live("change",function (){   });

            
            $(select).change(function (){
                // alert(123);
                //清空后面所有的select节点
                $(this).nextAll("select").remove();

                var id = $(this).find("option:selected").val()
                // alert(id);
                loadDistrict(id);

            }).appendTo('#fid');  


          }
        });

        
        

      }

      loadDistrict(0);

  </script>

</body></html>