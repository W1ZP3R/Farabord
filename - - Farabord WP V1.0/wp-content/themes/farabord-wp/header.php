<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>
        <?php bloginfo( 'name' ); wp_title( '-' ); ?>
    </title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php 
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	?>
    <?php wp_head(); ?>
</head>

<body class="no-trans" <?php body_class();?>>
    <!-- Page Wrapper Start - Payam Mahjoub -->
    <div class="page-wrapper">

        <!-- Header Container Start - Payam Mahjoub -->
        <div class="header-container" style="border-bottom: 20px #9e9e9e solid">
            <!-- Header Start -->
            <header class="header centered clearfix">
                <div class="container">
                    <div class="row">
                        <!-- ================ -->
                        <div class="col-md-3 mt-10">
                            <!-- Header Left Start -->
                            <div class="header-left clearfix">
                                <!-- logo -->
                                <div id="logo" class="logo">
                                    <a href="#"><img id="logo_img" src="<?php echo get_template_directory_uri();?>/images/logo_light_blue.png" alt=""></a>
                                </div>
                            </div>
                            <!-- Header Left End -->
                        </div>
                        <!-- ================ -->
                        <div class="col-md-6 mt-10">
                            <!-- Header Right Start -->
                            <div class="header-right clearfix">
                                <!-- Main Navigation Start -->
                                <div class="main-navigation animated">
                                    <!-- Navbar Start -->
                                    <nav class="navbar navbar-default" role="navigation">
                                        <div class="container-fluid">
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>

                                            </div>

                                            <!-- Collector -->
                                            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                                <!-- Main Menu Start -->
                                                <ul class="nav navbar-nav navbar-right">

                                                    <li><a href="#"> محصولات و خدمات </a></li>
                                                    <li><a href="#"> تعرفه و سفارش گذاری </a></li>
                                                    <li><a href="#"> پشتیبانی و ارتباط </a></li>

                                                </ul>
                                                <!-- Main Menu end -->
                                            </div>
                                        </div>
                                    </nav>
                                    <!-- Navbar End -->
                                </div>
                                <!-- Main Navigation End -->
                            </div>
                            <!-- Header Right End -->
                        </div>
                        <!-- ================ -->
                        <div class="col-md-3 mt-10">
                            <!-- Header Left Start -->
                            <div class="header-left clearfix">
                                <!-- logo -->
                                <div id="logo" class="logo">
                                    <a href="#"><img id="logo_img" src="<?php echo get_template_directory_uri();?>/images/logo_light_blue.png" alt=""></a>
                                </div>
                            </div>
                            <!-- Header Left End -->
                        </div>
                    </div>
                </div>
            </header>
            <!-- Header End -->
        </div>
        <!-- Header Container Start - Payam Mahjoub -->

        <!-- Banner Start - Payam Mahjoub -->
        <div class="banner clearfix" style="background-color: #e6ffff">

            <!-- SlideShow Start -->
            <div class="slideshow">
                <!-- Slider Revolution Start -->
                <div class="slider-banner-container">
                    <div class="slider-banner-fullscreen">
                        <ul class="slides">
                            <!-- Slide 1 Start -->
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-saveperformance="on" data-title="">

                                <!-- Main Image -->
                                <img src="<?php echo get_template_directory_uri();?>/images/bg/banner2.svg" alt="slidebg1" data-bgrepeat="no-repeat" data-bgfit="cover">

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption sft fadeout text-center large_dark" data-x="center" data-y="70"><span class="logo-font">کیفیت بهتر اهمیت دارد</span>
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption sft fadeout text-center large_dark" data-x="center" style="bottom: 30px;z-index: -4000" data-speed="500" data-easing="easeOutQuad" data-start="1000">
                                    <div id="clouds">
                                        <div class="cloud x1"><img src="<?php echo get_template_directory_uri();?>/images/bg/cloud.png" data-repeat="repeat-x"></div>
                                    </div>
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption sft fadeout small_dark text-center" data-x="center" data-y="150">
                                    ارائه خدمات با کیفیت <span style="color: #09AFDF">|</span> انعطاف پذیری بالا و چابکی در سرویس دهی <span style="color: #09AFDF">|</span> تیم فنی و پشتیبانی حرفه ای
                                </div>


                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption sft fadeout text-center small_dark hvr-sink hvr-pulse" data-x="center" data-y="200">
                                    <span class="logo-font">
                                        <input type="button" class="btn btn-default" value="بررسی پوشش دهی" />
                                    </span>
                                </div>

                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption sft fadeout text-center small_dark" data-x="center" data-y="0" style="margin-left: 60px">
                                    <span class="logo-font">
                                        <img src="<?php echo get_template_directory_uri();?>/images/icon/for-pro.png" /> 
                                    </span>
                                </div>

                            </li>
                            <!-- Slide 1 End -->
                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
                <!-- Slider Revolution End -->

            </div>
            <!-- slideshow end -->

        </div>
        <!-- Banner End - Payam Mahjoub -->

        <div id="page-start"></div>

        <!-- Nav tabs -->
        <div class="panel with-nav-tabs panel-primary">
            <div class="panel-heading">
                <ul class="nav nav-tabs">

                    <li class="col-md-2">
                        <a href="#htab3" role="tab" data-toggle="tab" class="gray-bg">
                            <div class="p-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="1200">
                                <span class="icon large"><img src="<?php echo get_template_directory_uri();?>/images/icon/bandwidth.svg" /></span>
                                <h6>پهنای باند اختصاصی</h6>
                            </div>
                        </a>
                    </li>

                    <li class="col-md-2 active">
                        <a href="#htab2" role="tab" data-toggle="tab" class="gray-bg">
                            <div class="p-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="1200">
                                <span class="icon large"><img src="<?php echo get_template_directory_uri();?>/images/icon/tdlte.svg" style="width: 100%" /></span>
                                <h6>اینترنت ثابت پرسرعت</h6>
                            </div>
                        </a>
                    </li>

                    <li class="col-md-2">
                        <a href="#htab1" role="tab" data-toggle="tab" class="gray-bg">
                            <div class="p-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="1200">
                                <span class="icon large"><img src="<?php echo get_template_directory_uri();?>/images/icon/towers.svg" /></span>
                                <h6>اینترنت برج ها</h6>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

        <!-- Tab Panes Start -->
        <div class="tab-content">
            <!-- ==================================================== -->
            <div class="tab-pane fade" id="htab1">

                <!-- About Tower Section - Payam Mahjoub -->
                <section class="white-bg pv-30 clearfix" style="border-bottom: 1px solid #e1e1e1;">
                    <div class="container tower-banner">
                        <div class="row">

                            <div class="col-md-10 col-centered">
                                <div class="col-md-12">
                                    <div class="pv-30 ph-20 text-right object-non-visible" dir="rtl" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                                        <?php
                                            $post_id = 26;
                                            $queried_post = get_post($post_id);
                                            $title = $queried_post->post_title;
                                            echo $queried_post->post_content;
                                        ?>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <a href="#" class="btn btn-default pull-left">ثبت نام</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- About Tower Section - Payam Mahjoub -->

                <!-- Section Start  - Payam Mahjoub -->
                <section class="light-gray-bg pv-50 clearfix">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-10 col-centered" dir="rtl" data-animation-effect="fadeInDownSmall" data-effect-delay="500">

                                <div class="col-md-4 hvr-shrink">
                                    <div class="col-md-6">
                                        <img src="<?php echo get_template_directory_uri();?>/images/icon/towers-district.svg" />
                                    </div>
                                    <div class="col-md-6" style="margin: 15% auto">
                                        <h5>1. بررسی منطقه</h5>
                                    </div>
                                    <div class="col-md-12 p-30">
                                        <?php
                                            $post_id = 27;
                                            $queried_post = get_post($post_id);
                                            $title = $queried_post->post_title;
                                            echo $queried_post->post_content;
                                        ?>
                                    </div>
                                </div>

                                <div class="col-md-4 hvr-shrink">
                                    <div class="col-md-6">
                                        <img src="<?php echo get_template_directory_uri();?>/images/icon/towers-register.svg" />
                                    </div>
                                    <div class="col-md-6" style="margin: 15% auto">
                                        <h5>2. قرارداد</h5>
                                    </div>
                                    <div class="col-md-12 p-30">
                                        <?php
                                            $post_id = 32;
                                            $queried_post = get_post($post_id);
                                            $title = $queried_post->post_title;
                                            echo $queried_post->post_content;
                                        ?>
                                    </div>
                                </div>

                                <div class="col-md-4 hvr-shrink">
                                    <div class="col-md-6">
                                        <img src="<?php echo get_template_directory_uri();?>/images/icon/towers-setup.svg" />
                                    </div>
                                    <div class="col-md-6" style="margin: 15% auto">
                                        <h5>3. نصب</h5>
                                    </div>
                                    <div class="col-md-12 p-30">
                                        <?php
                                            $post_id = 34;
                                            $queried_post = get_post($post_id);
                                            $title = $queried_post->post_title;
                                            echo $queried_post->post_content;
                                        ?>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </section>
                <!-- Section End - Payam Mahjoub -->

                <!-- Section Start  - Payam Mahjoub -->
                <section class="white-bg pv-50 clearfix">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-10 col-centered pv-60" dir="rtl">

                                <h4>شرایط و مزایای سرویس</h4>

                                <?php
                                    $post_id = 36;
                                    $queried_post = get_post($post_id);
                                    $title = $queried_post->post_title;
                                    echo $queried_post->post_content;
                                ?>

                            </div>

                        </div>
                    </div>
                </section>
                <!-- Section End - Payam Mahjoub -->

            </div>
            <!-- ==================================================== -->
            <div class="tab-pane fade in active" id="htab2">
                <!-- Streaming Section Start - Payam Mahjoub -->
                <section id="stream" class="pv-30 clearfix">
                    <div class="container">
                        <div class="row">
                            <!-- ================ -->
                            <div class="col-md-12" dir="rtl">
                                <h2 class="text-center" style="color: #09AFDF"> </h2>
                            </div>
                            <!-- ================ -->
                            <div class="col-md-1">&nbsp;</div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="pv-30 ph-20 text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                                    <div class="embed-responsive embed-responsive-16by9 radius-10">
                                        <!-- ================ -->
                                        <a href="#myModal" target="_parent" data-toggle="modal" data-target="#myModal">
                                            <img src="<?php echo get_template_directory_uri();?>/images/icon/video-icon-01.png" class="hvr-sink" /> 
                                        </a>
                                        <!-- ================ -->
                                    </div>
                                </div>
                            </div>
                            <!-- ================ -->
                            <div class="col-md-6 col-sm-7 col-xs-12">
                                <div class="pv-30 ph-20 mt-40 f-15 text-right object-non-visible" dir="rtl" data-animation-effect="fadeInDownSmall" data-effect-delay="500">
                                    <?php
                                        $post_id = 46;
                                        $queried_post = get_post($post_id);
                                        $title = $queried_post->post_title;
                                        echo $queried_post->post_content;
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-1">&nbsp;</div>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-body">

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <!-- 16:9 aspect ratio -->
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <video style="background-color: black" controls>
                                                    <source src="<?php echo get_template_directory_uri();?>/videos/Farabord-TD-LTE-Process-Video-V6.mp4" type="video/mp4">
                                                </video>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                        </div>
                    </div>
                </section>
                <!-- Streaming Section End - Payam Mahjoub -->

                <!-- Section Start  - Payam Mahjoub -->
                <section class="light-gray-bg clearfix pv-60" id="speedpanel">
                    <div class="container">
                        <div class="row">
                            <!-- ================ -->
                            <div class="col-md-12" dir="rtl">
                                <h2 class="text-center" style="color: #09AFDF"> سرعت مورد نیاز خود را پیدا کنید </h2>
                            </div>
                            <!-- ================ -->
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills" role="tablist">
                                <div class="col-md-10 col-centered">
                                    <div class="col-md-2 col-xs-2 col-md-offset-1 active">
                                        <a href="#pill-1" role="tab" data-toggle="tab" title="images">
                                            <div class="thumbnail text-center radius-10">
                                                <h4> 4 </h4>
                                                <h6> Mbps </h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-2 col-xs-2">
                                        <a href="#pill-2" role="tab" data-toggle="tab" title="images">
                                            <div class="thumbnail text-center radius-10">
                                                <h4> 8 </h4>
                                                <h6> Mbps </h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-2 col-xs-2">
                                        <a href="#pill-3" role="tab" data-toggle="tab" title="images">
                                            <div class="thumbnail text-center radius-10">
                                                <h4> 16 </h4>
                                                <h6> Mbps </h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-2 col-xs-2">
                                        <a href="#pill-4" role="tab" data-toggle="tab" title="images">
                                            <div class="thumbnail text-center radius-10">
                                                <h4> 20 </h4>
                                                <h6> Mbps </h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-2 col-xs-2">
                                        <a href="#pill-5" role="tab" data-toggle="tab" title="images">
                                            <div class="thumbnail text-center radius-10">
                                                <h4> 40 </h4>
                                                <h6> Mbps </h6>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content clear-style">
                                <div class="tab-pane active text-center" id="pill-1">
                                    <div class="col-md-10 col-centered">

                                        <div class="col-md-3 col-sm-2 col-xs-6">
                                            <h5>بازی</h5>
                                            <div class="knob-container hvr-pulse-grow">
                                                <input class="knob" data-fgcolor="#377DBA" data-thickness=".1" data-animate-value="40" value="0" data-displayInput="false" data-readOnly="true">
                                                <div class="knob-text">
                                                    <img src="<?php echo get_template_directory_uri();?>/images/icon/speed-load-1.svg" width="89%" style="display: block;margin: 6px auto" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <h5>عکس</h5>
                                            <div class="knob-container hvr-pulse-grow">
                                                <input class="knob" data-fgcolor="#377DBA" data-thickness=".1" data-animate-value="40" value="0" data-displayInput="false" data-readOnly="true">
                                                <div class="knob-text">
                                                    <img src="<?php echo get_template_directory_uri();?>/images/icon/speed-load-2.svg" width="89%" style="display: block;margin: 6px auto" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <h5>آهنگ</h5>
                                            <div class="knob-container hvr-pulse-grow">
                                                <input class="knob" data-fgcolor="#377DBA" data-thickness=".1" data-animate-value="40" value="0" data-displayInput="false" data-readOnly="true">
                                                <div class="knob-text">
                                                    <img src="<?php echo get_template_directory_uri();?>/images/icon/speed-load-3.svg" width="89%" style="display: block;margin: 6px auto" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <h5>تماشای آنلاین</h5>
                                            <div class="knob-container hvr-pulse-grow">
                                                <input class="knob" data-fgcolor="#377DBA" data-thickness=".1" data-animate-value="40" value="0" data-displayInput="false" data-readOnly="true">
                                                <div class="knob-text">
                                                    <img src="<?php echo get_template_directory_uri();?>/images/icon/speed-load-4.svg" width="89%" style="display: block;margin: 6px auto" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="tab-pane" id="pill-2">
                                    2
                                </div>

                                <div class="tab-pane" id="pill-3" data-speed="500" data-easing="easeOutQuad" data-start="1000">
                                    3
                                </div>
                                <div class="tab-pane" id="pill-4">
                                    4
                                </div>
                                <div class="tab-pane" id="pill-5">
                                    5
                                </div>
                            </div>
                            <!-- pills end -->
                        </div>
                    </div>
                </section>
                <!-- Section End - Payam Mahjoub -->

                <!-- Section Start  - Payam Mahjoub -->
                <section class="white-bg pv-30 clearfix">
                    <div class="container">
                        <div class="row">
                            <!-- ================ -->
                            <div class="col-md-12" dir="rtl">
                                <h2 class="text-center" style="color: #09AFDF"></h2>
                            </div>
                            <!-- ================ -->
                            <div class="col-md-10 col-centered">
                                <!-- ================ -->
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="400">
                                        <span class="icon large"><img src="<?php echo get_template_directory_uri();?>/images/logo/network-statement.svg" /></span>
                                        <h5>پایداری در شبکه</h5>
                                    </div>
                                </div>
                                <!-- ================ -->
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="400">
                                        <span class="icon large"><img src="<?php echo get_template_directory_uri();?>/images/logo/speed-exp.svg" /></span>
                                        <h5>تجربه سرعت بالاتر</h5>
                                    </div>
                                </div>
                                <!-- ================ -->
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="400">
                                        <span class="icon large"><img src="<?php echo get_template_directory_uri();?>/images/logo/port-solv.svg" /></span>
                                        <h5>تجربه سرعت بالاتر</h5>
                                    </div>
                                </div>
                                <!-- ================ -->
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="400">
                                        <span class="icon large"><img src="<?php echo get_template_directory_uri();?>/images/logo/fast-setup.svg" /></span>
                                        <h5>نصب و راه اندازی سریع</h5>
                                    </div>
                                </div>
                                <!-- ================ -->
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="400">
                                        <span class="icon large"><img src="<?php echo get_template_directory_uri();?>/images/logo/high-user.svg" /></span>
                                        <h5>مناسب مصارف بالا</h5>
                                    </div>
                                </div>
                                <!-- ================ -->
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="400">
                                        <span class="icon large"><img src="<?php echo get_template_directory_uri();?>/images/logo/cloud.svg" /></span>
                                        <h5>اختصاص بهینه پهنای باند لازم</h5>
                                    </div>
                                </div>
                                <!-- ================ -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section End - Payam Mahjoub -->

                <!-- Section Start  - Payam Mahjoub -->
                <section class="light-gray-bg pv-30 clearfix" id="timeline">
                    <div class="container">
                        <div class="row">
                            <!-- ================ -->
                            <div class="col-md-12" dir="rtl">
                                <h2 class="text-center" style="color: #09AFDF"> مراحل دریافت سرویس </h2>
                            </div>
                            <!-- ================ -->
                            <div class="col-md-9 col-centered text-center">
                                <div class="row">
                                    <div class="col-md-4 ">
                                        <div class="pv-30 ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                                            <img src="<?php echo get_template_directory_uri();?>/images/td-lte/Z-tel-Web-TD-LTE-11-01.svg" class="circle" width="100%">
                                            <br>
                                            <h5>ثبت نام</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="pv-30 ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                                            <img src="<?php echo get_template_directory_uri();?>/images/td-lte/Z-tel-Web-TD-LTE-11-02.svg" class="circle" width="100%">
                                            <br>
                                            <h5>حضور در محل و امکان سنجی</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="pv-30 ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                                            <img src="<?php echo get_template_directory_uri();?>/images/td-lte/Z-tel-Web-TD-LTE-11-03.svg" class="circle" width="100%">
                                            <br>
                                            <h5>نصب و راه اندازی</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section End - Payam Mahjoub -->
            </div>
            <!-- ==================================================== -->
            <div class="tab-pane fade" id="htab3">

                <!-- About Section Start - Payam Mahjoub -->
                <section class="pv-30 clearfix">
                    <div class="container">
                        <div class="row">
                            <!-- ================ -->
                            <div class="col-md-12" dir="rtl">
                                <h2 class="text-center" style="color: #09AFDF"> </h2>
                            </div>
                            <!-- ================ -->
                            <div class="col-md-8 col-centered">
                                <div class="pv-30 ph-20 mt-40 f-15 text-justify object-non-visible" dir="rtl" data-animation-effect="fadeInDownSmall" data-effect-delay="500">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                </div>
                                <div class="col-md-1 col-centered">
                                    <a href="#" class="btn btn-default text-center">ثبت نام</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- About Section End - Payam Mahjoub -->

                <!-- Section Start  - Payam Mahjoub -->
                <section class="light-gray-bg p2p-timeline pv-60 clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 pv-40" dir="rtl">
                                <h2 class="text-center" style="color: #09AFDF"> مراحل دریافت سرویس </h2>
                            </div>
                            <!-- ================ -->
                            <div class="col-md-8 col-centered pv-60">

                                <div class="col-md-4">
                                    <div class="col-md-12 col-sm-12 col-xs-12 hvr-sink border-top-5">
                                        <div data-animation-effect="fadeInDownSmall" data-effect-delay="800">
                                            <img src="<?php echo get_template_directory_uri();?>/images/p2p-timeline/p2p-timeline-02.png" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="col-md-12 col-sm-12 col-xs-12 hvr-sink border-top-5">
                                        <div data-animation-effect="fadeInDownSmall" data-effect-delay="800">
                                            <img src="<?php echo get_template_directory_uri();?>/images/p2p-timeline/p2p-timeline-04.png" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="col-md-12 col-sm-12 col-xs-12 hvr-sink border-top-5">
                                        <div data-animation-effect="fadeInDownSmall" data-effect-delay="800">
                                            <img src="<?php echo get_template_directory_uri();?>/images/p2p-timeline/p2p-timeline-09.png" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- ================ -->
                        </div>
                    </div>
                </section>
                <!-- Section End - Payam Mahjoub -->

                <!-- About Section Start - Payam Mahjoub -->
                <section class="white-bg clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-centered">
                                <div class="f-15 text-justify p-80 clearfix" dir="rtl" data-animation-effect="fadeInDownSmall" data-effect-delay="500">
                                    <h2 class="text-right p-30" style="color: #09AFDF">مزایای پهنای باند اختصاصی فرابرد</h2>
                                    <div class="col-md-6">
                                        <li>IP رایگان</li>
                                        <li>ارائه تجهیزات بصورت رایگان</li>
                                        <li>بررسی سریع امکان نصب و تحویل سریع</li>
                                        <li>نصب و راه اندازی رایگان</li>
                                    </div>
                                    <div class="col-md-6">
                                        <li>عدم محدودیت در ارائه پهنای باند تا Mbps 1000</li>
                                        <li>بدون محدودیت در حجم دانلود و آپلود</li>
                                        <li>پشتیبانی 24 ساعته ، 7 روزه</li>
                                        <li>ارائه سرویس با ضریب پایداری بسیار بالا</li>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- About Section End - Payam Mahjoub -->

            </div>
            <!-- ==================================================== -->
        </div>
        <!-- Tab Panes End -->

    </div>
