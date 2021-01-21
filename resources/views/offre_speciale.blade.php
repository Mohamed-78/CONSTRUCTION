@extends('front.layouts.defaults',['title' => 'OFFRE SPECIALE CLÔTURE'])

@section('content')

<div class="page">
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">OFFRE SPECIALE CLÔTURE</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('accueil') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Accueil</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>Nos offres</span>
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
                	@foreach($offre as $terrain)
                    <div class="col-md-6 col-lg-4">
                        <div class="featured-imagebox ttm-bgcolor-white box-shadow mb-20">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{URL::asset('admin/media/'.$terrain->photo)}}" alt="">
                            </div>
                            <div class="ttm-box-bottom-content">
                                <div class="featured-title featured-title">
                                    <h5><a href="analytics-solutions.html" tabindex="-1">{{ $terrain->infos }}</a></h5>
                                    <h6><a>{{ $terrain->cout }}</a></h6>
                                </div>
                                <div class="featured-desc">
                                     @if(isset($terrain->description))
                                    <p>{{ $terrain->description }}</p>
                                    @endif
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="{{ route('contacts') }}">Nous contactez</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="ttm-pagination">
                            <p>{{ $offre->links() }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection