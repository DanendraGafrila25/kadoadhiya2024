<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style>
        body {
            width: 100%;
            height: 100%;
            font-family: 'Open Sans', sans-serif;
            background: #092756;
            background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), -moz-linear-gradient(top, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), -moz-linear-gradient(-45deg, #670d10 0%, #092756 100%);
            background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), -webkit-linear-gradient(top, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), -webkit-linear-gradient(-45deg, #670d10 0%, #092756 100%);
            background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), -o-linear-gradient(top, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), -o-linear-gradient(-45deg, #670d10 0%, #092756 100%);
            background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), -ms-linear-gradient(top, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), -ms-linear-gradient(-45deg, #670d10 0%, #092756 100%);
            background: radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), linear-gradient(to bottom, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), linear-gradient(135deg, #670d10 0%, #092756 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3E1D6D', endColorstr='#092756', GradientType=1);
            overflow: hidden;
        }

        .login {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -150px 0 0 -150px;
            width: 300px;
            height: 300px;
        }

        .login h1 {
            color: #fff;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            letter-spacing: 1px;
            text-align: center;
        }

        input {
            width: 100%;
            margin-bottom: 10px;
            background: rgba(0, 0, 0, 0.3);
            border: none;
            outline: none;
            padding: 10px;
            font-size: 13px;
            color: #fff;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(0, 0, 0, 0.3);
            border-radius: 4px;
            box-shadow: inset 0 -5px 45px rgba(100, 100, 100, 0.2), 0 1px 1px rgba(255, 255, 255, 0.2);
            transition: box-shadow .5s ease;
        }

        input:focus {
            box-shadow: inset 0 -5px 45px rgba(100, 100, 100, 0.4), 0 1px 1px rgba(255, 255, 255, 0.2);
        }

        .btn {
            display: inline-block;
            padding: 4px 10px;
            margin-bottom: 0;
            font-size: 13px;
            line-height: 18px;
            color: #333;
            text-align: center;
            text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
            vertical-align: middle;
            background-color: #f5f5f5;
            background-image: linear-gradient(to bottom, #fff, #e6e6e6);
            border: 1px solid #e6e6e6;
            border-radius: 4px;
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
            cursor: pointer;
            width: 100%;
            display: block;
        }

        .btn:hover,
        .btn:active,
        .btn.active,
        .btn.disabled,
        .btn[disabled] {
            background-color: #e6e6e6;
        }

        .btn-large {
            padding: 9px 14px;
            font-size: 15px;
            line-height: normal;
            border-radius: 5px;
        }

        .btn-primary,
        .btn-primary:hover {
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
            color: #fff;
            background-color: #4a77d4;
            background-image: linear-gradient(to bottom, #6eb6de, #4a77d4);
            border: 1px solid #3762bc;
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5);
        }

        .btn-primary:hover,
        .btn-primary:active,
        .btn-primary.active,
        .btn-primary.disabled,
        .btn-primary[disabled] {
            filter: none;
            background-color: #4a77d4;
        }

        .loader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, #0f8, #08f);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            animation: hue 10s infinite linear;
            display: none;
        }

        .loader h1 {
            font-family: Oak, sans-serif;
            color: rgba(0, 0, 0, 0.7);
        }

        .loader .b1,
        .loader .b2,
        .loader .b3 {
            width: 10px;
            height: 30px;
            background-color: rgba(256, 256, 256, 0.8);
            position: absolute;
            top: 50%;
            transform: rotate(0);
            animation-name: spinify;
            animation-duration: 1600ms;
            animation-iteration-count: infinite;
        }

        .loader .b1 {
            left: 42%;
        }

        .loader .b2 {
            left: 50%;
            animation-delay: 100ms;
        }

        .loader .b3 {
            left: 58%;
            animation-delay: 200ms;
        }

        @keyframes spinify {
            0% {
                transform: translate(0px, 0px);
            }

            33% {
                transform: translate(0px, 24px);
                border-radius: 100%;
                width: 10px;
                height: 10px;
            }

            66% {
                transform: translate(0px, -16px);
            }

            88% {
                transform: translate(0px, 4px);
            }

            100% {
                transform: translate(0px, 0px);
            }
        }

        @keyframes hue {
            0% {
                filter: hue-rotate(0deg);
            }

            100% {
                filter: hue-rotate(360deg);
            }
        }
    </style>
</head>

<body>

    <div class="login">
        <h1>Login</h1>
        <form id="loginForm">
            <input type="text" name="u" placeholder="Username" required="required">
            <input type="password" name="p" placeholder="Password" required="required">
            <button type="button" class="btn btn-primary btn-large btn-block" onclick="login()">Let me in.</button>
        </form>
    </div>

    <div class="loader">
        <h1>Loading Awesome</h1>
        <div class="b1"></div>
        <div class="b2"></div>
        <div class="b3"></div>
    </div>

    <script>
        const validUsername = "adhiyaCantikSeJagadRaya";
        const validPassword = "selamatulangtahunsayang";

        function login() {
            const username = document.querySelector('input[name="u"]').value;
            const password = document.querySelector('input[name="p"]').value;
            const loader = document.querySelector('.loader');

            loader.style.display = 'flex';

            setTimeout(function() {
                loader.style.display = 'none';

                if (username === validUsername && password === validPassword) {
                    alert('Login berhasil!');
                    window.location.href = '/home';
                } else {
                    alert('Username atau password salah!');
                }
            }, 3000);
        }
    </script>

</body>

</html>