@extends('front.layouts.defaults',['title' => 'DEVIS'])

@section('content')

<div class="page">
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">DEVIS OU COÛT DE REALISATION DU PROJET</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('accueil') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Accueil</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>Devis ou coût de réalisation du projet</span>
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
                                <h2 class="title">DEVIS ou  COÛT DE REALISATION DU PROJET. </h2>
                            </div>
                            <div class="title-desc">Chez nous le devis est fait en 2 étapes.</div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-1"></div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <div class="ttm_single_image-wrapper text-center">
                                <img class="img-fluid" src="{{ asset('front/images/deviss.jpg') }}" title="single-img-fifteen" alt="single-img-fifteen">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion res-991-mt-30">
                            <div class="toggle ttm-style-classic ttm-toggle-title-border">
                                <div class="toggle-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >Devis gros œuvre</a>
                                </div>
                                <div class="toggle-content">
                                    <p> Ce devis est essentiellement constitué des matériaux de constructions du premier œuvre et des mains d’œuvres des ouvriers. Le déroulement de cette étape purement technique est généralement  imposé au client sans aucune modification. Le  gros œuvre part de la fondation du bâtiment, des différentes élévations des murs  aux crépissages du bâtiment. Lors de cette phase, seront effectués les travaux ci-dessous :<br></p>
                                    <ul class="ttm-list ttm-list-style-icon mt-15">
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="ttm-list-li-content">l’implantation du bâtiment</span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="ttm-list-li-content">les différentes fouilles</span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="tm-list-li-content">le ferraillage du bâtiment (paillasse, semelles filante, poteaux, chainage bas et haut, trehi soudé, nervure ….)</span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="ttm-list-li-content">la menuiserie (coffrage des poteaux, chainage bas et haut, dalle et escalier)</span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="tm-list-li-content">maçonnerie (tirage de niveau, travaux de béton armé et non armé, élévation de mûrs, crépissage….)</span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="tm-list-li-content">plomberie (évacuation, eau usée et alimentation)</span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="tm-list-li-content">électricité (câble paratonnerre, tube orange et boite encastrées…)</span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="tm-list-li-content">Charpente, couverture et cadre de porte.</span>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            <div class="toggle ttm-style-classic ttm-toggle-title-border">
                                <div class="toggle-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" >Devis second œuvre ou finition </a>
                                </div>
                                <div class="toggle-content">
                                    <p>Ce devis est essentiellement constitué des matériaux de finition  et des mains d’œuvres des ouvriers. Cette étape a pour but de rendre la maison habitable selon les goûts et les moyens du client. Le second œuvre  part du crépissage du bâtiment à la peinture. Lors de cette phase, seront effectués les travaux ci-dessous :</p>
                                    <ul class="ttm-list ttm-list-style-icon mt-15">
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="ttm-list-li-content">Plomberie appareillage (sanitaire, robinet, évier de cuisine, siphon de sol ….)</span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="ttm-list-li-content">Électricité filerie et appareillage (fils électriques, prises, interrupteurs, ampoules….)</span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="tm-list-li-content">Menuiserie et aluminium (faux plafond, porte, fenêtre, baie vitrée, balcon, escalier)</span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="ttm-list-li-content">Staff ou corniche</span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="tm-list-li-content">Revêtement (carrelage des chambres, cuisine, pièces à vivre et humides) </span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="tm-list-li-content">Ferronnerie (anti vol, grand et petit portail, garde-corps escalier et balcon)</span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-arrow-circle-o-right"></i><span class="tm-list-li-content">Peinture intérieure et extérieure.</span>
                                    </li>
                                </ul>
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