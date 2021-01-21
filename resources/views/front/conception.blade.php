@extends('front.layouts.defaults',['title' => 'CONCEPTION DES VUES EN PLAN'])

@section('content')

<div class="page">
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">CONCEPTION DES VUES EN PLAN</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('accueil') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Accueil</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>Conception des vues en plan</span>
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
                                    <h3 class="title">CONCEPTION DES VUES EN PLAN</h3>
                                </div>
                                <div class="title-desc" align="justify"><p>La conception des vues en plan (plan 2D) se fait sur les bases des dimensions du terrain, du relief du terrain, de la description du projet, de la circulation des futurs occupants, de l’aération des pièces et de la luminosité. Toutes fois  l’aspect structurel du bâtiment n’est pas exclu à cette étape de l’étude. Y penser le plutôt en disposant bien les murs permettra de réduire le cout de réalisation du projet.  Puis ces vues en plan vous seront soumis pour appréciation, validation ou modification. </p>
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
                                <img class="img-fluid" src="{{ asset('front/images/plans.jpg') }}" title="single-img-one" alt="single-img-one">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
    </div>
</div>
@endsection