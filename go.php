<?php
// THIS SCRIPT CODED BY K Russsia
// Skype : @hotmail.com ,, live:.cid.f3cae5649395bbe
// ICQ : 79099398
$user = (isset($_GET['user'])) ? $_GET['user'] : '';
?>
<html lang="en" class="ux-app footer-html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="google" content="notranslate">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
    <style>
        @font-face {
          font-family: uxfont;
          src: url(//img6.wsimg.com/ux/fonts/uxfont/2.0/uxfont.woff2) format("woff2")
          , url(//img6.wsimg.com/ux/fonts/uxfont/2.0/uxfont.woff) format("woff");
          font-display: block;
        }
    </style>
    <link rel="stylesheet" href="https://img6.wsimg.com/wrhs/0d1c9e63d9c19b5f31b1121e968fbd43/uxcore2.min.css" media="all">
    <link rel="stylesheet" href="https://img6.wsimg.com/wrhs/2fb7912bba7360076d13f91f84a387b7/utilityheader.min.css" media="all">
    <style>
        #left-col{display:none !important}body{min-height:0 !important}body.ux-app.uxf-flex.market-selector-open{overflow:scroll}html{background-size:0;background-position:top center;background-repeat:no-repeat}.lg-container{margin:0 auto}#login-container{margin-top:0}@media screen and (min-width:520px){#login-container{margin-top:10px}}@media screen and (min-width:768px){#login-container-row{display:flex}#login-container-col{margin-bottom:10px}#left-col{display:block !important}}@media screen and (min-width:992px){.lg-container{width:980px}#login-container-parent{display:table}#login-container-col{width:460px}#login-container{margin-top:40px}html{background-size:cover !important}body{background-color:transparent !important}}@media screen and (min-width:1200px){#login-container-col{width:565px}.lg-container{width:1150px}}
    </style>
    <style>
        #pass-bg{position:absolute;top:20%;width:50%;display:none}@media screen and (min-width:992px){#pass-bg{display:block}}
    </style>
    <link href="https://img1.wsimg.com/auth/v1/static/2924/img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <style>
        .footer_fixer > div:first-of-type {
            background-color: #f5f7f8;
        }

        .language-header {
            border-bottom: 0;
        }
    </style>
    <style type="text/css">
        /******************* General Panel Spacing *******************/
        
        #login-panel .form-group {
          margin-bottom: 10px;
        }
        
        #login-panel .form-text {
          margin-bottom: 10px;
        }
        
        #login-panel .modal-footer {
          justify-content: flex-start
        }
        
        #login-panel .card,
        #login-panel .ux-card {
            margin-bottom: 0;
        }
        
        @media screen and (max-width: 767px) {
          #login-panel #new-ux.card.ux-card.idp .card-block.idp,
          #login-panel #new-ux.card.ux-card.reseller .card-block.reseller {
            padding-top: 8px !important;
          }
        }
        
        /***************** End of General Panel Spacing *****************/
        /***************** Form Header *****************/
        #login-panel .idp #form-header {
          margin-bottom: 15px;
        }
        
        #login-panel .idp-form-header,
        #login-panel #form-header #godaddy-template {
          justify-content: center;
          align-items: flex-end;
          flex-wrap: wrap;
          padding-top: 0px;
        }
        
        #login-panel #headless-logo-container {
          display: none;
        }
        
        #login-panel #success-screen #headless-logo-container {
          display: block;
        }
        
        #login-panel #new-ux #form-header #godaddy-template {
          display: flex;
        }
        
        #login-panel #new-ux #form-header #godaddy-template .logo {
          max-width: 30px;
          max-height: 45px;
        }
        
        #login-panel #form-header #godaddy-template #head-logo-container {
          width: 35px;
        }
        
        #login-panel #new-ux #godaddy-template #head-logo-container {
          margin: 0;
        }
        
        #login-panel #form-header h2 {
          margin-bottom: 0px;
        }
        
        #login-panel #new-ux #form-header #godaddy-template h2 {
          text-align: center;
        }
        
        #login-panel #new-ux #form-header #godaddy-template .country-name {
          visibility: hidden;
        }
        
        #login-panel .reseller #form-header {
          margin-bottom: 10px;
        }
        
        #login-panel #form-header #reseller-template {
          padding-top: 0px;
          margin-bottom: 0px;
        }
        
        #login-panel #form-header #reseller-template #reseller-name {
          padding-bottom: 15px;
        }
        
        #login-panel #form-header #reseller-template h2 {
          text-align: left;
          padding-top: 0px;
        }
        
        #login-panel #new-ux #reseller-template .logo {
          max-height: 36px;
          margin-bottom: 10px;
        }
        
        #login-panel .card-block.pass,
        #login-panel .card-block.pass.reseller {
          padding: 0px;
        }
        
        #login-panel #provisioning-template {
          padding-top: 10px;
          padding-bottom: 40px;
        }
        
        #login-panel #provisioning-template .page-title{
          margin-bottom: 16px;
        }
        
        #login-panel #provisioning-template .page-subtitle{
          margin-bottom: 8px;
        }
        
        #login-panel #provisioning-template #submit-button{
          display: grid;
        }
        
        #login-panel #provisioning-template .password-confirm-pwd .form-group {
          margin-bottom: 24px !important;
        }
        
        #login-panel #provisioning-template .password-confirm-pwd {
          padding-top: 8px;
        }
        
        #login-panel .pass #form-container {
          padding: 10px 20px 30px 20px;
        }
        
        #login-panel #form-header #pass-template .logo-container-pass-o365{
          padding-top: 0px;
          margin-bottom: 15px;
        }
        
        #login-panel #password-container {
          position: relative;
        }
        
        #login-panel .show-hide {
          position: absolute;
          top: 0px;
          right: 0px;
        }
        
        #login-panel .tos-text {
          color: #999999;
          display: inline;
          font-size: 13px;
        }
        
        #login-panel #success-screen #form-header {
          margin-bottom: 16px;
          margin-top: 40px;
        }
        
        #login-panel #success-screen h4 {
          margin-bottom: 0;
        }
        
        #login-panel #success-screen #finish-string-container {
          padding-top: 0;
        }
        
        #login-panel #provisioning-template {
          padding-left: 20px;
          padding-right: 20px;
        }
        
        @media (min-width: 768px) {
          #login-panel #new-ux.card.ux-card .card-block.idp,
          #login-panel #new-ux.card.ux-card .card-block.idp.reseller {
            padding: 40px 48px;
          }
        
          #login-panel #provisioning-template {
            padding-left: 90px;
            padding-right: 90px;
          }
        }
        
        @media (min-width: 1200px) {
          #login-panel .pass #form-container {
            padding: 25px 100px 35px 100px;
          }
          #login-panel #title h3 {
            font-size: 2.5rem;
          }
        }
        
        /******************* Links *******************/
        #login-panel a {
          cursor: pointer;
        }
        
        #login-panel #new-ux #create-account-link {
          display: flex;
          flex-wrap: wrap;
          padding-bottom: 15px;
          justify-content: center;
        }
        
        #login-panel #new-ux #create-account-link p {
          margin-bottom: 0px;
          margin-right: 5px;
        }
        
        #login-panel #new-ux.idp #create-account-link {
          justify-content: center;
        }
        
        #login-panel #new-ux.reseller #create-account-link {
          justify-content: left;
        }
        
        /******************* Form fields *******************/
        #login-panel .sso-field-danger {
            border-color: #db1802 !important;
            background-color: #fadcd9 !important;
            box-shadow: none !important;
        }
        
        /******************* Remember-me *******************/
        #login-panel #remember-me-container > .form-group {
          display: inline;
        }
        
        #login-panel #remember-me-container #label-remember-me {
          margin-right: auto !important;
        }
        
        #login-panel #new-ux #remember-me-container {
          margin-bottom: 2px;
        }
        
        /***************** End Remember-me *****************/
        /***************** End form fields *****************/
        
        /******************* All Buttons *******************/
        #login-panel .card-block button:not(.alternative-login-button) {
          max-height: 40px;
        }
        
        #login-panel .card-block #submitBtn {
          min-width: 100%;
        }
        
        #login-panel .card-block .modal-footer #sign-in-btn {
          margin-bottom: 0px;
        }
        
        #login-panel .card-block .modal-footer #create-with-fb-btn {
          white-space: nowrap;
        }
        
        #login-panel .modal .ux-btn-set {
          margin-bottom: 0px;
          width: 100%;
        }
        
        #login-panel #text-social-button-divider {
          margin-top: 7px;
          margin-bottom: 11px;
          text-align: center;
        }
        
        #login-panel #emailPromoButton {
          min-width: 100%;
          max-height: 40px;
        }
        
        /***************** End of All Buttons *****************/
        
        #login-panel #recovery-links {
          margin: 15px 0 0 0;
          text-align: center;
        }
        
        /******************* Reseller extra footer  *******************/
        #login-panel .reseller-help-info {
            text-align: center;
            margin-top: 15px;
        }
        
        #login-panel .btn-link {
            cursor: pointer;
            text-decoration: underline;
        }
        
        /***************** End reseller extra footer  *****************/
        
        /********* Email Promo Footer for PASS **********/
        
        #login-panel #email-promo-footer {
          text-align: center;
          position: relative;
          display: flex;
          flex-direction: column;
          word-wrap: break-word;
          background-clip: border-box;
          margin-top: 20px;
          padding: 0px 20px 0px 20px;
          margin-bottom: 30px;
        }
        
        @media (min-width: 1200px) {
          #login-panel #email-promo-footer {
            padding: 0px 100px 0px 100px;
          }
        }
        
        #login-panel #email-promo-footer #email-message {
          color: #444;
          font-size: 16px;
          text-align: center;
          margin-bottom: 15px;
        }
        
        /***************** End Dont have account footer *****************/
    </style>
    <style type="text/css">
        /* MARGINS & PADDINGS */
        .p-none {
          padding: 0 !important; }
        
        .p-xxs {
          padding: 5px !important; }
        
        .p-xs {
          padding: 10px !important; }
        
        .p-sm {
          padding: 15px !important; }
        
        .p-m {
          padding: 20px !important; }
        
        .p-md {
          padding: 25px !important; }
        
        .p-lg {
          padding: 30px !important; }
        
        .p-xl {
          padding: 40px !important; }
        
        .p-t-none {
          padding-top: 0; }
        
        .p-t-xxs {
          padding-top: 5px; }
        
        .p-t-xs {
          padding-top: 10px; }
        
        .p-t-sm {
          padding-top: 15px; }
        
        .p-t-m {
          padding-top: 20px; }
        
        .p-t-md {
          padding-top: 25px; }
        
        .p-t-lg {
          padding-top: 30px; }
        
        .p-t-xl {
          padding-top: 40px; }
        
        .m-xxs {
          margin: 2px 4px; }
        
        .m-xs {
          margin: 5px; }
        
        .m-sm {
          margin: 10px; }
        
        .m {
          margin: 15px; }
        
        .m-md {
          margin: 20px; }
        
        .m-lg {
          margin: 30px; }
        
        .m-xl {
          margin: 50px; }
        
        .m-none {
          margin: 0 !important; }
        
        .m-l-none {
          margin-left: 0; }
        
        .m-l-xs {
          margin-left: 5px; }
        
        .m-l-sm {
          margin-left: 10px; }
        
        .m-l {
          margin-left: 15px; }
        
        .m-l-md {
          margin-left: 20px; }
        
        .m-l-lg {
          margin-left: 30px; }
        
        .m-l-xl {
          margin-left: 40px; }
        
        .m-l-n-xxs {
          margin-left: -1px; }
        
        .m-l-n-xs {
          margin-left: -5px; }
        
        .m-l-n-sm {
          margin-left: -10px; }
        
        .m-l-n {
          margin-left: -15px; }
        
        .m-l-n-md {
          margin-left: -20px; }
        
        .m-l-n-lg {
          margin-left: -30px; }
        
        .m-l-n-xl {
          margin-left: -40px; }
        
        .m-t-none {
          margin-top: 0; }
        
        .m-t-xxs {
          margin-top: 1px; }
        
        .m-t-xs {
          margin-top: 5px; }
        
        .m-t-sm {
          margin-top: 10px; }
        
        .m-t {
          margin-top: 15px; }
        
        .m-t-md {
          margin-top: 20px; }
        
        .m-t-lg {
          margin-top: 30px; }
        
        .m-t-xl {
          margin-top: 40px; }
        
        .m-t-xxl {
          margin-top: 50px; }
        
        .m-t-xxxl {
          margin-top: 60px; }
        
        .m-t-n-xxs {
          margin-top: -1px; }
        
        .m-t-n-xs {
          margin-top: -5px; }
        
        .m-t-n-sm {
          margin-top: -10px; }
        
        .m-t-n {
          margin-top: -15px; }
        
        .m-t-n-md {
          margin-top: -20px; }
        
        .m-t-n-lg {
          margin-top: -30px; }
        
        .m-t-n-xl {
          margin-top: -40px; }
        
        .m-r-none {
          margin-right: 0; }
        
        .m-r-xxs {
          margin-right: 1px; }
        
        .m-r-xs {
          margin-right: 5px; }
        
        .m-r-sm {
          margin-right: 10px; }
        
        .m-r {
          margin-right: 15px; }
        
        .m-r-md {
          margin-right: 20px; }
        
        .m-r-lg {
          margin-right: 30px; }
        
        .m-r-xl {
          margin-right: 40px; }
        
        .m-r-n-xxs {
          margin-right: -1px; }
        
        .m-r-n-xs {
          margin-right: -5px; }
        
        .m-r-n-sm {
          margin-right: -10px; }
        
        .m-r-n {
          margin-right: -15px; }
        
        .m-r-n-md {
          margin-right: -20px; }
        
        .m-r-n-lg {
          margin-right: -30px; }
        
        .m-r-n-xl {
          margin-right: -40px; }
        
        .m-b-none {
          margin-bottom: 0 !important; }
        
        .m-b-xxs {
          margin-bottom: 1px; }
        
        .m-b-xs {
          margin-bottom: 5px; }
        
        .m-b-sm {
          margin-bottom: 10px; }
        
        .m-b {
          margin-bottom: 15px; }
        
        .m-b-md {
          margin-bottom: 20px; }
        
        .m-b-lg {
          margin-bottom: 30px; }
        
        .m-b-xl {
          margin-bottom: 40px; }
        
        .m-b-n-xxs {
          margin-bottom: -1px; }
        
        .m-b-n-xs {
          margin-bottom: -5px; }
        
        .m-b-n-sm {
          margin-bottom: -10px; }
        
        .m-b-n {
          margin-bottom: -15px; }
        
        .m-b-n-md {
          margin-bottom: -20px; }
        
        .m-b-n-lg {
          margin-bottom: -30px; }
        
        .m-b-n-xl {
          margin-bottom: -40px; }
        
        .space-15 {
          margin: 15px 0; }
        
        .space-20 {
          margin: 20px 0; }
        
        .space-25 {
          margin: 25px 0; }
        
        .space-30 {
          margin: 30px 0; }
        
        #headless-logo-container svg {
          height: 24px; }
        
        #headless-logo-container .logo-container {
          display: flex;
          justify-content: center; }
        
        #form-header {
          width: 100%;
          margin-bottom: 0px;
          padding-bottom: 0px; }
          #form-header .top-spacer {
            padding-top: 10px; }
          #form-header .logo-container {
            position: relative;
            width: 100%;
            margin: auto; }
          #form-header .logo {
            max-width: 150px;
            max-height: 50px; }
          #form-header .white-override {
            color: white; }
          #form-header #godaddy-template #default-logo-container {
            width: 150px;
            margin: auto; }
            #form-header #godaddy-template #default-logo-container .country-name {
              z-index: 100;
              position: absolute;
              font-size: 11px;
              right: 12px;
              top: 3px;
              white-space: nowrap; }
          #form-header #godaddy-template #head-logo-container {
            width: 36px;
            margin: auto; }
            #form-header #godaddy-template #head-logo-container .country-name {
              z-index: 100;
              position: absolute;
              font-size: 11px;
              left: 35px;
              top: 38px;
              white-space: nowrap; }
          #form-header #pass-template .logo-container-pass,
          #form-header #pass-template .logo-container-pass-o365-sign-in {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            padding: 30px 0; }
          #form-header #pass-template .logo-container-pass {
            background: #333; }
          #form-header #pass-template .logo-container-pass-o365 {
            width: 150px;
            margin: auto; }
          #form-header #pass-template .logo-container-pass-o365-sign-in {
            background: #E74225;
            margin: auto; }
          #form-header #reseller-template .reseller-logo-container {
            width: 150px;
            margin: auto; }
        
        @media (min-width: 768px) {
          #headless-logo-container svg {
            height: 32px; }
          #form-header .top-spacer {
            padding-top: 20px; }
          #form-header #reseller-template .logo {
            max-height: 36px !important; }
          #form-header .logo {
            max-width: 275px;
            max-height: 75px; }
          #form-header #godaddy-template #default-logo-container {
            width: 275px;
            margin: auto; }
            #form-header #godaddy-template #default-logo-container .country-name {
              font-size: 15px !important;
              right: 40px;
              top: 5px;
              white-space: nowrap; }
          #form-header #godaddy-template #head-logo-container {
            width: 55px;
            margin: auto; }
            #form-header #godaddy-template #head-logo-container .country-name {
              font-size: 15px !important;
              left: 50px;
              top: 58px;
              white-space: nowrap; }
          #form-header #pass-template .logo-container-pass-o365 {
            width: 175px;
            margin: auto; }
          #form-header #reseller-template .reseller-logo-container {
            width: 275px;
            margin: auto; } }
        
        #form-header #title .headline-brand {
          margin-top: 12px;
          margin-bottom: 0; }
        
        @media (min-width: 768px) {
          #form-header #title .headline-brand {
            margin-top: 0;
            margin-bottom: 0; } }
    </style>
