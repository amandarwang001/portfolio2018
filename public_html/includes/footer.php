<div class="container-fluid">
    <div class="row text-center equal">
        <div class="col-lg-3 contact">
            <h3>CONTACT US</h3>

            <p><strong itemprop="name">DIJATEK</strong>
                <br><span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="streetAddress">1750 W Broadway St
                <br>Suite 106</span>
                <span itemprop="addressLocality">Orlando</span>,
                <span itemprop="addressRegion">FL</span>
                <span itemprop="postalCode">32765</span>
                </span><br/>
                <span itemprop="telephone">(555)-555-5555</span>
                <br/><a href="mailto: info@dijatek.com" class="footerlink">
                    <span itemprop="email">info@dijatek.com</span></a>
            </p>
        </div>
        <div class="col-lg-6 about pb-4">
            <h3>ABOUT US</h3>
            <p>Some text.</p>
        </div>
        <div class="col-lg-3 follow">
            <h3 class="pb-4">Links</h3>
            <div class="row pb-4">
                <div class="col-3"><a href="https://www.facebook.com/" class="btn-social btn-outline" target="_blank"><img src="<?= IMAGE_URL ?>facebook-icon.png" class="img-responsive socialicon" alt="Facebook"></a></div>
                <div class="col-3"><a href="https://plus.google.com/" class="btn-social btn-outline" target="_blank"><img src="<?= IMAGE_URL ?>google-icon.png" class="img-responsive socialicon" alt="Google Plus"></a></div>
                <div class="col-3"><a href="https://www.linkedin.com/" class="btn-social btn-outline" target="_blank"><img src="<?= IMAGE_URL ?>linked-in-icon.png" class="img-responsive socialicon" alt="Link In"></a></div>
                <div class="col-3"><a href="https://twitter.com/" class="btn-social btn-outline" target="_blank"><img src="<?= IMAGE_URL ?>twitter-icon.png" class="img-responsive socialicon" alt="Twitter"></a></div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="row">
            <div class="col-md-12 tagline">
                <br/><br/>
                <p> © <? echo(date('Y')); ?> &#183 DIJATEK L.L.C &#183 All Rights Reserved &#183</p>
            </div>
        </div>
    </div>
</div>

<!--CDN for bootstrap v4 and requirements-->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script><!--CDN for jquery and popper.js (required for bootstrap v4)-->



<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>-->
<!--    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>-->
<!--    <script src="--><?//= JS_URL ?><!--bootstrap.min.js"></script>-->
    <script src="<?= JS_URL ?>main.js"></script>
    </body>