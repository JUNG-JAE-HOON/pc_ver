<?php
  ob_start("ob_gzhandler");
?>
<?php
  include_once "../Libs/_php/rankup_basic.class.php";
  include_once "db/connect.php";
  
  if($rankup_member->is_member()) {
  } else {
?>
<!-- 비회원인 경우 -->
<!--  <script>document.location.href='http://il-bang.com/mobile/index.php'</script>; -->
<script>var no_mem = 1;</script>
<?php 
  }
  
  $log_type = $_GET["log_type"];
  $type = "";

  if(!$rankup_control->is_member() || $rankup_control->is_member('general')) {
    $type = "general";
  } else {
    $type = "company";
  }

  $uid = $member_info['uid'];
  $date_count = 0;

  $sql = "SELECT * from `event` where `event_no` = '3'";
  $result = mysql_query($sql, $ilbang_con);
  $row = mysql_fetch_array($result);

  $title = $row["title"];
  $content = $row["content"];
  $event_link = $row["event_link"];
?>
<!D터CTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>일방 PC버전</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="css/default.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  

    <!-- 플러그인 CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="css/jquery.rateyo.min.css" rel="stylesheet">
    <!-- <link href="css/swipe.css" rel="stylesheet"> -->

    <!-- Theme CSS -->
    <!-- <link href="css/creative.min.css" rel="stylesheet"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/4.8.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->

            <!-- 원래 있던 로고 / 정재훈 주석처리  -->


            <div class="row">
              <div class="logo col-xs-2 col-sm-2 col-md-2 col-lg-2">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                  </button>
                  <a class="navbar-brand page-scroll" href="#page-top"><b>일당제자동중개</b>서비스</a>
              </div>
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                
              </div>
      
              <!-- gnb 메뉴 리스트 -->
              <div class="gnb col-xs-9 col-sm-9 col-md-9 col-lg-9" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav gnb_ul row">                    
                      
                        <li class="gnb_li col-xs-1 col-sm-1 col-md-1 col-lg-1">
                            <a class="page-scroll gnb_btn noPadding" href="#about">서비스 안내</a>
                        </li>
                        <li class="gnb_li col-xs-1 col-sm-1 col-md-1 col-lg-1">
                            <a class="page-scroll gnb_btn noPadding" href="#services">AD머니</a>
                        </li>
                        <li class="gnb_li col-xs-1 col-sm-1 col-md-1 col-lg-1">
                            <a class="page-scroll gnb_btn noPadding" href="#portfolio">구인구직</a>
                        </li>
                        <li class="gnb_li col-xs-1 col-sm-1 col-md-1 col-lg-1">
                            <a class="page-scroll gnb_btn noPadding" href="#contact">포인트몰</a>
                        </li>
                        <li class="gnb_li col-xs-1 col-sm-1 col-md-1 col-lg-1">
                            <a class="page-scroll gnb_btn noPadding" href="#contact">고객센터</a>
                        </li>
                        <li class="gnb_li col-xs-1 col-sm-1 col-md-1 col-lg-1 sign_li"></li>
                         <li class="gnb_li col-xs-1 col-sm-1 col-md-1 col-lg-1 sign_li">
                            <a class="page-scroll gnb_btn noPadding" href="#contact">회원가입</a>
                        </li>
                        <li class="gnb_li col-xs-1 col-sm-1 col-md-1 col-lg-1 sign_li">
                            <a class="page-scroll gnb_btn noPadding" href="#contact">회원로그인</a>
                        </li>
                      
                  </ul>
              </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    
   <section class="container-fluid slideWrap">
       <!-- f프 -->
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div id='slider' class='swipe'>
                <div class='swipe-wrap'>
                  <div><img src="http://placehold.it/350x150" alt=""></div>
                  <div><img src="http://placehold.it/350x150" alt=""></div>
                  <div><img src="http://placehold.it/350x150" alt=""></div>
                </div>
              </div>
          </div>
      </div>
   </section>
    <section class="container tabWrap">
        <div class="row">
            <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3">
                    
            </div>    
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="row btn_wrap01">
                     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center noConner under_line">
                         구직신청서    
                     </div>    
                     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 text-center noConner">
                         구인신청서
                     </div>    
                     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center noConner">
                         매칭리스트
                     </div>    
                 </div>                 
            </div>
            <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3">
                    
            </div>    
        </div>
    </section>

   
    <section id="mapSection">
        <div class="container-fluid">
            <div class="row tab_cont display">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 noPadding listWrap">
                   <div class="list_title lt_active">검색결과 500개</div>
                   <div class="list_title">이 지역의 가까운 일방</div>
                   <ul class="addr_ul noPadding">
                       <li class="addr_list">
                            <ul>
                                <li>
                                    <span class="red status conner10"> 매칭진행 </span>
                                    <p class="list-tlt inline">화인로지텍</p>
                                     <div id="rateYo1" class="rateYo"></div>
                                </li>
                                <hr>
                                <li class="contWrap">
                                   <a href="">
                                     <div class="list_content">급구일당 8만원 단순분류 작업(남자 선호)</div>
                                     <p class="list_content">특성별>건설일방</p>
                                     <p class="list_content">경기도>전지역</p>
                                   </a>
                                </li>
                            </ul>
                       </li> 
                       <li class="addr_list">
                            <ul>
                                <li>
                                    <span class="green status conner10"> 매칭대기 </span>
                                    <p class="list-tlt inline">화인로지텍</p>
                                     <div id="rateYo2" class="rateYo"></div>
                                </li>
                                <hr>
                                <li class="contWrap">
                                   <a href="">
                                     <div class="list_content">급구일당 8만원 단순분류 작업(남자 선호)</div>
                                     <p class="list_content">특성별>건설일방</p>
                                     <p class="list_content">경기도>전지역</p>
                                   </a>
                                </li>
                            </ul>
                       </li>                 
                                    
                   </ul>
               </div>
               <div id="map" class="col-xs-12 col-sm-12 col-md-8 col-lg-8" style="height:350px;">
               </div>
               <!-- <script type="text/javascript" src="http://apis.daum.net/maps/maps3.js?apikey=133b46039f823dd271ba4f340432c87c"></script> -->
              <!--  <script>
                 var container = document.getElementById('map'); //지도를 담을 영역의 DOM 레퍼런스
                 var options = { //지도를 생성할 때 필요한 기본 옵션
                  center: new daum.maps.LatLng(33.450701, 126.570667), //지도의 중심좌표.
                  level: 3 //지도의 레벨(확대, 축소 정도)
                 };

                 var map = new daum.maps.Map(container, options); //지도 생성 및 객체 리턴

                 // 버튼 클릭에 따라 지도 이동 기능을 막거나 풀고 싶은 경우에는 map.setDraggable 함수를 사용합니다
                 function setDraggable(draggable) {
                     // 마우스 드래그로 지도 이동 가능여부를 설정합니다
                     map.setDraggable(draggable);    
                 }
               </script> -->
            </div>
            <div class="row tab_cont">
              sadlksajd
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 noPadding listWrap">
                   <div class="list_title lt_active">검색결과 500개</div>
                   <div class="list_title">이 지역의 가까운 일방</div>
                   <ul class="addr_ul noPadding">
                                
                                    
                   </ul>
               </div>
               <div id="map" class="col-xs-12 col-sm-12 col-md-8 col-lg-8" style="height:350px;">
               </div>
               <!-- <script type="text/javascript" src="http://apis.daum.net/maps/maps3.js?apikey=133b46039f823dd271ba4f340432c87c"></script> -->
              <!--  <script>
                 var container = document.getElementById('map'); //지도를 담을 영역의 DOM 레퍼런스
                 var options = { //지도를 생성할 때 필요한 기본 옵션
                  center: new daum.maps.LatLng(33.450701, 126.570667), //지도의 중심좌표.
                  level: 3 //지도의 레벨(확대, 축소 정도)
                 };

                 var map = new daum.maps.Map(container, options); //지도 생성 및 객체 리턴

                 // 버튼 클릭에 따라 지도 이동 기능을 막거나 풀고 싶은 경우에는 map.setDraggable 함수를 사용합니다
                 function setDraggable(draggable) {
                     // 마우스 드래그로 지도 이동 가능여부를 설정합니다
                     map.setDraggable(draggable);    
                 }
               </script> -->
            </div>
            <div class="row tab_cont">
             ksadjlsakdjasdasd
               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 noPadding listWrap">
                  <div class="list_title lt_active">검색결과 500개</div>
                  <div class="list_title">이 지역의 가까운 일방</div>
                  <ul class="addr_ul noPadding">
                                     
                                   
                  </ul>
              </div>
              <div id="map" class="col-xs-12 col-sm-12 col-md-8 col-lg-8" style="height:350px;">
              </div>
              <!-- <script type="text/javascript" src="http://apis.daum.net/maps/maps3.js?apikey=133b46039f823dd271ba4f340432c87c"></script> -->
             <!--  <script>
                var container = document.getElementById('map'); //지도를 담을 영역의 DOM 레퍼런스
                var options = { //지도를 생성할 때 필요한 기본 옵션
                 center: new daum.maps.LatLng(33.450701, 126.570667), //지도의 중심좌표.
                 level: 3 //지도의 레벨(확대, 축소 정도)
                };

                var map = new daum.maps.Map(container, options); //지도 생성 및 객체 리턴

                // 버튼 클릭에 따라 지도 이동 기능을 막거나 풀고 싶은 경우에는 map.setDraggable 함수를 사용합니다
                function setDraggable(draggable) {
                    // 마우스 드래그로 지도 이동 가능여부를 설정합니다
                    map.setDraggable(draggable);    
                }
              </script> -->
            </div>
        </div>
    </section>

     <section class="info_market">
        <div class="container">
            <div class="row">
                <p class="info_tlt">다운로드 안내  <span>>></span></p>   
                <p class="circle conner50">
                  <a href="#">구글플레이, 앱스토어에서 <b style="color:white">일방</b>을 검색하세요</a>
                </p>
                <div class="row marketImg">
                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> </div>
                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> </div>
                  <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                    <a href="#">
                      <img src="http://placehold.it/150x50" alt="">
                    </a>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                      <a href="#">
                        <img src="http://placehold.it/150x50" alt="">
                      </a>
                   </div>
                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> </div>
                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="botArea">
      <div class="container-fluid">
        <div class="row">
         <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
         </div>
         <div class="botWrap col-xs-8 col-sm-8 col-md-8 col-lg-6">
            <div class="row">              
            
                <div class="bot_menu col-xs-2 col-sm-2 col-md-2 col-lg-2">
                  <a href="#">이용약관</a>
                </div>
                <div class="bot_menu col-xs-2 col-sm-2 col-md-2 col-lg-2">
                  <a href="#">개인정보취급방침</a>
                </div>
                <div class="bot_menu col-xs-3 col-sm-3 col-md-3 col-lg-3">
                  <a href="#">위치기반 서비스 이용약관</a>
                </div>
                <div class="bot_menu col-xs-2 col-sm-2 col-md-2 col-lg-2">
                  <a href="#">일일노동약관</a>
                </div>
                <div class="bot_menu col-xs-3 col-sm-3 col-md-3 col-lg-3">
                  <a href="#">작업정보제공사업자준수사항</a>
                </div>
              
            </div>
          </div>
         <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
          </div>
        </div>
      </div>
    </section>
    
