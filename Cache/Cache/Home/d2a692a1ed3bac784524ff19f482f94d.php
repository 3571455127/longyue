<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="keywords" content="<?php echo ($seo_keywords); ?>" />

    <meta name="description" content="<?php echo ($seo_description); ?>" />

    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">

    <meta name="renderer" content="webkit">

    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

    <!-- wap -->

    <meta name="wap-font-scale" content="no" />

    <meta name="apple-mobile-web-app-capable" content="yes" />

    <meta name="format-detection" content="telephone=yes" />

    <meta name="Robots" content="all">

    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">



    <link rel="shortcut icon" href="favicon.ico" />

    <title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); else : echo ($site_name); endif;?></title>

    <link rel="stylesheet" href="__PUBLIC__/www/css/animate.min.css">

    <link rel="stylesheet" href="__PUBLIC__/www/css/swiper.min.css">

    <link rel="stylesheet" href="__PUBLIC__/www/css/bootstrap.min.css">

    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">

    <script src="__PUBLIC__/www/js/jquery.min.js"></script>

    <script src="__PUBLIC__/www/js/swiper.min.js"></script>

    <script src="__PUBLIC__/www/js/swiper.animate.min.js"></script>

    <script src="__PUBLIC__/www/js/bootstrap.min.js"></script>

    <script src="__PUBLIC__/www/js/main.js"></script>



</head>



