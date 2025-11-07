<?php
require 'config.php';
require 'minify.php';
if($baotri == 1){
        header("Location: /baotri");
        exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta http-equiv="content-language" content="vi">
<meta name="robots" content="index, follow'">


<meta name="description" content="https://dichvuright.com">
<meta name="keywords" content="duykhanh,checkscamvip,khanhdepzaivcl,dichvuright,duykhanh.dev">

<!-- Open Graph data -->
<meta property="og:title" content="<?=$site_mota;?>">
<meta property="og:type" content="Website">
<meta property="og:url" content="https://<?=$_SERVER['HTTP_HOST']?>"/>
<meta property="og:image" content="<?=$site['banner'];?>">
<meta property="og:description" content="<?=$site_mota;?>">
<meta property="og:site_name" content="<?=$site_mota;?>">
<meta property="article:section" content="<?=$site_mota;?>">
<meta property="article:tag" content="<?=$site_mota;?>">

<!-- Twitter Card data -->
<meta name="twitter:card" content="<?=$site['banner'];?>">
<meta name="twitter:title" content="<?=$site_mota;?>">
<meta name="twitter:description" content="<?=$site_mota;?>">
<meta name="twitter:image:src" content="<?=$site['banner'];?>">
<link rel="alternate" hreflang="vi-vn" href="https://<?=$_SERVER['HTTP_HOST']?>">
<link rel="canonical" href="https://<?=$_SERVER['HTTP_HOST']?>">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0WXPRN5R2W"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0WXPRN5R2W');
</script>
<script type="application/ld+json">{
"@context": "http://schema.org",
"@type": "WebSite",
  "name": "Kiemtrakdv",
  "url": "https://kiemtrakdv.com",
}</script>
<script type="application/ld+json">
 { "@context": "https://schema.org",
 "@type": "Organization",
 "name": "KIEMTRAKDV",
 "legalName" : "DATA CENTER ADMIN VIETNAM",
 "url": "https://kiemtrakdv.com",
 "logo": "https://i.imgur.com/nMxPgiz.png",
 "foundingDate": "2010",
 "founders": [
 {
 "@type": "Person",
 "name": ""
 }],
 "address": {
 "@type": "PostalAddress",
 "streetAddress": "Nguyễn Duy Khánh",
 "addressLocality": "",
 "addressRegion": "HN",
 "postalCode": "100000",
 "addressCountry": "VN"
 },
 "contactPoint": {
 "@type": "ContactPoint",
 "contactType": "customer support",
 "telephone": "0978009289",
 "email": "cskh.dichvuright@gmail.com"
 },
 "sameAs": [
 "",
 "",
 "",
 "",
 ]}
</script>
<link rel="icon" href="https://i.imgur.com/9UCrfwC.png" />
        <link rel="apple-touch-icon" href="https://i.imgur.com/9UCrfwC.png" />
        
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="/assets/default/plugins/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="/assets/default/plugins/swiper/swiper-bundle.min.css" />
        <link rel="stylesheet" href="/assets/default/plugins/select2/css/select2.min.css" />
        <link rel="stylesheet" href="/assets/default/plugins/fancybox/fancybox.min.css" />
        <link rel="stylesheet" href="/assets/default/fonts/fontawesome/css/all.min.css" />
        <link rel="stylesheet" href="/assets/default/css/base.css?<?=time();?>" />
        <link rel="stylesheet" href="/assets/default/css/style.css?<?=time();?>" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="/assets/default/images/Picsart_22-10-16_07-31-12-867.png
"> 

        
        <script type="text/javascript" src="/assets/default/plugins/jquery.min.js"></script>
        <script type="text/javascript" src="/assets/default/plugins/bootstrap/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="/assets/default/plugins/swiper/swiper-bundle.min.js"></script>
        <script type="text/javascript" src="/assets/default/plugins/select2/js/select2.min.js"></script>
        <script type="text/javascript" src="/assets/default/plugins/fancybox/fancybox.min.js"></script>
        <script type="text/javascript" src="/assets/default/plugins/swal/sweetalert2.all.min.js"></script>
        <script type="text/javascript" src="/assets/default/plugins/cookie/cookie.min.js"></script>
        <script type="text/javascript" src="/assets/default/js/app.js?<?=time();?>"></script>
        <script type="text/javascript" src="/assets/default/js/script.js"></script>

        <script>
            function onloadCallback() {
                grecaptcha.ready(function () {
                    grecaptcha
                        .execute("", {
                            action: "homepage",
                        })
                        .then(function (token) {
                            $(".recaptcha_token").val(token);
                        });
                });
            }
            function HideModal() {
                Cookies.set("Hide", "TRUE", { expires: 1 });
                $("#global-modal").modal("hide");
            }
            $(document).ready(function () {
                if (!Cookies.get("Hide")) {
                    $("#global-modal").modal("show");
                }
                $("#dropfile").click(function (event) {
                    $("#uploadfile").trigger("click");
                });
            });
        </script>
        <style>
          :root {
    --gray-theme: #F8FAFC;
    --gray-theme-900: #F4F4F5;
    --gray-theme-800: #e1e1e1;
    --gray-theme-700: #dadada;
    --gray-theme-600: #b7b7b7;
    --gray-theme-500: #adadad;
    --gray-theme-400: #969696;
    --gray-theme-300: #7c7c7c;
    --gray-theme-200: #696969;
    --gray-theme-100: #595959;
    --dark-color: #232323;
    --transition: .3s all ease-in-out;
    --font-theme: 'Open Sans', sans-serif; 
    --primary-color: <?=$site['color'];?>;
    --primary-hover: <?=$site['sdcolor'];?>;
    --dvtg: #00CD00;
    --ditme: #9933FF;
}
        </style> 
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v18.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
     <audio src="<?=$site['music']?>" autoplay="autoplay"></audio>
          <style type="text/css">
        body{
        background-image: url(https://i.imgur.com/orYfZS3.png), url(https://i.imgur.com/orYfZS3.png);
    }
       .boder{
        border: 0px solid #8316ab;
    }
    </style>
</head>