<?php
include "footer.php"
?>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/swipe.js"></script>
    <script src="js/jquery.rateyo.min.js"></script>

    <!-- Theme JavaScript -->
    
    <!-- <script src="js/creative.min.js"></script> -->
    <!-- api키 바꾸기 -->
    
    <script>

    // 상위 탭메뉴 스크립트
        
        var btns=$(".btn_wrap01>div");
        btns.each(function(i){
           $(this).click(function(){            
            btns.removeClass("under_line");
            $(this).addClass("under_line");
            $(".tab_cont").removeClass("display");
            $(".tab_cont").eq(i).addClass("display");
           });
        });

        // 스와이프
       window.mySwipe = new Swipe(document.getElementById('slider'), {
         startSlide: 2,
         speed: 1000,
         auto: 3000,
         continuous: true,
         disableScroll: false,
         stopPropagation: false,
         callback: function(index, elem) {},
         transitionEnd: function(index, elem) {}
       });
       // 리스트 세로 탭메뉴
     
       $(".list_title").each(function(i){
         $(".list_title").click(function(){
            var index=$(this).index();
            if(i==index){
              $(".list_title").eq(i).addClass("lt_active");
            }else{
              $(".list_title").eq(i).removeClass("lt_active");
            }
         });
       });



       // 별점 스크립트
      

       $(function () {
        $("#rateYo1").rateYo({
          rating: 3.2,
          readOnly: true,
          starWidth: "13px"
        });         
        $("#rateYo2").rateYo({
          rating: 4.2,
          readOnly: true,
          starWidth: "13px"
        });         
       });
       

    </script>
</body>

</html>
