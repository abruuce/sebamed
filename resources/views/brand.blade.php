@extends('seba')

@section('content')
 <div class="row">
     <div class="col-md-9 col-md-offset-1 col-xs-12" >
      <div class="list" id="pag_list"> 
        <a href="{{ action('HomeController@index')}}">首頁</a> &gt; 關於我們 &gt; 品產故事
        <p>
      </div>
     </div>   
 </div>

 <div class="row">
    <div class="col-md-8 col-md-offset-1 col-xs-12">
     <img src="{{ asset('images\product_line.jpg') }}" class="img-responsive">
     <img src="{{ asset('images\title2.jpg') }}" class="img-responsive hidden-xs">
    </div> 
      <div class="col-md-3 col-md-offset-1 col-xs-12">
        <img src="{{ asset('images\brandp1.jpg') }}" class="img-responsive">
      </div>
      <div class="col-md-3 col-xs-12">
      	<img src="{{ asset('images\brandp2.jpg') }}" class="img-responsive">
     	  <p class="newstext">
           這是施巴最重要的信念。您的皮膚健康是我們最在意的事，我們不譁眾取寵，不標新立異，在意成份安全，合乎歐盟的所有規定，用心守護您的皮膚健康。
          </p>
      </div>
      
      <div class="col-md-11 col-md-offset-1 col-xs-12">
        <img src="{{ asset('images\brandp3.jpg') }}" class="img-responsive" style="margin-top:10px">
         <div class="col-md-7 col-xs-12">
          <p class="newstext">
           遠在1952年的一個週末，德國波昂大學的皮膚科醫師海茲默爾發現，許多患有急性濕疹的病患，被禁止使用一般肥皂來清潔皮膚，塗抹藥膏的皮膚深受又癢又黏的不舒服所苦，讓患者苦惱不已。
          </p> 
          <p class="newstext">
           不忍看著病患痛苦的海茲默爾醫師注意到健康皮膚表面的水脂膜呈微酸性，決定投入革命性的清潔產品 ─ pH5.5微酸性潔膚劑的研發，並進行臨床試驗，試用後的結果令他相當驚訝，因為這種微酸性潔膚劑在使用後，不僅不刺激皮膚，也能溫和清潔讓後續治療效果更好。

           當患者臉上浮現一抹既驚訝又開心的微笑時，讓海茲默爾醫師更加堅定了繼續研發的想法，在1967年，全世界第一塊非皂鹼的pH5.5微酸性潔膚皂終於誕生。研發的漫漫過程中，他始終堅持醫學皮膚護理的觀念，美麗來自健康肌膚，研發全系列pH5.5的潔護膚產品。
          </p>
         </div> 
         <br>
         <div class="col-md-11 col-xs-12" style="margin-top:10px">
           <img src="{{ asset('images\brandp4.jpg') }}" class="img-responsive" >
         </div>  
      </div>

 </div> 

@stop