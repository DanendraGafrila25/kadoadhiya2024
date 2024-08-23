<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday dhi</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background-color: darkslategray;
        }

        .card {
            width: 640px;
            height: 400px;
            position: absolute;
            margin: auto;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            -webkit-perspective: 1200px;
            perspective: 1200px;
            transition: 1s;
        }

        .card:hover {
            transform: rotate(-5deg);
        }

        .card:hover .outside {
            transform: rotateY(-130deg);
        }

        .outside,
        .inside {
            height: 100%;
            width: 50%;
            position: absolute;
            left: 50.1%;
        }

        .inside {
            background: linear-gradient(to right, #e0e0e0, white 30%);
            line-height: 1.5;
            padding: 0 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            left: 50%;
        }

        .outside {
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            z-index: 1;
            transform-origin: left;
            transition: 2s;
        }

        .front,
        .back {
            height: 100%;
            width: 100%;
            position: absolute;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transform: rotateX(0deg);
            background-color: white;
        }

        .front {
            background-color: white;
        }

        .back {
            transform: rotateY(180deg);
            background: linear-gradient(to left, #e0e0e0, white 30%);
        }

        .cake {
            width: 100%;
            position: absolute;
            bottom: 30px;
        }

        .top-layer,
        .middle-layer,
        .bottom-layer {
            height: 80px;
            width: 240px;
            background-repeat: repeat;
            background-size: 60px 100px;
            background-position: 28px 0;
            background-image: linear-gradient(transparent 50px, #fedbab 50px, #fedbab 50px, transparent 60px), radial-gradient(circle at 30px 5px, #994c10 30px, #fcbf29 31px);
            border-radius: 10px 10px;
            position: relative;
            margin: auto;
        }

        .middle-layer {
            transform: scale(0.85);
            top: 6px;
        }

        .top-layer {
            transform: scale(0.7);
            top: 26px;
        }

        .candle {
            height: 45px;
            width: 15px;
            background: repeating-linear-gradient(45deg, #fd3018 0, #fd3018 5px, #ffa89e 5px, #ffa89e 10px);
            position: absolute;
            margin: auto;
            left: 0;
            right: 0;
            bottom: 202px;
        }

        .candle::before {
            content: "";
            position: absolute;
            height: 16px;
            width: 16px;
            background-color: #ffa500;
            border-radius: 0 50% 50% 50%;
            bottom: 48px;
            transform: rotate(45deg);
            left: -1px;
        }

        .outside p {
            font-size: 23px;
            text-transform: uppercase;
            margin-top: 30px;
            text-align: center;
            letter-spacing: 6px;
            color: black;
        }

        .inside p {
            font-size: 20px;
            text-align: center;
            letter-spacing: 1px;
            color: black;
            padding: 20px;
            word-break: break-word;
            white-space: pre-line;
        }

        .inside h1 {
            font-size: 120px;
            line-height: 120px;
        }

        #balloon-container {
            height: 100vh;
            padding: 1em;
            box-sizing: border-box;
            display: flex;
            flex-wrap: wrap;
            overflow: hidden;
            transition: opacity 500ms;
        }

        .balloon {
            height: 125px;
            width: 105px;
            border-radius: 75% 75% 70% 70%;
            position: relative;
        }

        .balloon:before {
            content: "";
            height: 75px;
            width: 1px;
            padding: 1px;
            background-color: #FDFD96;
            display: block;
            position: absolute;
            top: 125px;
            left: 0;
            right: 0;
            margin: auto;
        }

        .balloon:after {
            content: "▲";
            text-align: center;
            display: block;
            position: absolute;
            color: inherit;
            top: 120px;
            left: 0;
            right: 0;
            margin: auto;
        }

        @keyframes float {
            from {
                transform: translateY(100vh);
                opacity: 1;
            }

            to {
                transform: translateY(-300vh);
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <audio autoplay loop>
        <source src="/audio/song.mp3" type="audio/mpeg">
    </audio>
    <div class="card">
        <div class="outside">
            <div class="front">
                <p>Happy Birthday</p>
                <div class="cake">
                    <div class="top-layer"></div>
                    <div class="middle-layer"></div>
                    <div class="bottom-layer"></div>
                    <div class="candle"></div>
                </div>
            </div>
            <div class="back"></div>
        </div>
        <div class="inside">
            <p>Selamat ulang tahun Adhiya, semoga panjang umur terus sehat sehat terus, makin ndut ya biar makin gemesin hehe, lopyuu pwollllllll !!!</p>
            <a href="/message">
                <h1>&#127873;</h1>
            </a>
        </div>
    </div>
    <div id="balloon-container">
    </div>
</body>

<script>
    const balloonContainer = document.getElementById("balloon-container");

    function random(num) {
        return Math.floor(Math.random() * num);
    }

    function getRandomStyles() {
        var r = random(255);
        var g = random(255);
        var b = random(255);
        var mt = random(200);
        var ml = random(50);
        var dur = random(5) + 5;
        return `
  background-color: rgba(${r},${g},${b},0.7);
  color: rgba(${r},${g},${b},0.7); 
  box-shadow: inset -7px -3px 10px rgba(${r - 10},${g - 10},${b - 10},0.7);
  margin: ${mt}px 0 0 ${ml}px;
  animation: float ${dur}s ease-in infinite
  `;
    }

    function createBalloons(num) {
        for (var i = num; i > 0; i--) {
            var balloon = document.createElement("div");
            balloon.className = "balloon";
            balloon.style.cssText = getRandomStyles();
            balloonContainer.append(balloon);
        }
    }

    function removeBalloons() {
        balloonContainer.style.opacity = 0;
        setTimeout(() => {
            balloonContainer.remove()
        }, 500)
    }

    window.addEventListener("load", () => {
        createBalloons(30)
    });

    // window.addEventListener("click", () => {
    //     removeBalloons();
    // });
</script>

</html>