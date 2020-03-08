<!doctype html>
<html lang="en">
    <head>
        <title>SERA | Home</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="home">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
        <div class="homepage-featured-trip">
            <div class="homepage-featured-trip__img">
                <img src="img/featured-trip-home.jpg" alt="" />
            </div>
            <div class="homepage-featured-trip__text">
                <h1>Featured Trip Title<br />2nd Featured Trip Line</h1>
                <h2>April XX, XXXX</h2>
            </div>
        </div>
        <div class="trip-cta">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 trip-cta__buttons">
                        <a href="gift-certificates.php" class="btn trip-cta__buttons__button paper paper-raise-flatten">Request a Gift Certificate</a>
                        <a href="#footer" class="btn trip-cta__buttons__button paper paper-raise-flatten">Join Our Mailing List</a>
                        <a href="" class="btn trip-cta__buttons__button paper paper-raise-flatten">View Our Calendar</a>
                        <a href="about.php" class="btn trip-cta__buttons__button paper paper-raise-flatten">Learn More About SERA</a>
                        <a href="faqs.php" class="btn trip-cta__buttons__button paper paper-raise-flatten">FAQ's</a>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="trips.php" class="trip-cta__cta">
                                            <div class="trip-cta__cta__img">
                                                <img src="img/cruises.jpg" alt="" />
                                            </div>
                                            <div class="trip-cta__cta__overlay">
                                                <span>Cruises</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="trips.php" class="trip-cta__cta">
                                            <div class="trip-cta__cta__img">
                                                <img src="img/bus-trips.jpg" alt="" />
                                            </div>
                                            <div class="trip-cta__cta__overlay">
                                                <span>Bus Trips</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <a href="trips.php" class="trip-cta__cta">
                                            <div class="trip-cta__cta__img">
                                                <img src="img/theatre.jpg" alt="" />
                                            </div>
                                            <div class="trip-cta__cta__overlay">
                                                <span>Theatre</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-12 col-sm-6">
                                        <a href="trips.php" class="trip-cta__cta">
                                            <div class="trip-cta__cta__img">
                                                <img src="img/us-travel.jpg" alt="" />
                                            </div>
                                            <div class="trip-cta__cta__overlay">
                                                <span>US Travel</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-12 col-sm-6">
                                        <a href="trips.php" class="trip-cta__cta">
                                            <div class="trip-cta__cta__img">
                                                <img src="img/abroad-travel.jpg" alt="" />
                                            </div>
                                            <div class="trip-cta__cta__overlay">
                                                <span>Abroad Travel</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="trip-list">
            <div class="container-fluid">
                <div class="row">
                    <?php include('includes/trip.php'); ?>
                    <?php include('includes/trip.php'); ?>
                    <?php include('includes/trip.php'); ?>
                    <?php include('includes/trip.php'); ?>
                    <?php include('includes/trip.php'); ?>
                    <?php include('includes/trip.php'); ?>
                    <?php include('includes/trip.php'); ?>
                    <?php include('includes/trip.php'); ?>
                    <?php include('includes/trip.php'); ?>
                    <?php include('includes/trip.php'); ?>
                    <?php include('includes/trip.php'); ?>
                    <?php include('includes/trip.php'); ?>
                    <?php include('includes/trip.php'); ?>
                    <?php include('includes/trip.php'); ?>
                    <?php include('includes/trip.php'); ?>
                    <?php include('includes/trip.php'); ?>
                    <div class="col-12 align-center">
                        <span>Viewing XX of XX</span>
                        <a href="" class="btn paper paper-raise-flatten">Load More</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>