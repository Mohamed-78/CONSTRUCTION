@extends('front.layouts.defaults',['title' => 'DETAILS'])


@section('content')

<div class="page">
	<div class="ttm-page-title-row">
		<div class="container">
			<div class="row">
				<div class="col-md-12"> 
					<div class="title-box ttm-textcolor-white">
						<div class="page-title-heading">
							<h1 class="title">{{ $single->titre }}</h1>
						</div><!-- /.page-title-captions -->
						<div class="breadcrumb-wrapper">
							<span>
								<a title="Homepage" href="{{ route('accueil') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Accueil</a>
							</span>
							<span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
							<span>{{ $single->titre }}</span>
						</div>  
					</div>
				</div>
			</div> 
		</div>               
	</div>
	<div class="site-main">

        <div class="sidebar ttm-sidebar-right ttm-bgcolor-white clearfix">
            <div class="container">
                <!-- row -->
                <div class="row d-block">
                    <div class="col-lg-9 content-area pull-left">
                        <!-- ttm-blog-classic-->
                        <article class="post ttm-blog-classic">
                           <div class="featured-imagebox featured-imagebox-post">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="{{URL::asset('admin/media/'.$single->photo)}}" alt="">
                                </div>
                                <div class="featured-content featured-content-post">
                                    <div class="post-title featured-title">
                                        <h5><a href="single-blog.html">{{ $single->titre }}</a></h5>
                                    </div>
                                    <div class="post-meta">
                                        <span class="ttm-meta-line" style="font-size: 15px;"><i class="fa fa-calendar"></i>Publié le:&nbsp;{{ (new DateTime($single->date_ajout))->format('d/m/Y') }}</span>
                                        <span class="ttm-meta-line" style="font-size: 15px;"><i class="fa fa-map-marker"></i>{{ $single->lieu }}</span>
                                        <span class="ttm-meta-line" style="font-size: 15px;"><i class="fa fa-dollar"></i>Prix:&nbsp;{{ $single->prix }}</span>
                                    </div>
                                    <div class="separator">
                                        <div class="sep-line solid mt-10 mb-20"></div>
                                    </div>
                                    <div class="featured-desc">
                                        <p style="text-align: justify;">{{ $single->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <div class="ttm-service-description mb-30">
                        	<br>
                        	@if ($single->photos)
                        	<div class="ttm-service-description mb-30" align="justify">
                        		<h4>Autres images</h4>
                        	</div>
                        	<div class="services-slide owl-carousel owl-theme owl-loaded mt-5" data-item="3" data-nav="false" data-dots="false" data-auto="true" style="padding-top: 2em;">
                        		<!-- featured-imagebox -->

                        		@foreach(json_decode($single->photos) as $image)
                        		<div class="featured-imagebox mb-20">
                        			<img class="img-fluid" src="{{ asset('admin/media/'.$image) }}" alt="">
                        		</div>
                        		@endforeach
                        	</div>
                        	@endif
                        </div>
                    </div>
                    <div class="col-lg-3 widget-area ttm-bgcolor-grey pull-right">
                        <aside class="widget post-widget">
                            <h3 class="widget-title">Quelques terrains</h3>
                            <ul class="widget-post ttm-recent-post-list">
                    		@foreach($other as $th)
                                <li>
                                    <a href="/details/terrains/{{ $th->id }}"><img src="{{URL::asset('admin/media/'.$th->photo)}}"></a>
                                    <span class="post-date">{{ (new DateTime($th->date_ajout))->format('d/m/Y') }}</span>
                                    <a href="/details/terrains/{{ $th->id }}" class="clearfix">{{ $th->titre }}</a>
                                </li>
                        	@endforeach
                            </ul>
                        </aside>
                        <aside class="widget contact-widget">
                            <h3 class="widget-title">Coordonnées</h3>      
                            <ul class="contact-widget-wrapper">
                                <li><i class="fa fa-map-marker"></i>ABIDJAN FAYA ROUTE D'ABATTA FACE AB CENTER</li>
                                <li><i class="fa fa-envelope-o"></i><a href="mailto:info@mgimmobilier.org" target="_blank">info@groupori.org</a></li>
                                <li><i class="fa fa-phone"></i>(+225) 09-54-31-62</li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection