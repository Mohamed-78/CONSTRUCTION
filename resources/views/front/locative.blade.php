@extends('front.layouts.defaults',['title' => 'GESTION LOCATIVE'])

@section('content')

<div class="page">
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">GESTION LOCATIVE</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('accueil') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Accueil</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span style="color: white;">Gestion locative</span>
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
                                    <h3 class="title">GESTION LOCATIVE</h3>
                                </div>
                                <div class="title-desc" align="justify">MG IMMOBILIER&nbsp;</span>Nous assurons la gestion de votre bien dès que vous decidez de le mettre sur le marché. Nous prenons tout en charge, depuis la réalisation des diagnostics immobiliers obligatoires, jusqu'a la redaction de l'annonce, surtout à améliorer le rapport locatif de l'appartement, de la maison ou du local commercial en question</p>
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
                        <div class="section-title text-center with-desc clearfix">
                            <div class="title-header">
                                <h5>MG IMMOBILIER</h5>
                                <h2 class="title">QUELQUES LOTISSEMENTS</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-3 col-sm-2"></div>
                </div>
            </div>
        </section>
        <section class="ttm-row ttm-bg ttm-bgimage-yes bg-img3 process-section clearfix">
            <div class="container">
                <div class="row">
                    @foreach($lot as $off)
                    <div class="col-md-6 col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post box-shadow">
                            <div class="featured-thumbnail">
                                <a href="/details/lot/{{$off->id}}"><img class="img-fluid" src="{{URL::asset('admin/media/'.$off->photo)}}" alt=""></a>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-title featured-title">
                                    <h5><a href="/details/lot/{{$off->id}}">{{ $off->titre }}</a></h5>
                                     <p style="color: #000;">{!!substr($off->description,0,80)!!}{!! (strlen($off->description) >= 80) ? '...' : '' !!} <b style="font-size: 17px;">(Dimension:&nbsp;{{ $off->dimension }})</b></p>
                                </div>
                                <div class="post-meta" style="width: 100% !important;">
                                    <h6 style="float: left;position: absolute;"><i class="fa fa-map-marker"></i> {{ $off->lieu }}</h6>
                                    <a style="position: absolute !important; right:15px;" href="/details/lot/{{$off->id}}">
                                    Voir plus <i class="fa fa-arrow-circle-right"></i> </a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end -->
                    </div>
                    @endforeach
                </div>
                <!-- row end -->
            </div>
        </section>
    </div>
</div>
@endsection
