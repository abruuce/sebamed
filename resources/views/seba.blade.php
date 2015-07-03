<html>
	<head>

		<title>施巴官網</title>
		    
        <script src="{{ asset('js/jquery.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <link href="{{ asset('/css/bootstrap-theme.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/seba.css') }}" rel="stylesheet">
  </head>
 
	<body>
  <div class="container">      
  <!-- header -->
    <div class="row">
     <a href="http://www.sebamed.com.tw/index.php/home"><img src="http://www.sebamed.com.tw//images/logo.jpg" width="125" height="85" border="0" align="left" /></a>        
     <a href="http://www.sebamed.de"><img src="http://www.sebamed.com.tw//images/toplk1.jpg" name="Image17" width="33" height="40" border="0" id="Image17" width="33" align="right" /></a>
     <a href="http://www.facebook.com/sebamedtw"><img src="http://www.sebamed.com.tw//images/toplk2.jpg" name="Image18" width="33" height="40" border="0" id="Image18" width="37" align="right" /></a>
    </div>

  <!-- header end -->

   <nav class="navbar navbar-default">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
     <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
      <a class="navbar-brand" href="http://www.sebamed.com.tw/index.php/home/news">最新消息</a>
     </div>

    <!-- Collect the nav links, forms, and other content for toggling //aria-haspopup="true"// -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="http://www.sebamed.com.tw/index.php/home/series">影音專區</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">產品櫥窗 <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="http://www.sebamed.com.tw/index.php/home/series">依系列區分</a></li>
            <li><a href="http://www.sebamed.com.tw/index.php/home/kind">依功能區分</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">關於我們 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://www.sebamed.com.tw/index.php/home/brand">品牌故事</a></li>
            <li><a href="http://www.sebamed.com.tw/index.php/home/brand/2">海茲默爾醫師</a></li>
            <li><a href="http://www.sebamed.com.tw/index.php/home/brand/3">醫學皮膚護理</a></li>
            <li><a href="http://www.sebamed.com.tw/index.php/home/brand/4">得獎事蹟</a></li>
            <li><a href="http://www.sebamed.com.tw/index.php/home/brand/5">總代理商</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">諮詢服務 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="https://store.sebamed.com.tw/products_list_mix.php?style_id=1&kind_id=16">索取樣品</a></li>
            <li><a href="http://www.sebamed.com.tw/index.php/home/ask">產品問答</a></li>
            <li><a href="http://www.sebamed.com.tw/index.php/home/ask/2">聯絡我們</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">購買地點 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="https://store.sebamed.com.tw/">官方購物</a></li>
            <li><a href="http://www.sebamed.com.tw/index.php/home/wherebuy/2">網路商店</a></li>
            <li><a href="http://www.sebamed.com.tw/index.php/home/wherebuy/3">百貨櫃點</a></li>
            <li><a href="http://www.sebamed.com.tw/index.php/home/wherebuy/4">連鎖藥妝</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">相關討論 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="https://www.facebook.com/sebamedtw">官方粉絲團</a></li>
          </ul>
        </li>    
        </ul>
      <ul class="nav navbar-nav ">
        <li class="dropdown">
          <li><a href="http://localhost/test/public/seba">回首頁</a></li>
          <li><a href="https://store.sebamed.com.tw/">官方購物</a></li>
        </li>
      </ul>
    </div><!-- /.navbar-collapse //-->
  </div><!-- /.container-fluid -->
</nav>

@yield('content')
		
<div class="row">
        <div id="footer">
          <div class="footer1">
            <img src="http://www.sebamed.com.tw//images/index_49.jpg" width="422" height="21" />   
          </div>       
          <div class="footer2">
              進口商：利百美興業股份有限公司　　 地址：807高雄市九如二路366號11F之1　　 客服電話： 0800-000-755 　　肌膚諮詢專線： 0800-755-755  
          </div> 
         
        </div>
    </div>
  
		@yield('footer')

</div>
	</body>
</html>






