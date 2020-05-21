<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ mix('css/compo.css') }}" type="text/css">
    <script defer async src="{{ mix('js/app.js') }}" type="application/javascript"></script>
    <script defer async src="{{ mix('js/bootstrap.min.js') }}" type="application/javascript"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <title>IDEO</title>

    <!-- shadowbox -->
    <script src="https://www.silverlib.fr/app/shadowbox3/shadowbox.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="https://www.silverlib.fr/app/shadowbox3/shadowbox.css" />
    <script type="text/javascript">
        Shadowbox.init({
            handleOversize: "resize",
            modal: true,
            language: 'fr',
            players:  ['html','iframe','img','flv','wmp','qt'] // supprimer les options inutiles
        });
    </script>
    <!--End shadowbox -->
</head>

<body>

<div id="header">
    <div class="container">
        <div class="row">
            <div id="logo" class="col-md-6">
                <img src="{{ asset('images/common/logos/IDEO-Compositeur.svg') }}" alt="" style="max-width: 100%">
            </div>
            <div id="slogan" class="col-md-6">
                <p><i class="fas fa-map-marker-alt mr-2"></i>52 Rue du Val de Fer - 54230 NEUVES-MAISONS
                    <br class="d-lg-none d-block">
                    <a href="tel:0782569914"><i class="fas fa-mobile-alt ml-3 mr-2"></i>07&#8239;82&#8239;56&#8239;99&#8239;14</a>
                    <br>
                    <i class="fab fa-facebook mr-2 mt-2"></i><i class="fab fa-instagram mt-2"></i><i class="fab fa-linkedin-in mt-2 ml-2"></i></p>
            </div>
        </div>
    </div>
</div>

<nav id="menu" class="navbar navbar-expand-lg navbar-light bg-light sticky-top">

    <div class="container">
        <a class="navbar-brand" href="index.php" title="STUDIO NEERO"><img src="charte/logo-petit.png" alt="STUDIO NEERO"></a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse bg-inverse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#IDEO" title="Qui est IDEO">Qui est IDEO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#actu" title="Actualités">Actualités</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#albums" title="Albums musicaux">Albums</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#galerie" title="Galerie photos">Galerie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacts" title="Nous contacter">Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#commentaires" title="Commentaires">Commentaires</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section id="slider">
    <!-- InstanceBeginEditable name="slider" -->
    <div id="carouselExampleControls" class="carousel slide filtre" data-ride="carousel" style="position:relative; z-index: 9">


        <div class="carousel-inner">
            <div class="carousel-item opaciter active">
                <img class="d-block w-100" src="{{ asset('images/common/slide1.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <div class="carousel-item opaciter ">
                <img class="d-block w-100" src="{{ asset('images/common/slide2.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <div class="carousel-item opaciter ">
                <img class="d-block w-100" src="{{ asset('images/common/slide3.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- InstanceEndEditable -->
</section>

<section id="section1">
    <div id="IDEO" class="container">
        <h1>Derrière Ideo Compositeur, il y a Adrien François</h1>
        <div class="row">
            <div class="col-sm-12 col-lg-6 align-self-center sp-bord marg-mobil text-justify">
                <p>Rien ne prédestinait le jeune homme de 25 ans à faire de la musique. Mais à 7 ans, un accident l'oblige à tout réapprendre, y compris les gestes les plus simples. La musique l'apaise.</p>
                <p>A 15 ans, Adrien débute les cours de chant à l'école de musique de E3M, près de Nancy. Les instruments l'attirent. Il «&nbsp;gratouille&nbsp;» sur la guitare sèche puis sur la guitare électrique les titres d'Indochine. Mais l'exercice est difficile pour ses mains qui ne peuvent pas suivre.</p>
                <p>En reprenant le chant à 16 ans, il compose sa première musique, elle raconte déjà une histoire&nbsp;: celle d'un Alex Rider, un James Bond adolescent.
                    A partir de 17 ans, fraîchement déscolarisé, un professionnel le prend sous son aile et lui enseigne le métier d'ingénieur du son.</p>
                <p>Les compositions s'enchaînent et Adrien sort son premier album le jour de ses 20 ans. <strong><i>De l'ombre à la lumière</i></strong> raconte son histoire.
                    Deux ans plus tard, <strong><i>Discover</i></strong>, son deuxième album voit le jour. Parmi ses nombreuses fiertés&nbsp;: avoir obtenu les droits pour réarranger le titre «&nbsp;The 2nd law&nbsp;: isolated system&nbsp;» de Muse.</p>
                <p>En 2017, Ideo Compositeur réalise la première partie de Fabienne Stein à l'Arsenal de Toul. Une expérience qui lui donne le goût de la scène.
                    Dans le même temps, naît le besoin de créer un endroit pour composer. Construire son propre studio devient donc une évidence et le projet se concrétise en 2019 puisqu'Ideo prend les commandes de NEERO Studio en septembre.</p>
                <p>Musiques de films, bandes son de spectacles pyrotechniques, musique d’événements (mariage, naissance...) Ideo créé de tout et s'adapte aux différents univers.</p>
            </div>
            <div class="col-sm-12 col-lg-6 align-self-center resp-cent">
                <div class="mb-3" data-aos="zoom-in" data-aos-duration="3000">
                    <img src="{{ asset('images/common/2019-10-NEERO-16-Sublimanie-8677.jpg') }}" class="img-fluid" alt="Adrien François">
                </div>
                <div class="text-center bttn-savoir" data-aos="flip-right"><a href="https://studio-neero.com/" target="_blank" class="btn btn-custom" title="En savoir plus sur NEERO STUDIO">En savoir plus sur NEERO STUDIO</a></div>
            </div>
        </div>
    </div>

</section>


