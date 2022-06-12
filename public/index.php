<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Olot somsa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style> body {
            padding: 0;
            margin: 0;
        }

        img {
        }

        a {
            position: absolute;
            background-color: #eeff00;
            top: 50px;
            left: 30%;
            transform: translateX(-50%);
            padding: 16px;
            border-radius: 50rem;
            color: black;
            text-decoration: none;
            font-size: 30px;
            margin: auto;
        }

        .animated-text {
            position: absolute;
            top: 70px;
            left: 30%;
            color: white;
            font-family: "Source Code Pro", "SF Mono", Monaco, Inconsolata, "Fira Mono", "Droid Sans Mono", monospace, monospace;
            font-size: 72px;
        }

        .overflow {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            z-index: 0;
            overflow: hidden;
        }

        img {
            width: 100%;
        }

        @media only screen and (max-width: 600px) {
            img {
                width: initial;
                height: 100vh !important;
            }

            a {
                left: 40%;
                font-size: 22px;
            }

            .animated-text {
                font-size: 48px;
                top: 100px;
            }
        } </style>
</head>
<body>
<div class="overflow"><img src="image/1.jpg" alt=""></div>
<h1 class="animated-text"></h1> <a href="tel: +99890303">+998 90 303 59 35</a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
<script> var typed = new Typed('.animated-text', {
        strings: ['Скоро...'],
        typeSpeed: 100,
        backSpeed: 100,
        loop: true,
        loopCount: Infinity,
        startDelay: 500,
    }); </script>
</body>
</html>