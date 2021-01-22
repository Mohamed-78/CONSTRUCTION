@extends('front.layouts.defaults',['title' => 'RENDU DU PROJET'])

@section('content')

<div class="page">
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">RENDU DU PROJET (IMAGE ou VIDEO 3D)</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('accueil') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Accueil</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>Rendu du projet</span>
                        </div>  
                    </div>
                </div>
            </div> 
        </div>               
    </div>
     <div class="site-main">
        <section class="ttm-row about-top-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-sm-12">
                        <div class="pl-70 res-991-pl-0 res-991-mt-30">
                            <!-- section title -->
                            <div class="section-title pr-55 res-991-pr-0 clearfix">
                                <div class="title-header">
                                    <h5>SUCCESS GROUP ORI</h5>
                                    <h3 class="title">RENDU DU PROJET (IMAGE ou VIDEO 3D)</h3>
                                </div>
                                <div class="title-desc" align="justify"><p style="font-size: 18px;color: #000000;">La 3D est une représentation du projet à réaliser. Cette image ou vidéo vous aidera à vous projeter  pour mieux cerner les contours du projet et d’en apprécier  le style architectural et le design proposé. 
                                Le style architectural étant l’élément central dans la réalisation d’un projet, vous pouvez vous inspirer en consultant nos modèles de maison.  
                                </p>
                                <div class="ttm-btn-box pr-20 pb-20">
                                <a class="ttm-btn ttm-btn-size-xs ttm-btn-shape-square ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-black" href="/modeles_de_maison">Consulter nos modèle de maison<i class="ti ti-arrow-right"></i></a>
                                </div> 
                            </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-5 col-sm-12">
                        <div class="position-relative">
                            <div class="ttm_single_image-wrapper w100">
                                <img class="img-fluid" src="{{ asset('front/images/rendus.jpg') }}" title="single-img-one" alt="single-img-one">
                            </div>
                        </div>
                    </div>
                </div>
{{--                 <div class="row" style="padding-top: 2em;">
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
                </div> --}}
            </div>
        </section>
       
    </div>
</div>
@endsection