<!-- InstanceBeginEditable name="integration" -->
<section id="section2">
    <div id="actu" class="container">
        <div class="span10">
            <h1 class="text-center">Les dernières actualités</h1>
            <!-- PHP Social Stream By Axent Media -->
            <link href="https://studio-neero.com/social/public/css/colorbox.css" rel="stylesheet" type="text/css" />
            <link href="https://studio-neero.com/social/public/css/styles.css" rel="stylesheet" type="text/css" />
            <script type="text/javascript" src="https://studio-neero.com/social/public/js/sb-utils.js"></script>
            <script type="text/javascript" src="https://studio-neero.com/social/public/js/sb-wall.js"></script>
            <style type="text/css">#timeline_wall1.sboard .origin-flag.sb-linkedin{background-color: rgba(24, 132, 188, 0.8) !important}#timeline_wall1.sboard .origin-flag.sb-linkedin:after{border-left: 8px solid rgba(24, 132, 188, 1) !important}#sb_wall1 .sb-linkedin.sb-hover:hover, #sb_wall1 .sb-linkedin.active{background-color: #1884BC !important;border-color: #1884BC !important;color: #fff !important}#timeline_wall1.sboard .origin-flag.sb-facebook{background-color: rgba(48, 87, 144, 0.8) !important}#timeline_wall1.sboard .origin-flag.sb-facebook:after{border-left: 8px solid rgba(48, 87, 144, 1) !important}#sb_wall1 .sb-facebook.sb-hover:hover, #sb_wall1 .sb-facebook.active{background-color: #305790 !important;border-color: #305790 !important;color: #fff !important}#timeline_wall1.sboard .origin-flag.sb-twitter{background-color: rgba(6, 208, 254, 0.8) !important}#timeline_wall1.sboard .origin-flag.sb-twitter:after{border-left: 8px solid rgba(6, 208, 254, 1) !important}#sb_wall1 .sb-twitter.sb-hover:hover, #sb_wall1 .sb-twitter.active{background-color: #06d0fe !important;border-color: #06d0fe !important;color: #fff !important}#timeline_wall1.sboard .origin-flag.sb-instagram{background-color: rgba(41, 84, 119, 0.8) !important}#timeline_wall1.sboard .origin-flag.sb-instagram:after{border-left: 8px solid rgba(41, 84, 119, 1) !important}#sb_wall1 .sb-instagram.sb-hover:hover, #sb_wall1 .sb-instagram.active{background-color: #295477 !important;border-color: #295477 !important;color: #fff !important}#timeline_wall1.sboard .origin-flag.sb-google{background-color: rgba(192, 77, 46, 0.8) !important}#timeline_wall1.sboard .origin-flag.sb-google:after{border-left: 8px solid rgba(192, 77, 46, 1) !important}#sb_wall1 .sb-google.sb-hover:hover, #sb_wall1 .sb-google.active{background-color: #c04d2e !important;border-color: #c04d2e !important;color: #fff !important}#timeline_wall1.sboard .origin-flag.sb-pinterest{background-color: rgba(203, 18, 24, 0.8) !important}#timeline_wall1.sboard .origin-flag.sb-pinterest:after{border-left: 8px solid rgba(203, 18, 24, 1) !important}#sb_wall1 .sb-pinterest.sb-hover:hover, #sb_wall1 .sb-pinterest.active{background-color: #cb1218 !important;border-color: #cb1218 !important;color: #fff !important}#timeline_wall1.sboard .origin-flag.sb-tumblr{background-color: rgba(46, 78, 101, 0.8) !important}#timeline_wall1.sboard .origin-flag.sb-tumblr:after{border-left: 8px solid rgba(46, 78, 101, 1) !important}#sb_wall1 .sb-tumblr.sb-hover:hover, #sb_wall1 .sb-tumblr.active{background-color: #2E4E65 !important;border-color: #2E4E65 !important;color: #fff !important}#timeline_wall1.sboard .origin-flag.sb-delicious{background-color: rgba(45, 110, 174, 0.8) !important}#timeline_wall1.sboard .origin-flag.sb-delicious:after{border-left: 8px solid rgba(45, 110, 174, 1) !important}#sb_wall1 .sb-delicious.sb-hover:hover, #sb_wall1 .sb-delicious.active{background-color: #2d6eae !important;border-color: #2d6eae !important;color: #fff !important}#timeline_wall1.sboard .origin-flag.sb-flickr{background-color: rgba(255, 1, 133, 0.8) !important}#timeline_wall1.sboard .origin-flag.sb-flickr:after{border-left: 8px solid rgba(255, 1, 133, 1) !important}#sb_wall1 .sb-flickr.sb-hover:hover, #sb_wall1 .sb-flickr.active{background-color: #ff0185 !important;border-color: #ff0185 !important;color: #fff !important}#timeline_wall1.sboard .origin-flag.sb-youtube{background-color: rgba(184, 0, 0, 0.8) !important}#timeline_wall1.sboard .origin-flag.sb-youtube:after{border-left: 8px solid rgba(184, 0, 0, 1) !important}#sb_wall1 .sb-youtube.sb-hover:hover, #sb_wall1 .sb-youtube.active{background-color: #b80000 !important;border-color: #b80000 !important;color: #fff !important}#timeline_wall1.sboard .origin-flag.sb-vimeo{background-color: rgba(0, 160, 220, 0.8) !important}#timeline_wall1.sboard .origin-flag.sb-vimeo:after{border-left: 8px solid rgba(0, 160, 220, 1) !important}#sb_wall1 .sb-vimeo.sb-hover:hover, #sb_wall1 .sb-vimeo.active{background-color: #00a0dc !important;border-color: #00a0dc !important;color: #fff !important}#timeline_wall1.sboard .origin-flag.sb-stumbleupon{background-color: rgba(236, 68, 21, 0.8) !important}#timeline_wall1.sboard .origin-flag.sb-stumbleupon:after{border-left: 8px solid rgba(236, 68, 21, 1) !important}#sb_wall1 .sb-stumbleupon.sb-hover:hover, #sb_wall1 .sb-stumbleupon.active{background-color: #ec4415 !important;border-color: #ec4415 !important;color: #fff !important}#timeline_wall1.sboard .origin-flag.sb-deviantart{background-color: rgba(73, 93, 81, 0.8) !important}#timeline_wall1.sboard .origin-flag.sb-deviantart:after{border-left: 8px solid rgba(73, 93, 81, 1) !important}#sb_wall1 .sb-deviantart.sb-hover:hover, #sb_wall1 .sb-deviantart.active{background-color: #495d51 !important;border-color: #495d51 !important;color: #fff !important}#timeline_wall1.sboard .origin-flag.sb-rss{background-color: rgba(215, 139, 45, 0.8) !important}#timeline_wall1.sboard .origin-flag.sb-rss:after{border-left: 8px solid rgba(215, 139, 45, 1) !important}#sb_wall1 .sb-rss.sb-hover:hover, #sb_wall1 .sb-rss.active{background-color: #d78b2d !important;border-color: #d78b2d !important;color: #fff !important}#timeline_wall1.sboard .origin-flag.sb-soundcloud{background-color: rgba(255, 51, 0, 0.8) !important}#timeline_wall1.sboard .origin-flag.sb-soundcloud:after{border-left: 8px solid rgba(255, 51, 0, 1) !important}#sb_wall1 .sb-soundcloud.sb-hover:hover, #sb_wall1 .sb-soundcloud.active{background-color: #ff3300 !important;border-color: #ff3300 !important;color: #fff !important}#timeline_wall1.sboard .origin-flag.sb-vk{background-color: rgba(76, 117, 163, 0.8) !important}#timeline_wall1.sboard .origin-flag.sb-vk:after{border-left: 8px solid rgba(76, 117, 163, 1) !important}#sb_wall1 .sb-vk.sb-hover:hover, #sb_wall1 .sb-vk.active{background-color: #4c75a3 !important;border-color: #4c75a3 !important;color: #fff !important}#timeline_wall1.sboard .origin-flag.sb-vine{background-color: rgba(57, 169, 123, 0.8) !important}#timeline_wall1.sboard .origin-flag.sb-vine:after{border-left: 8px solid rgba(57, 169, 123, 1) !important}#sb_wall1 .sb-vine.sb-hover:hover, #sb_wall1 .sb-vine.active{background-color: #39a97b !important;border-color: #39a97b !important;color: #fff !important}#timeline_wall1.sboard .sb-item .sb-container .sb-inner, #timeline_wall1.sboard .sb-item .sb-foot{background-color: #ffffff}#timeline_wall1.sboard .sb-item .sb-container{border: 1px solid #e5e5e5}#timeline_wall1.sboard.sb-modern .sb-item .sb-footer a{color: rgba(0, 0, 0, 0.8) !important}#timeline_wall1.sboard, #timeline_wall1.sboard a{font-size: 11px}#timeline_wall1.sboard .sb-heading{font-size: 12px !important}#timeline_wall1.sboard .sb-item .sb-title a{color: #000000}#timeline_wall1.sboard .sb-item{color: rgba(0, 0, 0, 0.8)}#timeline_wall1.sboard .sb-item a{color: #305790}#timeline_wall1.sboard .sb-item a:visited{color: rgba(48, 87, 144, 0.8)}#timeline_wall1.sboard .sb-content{border-bottom-left-radius: 0 !important;border-bottom-right-radius: 0 !important}</style>

            <div id="sb_wall1">
                <div class="filter-items sb-modern">
                    <span class="sb-hover filter-label active" data-filter="*" title="Show All"><i class="sb-icon sb-ellipsis-h"></i></span>
                    <span class="sb-hover sb-facebook filter-label" data-filter=".sb-facebook"><i class="sb-icon sb-facebook"></i></span>
                </div>
                <div id="timeline_wall1" class="sboard sb-wall sb-modern sb-modern-light" data-columns>
                    <div class="sb-gsizer"></div><div class="sb-isizer"></div>
                    <div class="sb-item sb-facebook facebook-1-0" id="1583507322-535938309">
                        <div class="sb-container sb-imgexpand">
                            <span class="origin-flag sb-facebook"><i class="sb-icon sb-facebook"></i></span>
                            <div class="sb-thumb">
                                <a href="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-0/cp0/e15/q65/p480x480/89070469_111301910480916_141087150232829952_o.jpg?_nc_cat=102&amp;_nc_sid=dd9801&amp;_nc_ohc=vIZSK7MqOCoAX-i0BTN&amp;_nc_ht=scontent-cdt1-1.xx&amp;_nc_tp=3&amp;oh=fc7190c41c742d8ca6b3b413d37353db&amp;oe=5EECEECA" class="icbox" data-size="720,480" rel="nofollow" target="_blank">
                                    <img class="sb-img" data-original="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-0/cp0/e15/q65/p480x480/89070469_111301910480916_141087150232829952_o.jpg?_nc_cat=102&amp;_nc_sid=dd9801&amp;_nc_ohc=vIZSK7MqOCoAX-i0BTN&amp;_nc_ht=scontent-cdt1-1.xx&amp;_nc_tp=3&amp;oh=fc7190c41c742d8ca6b3b413d37353db&amp;oe=5EECEECA" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iLTQzIC00MyAxMjQgMTI0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHN0cm9rZT0iI2ZmZiI+ICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+ICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxIDEpIiBzdHJva2Utd2lkdGg9IjIiPiAgICAgICAgICAgIDxjaXJjbGUgc3Ryb2tlLW9wYWNpdHk9Ii41IiBjeD0iMTgiIGN5PSIxOCIgcj0iMTgiLz4gICAgICAgICAgICA8cGF0aCBkPSJNMzYgMThjMC05Ljk0LTguMDYtMTgtMTgtMTgiPiAgICAgICAgICAgICAgICA8YW5pbWF0ZVRyYW5zZm9ybSAgICAgICAgICAgICAgICAgICAgYXR0cmlidXRlTmFtZT0idHJhbnNmb3JtIiAgICAgICAgICAgICAgICAgICAgdHlwZT0icm90YXRlIiAgICAgICAgICAgICAgICAgICAgZnJvbT0iMCAxOCAxOCIgICAgICAgICAgICAgICAgICAgIHRvPSIzNjAgMTggMTgiICAgICAgICAgICAgICAgICAgICBkdXI9IjFzIiAgICAgICAgICAgICAgICAgICAgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiLz4gICAgICAgICAgICA8L3BhdGg+ICAgICAgICA8L2c+ICAgIDwvZz48L3N2Zz4=" alt="facebook">
                                </a>
                            </div>
                            <div class="sb-inner">
                                <div class="sb-user sb-usermini">
                                    <div class="sb-uthumb">
                                        <a href="https://www.facebook.com/111295840481523" rel="nofollow" target="_blank"><img class="sb-img" alt="Studio NEERO" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c12.0.50.50a/p50x50/89339281_111298547147919_1806757076295221248_o.jpg?_nc_cat=110&_nc_sid=dbb9e7&_nc_ohc=BPk5rjADSIYAX-XAvdQ&_nc_ht=scontent-cdt1-1.xx&_nc_tp=5&oh=bd56d84e2b602fc9a158a4df7005575b&oe=5EED9C82"></a>
                                    </div>
                                    <div class="sb-uinfo">
                                        <div class="sb-utitle">
                                            <a href="https://www.facebook.com/111295840481523" rel="nofollow" target="_blank">Studio NEERO</a></div><div class="sb-uname"><a href="https://www.facebook.com/111295840481523/posts/111302007147573/" rel="nofollow" target="_blank">Photos Ajouté</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="sb-title">
                                    <a href="https://www.facebook.com/111295840481523" rel="nofollow" target="_blank">Photo de couverture de Studio NEERO</a>
                                </span>
                                <span class="sb-text sb-expand sb-notitle">Studio NEERO a changé sa photo de couverture.</span>
                                <span class="sb-metadata">
                                    <span class="sb-meta">
                                        <span class="likes"><i class="sb-bico sb-star"></i> 4 J'aime</span>
                                    </span>
                                    <span class="sb-meta item-likes">
                                        <a href="https://www.facebook.com/1087194264742084" rel="nofollow" target="_blank"><img class="sb-img" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t31.0-1/p100x100/16992227_1087195268075317_7715263484711511973_o.png.webp?_nc_cat=101&_nc_sid=dbb9e7&_nc_ohc=_-guhy1CTKYAX_OsbpA&_nc_ht=scontent-cdt1-1.xx&oh=64a379cbfda64f7a96aa701faad63237&oe=5EECECFF" title="Arobase Systèmes" alt=""></a>
                                        <a href="https://www.facebook.com/3066731593347231" rel="nofollow" target="_blank"><img class="sb-img" src="https://platform-lookaside.fbsbx.com/platform/profilepic/?psid=3066731593347231&height=100&width=100&ext=1592641668&hash=AeTElSz1xgArHHtI" title="Ido Lera" alt=""></a>
                                        <a href="https://www.facebook.com/2736613029795021" rel="nofollow" target="_blank"><img class="sb-img" src="https://platform-lookaside.fbsbx.com/platform/profilepic/?psid=2736613029795021&height=100&width=100&ext=1592641668&hash=AeT4x0oPGbPpEGJb" title="Pierre-Antoine George" alt=""></a>
                                        <a href="https://www.facebook.com/3157543800933522" rel="nofollow" target="_blank"><img class="sb-img" src="https://platform-lookaside.fbsbx.com/platform/profilepic/?psid=3157543800933522&height=100&width=100&ext=1592641668&hash=AeRuYtTjLhKriR54" title="Stéphanie Sublimanie" alt=""></a>
                                    </span>
                                </span>
                                <div class="sb-info">
                                    <span class="sb-share">
                                        <a class="sb-facebook sb-hover" href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2F111295840481523%2Fposts%2F111302007147573%2F&amp;t=Photo+de+couverture+de+Studio+NEERO" rel="nofollow" target="_blank">
                                            <i class="sb-sicon sb-facebook">Facebook</i>
                                        </a>
                                        <a class="sb-twitter sb-hover" href="https://twitter.com/share?url=https%3A%2F%2Fwww.facebook.com%2F111295840481523%2Fposts%2F111302007147573%2F&amp;text=Photo+de+couverture+de+Studio+NEERO" rel="nofollow" target="_blank">
                                            <i class="sb-sicon sb-twitter">Twitter</i>
                                        </a>
                                        <a class="sb-pinterest sb-hover" href="//pinterest.com/pin/create/link/?url=https%3A%2F%2Fwww.facebook.com%2F111295840481523%2Fposts%2F111302007147573%2F&amp;description=Photo+de+couverture+de+Studio+NEERO&amp;media=https%3A%2F%2Fscontent-cdt1-1.xx.fbcdn.net%2Fv%2Ft1.0-0%2Fcp0%2Fe15%2Fq65%2Fp480x480%2F89070469_111301910480916_141087150232829952_o.jpg%3F_nc_cat%3D102%26_nc_sid%3Ddd9801%26_nc_ohc%3DvIZSK7MqOCoAX-i0BTN%26_nc_ht%3Dscontent-cdt1-1.xx%26_nc_tp%3D3%26oh%3Dfc7190c41c742d8ca6b3b413d37353db%26oe%3D5EECEECA" rel="nofollow" target="_blank">
                                            <i class="sb-sicon sb-pinterest">Pinterest</i>
                                        </a>
                                        <a class="sb-linkedin sb-hover" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fwww.facebook.com%2F111295840481523%2Fposts%2F111302007147573%2F&amp;title=Photo+de+couverture+de+Studio+NEERO" rel="nofollow" target="_blank">
                                            <i class="sb-sicon sb-linkedin">LinkedIn</i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="sb-foot">
                                <div class="sb-footer">
                                    <i class="sb-bico sb-pencil" title="Pencil"></i>
                                    <a href="https://www.facebook.com/111295840481523/posts/111302007147573/" rel="nofollow" target="_blank">Posté le: <time title="mars  6, 2020 04:08 " datetime="2020-03-06T16:08:42+01:00">Il y a 2 mois</time></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sb-item sb-facebook facebook-1-0" id="1583507167-3867226984">
                        <div class="sb-container sb-imgexpand">
                            <span class="origin-flag sb-facebook"><i class="sb-icon sb-facebook"></i></span>
                            <div class="sb-thumb">
                                <a href="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-0/cp0/e15/q65/p480x480/89339281_111298547147919_1806757076295221248_o.jpg?_nc_cat=110&amp;_nc_sid=85a577&amp;_nc_ohc=BPk5rjADSIYAX-XAvdQ&amp;_nc_ht=scontent-cdt1-1.xx&amp;_nc_tp=3&amp;oh=6d195a10438444085b0bae4fa3cbf607&amp;oe=5EEC1D55" class="icbox" data-size="720,480" rel="nofollow" target="_blank">
                                    <img class="sb-img" data-original="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-0/cp0/e15/q65/p480x480/89339281_111298547147919_1806757076295221248_o.jpg?_nc_cat=110&amp;_nc_sid=85a577&amp;_nc_ohc=BPk5rjADSIYAX-XAvdQ&amp;_nc_ht=scontent-cdt1-1.xx&amp;_nc_tp=3&amp;oh=6d195a10438444085b0bae4fa3cbf607&amp;oe=5EEC1D55" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iLTQzIC00MyAxMjQgMTI0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHN0cm9rZT0iI2ZmZiI+ICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+ICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxIDEpIiBzdHJva2Utd2lkdGg9IjIiPiAgICAgICAgICAgIDxjaXJjbGUgc3Ryb2tlLW9wYWNpdHk9Ii41IiBjeD0iMTgiIGN5PSIxOCIgcj0iMTgiLz4gICAgICAgICAgICA8cGF0aCBkPSJNMzYgMThjMC05Ljk0LTguMDYtMTgtMTgtMTgiPiAgICAgICAgICAgICAgICA8YW5pbWF0ZVRyYW5zZm9ybSAgICAgICAgICAgICAgICAgICAgYXR0cmlidXRlTmFtZT0idHJhbnNmb3JtIiAgICAgICAgICAgICAgICAgICAgdHlwZT0icm90YXRlIiAgICAgICAgICAgICAgICAgICAgZnJvbT0iMCAxOCAxOCIgICAgICAgICAgICAgICAgICAgIHRvPSIzNjAgMTggMTgiICAgICAgICAgICAgICAgICAgICBkdXI9IjFzIiAgICAgICAgICAgICAgICAgICAgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiLz4gICAgICAgICAgICA8L3BhdGg+ICAgICAgICA8L2c+ICAgIDwvZz48L3N2Zz4=" alt="facebook">
                                </a>
                            </div>
                            <div class="sb-inner">
                                <div class="sb-user sb-usermini">
                                    <div class="sb-uthumb">
                                        <a href="https://www.facebook.com/111295840481523" rel="nofollow" target="_blank">
                                            <img class="sb-img" alt="Studio NEERO" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/c12.0.50.50a/p50x50/89339281_111298547147919_1806757076295221248_o.jpg?_nc_cat=110&_nc_sid=dbb9e7&_nc_ohc=BPk5rjADSIYAX-XAvdQ&_nc_ht=scontent-cdt1-1.xx&_nc_tp=5&oh=bd56d84e2b602fc9a158a4df7005575b&oe=5EED9C82"></a>
                                    </div>
                                    <div class="sb-uinfo">
                                        <div class="sb-utitle">
                                            <a href="https://www.facebook.com/111295840481523" rel="nofollow" target="_blank">Studio NEERO</a>
                                        </div>
                                        <div class="sb-uname">
                                            <a href="https://www.facebook.com/111295840481523/posts/111298713814569/?substory_index=0" rel="nofollow" target="_blank">Photos Ajouté</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="sb-title">
                                    <a href="https://www.facebook.com/111295840481523" rel="nofollow" target="_blank">Studio NEERO</a>
                                </span>
                                <span class="sb-text sb-expand sb-notitle">Studio NEERO a changé sa photo de profil.</span>
                                <span class="sb-metadata">
                                    <span class="sb-meta">
                                        <span class="likes"><i class="sb-bico sb-star"></i> 3 J'aime</span>
                                    </span>
                                    <span class="sb-meta item-likes">
                                        <a href="https://www.facebook.com/1087194264742084" rel="nofollow" target="_blank">
                                            <img class="sb-img" src="https://scontent-cdt1-1.xx.fbcdn.net/v/t31.0-1/p100x100/16992227_1087195268075317_7715263484711511973_o.png.webp?_nc_cat=101&_nc_sid=dbb9e7&_nc_ohc=_-guhy1CTKYAX_OsbpA&_nc_ht=scontent-cdt1-1.xx&oh=64a379cbfda64f7a96aa701faad63237&oe=5EECECFF" title="Arobase Systèmes" alt="">
                                        </a>
                                        <a href="https://www.facebook.com/2736613029795021" rel="nofollow" target="_blank">
                                            <img class="sb-img" src="https://platform-lookaside.fbsbx.com/platform/profilepic/?psid=2736613029795021&height=100&width=100&ext=1592641668&hash=AeT4x0oPGbPpEGJb" title="Pierre-Antoine George" alt="">
                                        </a>
                                        <a href="https://www.facebook.com/3157543800933522" rel="nofollow" target="_blank">
                                            <img class="sb-img" src="https://platform-lookaside.fbsbx.com/platform/profilepic/?psid=3157543800933522&height=100&width=100&ext=1592641668&hash=AeRuYtTjLhKriR54" title="Stéphanie Sublimanie" alt="">
                                        </a>
                                    </span>
                                </span>
                                <div class="sb-info">
                                    <span class="sb-share">
                                        <a class="sb-facebook sb-hover" href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2F111295840481523%2Fposts%2F111298713814569%2F%3Fsubstory_index%3D0&amp;t=Studio+NEERO" rel="nofollow" target="_blank">
                                            <i class="sb-sicon sb-facebook">Facebook</i>
                                        </a>
                                        <a class="sb-twitter sb-hover" href="https://twitter.com/share?url=https%3A%2F%2Fwww.facebook.com%2F111295840481523%2Fposts%2F111298713814569%2F%3Fsubstory_index%3D0&amp;text=Studio+NEERO" rel="nofollow" target="_blank">
                                            <i class="sb-sicon sb-twitter">Twitter</i>
                                        </a>
                                        <a class="sb-pinterest sb-hover" href="//pinterest.com/pin/create/link/?url=https%3A%2F%2Fwww.facebook.com%2F111295840481523%2Fposts%2F111298713814569%2F%3Fsubstory_index%3D0&amp;description=Studio+NEERO&amp;media=https%3A%2F%2Fscontent-cdt1-1.xx.fbcdn.net%2Fv%2Ft1.0-0%2Fcp0%2Fe15%2Fq65%2Fp480x480%2F89339281_111298547147919_1806757076295221248_o.jpg%3F_nc_cat%3D110%26_nc_sid%3D85a577%26_nc_ohc%3DBPk5rjADSIYAX-XAvdQ%26_nc_ht%3Dscontent-cdt1-1.xx%26_nc_tp%3D3%26oh%3D6d195a10438444085b0bae4fa3cbf607%26oe%3D5EEC1D55" rel="nofollow" target="_blank">
                                            <i class="sb-sicon sb-pinterest">Pinterest</i>
                                        </a>
                                        <a class="sb-linkedin sb-hover" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fwww.facebook.com%2F111295840481523%2Fposts%2F111298713814569%2F%3Fsubstory_index%3D0&amp;title=Studio+NEERO" rel="nofollow" target="_blank">
                                            <i class="sb-sicon sb-linkedin">LinkedIn</i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="sb-foot">
                                <div class="sb-footer">
                                    <i class="sb-bico sb-pencil" title="Pencil"></i>
                                    <a href="https://www.facebook.com/111295840481523/posts/111298713814569/?substory_index=0" rel="nofollow" target="_blank">Posté le: <time title="mars  6, 2020 04:06 " datetime="2020-03-06T16:06:07+01:00">Il y a 2 mois</time></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sb-loadmore" data-nonce="af8e438611">
                    <p>Charger la suite</p>
                </div>
            </div>
            <script type="text/javascript">jQuery.noConflict();            jQuery(document).ready(function($) {function sb_getwinsize() {var wsize = {winCurrentWidth: $(window).width(),newWidth: 0,winCurrentHeight: $(window).height(),newHeight: 0};var gapWidth = Math.round((wsize.winCurrentWidth * 15) / 100);var currentWidth = wsize.winCurrentWidth-gapWidth;wsize.newWidth = currentWidth-10;var gapHeight = Math.round((wsize.winCurrentHeight * 5) / 100);var currentHeight = wsize.winCurrentHeight-gapHeight;wsize.newHeight = currentHeight-30;return wsize;}                function sb_setwallgrid($wall) {                var wallw = $wall.width();                if (wallw >= 960 && wallw < 1200) {                var ncol = 4;                $("#timeline_wall1.sboard .sb-item, #timeline_wall1.sboard .sb-isizer").css({ "width": "24.219%", "margin-bottom": "10.003px" });                            $("#timeline_wall1.sboard .sb-item.sb-twofold").css({ "width": "49.480%" });                            $("#timeline_wall1.sboard .sb-item.sb-threefold").css({ "width": "74.741%" });                            $("#timeline_wall1.sboard .sb-gsizer").css({ "width": "1.042%" });                }                else if (wallw >= 768 && wallw < 959) {                var ncol = 3;                $("#timeline_wall1.sboard .sb-item, #timeline_wall1.sboard .sb-isizer").css({ "width": "32.465%", "margin-bottom": "9.999px" });                            $("#timeline_wall1.sboard .sb-item.sb-twofold").css({ "width": "66.232%" });                            $("#timeline_wall1.sboard .sb-item.sb-threefold").css({ "width": "99.999%" });                            $("#timeline_wall1.sboard .sb-gsizer").css({ "width": "1.302%" });                }                else if (wallw >= 600 && wallw < 767) {                var ncol = 3;                $("#timeline_wall1.sboard .sb-item, #timeline_wall1.sboard .sb-isizer").css({ "width": "32.222%", "margin-bottom": "10.002px" });                            $("#timeline_wall1.sboard .sb-item.sb-twofold").css({ "width": "66.111%" });                            $("#timeline_wall1.sboard .sb-item.sb-threefold").css({ "width": "100.000%" });                            $("#timeline_wall1.sboard .sb-gsizer").css({ "width": "1.667%" });                }                else if (wallw >= 480 && wallw < 599) {                var ncol = 2;                $("#timeline_wall1.sboard .sb-item, #timeline_wall1.sboard .sb-isizer").css({ "width": "48.959%", "margin-bottom": "9.998px" });                            $("#timeline_wall1.sboard .sb-item.sb-twofold").css({ "width": "100.001%" });                            $("#timeline_wall1.sboard .sb-item.sb-threefold").css({ "width": "151.043%" });                            $("#timeline_wall1.sboard .sb-gsizer").css({ "width": "2.083%" });                }                else if (wallw >= 320 && wallw < 479) {                var ncol = 1;                $("#timeline_wall1.sboard .sb-item, #timeline_wall1.sboard .sb-isizer").css({ "width": "100%", "margin-bottom": "10.000px" });                            $("#timeline_wall1.sboard .sb-item.sb-twofold").css({ "width": "100%" });                            $("#timeline_wall1.sboard .sb-item.sb-threefold").css({ "width": "100%" });                            $("#timeline_wall1.sboard .sb-gsizer").css({ "width": "0%" });                }                else if (wallw <= 319) {                var ncol = 1;                $("#timeline_wall1.sboard .sb-item, #timeline_wall1.sboard .sb-isizer").css({ "width": "100%", "margin-bottom": "10.001px" });                            $("#timeline_wall1.sboard .sb-item.sb-twofold").css({ "width": "100%" });                            $("#timeline_wall1.sboard .sb-item.sb-threefold").css({ "width": "100%" });                            $("#timeline_wall1.sboard .sb-gsizer").css({ "width": "0%" });                } else {var ncol = 4;$("#timeline_wall1.sboard .sb-item, #timeline_wall1.sboard .sb-isizer").css({ "width": "24.375%", "margin-bottom": "9.996px" });                            $("#timeline_wall1.sboard .sb-item.sb-twofold").css({ "width": "49.583%" });                            $("#timeline_wall1.sboard .sb-item.sb-threefold").css({ "width": "74.791%" });                            $("#timeline_wall1.sboard .sb-gsizer").css({ "width": "0.833%" });}var twgut = 10 * (ncol-1);                var itemw = (wallw - twgut) / ncol;                $wall.isotope({                masonry: {                columnWidth: parseFloat(itemw.toFixed(3)),                gutter: 10                }                });                }    var $wall = $("#timeline_wall1").isotope({                    itemSelector: ".sb-item",                    layoutMode: "masonry",getSortData: {                      dateid: function( itemElem ) {                      return $( itemElem ).attr("id");                      }},                    percentPosition: false,                    transitionDuration: 400,                    originLeft: true,                        });sb_setwallgrid($wall);                $("#timeline_wall1 .sb-thumb img").lazyload({                    effect: "fadeIn",                    skip_invisible: true,                    appear: function() {                        $wall.isotope("layout");                    }                });                /* layout wall on first load */                $(window).one("transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd", function(e) {                    $(window).trigger("scroll");                    $(window).trigger("resize");                    $wall.isotope("layout");                });                /* set wall grid on container resize */                $(window).resize(function() {sb_setwallgrid($wall);                    setTimeout(function() {                        $(window).trigger("scroll");                    }, 500);                });    /* Filter wall by networks */$(".filter-items").on("click", "span", function() {                    $(".filter-label,.sb-filter").removeClass("active");                    var filterValue = $(this).addClass("active").attr("data-filter");                    if ( $(this).hasClass( "filter-label" ) ) {$wall.isotope({ filter: filterValue });                    $wall.one( "arrangeComplete", function() {                            $(window).trigger("resize");                    });                    }    });scrollStop(function () {                        $wall.isotope("layout");                $(window).trigger("resize");                    });                $("#sb_wall1").on("click", ".sb-loadmore", function() {                lmobj = $("#sb_wall1 .sb-loadmore");                lmnonce = lmobj.attr("data-nonce");$('#sb_wall1 .sb-loadmore').html('<p class="sb-loading">&nbsp;</p>');                $.ajax({                type: "post",                url: "https://studio-neero.com/social/ajax.php",                data: {                    action: "sb_loadmore",                    attr: {"id":"1","type":"wall","network":{"facebook":{"facebook_id_1":["111295840481523"],"facebook_pagefeed":"posts"},"instagram":{"instagram_id_1":["self"]}},"theme":"sb-modern-light","itemwidth":250,"results":30,"iframe":"media","breakpoints":["4","4","3","3","2","1","1"],"filter_search":false,"filters_order":"linkedin,facebook,twitter,instagram,google,pinterest","display_ads":false,"debuglog":1,"cache":360,"add_files":true,"fixWidth":"block"},                    nonce: lmnonce,                    label: "wall1"                },                cache: false                })                .done(function( response ) {                    /* append and layout items */                    var lmdata = $(response);                    var $items = lmdata.filter(".sb-item");                    var $slides = lmdata.filter(".sb-slide");                    $wall.append( $items ).isotope( "appended", $items );                    $("#sb_slides_wall1").append( $slides );                    $(window).one("transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd", function(e) {                                        lmdata.find(".sb-thumb img").lazyload({                    effect: "fadeIn",                    skip_invisible: true,                    appear: function() {                        $wall.isotope("layout");                    }                });                        $wall.one( "layoutComplete", function() {                            $(window).trigger("resize");                        });                        $wall.isotope("layout");                    });$(".sboard .sb-thumb .iframe").colorbox({                    iframe: true,                                        maxWidth: "85%",                    maxHeight: "95%",width: function() {                        var size = $(this).data("size");                        if (size) {                            sizearr = size.split(",");            return parseInt(sizearr[0])+10;                        } else {                            return 640;                        }},height: function() {                        var size = $(this).data("size");                        if (size) {                            sizearr = size.split(",");                            return parseInt(sizearr[1])+10;                        } else {                            return 460;                        }},onComplete: function() {var size = $(this).data("size");                        if (size) {    var sizearr = size.split(",");    var iframebox = $( "#cboxLoadedContent iframe" );    if (iframebox.length) {    iframebox.attr("width", sizearr[0]).attr("height", sizearr[1]);    }                        }}});$(".sboard .sb-thumb .icbox").colorbox({                    photo: true,                    href: function() {                        return $(this).attr("href") ? $(this).attr("href") : $(this).data("href");                    },                    maxWidth: "95%",                    maxHeight: "95%"                });$(".sboard .sb-thumb .inline").colorbox({                    inline: true,                    maxWidth: "95%",                    maxHeight: "95%"                });                    $("#sb_wall1 .sb-loadmore").html("<p>Charger la suite</p>");                })                .fail(function() {                    alert("Problem reading the feed data!");                });            });        jQuery(".sboard").on("click", ".sb-fetchcomments a", function() {            fcobj = $(this).parent();            fcnonce = fcobj.attr("data-nonce");fcobj.html('<p class="sb-loading">&nbsp;</p>');            $.ajax({            type: "post",            url: "https://studio-neero.com/social/ajax.php",            data: {                action: "sb_fetchcomments",                network: fcobj.attr("data-network"),                attr: {"id":"1","type":"wall","network":{"facebook":{"facebook_id_1":["111295840481523"],"facebook_pagefeed":"posts"},"instagram":{"instagram_id_1":["self"]}},"theme":"sb-modern-light","itemwidth":250,"results":30,"iframe":"media","breakpoints":["4","4","3","3","2","1","1"],"filter_search":false,"filters_order":"linkedin,facebook,twitter,instagram,google,pinterest","display_ads":false,"debuglog":1,"cache":360,"add_files":true,"fixWidth":"block"},                id: fcobj.attr("data-id"),                feed: fcobj.attr("data-feed"),                link: fcobj.attr("data-link"),                nonce: fcnonce,                label: "wall1"            },            cache: false            })            .done(function( response ) {                /* replace comments */                /* re-layout wall items */                fcobj.html(response).promise().done(function() {                    $wall.isotope("layout");                    $(window).trigger("scroll");                });            })            .fail(function() {                fcobj.html('<a href="javascript:void(0)">Afficher les commentaires</a>');                alert("Problem reading the comments feed data!");            });        });$(".sboard .sb-thumb .iframe").colorbox({                    iframe: true,                                        maxWidth: "85%",                    maxHeight: "95%",width: function() {                        var size = $(this).data("size");                        if (size) {                            sizearr = size.split(",");            return parseInt(sizearr[0])+10;                        } else {                            return 640;                        }},height: function() {                        var size = $(this).data("size");                        if (size) {                            sizearr = size.split(",");                            return parseInt(sizearr[1])+10;                        } else {                            return 460;                        }},onComplete: function() {var size = $(this).data("size");                        if (size) {    var sizearr = size.split(",");    var iframebox = $( "#cboxLoadedContent iframe" );    if (iframebox.length) {    iframebox.attr("width", sizearr[0]).attr("height", sizearr[1]);    }                        }}});$(".sboard .sb-thumb .icbox").colorbox({                    photo: true,                    href: function() {                        return $(this).attr("href") ? $(this).attr("href") : $(this).data("href");                    },                    maxWidth: "95%",                    maxHeight: "95%"                });$(".sboard .sb-thumb .inline").colorbox({                    inline: true,                    maxWidth: "95%",                    maxHeight: "95%"                });                $(window).on("resize", function() {                    if (jQuery("#cboxOverlay").is(":visible")) {var wsize = sb_getwinsize();var cbox = $( "#cboxLoadedContent" );var iframebox = $( "#cboxLoadedContent iframe" );if ( iframebox.length ) {var iframeWidth = iframebox.attr("width");var iframeHeight = iframebox.attr("height");                            if ( $(window).width() <= 767 ) {                                var pheight = Math.round( (iframeHeight / iframeWidth) * 95 );                                jQuery.colorbox.resize({width: "95%", height: pheight+"%"});                            } else {if ( cbox.children("div.sb-slide").length > 0) {jQuery.colorbox.resize({maxWidth:"95%", maxHeight:"95%"});} else {if ( iframeHeight > wsize.newHeight ) {var newWidth = Math.round( (wsize.newHeight * iframeWidth) / iframeHeight);iframeWidth = newWidth;iframeHeight = wsize.newHeight;if ( iframeWidth > wsize.newWidth ) {iframeWidth = wsize.newWidth;iframeHeight = wsize.newHeight;}}jQuery.colorbox.resize({ width: parseInt(iframeWidth)+10, height: parseInt(iframeHeight)+10 });}}                        } else {                            jQuery.colorbox.resize({maxWidth:"95%", maxHeight:"95%"});                        }                    }                });            });        </script><!-- End PHP Social Stream - cache is enabled - duration: 360 minutes -->
        </div>
    </div>
