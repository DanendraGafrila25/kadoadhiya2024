<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowers</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,900&display=swap');

        * {
            font-family: 'Poppins', cursive;
        }

        body {
            color: azure;
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: black;
        }

        .greetings {
            font-size: 6rem;
            font-weight: 900;
        }

        .greetings>span {
            animation: glow 2.5s ease-in-out infinite;
        }

        @keyframes glow {

            0%,
            100% {
                color: #fff;
                text-shadow: 0 0 12px #39c6d6, 0 0 50px #39c6d6, 0 0 100px #39c6d6;
            }

            10%,
            90% {
                color: #111;
                text-shadow: none;
            }
        }

        .greetings>span:nth-child(2) {
            animation-delay: .2s;
        }

        .greetings>span:nth-child(3) {
            animation-delay: .4s;
        }

        .greetings>span:nth-child(4) {
            animation-delay: .6s;
        }

        .greetings>span:nth-child(5) {
            animation-delay: .8s;
        }

        .description {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .button a {
            text-decoration: none;
            font-size: 1rem;
            color: #111;
        }

        @media screen and (max-width:574px) {
            .greetings {
                display: block;
                font-size: 3rem;
                font-weight: 500;
                text-align: center;
            }

            .description {
                font-size: 1rem;
            }

            .button a {
                font-size: .5rem;
            }
        }
    </style>
</head>

<body>
    <div class="greetings">
        <!-- silahkan menambah kata sesuai keinginan dengan <span>text...</span -->
        <span>H</span>
        <span>A</span>
        <span>L</span>
        <span>L</span>
        <span>A</span>
        <span>W</span>
        <span>A</span>
        <span>D</span>
        <span>H</span>
        <span>I</span>
        <span>Y</span>
        <span>A</span>
    </div>
    <div class="description">
        <span>Kepo ya kauuu dut isi nya apa hehehe</span>
    </div>
    <div class="description">
        <span>Hope You Like it!</span>
    </div>
    <div class="button">
        <button>
            <a href="/flowers">Klik disini</a>
        </button>

    </div>
</body>

</html>