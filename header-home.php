<?php
  /**
   * The header for our theme.
   *
   * This is the template that displays all of the <head> section and everything up until <div id="content">
   *
   * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
   *
   * @package Signa_2017
   */
  
  ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<link rel="dns-prefetch" href="https://www.googletagmanager.com/">
<link rel="preconnect" href="https://www.googletagmanager.com/" crossorigin>
<link rel="dns-prefetch" href="https://www.google-analytics.com/">
<link rel="preconnect" href="https://www.google-analytics.com/" crossorigin>
  <!-- Google Tag Manager -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PB4SZ9');
  </script>
  <!-- End Google Tag Manager -->
  
<style>
@font-face{font-family:"Poppins";font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLDz8Z1xlEA.ttf) format("truetype")}@font-face{font-family:"Poppins";font-style:normal;font-weight:500;src:url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLGT9Z1xlEA.ttf) format("truetype")}@font-face{font-family:"Poppins";font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLCz7Z1xlEA.ttf) format("truetype")}@font-face{font-family:"Raleway";font-style:normal;font-weight:100;src:url(https://fonts.gstatic.com/s/raleway/v18/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvao7CIPrQ.ttf) format("truetype")}@font-face{font-family:"Raleway";font-style:normal;font-weight:600;src:url(https://fonts.gstatic.com/s/raleway/v18/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVsEpbCIPrQ.ttf) format("truetype")}*{-webkit-overflow-scrolling:touch}html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;width:100%}body{margin:0;width:100%;overflow:visible}article,aside,details,figcaption,figure,footer,header,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}dfn{font-style:italic}h1{font-size:45px;text-transform:uppercase;margin:0.67em 0}h2{font-size:36px;color:#1e425d;margin-top:0px;line-height:1.2;margin-bottom:0.3em;text-transform:uppercase}h3{font-size:30px;color:#404040}h4{font-size:21px;color:#404040}mark{background:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{-webkit-box-sizing:content-box;box-sizing:content-box;height:0}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace, monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type="checkbox"],input[type="radio"]{-webkit-box-sizing:border-box;box-sizing:border-box;padding:0}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}legend{border:0;padding:0}textarea{overflow:auto}optgroup{font-weight:bold}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}body,button,input,select,textarea{color:#404040;font-family:'Poppins', sans-serif;font-size:16px;font-size:1.15rem;line-height:1.5}h1,h2,h3,h4,h5,h6{clear:both}h3{font-size:30px;line-height:1.2}p{margin-bottom:1.5em;color:#1e425d;color:inherit}a{text-decoration:underline;font-weight:500}a:hover{text-decoration:underline}dfn,cite,em,i{font-style:italic}blockquote{margin:0 1.5em}address{margin:0 0 1.5em}pre{background:#eee;font-family:"Courier 10 Pitch", Courier, monospace;font-size:15px;font-size:0.9375rem;line-height:1.6;margin-bottom:1.6em;max-width:100%;overflow:auto;padding:1.6em}code,kbd,tt,var{font-family:Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace;font-size:15px;font-size:0.9375rem}abbr,acronym{border-bottom:1px dotted #666;cursor:help}mark,ins{background:#fff9c0;text-decoration:none}big{font-size:125%}html{-webkit-box-sizing:border-box;box-sizing:border-box}*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit}body{background:#fff}blockquote:before,blockquote:after,q:before,q:after{content:""}blockquote,q{quotes:"" ""}hr{background-color:#ccc;border:0;height:1px;margin-bottom:1.5em}ul,ol{margin:0 0 1.5em 3em;margin:0px}ul{list-style:disc}ol{list-style:decimal}li>ul,li>ol{margin-bottom:0;margin-left:1.5em}dt{font-weight:bold}dd{margin:0 1.5em 1.5em}img{height:auto;max-width:100%}figure{margin:1em 0}table{margin:0 0 1.5em;width:100%}@media only screen and (max-width: 700px){h2{font-size:35px}}@media only screen and (max-width: 500px){h2{font-size:25px}h3{font-size:24px}body,button,input,select,textarea{font-size:19px}}input[type="text"],input[type="email"],input[type="url"],input[type="password"],input[type="search"],input[type="number"],input[type="tel"],input[type="range"],input[type="date"],input[type="month"],input[type="week"],input[type="time"],input[type="datetime"],input[type="datetime-local"],input[type="color"],textarea{color:#666;border:1px solid #ccc;border-radius:3px;padding:3px}select{border:1px solid #ccc}input[type="text"]:focus,input[type="email"]:focus,input[type="url"]:focus,input[type="password"]:focus,input[type="search"]:focus,input[type="number"]:focus,input[type="tel"]:focus,input[type="range"]:focus,input[type="date"]:focus,input[type="month"]:focus,input[type="week"]:focus,input[type="time"]:focus,input[type="datetime"]:focus,input[type="datetime-local"]:focus,input[type="color"]:focus,textarea:focus{color:#111}textarea{width:100%}.screen-reader-text{clip:rect(1px, 1px, 1px, 1px);position:absolute !important;height:1px;width:1px;overflow:hidden}.screen-reader-text:focus{background-color:#f1f1f1;border-radius:3px;-webkit-box-shadow:0 0 2px 2px rgba(0,0,0,0.6);box-shadow:0 0 2px 2px rgba(0,0,0,0.6);clip:auto !important;color:#21759b;display:block;font-size:14px;font-size:0.875rem;font-weight:bold;height:auto;left:5px;line-height:normal;padding:15px 23px 14px;text-decoration:none;top:5px;width:auto;z-index:100000}#content[tabindex="-1"]:focus{outline:0}::-moz-selection{background-color:#3333ff !important;color:white}::selection{background-color:#3333ff !important;color:white}.hp-logo-col-container{display:inline-block;width:20%}.logo{width:211px;height:auto}.main-navigation{float:right;position:relative;top:27px;display:inline-block;width:80%;text-align:right}.main-navigation ul{display:none;list-style:none;margin:0;padding-left:0}.main-navigation li{position:relative;padding:0 18px;display:inline-block}.main-navigation a{display:block;text-decoration:none;color:#ffffff;font-weight:500;text-transform:uppercase}.main-navigation ul ul{-webkit-box-shadow:0 3px 3px rgba(0,0,0,0.2);box-shadow:0 3px 3px rgba(0,0,0,0.2);float:left;position:absolute;top:1.5em;left:-999em;z-index:99999}.main-navigation ul ul ul{left:-999em;top:0}.main-navigation ul ul a{width:200px}.main-navigation ul li:hover>ul,.main-navigation ul li.focus>ul{left:auto}.main-navigation ul ul li:hover>ul,.main-navigation ul ul li.focus>ul{left:100%}#primary-menu li:first-child{padding-left:0px}#primary-menu li:last-child{padding-right:0px}.menu-toggle,.main-navigation.toggled ul{display:block}ul#primary-menu{width:100%}button.menu-toggle:hover,button.menu-toggle:focus,button.menu-toggle:active{-webkit-box-shadow:none;box-shadow:none;border:none;outline:none}button.menu-toggle.menu.button{text-align:right;font-size:30px;background-color:transparent;border:none;outline:none;margin-top:25px;margin-right:auto;display:block;padding:20px;display:inline-block;padding-right:4%}.navbar-default{padding:16px 0px 16px 0px}.menu-toggle i.fa.fa-bars{font-size:30px;color:#fff;padding-top:7px}.main-navigation{width:auto;left:0;top:0px}.main-navigation li{position:relative;padding:0px;display:block;width:100%;text-align:center;background-color:#3878a8;font-size:1.5rem}.main-navigation a{padding:5px 0px}.main-navigation li a:hover{color:#3878a8;background-color:#fff}li#menu-item-80 a{background-color:blue;background:none;color:#ffffff;padding:5px 18px;margin-top:0px}li#menu-item-80 a:hover{background-color:#fff;color:#3878a8}#header{position:fixed;width:100%;height:auto;z-index:99;line-height:1.2}#header .container{padding:0px;height:inherit;padding:16px 4% 16px 4%;margin:0 auto;clear:both}nav.menu{width:auto;position:relative;left:0;float:right;height:auto;padding:0 0 0 44px}.menu-main-menu-container{display:inline-block;padding:48px 29px 25px 0}#header .hp-logo-col-container{position:relative;top:auto;left:auto;width:auto;float:left;padding:20px 0;cursor:pointer}span.open-menu-btn{font-size:30px;cursor:pointer;color:#fff;display:none}ul#primary-menu{margin:0;padding:0;list-style-type:none}#header .menu-item{font-weight:500;float:left;margin-right:29px}#header .menu-item:last-child{margin-right:0px}#header .menu-item a{color:#ffffff;font-weight:600;text-transform:uppercase;text-decoration:none}#header .menu-item-80 a{background-color:#3878a8;color:#ffffff;padding:14px 20px;margin-top:-13px;-webkit-transition:all 0.3s;transition:all 0.3s}#close-menu-btn{color:white;font-size:47px;padding:0px;cursor:pointer;display:none}span#open-menu-btn{color:white;font-size:40px;padding-top:8px}@media (min-width: 37.5em){.main-navigation ul{display:block}}@media (max-width: 1180px){.menu-toggle{display:none}.menu-main-menu-container{width:100%;position:fixed;left:0;top:142px;padding-right:0px}.hp-logo-col-container{padding-left:4%;width:auto}.logo{width:148px}.main-navigation ul{display:none}.menu-toggle,.main-navigation.toggled ul{display:inline-block;text-align:right;background:none;border:none}span.open-menu-btn{display:block}#header ul#primary-menu{background-color:transparent;text-align:center;display:none}#header .menu-item{width:100%;font-size:1.5rem;padding:12px 0 12px}#header .menu-item-80 a{background-color:transparent;color:#ffffff;padding:0px;margin-top:0}#header .menu-item-80 a:hover{background-color:transparent}nav.menu{padding:0;padding-top:17px}#header{background-color:#1e425d;width:100%;height:94px}#open-menu-btn{display:block}#close-menu-btn{display:none}#primary-menu{display:none}#header.open{height:100%;background-color:rgba(30,66,93,0.95) !important;-webkit-transition:height 0.6s, background-color 0.3s;transition:height 0.6s, background-color 0.3s}#open-menu-btn.open{display:none}#close-menu-btn.open{display:block}#primary-menu.open{display:block}#header ul#primary-menu.open{display:block;opacity:1}#header ul#primary-menu{display:none;opacity:0;-webkit-transition:opacity 0.3s;transition:opacity 0.3s}#header.container{padding:0}}.progress-container{width:100%;height:5px}.progress-bar{height:5px;background:#3878a8;width:0%;position:absolute;bottom:-5px;left:0px;right:0px}@media (min-width: 1180px){#menu-item-4753,#menu-item-4754,.menu-item-5293,.menu-item-5292,.menu-item-5270,.menu-item-5268{display:none}}@media (max-height: 667px){#primary-menu li{padding:10px !important}#header .menu-item{font-size:22px}.menu-main-menu-container{top:190px;padding-top:0}}header{max-width:1400px;margin:auto}.navbar{padding:0px 4% 0px 4%;position:fixed;z-index:1030;width:100%;border-width:0 0 2px;border-radius:0;-webkit-transition:all .3s;transition:all .3s;min-height:85px;margin-bottom:0}.scrolled #header{background:#1e425d}h1.heading{font-weight:500;text-transform:uppercase;font-size:50px;text-align:center;color:#1e425d;margin-bottom:-20px}.heading span{font-weight:600}.navbar-default{padding:16px 4% 16px 4%;position:fixed;z-index:1030;width:100%;border-width:0 0 2px;border-radius:0;min-height:85px;margin-bottom:0}.banner-default{margin-top:200px}.open-secondary-menu-btn{color:white;font-size:40px;float:right;padding-top:37px;cursor:pointer;-webkit-transition:-webkit-transform .6s;transition:-webkit-transform .6s;transition:transform .6s;transition:transform .6s, -webkit-transform .6s;-webkit-transform-origin:56% 70% 28px;transform-origin:56% 70% 28px}#open-secondary-menu-btn.open{-webkit-transform:rotate(90deg);transform:rotate(90deg);-webkit-transform-origin:56% 70% 28px;transform-origin:56% 70% 28px}#services-menu{position:absolute;right:-328px;top:120px;background-color:#3879a9;width:328px;-webkit-transition:right .6s;transition:right .6s;display:block}#services-menu.open{right:0px}#services-menu ul{list-style:none}ul#secondary-menu{margin:0px;padding:0}#services-menu .menu-item{margin:0px;clear:both;width:100%}#services-menu .menu-item a{display:block;width:100%;padding:15px 0 15px 25px;font-size:16px;border-bottom:1px solid #6c9bbd}#services-menu .menu-item a:hover{background-color:#6c9bbd}li#menu-item-80 a{background-color:#3878a8;color:#ffffff;padding:14px 20px;margin-top:-13px}#header .menu-item:nth-child(5){margin-right:0}@media (max-width: 1180px){#services-menu{display:none}#open-secondary-menu-btn{display:none}}#new-case-studies-wrapper{background-position:center;background-size:cover;background-repeat:no-repeat;text-align:center}#new-case-studies-wrapper .case-study-container{padding:80px 80px 80px}@media (max-width: 460px){#new-case-studies-wrapper .case-study-container{padding:60px 20px 60px}}#new-case-studies-wrapper img{margin:0px;max-width:100%;width:370px;display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;padding:15px}@media (max-width: 1310px){#new-case-studies-wrapper img{width:290px}}@media (max-width: 1068px){#new-case-studies-wrapper img{width:250px}}#new-case-studies-wrapper h2{margin-bottom:60px;font-size:55px}@media (max-width: 560px){#new-case-studies-wrapper h2{font-size:43px;margin-bottom:40px}}@media (max-width: 380px){#new-case-studies-wrapper h2{font-size:1.895em}}#new-case-studies-wrapper a.home-cta-case-study{margin-top:60px}@media (max-width: 450px){#new-case-studies-wrapper a.home-cta-case-study{padding:17px 40px}}#new-case-studies-wrapper a.home-cta-case-study:focus{background-color:#fff}.no-webp #new-case-studies-wrapper{background-image:url(/wp-content/themes/signa-2017/images/new-case-studies-home-bg.jpg)}.webp #new-case-studies-wrapper{background-image:url(/wp-content/themes/signa-2017/images/webp/new-case-studies-home-bg.webp)}@media (max-width: 599px){.case-study-container h2{font-size:38px !important}.case-study-container{padding-left:10px !important;padding-right:10px !important}}.bg-ltblue{background:#3878a8;color:#fff}.bg-ltblue h2,.bg-ltblue p,.bg-ltblue h4,.bg-ltblue h3{color:#fff}.page{margin-bottom:0px}.f-content-row{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-pack:distribute;justify-content:space-around;width:100%}.f-content-container{padding:60px 0px;display:-webkit-box;display:-ms-flexbox;display:flex;display:block\9;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;margin-left:10%;margin-right:10%;margin:auto;max-width:1400px;width:80%;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}@media (min-width: 768px){.f-content-container{padding:80px 0px}}@media (max-width: 500px){.f-content-container{width:90%}}.container-fluid{margin-right:auto;margin-left:auto}.home-services{width:100%;height:auto;display:inline-block}.home-service a{text-align:center;display:block;position:relative;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%);font-size:22px;color:#ffffff;text-decoration:none;font-weight:100;font-family:'Poppins', sans-serif}.home-service.col-1{width:33.333%;float:left;height:291px;overflow:hidden}.home-service.col-2{width:33.333%;float:left;height:291px;overflow:hidden}.home-service.col-3{width:33.333%;float:right;height:291px;overflow:hidden}.home-service.col-1 .home-service-img{background-size:cover;height:291px;-webkit-transition:all .8s;transition:all .8s}.home-service.col-2 .home-service-img{background-size:cover;height:291px;-webkit-transition:all .8s;transition:all .8s}.home-service.col-3 .home-service-img{background-size:cover;height:291px;-webkit-transition:all .8s;transition:all .8s}.home-service-img:hover{-webkit-transform:scale(1.05);transform:scale(1.05)}.home-case-studies{font-family:'Poppins', sans-serif;font-weight:300;margin-bottom:120px}.home-case-studies h2{font-style:normal;font-size:2.7rem;text-align:center}.home-case-study.col-1{width:30%;float:left;height:auto;margin-right:5%}.home-case-study.col-2{width:30%;float:left;height:auto;margin-right:4%}.home-case-study.col-3{width:30%;float:right;height:auto}.mySlides{display:none}.slideshow-container{max-width:100%;position:relative;margin:auto;padding:80px 10% 80px;width:100%;overflow:hidden;background-color:#fff;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;height:auto}.prev,.next{cursor:pointer;position:absolute;top:50%;width:auto;padding:16px;margin-top:-22px;color:white;font-weight:bold;font-size:18px;-webkit-transition:0.6s ease;transition:0.6s ease;border-radius:0 3px 3px 0;text-decoration:none}.dot{height:15px;width:15px;margin:0 2px;background-color:#bbb;border-radius:50%;display:inline-block;-webkit-transition:background-color 0.6s ease;transition:background-color 0.6s ease}.active{background-color:#717171}.fade{-webkit-animation-name:fade;-webkit-animation-duration:2s;animation-name:fade;animation-duration:2s}@-webkit-keyframes fade{from{opacity:.4}to{opacity:1}}@keyframes fade{from{opacity:.4}to{opacity:1}}.text{font-weight:300;padding:8px 0px;position:relative;bottom:0;width:800px;height:100%;margin-left:calc(50% - 400px);text-align:center}.fa-quote-left{font-size:15px;line-height:1;margin-right:4px}.fa-quote-right{font-size:15px;line-height:1;margin-left:8px}@media (max-width: 840px){.text{width:100%;height:100%;margin-left:0;padding:8px 0px}}.text>h2+p::before{content:"";margin-right:4px;background-image:url("/wp-content/themes/signa-2017/images/icons/quote-left-solid.svg");background-size:15px;padding-right:20px;padding-top:2px;background-position:center;background-repeat:no-repeat}.text>h2+p::after{content:"";margin-left:4px;background-image:url("/wp-content/themes/signa-2017/images/icons/quote-right-solid.svg");background-size:15px;padding-left:20px;padding-top:2px;background-position:center;background-repeat:no-repeat}h2.hp-case-study{font-weight:100;font-weight:700;color:#383838}.case-studies-span{font-size:16px;color:#383838;font-weight:800}.case-studies-p{font-size:16px;color:#383838}@media (max-width: 767px){.home-service.col-1,.home-service.col-2,.home-service.col-3{width:100%;height:220px}.home-service a{font-size:1.8rem;top:calc(50% - 33px)}.home-case-study.col-1,.home-case-study.col-2,.home-case-study.col-3{width:100%;text-align:center;margin:0}}@media (max-width: 700px){.case-studies-span{font-size:16px}.case-studies-p{font-size:14px}}@media (max-width: 1024px){.blog-half{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%}div#comments{width:80% !important;margin:0 auto}.blog-entry-meta{margin-bottom:50px}.blog-entry-title{font-size:32px;margin-bottom:50px}.blog-half:first-of-type{padding-right:0px}}.blog-entry-content h2{margin-top:1.5em}div#recent-posts-widgets{display:inline-block;width:100%;padding:50px 10%}@media (min-width: 768px){div#recent-posts-widgets{padding:60px 10%}}div#recent-posts{width:1400px;max-width:100%;margin:auto}.recent-post-thumbnail{float:left;width:33%;padding:0;text-align:center;margin:25px 0px}@media (min-width: 768px){.recent-post-thumbnail{padding:0 3%;margin:50px 0px}}a.recent-posts-title{font-size:18px;line-height:27px;letter-spacing:.065em;color:#38739e;font-weight:700;text-transform:uppercase;margin:0 auto;text-align:center;float:none;display:block;text-decoration:none;-webkit-transition:color .3s;transition:color .3s}.recent-posts-date{font-size:10px;letter-spacing:.1em;color:#7e8890;text-transform:uppercase;font-weight:700;margin-bottom:15px;margin-top:28px}.recent-post-thumbnail img{width:100%}[data-id="blog1"]{width:1400px;margin:auto;margin-top:75px}.blog-page-item-container li{float:left;width:33%;padding:0 10px;text-align:center;margin-bottom:100px;height:621px}.blog-page-item-container img{position:relative !important;width:100%;margin-bottom:8px}#blog-date-text{font-size:10px;letter-spacing:.1em;color:#7e8890;text-transform:uppercase;font-weight:700;text-align:center;margin-bottom:15px;margin-top:28px}@media (min-width: 1700px){.post-33-container{width:25%}}@media (max-width: 1200px){[data-id="blog1"]{width:90%}div#recent-posts{width:100%;margin:auto}}@media (max-width: 917px){.post-33-container{width:50%}}@media (max-width: 900px){.blog-page-item-container li{width:50%}.recent-post-thumbnail{width:100%}}@media only screen and (max-width: 840px){.blog-entry-content{width:80%}}@media only screen and (max-width: 767px){.blog-tabs{float:none;margin:auto;text-align:center;width:100%}.mobile-tabs{float:none;margin:auto;text-align:center;width:100%}.blog-tabs span{float:none}.blog-tabs a{float:none;display:inline-block;text-decoration:none}.blog-sidebar{float:none;text-align:center;width:100%}.search-form .search-submit{float:left;width:32px}.search-form .search-field{float:none;width:calc(100% - 32px);padding:0px}}.services-outer-wrapper{background-color:#F4F4F4}.services-outer-wrapper .f-content-container.f-col-50{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-ms-flex-wrap:wrap;flex-wrap:wrap}.services-outer-wrapper h2.service-title{font-size:30px;font-style:normal;font-weight:bold;line-height:120%;color:#404040;margin-bottom:25px}@media (max-width: 1142px){.services-outer-wrapper .f-content-container.f-col-50{-webkit-box-pack:center !important;-ms-flex-pack:center !important;justify-content:center !important;padding-top:65px;padding-bottom:65px}}.service-item{margin:0px;max-width:100%;width:300px;display:-webkit-inline-box;display:-ms-inline-flexbox;display:block;padding:5px 15px}@media (max-width: 1142px){.service-item{padding:20px 15px;text-align:center}}#ca-cta-card-container{position:relative;width:90%;margin:auto}@media (min-width: 500px){#ca-cta-card-container{width:1170px;max-width:90%}}#ca-cta-card{background:#ffffff;-webkit-box-shadow:0px 4px 9px rgba(12,12,12,0.35);box-shadow:0px 4px 9px rgba(12,12,12,0.35);-webkit-box-shadow:0px 0px 9px rgba(0,0,0,0.35);box-shadow:0px 0px 9px rgba(0,0,0,0.35);text-align:center;margin:0 auto;padding:30px 30px}@media (min-width: 768px){#ca-cta-card{background-image:url("/wp-content/themes/signa-2017/images/competitive-analysis-cta-box-bg-2.jpg");background-size:100%;background-position:bottom center;background-repeat:no-repeat;text-align:left;padding:50px 60px 60px 60px}}@media (min-width: 1440px){#ca-cta-card{padding:50px 120px 60px 120px}}@media (min-width: 768px) and (max-width: 1440px){#ca-cta-card div{width:930px;max-width:100%;margin:auto}}#ca-cta-card h2{text-transform:none !important;margin-bottom:15px !important;color:#1e425d;font-size:30px}@media (min-width: 768px){#ca-cta-card h2{font-size:40px}}#ca-cta-card .services-outer-wrapper .f-content-container.f-col-50.mobile-custom-col.flexed{width:1200px;max-width:100%}#ca-cta-card p{color:#1e425d;max-width:580px;margin-bottom:25px;font-weight:400}#ca-cta-card a{padding:18px 18px;width:358px;max-width:100%;text-align:center;height:auto}h2.trusted-by{color:#404040 !important;font-style:normal !important;font-weight:bold !important;font-size:30px !important;line-height:45px !important;margin-bottom:30px}.awards-row.trusted-logos img{max-height:86px}.awards-row{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;width:1004px;max-width:100%}@media (min-width: 860px){.awards-row{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;margin-top:65px;margin-bottom:20px;padding:5px}.awards-row.trusted-logos{margin-bottom:0px}}.awards-row h2{margin-bottom:40px}@media (min-width: 860px){.awards-row h2{margin-bottom:80px}}.awards-row img{max-height:168px;width:auto;max-width:280px;margin-bottom:30px}.awards-row img:last-child{margin-bottom:0px}@media (min-width: 860px){.awards-row img{max-width:33%;margin-bottom:0px;padding:0 4px}}.awards-row.trusted-logos{margin-top:0px !important}.awards-row.award-winning{width:842px;padding-left:0;padding-right:0}@media (min-width: 860px){.awards-row.award-winning img{padding:0;max-width:200px}}*{margin:0;padding:0}body{font:1.188em "Poppins",sans-serif}p{font-size:inherit;font-weight:300;margin:0px}p.value{text-align:center;color:#1e425d;font:300 1.158em "Poppins",sans-serif}h2{font-size:42px}h2.heading{font:700 2rem "Poppins",sans-serif;text-align:center;color:#1e425d}h2.section-title{margin-bottom:100px;text-align:center}@media (max-width: 768px){h2{font-size:32px}h2.section-title{margin-bottom:50px;text-align:center}}h4{color:inherit}h4>span.big-org{color:#ff8644;font-size:72px;line-height:1;font-weight:300}h4>span>.svg-inline--fa.fa-w-14{width:0.5em}@media (min-width: 768px){h1.home-heading{font-size:2rem}h2.heading{font-size:3.8vw}p.value{font-size:1.474em}}.wp-caption{margin-bottom:1.5em;max-width:100%}.wp-caption img[class*="wp-image-"]{display:block;margin-left:auto;margin-right:auto}.wp-caption .wp-caption-text{margin:0.8075em 0}.wp-caption-text{text-align:center}.page-content .wp-smiley,.entry-content .wp-smiley,.comment-content .wp-smiley{border:none;margin-bottom:0;margin-top:0;padding:0}.entry-content p,.f-content-row p,.global-row p{margin-bottom:10px}.entry-content p:last-of-type,.f-content-row p:last-of-type,.global-row p:last-of-type{margin-bottom:0px}.ff-list-title{margin:15px 0px}.cs-supporting-title{text-transform:uppercase;line-height:1.2;margin-bottom:0.3em;margin-top:0px;font-size:1.895em}@media (max-width: 768px){.cs-supporting-title{font-size:32px}}.comment-content a{word-wrap:break-word}.bypostauthor{display:block}a{color:#1e425d}a:hover,a:focus,a:active{color:#1e425d}a:hover,a:active{outline:0;text-decoration:none}.mobile-phone-number-container{height:34px}div#mobile-phone-number{background-color:#3878a8;text-align:center;padding:3px 0px;position:fixed;z-index:99999;width:100%}div#mobile-phone-number a{color:#fff;text-decoration:none;font-family:'Segoe', Arial, Helvetica, 'Helvetica Neue', 'San Francisco', sans-serif;font-size:19px;font-weight:500}@media (min-width: 1180px){div#mobile-phone-number{display:none}.mobile-phone-number-container{display:none}}@media (max-width: 1180px){h2.heading{font-size:2.7rem}.home-service a{font-size:1.5rem}}div.icon-fonts a{text-decoration:none}.arrow-orange{width:32px;vertical-align:middle}.blog-entry-content p{margin-bottom:25px}h3.cs-title{color:#fff;text-decoration:none}#lightbox-form h3.gform_title{text-align:center;color:#0e8e8c;font-size:3.6rem;font-weight:700;line-height:1.2;text-transform:uppercase}h1.entry-title.service-heading{margin:0px;margin-bottom:25px}p#breadcrumbs{display:block;width:100%;position:absolute;left:0px;bottom:15px;font-size:16px;text-transform:capitalize;padding:0 10%}p#breadcrumbs a{color:#fff;text-decoration:none}.no-results-p{font-size:32px;font-weight:bold;margin-bottom:100px;text-align:center}input#mc-embedded-subcribe{border-radius:none}.view-our-blog-btn{text-align:center;width:100%;clear:both;float:left}@media (max-width: 768px){.view-our-blog-btn{margin-top:25px}}a.green-learn-button{text-decoration:none;padding:17px 60px;-webkit-transition:all 0.15s;transition:all 0.15s;text-align:center;font-size:19px;display:inline-block;text-shadow:none;font-weight:500;background-color:transparent;color:#0e8e8c;border:solid 2px #0e8e8c}a.green-learn-button:hover{background-color:#0e8e8c;color:#fff}a.white-learn-button{text-decoration:none;padding:17px 60px;-webkit-transition:all 0.15s;transition:all 0.15s;text-align:center;font-size:19px;display:inline-block;text-shadow:none;font-weight:500;background-color:none;color:#fff;border:solid 2px #fff}a.white-learn-button:hover{background-color:#fff;color:#1e425d;border-color:#fff}a.white-learn-button:visited{color:#fff}.btn-white{text-decoration:none;padding:17px 60px;-webkit-transition:all 0.15s;transition:all 0.15s;text-align:center;font-size:19px;display:inline-block;text-shadow:none;font-weight:500;background-color:none;color:#fff;border:solid 2px #fff}.btn-white:hover{background-color:#fff;color:#1e425d;border-color:#fff}input.green-learn-button{text-decoration:none;padding:17px 60px;-webkit-transition:all 0.15s;transition:all 0.15s;text-align:center;font-size:19px;display:inline-block;text-shadow:none;font-weight:500;background-color:transparent;color:#0e8e8c;border:solid 2px #0e8e8c;padding:19px 60px;border-radius:0px;-webkit-box-shadow:none;box-shadow:none}input.green-learn-button:hover{background-color:#0e8e8c;color:#fff;border-color:#0e8e8c;-webkit-box-shadow:none;box-shadow:none}.button-block{display:inline-block}@media (max-width: 768px){.button-block{margin-bottom:50px}}.careers-btn{float:right}@media (max-width: 900px){.careers-btn{float:left}}.btn-apply{background-color:transparent;color:#0e8e8c;border:2px solid #0e8e8c;padding:17px 60px;text-transform:capitalize;display:inline-block;text-decoration:none;margin-top:25px;-webkit-transition:ease 300ms;transition:ease 300ms}.btn-apply:hover{background:#0e8e8c;color:#fff;border:2px solid #0e8e8c}.btn-apply-invert{background-color:#0e8e8c;color:#fff;border:2px solid #0e8e8c;padding:17px 60px;text-transform:capitalize;display:inline-block;text-decoration:none;margin-top:25px;-webkit-transition:ease 300ms;transition:ease 300ms}.btn-apply-invert:hover{background:#fff;color:#0e8e8c;border:2px solid #fff}button.alm-load-more-btn.more.load-more-ajax,button.alm-load-more-btn.more.load-more-ajax.loading{text-decoration:none;padding:17px 60px;-webkit-transition:all 0.15s;transition:all 0.15s;text-align:center;font-size:19px;display:inline-block;text-shadow:none;font-weight:500;background-color:transparent;color:#1e425d;border:solid 2px #1e425d;height:auto !important;border-radius:0 !important}button.alm-load-more-btn.more.load-more-ajax:hover,button.alm-load-more-btn.more.load-more-ajax.loading:hover{background-color:#1e425d;color:#fff}a.blue-learn-button.services-list{margin-top:35px;font-weight:500;width:250px;max-width:100%}.ajax-load-more-wrap.blue .alm-load-more-btn.done,.ajax-load-more-wrap.blue .alm-load-more-btn.loading,.ajax-load-more-wrap.blue .alm-load-more-btn:hover{background-color:#1e425d;color:#fff;border-radius:0 !important}.alm-btn-wrap .alm-load-more-btn.loading:before{background:none !important}button.alm-load-more-btn.more.load-more-ajax.done{display:none}.btn{padding:19px 12px !important;text-align:center;width:100%;font-weight:bold;-webkit-transition:all 0.15s;transition:all 0.15s;font-size:19px;line-height:28px;margin-bottom:0px;display:inline-block;text-shadow:none !important;text-decoration:none !important;-webkit-box-shadow:none !important;box-shadow:none !important;outline:none !important;border-radius:0px !important}.btn.small{width:auto;max-width:100%;padding:12px 30px !important;font-weight:normal}.btn.medium{width:270px;max-width:100%}@media (min-width: 768px){.btn.medium{min-width:250px}}.btn.orange{color:#fff !important;background-color:#F2702A !important;border:2px solid #ff8644 !important}.btn.orange:hover:not(.no-hover){color:#ff8644 !important;background-color:#fff !important}.btn.orange.inverse{background:transparent !important;color:#ff8644 !important}.btn.orange.inverse:hover:not(.no-hover){background:#ff8644 !important;color:white !important}.btn.blue{color:#fff !important;background-color:#1e425d !important;border:2px solid #1e425d !important}.btn.blue.inverse{background:transparent !important;color:#1e425d !important}.btn.blue.inverse:hover:not(.no-hover){background:#1e425d !important;color:white !important}.btn.green{color:#fff !important;background-color:#0E8E8C !important;border:2px solid #0e8e8c !important}.btn.green:hover:not(.no-hover){color:#0e8e8c !important;background-color:#fff !important}.btn.green.inverse{background:transparent !important;color:#0e8e8c !important}.btn.green.inverse:hover:not(.no-hover){background:#0e8e8c !important;color:white !important}a.btn-white.btn.medium.home-cta-case-study{min-width:280px}.goto-anchor{position:absolute;bottom:0;z-index:3;width:100%;left:0;text-align:center;outline:none;padding-top:40px}.banner{width:100%;color:#fff;text-align:center;position:relative;background-size:cover}.no-webp .banner{background:url(/wp-content/uploads/home-banner-image@2x.jpg);background-repeat:no-repeat;background-size:cover;background-position:center center}.webp .banner{background:url(/wp-content/themes/signa-2017/images/home-banner-image@2x.webp);background-repeat:no-repeat;background-size:cover;background-position:center center}.banner-content-wrapper,.banner-video,.banner-video-filter{position:absolute;top:0;left:0;width:100%;height:100%}.banner-video-filter{z-index:1;background-color:rgba(119,133,157,0.5)}.banner-video{z-index:0}video{display:inline-block;vertical-align:baseline}.home-banner{height:420px;margin:0;background-size:cover;text-align:center;position:relative}.content-default-home{padding-top:0}.content-home{height:100%}.banner-content-wrapper{z-index:2;overflow:hidden}.intro h1{font-family:'Raleway', sans-serif;font-weight:100;text-transform:uppercase;font-style:italic;font-size:3vw}h1.home-heading{font-weight:100;text-transform:uppercase;font-size:3vw;text-align:center;color:#ffffff;max-width:1400px;margin:auto}.home-heading span{font-weight:600}.row{margin-left:-15px;margin-right:-15px}.container{margin-right:auto;margin-left:auto;display:inline-block;padding-left:15px;padding-right:15px;width:100%}.container-upcity{padding-left:10%;padding-right:10%}.home-banner .intro{height:100%;padding-top:200px;padding-bottom:100px}@media (min-width: 992px){.home-banner{height:650px;padding-top:135px}.home-banner .heading{font-size:46px;width:auto;height:423px}.home-banner .intro{padding-top:100px}}@media (max-width: 640px){h1.home-heading{font-size:32px}}.blog-entry-content{width:800px;margin:0 auto;padding-top:0px}.blog-entry-content p{font-weight:100}header.entry-header.blog-intro{padding-top:200px;padding-bottom:50px;width:80%;max-width:1400px;margin:auto}.blog-intro .entry-meta,.blog-intro .entry-meta a,.blog-intro .entry-meta a:hover,.blog-intro .entry-meta a:visited,.blog-intro .entry-meta a:active,.blog-intro .entry-meta a:focus{font-weight:100;color:#fff;text-decoration:none;font-style:italic;font-size:15px}h1.single-blog-heading{font-weight:700;text-transform:uppercase;font-size:50px;width:80%;max-width:1400px;line-height:1;margin:auto}.fullpage-banner{height:100%;margin:0;background-size:cover;text-align:center;position:relative}.service-banner{height:100%;margin:0;background-size:cover;text-align:center;position:relative;margin-bottom:0px}.banner-service-content-wrapper{z-index:2;overflow:hidden;height:auto;background-color:rgba(0,0,0,0.6);height:100%}h1.service-heading{font-weight:700;text-transform:uppercase;font-size:70px;width:80%;line-height:1}.service.heading span{font-weight:600}.service-banner .intro{position:relative;min-height:1px;padding-left:15px;padding-right:15px;padding-top:85px}header.entry-header.service-intro{padding:50px 10% 75px 10%;margin:auto;margin-top:100px;overflow:hidden}header.cs-hero{padding:50px 10% 75px 10%;margin:auto;margin-top:100px}@media (min-width: 768px){header.entry-header.service-intro{padding:120px 10% 120px 10%;margin-top:120px}header.cs-hero{padding:120px 0px 120px 0px;margin-top:120px}}@media (max-width: 1180px){#header ul#primary-menu.open{display:block;opacity:1;height:900px}#header ul#primary-menu{display:block;opacity:0;-webkit-transition:opacity 0.3s;-webkit-transition:opacity 0.5s;transition:opacity 0.5s;height:0px;overflow:hidden}}h1.case-study-heading{font-weight:700;text-transform:uppercase;font-size:70px;width:100%;line-height:1;color:#1e425d}.case-study-banner{height:100%;background:none}#header.case-study.navbar{background:#1e425d}@media (max-width: 768px){.banner-video{display:none}}.banner-video{width:100%;height:100%}.homepage-video-container{position:absolute;z-index:-1;top:0px;left:0px;bottom:0px;right:0px;overflow:hidden;background-size:cover;background-repeat:no-repeat;background-position:0% 50%;background-image:none}.homepage-video{visibility:visible;margin:auto;position:absolute;z-index:-1;top:50%;left:0%;-webkit-transform:translate(0%, -50%);transform:translate(0%, -50%);width:100%;height:auto}.home-banner-new{background:url(/wp-content/uploads/banner-hero-home.jpg) !important;background-size:cover !important;background-position:center !important;background-repeat:no-repeat}@media (max-width: 1281px) and (min-width: 768px){h1.home-heading.amp-font-of-title{font-size:42px}}@media (min-width: 1281px){h1.home-heading.amp-font-of-title{font-size:49px}}@media (max-width: 599){h2.stay-h2.form-heading{line-height:1.3 !important}}.alignleft{display:inline;float:left;margin-right:1.5em}.alignright{display:inline;float:right;margin-left:1.5em}.aligncenter{clear:both;display:block;margin-left:auto;margin-right:auto}.clear:before,.clear:after,.entry-content:before,.entry-content:after,.comment-content:before,.comment-content:after,.site-header:before,.site-header:after,.site-content:before,.site-content:after,.site-footer:before,.site-footer:after{content:"";display:table;table-layout:fixed}.clear:after,.entry-content:after,.comment-content:after,.site-header:after,.site-content:after,.site-footer:after{clear:both}#comments.comments-area{width:100%;width:800px;margin:0 auto}.switch-left{-webkit-box-orient:horizontal;-webkit-box-direction:reverse;-ms-flex-direction:row-reverse;flex-direction:row-reverse}.switch-left>div+.f-p-l{padding-right:50px;padding-left:0px}@media (max-width: 900px){.col-reverse-mobile{-webkit-box-orient:vertical;-webkit-box-direction:reverse;-ms-flex-direction:column-reverse;flex-direction:column-reverse}.switch-left>div+.f-p-l{padding-right:0px}}.white-text{color:#fff !important}a.white-text,a.white-text:hover,a.white-text:visited{color:#fff}.white-text h2,.white-text h3,.white-text p,.white-text li{color:#fff !important}p.white-text{color:#fff !important}.tx-center{text-align:center}.tx-right{text-align:right}.tx-left{text-align:left}.top-space-margin-1{margin-top:0px}.bottom-space-margin-1{margin-bottom:0px}.blue-bg{background-color:#3879a9}.p-50{padding:50px 0px}.p-t-60{padding-top:60px}.m-b-60{margin-bottom:60px}.m-b-120{margin-bottom:120px}.no-m-t{margin-top:0px}.no-m-b{margin-bottom:0px}.no-p-t{padding-top:0px}.no-p-b{padding-bottom:0px}.mt-1{margin-top:15px}.mt-2{margin-top:25px}.mt-3{margin-top:50px}.mt-4{margin-top:75px}.mt-0{margin-top:0px}.mb-1{margin-bottom:15px}.mb-2{margin-bottom:25px}.mb-3{margin-bottom:50px}.mb-4{margin-bottom:75px}.mb-0{margin-bottom:0px}.tx-center,.text-center{text-align:center}.mobile-padding-bottom-img{padding-bottom:0}@media (max-width: 900px){.f-content-col{-ms-flex-wrap:wrap;flex-wrap:wrap}.f-content-row{-ms-flex-wrap:wrap;flex-wrap:wrap}.f-p-l{padding-left:0px;text-align:center}.f-p-r{padding-right:0px;text-align:center}.f-col-50{-webkit-box-ordinal-group:1;-ms-flex-order:0;order:0;-webkit-box-flex:0;-ms-flex:0 1 100%;flex:0 1 100%}.fo1{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}.fo2{-webkit-box-ordinal-group:3;-ms-flex-order:2;order:2}.fmt-35{margin-top:35px}.f-center{text-align:center}.f-container{-ms-flex-wrap:wrap;flex-wrap:wrap}.f-col-60{-ms-flex-preferred-size:100%;flex-basis:100%}.f-col-30{-ms-flex-preferred-size:100%;flex-basis:100%}.mobile-padding-bottom-img{padding-bottom:50px}}@media (max-width: 768px){.hidden-screen-sm{display:none}}@media (min-width: 768px){.visible-screen-sm{display:none}}@media (max-width: 901px){.mobile-padding-none{padding-bottom:0px}.mobile-padding-top{padding-top:50px !important}.mobile-padding-bottom{padding-bottom:50px}.mobile-padding-bottom:last-of-type{padding-bottom:0px}}.white-text{color:#fff}.job-listing-subtitle{margin-top:5px}@media (max-width: 900px){.job-listing-subtitle{margin-bottom:25px !important}}@media (max-width: 900px){.m-t-m{margin-top:20px}.job-listing-mobile{font-size:30px !important}}.pt{margin-top:25px}.pt2{margin-top:50px}.text-spacer{padding:15px 0px}.text-spacer-large{padding:25px 0px}@media (min-width: 768px){.padding-bottom-none{padding-bottom:0px}.padding-top-none{padding-top:0px}}.pbn{padding-bottom:0px}.contain-text{max-width:1024px !important}.contain-large-text{max-width:940px !important}
/*# sourceMappingURL=critical_home.min.css.map */
</style>

  
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <!-- Main Stylesheet for Grunt -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/scss/min/styles-home.min.css" media="print" onload="this.media='all'">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,500,700" rel="stylesheet">

  <?php if(is_front_page()): ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet">
  <?php endif; ?>

  <?php wp_enqueue_script("jquery"); ?>

  <?php wp_head(); ?>

  <script type="application/ld+json">
    {
      "@type": "LocalBusiness",
      "name": "Signa Marketing",
      "image": "https://www.signamarketing.com/wp-content/uploads/2017/06/Signa-logo-amp_03.jpg",
      "logo": "https://www.signamarketing.com/wp-content/uploads/2017/06/Signa-logo-amp_03.jpg",
      "url": "https://www.signamarketing.com/",
      "description": "Signa Marketing is a Digital Marketing Agency in Phoenix, Arizona providing brands, large and small, with custom marketing strategies that drive revenue.",
      "telephone": "602-456-2906",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Phoenix",
        "addressRegion": "AZ",
        "postalCode": "85034",
        "streetAddress": "1201 E Jefferson St #4A"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 33.4468662,
        "longitude": -112.05602440000001
      },
      "sameAs": [
        "https://www.facebook.com/SignaMarketing/",
        "https://twitter.com/SignaMarketing",
        "https://www.instagram.com/signamarketing/",
        "https://www.snapchat.com/add/signamarketing",
        "https://plus.google.com/+Signamarketingsolutions",
        "https://www.linkedin.com/company/signa-marketing-solutions"
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.0",
        "bestRating": "5",
        "worstRating": "1",
        "ratingCount": "4"
      },

      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Digital Marketing",
        "itemListElement": [{
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "PPC Campaign Managment"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Facebook Advertising"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Paid Search Advertising"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "SEO Services"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Ecommerce Marketing"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Build Ecommerce Websites"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Build Custom Websites"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Social Media Management"
            }
          }

        ]
      },

      "review": {
        "@type": "Review",
        "url": "https://www.google.com/search?q=signamarketing&oq=signamarketing&aqs=chrome..69i57j69i61j69i60l2j69i65j69i60.3427j0j7&sourceid=chrome&ie=UTF-8#lrd=0x872b491c80fadcdb:0xcf0cf9282a4e134a,1,,,",
        "itemReviewed": {
          "@type": "LocalBusiness",
          "image": "https://www.signamarketing.com/wp-content/uploads/2017/06/Signa-logo-amp_03.jpg",
          "description": "Signa Marketing is a Digital Marketing Agency in Phoenix, Arizona providing brands, large and small, with custom marketing strategies that drive revenue.",
          "name": "Signa Marketing",
          "url": "https://www.signamarketing.com/",
          "telephone": "602-456-2906",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Phoenix",
            "addressRegion": "AZ",
            "postalCode": "85034",
            "streetAddress": "1201 E Jefferson St #4A"
          },
          "sameAs": [
            "https://www.facebook.com/SignaMarketing/",
            "https://twitter.com/SignaMarketing",
            "https://www.instagram.com/signamarketing/",
            "https://www.snapchat.com/add/signamarketing",
            "https://plus.google.com/+Signamarketingsolutions",
            "https://www.linkedin.com/company/signa-marketing-solutions"
          ],
        },
        "author": {
          "@type": "Person",
          "name": "Lauren Lichtenberger"
        },
        "publisher": {
          "@type": "Organization",
          "name": "Google",
          "sameAs": "https://www.google.com/"
        },
        "datePublished": "2017",
        "reviewBody": "Bobby and his team at Signa are excellent! They are timely, responsive and have made our website awesome! I appreciate how easy it is to work with them and how professional they are. If we ever have a question or issue, I can call or email and Bobby is quick to help me figure out what I need. The people and service at Signa are high quality and I definitely recommend them to anyone!",
        "inLanguage": "en",
        "reviewRating": {
          "@type": "Rating",
          "worstRating": 1,
          "bestRating": 5,
          "ratingValue": 5
        }
      }

    }
  </script>


