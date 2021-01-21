@extends('front.layouts.defaults',['title' => 'PLANS'])

@section('content')

<div class="page">
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">PAR DIMENSION DE TERRAINS</h1>
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
                                <h3 class="title">PLAN ET COÛT DE 200M²</h3>
                               Ensemble construisons l'avenir.
                            </div>
                        </div><!-- section-title end -->
                    </div>
                </div>
                <!-- row -->
                <div class="row" style="padding-top: 4em;">
                    <!-- post-slide -->
                    <div class="post-slide owl-carousel owl-theme owl-loaded " data-item="3" data-nav="false" data-dots="false" data-auto="false">
                        @foreach($dimension2 as $dimT)
                        <div class="featured-imagebox featured-imagebox-post box-shadow">
                            <div class="featured-thumbnail">
                                <a href="/details/dimension3/{{$dimT->id}}"><img class="img-fluid" src="{{URL::asset('admin/media/'.$dimT->photo)}}" alt=""></a>
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs" style="width: 100%;"> 
                                        <b>{{ $dimT->prix }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-title featured-title">
                                    <h5><a href="/details/dimension3/{{$dimT->id}}">{{ $dimT->titre }}</a></h5>
                                    <p style="color: #000;">
                                       @if(isset($dimT->description))
                                       {{substr($dimT->description,0,100)}}{{ (strlen($dimT->description) >= 100) ? '...' : '' }}
                                       @endif
                                    </p>
                                </div>
                                <div class="post-meta">
                                     <i class="fa fa-calendar" style="float: left;position: absolute;">&nbsp;&nbsp;{{ (new DateTime($dimT->created_at))->format('d/m/Y') }}</i>
                                    <a href="/details/dimension3/{{$dimT->id}}" style="float: right;"><i class="fa fa-arrow-circle-right"></i> 
                                    Voir plus</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="ttm-pagination">
                            <p>{{ $dimension2->links() }}</p>
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