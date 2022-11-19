<link rel="stylesheet" href="../css/style.css">
<!-- <i class="fa-thin fa-music"></i> -->

<header>
    <div class="menu_side">
        <h1>Playlist</h1>
        <div class="playlist"> 
            <h4 class="active"><span></span> <i class="bi bi-music-note-beamed"></i>Playlist</h4>
            <h4><span></span><i class="bi bi-music-note-beamed"></i> Last Listening</h4>
            <h4><span></span><i class="bi bi-music-note-beamed"></i> Recommended</h4>
        </div>
        <div class="menu_song">
            <li class="songItem">
                <span>01</span>
                <img src="../image/damso.png" alt="">
                <h5>Humain 
                    <div class="subtitle">Damso</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="1"></i>
            </li>

            <li class="songItem">
                <span>02</span>
                <img src="../image/ninho.png" alt="">
                <h5>Filon
                    <div class="subtitle">Ninho</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
            </li>

            <li class="songItem">
                <span>03</span>
                <img src="../image/dadju.png" alt="">
                <h5>Robes 
                    <div class="subtitle">Dadju</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
            </li>

            <li class="songItem">
                <span>04</span>
                <img src="../image/destin.png" alt="">
                <h5>Goutte d'eau
                    <div class="subtitle">Ninho</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
            </li>

            <li class="songItem">
                <span>05</span>
                <img src="../image/gotham.png" alt="">
                <h5>Gotham 
                    <div class="subtitle">Booba</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
            </li>

            <li class="songItem">
                <span>06</span>
                <img src="../image/mood.png" alt="">
                <h5>Biberon 
                    <div class="subtitle">Franglish</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
            </li>

            <li class="songItem">
                <span>07</span>
                <img src="../image/ronisia.png" alt="">
                <h5>Suis-moi 
                    <div class="subtitle">Ronisia</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
            </li>

            <li class="songItem">
                <span>08</span>
                <img src="../image/ultra.png" alt="">
                <h5>Grain de sable 
                    <div class="subtitle">Booba</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
            </li>

            <li class="songItem">
                <span>09</span>
                <img src="../image/ultra.png" alt="">
                <h5>Mona Lisa
                    <div class="subtitle">Booba</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
            </li>

            <li class="songItem">
                <span>10</span>
                <img src="../image/ronisia.png" alt="">
                <h5>Suis-moi 
                    <div class="subtitle">Ronisia</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
            </li>

            <li class="songItem">
                <span>11</span>
                <img src="../image/ronisia.png" alt="">
                <h5>Suis-moi 
                    <div class="subtitle">Ronisia</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
            </li>

            <li class="songItem">
                <span>12</span>
                <img src="../image/ronisia.png" alt="">
                <h5>Suis-moi 
                    <div class="subtitle">Ronisia</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
            </li>

            <li class="songItem">
                <span>13</span>
                <img src="../image/ronisia.png" alt="">
                <h5>Suis-moi 
                    <div class="subtitle">Ronisia</div>
                </h5>
                <i class="bi playlistPlay bi-play-circle-fill" id="2"></i>
            </li>
        </div>
    </div>

    <div class="song_side"></div>
    
    <div class="master_play">        
        <div class="wave">
            <div class="wave1"></div>
            <div class="wave1"></div>
            <div class="wave1"></div>
        </div>

        <!-- cover, nom et titre du son encours de lecture  -->
        <img src="../image/damso.png" alt="" id="poster_master_play">
        <h5 id="title">
            Damso 
            <div class="subtitle">Humain</div>
        </h5>

        <!-- icones de controle et de telechargement des sons -->

        <div class="icon">
            <i class="bi shuffle bi-music-note-beamed">suivant</i>
            <i class="bi bi-skip-start-fill"></i>
            <i class="bi bi-play-fill"></i>
            <i class="bi bi-skip-end-fill"></i>
            <i class="bi bi-cloud-arrow-down-fill" id="download_music"></i>
        </div>

        <!-- barre de  controlle de temps -->

        <span id="currentStart">0:00</span>
        <div class="bar">
            <input type="range" id="seek" min="0" max="100">
            <div class="bar2" id="bar2"></div>
            <div class="dot"></div>
        </div>
    </div>
</header>