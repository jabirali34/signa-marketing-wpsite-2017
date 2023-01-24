<!-- Template Name: Landing Page -->


<!DOCTYPE html>
<html>
    <head>
        <title>HTML5 sample page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap-grid.css" crossorigin="anonymous">
        <link rel="stylesheet" href="/landing-page-template-style.css" crossorigin="anonymous"><!-- SIGNA: Make sure this path is correct IT WILL CHANGE -->

    </head>
<body>

<header id="plain-header" class="header-background container-fluid">

        <div class="row">
            <div class="col-sm-6"><img class="header-logo" alt="" title="" src="/wp-content/uploads/logo@2x.png"></div>
            <div class="col-sm-6 header-phone-number"><a href="tel://6235829760" id="header-phone-number-text"><span>Call Us Today</span> <strong>(662) 574-0392</strong></a></div>
        </div>

</header>

<div class="full-width-banner-container">
    <div class="full-width-banner-row">
        <h1 class="full-width-banner-heading">Title Goes Here</h1>
        <div class="full-width-banner-subheading-box"><!-- mainly for positioning & constricting width of text -->
            <p class="full-width-banner-subheading-text">Lorem Ipsum Dolor</p>
        </div>
    </div>
</div>
<!-- Column with iocon above -->
<div class="container-fluid">
    <div class="container">
        <div class="row services ">

            <div class="col-sm-4 service-column">
                <i class="fa fa-university icon" aria-hidden="true"></i>
                <h3 >Lorem Ipsum</h3>
                <p class="service-column-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>

            <div class="col-sm-4 service-column">
                <i class="fa fa-university icon" aria-hidden="true"></i>
                <h3>Lorem Ipsum</h3>
                <p class="service-column-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>

            <div class="col-sm-4 service-column">
                <i class="fa fa-university icon" aria-hidden="true"></i>
                <h3>Lorem Ipsum</h3>
                <p class="service-column-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>

        </div>
    </div>
</div>
<!-- Picture on left row -->


<!-- Picture on right row -->

<!-- Text & CTA -->
<div class="container-fluid" id="cta-1-row">
    <div class="container">
        <div class="row">
            <div class="cta-1-col-1">
                <p class="cta-text">Ready to get started?</p>
            </div>
            <div class="cta-1-col-2">
                <a class="cta-btn" href="/contact-us/">Contact Us Now</a>
            </div>
        </div>
    </div>
</div>
<script src="https://use.fontawesome.com/52dda3483b.js"></script>
</body>
</html>
<style>
/* TYPOGRPAHY & ESSENTIAL ELEMENTS */
body {margin:0px;}

/*HEADER STYLES*/
#plain-header {
    background: rgb(30, 66, 93);
    z-index: 9999;
/*    position: fixed;*/
    width: 100%;
    display: block;
    padding: 10px 40px;
}

.header-logo {
    margin: 0px;
    display: inline-block;
    /* float: left; */
    width: 197px;
}
.header-phone-number {
    display: inline-block;
    text-align: right;
}
a#header-phone-number-text {
    display: inline-block;
    color: #fff;
    text-decoration: none;
    font-size: 32px;
    transition: all .3s;
}
#header-phone-number-text span {color: #fff;}

/*FULL WIDTH BANNER & TEXT OVERLAY*/
.no-webp .full-width-banner-container {
    background: url(/wp-content/uploads/home-banner-image@2x.jpg) no-repeat top center;
    background-size: cover;
    width: 100%;
    padding-top: 163px;/*Padding Top specifically used for headers that overlap the background & require spacing*/
}
.webp .full-width-banner-container {
    background: url(/wp-content/themes/signa-2017/images/home-banner-image@2x.webp) no-repeat top center;
    background-size: cover;
    width: 100%;
    padding-top: 163px;/*Padding Top specifically used for headers that overlap the background & require spacing*/
}
.full-width-banner-row {
    padding: 80px 0px 80px 0px;
    text-align: center;
}
.full-width-banner-heading {
    text-align: center;
    margin: 0 auto;
    font-weight: bold;
    font-size: 60px;
    width: 100%;
    color: #fff;
    text-transform: uppercase;
}
.full-width-banner-subheading-box {
    margin-top: 40px;
}
p.full-width-banner-subheading-text {
    color: #fff;
}
.landing-banner-red-tx {
    background-color: #d63623;
    color: white;
    font-weight: lighter;
    font-size: 1.8rem;
    text-align: center;
    padding: 10px;
    margin-bottom: 0px;
    width: 520px;
    margin: auto;
}
/* SERVICE COLUMN WITH PICTURE ABOVE THE COLUMN*/
.row.services {  padding: 40px 0px;}
.service-column {text-align:center; margin-bottom: 20px; padding: 0px 7px;}
.service-column .icon {
    color: #a0a0a0;
    text-align: center; 
    width: 100%;
    text-align: center;
    font-size: 100px;
    color: #a0a0a0;
    margin-bottom: 20px;
}
.service-column h3 {
    font-weight: normal;
    font-size: 1.875rem;
    line-height: 1.2em;
    margin-bottom: .875rem;
    margin-top: .875rem;
}
.service-column p {
    line-height: 1.5em;
    margin-bottom: .875rem;
    font-size: 1.05rem;
    font-weight: 300;
    color: #4e5658;
}
/*CTA ROW */
#cta-1-row {
    padding: 70px 0px;
    text-align:center;
}
.cta-1-col-1 {
    padding: 0px 40px 0px 0px;
    width: auto;
    display: block;
}
#cta-1-row .cta-text {
    font-size: 56px;
    color: #1c2325;
    margin: 0px;
}
.cta-1-col-2 {
    padding: 0px;
    width: auto;
    display: block;
    margin-left: auto;
}
#cta-1-row .cta-btn{
    color: #334144;
    border: #334144 solid 3px;
    display: inline-block;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 100;
}
#cta-1-row .cta-btn:hover {
    color: #fff;
    background-color: #334144;
}
</style>