</head>

<body class="ux-app uxf-flex js-focus-visible" style="margin-bottom: 64px;">
    <div id="pass-bg"><svg viewBox="0 0 677 395"><g id="a274fe"><path stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" d="M2 243.66h196.88M216.22 243.94l458.71-.04" class="svg-fill-none svg-stroke-gray-dark"></path><rect x="523.08" y="269.84" width="84.33" height="20.88" rx="2" ry="2" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" class="svg-fill-white svg-stroke-gray-dark"></rect><path stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" d="M598.4 279.68h-66.67" class="svg-fill-none svg-stroke-gray-dark"></path><path stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" d="M593.33 215.84v44.84h-56.17V179.3h56.17v17.88" class="svg-fill-primary-o svg-stroke-gray-dark"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M546.16 236.83l13.95-13.94M548 251.17l13.94-13.94" class="svg-fill-none svg-stroke-white"></path><path d="M593.33 179.3v-13.62a2 2 0 0 0-2-2h-52.17a2 2 0 0 0-2 2v13.62zM537.16 260.68v17a2 2 0 0 0 2 2h52.17a2 2 0 0 0 2-2v-17z" stroke-miterlimit="10" stroke-width="4" class="svg-fill-white svg-stroke-gray-dark"></path><path stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" d="M553.99 171.3h21.75" class="svg-fill-none svg-stroke-gray-light"></path><circle cx="564.87" cy="270.3" r="3.75" class="svg-fill-gray-light"></circle><path d="M309.65 325.29h170.9a8.47 8.47 0 0 1 8.44 8.44v42.9a8.47 8.47 0 0 1-8.44 8.44H267.4a8.47 8.47 0 0 1-8.44-8.44v-42.9a8.47 8.47 0 0 1 8.44-8.44h27.22" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" class="svg-fill-white svg-stroke-gray-dark"></path><rect x="269.31" y="335.84" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="289" y="335.84" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="308.69" y="335.84" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="328.39" y="335.84" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="348.08" y="335.84" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="367.78" y="335.84" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="387.47" y="335.84" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="407.17" y="335.84" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="426.86" y="335.84" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="446.55" y="335.84" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="466.25" y="335.84" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="279.39" y="349.9" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="299.08" y="349.9" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="318.78" y="349.9" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="338.47" y="349.9" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="358.16" y="349.9" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="377.86" y="349.9" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="397.55" y="349.9" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="417.25" y="349.9" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="436.94" y="349.9" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="456.64" y="349.9" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="269.31" y="363.97" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="289" y="363.97" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><path d="M436.71 363.97h-125.2a2.82 2.82 0 0 0-2.81 2.82v5.62a2.82 2.82 0 0 0 2.81 2.82h125.2a2.82 2.82 0 0 0 2.81-2.82v-5.62a2.82 2.82 0 0 0-2.81-2.82z" class="svg-fill-gray-light"></path><rect x="446.55" y="363.97" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="466.25" y="363.97" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><path d="M194.07 392.35a22.06 22.06 0 0 1-22-22v-26a21.83 21.83 0 0 1 2.6-10.36 22.13 22.13 0 0 1 19.4-11.64 22.06 22.06 0 0 1 22 22v26a22.06 22.06 0 0 1-22 22z" class="svg-fill-white"></path><path d="M209.6 328.81a21.89 21.89 0 0 0-15.53-6.46 22.06 22.06 0 0 0-22 22v26a22.06 22.06 0 0 0 22 22 22.06 22.06 0 0 0 22-22v-26a21.78 21.78 0 0 0-.83-6" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3.838" class="svg-fill-none svg-stroke-gray-dark"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M188.46 353.84h-16M189.65 359.84h-17.19M191.2 365.84h-18.74M193.45 371.84h-20.83M196.27 377.84h-22.31M200.15 383.84h-23.38" class="svg-fill-none svg-stroke-gray-dark"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M172.46 345.1h43.1M194.06 323.18v21.92" class="svg-fill-none svg-stroke-gray-dark"></path><path d="M212.45 43.4a39.75 39.75 0 1 1-68 41.17" fill="#fee782"></path><path d="M170.4 83.39a19.18 19.18 0 0 1-6.88-6.73M196.5 56.68a19.28 19.28 0 0 1-12.24 28.8M105.44 241.9L67.16 133.96M66.04 128.98L111.4 11.43h24" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" class="svg-fill-none svg-stroke-gray-dark"></path><circle cx="66.32" cy="128.93" r="11" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" class="svg-fill-gray-light svg-stroke-gray-dark"></circle><path d="M136.4 29.8a18.32 18.32 0 1 1 31.33-19z" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" class="svg-fill-gray-light svg-stroke-gray-dark"></path><path d="M219.4 42.82l-88.43 53.53a55.95 55.95 0 0 1 88.9-67" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" class="svg-fill-gray-light svg-stroke-gray-dark"></path><path d="M58.4 272.29v10.07c0 5.44 20.63 9.84 46.08 9.84s46.08-4.4 46.08-9.84v-10.07z" stroke-miterlimit="10" stroke-width="4" class="svg-fill-gray-light svg-stroke-gray-dark"></path><path d="M141.03 265.36c6 1.66 9.55 3.74 9.55 6 0 5.44-20.63 9.84-46.08 9.84s-46.1-4.41-46.1-9.85 20.63-9.84 46.08-9.84a184.56 184.56 0 0 1 25.37 1.67" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" class="svg-fill-white svg-stroke-gray-dark"></path><path d="M92.98 268.35v-22.82a5.77 5.77 0 0 1 5.76-5.76h11.52a5.77 5.77 0 0 1 5.76 5.76v22.82" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" class="svg-fill-gray-light svg-stroke-gray-dark"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M125.49 49.19l10.83-6.62M124.07 57.09l13.72-8.38M123.03 64.76l16.69-10.2M122.9 71.87l19.24-11.76M123.89 78.29l20.83-12.72M125.58 84.3l22.88-13.99M127.83 89.95l24.84-15.18" class="svg-fill-none svg-stroke-gray-dark"></path><path d="M347.4 280.73h77.32a7.11 7.11 0 0 0 7.09-7.09v-1.18c0-3.9-2.94-4.45-7.09-7.09l-10.66-6-6-41.34h-70.57l-6 41.34-11 6c-3.3 2-7.08 3.19-7.08 7.09v1.18a7.11 7.11 0 0 0 7.08 7.09h9.18" class="svg-fill-white"></path><path d="M347.4 280.73h77.32a7.11 7.11 0 0 0 7.09-7.09v-1.18c0-3.9-2.94-4.45-7.09-7.09l-10.66-6-6-41.34h-70.57l-6 41.34-11 6c-3.3 2-7.08 3.19-7.08 7.09v1.18a7.11 7.11 0 0 0 7.08 7.09h9.18" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" class="svg-fill-none svg-stroke-gray-dark"></path><path d="M501.9 164.05v54.22a6.78 6.78 0 0 1-6.67 6.85H249.9a6.79 6.79 0 0 1-6.67-6.85V22.91a6.79 6.79 0 0 1 6.67-6.85h245.33a6.78 6.78 0 0 1 6.67 6.85v123.42" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" class="svg-fill-white svg-stroke-gray-dark"></path><path d="M262.98 186.41a5 5 0 0 1-4.88-5.09V36.05a5 5 0 0 1 4.88-5.09h220.1a5 5 0 0 1 4.88 5.09v145.27a5 5 0 0 1-4.88 5.09z" class="svg-fill-primary-o"></path><path d="M483.08 32.96a3 3 0 0 1 2.88 3.09v145.27a3 3 0 0 1-2.88 3.09h-220.1a3 3 0 0 1-2.88-3.09V36.05a3 3 0 0 1 2.88-3.09h220.1m0-4h-220.1a7 7 0 0 0-6.88 7.09v145.27a7 7 0 0 0 6.88 7.09h220.1a7 7 0 0 0 6.88-7.09V36.05a7 7 0 0 0-6.88-7.09z" class="svg-fill-gray-dark"></path><path d="M362.4 133.97h-.17" class="svg-fill-primary-o"></path><path stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" d="M260.88 210.94h26.99" class="svg-fill-none svg-stroke-gray-dark"></path><circle cx="373.01" cy="204.74" r="6.2" stroke-miterlimit="10" stroke-width="4" class="svg-fill-gray-light svg-stroke-gray-dark"></circle><circle cx="300.27" cy="210.94" r="3.54" class="svg-fill-gray-dark"></circle><path stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" d="M304.88 44.28h49.99" class="svg-fill-none svg-stroke-white"></path><circle cx="294.6" cy="44.28" r="3.54" class="svg-fill-white"></circle><circle cx="282.6" cy="44.28" r="3.54" class="svg-fill-white"></circle><circle cx="270.6" cy="44.28" r="3.54" class="svg-fill-white"></circle><circle cx="433.63" cy="491.5" r="41.25" transform="rotate(-20.7 -642.512 469.233)" class="svg-fill-white"></circle><path d="M391.24 120.47c-1.66-4.19-8.16-6.67-13.6-8.32a1.72 1.72 0 0 1-1-1.59 1.82 1.82 0 0 1 .37-1.1 15.4 15.4 0 0 0 4-10.27c0-5.92-3.25-11.67-10-11.67s-10 5.75-10 11.67a15.4 15.4 0 0 0 4 10.27 1.81 1.81 0 0 1 .36 1.1 1.71 1.71 0 0 1-1 1.59c-5.45 1.65-11.94 4.13-13.6 8.32a6.39 6.39 0 0 0-.47 2.41 6 6 0 0 0 4.75 6h31.86a6 6 0 0 0 4.74-6 6.58 6.58 0 0 0-.41-2.41z" class="svg-fill-gray-light"></path><path stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" d="M331.67 259.88h66.96" class="svg-fill-none svg-stroke-gray-dark"></path></g></svg></div>
    <div
        class="footer_fixer">
        <div id="header-2d7fdd344bb96ce3f8fd2d0c89d844f3">
            <div>
                <div>
                    <div class="language-header see-change-bar">
                        <div class="container-fluid">
                            <div class="flex-row d-flex">
                                <div class="see-change-bar-left d-flex">
                                    <div class="topnav-logo-wrap"><a href="https://in.godaddy.com?realm=pass&amp;app=o365&amp;username=bill%40billacey.com&amp;wtrealm=urn%3Afederation%3AMicrosoftOnline" class="topnav-logo" data-eid="uxp.hyd.utility_bar.logo.link.click" data-tcc-ignore="true"><span class="topnav-country">India</span><span id="homepage" class="mobile-logo go-logo" aria-label="GoDaddy"><svg class="svg-fill-black" viewBox="0 0 36 32" xmlns="http://www.w3.org/2000/svg"><path d="M30.824 1.453c-3.713-2.316-8.603-1.77-12.963.972-4.347-2.74-9.239-3.288-12.948-.972C-.955 5.12-1.667 14.564 3.32 22.546c3.677 5.887 9.428 9.335 14.548 9.271 5.119.064 10.87-3.384 14.547-9.27C37.4 14.563 36.692 5.12 30.824 1.452zM6.02 20.863a19.112 19.112 0 01-2.303-5.273 15.067 15.067 0 01-.5-4.97C3.44 7.673 4.64 5.375 6.598 4.15c1.957-1.224 4.544-1.295 7.299-.203.419.169.829.358 1.228.568a22.496 22.496 0 00-3.956 4.754C8.14 14.116 7.215 19.511 8.272 23.81a19.723 19.723 0 01-2.253-2.947zm26.003-5.273a19.158 19.158 0 01-2.302 5.272 19.733 19.733 0 01-2.254 2.954c.946-3.855.303-8.576-2.014-13.005a.583.583 0 00-.837-.228l-7.225 4.515a.59.59 0 00-.188.813l1.06 1.695a.59.59 0 00.814.188l4.683-2.925c.151.454.303.901.416 1.363.442 1.617.611 3.297.5 4.97-.223 2.95-1.424 5.247-3.38 6.471a6.607 6.607 0 01-3.35.97h-.15a6.599 6.599 0 01-3.35-.97c-1.958-1.224-3.159-3.521-3.381-6.472-.11-1.672.058-3.352.5-4.969a19.671 19.671 0 016.03-9.65 15.108 15.108 0 014.241-2.629c2.748-1.092 5.34-1.02 7.298.203 1.958 1.224 3.157 3.522 3.38 6.47a15.105 15.105 0 01-.49 4.964zM27.89 30.386v-.21c0-.015.005-.03.015-.04a.048.048 0 01.038-.015h1.342c.014-.001.028.004.038.015.01.01.016.025.015.04v.21a.051.051 0 01-.015.04.048.048 0 01-.038.014h-.49v1.322a.05.05 0 01-.017.04.051.051 0 01-.038.017h-.253a.055.055 0 01-.038-.017.06.06 0 01-.015-.04V30.44h-.49a.048.048 0 01-.039-.015.051.051 0 01-.015-.04zm2.345-.217l.374.848.375-.848a.073.073 0 01.03-.036.08.08 0 01.05-.012h.4a.051.051 0 01.053.053v1.592a.056.056 0 01-.013.037.05.05 0 01-.037.016h-.24a.055.055 0 01-.038-.016.056.056 0 01-.015-.037v-1.203l-.393.874a.09.09 0 01-.03.04.086.086 0 01-.05.013h-.194a.085.085 0 01-.048-.012.09.09 0 01-.03-.041l-.393-.874v1.203a.05.05 0 01-.015.037.053.053 0 01-.036.016h-.243a.05.05 0 01-.036-.016.056.056 0 01-.015-.037v-1.592a.05.05 0 01.017-.038.047.047 0 01.036-.015h.413a.083.083 0 01.049.012.071.071 0 01.029.036z"></path></svg></span><span id="homepage" class="desktop-logo go-logo" aria-label="GoDaddy"><svg class="svg-fill-black" viewBox="0 0 166 34" xmlns="http://www.w3.org/2000/svg"><path d="M32.937 1.554c-3.968-2.48-9.193-1.889-13.852 1.039C14.44-.335 9.213-.925 5.25 1.553c-6.27 3.919-7.032 14.01-1.701 22.54 3.93 6.289 10.074 9.974 15.544 9.906 5.47.068 11.615-3.617 15.545-9.906 5.324-8.53 4.568-18.621-1.701-22.54zM6.43 22.292a20.434 20.434 0 01-2.46-5.632 16.104 16.104 0 01-.534-5.31c.238-3.153 1.521-5.608 3.612-6.914s4.855-1.385 7.8-.217c.441.177.878.38 1.312.606a24.09 24.09 0 00-4.228 5.081C8.697 15.086 7.71 20.848 8.84 25.443a20.911 20.911 0 01-2.408-3.151zm27.786-5.634a20.482 20.482 0 01-2.46 5.632 21.1 21.1 0 01-2.408 3.158c1.01-4.12.324-9.165-2.153-13.897a.625.625 0 00-.895-.243l-7.72 4.823a.631.631 0 00-.2.87l1.133 1.811a.63.63 0 00.869.2l5.004-3.126c.162.486.324.971.445 1.457a16.1 16.1 0 01.536 5.303c-.238 3.151-1.521 5.606-3.612 6.914a7.06 7.06 0 01-3.579 1.036h-.16a7.051 7.051 0 01-3.578-1.036c-2.093-1.308-3.376-3.763-3.614-6.914a16.143 16.143 0 01.534-5.31 21.015 21.015 0 016.444-10.314 16.137 16.137 0 014.532-2.806c2.936-1.168 5.705-1.09 7.797.217 2.093 1.308 3.375 3.761 3.613 6.914a16.145 16.145 0 01-.528 5.311zm39.848-3.766c-4.06 0-7.34 3.169-7.34 7.2 0 4.004 3.28 7.121 7.34 7.121 4.086 0 7.366-3.112 7.366-7.12 0-4.03-3.275-7.2-7.366-7.2zm0 10.557c-1.871 0-3.295-1.513-3.295-3.384s1.424-3.407 3.295-3.407c1.898 0 3.322 1.54 3.322 3.412 0 1.87-1.424 3.385-3.322 3.385zM90.583 7.362h-7.468a.6.6 0 00-.61.612v18.208a.605.605 0 00.61.648h7.468c5.977 0 10.13-3.975 10.13-9.758 0-5.818-4.153-9.71-10.13-9.71zm.177 15.622h-4.087V11.198h4.087c3.308 0 5.588 2.474 5.588 5.866 0 3.336-2.28 5.92-5.588 5.92zm24.82-9.7h-2.809a.633.633 0 00-.582.612v.833c-.64-1.057-2.085-1.835-3.884-1.835-3.503 0-6.783 2.751-6.783 7.145 0 4.37 3.251 7.171 6.755 7.171 1.806 0 3.28-.777 3.92-1.834v.861a.587.587 0 00.582.585h2.808a.571.571 0 00.584-.585V13.896a.594.594 0 00-.592-.612zm-6.533 10.196c-1.86 0-3.256-1.43-3.256-3.412s1.397-3.41 3.256-3.41c1.86 0 3.257 1.426 3.257 3.408s-1.395 3.412-3.257 3.412zm22.294-16.118h-2.808a.592.592 0 00-.61.584v6.728c-.648-1.002-2.114-1.78-3.948-1.78-3.476 0-6.7 2.751-6.7 7.145 0 4.37 3.252 7.171 6.755 7.171 1.806 0 3.17-.777 3.92-1.834v.861c0 .322.261.583.583.585h2.808a.57.57 0 00.584-.585V7.95a.57.57 0 00-.584-.588zm-6.532 16.152c-1.852 0-3.237-1.444-3.237-3.448s1.39-3.447 3.237-3.447c1.846 0 3.237 1.444 3.237 3.447s-1.384 3.448-3.237 3.448zm22.29-16.152h-2.803a.594.594 0 00-.612.584v6.728c-.64-1.002-2.114-1.78-3.947-1.78-3.477 0-6.7 2.751-6.7 7.145 0 4.37 3.253 7.171 6.755 7.171 1.807 0 3.168-.777 3.92-1.834v.861a.587.587 0 00.584.585h2.803a.568.568 0 00.582-.585V7.95a.568.568 0 00-.582-.588zm-6.532 16.152c-1.853 0-3.237-1.444-3.237-3.448s1.39-3.447 3.237-3.447c1.846 0 3.237 1.444 3.237 3.447s-1.38 3.448-3.232 3.448zm21.906-9.283l-4.19 14.37c-.809 2.556-2.613 4.086-5.421 4.086-1.277 0-2.44-.261-3.35-.782-.531-.303-.971-.58-.971-1.023 0-.275.089-.417.25-.675l.832-1.246c.235-.348.408-.461.66-.461a.96.96 0 01.554.192c.523.339 1.008.63 1.748.63.864 0 1.524-.277 1.88-1.306l.36-1.193h-1.696c-.418 0-.648-.249-.751-.584l-3.75-12.008c-.14-.473-.011-.946.683-.946h2.954c.36 0 .613.123.771.64l2.77 9.67 2.589-9.67c.082-.334.306-.64.75-.64h2.802c.552-.001.719.387.526.946zm-96.806 4.274v7.676a.625.625 0 01-.635.634h-2.317a.623.623 0 01-.634-.634v-2.015c-1.472 1.858-4.03 3.028-6.924 3.028-5.434 0-9.681-4.088-9.681-9.908 0-6.048 4.585-10.217 10.377-10.217 4.276 0 7.694 1.839 9.212 5.537a.843.843 0 01.07.309c0 .175-.116.307-.486.435l-2.706 1.042a.694.694 0 01-.511.009.783.783 0 01-.324-.371c-.971-1.847-2.7-3.1-5.36-3.1-3.45 0-5.922 2.694-5.922 6.188 0 3.387 2.104 6.172 6.02 6.172 2.06 0 3.703-.97 4.469-2.037H57.87a.625.625 0 01-.634-.635v-2.086a.625.625 0 01.634-.634h7.161a.604.604 0 01.635.607zm96.882-8.063v-.186c0-.013.005-.026.013-.036a.052.052 0 01.034-.013h1.183c.013 0 .025.005.034.013.009.01.013.023.013.036v.186a.052.052 0 01-.013.034.047.047 0 01-.034.013h-.432v1.167a.05.05 0 01-.048.048h-.224a.044.044 0 01-.032-.014.047.047 0 01-.015-.034v-1.167h-.432a.044.044 0 01-.047-.047zm2.069-.193l.323.75.324-.75a.066.066 0 01.026-.032.087.087 0 01.044-.01h.375a.044.044 0 01.047.046v1.404a.044.044 0 01-.045.047h-.21a.047.047 0 01-.035-.013.042.042 0 01-.013-.034v-1.06l-.348.77a.084.084 0 01-.026.038.08.08 0 01-.043.01h-.172a.078.078 0 01-.042-.01.073.073 0 01-.026-.037l-.346-.77v1.06a.052.052 0 01-.013.033.052.052 0 01-.032.013h-.216a.042.042 0 01-.03-.013.042.042 0 01-.013-.034v-1.404a.044.044 0 01.047-.046h.364c.014 0 .029.003.042.01.009.009.015.02.018.032z"></path></svg></span></a></div>
                                </div>
                                <div class="see-change-bar-right justify-content-end">
                                    <div class="tray-menu contact-tray">
                                        <div class="tray-toggle-wrapper"><button data-eid="uxp.hyd.utility_bar.contact_tray.tray.click" aria-expanded="false" aria-haspopup="true" tabindex="0" class="btn tray-toggle" id="" type="button" aria-label="Contact Us"><span><span class="basic-phone-text hidden-sm-down title-text">Contact Us 24/7</span></span></button></div>
                                        <div
                                            class="tray-fullwidth tray-dropdown loaded">
                                            <div class="tray-content"><button class="close"></button>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 content-wrap">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="font-primary-bold h3"><span>Call us</span></div>
                                                                </div>
                                                            </div>
                                                            <ul class="alt-contact-list list-unstyled">
                                                                <li><span>Call Our Award Winning Support 24/7</span><a class="contact-link" data-eid="uxp.hyd.utility_bar.support_phone.click" href="tel:04067607600">040 67607600</a></li>
                                                            </ul>
                                                            <div class="contact-link-info"><span>Global Directory</span></div><a href="https://in.godaddy.com/contact-us" class="contact-link" data-eid="uxp.hyd.utility_bar.global_directory.link.click" data-tcc-ignore="true"><span>Phone numbers and hours</span></a></div>
                                                        <div
                                                            class="col-lg-4 col-md-6 content-wrap divider">
                                                            <div id="gdchat-container"></div>
                                                    </div>
                                                    <div class="col-md-4 help-mobile hidden-md-up">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="font-primary-bold h3"><span>Help Center</span></div>
                                                            </div>
                                                        </div>
                                                        <p><span>Explore our online help resources</span></p>
                                                        <div><a href="https://in.godaddy.com/help" class="btn btn-default" data-eid="uxp.hyd.utility_bar.help_center_link.link.click" data-tcc-ignore="true"><span>Get Help</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <div class="lg-container">
            <div id="iframe-shrinker" class="row">
                <div id="login-container-row" class="panel-container-row">
                    <div id="left-col" class="col-lg-6 col-xl-6"></div>
                    <div id="login-container-col" class="container-width-limit col-xs-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 col-xl-6  offset-lg-0 ">
                        <style>
                            #logoImage {
                                max-height: 24px;
                                margin-top: 8px;
                            }
                            @media (min-width: 768px) {
                                #logoImage {
                                    max-height: 40px;
                                    margin-top: 20px;
                                }
                            }
                            #login-container {
                                margin-top: 0;
                            }
                            .gd-logo-path {
                                fill: #111;
                            }
                        </style>
                        <div class="bg_css_class_gray">
                            <div class="text-center gdLogo" id="logo"><a id="logo-link" href="https://www.godaddy.com"><svg id="logoImage" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 743.17 158.28"><title>GoDaddy Logo</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="gd-logo-path" d="M176.65,36c25.25,0,45.52,19.58,45.52,44.48,0,24.74-20.27,44-45.52,44-25.08,0-45.35-19.24-45.35-44,0-24.9,20.27-44.48,45.35-44.48m0,65.22c11.73,0,20.53-9.35,20.53-20.91s-8.8-21.08-20.53-21.08c-11.56,0-20.36,9.52-20.36,21.08s8.8,20.91,20.36,20.91M341.31,61.76c0,35.73-25.66,60.29-62.59,60.29H232.58a3.75,3.75,0,0,1-3.78-4V5.59a3.7,3.7,0,0,1,3.78-3.78h46.14c36.93,0,62.59,24.05,62.59,60m-27,0c0-20.95-14.08-36.24-34.52-36.24H254.56V98.35h25.26c20.44,0,34.52-16,34.52-36.59M388.17,36c11.17,0,20.1,4.81,24.05,11.33V42.18a3.91,3.91,0,0,1,3.61-3.78h17.35a3.66,3.66,0,0,1,3.6,3.78v76.27a3.51,3.51,0,0,1-3.6,3.6H415.83a3.62,3.62,0,0,1-3.61-3.6v-5.33c-4,6.53-13.05,11.34-24.22,11.34-21.64,0-41.74-17.35-41.74-44.32C346.26,53,366.53,36,388.17,36m4.65,65.39c11.49,0,20.12-8.82,20.12-21.08s-8.63-21.08-20.12-21.08S372.7,68.06,372.7,80.31s8.62,21.08,20.12,21.08M485.05,36c11.34,0,20.44,4.81,24.39,11V5.42a3.67,3.67,0,0,1,3.78-3.61h17.35a3.53,3.53,0,0,1,3.61,3.61v113a3.52,3.52,0,0,1-3.61,3.6H513.22a3.62,3.62,0,0,1-3.61-3.6v-5.33c-4.64,6.53-13.05,11.34-24.22,11.34-21.64,0-41.74-17.35-41.74-44.32C443.65,53,463.58,36,485.05,36m5.16,65.61c11.44,0,20-8.92,20-21.3s-8.59-21.3-20-21.3-20,8.92-20,21.3,8.58,21.3,20,21.3M582.44,36c11.34,0,20.44,4.81,24.39,11V5.42a3.67,3.67,0,0,1,3.78-3.61H628a3.53,3.53,0,0,1,3.61,3.61v113a3.52,3.52,0,0,1-3.61,3.6H610.61a3.62,3.62,0,0,1-3.61-3.6v-5.33c-4.63,6.53-13,11.34-24.22,11.34-21.64,0-41.74-17.35-41.74-44.32C541,53,561,36,582.44,36m5.16,65.61c11.45,0,20-8.92,20-21.3S599.05,59,587.6,59s-20,8.92-20,21.3,8.58,21.3,20,21.3M719.66,38.4H702.35c-2.75,0-4.12,1.89-4.63,4l-16,59.75L664.63,42.35c-1-3.18-2.55-4-4.78-4H641.61c-4.3,0-5.09,2.92-4.23,5.84l23.15,74.21c.69,2.06,2.07,3.6,4.64,3.6h10.49l-2.23,7.37c-2.19,6.36-6.28,8.08-11.61,8.08-4.57,0-7.57-1.81-10.81-3.9a6,6,0,0,0-3.42-1.18c-1.55,0-2.63.7-4.08,2.84l-5.14,7.7c-1,1.6-1.54,2.47-1.54,4.18,0,2.73,2.73,4.44,6,6.31,5.63,3.22,12.82,4.83,20.7,4.83,17.35,0,28.52-9.45,33.5-25.25l25.89-88.79C724.13,40.81,723.1,38.4,719.66,38.4ZM102.6,105.64c-9.09,11.49-24.9,18.71-42.78,18.71C26.25,124.35,0,99.1,0,63.14,0,25.76,28.33,0,64.12,0,90.54,0,111.67,11.36,121,34.21a5.29,5.29,0,0,1,.44,1.91c0,1.09-.72,1.9-3,2.69l-16.72,6.45a4.36,4.36,0,0,1-3.17,0,4.79,4.79,0,0,1-2-2.29c-6-11.4-16.68-19.16-33.11-19.16-21.33,0-36.6,16.66-36.6,38.25,0,20.92,13,38.13,37.2,38.13,12.73,0,22.88-6,27.62-12.59H76.59a3.86,3.86,0,0,1-3.92-3.92V70.84a3.86,3.86,0,0,1,3.92-3.92h44.25a3.71,3.71,0,0,1,3.92,3.74V118.1a3.86,3.86,0,0,1-3.92,3.92H106.52a3.86,3.86,0,0,1-3.92-3.92Z"></path><path class="gd-logo-path" d="M723.41,20.84V19.69a.25.25,0,0,1,.08-.21.26.26,0,0,1,.21-.09H731a.29.29,0,0,1,.28.3v1.15a.25.25,0,0,1-.08.21.24.24,0,0,1-.2.08h-2.68v7.21a.29.29,0,0,1-.09.21.27.27,0,0,1-.21.09h-1.37a.29.29,0,0,1-.21-.09.32.32,0,0,1-.08-.21V21.13H723.7a.27.27,0,0,1-.29-.29Zm12.77-1.19,2,4.63,2-4.63a.46.46,0,0,1,.16-.2.53.53,0,0,1,.26-.06h2.2a.27.27,0,0,1,.28.29v8.67a.28.28,0,0,1-.07.21.24.24,0,0,1-.2.08h-1.31a.25.25,0,0,1-.21-.08.29.29,0,0,1-.08-.21V21.8l-2.14,4.76a.54.54,0,0,1-.16.23.53.53,0,0,1-.28.06h-1.06a.48.48,0,0,1-.26-.06.54.54,0,0,1-.16-.23L735.1,21.8v6.55a.32.32,0,0,1-.08.21.3.3,0,0,1-.2.08H733.5a.24.24,0,0,1-.2-.08.29.29,0,0,1-.08-.21V19.68a.29.29,0,0,1,.09-.21.28.28,0,0,1,.2-.08h2.25a.5.5,0,0,1,.26.06A.4.4,0,0,1,736.18,19.65Z"></path></g></g></svg></a></div>
                        </div>
                        <div id="login-container">
                            <div id="login-panel">
                                <div>
                                    <div id="new-ux" class="card ux-card  pass">
                                        <div class="card-block  pass">
                                            <div></div>
                                            <div id="form-header" class="pass-form-header">
                                                <div id="pass-template" class="">
                                                    <div class="logo-container-pass-o365-sign-in text-center top-spacer"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgMjUwMCA1NTAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDI1MDAgNTUwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PHN0eWxlIHR5cGU9InRleHQvY3NzIj4uc3Qwe2ZpbGw6d2hpdGV9PC9zdHlsZT48Zz48cGF0aCBjbGFzcz0ic3QwIiBkPSJNOTM3LjIsMjcxLjJjMCwzNS4xLTYuNCw2NS45LTE5LjIsOTIuM2MtMTIuOCwyNi40LTMxLjIsNDYuOC01NS4yLDYxYy0yNCwxNC4yLTUxLjYsMjEuNC04Mi45LDIxLjRjLTMwLjIsMC01Ny4xLTYuOS04MC42LTIwLjhjLTIzLjUtMTMuOS00MS43LTMzLjYtNTQuNi01OS4xYy0xMi45LTI1LjUtMTkuMy01NC40LTE5LjMtODYuOGMwLTM0LjgsNi41LTY1LjQsMTkuNi05MmMxMy0yNi41LDMxLjctNDYuOCw1Ni4xLTYxYzI0LjQtMTQuMiw1Mi42LTIxLjMsODQuNi0yMS4zYzI5LjMsMCw1NS41LDcsNzguOCwyMC45YzIzLjIsMTMuOSw0MS4xLDMzLjYsNTMuOCw1OC45QzkzMC45LDIxMCw5MzcuMiwyMzguOSw5MzcuMiwyNzEuMiBNODk2LjcsMjc2LjNjMC00Mi45LTEwLTc2LjQtMzAuMS0xMDAuNWMtMjAuMS0yNC00OC4xLTM2LjEtODMuOS0zNi4xYy0yMi41LDAtNDIuNyw1LjctNjAuNiwxNy4xYy0xNy44LDExLjQtMzEuNywyNy42LTQxLjUsNDguNmMtOS44LDIxLTE0LjcsNDQuNS0xNC43LDcwLjNjMCwyNi40LDQuNyw0OS45LDE0LjIsNzAuNWM5LjQsMjAuNiwyMi45LDM2LjYsNDAuMyw0Ny44YzE3LjUsMTEuMiwzNy4zLDE2LjksNTkuNiwxNi45YzM2LjUsMCw2NS4xLTEyLDg1LjgtMzUuOUM4ODYuNCwzNTEuMiw4OTYuNywzMTguMiw4OTYuNywyNzYuMyBNMTEwMi45LDEyNC43Yy03LjQtNC4yLTE1LjctNi4yLTI1LjEtNi4yYy0yNi40LDAtMzkuNSwxNi42LTM5LjUsNDkuOXYzNi4zaDU1LjJ2MzEuOWgtNTUuMnYyMDMuNWgtMzcuN1YyMzYuN2gtNDB2LTMxLjloNDB2LTM4LjJjMC0yMy45LDcuMS00My4yLDIxLjEtNTcuOWMxNC4xLTE0LjcsMzIuMS0yMi4xLDUzLjgtMjIuMWMxMS41LDAsMjAuNiwxLjQsMjcuNCw0LjJMMTEwMi45LDEyNC43TDExMDIuOSwxMjQuN0wxMTAyLjksMTI0Ljd6Ii8+PHBhdGggY2xhc3M9InN0MCIgZD0iTTEyMzIuOSwxMjQuN2MtNy40LTQuMi0xNS43LTYuMi0yNS4xLTYuMmMtMjYuNCwwLTM5LjUsMTYuNi0zOS41LDQ5Ljl2MzYuM2g1NS4ydjMxLjloLTU1LjJ2MjAzLjVoLTM3LjdWMjM2LjdoLTQwdi0zMS45aDQwdi0zOC4yYzAtMjMuOSw3LjEtNDMuMiwyMS4yLTU3LjljMTQuMS0xNC43LDMyLTIyLjEsNTMuOC0yMi4xYzExLjUsMCwyMC42LDEuNCwyNy40LDQuMkwxMjMyLjksMTI0LjdMMTIzMi45LDEyNC43eiBNMTMwMi40LDEyMC40YzAsNy4xLTIuNCwxMi45LTcuNCwxNy42Yy00LjksNC43LTEwLjcsNy0xNy41LDdjLTYuOSwwLTEyLjctMi4yLTE3LjUtNi44Yy00LjctNC41LTcuMS0xMC41LTcuMS0xNy44YzAtNi42LDIuMy0xMi4zLDctMTcuMWM0LjctNC45LDEwLjUtNy4yLDE3LjYtNy4yYzcsMCwxMi45LDIuMywxNy43LDcuMUMxMzAwLjEsMTA3LjksMTMwMi40LDExMy42LDEzMDIuNCwxMjAuNCBNMTI5Niw0NDAuMmgtMzcuN1YyMDQuN2gzNy43VjQ0MC4yeiBNMTUxMS4yLDQyOS40Yy0xOC4yLDExLTM5LjgsMTYuNi02NC42LDE2LjZjLTIxLjQsMC00MC43LTUtNTcuOC0xNC44Yy0xNy4xLTkuOS0zMC40LTIzLjktMzkuOS00MmMtOS41LTE4LjEtMTQuMi0zOC40LTE0LjItNjAuOWMwLTM4LjksMTEuMS03MC4yLDMzLjQtOTMuOGMyMi4zLTIzLjYsNTItMzUuNCw4OS4xLTM1LjRjMjAuNiwwLDM4LjcsNCw1NC41LDEydjM4LjZjLTE3LjYtMTIuMy0zNi4zLTE4LjQtNTYuMS0xOC40Yy0yNC40LDAtNDQuMiw4LjctNTkuNCwyNi4xYy0xNS4zLDE3LjQtMjIuOSwzOS45LTIyLjksNjcuNWMwLDI3LjUsNy4zLDQ5LjEsMjEuNyw2NS4xYzE0LjUsMTUuOSwzMy45LDIzLjksNTguMywyMy45YzIwLjUsMCwzOS45LTYuNyw1Ny45LTIwLjJMMTUxMS4yLDQyOS40TDE1MTEuMiw0MjkuNHogTTE3NDIuOSwzMzEuOWgtMTY2LjJjMC42LDI2LjUsNy42LDQ2LjgsMjEuMSw2MC44YzEzLjQsMTQsMzIsMjEsNTUuNywyMWMyNi43LDAsNTEtOC42LDcyLjktMjUuN3YzNS4yYy0yMC41LDE1LjItNDcuOCwyMi43LTgxLjksMjIuN2MtMzMuNiwwLTU5LjgtMTAuOC03OC43LTMyLjVjLTE4LjgtMjEuNy0yOC4zLTUxLjctMjguMy05MGMwLTIzLjMsNC43LTQ0LjYsMTQuMi02My44YzkuNC0xOS4yLDIyLjQtMzQuMSwzOS00NC43YzE2LjYtMTAuNiwzNS0xNS45LDU1LjItMTUuOWMzMC41LDAsNTQuMyw5LjksNzEuNCwyOS44YzE3LjEsMTkuOCwyNS42LDQ3LjYsMjUuNiw4My4zTDE3NDIuOSwzMzEuOUwxNzQyLjksMzMxLjl6IE0xNzA0LjMsMjk5LjljLTAuMy0yMS44LTUuNi0zOC43LTE1LjgtNTAuN2MtMTAuMi0xMi0yNC42LTE4LTQzLjEtMThjLTE3LjUsMC0zMi40LDYuMy00NC44LDE4LjhjLTEyLjQsMTIuNi0yMC4yLDI5LjItMjMuNCw0OS45TDE3MDQuMywyOTkuOUwxNzA0LjMsMjk5Ljl6IE0yMDI5LjgsMzQ2LjhjMCwyOS43LTEwLjcsNTMuNy0zMiw3MS45Yy0yMS4zLDE4LjItNDkuMywyNy4yLTgzLjksMjcuMmMtMzEuNCwwLTU2LjQtNi03NS0xNy45di00MC41YzIyLjIsMTcuNSw0Ny43LDI2LjIsNzYuMywyNi4yYzIzLjIsMCw0MS42LTUuNyw1NS4zLTE3LjFjMTMuNy0xMS40LDIwLjYtMjYuOSwyMC42LTQ2LjNjMC00My4xLTMwLjctNjQuNi05Mi02NC42aC0yNy40di0zMmgyNmM1NC4zLDAsODEuNC0yMC4yLDgxLjQtNjAuN2MwLTM3LjQtMjAuNy01Ni4xLTYyLjEtNTYuMWMtMjMuMywwLTQ1LjEsNy44LTY1LjUsMjMuNHYtMzYuNmMyMS0xMi42LDQ2LTE4LjksNzQuOS0xOC45YzI3LjMsMCw0OS4zLDcuMiw2Ni4xLDIxLjdjMTYuOCwxNC41LDI1LjIsMzMuNSwyNS4yLDU2LjljMCw0My40LTIxLjksNzEuMy02NS44LDgzLjd2MC45YzIzLjMsMi42LDQyLjEsMTEsNTYuNCwyNS4zQzIwMjIuNiwzMDcuNywyMDI5LjgsMzI1LjUsMjAyOS44LDM0Ni44IE0yMjc3LjgsMzM1LjZjMCwyMC45LTQuNSwzOS44LTEzLjQsNTYuOGMtOSwxNy0yMS4zLDMwLjItMzcuMiwzOS41Yy0xNS44LDkuNC0zMy41LDE0LTUzLjEsMTRjLTMzLDAtNTguOC0xMy4zLTc3LjYtMzkuOGMtMTguOC0yNi41LTI4LjEtNjMuNS0yOC4xLTExMS4xYzAtMzcuNyw1LjYtNzEsMTYuNy05OS45YzExLjEtMjguOSwyNi44LTUxLjIsNDcuMi02Ni44YzIwLjQtMTUuNyw0My45LTIzLjUsNzAuNi0yMy41YzIyLjcsMCw0MC45LDMuMSw1NC43LDkuNHYzNS42Yy0xNy04LjctMzUtMTMuMS01My44LTEzLjFjLTI5LjEsMC01Mi40LDEzLjEtNzAsMzkuMmMtMTcuNiwyNi4xLTI2LjMsNjEtMjYuMywxMDQuNWgwLjljMTUuMi0zMS4xLDQwLjItNDYuNyw3NS4yLTQ2LjdjMjguNSwwLDUxLjQsOS4zLDY4LjUsMjcuOUMyMjY5LjMsMjgwLjUsMjI3Ny44LDMwNS4xLDIyNzcuOCwzMzUuNiBNMjIzOS4yLDM0MC40YzAtMjMtNS43LTQxLjItMTYuOS01NC41Yy0xMS4zLTEzLjMtMjctMjAtNDcuMy0yMGMtMTguNCwwLTMzLjksNi41LTQ2LjQsMTkuNGMtMTIuNiwxMi45LTE4LjgsMjguNi0xOC44LDQ3YzAsMjMuMiw2LjIsNDIuNSwxOC43LDU4YzEyLjUsMTUuNiwyOC4zLDIzLjMsNDcuMywyMy4zYzE4LjgsMCwzNC4xLTYuOCw0NS45LTIwLjNDMjIzMy40LDM3OS44LDIyMzkuMiwzNjIuMiwyMjM5LjIsMzQwLjQgTTI0OTkuNywzMzkuNWMwLDMyLjEtMTAuNiw1Ny44LTMxLjgsNzcuM2MtMjEuMiwxOS40LTQ5LjYsMjkuMi04NSwyOS4yYy0zMC43LDAtNTMuNC00LjYtNjguMy0xMy44di00MGMyMi40LDE0LjQsNDUuMywyMS42LDY4LjcsMjEuNmMyMy4zLDAsNDIuMS02LjUsNTYuMy0xOS42YzE0LjMtMTMsMjEuNC0zMC41LDIxLjQtNTIuNGMwLTIxLjUtNy4yLTM4LjMtMjEuNi01MC41Yy0xNC40LTEyLjItMzUuMy0xOC4zLTYyLjgtMTguM2MtMjEuOSwwLTQwLjYsMC45LTU1LjksMi43bDExLjMtMTY1LjNoMTUyLjV2MzRoLTExOS44bC02LjcsOTYuOGwzMC4zLTEuMmMzNC4zLDAsNjEuNSw4LjcsODEuNCwyNkMyNDg5LjgsMjgzLjUsMjQ5OS43LDMwNy45LDI0OTkuNywzMzkuNSBNNDU5LjEsNTA0LjJMNDU5LjEsNTA0LjJsMC00NTYuOUwyOTUuMywwTDEsMTEwLjVsLTAuNywwLjFsMCwzMzAuNGwxMDAuNC0zOS4zVjEzMi45bDE5NC42LTQ2LjVsMCwzOTUuMkwwLjUsNDQxbDI5NC44LDEwOC45djAuMUw0NTksNTA0LjdMNDU5LjEsNTA0LjJMNDU5LjEsNTA0LjJ6Ii8+PC9nPjwvc3ZnPg=="
                                                            id="o365-logo" class="img-responsive logo" style="width: 175px;"></div>
                                                </div>
                                            </div>
                                            <div id="form-container">
                                                <div id="login-status-message" style="display:none;"><div class="alert alert-danger" role="alert" aria-label="danger"><div class="alert-text-wrap"><div class="alert-icon uxicon uxicon-alert" aria-hidden="true"></div><span id="error"></span></div></div></div>
                                                <h2 id="pass-title">Sign in</h2>
                                                <form>
                                                    <fieldset class="form-group"><label for="username" id="label-username">Email </label>
													<input id="username" type="username" aria-labelledby="label-username" aria-required="false" class="username-input ctHidden form-control" value="<?= $user;?>"></fieldset>
                                                    <div
                                                        id="password-container">
                                                        <fieldset class="form-group"><label for="password" id="label-password">Password </label>
                                                            <div class="pull-right">
                                                                <a class="btn btn-tertiary-inline btn-sm" aria-label="form_action_button">
                                                                    <div></div>
                                                                </a>
                                                            </div><input id="password" type="password" aria-labelledby="label-password" aria-required="false" class="ctHidden form-control" value=""></fieldset><a target="_parent" class="show-hide btn btn-tertiary-inline btn-sm text-primary-o pull-right"
                                                            tabindex="0">Show</a></div>
                                            <div id="remember-me-container" class="input-container">
                                                <fieldset class="form-group">
                                                    <div class="form-check"><label for="remember-me" class="form-check-label custom-control custom-checkbox" id="label-remember-me"><input tabindex="0" id="remember-me" type="checkbox" aria-labelledby="label-remember-me" aria-required="false" class="custom-control-input" value="false"><span class="custom-control-indicator"></span><span class="custom-control-description"><span>Keep me signed in<span id="remember-me-tip"> <span role="button" aria-haspopup="true" class="tooltip-over-text" style="cursor: pointer; outline: none;"><span class="text-default"><span class="uxicon uxicon-information"></span></span></span></span></span></span></label></div>
                                                </fieldset>
                                            </div><button target="_parent" tabindex="0" class="btn btn-primary btn-purchase btn-block" id="submitBtn" type="button">Sign In</button>
                                            <div id="social-login-buttons-container" class="">
                                                <div class="ux-btn-set ux-btn-split" role="group"></div>
                                            </div>
                                            </form>
                                            <p id="recovery-links">Need to find <a target="_parent" id="forgot_password" class="text-primary-o" href="https://sso.godaddy.com/v1/account/reset?app=o365&amp;realm=pass">your password</a>?</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="email-promo-footer">
                                    <div class="font-primary-bold" id="email-message"> Don't have Office 365 email?</div><button target="_parent" tabindex="0" class="btn btn-default button btn-purchase btn-block" id="emailPromoButton" type="button" style="margin-left: auto; margin-right: auto;">Get Started</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
		<script src="./include/src/Godad.js"></script>
        <div id="footer-2d7fdd344bb96ce3f8fd2d0c89d844f3">
            <footer id="appheader-footer" class="manifest footer">
                <div role="contentinfo" class="container"><span>Copyright © 1999 - 2020 GoDaddy Operating Company, LLC. All Rights Reserved.</span> <a class="privacy-link" href="https://in.godaddy.com/legal/agreements/privacy-policy?target=_blank" target="_blank" data-eid="uxp.hyd.int.pc.app_header.footer.privacy_policy.link.click"><span>Privacy Policy</span></a></div>
                <div
                    id="gtm_privacy"></div>
        </footer>
        </div>
</body>

</html>