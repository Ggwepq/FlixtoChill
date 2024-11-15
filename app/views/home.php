<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Flix
    </title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="grid.css">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="../views/css/home.css">
</head>

<body>

    <?php require 'partials/nav.php' ?>

    <!-- HERO SECTION -->
    <div class="hero-section">
        <!-- HERO SLIDE -->
        <div class="hero-slide">
            <div class="owl-carousel carousel-nav-center" id="hero-carousel">
                <!-- SLIDE ITEM -->
            <?php foreach ($collection as $popular):
                $popular_movie_id = $popular->getID(); ?>
                <div class="hero-slide-item">
                        <img src="https:<?= getImageUrl($popular_movie_id, 1) ?>" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                    <?= $popular->getTitle() ?>
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span><?= number_format($popular->getVoteAverage(), 1) ?></span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                        <span><?= getRuntime($popular_movie_id) ?> mins</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                    <?= getDescription($popular_movie_id) ?>
                            </div>
                            <div class="item-action top-down delay-6">
                                    <a href="player.php?id=<?= $popular_movie_id ?>" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
            <?php endforeach ?>
            </div>
        </div>
        <!-- END HERO SLIDE -->
        <!-- TOP MOVIES SLIDE -->
        <div class="top-movies-slide">
            <div class="owl-carousel" id="top-movies-slide">
                <!-- MOVIE ITEM -->
            <?php foreach ($topRated as $top):
                $top_movie_id = $top->getID(); ?>
            <a href="player.php?id=<?= $top_movie_id ?>">
                <div class="movie-item">
                    <img src="https:<?= getImageUrl($top_movie_id, 0) ?>" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                                <?= $top->getTitle() ?>
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                    <span><?= number_format($top->getVoteAverage(), 1) ?></span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                    <span><?= getRuntime($top_movie_id) ?> mins</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
                <!-- END MOVIE ITEM -->
            <?php endforeach ?>
            </div>
        </div>
        <!-- END TOP MOVIES SLIDE -->
    </div>
    <!-- END HERO SECTION -->

    <!-- LATEST MOVIES SECTION -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                latest movies
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./images/movies/theatre-dead.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Theatre of the dead
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>
    <!-- END LATEST MOVIES SECTION -->

    <!-- LATEST SERIES SECTION -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                latest series
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./images/series/supergirl.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Supergirl
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>
    <!-- END LATEST SERIES SECTION -->

    <!-- LATEST CARTOONS SECTION -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                latest cartoons
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./images/cartoons/demon-slayer.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Demon Slayer
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>
    <!-- END LATEST CARTOONS SECTION -->

    <!-- SPECIAL MOVIE SECTION -->
    <div class="section">
        <div class="hero-slide-item">
            <img src="./images/transformer-banner.jpg" alt="">
            <div class="overlay"></div>
            <div class="hero-slide-item-content">
                <div class="item-content-wraper">
                    <div class="item-content-title">
                        Transformer
                    </div>
                    <div class="movie-infos">
                        <div class="movie-info">
                            <i class="bx bxs-star"></i>
                            <span>9.5</span>
                        </div>
                        <div class="movie-info">
                            <i class="bx bxs-time"></i>
                            <span>120 mins</span>
                        </div>
                        <div class="movie-info">
                            <span>HD</span>
                        </div>
                        <div class="movie-info">
                            <span>16+</span>
                        </div>
                    </div>
                    <div class="item-content-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, possimus eius. Deserunt non odit, cum vero reprehenderit laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium, facere ab suscipit.
                    </div>
                    <div class="item-action">
                        <a href="#" class="btn btn-hover">
                            <i class="bx bxs-right-arrow"></i>
                            <span>Watch now</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SPECIAL MOVIE SECTION -->

    <!-- PRICING SECTION -->
    <!-- <div class="section"> -->
    <!--     <div class="container"> -->
    <!--         <div class="pricing"> -->
    <!--             <div class="pricing-header"> -->
    <!--                 Fl<span class="main-color">i</span>x pricing -->
    <!--             </div> -->
    <!--             <div class="pricing-list"> -->
    <!--                 <div class="row"> -->
    <!--                     <div class="col-4 col-md-12 col-sm-12"> -->
    <!--                         <div class="pricing-box"> -->
    <!--                             <div class="pricing-box-header"> -->
    <!--                                 <div class="pricing-name"> -->
    <!--                                     Basic -->
    <!--                                 </div> -->
    <!--                                 <div class="pricing-price"> -->
    <!--                                     Free -->
    <!--                                 </div> -->
    <!--                             </div> -->
    <!--                             <div class="pricing-box-content"> -->
    <!--                                 <p>Originals</p> -->
    <!--                                 <p>Swich plans anytime</p> -->
    <!--                                 <p><del>65+ top Live</del></p> -->
    <!--                                 <p><del>TV Channels</del></p> -->
    <!--                             </div> -->
    <!--                             <div class="pricing-box-action"> -->
    <!--                                 <a href="#" class="btn btn-hover"> -->
    <!--                                     <span>Register now</span> -->
    <!--                                 </a> -->
    <!--                             </div> -->
    <!--                         </div> -->
    <!--                     </div> -->
    <!--                     <div class="col-4 col-md-12 col-sm-12"> -->
    <!--                         <div class="pricing-box hightlight"> -->
    <!--                             <div class="pricing-box-header"> -->
    <!--                                 <div class="pricing-name"> -->
    <!--                                     Premium -->
    <!--                                 </div> -->
    <!--                                 <div class="pricing-price"> -->
    <!--                                     $35.99 <span>/month</span> -->
    <!--                                 </div> -->
    <!--                             </div> -->
    <!--                             <div class="pricing-box-content"> -->
    <!--                                 <p>Originals</p> -->
    <!--                                 <p>Swich plans anytime</p> -->
    <!--                                 <p><del>65+ top Live</del></p> -->
    <!--                                 <p><del>TV Channels</del></p> -->
    <!--                             </div> -->
    <!--                             <div class="pricing-box-action"> -->
    <!--                                 <a href="#" class="btn btn-hover"> -->
    <!--                                     <span>Register now</span> -->
    <!--                                 </a> -->
    <!--                             </div> -->
    <!--                         </div> -->
    <!--                     </div> -->
    <!--                     <div class="col-4 col-md-12 col-sm-12"> -->
    <!--                         <div class="pricing-box"> -->
    <!--                             <div class="pricing-box-header"> -->
    <!--                                 <div class="pricing-name"> -->
    <!--                                     VIP -->
    <!--                                 </div> -->
    <!--                                 <div class="pricing-price"> -->
    <!--                                     $65.99 <span>/month</span> -->
    <!--                                 </div> -->
    <!--                             </div> -->
    <!--                             <div class="pricing-box-content"> -->
    <!--                                 <p>Originals</p> -->
    <!--                                 <p>Swich plans anytime</p> -->
    <!--                                 <p><del>65+ top Live</del></p> -->
    <!--                                 <p><del>TV Channels</del></p> -->
    <!--                             </div> -->
    <!--                             <div class="pricing-box-action"> -->
    <!--                                 <a href="#" class="btn btn-hover"> -->
    <!--                                     <span>Register now</span> -->
    <!--                                 </a> -->
    <!--                             </div> -->
    <!--                         </div> -->
    <!--                     </div> -->
    <!--                 </div> -->
    <!--             </div> -->
    <!--         </div> -->
    <!--     </div> -->
    <!-- </div> -->
    <!-- END PRICING SECTION -->

<?php require 'partials/footer.php' ?>

    <!-- SCRIPT -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="app.js"></script>

</body>
<script>
$(document).ready(() => {
    $('#hamburger-menu').click(() => {
        $('#hamburger-menu').toggleClass('active')
        $('#nav-menu').toggleClass('active')
    })

    // setting owl carousel

    let navText = ["<i class='bx bx-chevron-left'></i>", "<i class='bx bx-chevron-right'></i>"]

    $('#hero-carousel').owlCarousel({
        items: 1,
        dots: false,
        loop: true,
        nav:true,
        navText: navText,
        autoplay: true,
        autoplayHoverPause: true
    })

    $('#top-movies-slide').owlCarousel({
        items: 3,
        dots: false,
        loop: true,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            500: {
                items: 3
            },
            1280: {
                items: 4
            },
            1600: {
                items: 6
            }
        }
    })

    $('.movies-slide').owlCarousel({
        items: 2,
        dots: false,
        nav:true,
        navText: navText,
        margin: 15,
        responsive: {
            500: {
                items: 2
            },
            1280: {
                items: 4
            },
            1600: {
                items: 6
            }
        }
    })
})
</script>
</html>

