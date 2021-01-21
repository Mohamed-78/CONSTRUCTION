@extends('front.layouts.defaults',['title' => 'APPARTS'])

@section('content')

<div class="page">
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">VENTE D'APPARTEMENTS</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('accueil') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Accueil</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>Nos appartements en vente</span>
                        </div>  
                    </div>
                </div>
            </div> 
        </div>               
    </div>
    <div class="site-main">
       
        <!-- sidebar -->
        <div class="sidebar ttm-sidebar-right ttm-bgcolor-white clearfix">
            <div class="container">
                <!-- row -->
                <div class="row d-block">
                    @foreach($appart as $loc)
                    <div class="col-lg-6 pull-left">
                        <article class="post ttm-blog-classic" style=" box-shadow: 0px 5px 6px rgba(72, 105, 114, 0.15);-webkit-transition: all 0.4s;-o-transition: all 0.4s;transition: all 0.4s;">
                           <div class="featured-imagebox featured-imagebox-post">
                                <div class="featured-thumbnail">
                                    <a href="/details/appart/{{$loc->id}}">
                                        <img class="img-fluid" src="{{URL::asset('admin/media/'.$loc->photo)}}" alt=""></a>
                                </div>
                                <div class="featured-content featured-content-post">
                                    <div class="post-title featured-title">
                                        <h5 style="margin-left: 1em;"><a href="/details/appart/{{$loc->id}}">{{ $loc->titre }}</a></h5>
                                    </div>
                                    <div class="post-meta">
                                        <span class="ttm-meta-line" style="margin-left: 1em;"><i class="fa fa-calendar"></i><strong>Publié le:  {{ (new DateTime($loc->date_ajout))->format('d/m/Y') }}</strong></span>
                                        <span class="ttm-meta-line"  style="margin-left: 1em;"><i class="fa fa-map-marker"></i><strong>{{ $loc->lieu }}</strong></span>
                                    </div>
                                    <div class="separator">
                                        <div class="sep-line solid mt-10 mb-20"></div>
                                    </div>
                                    <div class="featured-desc">
                                        <p style="text-align: justify;margin-left: 1em;margin-right: 1em;">{!!substr($loc->description,0,250)!!}{!! (strlen($loc->description) >= 250) ? '...' : '' !!}</p>
                                    </div>
                                    <div class="post-meta">
                                     <h6 style="float: left;position: absolute;margin-left: 1em;">Prix : {{ $loc->prix }}</h6>
                                    <a href="/details/appart/{{$loc->id}}" style="float: right;margin-right: 1em;"><i class="fa fa-arrow-circle-right"></i> 
                                    Voir plus</a>
                                </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="ttm-pagination">
                               <p>{{ $appart->links() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection