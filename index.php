<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Career">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Career Team | Website</title>
    <meta name="description" content="Career Team Website Official">
    <link rel="icon" type="image/png" href="./img/icon.png" />

    <!-- Open Graph (สำหรับ Facebook, LINE, Discord) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Career Team">
    <meta property="og:description" content="กลุ่มนักพัฒนาเซิร์ฟเวอร์ CAREER ใน San Andreas Multiplayer (SAMP) เป้าหมายเดียวกันคือการสร้างเซิร์ฟเวอร์ที่สนุกที่สุด และให้ทุกคนได้สัมผัสประสบการณ์ที่ไม่เหมือนใคร">
    <meta property="og:url" content="https://www.gta-career.com">
    <meta property="og:image" content="https://www.gta-career.com/img/og-image.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./">หน้าหลัก</a></li>
                                <li><a href="#">เซิฟเวอร์</a>
                                    <ul class="dropdown">
                                        <li><a href="/careercity">Career City</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">สนับสนุน</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Career Launcher</a></li>
                                        <li><a href="#">KongProject</a></li>
                                        <li><a href="#">Plus+ Developers</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">ผลงาน</a></li>
                                <li><a href="#">บล็อก</a></li>
                                <li><a href="#">ติดต่อ</a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <?php
    function isThaiIP() {
        $ip = $_SERVER['REMOTE_ADDR'];
        $geoData = @json_decode(file_get_contents("http://ip-api.com/json/$ip"), true);

        if ($geoData && isset($geoData['countryCode']) && $geoData['countryCode'] === 'TH') {
            return true;
        }
        return false;
    }

    function isThaiLanguage() {
        if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            $langs = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']);
            // ตรวจสอบว่าภาษาที่รับมามี "th" หรือไม่
            if (strpos($langs, 'th') !== false) {
                return true;
            }
        }
        return false;
    }

    function isThaiUser() {
        return isThaiIP() || isThaiLanguage();
    }

    if (!isThaiUser()) {} else {
        echo '
        <script type="text/javascript">
        var LHCChatOptions = {};
        LHCChatOptions.opt = {widget_height:340,widget_width:300,popup_height:520,popup_width:500,domain:"gta-career.com"};
        (function() {
        var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
        var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf("://")+1)) : "";
        var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : "";
        po.src = "//www.gta-career.com/livechat/index.php/tha/chat/getstatus/(click)/internal/(position)/bottom_right/(ma)/br/(dot)/true/(top)/350/(units)/pixels/(leaveamessage)/true/(department)/1?r="+referrer+"&l="+location;
        var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
        })();
        </script>';
    }

    ?>
    
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>For launcher PC</span>
                                <h2>Career Launcher</h2>
                                <a href="#" class="primary-btn">ดูว่ามีอะไรมาใหม่บ้าง!?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>For website and server</span>
                                <h2>Career<br>Team</h2>
                                <a href="#" class="primary-btn">ดูรายละเอียดเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="services__title">
                        <div class="section-title">
                            <span>Our services</span>
                            <h2>พวกเราทำอะไร?</h2>
                        </div>
                        <p>
                            พวกเราคือกลุ่มคนที่สร้างและพัฒนาเซิร์ฟเวอร์ CAREER ใน San Andreas Multiplayer (SAMP) ทุกคนในทีมมีหน้าที่และบทบาทของตัวเอง แต่เป้าหมายเดียวกันคือการสร้างเซิร์ฟเวอร์ที่สนุกที่สุด และให้ทุกคนได้สัมผัสประสบการณ์ที่ไม่เหมือนใคร</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon imgfix">
                                    <img src="img/icons/si-1.png" alt="">
                                </div>
                                <h4>Scripting</h4>
                                <p>สร้างระบบใหม่ๆ ที่ตอบโจทย์ความสนุกและความแปลกใหม่</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon imgfix">
                                    <img src="img/icons/si-2.png" alt="">
                                </div>
                                <h4>Mapping</h4>
                                <p>สร้างแผนที่ที่เป็นเอกลักษณ์และน่าตื่นตาตื่นใจ</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon imgfix">
                                    <img src="img/icons/si-3.png" alt="">
                                </div>
                                <h4>Community Management</h4>
                                <p>ใกล้ชิดกับผู้เล่นและสร้างบรรยากาศที่เป็นกันเอง</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon imgfix">
                                    <img src="img/icons/si-4.png" alt="">
                                </div>
                                <h4>Testing</h4>
                                <p>ตรวจสอบและพัฒนาเซิร์ฟเวอร์ให้พร้อมใช้งานจริง</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Work Section Begin -->
    <section class="work">
        <div class="work__gallery">
            <div class="grid-sizer"></div>
            <div class="work__item wide__item set-bg" data-setbg="img/work/work-1.jpg">
                <a href="#" class="play-btn"><i
                        class="fa fa-play"></i></a>
                <div class="work__item__hover">
                    <h4>รูปภาพ</h4>
                    <ul>
                        <li>CAREER</li>
                        <li>SERVER</li>
                    </ul>
                </div>
            </div>
            <div class="work__item small__item set-bg" data-setbg="img/work/work-2.jpg">
                <a href="#" class="play-btn"><i
                        class="fa fa-play"></i></a>
            </div>
            <div class="work__item small__item set-bg" data-setbg="img/work/work-3.jpg">
                <a href="#" class="play-btn"><i
                        class="fa fa-play"></i></a>
            </div>
            <div class="work__item large__item set-bg" data-setbg="img/work/work-4.jpg">
                <a href="#" class="play-btn"><i
                        class="fa fa-play"></i></a>
                <div class="work__item__hover">
                    <h4>Community</h4>
                    <ul>
                        <li>CAREER</li>
                        <li>SERVER</li>
                    </ul>
                </div>
            </div>
            <!-- video-popup -->
            <div class="work__item small__item set-bg" data-setbg="img/work/work-5.jpg">
                <a href="#" class="play-btn"><i
                        class="fa fa-play"></i></a>
            </div>
            <div class="work__item small__item set-bg" data-setbg="img/work/work-6.jpg">
                <a href="#" class="play-btn"><i
                        class="fa fa-play"></i></a>
            </div>
            <div class="work__item wide__item set-bg" data-setbg="img/work/work-7.jpg">
                <a href="#" class="play-btn"><i
                        class="fa fa-play"></i></a>
                <div class="work__item__hover">
                    <h4>EVENT WARZONE</h4>
                    <ul>
                        <li>CAREER</li>
                        <li>SERVER</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Section End -->

    <!-- Counter Section Begin -->
    <section class="counter">
        <div class="container">
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__text imgfixtwo">
                                <img src="img/icons/ci-1.png" alt="">
                                <h2 class="counter_num">0</h2>
                                <p>เซิฟเวอร์ที่ให้บริการ</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text imgfixtwo">
                                <img src="img/icons/ci-2.png" alt="">
                                <h2 class="counter_num">0</h2>
                                <p>ผู้เล่นที่ออนไลน์</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text imgfixtwo">
                                <img src="img/icons/ci-3.png" alt="">
                                <h2 class="counter_num">0</h2>
                                <p>เซิฟเวอร์ที่ปิดให้บริการ</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item four__item">
                            <div class="counter__item__text imgfixtwo">
                                <img src="img/icons/ci-4.png" alt="">
                                <h2 class="counter_num">1</h2>
                                <p>เซิฟเวอร์ที่กำลังพัฒนา</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Team Section Begin -->
    <section class="team spad set-bg" data-setbg="img/team-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title team__title">
                        <span>Career Team มุ่งมั่นที่จะเป็นส่วนหนึ่งของประสบการณ์ที่น่าจดจำสำหรับผู้เล่นทุกคน</span>
                        <h2>ทีมงานของเรา</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item set-bg" data-setbg="https://api.gta-career.com/discord/avatar?discordid=1043772856615583754">
                        <div class="team__item__text">
                            <h4>KongWatcharapong</h4>
                            <p>Developers</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item set-bg" data-setbg="https://api.gta-career.com/discord/avatar?discordid=626085574884720642">
                        <div class="team__item__text">
                            <h4>PONDVPS</h4>
                            <p>Support</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item set-bg" data-setbg="/img/PLUSDEVELOPERS.png">
                        <div class="team__item__text">
                            <h4>PLUS+ DEVELOPERS</h4>
                            <p>Support</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item set-bg" data-setbg="/img/KONGPROJECT.png">
                        <div class="team__item__text">
                            <h4>KONG PROJECT</h4>
                            <p>Support</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--second set-bg" data-setbg="img/team/team-2.jpg">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--third set-bg" data-setbg="img/team/team-3.jpg">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--four set-bg" data-setbg="img/team/team-4.jpg">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-12 p-0">
                    <div class="team__btn">
                        <a href="#" class="primary-btn">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>บล็อกของเรา</span>
                        <h2>อัพเดทข่าวสาร</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest__slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>Career Team: ความสำเร็จของเราอยู่ที่การทำงานร่วมกัน</h4>
                            <ul>
                                <li>พฤศจิกายน 25, 2024</li>
                            </ul>
                            <p>Career Team เชื่อว่า ความสำเร็จของโครงการและเซิร์ฟเวอร์ San Andreas Multiplayer มาจากการร่วมมือกันอย่างแข็งแกร่งของทุกคน...</p>
                            <a href="#">อ่านต่อ <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>คำถามที่พบบ่อย: ทำไม Career Team ถึงเน้นการพัฒนาเซิร์ฟเวอร์ SAMP?</h4>
                            <ul>
                                <li>พฤศจิกายน 25, 2024</li>
                            </ul>
                            <p>หลายคนสงสัยว่าทำไม Career Team ถึงมุ่งเน้นไปที่การพัฒนาเซิร์ฟเวอร์ San Andreas Multiplayer ซึ่งเป็นเกมที่มีอายุยาวนาน...</p>
                            <a href="#">อ่านต่อ <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>การพัฒนาเซิร์ฟเวอร์ SAMP: ปัจจัยสำคัญที่ทำให้ Career Team ประสบความสำเร็จ</h4>
                            <ul>
                                <li>พฤศจิกายน 25, 2024</li>
                            </ul>
                            <p>การทำงานร่วมกันเป็นทีมและการใส่ใจในรายละเอียดเล็กๆ น้อยๆ คือสิ่งที่ทำให้ Career Team สามารถพัฒนาเซิร์ฟเวอร์ SAMP ที่มีคุณภาพ...</p>
                            <a href="#">อ่านต่อ <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>การสร้างสรรค์โลกของ SAMP: บทบาทของแต่ละคนใน Career Team</h4>
                            <ul>
                                <li>พฤศจิกายน 25, 2024</li>
                            </ul>
                            <p>ในทีม Career Team ทุกคนมีบทบาทสำคัญในการพัฒนาเซิร์ฟเวอร์ จากการออกแบบแผนที่ไปจนถึงการดูแลระบบต่างๆ ทุกคนล้วนทำหน้าที่ของตัวเองอย่างดีที่สุด...</p>
                            <a href="#">อ่านต่อ <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>Career Team: ทำไมการทดสอบเซิร์ฟเวอร์ถึงเป็นสิ่งสำคัญ?</h4>
                            <ul>
                                <li>พฤศจิกายน 25, 2024</li>
                            </ul>
                            <p>การทดสอบเซิร์ฟเวอร์ก่อนการเปิดใช้งานจริงช่วยให้เราแน่ใจว่าเซิร์ฟเวอร์จะทำงานได้อย่างราบรื่นและไม่มีข้อผิดพลาด...</p>
                            <a href="#">อ่านต่อ <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>คำถามที่พบบ่อย: Career Team มีการพัฒนาเซิร์ฟเวอร์ใหม่ๆ หรือไม่?</h4>
                            <ul>
                                <li>พฤศจิกายน 25, 2024</li>
                            </ul>
                            <p>หลายคนถามว่า Career Team วางแผนที่จะพัฒนาเซิร์ฟเวอร์ใหม่ๆ หรือไม่ ซึ่งคำตอบคือทีมของเรามีการพัฒนาและปรับปรุงเซิร์ฟเวอร์อย่างต่อเนื่อง...</p>
                            <a href="#">อ่านต่อ <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>Career Team: การสร้างการเชื่อมต่อกับชุมชน SAMP</h4>
                            <ul>
                                <li>พฤศจิกายน 25, 2024</li>
                            </ul>
                            <p>การเชื่อมต่อกับชุมชน SAMP และรับฟังความคิดเห็นจากผู้เล่นเป็นสิ่งสำคัญในการพัฒนาเซิร์ฟเวอร์ให้ตอบโจทย์ความต้องการของผู้เล่น...</p>
                            <a href="#">อ่านต่อ <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Call To Action Section Begin -->
    <section class="callto spad set-bg" data-setbg="img/callto-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="callto__text">
                        <h2>Career Team</h2>
                        <p>เรามุ่งมั่นสร้างเซิร์ฟเวอร์ที่มอบประสบการณ์การเล่นที่ดีที่สุด<br>ด้วยการทำงานร่วมกันอย่างมืออาชีพและความคิดสร้างสรรค์ในทุกด้าน</p>
                        <a href="#">เข้าร่วมกับเรา!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="footer__option">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__option__item">
                            <h5>เกี่ยวกับเรา</h5>
                            <p>Career Team ถูกก่อตั้งเพื่อเป็นส่วนหนึ่งหรือเรียกรวม เพื่อสะดวกต่อการทำเซิฟเวอร์</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="footer__option__item">
                            <h5>ข่าวสาร</h5>
                            <p>ติดตามข่าวสารการอัพเดท จากทีมงาน Career Team แบบเรียวไทม์</p>
                            <form action="#">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="footer__copyright__text">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved | <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="http://KongProject.com" target="_blank">KongProject</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>