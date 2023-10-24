<?php
require_once 'header.php';
?>
        <div class="container-wrap">
            <aside id="fh5co-hero">
                <div class="flexslider">
                    <ul class="slides">
                        <li style="background-image: url(images/img_bg_2.jpg);">
                            <div class="overlay"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 text-center slider-text">
                                        <div class="slider-text-inner">
                                            <h1>Donation & Support</h1>
                                            <h2>Make your donation & support to church account.</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>
            <div id="fh5co-contact">
                <div class="row animate-box">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                        <h2>Donation & Support</h2>
                        <p>We appreciate your kind support and we pray God's blessing upond you!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-md-push-8 animate-box">
                        <h5>For inquiring and confirmation, contact us</h5>
                        <!-- <ul class="contact-info">
                            <li><i class="icon-location4"></i>Church Address</li>
                            <li><i class="icon-phone3"></i>Phone Number</li>
                            <li><i class="icon-location3"></i><a href="#">email@church-name.domain</a></li>
                            <li><i class="icon-globe2"></i><a href="#">www.church-name.domain</a></li>
                        </ul> -->
                    </div>
                    <div class="col-md-7 col-md-pull-2 animate-box">
                        <div class="row">
                            <center>
                                <hr>
                                <h4>Start Donation/Support</h4>
                                <p>By fill your name and the amount you want to support below:</p>
                                <hr>
                            </center>
                            
                            <!-- LIVE KEY: FLWPUBK-ea911ad04be9e1019db650231994ec1c-X -->
                            
                            <form method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay">
                                <input type="hidden" name="public_key" value="FLWPUBK_TEST-d815f55369b6636cb374bb2a733afbc7-X" />
                                <input type="hidden" name="customer[email]" value="support@truthbaptistabuja.org" />
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="customer[name]" class="form-control" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="customer[phone_number]" class="form-control" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <!-- here -->
                            <input type="hidden" name="currency" value="NGN" />
                            <input type="hidden" name="meta[token]" value="54" />
                            <!-- here -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="tx_ref" id="" class="form-control">
                                    <option value="" >What is your donation for?</option>
                                        <option value="tithe">Tithe</option>
                                        <option value="offering">Offering</option>
                                        <option value="building project">Building Project</option>
                                    </select>
                                    <!-- <input type="text" class="form-control" placeholder="What are you supporting for?"> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" min="100" name="amount" class="form-control" placeholder="Amount" required>
                                </div>
                            </div>
                            <input type="hidden" name="redirect_url" value="http://truthbaptistabuja.org" />
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Donate" class="btn btn-primary btn-modify" id="start-payment-button" width="100%">
                                </div>
                                <!-- <button type="submit" id="start-payment-button">Pay Now</button> -->
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fh5co-counter" class="fh5co-counters fh5co-light-grey">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center animate-box">
                        <p>We have a fun facts far far away, we are available in 10+ states in Nigeria</p>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                <span class="fh5co-counter js-counter" data-from="0" data-to="9452" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="fh5co-counter-label">Members</span>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                <span class="fh5co-counter js-counter" data-from="0" data-to="214" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="fh5co-counter-label">Ministries</span>
                            </div>
                            <div class="clearfix visible-sm-block visible-xs-block"></div>
                            <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                <span class="fh5co-counter js-counter" data-from="0" data-to="433" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="fh5co-counter-label">Classes</span>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                <span class="fh5co-counter js-counter" data-from="0" data-to="512" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="fh5co-counter-label">Activities</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END container-wrap -->
<?php
require_once 'footer.php';
?>