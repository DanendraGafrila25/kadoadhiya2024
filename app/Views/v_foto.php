<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            background-image: url('/images/10.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        #wrap {
            width: 100%;
            height: 205px;
            overflow: hidden;
            border: 1px solid red;
            /* Debugging purpose: visualize the wrap area */
        }

        #header,
        #footer {
            position: relative;
            height: 200px;
            display: flex;
        }

        #header {
            animation: moveLeft 20s linear infinite;
            /* Animation for continuous movement to the left */
        }

        #footer {
            animation: moveRight 20s linear infinite;
            /* Animation for continuous movement to the right */
        }

        .image {
            width: 200px;
            height: 200px;
            border-right: 2px solid black;
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
            display: block;
        }

        @keyframes moveLeft {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-1800px);
                /* Adjust translate value */
                /* Translate by total width of images */
            }
        }

        @keyframes moveRight {
            0% {
                transform: translateX(-1800px);
            }

            100% {
                transform: translateX(0);
            }
        }

        #greeting {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translateX(-50%);
            font-family: 'Pacifico', cursive;
            font-size: 2em;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        footer {
            margin-top: 20px;
        }

        .button {
            padding: 10px 20px;
            font-size: 1em;
            color: white;
            background-color: #ff4500;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-family: 'Arial', sans-serif;
            margin-top: -40px;
            /* Move the button higher */
        }

        .button:hover {
            background-color: #ff6347;
        }
    </style>
</head>

<body>
    <div id="wrap">
        <div id="greeting">SELAMAT ULANG TAHUN SAYANG :)</div>
        <div id="header"></div>
    </div>

    <div id="wrap">
        <div id="footer"></div>
    </div>

    <audio autoplay loop>
        <source src="/audio/sempurna.mp3" type="audio/mpeg">
    </audio>

    <footer>
        <a href="/" class="button">SELESAI</a>
    </footer>

    <script>
        // Array of image URLs for header and footer
        const headerImageUrls = [
            '/images/1.jpg',
            '/images/2.jpg',
            '/images/3.jpg',
            '/images/4.jpg',
            '/images/5.jpg',
            '/images/6.jpg',
            '/images/7.jpg',
            '/images/8.jpg',
            '/images/9.jpg',
            '/images/10.jpg'
        ];

        const footerImageUrls = [
            '/images/11.jpg',
            '/images/12.jpg',
            '/images/13.jpg',
            '/images/14.jpg',
            '/images/15.jpg',
            '/images/16.jpg',
            '/images/17.jpg',
            '/images/18.jpg',
            '/images/19.jpg',
            '/images/20.jpg'
        ];

        const header = document.getElementById('header');
        const footer = document.getElementById('footer');

        // Function to create image elements dynamically
        function createImageElements(container, imageUrls) {
            imageUrls.forEach(url => {
                const imageDiv = document.createElement('div');
                imageDiv.classList.add('image');
                imageDiv.style.backgroundImage = `url('${url}')`;
                container.appendChild(imageDiv);
            });
        }

        // Function to duplicate images for seamless loop
        function duplicateImages(container) {
            const imageDivs = container.querySelectorAll('.image');
            imageDivs.forEach(div => {
                const clone = div.cloneNode(true);
                container.appendChild(clone);
            });
        }

        // Call functions to create images and duplicate for looping
        createImageElements(header, headerImageUrls);
        createImageElements(footer, footerImageUrls);

        // Duplicate images for looping 10 times
        for (let i = 0; i < 10; i++) {
            duplicateImages(header);
            duplicateImages(footer);
        }
    </script>

</body>

</html>