</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PB4SZ9" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div class="mobile-phone-number-container">
    <div id="mobile-phone-number">
      <a href="tel:602-456-2906"><img src="/wp-content/themes/signa-2017/images/icons/phone-solid.svg" aria-hidden="true" width="15" height="15"> (602) 456-2906</a>
    </div>
  </div>
  <div id="header" class="container-fluid navbar <?php if(is_singular('post')) { echo 'header-blog'; } ?>">
    <header>
      <div class="hp-logo-col-container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo" src="/wp-content/uploads/2016/11/logo@2x.png" width="180" alt="Signa Marketing Logo"></a>
      </div>
      <nav class="menu">

        <span class="open-menu-btn" id="open-menu-btn" onclick="openMenu()">
          <img src="/wp-content/themes/signa-2017/images/icons/bars-solid.svg"
            aria-hidden="true" width="34px">
        </span>
        
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

        <span id="close-menu-btn" class="closebtn" onclick="closeMenu()">
          <img src="/wp-content/themes/signa-2017/images/icons/times-solid.svg" aria-hidden="true" width="34px">
        </span>

        <span class="open-secondary-menu-btn" id="open-secondary-menu-btn" onclick="openSecondMenu()">
          <img src="/wp-content/themes/signa-2017/images/icons/bars-solid.svg" width="34px">
        </span>

      </nav>
      <nav id="services-menu">
        <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu' ) ); ?>
      </nav>      
    </header>

    <!-- Page progress bar -->
    <?php if(is_singular('post')): ?>
    <div class="progress-container">
      <div class="progress-bar"></div>
    </div>
    <?php endif; ?>
    
  </div>

  <!-- Start Page Content -->
  <div id="content" class="site-content">