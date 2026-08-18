<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>



<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nuturuovx . Your request has been accepted!</title>
        <meta property="og:title" content="Nuturuovx . Your request has been accepted!" />
        <meta property="og:image" content="logo-icon.svg"/>
        
        <meta property="og:description" content="Nuturuovx . Your request has been accepted!">
        <meta name="description" content="Nuturuovx . Your request has been accepted!">
        <link rel="stylesheet" href="source/style/bootstrap.css"> 
        <link rel="stylesheet" href="source/style/bootstrap.css">
        
        

        
        <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="logo-icon.svg" type="image/x-icon">

        <script src="source/js/jquery.min.js"></script>
        <script src="source/js/bootstrap.js"></script>
        <style>
            body{
                direction: ltr;
                font-family: 'Cormorant', sans-serif !important;
                font-size: 16px;
                margin: 0;
                padding: 0px;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                margin: 0;
            }

            ul {
                margin: 0;
                padding: 0;
            }

            button {
                cursor: pointer;
            }

            img {
                display: block;
            }

            a {
                text-decoration: none;
            }

            li {
                list-style: none;
            }

            video, img {
                max-width: 100%;

            }
            .content-block {
                word-break: break-all;
                padding: 108px 0;
            }

            .content-block li {
            list-style: disc;
            margin: 0 17px;
            padding:  8px 0;
            }
            .content-block p {
            padding:  8px 0;
            }
            .head-main-back {
                background: linear-gradient(to left top, #122f14, #12351b, #123b22, #114129, #0f4731, #0d4c38, #0a5240, #065748, #035d51, #01635b, #006964, #006f6e);
                width: 100%;
                height: auto;
                overflow: hidden;
            }

            .head-back-opasity {
                background: url(files/images/light-overlay_cPg0.png);
                background-position: center;
                background-size: cover;
                width: 100%;
                height: auto;
                overflow: hidden;
            }

            .fix-head {
                background: linear-gradient(to left top, #122f14, #12351b, #123b22, #114129, #0f4731, #0d4c38, #0a5240, #065748, #035d51, #01635b, #006964, #006f6e);
                position: fixed;
                z-index: 999;
                width: 100%;
                top: 0;
                left: 0;
            }

            .head-main-bar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding-bottom: 15px;
                padding-top: 15px;
            }

            .site-logo {
                display: flex;
                align-items: center;
                gap: 8px;
                flex-direction: column;
            }

            .log-img {
                width: 50px;
                padding: 0;

            }

            .s-name {
                color: #ffffff;
                font-weight: 500;
                font-size: 16px;
            }

            .nav-wrap {
                display: flex;
                align-items: center;
                gap: 15px;
                flex-direction: row;
            }

            .head-nav {
                display: flex;
                gap: 18px;
            }

            .nav-link {
                color: #ffffff;
                font-size: 16px;
                font-weight: 500;

            }
            .main-pad {
                padding: 108px 0px;
            }
            .main-screen {
                display: flex;
                gap: 30px;
                flex-direction: row-reverse;
                padding-top:   217px;
                padding-bottom:   217px;
            }

            .main-text {
                width: calc(100% / 2 - 15px);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            .main-title {
                color: #ffffff;
                font-size: 47px;
            }

            .main-link-btn {
                margin-top:  108px;
                width: 100%;
            }

            .main-img  {
                width: calc(100% / 2 - 15px);
            }

            .main-img img {
                height: auto;
                max-width: 50%;
                margin: 0 auto;
            }

            .decor {
                position: relative;
                width: 100%;
                height: auto;
            }

            .decor-first {
                position: absolute;
                top: -100px;
                left: 0;
                z-index: 0;
                width: 100%;
                height: 100px;
                background-image: url( files/images/body-bg_2026-08-13_05-07-310.webp );
                background-repeat: repeat-x;
                background-size: 51% 100px;
                background-position: 397px 0;
                transform: scale(2.5,1);
            }


            .decor-second {
                position: absolute;
                top: -100px;
                left: 0;
                z-index: 0;
                width: 100%;
                height: 100px;
                background-image: url(files/images/body-bg_2026-08-13_05-07-311.webp);
                background-repeat: repeat-x;
                background-size: 51% 100px;
                background-position: 0 0;
                transform: scale(2.5,1);
                opacity: .2;
                animation: move 25s linear infinite;
            }

            .decor-third {
                position: absolute;
                top: -100px;
                left: 0;
                z-index: 0;
                width: 100%;
                height: 100px;
                background-image:url(files/images/body-bg_2026-08-13_05-07-312.webp);
                background-repeat: repeat-x;
                background-size: 51% 100px;
                background-position: 0 0;
                transform: scale(2.5,1);
                opacity: .2;
                animation: move 20s linear infinite;
            }

            @keyframes move {
                0% {
                    background-position: 0 0;
                    transform: scale(2,1);
                }
                50% {
                    background-position: 50% -50%;
                    transform: scale(2.3,1.2);
                }
                100% {
                    background-position: 100% 0;
                    transform: scale(2,1);
                }
            }

            .about-block {
                display: flex;
                gap: 80px;
                flex-direction: row-reverse;
                padding-top: 149px;
                padding-bottom: 149px;
            }

            .ab-pic {
                width: calc(100% / 2 - 40px);
            }

            .ab-us {
                display: flex;
                flex-direction: column;
                justify-content: center;
                width: calc(100% / 2 - 40px);
            }

            .ab-title {
                color: inherit;
                font-size: 39px;
                margin-bottom: 39px;

            }

            .dec{
                width: 61px;
                height: 15px;
                border-radius: 12px;
                background: linear-gradient(to left top, #122f14, #12351b, #123b22, #114129, #0f4731, #0d4c38, #0a5240, #065748, #035d51, #01635b, #006964, #006f6e);
                margin-bottom: 39px;
            }

            .ab-text {
                color: inherit;
                font-size: 24px;
            }

            .content-block {
                margin-top: 27px ;
                display: flex;
                flex-direction:  column;
                gap: 39px;
                padding-bottom: 50px;
            }

            .media-content {
                display: flex;
                flex-direction:  column;
                gap:  27px;
            }

            .video-box {
                width: calc(100% / 2 - 15px);
                overflow: hidden;
                display: flex;
                align-items: center;
            }

            .video-box video {
                border-radius: 20px;
                width: 100%;
            }

            .img-box {
                width: calc(100% / 2 - 15px);
                display: flex;
                justify-content: center;
                overflow: hidden;
            }

            .img-box img {
                width: 50%;
                border-radius: 20px;
                object-fit: cover;
            }

            .text-content {
                width: 100%;
            }

            .text-content div {
                margin-left: auto;
                margin-right: auto;
            }

            .content-text {
                font-size: 16px;
                color: inherit;
            }

            .content-title {
                font-weight: 500;
                text-transform: inherit;
                font-size: 39px;
                text-align: center;
                color: inherit;
                margin-bottom:  30px;
            }

            .price {
                margin-top: 29px;
                font-family: 500;
                font-style: fw-bolder;
                font-size: 24px;
                color: inherit;
            }

            .service-block {
                padding-top: 50px;
                padding-bottom: 143px;
            }

            .service-title {
                text-align: center;
                color: #ffffff;
                font-size: 39px;
                margin-bottom: 50px;
            }

            .service-wrap {
                display: flex;
                gap:17px;
                flex-direction: row-reverse;
                justify-content: space-between;
                margin-bottom: 39px;
            }


            .service-box {
                display: flex;
                flex-direction: column;
                flex: 1;
                padding:  25px;
                border-radius: 10px;
                background-color: #122913;

            }

            .service-img {
                color: #ffffff;
                font-size: 39px;
                margin-bottom:30px;
            }

            .service-text {
                color: #ffffff;
                font-size: 16px;
            }

            .service-epilog {
                color: #ffffff;
                font-size: 24px;
            }

          

            .faq-title {
                color: inherit;
                font-size: 39px;
                margin-bottom: 39px;
            }

            .faq-wrap {
                display: flex;
                gap: 27px;
                flex-direction: row;
            }

            .faq-img  {
                display: none;
                width: calc(100% / 2 - 15px);
            }

            .faq-img img {
                height: auto;
                max-width: 80%;
                margin: 0 auto;
            }

            .client-form {
                width: calc(100% / 2 - 15px);
            }

            .form-box {
                display: flex;
                flex-direction: column;
            }

            .form-item {
                display: flex;
                flex-direction: column;
                gap: 15px;

            }

            .form-text {
                display: block;
                width: 100%;
                height: auto;
                padding: 6px 12px;
                font-size: 16px;
                color: #555;
                border: 2px solid  #142850;
            }

            .textarea-input--box-block {
                display: block;
                width: 100%;
                height: auto;
                padding: 6px 15px;
                font-size: 16px;
                color: #555;
                border: 2px solid  #142850;
            }
               .input-input--box-block {
                display: block;
                width: 100%;
                height: auto;
                padding: 6px 15px;
                font-size: 16px;
                color: #555;
                border: 2px solid  #142850;
            }

            .faq-accordion {
                width: calc(100% / 2 - 15px);
            }

            .rhomb {
                margin-right: 15px;
                color: #122913;
                font-size: 20px;
                font-weight: 700;
            }

            .footer-back {
                position: relative;
                width: 100%;
                height: auto;
                overflow: hidden;
            }

          


         

            .footer-block {
                display: flex;
                gap: 27px;
                flex-direction: row-reverse;
                justify-content: space-between;
                padding-top: 50px;
                padding-bottom: 39px;
                border-bottom: 1px solid #efefef;
            }

            .footer-wrap {
                display: flex;
                flex-direction: column;
                gap: 20px;
                width: calc(100% / 3 - 45px);
            }

            .footer-nav {
                display: flex;
                gap: 10px;
                flex-wrap: wrap;
                flex-direction: column;
            }

            .footer-title {
                height: 50px;
            }

            .footer-title  h4 {
                font-size:  20px;
                color: #ffffff;
                font-weight: 500;
            }

            .contact-list {
                display: flex;
                flex-direction: column;
            }

            .contact-item {
                display: flex;
                gap: 10px;
                align-items: baseline;
                padding: 0.5rem 1rem;
            }

            .contact-item i {
                font-size: 16px;
                color: #ffffff;
            }

            a.contact-text {
                font-size: 16px;
                color: #ffffff;
                font-weight: 500;
            }

            .contact-text {
                font-size: 16px;
                color: #ffffff;
                font-weight: 500;
            }

            .map-title {
                font-size: 24px;
                color: #ffffff;
                font-weight: 500;
            }

            .footer-site-logo {
                display: flex;
                align-items: center;
                gap: 8px;
            }

            .politic-block {
                flex-wrap: wrap;
                margin-top: 20px;
                display: flex;
                flex-direction: row-reverse;
                gap: 20px;
                justify-content: center;
                padding-bottom: 39px;
            }

            .politic-block a {
                font-size: 16px;
                color: #ffffff;
                font-weight: 500;
            }

            .check-imp {
                text-align: start;
                margin: 15px 0;
            }
            .check-imp a {
                color: black;
            }

            .maimQA {
                padding: 50px; 0
            }
            .service-box {
                background-color: #1229134d
            }
          
            @media (max-width: 996px){
                .head-nav {
                    flex-wrap: wrap;
                    align-items: center;
                    justify-content: center;
                }
            }
            @media (max-width: 575px){
              
                button{
                    width: 100%;
                }
                .head-nav {
                    gap: 10px;
                }
            }


            @media (max-width: 992px) {
    .head-phone {
        display: none !important;
    }
    .main-title {
        font-size: 30px;
    }
    .about-block {
        flex-direction: column !important;
    }
    .ab-pic, .ab-us {
        width: 100%;
    }
    .content-block {
        flex-direction: column !important;
    }
    .content-title {
        font-size: 30px;
    }
    .service-wrap {
        flex-direction: column !important;
    }
}

@media (max-width: 767px) {
    .head-main-bar { 
        flex-direction: column;
    }
    .main-screen {
        padding-top: 200px;
        flex-direction: column !important;
    }
    .main-text, .main-img {
        width: 100%;
    }
    .main-title, .main-link-btn {
        text-align: center;
    }
    .service-title {
        font-size: 30px;
    }
    .faq-wrap {
        flex-direction: column;
    }
    .faq-img, .client-form, .faq-accordion {
        width: 100%;
    }
    .footer-block {
        flex-direction: column;
    }
    .footer-wrap {
        width: 100%;
    }
    .footer-nav {
        flex-direction: row !important;
        justify-content: center;
    }
    .footer-title h4 {
        text-align: center;
    }
    .contact-item {
        text-align: center;
    }

}


@media(max-width: 576px){
    .main-title{
        font-size: 30px;
    }
    button{
        font-size: 16px !important;
    }

    .button-1::after {
        display: none;
    }
}

.button-1 {
    --glow-color: rgb(217, 176, 255);
    --glow-spread-color: rgba(191, 123, 255, 0.781);
    --enhanced-glow-color: rgb(231, 206, 255);
    --btn-color: rgb(100, 61, 136);
    border: .25em solid var(--glow-color);
    padding: 1em 3em;
    color: var(--glow-color);
    font-size: 15px;
    font-weight: bold;
    background-color: var(--btn-color);
    border-radius: 1em;
    outline: none;
    box-shadow: 0 0 1em .25em var(--glow-color),
        0 0 4em 1em var(--glow-spread-color),
        inset 0 0 .75em .25em var(--glow-color);
    text-shadow: 0 0 .5em var(--glow-color);
    position: relative;
    transition: all 0.3s;
}


.button-1::after {
    pointer-events: none;
    content: "";
    position: absolute;
    top: 120%;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: var(--glow-spread-color);
    filter: blur(2em);
    opacity: .7;
    transform: perspective(1.5em) rotateX(35deg) scale(1, .6);
}

.button-1:hover {
    color: var(--btn-color);
    background-color: var(--glow-color);
    box-shadow: 0 0 1em .25em var(--glow-color),
        0 0 4em 2em var(--glow-spread-color),
        inset 0 0 .75em .25em var(--glow-color);
}

.button-1:active {
    box-shadow: 0 0 0.6em .25em var(--glow-color),
        0 0 2.5em 2em var(--glow-spread-color),
        inset 0 0 .5em .25em var(--glow-color);
}

.button-2 {
    font-size: 28px;
    color: rgb(35, 75, 83);
    background-color: rgb(217, 238, 242);
    background-image: linear-gradient(180deg, rgb(201, 194, 240) 30%, transparent 70%);
    background-repeat: no-repeat;
    background-position: center 45%;
    background-size: 100% 200%;
    padding: 10px 30px;
    border-radius: 30px;
    border: none;
    box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px;
    position: relative;
    transition: all 0.5s ease;
    outline: none;
}

.button-2::before,
.button-2::after {
    content: "";
    inset: 0;
    position: absolute;
    border-radius: 5em;
}

.button-2::before {
    background-image: radial-gradient(ellipse, rgba(204, 246, 255, 0.8) 20%, transparent 50%, transparent 200%), linear-gradient(90deg, #404040 -10%, transparent 30%, transparent 70%, #404040 110%);
    box-shadow: inset 0 0.25em 0.75em rgba(0, 0, 0, 0.8), inset 0 -0.05em 0.2em rgba(255, 255, 255, 0.4), inset 0 -1px 3px rgba(25, 196, 230, 0.75);
    background-blend-mode: overlay;
    background-repeat: no-repeat;
    background-size: 200% 80%, cover;
    background-position: center 220%;
    mix-blend-mode: overlay;
    filter: blur(0);
}

.button-2::after {
    background: linear-gradient(180deg, rgba(213, 204, 255, 0.726), rgba(92, 74, 181, 0.75) 40%, transparent 80%);
    top: 0.075em;
    left: 0.75em;
    right: 0.75em;
    bottom: 1.4em;
    filter: blur(1px);
    mix-blend-mode: screen;
}

.button-2:hover,
.button-2:active,
.button-2::backdrop {
    outline: none;
    box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
    background-position: center calc(45% - 0.75em);
}

.button-3 {
    --clr-font-main: hsla(0 0% 20% / 100);
    --btn-bg-1: hsla(194 100% 69% / 1);
    --btn-bg-2: hsla(217 100% 56% / 1);
    --btn-bg-color: hsla(360 100% 100% / 1);
    --radii: 0.5em;
    cursor: pointer;
    padding: 0.9em 1.4em;
    min-width: 120px;
    min-height: 44px;
    font-size: var(--size, 1rem);
    font-family: "Segoe UI", system-ui, sans-serif;
    font-weight: 500;
    transition: 0.8s;
    background-size: 280% auto;
    background-image: linear-gradient(325deg, var(--btn-bg-2) 0%, var(--btn-bg-1) 55%, var(--btn-bg-2) 90%);
    border: none;
    border-radius: var(--radii);
    color: var(--btn-bg-color);
    box-shadow: 0px 0px 20px rgba(71, 184, 255, 0.5), 0px 5px 5px -1px rgba(58, 125, 233, 0.25), inset 4px 4px 8px rgba(175, 230, 255, 0.5), inset -4px -4px 8px rgba(19, 95, 216, 0.35);
}

.button-3:hover {
    background-position: right top;
}

.button-3:is(:focus, :focus-within, :active) {
    outline: none;
    box-shadow: 0 0 0 3px var(--btn-bg-color), 0 0 0 6px var(--btn-bg-2);
}

@media (prefers-reduced-motion: reduce) {
    .button-3 {
        transition: linear;
    }
}

.button-4 {
    padding: 17px 40px;
    border-radius: 50px;
    border: 0;
    background-color: white;
    box-shadow: rgb(0 0 0 / 5%) 0 0 8px;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    font-size: 15px;
    transition: all .5s ease;
}

.button-4:hover {
    letter-spacing: 3px;
    background-color: hsl(261deg 80% 48%);
    color: hsl(0, 0%, 100%);
    box-shadow: rgb(93 24 220) 0px 7px 29px 0px;
}

.button-4:active {
    letter-spacing: 3px;
    background-color: hsl(261deg 80% 48%);
    color: hsl(0, 0%, 100%);
    box-shadow: rgb(93 24 220) 0px 0px 0px 0px;
    transform: translateY(10px);
    transition: 100ms;
}

.button-5 {
    font-size: 16px;
    padding: 1em 3.3em;
    transform: perspective(200px) rotateX(15deg);
    color: white;
    font-weight: 900;
    border: none;
    border-radius: 5px;
    background: linear-gradient(0deg, rgba(63, 94, 251, 1) 0%, rgba(70, 135, 252, 1) 100%);
    box-shadow: rgba(63, 94, 251, 0.2) 0px 40px 29px 0px;
    will-change: transform;
    transition: all 0.3s;
    border-bottom: 2px solid rgba(70, 135, 252, 1);
}

.button-5:hover {
    transform: perspective(180px) rotateX(30deg) translateY(2px);
}

.button-5:active {
    transform: perspective(170px) rotateX(36deg) translateY(5px);
}
        </style>


        
    </head>

        <body>
            
            <div>
                <div class="head-main-back">
                    <div class="head-back-opasity">
                        <div class="fix-head">
                            <div class="container head-main-bar">
                                <div class="site-logo">
                                    <img class="log-img" src="logo-icon.svg" alt="">
                                    <h2 class="s-name"> Nuturuovx </h2>
                                </div>
                                <div class="nav-wrap">
                                    <nav>
                                        <ul class="head-nav ">
                                            <li>
                                                <a class="nav-link" href="./"> Home</a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="./#about"> About us</a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="./#service"> Our Services</a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="./#faq"> Frequently Asked Questions </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                
                            </div>
                        </div>
                        <div class="container main-screen">
                            <div class="main-text">
                                <h1 class="main-title">
                                    Welcome to Nuturuovx, your trusted partner in personalized healthy eating plans. We are dedicated to helping you achieve your wellness goals through customized nutrition strategies tailored just for you. Start your journey to a healthier lifestyle with expert guidance and support every step of the way.
                                </h1>
                                
                            </div>
                            <div class="main-img">
                                <img src="files/images/graphic_q900.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-accountop-carousel{
		margin: 0px;
		padding: 0px;
		font-family: 'Karla', sans-serif;
		width: 100%;
		font-size: 18px;
		padding: 337px 0px;
	}
	.bodyClass1-accountop-carousel{
		background: #ffffff;
		color: #ffffff;
	}
	.bodyClass2-accountop-carousel{
		background: #e4d3cf;
		color: #fff;
	}
	.bodyClass3-accountop-carousel{
		background: #fff;
		color: #111;
	}
	.wrapage-block-accountop-carousel{
		background-size: 100%;
		width: 100%;
	}
	.box_main-accountop-carousel{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-accountop-carousel h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-accountop-carousel p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-accountop-carousel{
		text-align: center;
	}
	.mainBlock-accountop-carousel ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-accountop-carousel ul>li span{
		font-weight: bold;
	}
	.mainBlock-accountop-carousel{
		max-width: 949px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 10px;
	}
	.mainBlock-accountop-carousel .cBlock-accountop-carousel{
		text-align: center;
	}

	.bodyClass3-accountop-carousel .mainBlock-accountop-carousel{
		background: none;
		border-top: 2px dashed #e4d3cf;
		border-bottom: 2px dashed #e4d3cf;
	}
	.bodyClass2-accountop-carousel .mainBlock-accountop-carousel{
		background: #3B0944;
		color: #fff !important;
		box-shadow: 0px 0px 10px #3B0944;
	}
	.bodyClass2-accountop-carousel .mainBlock-accountop-carousel p{
		color: #fff !important;
	}
	.bodyClass1-accountop-carousel .mainBlock-accountop-carousel{
		background: #05261D;
		color: #ffffff;
		border-left: 0px solid #342056;
	}
	.bodyClass1-accountop-carousel .mainBlock-accountop-carousel p{
		color: #ffffff !important;
	}
	.order-accountop-carousel{
		font-size: 19px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-accountop-carousel p{
			padding: 0px 15px;
		  }
		  .box_main-accountop-carousel h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-accountop-carousel{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-accountop-carousel{
			height: 100%;
		}
	}
</style>
<div class="bodyClass1-accountop-carousel" id="mainWrapp-accountop-carousel">


	<div class="wrapage-block-accountop-carousel">
		<div class="box_main-accountop-carousel">
			<div class="mainBlock-accountop-carousel">
				<p>Dear Valued Client,</p>
<p>Your confidence in our services is deeply valued. We've successfully received your inquiry and are currently addressing it with the utmost care.</p>
<p>Be assured that our expert team is now diligently working to fulfill your request. Striving for excellence in servicing your needs, our primary aim is to deliver outstanding quality and achieve your complete satisfaction.</p>
<p>Should you have any further questions or need additional support, please feel free to reach out via your preferred method of communication. We cherish each client and are always here to provide assistance.</p>
<p class="cBlock-accountop-carousel">Warmest regards, The Team!</p>
			</div>
		</div>
	</div>


</div>



            <div>
                <div class="head-main-back footer-back">
                  
                     
                    <div class="politic-block">
                        <a href="privacyPolicy.html" target="_blank"> Privacy policy</a>
                        <a href="terms-of-service.html" target="_blank"> Terms & Conditions</a>
                        <a href="disclaimer.html" target="_blank"> Disclaimer</a>
                    </div>
            </div>
 




        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const mediaContent = document.querySelector('.media-content');
                const videoBox = document.querySelector('.video-box');
                const imgBox = document.querySelector('.img-box');

                if (window.getComputedStyle(mediaContent).flexDirection === 'column') {
                  videoBox.style.width = '100%';
                  imgBox.style.width = '100%';
                }
              });

              document.addEventListener('DOMContentLoaded', function() {
                const contentBlock = document.querySelector('.content-block');
                const mediaContent = document.querySelector('.media-content');
                const videoBox = document.querySelector('.video-box');
                const imgBox = document.querySelector('.img-box');

                if (window.getComputedStyle(contentBlock).flexDirection === 'row') {
                  mediaContent.style.flexDirection = 'column-reverse';
                  videoBox.style.width = 'auto';
                  videoBox.style.height = 'calc(100% / 2 - 15px)';
                  imgBox.style.width = 'auto';
                  imgBox.style.height = 'calc(100% / 2 - 15px)';
                }
              });

              document.addEventListener('DOMContentLoaded', function() {
                const footerBlock = document.querySelector('.footer-block');
                const footerWrap = document.querySelector('.footer-wrap');

                if (window.getComputedStyle(footerBlock).flexDirection === 'row-reverse') {
                  footerWrap.style.alignItems = 'center';
                }
              });

              document.addEventListener('DOMContentLoaded', function() {
                if (!document.querySelector('.client-form')) {
                  document.querySelector('.faq-img').style.display = 'block';
                }
              });
        </script>


        

</body>
</html>
