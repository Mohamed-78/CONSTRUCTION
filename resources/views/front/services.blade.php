@extends('front.layouts.defaults',['title' => 'SERVICES'])

@section('content')

<div class="page">
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">NOS SERVICES</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('accueil') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Accueil</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span style="color: white;">Nos services</span>
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
                                    <h5>MG IMMOBILIER</h5>
                                    <h3 class="title">A propos de nos services</h3>
                                </div>
                                <div class="title-desc" align="justify">MG IMMOBILIER&nbsp;</span>est une entreprise dont le secteur d’activité est essentiellement centré sur l’immobilier au sens large, à savoir la vente de terrain, le lotissement, la gestion locative et la construction.C'est une entreprise novatrice dans ses programmes, professionnelle et dynamique dans son approche.Elle offre un cadre de vie agréable et adapté aux valeurs, et coutumes africaines : vie communautaire, paix, solidarité, intégrité…</p>
                                <p align="justify">Constituée essentiellement de professionnels de l'immobilier, d’un personnel dynamique et à l’écoute des bésoins adaptés à la vie urbaine, <strong>MG IMMOBILIER</strong> à pour philosophie la recherche perpétuelle de la qualité à des coûts accessibles.</div>
                                </div>
                        </div>
                    </div>
                     <div class="col-lg-5 col-sm-12">
                        <div class="position-relative">
                            <div class="ttm_single_image-wrapper w100">
                                <img class="img-fluid" src="front/images/single-img-one.jpg" title="single-img-one" alt="single-img-one">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <section class="ttm-row services2-section clearfix" style="background: #f2f2f247;">
            <style type="text/css" media="screen">
                #formation{
                    border-radius: 14px;
                    border-radius: 13px;
                    overflow: hidden;
                    -webkit-box-shadow: 0px 5px 6px rgba(72, 105, 114, 0.15);
                    box-shadow: 0px 5px 6px rgba(72, 105, 114, 0.15);
                    -webkit-transition: all 0.4s;
                    -o-transition: all 0.4s;
                    transition: all 0.4s;
                }
            </style>
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-lg-3 col-sm-2"></div>
                    <div class="col-md-8 col-lg-6 col-sm-8">
                        <!-- section title -->
                        <div class="section-title text-center with-desc clearfix">
                            <div class="title-header">
                                <h5>NOS SERVICES</h5>
                                <h2 class="title">NOS DOMAINES D'INTERVENTION</h2>
                                <p>Spécialiste de l’immobilier, MG IMMOBILIER vous offre des prestations de choix.</p>
                            </div>
                        </div><!-- section title end -->
                    </div>
                    <div class="col-md-2 col-lg-3 col-sm-2"></div>
                </div>
                <div class="row">
                    <div class="services-slide owl-carousel owl-theme owl-loaded mt-5" data-item="3" data-nav="false" data-dots="false" data-auto="true">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox ttm-bgcolor-white box-shadow mb-20" id="formation">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('front/images/course-en-ligne.png') }}" alt="">
                            </div>
                            <div class="ttm-box-bottom-content">
                                <div class="featured-icon"><!-- featured-icon-->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md"> 
                                        <i class="ti ti-book"></i>
                                    </div>
                                </div>
                                <div class="featured-title featured-title"><!-- featured-title-->
                                    <h5><a href="" tabindex="-1">VENTE DE TERRAINS</a></h5>
                                </div>
                                <div class="featured-desc"><!-- featured-desc-->
                                    <p>Nous avons un catalogue de terrains disponible dans plusieurs zones de cocody, Angré et Bingerville, avec tous les documents relatif a la proprieté.Faite nous confiance pour toutes acquisition ou inspection</p><br><br><br>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="{{ route('terrains') }}">Voir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="featured-imagebox ttm-bgcolor-white box-shadow mb-20"  id="formation">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('front/images/competences.png') }}" alt="">
                            </div>
                            <div class="ttm-box-bottom-content">
                                <div class="featured-icon"><!-- featured-icon-->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md"> 
                                        <i class="ti ti-book"></i>
                                    </div>
                                </div>
                                <div class="featured-title featured-title"><!-- featured-title-->
                                    <h5><a href="" tabindex="-1">Lotissement</a></h5>
                                </div>
                                <div class="featured-desc"><!-- featured-desc-->
                                    <p>Nos activités de lotissement débutent par le découpage des lots du terrain nu. Il s'agit d'un découpage matériel autant que d'un decoupage juridique. Enfin nous viabilisons les lots avec l'expertise de nos ingenieurs spécialisés.</p><br><br><br>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="{{ route('lotissements') }}">Voir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="featured-imagebox ttm-bgcolor-white box-shadow mb-20"  id="formation">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('front/images/services.png') }}" alt="">
                            </div>
                            <div class="ttm-box-bottom-content">
                                <div class="featured-icon"><!-- featured-icon-->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md"> 
                                        <i class="ti ti-pencil"></i>
                                    </div>
                                </div>
                                <div class="featured-title featured-title"><!-- featured-title-->
                                    <h5><a href="" tabindex="-1">Gestion loactive</a></h5>
                                </div>
                                <div class="featured-desc"><!-- featured-desc-->
                                    <p>Nous assurons la gestion de votre bien dès que vous decidez de le mettre sur le marché. Nous prenons tout en charge, depuis la réalisation des diagnostics immobiliers obligatoires, jusqu'a la redaction de l'annonce, surtout à améliorer le rapport locatif de l'appartement, de la maison ou du local commercial en question</p><br>
                                </div>
                            </div>
                        </div>
                        <div class="featured-imagebox ttm-bgcolor-white box-shadow mb-20"  id="formation">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('front/images/cons.jpg') }}" alt="">
                            </div>
                            <div class="ttm-box-bottom-content">
                                <div class="featured-icon"><!-- featured-icon-->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md"> 
                                        <i class="ti ti-pencil"></i>
                                    </div>
                                </div>
                                <div class="featured-title featured-title"><!-- featured-title-->
                                    <h5><a href="" tabindex="-1">Construction</a></h5>
                                </div>
                                <div class="featured-desc"><!-- featured-desc-->
                                    <p>Nous assurons la construction de vos bâtiments et autres chef d'oeuvres avec des spéciales prevu à cet effet.Nous sommes une entreprise novatrice dans ses programmes, professionnelle et dynamique dans son approche pour vous servir. Nos offres de construction sont adaptés à vos differents besoins. Ensemble construisons de grande choses.</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="{{ route('constructions') }}">Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
    </div>
</div>
@endsection