</section>

<section id="section1a">
    <div id="albums" class="container">
        <h1 class="text-center">Albums</h1>

        <div class="row text-center">
            <div class="col-sm-12 col-md-6">
                <img src="{{ asset('images/common/Album1.jpg') }}" alt="De l'ombre à la lumière" style="width: 100%" data-aos="zoom-in" data-aos-duration="3000">
                <p class="album-title">Album n°1 : De l'ombre à la lumière</p>
            </div>
            <div class="col-sm-12 col-md-6">
                <img src="{{ asset('images/common/Album2.jpg') }}" alt="Discover" style="width: 100%" data-aos="zoom-in" data-aos-duration="3000">
                <p class="album-title">Album n°2 : Discover</p>
            </div>
        </div>
    </div>
</section>

<section id="section1b">
    <div id="galerie" class="container">
        <h1 class="text-center">Galerie</h1>

        <div class="row block-images">
            <div class="col-sm-6 col-lg-3">
                <a href="{{ asset('images/common/slide1.jpg') }}" title="" rel="shadowbox[coiffure]" data-toggle="lightbox">
                    <div>
                        <img src="{{ asset('images/common/slide1.jpg') }}" alt="STUDIO"/>
                        <div class="zoom">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <a href="{{ asset('images/common/slide2.jpg') }}" title="" rel="shadowbox[coiffure]" data-toggle="lightbox">
                    <div>
                        <img src="{{ asset('images/common/slide2.jpg') }}" alt="STUDIO"/>
                        <div class="zoom">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <a href="{{ asset('images/common/slide3.jpg') }}" title="" rel="shadowbox[coiffure]" data-toggle="lightbox">
                    <div>
                        <img src="{{ asset('images/common/slide3.jpg') }}" alt="STUDIO"/>
                        <div class="zoom">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>


