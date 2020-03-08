<!doctype html>
<html lang="en">
    <head>
        <title>SERA | Trip Details</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="trip-details-page">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="trip-img">
                            <div class="trip-img__img">
                                <img src="img/trip-details.jpg" alt="" />
                            </div>
                            <div class="trip-img__text">
                                <h1>Trip Name -- FPO<br />2nd Line for Trip Name</h1>
                                <h2>April XX - XX, 20XX</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="trip-details">
                            <div class="container-fluid">
                                <span class="trip-details__trip-price">$0000.00</span>
                                <span class="trip-details__trip-status">Status: Available</span>
                                <hr />
                                <ul class="trip-details__overview">
                                    <li>Reservations are due by October 25, 2017</li>
                                    <li>Minimum age: 8 years of age</li>
                                    <li>Roundtrip Transportation via Newhurst Coach</li>
                                </ul>
                                <p class="trip-details__drivers-tip">Driver's Tip:<br />Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                <hr />
                                <span class="trip-details__itinerary">Itinerary:</span>
                                <span class="trip-details__trip-date">April XX, 20XX</span>
                                <div class="trip-details__itinerary-list">
                                    <div class="trip-details__itinerary-list__item">
                                        <span class="trip-details__itinerary-list__item__time">7:00 AM</span>
                                        <span class="trip-details__itinerary-list__item__desc">Depart from DGS Annex (Formerly Harrisburg State Hospital) Note: Area 4 Green, 4 Cherry Road in Harrisburg (Across from the Farm Show Complex)</span>
                                    </div>
                                    <div class="trip-details__itinerary-list__item">
                                        <span class="trip-details__itinerary-list__item__time">10:30 AM</span>
                                        <span class="trip-details__itinerary-list__item__desc">Approximate Arrival in New York City</span>
                                    </div>
                                    <div class="trip-details__itinerary-list__item">
                                        <span class="trip-details__itinerary-list__item__time">7:00 PM</span>
                                        <span class="trip-details__itinerary-list__item__desc">Depart New York City</span>
                                    </div>
                                    <div class="trip-details__itinerary-list__item">
                                        <span class="trip-details__itinerary-list__item__time">10:30 PM</span>
                                        <span class="trip-details__itinerary-list__item__desc">Approximate Arrival in Harrisburg</span>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <a href="" class="btn paper paper-raise-flatten trip-details__button">Print Flyer / Sign Up</a>
                                <a href="" class="btn paper paper-raise-flatten trip-details__button">Parking Map</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>