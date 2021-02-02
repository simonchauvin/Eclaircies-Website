<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A walking and running racing game set in a vast forest.">
    <meta name="author" content="Simon Chauvin">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="favicon.ico">

    <title>Éclaircies Press Kit</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- NAVBAR -->
        <nav class="col-md-2 d-none d-md-block sidebar">
            <div class="sidebar-sticky">
                <h5 class="sidebar-heading ml-3 mt-0">
                    Éclaircies Press Kit
                </h5>
                <ul class="nav flex-column">
                    <li class="nav-item menu-link">
                        <a href="#factsheet">
                            Factsheet
                        </a>
                    </li>
                    <li class="nav-item menu-link">
                        <a href="#info">
                            Info
                        </a>
                    </li>
                    <li class="nav-item menu-link">
                        <a href="#credits">
                            Credits
                        </a>
                    </li>
                    <li class="nav-item menu-link">
                        <a href="#videos">
                            Videos
                        </a>
                    </li>
                    <li class="nav-item menu-link">
                        <a href="#screenshots">
                            Screenshots
                        </a>
                    </li>
                    <li class="nav-item menu-link">
                        <a href="#social">
                            Social
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- MAIN COLUMN -->
        <main role="main" class="col-md-10 offset-md-2 px-4">
            <div id="top" class="row mb-4">
                <div class="col-10">
                    <!-- BANNER -->
                    <img src="img/banner.png" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-lg-2">

                    <!-- SECTION FACTSHEET -->
                    <h3 id="factsheet">Factsheet</h3>
                    <p class="fact">
                        <strong>Title:</strong> Éclaircies
                    </p>
                    <p class="fact">
                        <strong>Developer:</strong> Simon Chauvin
                    </p>
                    <p class="fact">
                        <strong>Based in:</strong> Paris (France)
                    </p>
                    <p class="fact">
                        <strong>Release Date:</strong> Spring 2021
                    </p>
                    <p class="fact">
                        <strong>Platforms:</strong> Windows / MacOS / Linux
                    </p>
                    <p class="fact">
                        <strong>Website:</strong> <a href="https://www.eclaircies-game.com">www.eclaircies-game.com</a>
                    </p>
                    <!--<p class="fact">
                        <strong>Price:</strong> TBA
                    </p>-->
                    <p class="fact">
                        <strong>Contact:</strong> <a href="mailto:contact@simonchauvin.com">contact@simonchauvin.com</a>
                    </p>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 offset-lg-1 offset-xl-0">

                    <!-- SECTION INFO -->
                    <h3 id="info">Info</h3>
                    <p class="fact">
                        <strong>Description:</strong>
                        <br>
                        Éclaircies is an exploration game, a walking and running simulation as well as a racing game set in a vast generated forest. It's a game about getting lost in a foreign place and slowly learning to make it more identifiable and comforting. It is also an experiment on movement and the feeling of movement in first person games, using only two keys Éclaircies allows players to move around in a very unique and immersive way. Finally, Éclaircies is also an alternative racing game in which players can actually create the tracks they will have to follow to get out of the forest.
                    </p>
                    <p class="fact">
                        <strong>Genre:</strong>
                        <br>
                        Simulation/Exploration/Racing
                    </p>
                    <p class="fact">
                        <strong>History:</strong>
                        <br>
                        Éclaircies started in late 2018 as a simple one week project for the 7 day FPS and PROCJAM game jams to try a different approach on first person controllers. It slowly started to become a much more important endeavor as I kept coming back to it because its core principles resonated with me personally and also represented a major technical challenge. A large part of 2019 was thus dedicated to studiying forests, designing the overarching structure of the game and making the necessary optimizations required to allow a vast and dense forest to be streamed in real time.
                    </p>
                    <hr class="divider">

                    <!-- SECTION CREDITS -->
                    <h3 id="credits">Credits</h3>
                    <p class="fact">
                        <strong>Simon Chauvin:</strong> Design, Art and Code
                        <br>
                    </p>
                    <p class="fact">
                        <strong>Marie Muller:</strong> Sound design
                        <br>
                    </p>
                    <hr class="divider">

                    <!-- SECTION VIDEOS -->
                    <h3 id="videos">Videos</h3>
                    <h5>Teaser:</h5>
                    <div class="video-container">
                        <iframe src="https://player.vimeo.com/video/507351066?title=0&byline=0&portrait=0" class="video" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <!-- iframes -->
                    <!--<h5>Gameplay video:</h5>
                    <div class="video-container">
                        <iframe src="https://player.vimeo.com/video/385470923" class="video" frameborder="0"
                                allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>-->
                    <hr class="divider">

                    <!-- SECTION SCREENSHOTS -->
                    <h3 id="screenshots">Screenshots</h3>
                    <p class="mb-3">
                        <a href="img/screenshots.zip" target="_blank">Download all gifs & screenshots as
                            .zip</a>
                    </p>
                    <div class="row">
                        <?php //Display all images in screenshot folder :
                        $dir = 'img/screenshots/';
                        $files = array_diff(scandir($dir), array('..', '.'));
                        $i = 0;
                        foreach ($files as $key => $value) {
                            echo '<div class="col-md-12 col-lg-6 pt-2">
                                    <a href="#lightbox" data-toggle="modal" data-slide-to="' . $i++ . '">
                                        <img src="' . $dir . $value . '" class="img-fluid">
                                    </a>
                                </div>';
                        }
                        ?>
                    </div>
                    <hr class="divider">

                    <!-- GALLERY POPUP -->
                    <div class="modal fade and carousel slide" id="lightbox">
                        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="carousel-inner">
                                        <?php //Set Carousel sources :
                                        $i = 0;
                                        $active = 'active';
                                        foreach ($files as $key => $value) {
                                            if ($i > 0)
                                                $active = '';
                                            $i++;
                                            echo '<div class="carousel-item ' . $active . '">
                                                    <img src="' . $dir . $value . '" class="d-block w-100" alt="' . $value . '">
                                                </div>';
                                        }

                                        ?>
                                    </div>
                                    <a class="carousel-control-prev" href="#lightbox" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#lightbox" role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div><!-- /.modal-body -->
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <!-- SECTION SOCIAL -->
                    <h3 id="social">Social</h3>
                    <p class="fact">
                        <strong>Contact:</strong> <a href="mailto:contact@simonchauvin.com">contact@simonchauvin.com</a>
                    </p>
                    <p class="fact">
                        <strong>Website:</strong> <a href="https://www.simonchauvin.com" target="_blank">www.simonchauvin.com</a>
                    </p>
                    <p class="fact">
                        <strong>Twitter:</strong> <a href="https://twitter.com/SimonChauvin"
                                                     target="_blank">@SimonChauvin</a>
                    </p>
                    <hr class="divider">
                </div>
            </div>

        </main>

        <!-- SCRIPTS SOURCES -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
                integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
                crossorigin="anonymous"></script>
        <script src="js/main.js"></script>

    </div>
</div>
</body>
</html>
