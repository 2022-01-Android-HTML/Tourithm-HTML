<?php
include_once('../../../../common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

<script>
  new WOW().init();
</script>

<div class="bannerWrap">
    <img src="<?php echo G5_THEME_IMG_URL ?>/main/banner1.png">
    <div>
        <!-- <img class="wow fadeInDown" data-wow-delay="0s" src="<?php echo G5_THEME_IMG_URL ?>/main/banner_logo.png"> -->
        <h2 class="wow fadeInDown" data-wow-delay="0.3s">[ Tourithm ]</h2>
        <p class="wow fadeInDown" data-wow-delay="0.6s">투어리즘에서 제공하는 맞춤형 여행 서비스를 통해</p>
        <p class="wow fadeInDown" data-wow-delay="0.8s">여행자님의 취향을 저격할 여행을 떠나보세요!</p>
        <!-- <div class="square_bracket1 wow fadeInLeft" data-wow-delay="0.1s"></div>
        <div class="square_bracket2 wow fadeInRight" data-wow-delay="0.1s"></div> -->
    </div>
</div>

<div class="aboutWrap">
   <div class="box inner">
        <div class="main_title">
            <h2 class="wow fadeInDown" data-wow-delay="0.3s"><span>TOURITHM</span>ABOUT</h2>
            <p class="wow fadeInDown" data-wow-delay="0.4s">TOURITHM은 여행을 뜻하는 TOUR와 알고리즘(ALGORITHM)의 합성어로, 여행객분들이 즐거운 여행을 떠나실 수 있도록 돕는 알고리즘을 제공하는 맞춤형 여행 플랫폼입니다.</p>
        </div>
        <div class="detail">
            <ul class="clearfix">
                <li class="first wow bounceInUp" data-wow-delay="0.5s">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/main/about_icon1.png">
                    <p>등재된 여행지 수</p>
                    <strong><span>8,<span class="number" data-max="506" data-vel="6">506</span></span>건</strong>
                </li>
                <li class="second wow bounceInUp" data-wow-delay="0.6s">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/main/about_icon2.png">
                    <p>투어리즘 이용객 수</p>
                    <strong><span>1,<span class="number" data-max="766" data-vel="1">766</span></span>명</strong>
                </li>
                <li class="third wow bounceInUp" data-wow-delay="0.7s">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/main/about_icon3.png">
                    <p>작성된 리뷰 수</p>
                    <strong><span class="number" data-max="106" data-vel="30">106</span>건</strong>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="coreComWrap">
   <div class="box inner">
        <div class="main_title">
            <h2 class="wow fadeInDown" data-wow-delay="0.3s"><span>TOURITHM</span>핵심역량</h2>
            <p class="wow fadeInDown" data-wow-delay="0.4s">트렌드와 여행객의 취향에 따라 진화하는 투어리즘 서비스입니다.</p>
        </div>
        <div class="detail">
            <ul class="clearfix">
                <li class="wow bounceInUp" data-wow-delay="0.5s">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/main/coreCom_icon1.png">
                    <strong>데이터베이스 수집</strong>
                    <p>신뢰성 있는 여행지 데이터 수집과<span>빅데이터, 머신러닝까지 발돋움</span></p>
                </li>
                <li class="second wow bounceInUp" data-wow-delay="0.6s">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/main/coreCom_icon2.png">
                    <strong>고객 맞춤형 서비스</strong>
                    <p>현재 트렌드와 여행객의 취향에 맞춘<span>정확한 타겟팅의 추천 시스템</span></p>
                </li>
                <li class="wow bounceInUp" data-wow-delay="0.7s">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/main/coreCom_icon3.png">
                    <strong>커뮤니티</strong>
                    <p>타 이용객의 의견을 수렴하여<span>더 좋은 여행지를 물색</span></p>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="portfolioWrap">
    <div class="inner">
        <div class="main_title">
            <h2 class="wow fadeInDown" data-wow-delay="0.3s"><span>TOURITHM</span>DATABASE</h2>
            <p class="wow fadeInDown" data-wow-delay="0.4s">투어리즘 데이터베이스에 포함된 여행지를 미리 만나보세요.</p>
        </div>
        <div class="latest_wr wow bounceInUp" data-wow-delay="0.5s">
            <?php echo latest('theme/okcarousel', 'at01_gallery', 6, 0, 300,300);?>
        </div>
        <div class="latest_wr2 wow bounceInUp" data-wow-delay="0.5s">
            <?php echo latest('theme/pic_basic', 'at01_gallery', 6, 0, 300,300);?>
        </div>
        <div class="port_go">
            <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=at01_gallery">포트폴리오 더보기</a>
        </div>
    </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
