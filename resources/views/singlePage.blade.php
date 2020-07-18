@extends('default')

@section("content")

<section id="slider">
    <!-- InstanceBeginEditable name="slider" -->
    <div id="carouselExampleControls" class="carousel slide filtre" data-ride="carousel" style="position:relative; z-index: 9">


        <div class="carousel-inner">
            <div class="carousel-item opaciter active">
                <img class="d-block w-100" src="{{ asset('images/common/slide1.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <p>Test</p>
                </div>
            </div>
            <div class="carousel-item opaciter ">
                <img class="d-block w-100" src="{{ asset('images/common/slide2.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <p>Test</p>
                </div>
            </div>
            <div class="carousel-item opaciter ">
                <img class="d-block w-100" src="{{ asset('images/common/slide3.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <p>Test</p>
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
        <h1>Qui est IDEO ?</h1>
        <div class="row">
            <div class="col-sm-12 col-lg-6 align-self-center sp-bord marg-mobil text-justify">
                <p>Derrière Ideo Compositeur, il y a Adrien François. Rien ne prédestinait le jeune homme de 25 ans à faire de la musique. Mais à 7 ans, un accident l'oblige à tout réapprendre, y compris les gestes les plus simples. La musique l'apaise.</p>
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
                <div class="text-center bttn-savoir" data-aos="flip-right"><a href="https://studio-neero.com/" target="_blank" class="btn btn-custom" title="En savoir plus sur NEERO STUDIO">En savoir plus sur STUDIO NEERO</a></div>
            </div>
        </div>
    </div>

</section>


<!-- InstanceBeginEditable name="integration" -->
<section id="section2">
    <div id="actu" class="container">
        <div class="span10">
            <h1 class="text-center">Actualités</h1>
            <?php
            echo social_stream(
                array(
                    'id' => '1',
                    'type' => 'wall',
                    'network' => array(
                        'facebook' => array(
                            'facebook_id_1' => array(
                                '111295840481523'
                            ),
                            'facebook_pagefeed' => 'posts'
                        )
                    ),
                    'theme' => 'sb-modern-light',
                    'itemwidth' => 250,
                    'results' => 30,
                    'iframe' => 'media',
                    'breakpoints' => array('4', '4', '3', '3', '2', '1', '1'), // Number of items (columns) shwoing on each row for different viewport sizes
                    'display_ads' => false,
                    'debuglog' => 1,
                    'cache' => 360,
                    'add_files' => true,
                    'fixWidth' => 'block'
                )
            );
            ?>
        </div>
    </div>
</section>

<section id="section1b">
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

<section id="section1a">
    <div id="galerie" class="container">
        <h1 class="text-center">Galerie</h1>

        <div class="row block-images">
            <div class="col-sm-6 col-lg-3">
                <a href="{{ asset('images/common/Galerie/G1.jpg') }}" title="" rel="shadowbox[coiffure]" data-toggle="lightbox">
                    <div>
                        <img src="{{ asset('images/common/Galerie/G1.jpg') }}" alt="STUDIO"/>
                        <div class="zoom">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <a href="{{ asset('images/common/Galerie/G2.jpg') }}" title="" rel="shadowbox[coiffure]" data-toggle="lightbox">
                    <div>
                        <img src="{{ asset('images/common/Galerie/G2.jpg') }}" alt="STUDIO"/>
                        <div class="zoom">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <a href="{{ asset('images/common/Galerie/G3.jpg') }}" title="" rel="shadowbox[coiffure]" data-toggle="lightbox">
                    <div>
                        <img src="{{ asset('images/common/Galerie/G3.jpg') }}" alt="STUDIO"/>
                        <div class="zoom">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <a href="{{ asset('images/common/Galerie/G4.jpg') }}" title="" rel="shadowbox[coiffure]" data-toggle="lightbox">
                    <div>
                        <img src="{{ asset('images/common/Galerie/G4.jpg') }}" alt="STUDIO"/>
                        <div class="zoom">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-lg-3">
                <a href="{{ asset('images/common/Galerie/G5.jpg') }}" title="" rel="shadowbox[coiffure]" data-toggle="lightbox">
                    <div>
                        <img src="{{ asset('images/common/Galerie/G5.jpg') }}" alt="STUDIO"/>
                        <div class="zoom">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <a href="{{ asset('images/common/Galerie/G6.jpg') }}" title="" rel="shadowbox[coiffure]" data-toggle="lightbox">
                    <div>
                        <img src="{{ asset('images/common/Galerie/G6.jpg') }}" alt="STUDIO"/>
                        <div class="zoom">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <a href="{{ asset('images/common/Galerie/G7.jpg') }}" title="" rel="shadowbox[coiffure]" data-toggle="lightbox">
                    <div>
                        <img src="{{ asset('images/common/Galerie/G7.jpg') }}" alt="STUDIO"/>
                        <div class="zoom">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <a href="{{ asset('images/common/Galerie/G8.jpg') }}" title="" rel="shadowbox[coiffure]" data-toggle="lightbox">
                    <div>
                        <img src="{{ asset('images/common/Galerie/G8.jpg') }}" alt="STUDIO"/>
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

@endsection
