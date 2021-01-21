@extends('front.layouts.defaults',['title' => 'DESCRIPTION PROJET'])

@section('content')

<div class="page">
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">DESCRIPTION PROJET</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('accueil') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Accueil</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>Description projet</span>
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
                                    <h3 class="title">DESCRIPTION PROJET</h3>
                                </div>  
                                <ul class="ttm-list ttm-list-style-icon mt-15">
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="ttm-list-li-content">Intervalle de budget</span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="ttm-list-li-content">L’usage du futur bâtiment</span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="tm-list-li-content">Nombre de pièces</span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="ttm-list-li-content">Nombre de salle d’eau </span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="tm-list-li-content">Garage interne </span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="tm-list-li-content">Particularité  du projet</span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="tm-list-li-content">Superficie des pièces souhaitées</span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="tm-list-li-content">Détails très importants qui vous tiennent à cœur </span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="tm-list-li-content">Nos recommandations</span>
                                    </li>
                                </ul>                              
                                <p align="justify" style="visibility: hidden;">Constituée essentiellement de professionnels de l'immobilier, d’un personnel dynamique et à l’écoute des bésoins adaptés à la vie urbaine, <strong>MG IMMOBILIER</strong> à pour philosophie la recherche perpétuelle de la qualité à des coûts accessibles.</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-5 col-sm-12">
                        <div class="position-relative">
                            <div class="ttm_single_image-wrapper w100">
                                <img class="img-fluid" src="{{ asset('front/images/descri.jpg') }}" title="single-img-one" alt="single-img-one">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
    </div>
</div>
@endsection