
<!doctype html>
<html lang="en" style="width: 100%; height: 100%;">
<head>
    <meta charset="utf-8">
    <base href="/">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="">
    <link rel="preload" href="assets/fonts/MaterialIcons-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/fonts/material-icons.css"/>
    <style id="initial" type="text/css">

        body, html {
            height: 100%;
            overflow: hidden;
            background-color: #eee;
        }

        .tb-loading-spinner {
            margin: auto;
            z-index: 1;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 136px;
            height: 30px;
            text-align: center;
        }

        .tb-loading-spinner > div {
            width: 30px;
            height: 30px;
            margin-right: 10px;
            background-color: rgb(43,160,199);

            border-radius: 100%;
            display: inline-block;
            -webkit-animation: tb-bouncedelay 1.4s infinite ease-in-out both;
            -moz-animation: tb-bouncedelay 1.4s infinite ease-in-out both;
            animation: tb-bouncedelay 1.4s infinite ease-in-out both;
        }

        .tb-loading-spinner .tb-bounce1 {
            -webkit-animation-delay: -0.32s;
            -moz-animation-delay: -0.32s;
            animation-delay: -0.32s;
        }

        .tb-loading-spinner .tb-bounce2 {
            -webkit-animation-delay: -0.16s;
            -moz-animation-delay: -0.16s;
            animation-delay: -0.16s;
        }

        @-webkit-keyframes tb-bouncedelay {
            0%, 80%, 100% { -webkit-transform: scale(0) }
            40% { -webkit-transform: scale(1.0) }
        }

        @-moz-keyframes tb-bouncedelay {
            0%, 80%, 100% { -moz-transform: scale(0) }
            40% { -moz-transform: scale(1.0) }
        }

        @keyframes tb-bouncedelay {
            0%, 80%, 100% {
                -webkit-transform: scale(0);
                -moz-transform: scale(0);
                transform: scale(0);
            } 40% {
                  -webkit-transform: scale(1.0);
                  -moz-transform: scale(1.0);
                  transform: scale(1.0);
              }
        }

    </style>
    <link rel="stylesheet" href="app-theme.1648c5fdb84b54be642d.css"><link rel="stylesheet" href="login-theme.a2783fcc6b704d80899f.css"><link rel="stylesheet" href="styles.7dcea9e35b476c2e29bd.css"></head>
<body class="tb-default">
<tb-root></tb-root>
<div id="tb-loading-spinner" class="tb-loading-spinner">
    <div class="tb-bounce1"></div>
    <div class="tb-bounce2"></div>
    <div class="tb-bounce3"></div>
</div>
<script src="runtime.15bbffd6950bde4f55d3.js" defer></script><script src="polyfills-es5.d6ec329eee2b34853f03.js" nomodule defer></script><script src="polyfills.4e5b72132c07a8926f8c.js" defer></script><script src="scripts.26841508530435df7570.js" defer></script><script src="vendor.ac460eb47e914f5b362d.js" defer></script><script src="main.72fdaad4803102cf03d4.js" defer></script></body>
</html>
