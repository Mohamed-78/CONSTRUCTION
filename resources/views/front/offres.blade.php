@extends('front.layouts.defaults',['title' => 'NOS OFFRES'])

@section('content')

<div class="page">
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">NOS OFFRES</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('accueil') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Accueil</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>Quelques offres</span>
                        </div>  
                    </div>
                </div>
            </div> 
        </div>               
    </div>
    <div class="site-main">
        <section class="ttm-row blog-grid-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="featured-imagebox featured-imagebox-post box-shadow">
                            <div class="featured-thumbnail">
                                <a href=""><img class="img-fluid" src="{{ asset('front/images/etat.jpg') }}" alt=""></a>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-title featured-title">
                                    <h5>ETAT DES LIEUX</h5>
                                    <p><a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="/etat"></i>voir plus</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="featured-imagebox featured-imagebox-post box-shadow">
                            <div class="featured-thumbnail">
                                <a href=""><img class="img-fluid" src="{{ asset('front/images/projet.jpg') }}" alt=""></a>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-title featured-title">
                                    <h5>DESCRIPTIONS DU PROJET </h5>
                                    <p><a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="/description_projet"></i>voir plus</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="featured-imagebox featured-imagebox-post box-shadow">
                            <div class="featured-thumbnail">
                                <a href=""><img class="img-fluid" src="{{ asset('front/images/plan.jpg') }}" alt=""></a>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-title featured-title">
                                    <h5>CONCEPTION DES VUES EN PLAN</h5>
                                    <p><a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="/conception_vue"></i>voir plus</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="featured-imagebox featured-imagebox-post box-shadow">
                            <div class="featured-thumbnail">
                                <a href=""><img class="img-fluid" src="{{ asset('front/images/3d.jpg') }}" alt=""></a>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-title featured-title">
                                    <h5>RENDU DU PROJET (IMAGE ou VIDEO 3D)</h5>
                                    <p><a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="/rendu_projet"></i>voir plus</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="featured-imagebox featured-imagebox-post box-shadow">
                            <div class="featured-thumbnail">
                                <a href=""><img class="img-fluid" src="{{ asset('front/images/devis.jpg') }}" alt=""></a>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-title featured-title">
                                    <h5>DEVIS ou  COÛT DE REALISATION DU PROJET. </h5>
                                    <p><a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="/devis"></i>voir plus</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="featured-imagebox featured-imagebox-post box-shadow">
                            <div class="featured-thumbnail">
                                <a href=""><img class="img-fluid" src="{{ asset('front/images/bat.jpg') }}" alt=""></a>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-title featured-title">
                                    <h5>RÉALISATION DU BATIMENT </h5>
                                    <p><a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="/realisation_batiment"></i>voir plus</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="ttm-row ttm-bg ttm-bgimage-yes bg-img2 ttm-bgcolor-darkgrey">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-20">
                        <h2 class="title" style="color: white;">ETUDE OU TRAVAUX DE CONSTRUCTION</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row" style="padding-top: 5em;">
            <div class="col-md-12 col-lg-6">
                <div class="featured-imagebox featured-imagebox-post box-shadow">
                    <div class="featured-thumbnail"><img class="img-fluid" src="{{ asset('front/images/offre.jpg') }}" alt="">
                    </div>
                    <div class="featured-content featured-content-post">
                        <div class="post-title featured-title">
                            <h5>NOS OFFRES DE CONSTRUCTIONS</h5>
                            <p style="font-size: 17px;">Travaux de contruction de nouveau chantier<br>Rehabilitation de batiment<br>Finition de batiment<br>Modification de batiment</p>
                            <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="/contacts"></i>Nous contactez</a>
                            <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" target="_blank" href="mailto:info@successgroup.com" style="float: right;">Nous contactez via mail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="featured-imagebox featured-imagebox-post box-shadow">
                    <div class="featured-thumbnail">
                        <a href=""><img class="img-fluid" src="{{ asset('front/images/serv.jpg') }}" alt=""></a>
                    </div>
                    <div class="featured-content featured-content-post">
                        <h5>NOS SERVICES PAR CORPS DE METIER </h5>
                        <div class="featured-desc">
                            <p style="font-size: 17px;">Maçon Plombier Electricien Ferailleur Menuisier batiment Charpentier Fouilleur Staffeur Feronnier Carreleur Peintre batiment </p>
                            <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="/contacts">Nous contactez</a><a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" target="_blank" href="mailto:info@successgroup.com" style="float: right;">Nous contactez via mail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection