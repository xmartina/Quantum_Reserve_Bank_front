<?php require_once ('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= pageName . " | " . siteName ?></title>
    <base src="<?= homeUrl ?>" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icomoon.min.css">
    <link rel="stylesheet" href="assets/css/bitneo-style.css">
    <script src="assets/js/jquery-2.1.4.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/custom.js"></script>
    <link rel="shortcut icon" type="image/png" sizes="32x32" href="<?= siteIcon ?>">
    <script>
        var url = '../wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget5991.js?93010';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url;
        var options = {
            "enabled": true,
            "chatButtonSetting": {
                "backgroundColor": "#4dc247",
                "ctaText": "",
                "borderRadius": "25",
                "marginLeft": "20",
                "marginBottom": "50",
                "marginRight": "50",
                "position": "left"
            },
            "brandSetting": {
                "brandName": "WATI",
                "brandSubTitle": "Typically replies within a day",
                "brandImg": "https://marathondigitalholdings.org/assets/img/logo.png",
                "welcomeText": "Hi there!\nHow can I help you?",
                "messageText": "Hello, I have a question about {{page_link}}",
                "backgroundColor": "#0a5f54",
                "ctaText": "Start Chat",
                "borderRadius": "15",
                "autoShow": false,
                "phoneNumber": "<?= phone ?>"
            }
        };
        s.onload = function() {
            CreateWhatsappChatWidget(options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    </script>
    </script>

</head>

<body>
<div class="wrapper bg_gradient">
    <div class="nk-ovm nk-ovm-repeat nk-ovm-fixed shape-i">
    </div>
    <div class="nk-ovm shape-z"></div>
    <section class="header">
        <div class="container">
            <div class="header__inner">
                <a href="<?= homeUrl ?>" class="logo">
                    <img src="<?= siteLogo ?>" alt="Marathon">
                </a>
                <ul class="menu__main">
                    <li>
                        <a href="<?=homeUrl ?>" class="menu__link">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="<?= termsUrl?>" class="menu__link">
                            Terms
                        </a>
                    </li>
                    <li>
                        <a href="<?= faqUrl?>" class="menu__link">
                            FAQs
                        </a>
                    </li>
                    <li>
                        <a href="<?= contactUrl?>" class="menu__link pr-0">
                            Contact Us
                        </a>
                    </li>
                </ul>
                <div class="head__btn">
                    <a href="<?= loginUrl?>" class="btn__login"> Login </a>
                    <a href="<?= signupUrl?>" class="btn__signup"> Signup </a>
                </div>
            </div>
        </div>
    </section>
