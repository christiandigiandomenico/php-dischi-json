<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi Json</title>
    <link rel="stylesheet" href="./style.css">
    <!--vue-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!--axios-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    <nav>

        <img src="./img/spotify.png">

    </nav>

    <div id="app">

        <div class="container">

            <ul>
                <li v-for="(currentDisk, index) in diskList" @click="diskShowOff(index)">
                    <img :src="currentDisk.poster">
                    <div class="song-title">{{currentDisk.title}}</div>
                    <div class="band-name">{{currentDisk.author}}</div>
                    <div class="release">{{currentDisk.year}}</div>
                </li>
            </ul>

        </div>

        <div class="overlay-show" v-if="showOverlay">
            <div class="container">

                <div class="card-container">
                    <img :src="diskOverlay.poster">
                    <div class="song-title">{{diskOverlay.title}}</div>
                    <div class="band-name">{{diskOverlay.author}}</div>
                    <div class="release">{{diskOverlay.year}}</div>
                </div>

                <button @click="showOverlay = false">Chiudi</button>
            </div>
        </div>
    </div>

    </div>

    <script src="./js/main.js"></script>

</body>

</html>