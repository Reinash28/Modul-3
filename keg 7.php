<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function Play() {
            document.getElementById('audioPlayer').play();
        }

        function Pause() {
            document.getElementById('audioPlayer').pause();
        }

        function Stop() {
            document.getElementById('audioPlayer').pause();
            var audio = document.getElementById('audioPlayer');
            audio.currentTime = 0;
        }

        function audioPlayer() {
            var currentSong = 0;
            $("#audioPlayer")[0].src = $("#playlist li a")[0];
            $("#audioPlayer")[0].play();
            $("#playlist li a").click(function(e) {
                e.preventDefault();
                $("#audioPlayer")[0].src = this;
                $("#audioPlayer")[0].play();
                $("#playlist li").removeClass("current-song");
                currentSong = $(this).parent().index();
                $(this).parent().addClass("current-song");
            });

            $("#audioPlayer")[0].addEventListener("ended", function() {
                currentSong++;
                if (currentSong == $("#playlist li a").length)
                    currentSong = 0;
                $("#playlist li").removeClass("current-song");
                $("#playlist li:eq(" + currentSong + ")").addClass("current-song");
                $("#audioPlayer")[0].src = $("#playlist li a")[currentSong].href;
                $("#audioPlayer")[0].play();
            });
        }
    </script>
    <style media="screen">
        .gedi {
            margin: 0 auto;
        }
        
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 75%;
        }
        
        .peding {
            margin-left: 5px;
        }
    </style>
    <title>Pemutar Lagu</title>
</head>

<body>
    <div class="container">
        <div class="card col-sm-6">
            <div class="card-header bg-info text-white text-center">
                <h2>Play List with Javascript</h2>
            </div>
            <h2 align="center">Donkey Amiya </h2>
            <div class="card-body col-sm-12">
                <img src="https://i.ibb.co/gTr75M5/83123969-2849428675152158-8765839087891382272-n.jpg" alt="" class="img-fluid center" onclick="n();">
            </div>
            <audio src="" controls autoplay style="display: none;" preload="none" id="audioPlayer">
        Sorry, your browser doesn't support html5!
      </audio>
            <ul id="playlist" class='list-group'>
                <li class="current-song list-group-item"><a href="https://drive.google.com/uc?export=download&id=1J3_xVOtNCrXOuDxp6Nv1TzvXKSbIf2kD">Inochi ni kirawarete iru</a></li>
                <li class='list-group-item'><a href="https://drive.google.com/uc?export=download&id=1S55mO97k498XXUcGGxGwl0cW2baHVegc">Kawaki No Ameku</a></li>
                <li class='list-group-item'><a href="https://drive.google.com/file/d/17uU5xX1bzn5AboSHobVYb7ogmk2sN8TS/view?usp=sharing">Lemon</a></li>
            </ul>
            <script src="https://code.jquery.com/jquery-2.2.0.js"></script>
            <script src="audioPlayer.js"></script>
            <script>
                audioPlayer();
            </script>
            <div class="row col-12 ">
                <button type="button" class="btn btn-warning col peding" id="pause" onclick="Pause();">Pause</button>
                <button type="button" class="btn btn-danger col peding" id="play" onclick="Play();">Play</button>
                <button type="button" class="btn btn-success col peding" id="stop" onclick="Stop()">Stop</button>
            </div>

        </div>
    </div>
</body>

</html>