<body data-spy="scroll" data-target="#navbar-example">



    <header>

        <div class="top-bar clearfix">

            <div class="container">

                <div class="row">

                    <!-- <div class="slogan col-lg-4"> Guangzhou LongYue Automation Company</div> -->

                    <div class="pull-left">

                        <div class="stock">Stock symbol : 835927 </div>

                    </div>



                    <div class="pull-right">

                        <div class="phone col-lg-6 col-md-6 col-sm-6">

                            <img src="__PUBLIC__/www/images/top-phone.png" alt=""><span>+86 <?php echo ($phone); ?></span></div>

                        <div class="email col-lg-6 col-md-6 col-sm-6">

                            <a href="mailto:<?php echo ($email); ?>" target="_blank" class="emails clearfix">

                                <img src="__PUBLIC__/www/images/top-email.png" alt="">

                                <span><?php echo ($email); ?></span></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <nav class="navbar navbar-default">

            <div class="container">

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>

                    <a class="navbar-brand" href="#"><img alt="logo" src="__PUBLIC__/www/images/logo.png"></a>

                </div>



                <div id="navbar-example">

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right">

                            <li class="active"><a href="#home">Home</a></li>

                            <li><a href="#product">Product</a></li>

                            <li><a href="#advantage">Advantage</a></li>

                            <li><a href="#about">About us</a></li>

                            <li><a href="#certificate">Certificate</a></li>

                            <li><a href="#partner">Partner</a></li>

                            <li><a href="#contact">Contact us</a></li>

                        </ul>

                    </div>

                </div>



            </div>

        </nav>

    </header>



    <div class="index">



        <!-- banner  -->

        <div id="home" class="banner">

            <!-- pc -->

            <div class="pc-banner">

                <div class="swiper-container">

                    <div class="swiper-wrapper">

                        <?php  $_result=M("slide_data")->field("*")->where("fid = 1 AND status=1 ")->order("id desc")->limit("5")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><div class="swiper-slide">

                                <?php if($r['title']!=11) : ?>

                                <div class="container">

                                    <div class="row">

                                        <div class="contant">

                                            <div class="title ani" swiper-animate-effect="slideInLeft"
                                                swiper-animate-delay="0.2s"><?php echo ($r["title"]); ?></div>

                                            <p class="ani" swiper-animate-effect="slideInLeft"
                                                swiper-animate-delay="0.2s">

                                                <?php echo ($r["description"]); ?><br /></p>

                                            <a class="ani" swiper-animate-effect="slideInLeft"
                                                swiper-animate-delay="0.2s" href="contact">Contact Us</a>

                                        </div>

                                    </div>

                                </div>

                                <?php endif;?>

                                <a href="<?php echo ($r["link"]); ?>" style="display: block;cursor: pointer;" title="<?php echo ($r["title"]); ?>"> <img
                                        src="<?php echo ($r["pic"]); ?>" alt="<?php echo ($r["title"]); ?>"></a>

                            </div><?php endforeach; endif;?>

                    </div>

                    <div class="swiper-pagination"></div>

                    <div class="swiper-btn">

                        <div class="swiper-button-prev swiper-button-white"></div>

                        <div class="swiper-button-next swiper-button-white"></div>

                    </div>



                </div>

            </div>

            <!-- wap -->

            <div class="wap-banner">

                <div class="swiper-container">

                    <div class="swiper-wrapper">

                        <?php  $_result=M("slide_data")->field("*")->where("fid = 2 AND status=1 ")->order("id desc")->limit("5")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><div class="swiper-slide">

                                <a href="<?php echo ($r["link"]); ?>" title="<?php echo ($r["title"]); ?>"> <img src="<?php echo ($r["pic"]); ?>" alt="<?php echo ($r["title"]); ?>"></a>

                            </div><?php endforeach; endif;?>



                    </div>

                    <div class="swiper-pagination"></div>



                </div>

            </div>



        </div>



        <!-- product -->

        <div>

            <a id="product"></a>

            <div class="product">

                <h3>Product</h3>

                <div class="titles">We have 3.0 Pioneer Mask Production Machine</div>

                <div class="container-full">

                    <div class="row-full">

                        <div class="pro-box clearfix" style="margin: 50px 0;">

                            <div class="left col-lg-6 col-md-6">

                                <?php  $_result=M("Product")->field("thumb,title,cont,listorder,id")->where(" 1  AND status=1  AND catid=73")->order("listorder desc")->limit("12")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="diflex clearfix">

                                        <div class="img col-lg-6 col-md-6">

                                            <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">

                                        </div>

                                        <div class="txt col-lg-6 col-md-6">

                                            <div class="box">

                                                <?php echo ($r["cont"]); ?>

                                            </div>

                                        </div>

                                    </div><?php endforeach; endif;?>

                            </div>



                            <div class="video col-lg-6 col-md-6">

                                <?php getcatvar('page','id = 111','cont');?>

                            </div>

                        </div>



                    </div>

                </div>

            </div>

        </div>



        <!-- advantage -->

        <div>

            <a id="advantage"></a>

            <div class="advantage">

                <div class="container">

                    <div class="row">



                        <?php getcatvar('page','id = 108','cont');?>

                    </div>

                </div>

            </div>

        </div>



        <!-- about -->

        <div>

            <a id="about"></a>

            <div class="about">

                <div class="container">

                    <div class="row">

                        <?php getcatvar('page','id = 74','cont');?>

                    </div>

                </div>

            </div>

        </div>



        <!-- Certificate -->

        <div>

            <a id="certificate"></a>

            <div class="certificate">

                <div class="container">

                    <div class="row">

                        <div class="box">

                            <div class="txt col-lg-6 col-md-6">

                                <h3>certificate</h3>

                                <div class="titles">We have 3.0 Pioneer Mask Production Machine</div>

                                <a class="about-btn" href="#contact">Contact Us</a>

                            </div>

                            <div class="img col-lg-6 col-md-6">

                                <div class="swiper-container">

                                    <div class="swiper-wrapper">

                                        <?php  $_result=M("Article")->field("thumb,title,listorder,id")->where(" 1  AND status=1  AND catid=110")->order("listorder desc")->limit("120")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="swiper-slide">

                                                <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">

                                            </div><?php endforeach; endif;?>

                                    </div>

                                    <div class="swiper-pagination"></div>



                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- Partner -->

        <div>

            <a id="partner"></a>

            <div class="partner">

                <div class="container">

                    <div class="row">

                        <h3>Partner</h3>

                        <div class="titles">We have 3.0 Pioneer Mask Production Machine</div>



                        <!-- pc -->

                        <div class="pc-partner" style="position: relative; padding: 30px 0;">

                            <div class="swiper-container">

                                <div class="swiper-wrapper">

                                    <?php  $_result=M("Case")->field("thumb,title,listorder,id")->where(" 1  AND status=1  AND catid=77")->order("listorder desc")->limit("120")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="swiper-slide"><img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>"></div><?php endforeach; endif;?>

                                </div>

                                <div class="swiper-pagination"></div>

                            </div>

                            <div class="swiper-button-prev"></div>

                            <div class="swiper-button-next"></div>

                        </div>



                        <!-- wap -->

                        <div class="wap-partner">

                            <div class="swiper-container">

                                <div class="swiper-wrapper">

                                    <?php  $_result=M("Case")->field("thumb,title,listorder,id")->where(" 1  AND status=1  AND catid=77")->order("listorder desc")->limit("120")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="swiper-slide"><img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>"></div><?php endforeach; endif;?>

                                </div>

                                <div class="swiper-pagination"></div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- footer -->

        <footer>



            <div class="container">

                <div class="row">

                    <div class="footer-box clearfix">

                        <div class="details col-lg-6 col-md-6">

                            <h6><?php echo ($name); ?></h6>

                            <ul>

                                <li>

                                    <?php echo ($address); ?>

                                </li>

                                <li><?php echo ($dizhi); ?> </li>

                                <li><?php echo ($guhua); ?></li>

                                <li>+86 <?php echo ($yidong); ?></li>

                                <li><?php echo ($qq); ?></li>

                                <li><a href="mailto:<?php echo ($email); ?>" target="_blank" class="emails">

                                        <?php echo ($email); ?></a></li>

                            </ul>

                        </div>

                        <div class="form col-lg-6 col-md-6">

                            <form name="form" method="post" onsubmit="return beforeSubmit2(this);"
                                action="index.php?g=Home&a=message">

                                <div class="box clearfix">

                                    <div class="box-left col-lg-4 col-md-4">

                                        <p>Name <span> *</span></p>

                                    </div>

                                    <div class="col-lg-8 col-md-8"> <input type="text" placeholder="Name" name="name">

                                    </div>

                                </div>

                                <div class="box clearfix">

                                    <div class="box-left col-lg-4 col-md-4">

                                        <p>Email <span>*</span></p>

                                    </div>

                                    <div class="col-lg-8 col-md-8"> <input type="text" placeholder="Email" name="email">

                                    </div>

                                </div>

                                <div class="box clearfix">

                                    <div class="box-left col-lg-4 col-md-4">

                                        <p>Company name <span>*</span></p>

                                    </div>

                                    <div class="col-lg-8 col-md-8"> <input type="text" placeholder="Company" name="com">

                                    </div>

                                </div>

                                <div class="box clearfix">

                                    <div class="box-left col-lg-4 col-md-4">

                                        <p>message <span> *</span></p>

                                    </div>

                                    <div class="col-lg-8 col-md-8"><textarea placeholder="Message"
                                            name="message"></textarea></div>

                                </div>



                                <div class="box-btns"> <input type="submit" value="SUBMIT" class="submit-btn"></div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

            <a id="contact"></a>





            <div class="goTop">

                <i class="topIcon"></i>

                <p>TOP</p>

            </div>

        </footer>



    </div>









</body>



</html>