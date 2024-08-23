<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Pesan ke WhatsApp</title>
    <style>
        /* styles.css */
        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        html {
            background: radial-gradient(ellipse at top, #40485a 0%, #282e3a 60%);
            height: 100%;
            width: 100%;
        }

        body {
            text-align: center;
            height: 100%;
            width: 100%;
            overflow: hidden;
        }

        .envelope-wrapper {
            position: relative;
            display: inline-block;
        }

        .envelope {
            position: relative;
            margin: 2em auto 0;
            display: inline-block;
            box-shadow: 0 150px 90px 0 rgba(0, 0, 0, 0.3);
        }

        .envelope-top {
            width: 0;
            height: 0;
            margin-top: 7em;
            border-style: solid;
            border-width: 7em 10em 0 10em;
            border-color: #256a98 transparent transparent transparent;
            transform-origin: top;
            transform: rotateX(0deg);
            transition: transform 0.5s ease-in 0.4s, z-index 1s ease-out 0.5s;
        }

        .envelope:before,
        .envelope:after {
            content: '';
            display: block;
            position: absolute;
            top: 7em;
            z-index: 4;
            border-style: solid;
        }

        .envelope:after {
            width: 0;
            height: 0;
            right: 0;
            border-width: 6.2em 10em 6.2em 0;
            border-color: transparent #2a7fb5 transparent transparent;
        }

        .envelope:before {
            width: 210px;
            height: 180px;
            border-width: 12.4em 0 0 20.1em;
            border-color: transparent transparent transparent #3596da;
        }

        .email-button {
            background-color: #E74C3C;
            border: 1px solid #b24c45;
            color: white;
            text-align: center;
            font-weight: bold;
            font-size: 1.5em;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding: 0.75em 0.5em;
            line-height: 1em;
            cursor: pointer;
            border-radius: 4px;
            box-shadow: 1px 2px #b24c45;
            transition: background-color 200ms;
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translateX(-50%);
            z-index: 5;
        }

        .email-button:hover {
            background-color: #B74C3B;
        }

        .card {
            width: 280px;
            height: 180px;
            position: absolute;
            top: 120px;
            left: 20px;
            z-index: 2;
            background: white;
            padding: 1.5em;
            border-radius: 5px;
            transition: top 0.5s ease-in-out;
            text-align: center;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: #919499;
        }

        .envelope.active .card {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transition: top 0.5s ease-in-out 0.5s;
            width: 400px;
            height: 300px;
            padding: 20px;
            position: absolute;
            transition: 1s;
            z-index: 5;
        }

        /* Gaya untuk tombol kirim di dalam form */
        form button {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase;
            /* Tombol Kirim dinonaktifkan secara default */
            cursor: not-allowed;
            opacity: 0.5;
        }

        form button:hover {
            background-color: #2980b9;
        }

        /* Form akan terlihat saat amplop aktif */
        .envelope.active .card form {
            display: block;
        }

        /* Tambahkan gaya untuk menyembunyikan form saat amplop tertutup */
        .card form {
            display: none;
        }

        .candle {
            position: absolute;
            width: 100px;
            height: 250px;
            bottom: -300%;
            /* Ubah nilai bottom di sini */
            left: 50%;
            transform: translate(-50%, -50%);
            background-image: linear-gradient(#eee, #ddd, #eee 40%, #ccc 60%, #333);
            border-radius: 0 0 100px 100px/0 0 50px 50px;
            /* animation: melt 10s 5s linear forwards; */
        }

        .candle::before {
            content: "";
            position: absolute;
            top: -20px;
            left: 2px;
            display: inline-block;
            width: 96px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid #ccc;
            background-image: radial-gradient(#aaa,
                    #eee 45%,
                    #aaa 80%);
        }

        .candle::after {
            content: "";
            display: inline-block;
            position: absolute;
            top: -37px;
            left: 45px;
            width: 7px;
            height: 40px;
            background-image: linear-gradient(#f009 50%,
                    #8e4901,
                    #777);
            border-radius: 10px 10px 0 0/40px 40px;
            animation: candle-light-color 5s 30s linear forwards;
        }

        .light {
            display: inline-block;
            position: absolute;
            top: -110px;
            left: 36px;
            width: 25px;
            height: 100px;
            background-image: linear-gradient(#ddd 10%,
                    #fea 70%,
                    #24f);
            border-radius: 50px 50px 50px 50px/300px 300px 50px 50px;
            box-shadow: 0 0 10px 7px #f907;
            animation: candle-light 1s ease-out infinite alternate,
                off-light 1s 29s linear forwards;
            transform-origin: bottom;
        }

        .drops {
            position: absolute;
            display: inline-block;
            width: 20px;
            height: 40px;
            background-color: #fff;
            border-radius: 0 0 10px 10px;
            box-shadow: 0px 0px 5px 3px #ccc inset;
            top: 23px;
            left: 40px;
            animation: melting 10s linear forwards;
        }

        .smoke {
            position: absolute;
            display: inline-block;
            background-color: #ccc;
            height: 100px;
            width: 10px;
            border-radius: 100px 0;
            filter: blur(15px);
            opacity: 0;
            z-index: 1;
        }

        .smoke:nth-child(1) {
            animation: floating-smoke 7s 30s linear forwards;
            left: 20%;
        }

        .smoke:nth-child(2) {
            animation: floating-smoke 4s 30s linear forwards;
            left: 35%;
        }

        .smoke:nth-child(3) {
            animation: floating-smoke 6s 30s linear forwards;
            left: 50%;
        }

        .smoke:nth-child(4) {
            animation: floating-smoke 7s 30s linear forwards;
            left: 65%;
        }

        .smoke:nth-child(5) {
            animation: floating-smoke 5s 30s linear forwards;
            left: 80%;
        }

        @keyframes floating-smoke {
            0% {
                bottom: 50px;
                opacity: 0;
                height: 20px;
            }

            30% {
                opacity: 1;
            }

            100% {
                bottom: 600px;
                opacity: 0;
                height: 100px;
            }
        }

        @keyframes candle-light {
            0% {
                transform: rotate(-2deg) scale(1);
            }

            100% {
                transform: rotate(2deg) scale(.9);
            }
        }

        @keyframes candle-light-color {
            0% {
                background-image: linear-gradient(#f009 50%,
                        #8e4901,
                        #777);
            }

            100% {
                background-image: linear-gradient(#000 50%,
                        #8e4901,
                        #777);
            }
        }


        @keyframes melting {
            0% {
                height: 0;
            }

            100% {
                height: 50px;
            }
        }

        @keyframes melt {
            0% {
                height: 250px;
            }

            100% {
                height: 70px;
            }
        }

        @keyframes off-light {
            0% {
                display: inline-block;
            }

            20% {
                transform: rotate(-10deg);
            }

            30% {
                transform: rotate(10deg);
            }

            40% {
                transform: rotate(-15deg);
            }

            50% {
                transform: rotate(15deg);
            }

            60% {
                transform: rotate(-20deg);
            }

            70% {
                transform: rotate(20deg);
            }

            80% {
                transform: rotate(-25deg);
            }

            90% {
                transform: rotate(25deg);
            }

            100% {
                visibility: hidden;
            }
        }

        .notification {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #e74c3c;
            /* Warna notifikasi */
            color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            display: none;
            z-index: 9999;
            font-size: 1.2em;
            /* Ukuran teks notifikasi */
        }

        /* Animasi notifikasi */
        @keyframes showNotification {
            0% {
                transform: translateY(-100%);
            }

            100% {
                transform: translateY(0);
            }
        }

        @keyframes hideNotification {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-100%);
            }
        }

        /* Munculkan notifikasi */
        .notification.show {
            display: block;
            animation: showNotification 0.5s ease forwards;
        }

        /* Sembunyikan notifikasi */
        .notification.hide {
            animation: hideNotification 0.5s ease forwards;
        }
    </style>
</head>

<body>
    <audio autoplay loop>
        <source src="/audio/song.mp3" type="audio/mpeg">
    </audio>
    <div class="envelope-wrapper">
        <div class="envelope">
            <div class="envelope-top"></div>
            <div class="card">
                <form id="messageForm">
                    <div>
                        <label for="message">Kesan Pesan:</label><br>
                        <textarea id="message" name="message" rows="3" cols="30" required></textarea>
                    </div>
                    <div>
                        <label for="wish">Wish:</label><br>
                        <textarea id="wish" name="wish" rows="3" cols="30" required></textarea>
                    </div>
                    <a href="/foto"><button type="button" id="sendButton" disabled onclick="sendWA();">Kirim</button></a>
                </form>
            </div>
            <button class="email-button">Open</button>
        </div>
        <div class="candle">
            <span class="smoke"></span>
            <span class="smoke"></span>
            <span class="smoke"></span>
            <span class="smoke"></span>
            <span class="smoke"></span>
            <span class="light"></span>
            <span class="drops"></span>
        </div>
    </div>
    <div class="notification" id="notification">Pesan berhasil dikirim! Wish Anda akan segera dikabulkan.</div>


    <script>
        // Event listener untuk halaman DOMContentLoaded
        document.addEventListener("DOMContentLoaded", function() {
            // Mendapatkan elemen yang diperlukan
            const emailButton = document.querySelector('.email-button');
            const envelope = document.querySelector('.envelope');
            const messageInput = document.getElementById('message');
            const wishInput = document.getElementById('wish');
            const sendButton = document.getElementById('sendButton');
            const notification = document.getElementById('notification');


            // Mengatur event listener untuk tombol "Open"
            emailButton.addEventListener('click', function() {
                // Mengubah kelas 'active' pada elemen 'envelope'
                envelope.classList.toggle('active');

                // Mengubah teks tombol berdasarkan status 'active'
                if (envelope.classList.contains('active')) {
                    emailButton.textContent = 'Close';
                } else {
                    emailButton.textContent = 'Open';
                }
            });

            // Fungsi untuk memeriksa apakah kedua bidang sudah diisi
            function checkInputs() {
                if (messageInput.value && wishInput.value) {
                    sendButton.disabled = false;
                    sendButton.style.cursor = 'pointer';
                    sendButton.style.opacity = 1;
                } else {
                    sendButton.disabled = true;
                    sendButton.style.cursor = 'not-allowed';
                    sendButton.style.opacity = 0.5;
                }
            }

            // Tambahkan event listener ke elemen input untuk memantau perubahan
            messageInput.addEventListener('input', checkInputs);
            wishInput.addEventListener('input', checkInputs);
        });

        // Fungsi untuk mengirim pesan ke WhatsApp
        function sendWA() {
            var phonenumber = "+6285156313240";

            // Ambil nilai pesan dan wish dari input form dengan ID
            var message = document.getElementById('message').value;
            var wish = document.getElementById('wish').value;

            // Kodekan pesan dan wish untuk URL
            var encodedMessage = encodeURIComponent("Pesan: " + message + "\n");
            var encodedWish = encodeURIComponent("Wish: " + wish + "\n");

            // Bentuk URL untuk mengirim pesan ke WhatsApp
            var url = "https://wa.me/" + phonenumber + "?text=" + encodedMessage + encodedWish;

            // Buka URL di tab baru untuk mengirim pesan
            var newWindow = window.open(url, '_blank');
            if (newWindow) {
                // Fokus pada jendela baru jika berhasil terbuka
                newWindow.focus();
            }
            notification.classList.remove('hide');
            notification.classList.add('show');

            // Matikan lilin
            document.querySelector('.light').style.display = 'none';


            setTimeout(function() {
                notification.classList.remove('show');
                notification.classList.add('hide');
            }, 10000); //
            // // Arahkan ke halaman 'message'
            // window.location.href = 'foto';
        }
    </script>
</body>

</html>