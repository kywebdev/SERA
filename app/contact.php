<!doctype html>
<html lang="en">
    <head>
        <title>SERA | Contact Us</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="contact-page">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
        <div class="contact-ctas">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <a href="#footer" class="contact-ctas__cta">
                            <div class="contact-ctas__cta__img">
                                <img src="img/envelope.png" alt="" />
                            </div>
                            <div class="contact-ctas__cta__text">
                                <p>Sign up and receive email updates when trips are posted, rescheduled, or canceled.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="faqs.php" class="contact-ctas__cta">
                            <div class="contact-ctas__cta__img">
                                <img src="img/qa.png" alt="" />
                            </div>
                            <div class="contact-ctas__cta__text">
                                <p>Have Questions? <br />Visit our frequently asked questions (FAQ’s) and terms page.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <h1>Contact Us</h1>
                    </div>
                    <div class="col-md-9">
                        <p><strong>State Employees Recreation Association of Pennsylvania</strong></p>
                        <p>The State Employees Recreation Association of Pennsylvania (SERA) is a non-profit organization comprised of volunteers. Please allow a minimum 2-3 business days for email response do to volunteer's work schedules. Many questions can be answered by visiting our frequently asked questions (FAQ) page.</p>
                    </div>
                </div>
                <form class="row contact-form">
                    <div class="col-md-3">
                        <label for="name">Full Name</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" id="name" />
                    </div>
                    <div class="col-md-3">
                        <label for="email">Email</label>
                    </div>
                    <div class="col-md-9">
                        <input type="email" id="email" />
                    </div>
                    <div class="col-md-3">
                        <label for="comment">Comment</label>
                    </div>
                    <div class="col-md-9">
                        <textarea id="comment"></textarea>
                    </div>
                    <div class="col-12">
                        <input type="submit" value="Submit" />
                    </div>
                </form>
            </div>
        </main>
        <?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>