<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Signa_2017
 */
?>

<?php if (!is_page('digital-pulse-newsletter') && !is_page('work-with-us')) : ?>
<!-- Begin Mailchimp Signup Form -->
<div id="mc_embed_signup" class="f-content-row color-back">
    <form 
        action="https://signamarketing.us3.list-manage.com/subscribe/post?u=644450b213bbc56af2ecd8237&id=45ddb8e69b"
        method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank"
        novalidate>
        <div id="mc_embed_signup_scroll">

            <h2 class="stay-h2 form-heading">STAY AHEAD OF THE GAME</h2>
            <p>Subscribe to the Digital Pulse Newsletter!</p>
            <div class="mc-form-element-wrapper">
                <div class="mc-field-group">
                    <label for="mce-EMAIL">Email Address </label>
                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email">
                </div>
                <div class="mc-field-group">
                    <label for="mce-FNAME">First Name </label>
                    <input type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="Name">
                </div>
                <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                </div>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                        name="b_644450b213bbc56af2ecd8237_45ddb8e69b" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="I want the Latest Insights" name="subscribe"
                        id="mc-embedded-subscribe" class="btn orange"></div>
            </div>
        </div>
    </form>
</div>
<?php endif; ?>

<!--End mc_embed_signup-->



</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-container">
        <div class="footer-wrapper">
            <div class="footer-content">
                <div class="footer-columns">

                    <div class="footer-column-1 footer-col-uni">
                        <div class="col-footer-container-1">
                            <h2>Connect With Us</h2>
                            
                                <p class="footer-address-phone-info">
									ADDRESS: <a class="white-text" style="cursor:pointer;" rel="nofollow" target="_block" href="https://g.page/SignaMarketing?share">112 N. Central Ave. 1st Floor, Phoenix, Arizona 85004</a>
								</p>
                                <p class="footer-address-phone-info">Tel: <a class="white-text" style="cursor:pointer;" href="tel:602-456-2906">(602) 456 - 2906</a></p>
                            
                            <div class="icon-fonts">

                                <!-- FACEBOOK -->
                                <a href="https://www.facebook.com/SignaMarketing/" target="_blank" rel="noopener">
                                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMjQsMzMuMzIzVjU0LjY3MWExLjMyMywxLjMyMywwLDAsMS0xLjMyMywxLjMyM0gxNi41NTlWNDYuNzA1aDMuMTE4bC40NjYtMy42MjFIMTYuNTU0VjQwLjc3YzAtMS4wNS4yODktMS43NjMsMS43OTUtMS43NjNoMS45MThWMzUuNzY2YTI1Ljc4NCwyNS43ODQsMCwwLDAtMi44LS4xNDVjLTIuNzY0LDAtNC42NjEsMS42ODgtNC42NjEsNC43ODl2Mi42NzNIOS42OHYzLjYyMWgzLjEyOVY1NkgxLjMyM0ExLjMyNiwxLjMyNiwwLDAsMSwwLDU0LjY3N1YzMy4zMjNBMS4zMjYsMS4zMjYsMCwwLDEsMS4zMjMsMzJIMjIuNjcxQTEuMzI3LDEuMzI3LDAsMCwxLDI0LDMzLjMyM1oiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgLTMyKSIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg=="
                                        alt="Facebook" class="padding-icons" aria-hidden="true">
                                </a>

                                <!-- TWITTER -->
                                <a href="https://twitter.com/SignaMarketing" target="_blank" rel="noopener">
                                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMjEuNDI5LDMySDIuNTcxQTIuNTcyLDIuNTcyLDAsMCwwLDAsMzQuNTcxVjUzLjQyOUEyLjU3MiwyLjU3MiwwLDAsMCwyLjU3MSw1NkgyMS40MjlBMi41NzIsMi41NzIsMCwwLDAsMjQsNTMuNDI5VjM0LjU3MUEyLjU3MiwyLjU3MiwwLDAsMCwyMS40MjksMzJabS0yLjYyLDguNTA3Yy4wMTEuMTUuMDExLjMwNS4wMTEuNDU1YTkuOTI4LDkuOTI4LDAsMCwxLTEwLDEwLDkuOTUsOS45NSwwLDAsMS01LjM5NS0xLjU3NSw3LjQsNy40LDAsMCwwLC44NDYuMDQzLDcuMDQ0LDcuMDQ0LDAsMCwwLDQuMzYxLTEuNSwzLjUxOCwzLjUxOCwwLDAsMS0zLjI4NC0yLjQzNywzLjc4NywzLjc4NywwLDAsMCwxLjU4Ni0uMDY0LDMuNTE0LDMuNTE0LDAsMCwxLTIuODEyLTMuNDV2LS4wNDNhMy41MTEsMy41MTEsMCwwLDAsMS41ODYuNDQ1LDMuNTA2LDMuNTA2LDAsMCwxLTEuNTY0LTIuOTI1LDMuNDcsMy40NywwLDAsMSwuNDc3LTEuNzczLDkuOTc2LDkuOTc2LDAsMCwwLDcuMjQzLDMuNjc1LDMuNTIxLDMuNTIxLDAsMCwxLDUuOTk1LTMuMjA5LDYuODg1LDYuODg1LDAsMCwwLDIuMjI5LS44NDYsMy41LDMuNSwwLDAsMS0xLjU0MywxLjkzNCw2Ljk5Miw2Ljk5MiwwLDAsMCwyLjAyNS0uNTQ2QTcuNCw3LjQsMCwwLDEsMTguODA5LDQwLjUwN1oiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgLTMyKSIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg=="
                                        alt="Twitter" class="padding-icons" aria-hidden="true">
                                </a>

                                <!-- INSTAGRAM -->
                                <a href="https://www.instagram.com/signamarketing/" target="_blank" rel="noopener">
                                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTEuOTI4LDM3LjY3MmE2LjE1Myw2LjE1MywwLDEsMCw2LjE1Miw2LjE1M0E2LjE0Myw2LjE0MywwLDAsMCwxMS45MjgsMzcuNjcyWm0wLDEwLjE1NGE0LDQsMCwxLDEsNC00LDQuMDA3LDQuMDA3LDAsMCwxLTQsNFpNMTkuNzY2LDM3LjQyYTEuNDM1LDEuNDM1LDAsMSwxLTEuNDM1LTEuNDM1QTEuNDMyLDEuNDMyLDAsMCwxLDE5Ljc2NiwzNy40MlptNC4wNzUsMS40NTdBNy4xLDcuMSwwLDAsMCwyMS45LDMzLjg0OGE3LjE0Nyw3LjE0NywwLDAsMC01LjAyOC0xLjkzOWMtMS45ODEtLjExMi03LjkxOS0uMTEyLTkuOSwwYTcuMTM3LDcuMTM3LDAsMCwwLTUuMDI4LDEuOTMzQTcuMTI3LDcuMTI3LDAsMCwwLC4wMDksMzguODcxYy0uMTEyLDEuOTgxLS4xMTIsNy45MjEsMCw5LjlBNy4xLDcuMSwwLDAsMCwxLjk0OCw1My44YTcuMTU2LDcuMTU2LDAsMCwwLDUuMDI4LDEuOTM5YzEuOTgxLjExMiw3LjkxOS4xMTIsOS45LDBBNy4xLDcuMSwwLDAsMCwyMS45LDUzLjhhNy4xNSw3LjE1LDAsMCwwLDEuOTM4LTUuMDI5Yy4xMTItMS45ODEuMTEyLTcuOTE1LDAtOS45Wk0yMS4yODEsNTAuOUE0LjA1LDQuMDUsMCwwLDEsMTksNTMuMTgxYy0xLjU3OS42MjctNS4zMjcuNDgyLTcuMDczLjQ4MnMtNS41LjEzOS03LjA3My0uNDgyQTQuMDUsNC4wNSwwLDAsMSwyLjU3NCw1MC45Yy0uNjI2LTEuNTgtLjQ4Mi01LjMyOS0uNDgyLTcuMDc0cy0uMTM5LTUuNS40ODItNy4wNzRhNC4wNSw0LjA1LDAsMCwxLDIuMjgxLTIuMjgxYzEuNTc5LS42MjcsNS4zMjctLjQ4Miw3LjA3My0uNDgyczUuNS0uMTM5LDcuMDczLjQ4MmE0LjA1LDQuMDUsMCwwLDEsMi4yODEsMi4yODFjLjYyNiwxLjU4LjQ4Miw1LjMyOS40ODIsNy4wNzRTMjEuOTA4LDQ5LjMyNSwyMS4yODEsNTAuOVoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAuMDc1IC0zMS44MjUpIiBmaWxsPSIjZmZmIi8+PC9zdmc+"
                                        alt="Instagram" class="padding-icons" aria-hidden="true">
                                </a>

                                <!-- SNAPCHAT -->
                                <a href="https://www.snapchat.com/add/signamarketing" target="_blank" rel="noopener">
                                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMjEuNDI5LDMySDIuNTcxQTIuNTcyLDIuNTcyLDAsMCwwLDAsMzQuNTcxVjUzLjQyOUEyLjU3MiwyLjU3MiwwLDAsMCwyLjU3MSw1NkgyMS40MjlBMi41NzIsMi41NzIsMCwwLDAsMjQsNTMuNDI5VjM0LjU3MUEyLjU3MiwyLjU3MiwwLDAsMCwyMS40MjksMzJaTTIxLjA4LDQ4Ljg3Yy0uMTg3LjQzNC0uOTcuNzUtMi40Ljk3NWE2LjU4Myw2LjU4MywwLDAsMC0uMjMuODUyLjQxMy40MTMsMCwwLDEtLjQzNC4zMTZoLS4wMTFjLS4zMzIsMC0uNjg2LS4xNTUtMS4zODItLjE1NWEyLjgxNiwyLjgxNiwwLDAsMC0yLC43MzQsNCw0LDAsMCwxLTIuNjM2Ljk3NSw0LjA4Nyw0LjA4NywwLDAsMS0yLjYtLjk3NSwyLjgyNSwyLjgyNSwwLDAsMC0yLS43MzRBMTMuNjU2LDEzLjY1NiwwLDAsMCw2LDUxLjAyM2EuNDI1LjQyNSwwLDAsMS0uNDQ1LS4zMjEsNi43MjUsNi43MjUsMCwwLDAtLjIzLS44NTdjLS43MzktLjExMi0yLjQtLjQtMi40MzgtMS4xNDZhLjM3OS4zNzksMCwwLDEsLjMxNi0uNCw1LjM2NSw1LjM2NSwwLDAsMCwzLjY0My0zLjA1OWMwLS4wMDUuMDA1LS4wMTEuMDExLS4wMTZhLjguOCwwLDAsMCwuMDg2LS42N2MtLjE4Mi0uNDIzLS45NTktLjU3My0xLjI4Ni0uNzA3LS44NDYtLjMzMi0uOTY0LS43MTgtLjkxMS0uOThhLjkxNy45MTcsMCwwLDEsMS4xNzMtLjU1MiwyLjAxOSwyLjAxOSwwLDAsMCwuODQxLjIyNS43NTEuNzUxLDAsMCwwLC4zNTQtLjA3NWMtLjA3NS0xLjI4LS4yNTItMy4xMDcuMi00LjEzYTQuODY1LDQuODY1LDAsMCwxLDQuNTA1LTIuOTA5bC4zNTktLjAwNUE0LjgyMiw0LjgyMiwwLDAsMSwxNi43LDM4LjMzMmMuNDU1LDEuMDIzLjI3OSwyLjg0NS4yLDQuMTNhLjY3NC42NzQsMCwwLDAsLjMwNS4wNzUsMi4xMTQsMi4xMTQsMCwwLDAsLjc4OC0uMjI1Ljk3OS45NzksMCwwLDEsLjcyOSwwLC43NDUuNzQ1LDAsMCwxLC41NTcuNjM4Yy4wMDUuMzQ4LS4zMDUuNjQ4LS45MjEuODg5LS4wNzUuMDMyLS4xNjYuMDU5LS4yNjIuMDkxLS4zNDguMTEyLS44NzkuMjc5LTEuMDE4LjYxNmEuODIyLjgyMiwwLDAsMCwuMDg2LjY3Yy4wMDUuMDA1LjAwNS4wMTEuMDExLjAxNmE1LjM2NSw1LjM2NSwwLDAsMCwzLjY0MywzLjA1OS40MTEuNDExLDAsMCwxLC4yNjIuNTc5WiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCAtMzIpIiBmaWxsPSIjZmZmIi8+PC9zdmc+"
                                        alt="Snapchat" class="padding-icons" aria-hidden="true">
                                </a>

                                <!-- YOUTUBE -->
                                <a href="https://www.youtube.com/user/SignaMarketing" target="_blank" rel="noopener">
                                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTAuMDA3LDQxLjExM2w1LjEsMi45LTUuMSwyLjlaTTI0LDM0LjU3MVY1My40MjlBMi41NzIsMi41NzIsMCwwLDEsMjEuNDI5LDU2SDIuNTcxQTIuNTcyLDIuNTcyLDAsMCwxLDAsNTMuNDI5VjM0LjU3MUEyLjU3MiwyLjU3MiwwLDAsMSwyLjU3MSwzMkgyMS40MjlBMi41NzIsMi41NzIsMCwwLDEsMjQsMzQuNTcxWm0tMi4yNSw5LjQ0NWEyNS43NDIsMjUuNzQyLDAsMCwwLS40MDctNC43MjUsMi40NDUsMi40NDUsMCwwLDAtMS43MjUtMS43MzZDMTguMSwzNy4xNDMsMTIsMzcuMTQzLDEyLDM3LjE0M3MtNi4xLDAtNy42MTguNDEzYTIuNDQ1LDIuNDQ1LDAsMCwwLTEuNzI1LDEuNzM2LDI3LjYyMSwyNy42MjEsMCwwLDAsMCw5LjQ1QTIuNDEsMi40MSwwLDAsMCw0LjM4Miw1MC40NWMxLjUxNi40MDcsNy42MTguNDA3LDcuNjE4LjQwN3M2LjEsMCw3LjYxOC0uNDEzYTIuNDEsMi40MSwwLDAsMCwxLjcyNS0xLjcwOSwyNS42NjMsMjUuNjYzLDAsMCwwLC40MDctNC43MloiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgLTMyKSIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg=="
                                        alt="Youtube" class="padding-icons" aria-hidden="true">
                                </a>

                                <!-- LINKEDIN -->
                                <a href="https://www.linkedin.com/company/signa-marketing-solutions" target="_blank"
                                    rel="noopener">
                                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMjIuMjg2LDMySDEuNzA5QTEuNzIyLDEuNzIyLDAsMCwwLDAsMzMuNzNWNTQuMjdBMS43MjIsMS43MjIsMCwwLDAsMS43MDksNTZIMjIuMjg2QTEuNzI2LDEuNzI2LDAsMCwwLDI0LDU0LjI3VjMzLjczQTEuNzI2LDEuNzI2LDAsMCwwLDIyLjI4NiwzMlpNNy4yNTQsNTIuNTcxSDMuN1Y0MS4xMThINy4yNTlWNTIuNTcxWk01LjQ3NSwzOS41NTRhMi4wNjMsMi4wNjMsMCwxLDEsMi4wNjMtMi4wNjJBMi4wNjMsMi4wNjMsMCwwLDEsNS40NzUsMzkuNTU0Wk0yMC41ODcsNTIuNTcxSDE3LjAzVjQ3YzAtMS4zMjktLjAyNy0zLjAzNy0xLjg0OC0zLjAzNy0xLjg1NCwwLTIuMTM3LDEuNDQ2LTIuMTM3LDIuOTQxdjUuNjY4SDkuNDg4VjQxLjExOEgxMi45djEuNTY0aC4wNDhhMy43NDcsMy43NDcsMCwwLDEsMy4zNy0xLjg0OGMzLjYsMCw0LjI3LDIuMzczLDQuMjcsNS40NTlaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwIC0zMikiIGZpbGw9IiNmZmYiLz48L3N2Zz4="
                                        alt="Linkedin" class="padding-icons" aria-hidden="true">
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="footer-column-2 footer-col-uni">
                        
                            <h2>Core Capabilities</h2>
                            <a href="/digital-marketing/">Digital Marketing</a>
                            <a href="/web-development/">Web Development</a>
                            <a href="/creative/">Creative</a>
                            <a href="/media/">Media</a>
                            <a href="/small-business/">Small Business</a>
                        
                    </div>

                    <div class="footer-column-3 footer-col-uni">
                        
                            <h2>Core Values</h2>
                            <p class="footer-core-values">Passion - Ethics - Partnerships - Culture - Action - Creativity</p>
                            <p class="footer-mission">Our mission is to make each aspect of marketing a business easy to understand for our clients so they feel empowered to capture the attention of their target market.</p>
                    
                        <div id="footer-authority-logos">
                            <img class="b-lazy img-clutch"
                                data-src="<?php echo get_template_directory_uri(); ?>/images/clutch-footer-logo.png"
                                alt="Signa Marketing Clutch Badge" width="190" height="93" />
                            <img class="b-lazy img-bark" data-src="/wp-content/uploads/bark-badge.jpg"
                                alt="Signa Marketing Bark">
                            <img class="b-lazy img-bing" alt="Bing Partner" title="Bing"
                                data-src="/wp-content/uploads/2018/08/Bing_Partner_Badge_Teal-min.png" />
                        </div>
                    </div>

                    <div id="footer-second-navigation-menu">
                       
                            <a href="/contact-us/">Contact</a>
                            <a href="/careers/">Careers</a>
                            <a href="/case-studies/">Case Studies</a>
                            <a href="/what-we-do/">What We Do</a>
                            <a href="/blog/">Blog</a>
                    
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="site-info">
        <div class="footer-wrapper">
            <span class="text-center">&copy; <?php echo date("Y"); ?> Signa Marketing, LLC. All Rights Reserved |
                Strengthening the Connection Between Brand and Consumer</span>

            <span style="float:right;color:#fff;">
                <a href="/privacy-and-cookie-policy/" style="color:#fff;">Privacy Policy</a>
            </span>
        </div>
    </div><!-- .site-info -->

    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<!-- JS Lib -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>

