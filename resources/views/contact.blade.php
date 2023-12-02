@include('header')
<!-- Banner/Slider -->
<div class="page-head section row-vm light has-bg">
    <div class="imagebg">
        <img src="frontend_assets/images/team-left.jpg" alt="page-head">
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2>Contact</h2>
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><span>Contact</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #end Banner/Slider -->
</header>

<!-- Section -->
<div class="section section-pad">
<div class="container">
    <div class="row">
        <div class="col-md-8 res-m-bttm">
            <div class="contact-information">
                <h4>Contact Information</h4>
                <div class="row">
                    <div class="col-sm-4 res-m-bttm">
                        <div class="contact-entry">
                            <h6>Exo Energy Group LTD</h6>
                            <p>20-22 Wenlock Road, London, England, N17GU</p>
                        </div>
                    </div>
                    <div class="col-sm-4 res-m-bttm">
                        <div class="contact-entry">
                            <h6>contact number</h6>
                            <p>Phone:  +44 117 410 1428</p>
                        </div>
                    </div>
                    <div class="col-sm-4 res-m-bttm">
                        <div class="contact-entry">
                            <h6>office hours</h6>
                            <p>Monday - Friday<br/>8:30am - 5:00pm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <p>Complete and submit the form below</p>

                                            <form id="contact-formd" class="form-message" action="https://www.exogroupltd.com/sendcontact" method="post">
                    <input type="hidden" name="_token" value="AwoOvBzJ50WI9kIohxLyQruukIX3zrnjvmCO2PiF">

                    <div class="form-group row">
                        <div class="form-field col-sm-6 form-m-bttm">
                            <input name="name" type="text" placeholder="Full Name *" class="form-control required" required>
                        </div>
                        <div class="form-field col-sm-6">
                            <input name="email" type="email" placeholder="Email *" class="form-control required email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-field col-sm-6 form-m-bttm">
                            <input name="phone" type="text" placeholder="Phone Number *" class="form-control required" required>
                        </div>
                        <div class="form-field col-sm-6">
                            <input name="subject" type="text" placeholder="Subject *" class="form-control required" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-field col-md-12">
                            <textarea name="message" placeholder="Messages *" class="txtarea form-control required" required></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-alt">Submit</button>
                </form>
            </div>
        </div><!-- .col  -->
        <div class="col-md-4">
            <div id="gMap" class="google-map"></div>


        </div><!-- .col  -->
    </div>
    <br>
    <div class="row">
        <div class="col-md-12 res-m-bttm">
            <div id="gMap" class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.2357508187606!2d-0.09084908470829353!3d51.527235679638466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ca671a6cfb7%3A0x9320c88f0a927f3f!2s128%20City%20Rd%2C%20London%20EC1V%202NX%2C%20UK!5e0!3m2!1sen!2snl!4v1674604373052!5m2!1sen!2snl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <a href="https://goo.gl/maps/QwFkQjCYeZyZoKcz7" class="map-link">View on google map <span class="fa fa-caret-right"></span></a>
        </div><!-- .col  -->
    </div>
</div>
</div>
<!-- End Section -->



@include('footer')
