@extends('front.layouts.defaults',['title' => 'ETAT DES LIEUX'])

@section('content')

<div class="page">
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">ETAT DES LIEUX</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('accueil') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Accueil</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>Etat des lieu</span>
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
                                    <h3 class="title">ETATS DES LIEUX </h3>
                                </div>
                                <div class="title-desc" align="justify">L’état des lieux nous permettra d’avoir des informations<p> TERRAIN NU : <br>
                                Sur l’accessibilité du terrain<br>
                                Le repérage des bornes<br>
                                La nature du relief du terrain<br>
                                La situation par rapport aux autres terrains comparés à l’extrait <br>topographique<br>
                                le niveau du sol du terrain par rapport à la route.<br>
                                CHANTIER:<br>
                                Le niveau des travaux <br>
                                La prise de mesure si nécessaire<br>
                                Consultation du cahier des charges initial<br>
                                L’inspection du voisinage…
                                </p>
                                <div class="ttm-btn-box pr-20 pb-20">
                                <a class="ttm-btn ttm-btn-size-xs ttm-btn-shape-square ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-black" href="/modeles_de_maison">Consulter nos modèle de maison<i class="ti ti-arrow-right"></i></a>
                                </div>                                
                            <p align="justify" style="visibility: hidden;">Constituée essentiellement de professionnels de l'immobilier, d’un personnel dynamique et à l’écoute des bésoins adaptés à la vie urbaine, <strong>MG IMMOBILIER</strong> à pour philosophie la recherche perpétuelle de la qualité à des coûts accessibles.</div>
                                </div>
                        </div>
                    </div>
                     <div class="col-lg-5 col-sm-12">
                        <div class="position-relative">
                            <div class="ttm_single_image-wrapper w100">
                                <img class="img-fluid" src="{{ asset('front/images/etats.jpg') }}" title="single-img-one" alt="single-img-one">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
    </div>
</div>
@endsection