<!-- bLazy -->
<script src="https://cdn.jsdelivr.net/blazy/latest/blazy.min.js/"></script>
<script>
    ;
    (function () {
        // Initialize
        var bLazy = new Blazy();
    })();
</script>

<?php wp_footer(); ?>



<?php if (is_page('13')) { // only google paid search page 
?>
<!-- Testing POPUP Form -->

<div class="form-popup pop-up-bg-overlay noshow" id="google-audit-form">
    <div class="pop-up-border">
        <div class="pop-up-content">
            <div class="pop-up-text">
                <button type="button" class=" cancel" onclick="closeForm()"><img
                        src="/wp-content/uploads/iconfinder_button_close.png" alt="close popup"></button>
                <h4>Get your free<br> Google ads audit</h4>
                <p>A Paid Media Specialist will audit your Google Ads account for free</p>
            </div>
            <?php gravity_form(21, false, false, false, '', false); ?>
        </div>
        <!-- Google Ads Audit form -->

    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", openForm);

    function openForm() {
        if (getCookie("pop_up_shown") != "1") {
            if (getCookie("pop_up_offer_accepted") != "1") {
                setTimeout(function () {
                    document.getElementById("google-audit-form").classList.remove("noshow");

                    document.cookie = "pop_up_shown=1; path=/; Max-Age=1209600; Secure"; // 14 days max
                }, 7000) // 5 seconds.
            }
        }
    }

    function closeForm() {
        document.getElementById("google-audit-form").classList.add("noshow");
    }

    function submitAndClose() {
        // closeForm();
        document.cookie = "pop_up_offer_accepted=1; path=/; Max-Age=30099699; Secure";
    }

    function getCookie(name) {
        let matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }
</script>
<!-- End POPUP Form -->

<?php
} ?>


