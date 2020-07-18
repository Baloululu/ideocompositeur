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
                    <span data-toggle="collapse" data-target="#navbarCollapse">
                        <a class="nav-link" href="/#IDEO" title="Qui est IDEO">Qui est IDEO</a>
                    </span>
                </li>
                <li class="nav-item">
                    <span data-toggle="collapse" data-target="#navbarCollapse">
                        <a class="nav-link" href="/#prestation" title="Mes prestations">Mes prestations</a>
                    </span>
                </li>
                <li class="nav-item">
                    <span data-toggle="collapse" data-target="#navbarCollapse">
                        <a class="nav-link" href="/#actu" title="Actualités">Actualités</a>
                    </span>
                </li>
                <li class="nav-item">
                    <span data-toggle="collapse" data-target="#navbarCollapse">
                        <a class="nav-link" href="/#albums" title="Albums musicaux">Albums</a>
                    </span>
                </li>
                <li class="nav-item">
                    <span data-toggle="collapse" data-target="#navbarCollapse">
                        <a class="nav-link" href="/#galerie" title="Galerie photos">Galerie</a>
                    </span>
                </li>
                <li class="nav-item">
                    <span data-toggle="collapse" data-target="#navbarCollapse">
                        <a class="nav-link" href="/#contacts" title="Nous contacter">Contacts</a>
                    </span>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

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
            <li class="list-inline-item"><a href="/#IDEO" title="Qui est IDEO">Qui est IDEO</a></li>
            <li class="list-inline-item"><a href="/#prestation" title="Qui est IDEO">Mes prestations</a></li>
            <li class="list-inline-item"><a href="/#actu" title="Actualités">Actualités</a></li>
            <li class="list-inline-item"><a href="/#albums" title="Albums musicaux">Albums</a></li>
            <li class="list-inline-item"><a href="/#galerie" title="Galerie photos">Galerie</a></li>
            <li class="list-inline-item"><a href="/#contacts" title="Nous contacter">Contacts</a></li>
            <li class="list-inline-item"><a href="{{ route("legales") }}" title="Infos légales">Infos légales</a></li>
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