<section id="section3">
    <div class="container" style="z-index: 99; position: relative">
        <h2><a href="#" style="text-decoration: none;"><em>Tentez l’aventure avec nous…</em></a></h2>
    </div>
</section>


<section id="adresse">
    <div class="container">
        <!-- InstanceBeginEditable name="adresse" -->
        <h2 align="center">Nos coordonnées</h2>
        <p align="center">52 Rue du Val de Fer - 54230 NEUVES-MAISONS - Téléphone : <a href="tel:0782569914">07 82 56 99 14 </a></p><!-- InstanceEndEditable -->
    </div>
</section>


<section id="map">
    <!-- InstanceBeginEditable name="map" -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2637.164339649771!2d6.106466816046405!3d48.62583717926542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794a19ce2b64e05%3A0xbf3f2f85e10c4b9b!2s52%20Rue%20du%20Val%20de%20Fer%2C%2054230%20Neuves-Maisons!5e0!3m2!1sfr!2sfr!4v1582291785463!5m2!1sfr!2sfr" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    <!-- InstanceEndEditable -->
</section>

<footer>
    <div class="container">
        <p class="text-center">Studio d’enregistrement près de Nancy : compose et réalise vos projets musicaux et artistiques.</p>
        <!--Bootstrap template 1 - Silvernet 2018-->
        <ul class="list-inline text-center mx-auto">
            <li class="list-inline-item"><a href="#IDEO" title="Qui est IDEO">Qui est IDEO</a></li>
            <li class="list-inline-item"><a href="#actu" title="Actualités">Actualités</a></li>
            <li class="list-inline-item"><a href="#albums" title="Albums musicaux">Albums</a></li>
            <li class="list-inline-item"><a href="#galerie" title="Galerie photos">Galerie</a></li>
            <li class="list-inline-item"><a href="#contacts" title="Nous contacter">Contacts</a></li>
            <li class="list-inline-item"><a href="#commentaires" title="Commentaires">Commentaires</a></li>
            <li class="list-inline-item"><a href="#" title="Infos légales">Infos légales</a></li>
        </ul>
    </div>

    <script>
        AOS.init();
    </script>
    <script>
        $(document).ready(function(){

            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE ");
            var edge = ua.indexOf("Edge");
            if (msie > -1 || !!navigator.userAgent.match(/Trident.*rv\:11\./) || edge > -1){
                var ecran = $(window).width();
                if(ecran > 991){
                    var position = $('#header').outerHeight() - 1;
                    $(window).scroll(function(){
                        var scroll = $(window).scrollTop();
                        if(scroll > position){
                            $('.navbar').addClass('my-fixe');
                        }else if(scroll <= position){
                            $('.navbar').removeClass('my-fixe');//return false;
                        }

                    });

                }

            }else{
                return false;
            }

            $(window).resize(function(){
                var ua = window.navigator.userAgent;
                var msie = ua.indexOf("MSIE ");
                var edge = ua.indexOf("Edge");
                if (msie > -1 || !!navigator.userAgent.match(/Trident.*rv\:11\./) || edge > -1){
                    var ecran = $(window).width();
                    if(ecran > 991){
                        var position = $('#header').outerHeight() - 1;
                        $(window).scroll(function(){
                            var scroll = $(window).scrollTop();
                            if(scroll > position){
                                $('.navbar').addClass('my-fixe');
                            }else if(scroll <= position){
                                $('.navbar').removeClass('my-fixe');//return false;
                            }

                        });

                    }

                }else{
                    return false;
                }
            });

        });
    </script>
    <script>
        $(document).ready(function(){
            var w = $(window).width();
            var h = $(window).height();
            console.log('w = ' + w + ' et h = ' + h);
            if(w < 991 && h < 450){
                $('#navbarCollapse').addClass('hauteur-vh');
            }else{
                $('#navbarCollapse').removeClass('hauteur-vh');
            }

            $(window).resize(function(){
                var w = $(window).width();
                var h = $(window).height();
                console.log('w = ' + w + ' et h = ' + h);
                if(w < 991 && h < 450){
                    $('#navbarCollapse').addClass('hauteur-vh');
                }else{
                    $('#navbarCollapse').removeClass('hauteur-vh');
                }
            });
        });
    </script>

</body>

</html>
