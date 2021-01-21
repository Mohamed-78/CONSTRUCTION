@extends('front.layouts.defaults',['title' => 'REALISATIONS'])

@section('content')

<div class="page">
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">REALISATIONS</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('accueil') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Accueil</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>Nos réalisations</span>
                        </div>  
                    </div>
                </div>
            </div> 
        </div>               
    </div>
    <div class="site-main">
       
        <section class="ttm-row blog-grid-section clearfix" style="background: #f2f2f247; padding-top: 10em;padding-bottom: 5em;">
            <div class="container">
                <!-- row -->
                <div class="row">
                	@foreach($realisation as $terrain)
                    <div class="col-md-6 col-lg-6">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post box-shadow">
                            <div class="featured-thumbnail">
                                <a href="/details/realisation/{{$terrain->id}}">
                                <img class="img-fluid" src="{{URL::asset('admin/media/'.$terrain->photo)}}" alt="terrain"></a>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-title featured-title">
                                    <h5><a href="/details/realisation/{{$terrain->id}}">{{ $terrain->titre }}</a></h5>
                                    <p >{!!substr($terrain->description,0,100)!!}{!! (strlen($terrain->description) >= 100) ? '...' : '' !!}</p>
                                </div>
                                <div class="post-meta">
                                	 <i class="fa fa-calendar" style="float: left;position: absolute;">&nbsp;&nbsp;{{ (new DateTime($terrain->created_at))->format('d/m/Y') }}</i>
                                    <a href="/details/realisation/{{$terrain->id}}" style="float: right;"><i class="fa fa-arrow-circle-right"></i> 
                                    Voir plus</a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end -->
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="ttm-pagination">
                            <p>{{ $realisation->links() }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection