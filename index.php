<?php
include "includes/db.php";
$query = "select * from portfolio_noorhajdawood";
$result = mysqli_query($connection, $query);
if (isset($_GET["homeID"])) {
    $query  = "SELECT * FROM tbl_213_home WHERE user_id='"
        . $_SESSION["userID"]
        . "' AND home_id='" . $_GET["homeID"] . "'";
    $result = mysqli_query($connection, $query);
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Noor Haj Dawood</title>
    <meta name="description" content="Portfolio">
    <meta name="author" content="Noor Haj Dawood">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/vendor.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>

</head>

<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header
    ================================================== -->
    <header class="s-header">

        <!-- <div class="header-logo">
            <a href="index.html">
                <img src="images/logo.svg" alt="Homepage">
            </a>
        </div> -->

        <div class="header-content">

            <nav class="row header-nav-wrap">
                <ul class="header-nav">
                    <li><a class="smoothscroll" href="#hero" title="Intro">Home</a></li>
                    <li><a class="smoothscroll" href="#about" title="About">About</a></li>
                    <li><a class="smoothscroll" href="#services" title="Services">Experience</a></li>
                    <li><a class="smoothscroll" href="#portfolio" title="Works">Projects</a></li>
                    <li><a class="smoothscroll" href="#contact" title="Contact us">Say Hello</a></li>
                </ul>
            </nav> <!-- end header-nav-wrap -->

            <a href="includes/resume.pdf" target="_blank" class="btn btn--stroke btn--small">Download CV</a>

        </div> <!-- end header-content -->

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header>


    <!-- hero
    ================================================== -->
    <section id="hero" class="s-hero target-section" data-parallax="scroll"
        data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="row hero-content">

            <div class="column large-full">

                <h1>
                    I'm Noor Haj Dawood, <br>
                    a Junior Software Engineer Student
                </h1>

                <ul class="hero-social">
                    <li>
                        <a href="https://github.com/NoorHajDawood" title="Github">Github</a>
                    </li>
                </ul> <!-- end hero-social -->

            </div>

        </div> <!-- end hero-content -->

        <div class="hero-scroll">
            <a href="#about" class="scroll-link smoothscroll">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M12 24l-8-9h6v-15h4v15h6z" />
                </svg>
            </a>
        </div> <!-- end hero-scroll -->

    </section> <!-- end s-hero -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about target-section">

        <div class="s-about__section s-about__section--profile">

            <div class="right-vert-line"></div>

            <div class="row">
                <div class="column large-6 medium-8 tab-full">

                    <div class="section-intro" data-num="01" data-aos="fade-up">
                        <h3 class="subhead">About Me</h3>
                        <h2 class="display-1">I'm a hard working student and I embrace challenges.</h2>
                    </div>

                    <div class="profile-pic" data-aos="fade-up">
                        <img src="images/profile-pic.png"
                             alt="">
                    </div>

                    <h3 data-aos="fade-up">Software Engineering</h3>

                    <p data-aos="fade-up">
                        B.Sc. Software Engineering Student with 4 sesmesters remaning.
                        I'm a quick learner and like to tackle challenges by myself.
                        I like to tinker with stuff, and gain experience by learning new things.
                        I like to lend a helping hand, be it my friends, other students or complete strangers.
                    </p>

                </div>
            </div>

            </div> <!-- work positions -->
        </div> <!-- end s-about__section--profile -->

    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id="services" class="s-services target-section h-dark-bg">

        <div class="row s-services__content">

            <div class="vert-line"></div>

            <div class="column large-6 s-services__leftcol">
                <div class="section-intro" data-num="02" data-aos="fade-up">
                    <h3 class="subhead">Experience</h3>

                    <h2 class="display-1">
                        Programming Experience
                    </h2>
                </div>

            </div> <!-- end  s-services--leftcol -->

            <div class="column large-6">
                <ul class="services-list" data-aos="fade-up">
                    <li><strong>HTML5</strong></li>
                        <li class="services-list__item"><strong>CSS</strong></li>
                        <li class="services-list__item"><strong>JavaScript</strong></li>
                        <li class="services-list__item"><strong>jQuery</strong></li>
                        <li class="services-list__item"><strong>PHP</strong></li>
                        <li class="services-list__item"><strong>C</strong></li>
                        <li class="services-list__item"><strong>C++</strong></li>
                        <li class="services-list__item"><strong>C#</strong></li>
                        <li class="services-list__item"><strong>Java</strong></li>
                        <li class="services-list__item"><strong>Python</strong></li>
                        <li class="services-list__item"><strong>SQL</strong></li>
                        <li class="services-list__item"><strong>Assembly</strong></li>
                </ul> <!-- end services-list -->
            </div>


        </div> <!-- s-services__content -->

    </section> <!-- end s-services -->


    <!-- portfolio
    ================================================== -->
    <section id="portfolio" class="s-portfolio target-section">

        <div class="row s-portfolio__header">
            <div class="column large-6 medium-8 tab-full">
                <div class="section-intro" data-num="03" data-aos="fade-up">
                    <h3 class="subhead">Portfolio</h3>
                    <h2 class="display-1">
                        A selection of recent projects I have worked on.
                    </h2>
                </div>
            </div>
        </div> <!-- s-porfolio__header -->

        <div class="row s-porfolio__list block-large-1-2 block-tab-full collapse">
            <?php
                while($row = mysqli_fetch_assoc($result)){
                    echo '<div class="column" data-aos="fade-up">
                    <div class="folio-item">
                        <div class="folio-item__thumb">
                            <a class="folio-item__thumb-link" href="'.$row["image"].'"
                                title="'.$row["title"].'" data-size="1050x700">
                                <img src="'.$row["image"].'" alt="'.$row["title"].'" title="'.$row["title"].'">
                            </a>
                        </div>
                        <div class="folio-item__info">
                            <div class="folio-item__cat">'.$row["experties"].'</div>
                            <h4 class="folio-item__title">'.$row["title"].'</h4>
                        </div>
                        <a href="'.$row["github"].'" title="Github Link" target="_blank"
                            class="folio-item__project-link">Github Link</a>
                        <div class="folio-item__caption">
                            <p>'.$row["description"].'</p>
                        </div>
                    </div>
                </div>';
                }
                mysqli_free_result($result);
            ?>
        </div> <!-- folio-list -->
    </section> <!-- end portfolio -->

    <!-- footer
    ================================================== -->
    <footer id="contact" class="s-footer h-dark-bg">

        <div class="right-vert-line"></div>

        <div class="row s-footer__main">
            <div class="column large-6">
                <div class="section-intro" data-aos="fade-up">
                    <h3 class="subhead">Get In Touch</h3>

                    <h2 class="display-1">
                        Have an idea or a concept that really excite you?
                        Let's turn that idea into reality. Shoot me a message.
                    </h2>
                </div>

                <div class="footer-email-us">
                    <a href="mailto:#0" class="btn btn--primary h-full-width">Let's Talk</a>
                </div>
            </div>

            <div class="column large-5">
                <div class="footer-contacts">
                    <div class="footer-contact-block" data-aos="fade-up">
                        <h5 class="footer-contact-block__header">
                            Email
                        </h5>
                        <p class="footer-contact-block__content">
                            <a href="mailto:#0">NoorHajDawood@gmail.com</a>
                        </p>
                    </div> <!-- end footer-contact-block -->
                    <div class="footer-contact-block" data-aos="fade-up">
                        <h5 class="footer-contact-block__header">
                            Phone
                        </h5>
                        <p class="footer-contact-block__content">
                            <a href="tel:+1975432345">+972 52 723 685</a>
                        </p>
                    </div> <!-- end footer-contact-block -->
                    <div class="footer-contact-block" data-aos="fade-up">
                        <h5 class="footer-contact-block__header">
                            Links
                        </h5>
                        <ul class="footer-contact-block__list">
                            <li><a href="https://github.com/NoorHajDawood">Github</a></li>
                        </ul>
                    </div> <!-- end footer-contact-block -->
                    <br>
                </div>
            </div>
        </div> <!-- end s-footer__main -->

        <div class="row s-footer__bottom">
            <div class="column large-full ss-copyright">
                <span>© Copyright Noor Haj Dawood 2021</span>
                <span><a href="https://www.shenkar.ac.il/he/departments/engineering-software-department" target="_blank">תואר ראשון בהנדסת תוכנה בשנקר</a></span>
                <span>Design by <a href="https://www.styleshout.com/" target="_blank">StyleShout</a></span>
            </div> <!-- end ss-copyright -->

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 0l8 9h-6v15h-4v-15h-6z" />
                    </svg>
                </a>
            </div> <!-- end ss-go-top -->
        </div> <!-- end s-footer__bottom -->

    </footer> <!-- end s-footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close"
                        title="Close (Esc)"></button> <button class="pswp__button pswp__button--share"
                        title="Share"></button> <button class="pswp__button pswp__button--fs"
                        title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom"
                        title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
<?php
include "includes/disconnect.php";
?>