<script>
    // Competitive Analysis card JS to create overlap illusion
    function setCardHeight() {
        // get element height and half it
        cardHeight = (document.getElementById("ca-cta-card").clientHeight) / 2;
        cardHeightString = cardHeight.toString() + 'px';
        console.log(cardHeightString);
        //Update Height & Margin bottom for overlap effect
        document.getElementById("ca-cta-card-container").style.height = cardHeightString;
        document.getElementById("ca-cta-card-container").style.marginBottom = cardHeightString;
    }

    window.addEventListener('DOMContentLoaded', (event) => {

        // Change text for the Submit Button on the Blue Work With Us Form.
        workWithUsButton = document.getElementById("gform_submit_button_3");
        if (workWithUsButton != null) {
            workWithUsButton.value = "Let's Talk";
            workWithUsButton.classList = "btn orange";
        }
        competitiveAnalysisButton = document.getElementById("gform_submit_button_13");
        if (competitiveAnalysisButton != null) {
            competitiveAnalysisButton.classList = "btn orange";
        }
        competitiveAnalysisButton = document.getElementById("gform_submit_button_2");
        if (competitiveAnalysisButton != null) {
            competitiveAnalysisButton.classList = "btn orange";
        }
        competitiveAnalysisButton = document.getElementById("gform_submit_button_8");
        if (competitiveAnalysisButton != null) {
            competitiveAnalysisButton.classList = "btn orange";
        }

        setTimeout(function () {
            setCardHeight()
        }, 1600);

    });

    // document.addEventListener("DOMContentLoaded", setCardHeight);
    // set card height after 1sec when html loads
    // setTimeout(function(){
    //     setCardHeight()
    // }, 1000);


    window.addEventListener('resize', function (event) {
        // Update styles on window resize
        setCardHeight();
    });
</script>
</body>

</html>