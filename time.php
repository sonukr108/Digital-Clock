<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="clock.png" type="image/x-icon">
    <title>PHP Introduction</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: black;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #liveTime {
            font-family: "Anton", sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 50px;
        }

        @media (min-width: 768px) {
            #liveTime {
                font-size: 100px;
                /* increased size for screens >= 768px */
            }
        }

        @media (min-width: 1024px) {
            #liveTime {
                font-size: 160px;
                /* increased size for screens >= 1024px */
            }
        }
        @media (min-width: 1440px) {
            #liveTime {
                font-size: 200px;
                /* increased size for screens >= 1440px */
            }
        }
    </style>
</head>

<body>
    <p id="liveTime"></p>

    <script>
        function fetchServerTime() {
            fetch('?getTime=1')
                .then(response => response.text())
                .then(time => {
                    document.getElementById('liveTime').innerHTML = time;
                });
        }

        setInterval(fetchServerTime, 1000);
        fetchServerTime(); // Initial call
    </script>
    <?php
    if (isset($_GET['getTime'])) {
        date_default_timezone_set("Asia/Kolkata");
        echo date("H : i : s A<br>");
        exit;
    }
    echo "Asia / Kolkata";
    ?>
</body>

</html>