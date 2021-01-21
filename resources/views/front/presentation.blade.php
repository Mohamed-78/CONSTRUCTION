@extends('front.layouts.defaults',['title' => 'PRESENTATION'])

@section('content')

<div class="page">
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">QUI SOMMES-NOUS</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('accueil') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Accueil</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span style="color: white;">Qui sommes-nous?</span>
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
                    <div class="col-lg-5 col-sm-12">
                        <div class="position-relative">
                            <!-- ttm_single_image-wrapper -->
                            <div class="ttm_single_image-wrapper w100">
                                <img class="img-fluid" src="front/images/single-img-one.jpg" title="single-img-one" alt="single-img-one">
                            </div><!-- ttm_single_image-wrapper end -->
                            <div class="about-overlay-shape spacing-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="about-content ttm-bgcolor-skincolor">
                                            <!-- featured-icon-box -->
                                            <div class="featured-icon-box style6 left-icon icon-align-top">
                                                <div class="featured-icon"><!-- featured-icon -->
                                                    <div class="ttm-icon ttm-icon_element-color-white ttm-icon_element-size-lg">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </div>
                                                </div>
                                                <div class="featured-content"><!-- featured-content -->
                                                    <div class="featured-desc">
                                                        <p>Adresse-mail</p>
                                                    </div>
                                                    <div class="featured-title">
                                                        <h5>info@groupori.org</h5>
                                                    </div>
                                                </div>
                                            </div><!-- featured-icon-box end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-12">
                        <div class="pl-70 res-991-pl-0 res-991-mt-30">
                            <!-- section title -->
                            <div class="section-title pr-55 res-991-pr-0 clearfix">
                                <div class="title-header">
                                    <h5>ENSEMBLE REALISONS VOS RÊVES</h5>
                                    <h4 class="title">NOUS SOMMES A VOTRE SERVICE</h4>
                                </div>
                                <div class="title-desc" align="justify">Nous sommes une équipe d’ouvrier dynamique qui mettons notre savoir-faire a votre service selon une idéologie sociale par amour du métier de la construction. Cette passion commune est la boussole qui nous guide sur tous les projets de constructions auquel nous participons. Notre  vision se base sur la problématique de construire des bâtiments à la fois beaux avec des designs minimalistes (simplifiés) et dans la recherche de solutions tant au niveau des matériaux de construction qu’au niveau des techniques de construction afin de pratiquer les  coûts de construction les plus bâts en Côte d’ivoire. Cette idéologie s’inscrire dans une démarche  de  permettre à chaque habitant de la cote d’ivoire d’être propriétaire d’un logement quelques soit son budget. à l’instar des autres villes du pays le boom immobilier en Côte d’Ivoire ne se ressent qu’à Abidjan et ses banlieues, Yamoussoukro, et Bouaké.  C’est ainsi, toujours au cœur de notre idéologie, nous souhaitons laisser une emprunte dans toutes les villes de la Côte d’Ivoire avec nos œuvres architecturales. N’hésitez pas à <a href="https://wa.me/+22509543162" target="_blank" style="color:red;text-decoration: underline;">nous contacter</a> quelques soit la situation géographique de votre terrain, chantier ou projet.<u></div>
                            </div>
                          {{--   <div class="row no-gutters mt-40">
                                <div class="col-sm-6">
                                    <div class="featured-icon-box left-icon icon-align-top">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                <i class="fa fa-pencil"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5 class="mb-5">Plan et coût de construction</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="featured-icon-box left-icon icon-align-top">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                <i class="fa fa-building"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-Art">
                                                <h5 class="mb-5">Construction</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="featured-icon-box left-icon icon-align-top">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                <i class="fa fa-file"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5 class="mb-5">Vente de terrains</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="featured-icon-box left-icon icon-align-top">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                <i class="fa fa-road"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5 class="mb-5">Lotissements</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
