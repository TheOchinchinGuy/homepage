<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>TO_Guy</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

    <!-- It's a loading animation. -->
    <div class="loader-wrapper" >
        <span class="loader" style="height: 75px;width: 75px;"><span class="loader-inner" ></span></span>
    </div>

    <div class="box">
        <div class="glass"></div>
        
            <div id="title">
                <h1 class="text-white font-bold text-7xl"> Hi! I'm <span>TO_Guy</span>.
                <br>
                </h1>
                <small>aka TheOchinchinGuy</small>
            </div>
            <br>
            <div id="title-2">
                <h2 class="text-white  text-3xl">
                    I'm a <span>Web Developer</span>
                    and<span> Music Lover</span>
                    <br><br>
                    <small>with a passion for <span>creating</span>.</small>

                </h2>
            </div>
            <br> 
            <!-- It's a list of links to my social media accounts. -->
            <div id="icons">
                <ul>
                    <li><a href="https://discord.com/invite/MdMX9d7"><i class="fa-brands fa-discord" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.tiktok.com/@theochinchinguy"><i class="fa-brands fa-tiktok" aria-hidden="true"></i></a></li>
                    <li><a href="https://soundcloud.com/theochinchinguy"><i class="fa-brands fa-soundcloud" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCyKQaIywk06XknjFmHCAtiQ"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a></li>
                </ul>
            </div>
    </div>
     
    <!-- It's including the file `toguy_scroll.html` in the `assets` folder. -->
    <?php include "assets/toguy_scroll.html" ?> 
    
    <!-- It's a loading animation. -->
    <script>
        $(window).on("load",function(){
          $(".loader-wrapper").delay(1000).fadeOut("slow");
          $(".loader-inner").delay(1000).fadeOut("slow");
        });
    </script>
</body>
</html>
