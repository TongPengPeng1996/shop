<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta name="Generator" content="ECSHOP v2.7.3">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Keywords" content="">
<meta name="Description" content="">

<title>收货地址</title>




<link rel="shortcut icon" href="http://weipin.ecshop119.com/favicon.ico">
<link rel="icon" href="http://weipin.ecshop119.com/animated_favicon.gif" type="image/gif">
<link href="{{ asset('/homes/css/style_5.css') }}" rel="stylesheet" type="text/css">






<script type="text/javascript" src="{{ asset('/homes/js/transport_jquery_4.js') }}"></script><script type="text/javascript" src="{{ asset('/homes/js/common_5.js') }}"></script><script type="text/javascript" src="{{ asset('/homes/js/user.js') }}"></script></head>



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
         <!-- 123213123123123123 -->
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
<div id="container" style=" padding:0 0 10px;">
	<div class="contentBody">
		<div class="block_s">
        	
			<div class="content_title search_title">
				<div class="block">
      				<div id="ur_here"> <a href="{{ URL('/') }}">首页</a> <code> &gt; </code> 用户中心 </div>
    			</div>
			</div>
			

			
			<div class="accountSide CenterLeft"><dl class="accountSideOption1 OrderCenter">
  <dt class="transaction_manage">订单中心</dt>
  <dd>
    <ul>
      <li> <a href="{{ URL('/home/indent') }}"> 我的订单</a></li>
      <li> <a href="{{ URL('/home/adjust') }}">收货地址</a></li>
      
    </ul>
  </dd>
</dl>
<dl class="accountSideOption1">
  <dt class="transaction_manage">会员中心</dt>
  <dd>
    <ul>
      <li> <a href="{{ URL('/home/user_center') }}"> 用户信息</a></li>
      <li> <a href="{{ URL('/home/passwd') }}"> 修改密码</a></li>
      <li> <a href="{{ URL('/home/collect') }}"> 我的收藏</a></li>
    </ul>
  </dd>
</dl>

<script type="text/javascript">
				$(".AccountCenter li:last").css("border-bottom", "0");
			</script>
</div>
			
            
			
			<div class="content_body2">
				<div>
					<div class="memInfo_a">
						<div class="memInfo">
							
														<div class="MemberProfile">
                            	<div class="infoTip"><span class="bold"><img src="{{ asset('/homes/picture/infotip.jpg') }}" border="0"></span>&nbsp;用户中心公告！</div>
								<div class="userInfo">
									<div class="welcome">
										<span class="weiruan f_l">( chen25214 ) </span>&nbsp;欢迎您回来! &nbsp;&nbsp;您的上一次登录时间: 2016-01-02 22:00:05</div>
                                    <div class="blank"></div>
                                    <div class="creditInfo"><span style="color:#555;">等　　级：</span> 您的等级是 注册用户  ,您还差 10000 积分达到 vip </div>
                                    
								</div>
								<div class="MemberInformation">
									
										<div class="Invitation_txt">收货地址
                      <div class="Invitation_txt" style="float:right">
                      <a href="./address.html"><input type="button" value="添加地址"></a>
                    </div>
                    </div>
                    
										<div class="OrderProInfo">
      <div class="OrderProInfoCon">
        <!-- 张鹏宇 -->
             <form action="" method="post" name="myform">
                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                <input type="hidden" name="_method" value="delete">
             </form>
         
        <!--  张鹏宇 -->
            <table id="shippingTable" class="shippingTable" border="0" cellpadding="10" cellspacing="0" width="100%">
                <tbody>
                  <tr>
                    <th style="background:#fcf8e2; height:auto;" width="5%">&nbsp;</th>
                    <th style="background:#fcf8e2; height:auto;" width="25%">收货人</th>
                    <!-- <th style="background:#fcf8e2; height:auto;">所在地</th> -->
                    <th style="background:#fcf8e2; height:auto;" width="15%">详细地址</th>
                    <!-- <th style="background:#fcf8e2; height:auto;" width="15%">邮编</th> -->
                    <th style="background:#fcf8e2; height:auto;" width="15%">电话/手机</th>
                    <th style="background:#fcf8e2; height:auto;" width="15%">操作</th>

                  </tr>
                  <!-- <tr>
                    <td class="weiruan " bgcolor="#ffffff"><input name="shipping" value="3" supportcod="1" insure="0" onclick="selectShipping(this)" type="radio">
                    </td>
                    <td class="weiruan " bgcolor="#ffffff"><strong>张三</strong></td>
                    <td class="weiruan " style="text-align:left;" bgcolor="#ffffff">北京市朝阳区</td>
                    <td class="weiruan " align="center" bgcolor="#ffffff"><span>三里屯1号</span></td>
                    <td class="weiruan " align="center" bgcolor="#ffffff"><span>100011</span></td>
                    <td class="weiruan " align="center" bgcolor="#ffffff">13888888888</td>
                    <td class="weiruan " align="center" bgcolor="#ffffff"><a href="#">修改</a>|<a href="#">删除</a>|设为默认</td>

                  </tr> -->

                  <!-- 张鹏宇 -->
                   @foreach($list as $v)
                        <tr>
                            <td class="weiruan " bgcolor="#ffffff"><span></span>
                            </td>
                            <td class="weiruan " bgcolor="#ffffff"><strong>{{ $v->name }}</strong></td>
                            <td class="weiruan " align="center" bgcolor="#ffffff"><span>{{ $v->ReceiptAddress }}</span></td>
                            <td class="weiruan " align="center" bgcolor="#ffffff">{{ $v->Telephone }}</td>
                            <td class="weiruan " align="center" bgcolor="#ffffff"><a href="{{ URL('/home/adjust') }}/{{ $v->id }}/edit">修改</a>|<a href="javascript:doDel({{ $v->id }});">删除</a></td>
                  
                        </tr>

                  
                   @endforeach

                  <!-- 张鹏宇结束 -->

                </tbody>
            </table>
    </div>
    </div>
									
								
								</div>
														
         
							
							                            
                            
                            
                                                        
    
                            
                                                        
    
    
        
    
        </div>
    </div>
   
      
        
      
      </div>
    
  
  
</div>
				</div>
			</div>
		</div>
	</div>

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

//删除标题
  function doDel(id){
    if(confirm('确定删除吗?')){
        // alert(id);
        //1 获得form表单节点对象
        var myform = document.myform;
        //2 设置提交方式 
        myform.action = "/home/adjust/"+id;//提交地址 
        myform.submit();//执行表单提交
      }
  }


</script>

</body></html>