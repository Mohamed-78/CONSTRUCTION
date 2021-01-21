@extends('front.layouts.defaults',['title' => 'TYPE DE PROJETS'])

@section('content')

<div class="page">
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">PAR TYPE DE PROJETS</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('accueil') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Accueil</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>Plan et coût de construction</span>
                        </div>  
                    </div>
                </div>
            </div> 
        </div>               
    </div>
    <div class="site-main">
       
        <section class="ttm-row blog-section home-blog-section clearfix" style="background: #f2f2f247; padding-top: 8em;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12" align="Center">
                        <!-- section-title -->
                        <div class="section-title">
                            <div class="title-header">
                                <h2 class="title">PLAN ET COÛT DE TRIPLEX</h2>
                               Trouver l’inspiration pour votre futur projet. Cette manière de procéder vous aidera lors de la description du projet.
                            </div>
                        </div>
                        <!-- section-title end -->
                    </div>
                </div>
                <!-- row -->
                <div class="row" style="padding-top: 4em;">
                    <!-- post-slide -->
                    <div class="post-slide owl-carousel owl-theme owl-loaded " data-item="3" data-nav="false" data-dots="false" data-auto="false">
                        <!-- featured-imagebox-post -->
                        @foreach($villa_triplex as $vb)
                        <div class="featured-imagebox featured-imagebox-post box-shadow">
                            <div class="featured-thumbnail">
                                <a href="/details/typeProjet/{{$vb->id}}"><img class="img-fluid" src="{{URL::asset('admin/media/'.$vb->photo)}}" alt=""></a>
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs" style="width: 100px;"> 
                                        <b>{{ $vb->prix }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-title featured-title">
                                    <h5><a href="/details/typeProjet/{{$vb->id}}">{{ $vb->titre }}</a></h5>
                                    <p style="color: #000;">
                                       @if(isset($vb->description))
                                       {{substr($vb->description,0,100)}}{{ (strlen($vb->description) >= 100) ? '...' : '' }}
                                       @endif
                                    </p>
                                </div>
                                <div class="post-meta">
                                     <i class="fa fa-calendar" style="float: left;position: absolute;">&nbsp;&nbsp;{{ (new DateTime($vb->created_at))->format('d/m/Y') }}</i>
                                    <a href="/details/typeProjet/{{$vb->id}}" style="float: right;"><i class="fa fa-arrow-circle-right"></i> 
                                    Voir plus</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- featured-imagebox-post end -->
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="ttm-pagination">
                                <p>{{ $villa_triplex->links() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row end-->
            </div>
        </section>
    </div>
</div>
@endsection