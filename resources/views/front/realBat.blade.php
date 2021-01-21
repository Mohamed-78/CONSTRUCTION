@extends('front.layouts.defaults',['title' => 'RÉALISATION DU BATIMENT'])

@section('content')

<div class="page">
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">RÉALISATION DU BATIMENT</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('accueil') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Accueil</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>Réalisation du batiment</span>
                        </div>  
                    </div>
                </div>
            </div> 
        </div>               
    </div>
    <div class="site-main">
        <section class="ttm-row faq-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-1"></div>
                    <div class="col-md-8 col-sm-10">
                        <div class="section-title text-center with-desc mb-40 clearfix">
                            <div class="title-header mb-60">
                                <h2 class="title">RÉALISATION DU BATIMENT</h2>
                            </div>
                            <div class="title-desc">
                                <p style="text-align:justify;">
                            Pourquoi nous confier vos travaux ? 
                            La construction d’un bâtiment prend plusieurs aspects  techniques en compte. A cela s’ajoute différents corps de métier qui doivent parfaitement collaborer selon un plan directeur très précis conçu depuis la phase d’étude. 
                            Alors qui faire quoi dans ce cas ?
                            Lors de la réalisation du projet il faut : 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-1"></div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <div class="ttm_single_image-wrapper text-center">
                                <img class="img-fluid" src="{{ asset('front/images/consts.jpg') }}" title="single-img-fifteen" alt="single-img-fifteen">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion res-991-mt-30">
                            <div class="toggle ttm-style-classic ttm-toggle-title-border">
                                <div class="toggle-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >01</a>
                                </div>
                                <div class="toggle-content">
                                    <p>La maitrise de toutes les étapes de la construction à travers un planning d’exécution et la connaissance des quotas des mains d’œuvre réduisent  considérablement le coût de réalisation du projet.</p>
                                </div>
                            </div>
                            <div class="toggle ttm-style-classic ttm-toggle-title-border">
                                <div class="toggle-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" >02</a>
                                </div>
                                <div class="toggle-content">
                                    <p>La lecture des différents plans d’exécution : cette étape est faite par un technicien supérieur en bâtiment ou un conducteur de travaux expérimenté. Une lecture fidèle et maitrisée des plans évitera des erreurs de construction qui peuvent engendrer une augmentation du budget ou la mise en danger du bâtiment.</p>
                                </div>
                            </div>
                            <div class="toggle ttm-style-classic ttm-toggle-title-border">
                                <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" >03</a></div>
                                <div class="toggle-content">
                                    <p>La coordination par anticipation des différentes étapes de la construction donc la préparation des équipes afin d’économiser du temps  donc de l’argent.</p>
                                </div>
                            </div>
                            <div class="toggle ttm-style-classic ttm-toggle-title-border">
                                <div class="toggle-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" >04</a>
                                </div>
                                <div class="toggle-content">
                                    <p>La transmission de l’information issue du cahier des charges telle que : les différents dosages, la profondeur des fouilles, la section des poteaux et armatures.</p>
                                </div>
                            </div>
                            <div class="toggle ttm-style-classic ttm-toggle-title-border">
                                <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" >05</a></div>
                                <div class="toggle-content">
                                    <p>Le contrôle strict des directives issues du cahier des charges.</p>
                                </div>
                            </div>
                            <div class="toggle ttm-style-classic ttm-toggle-title-border">
                                <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" >06</a></div>
                                <div class="toggle-content">
                                    <p>Le contrôle de la bonne exécution des ouvrages. Exemple : un mûr mal monté et non contrôlé engendrera une augmentation de budget lors du crépissage.</p>
                                </div>
                            </div>
                            <div class="toggle ttm-style-classic ttm-toggle-title-border">
                                <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" >07</a></div>
                                <div class="toggle-content">
                                    <p>La maitrise des différents dosages et l’utilisation très suivi des matériaux réduisent les vols de matériaux.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
    </div>
</div>
@endsection