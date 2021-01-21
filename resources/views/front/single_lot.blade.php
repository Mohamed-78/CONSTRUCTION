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

		<div class="sidebar ttm-sidebar-left ttm-bgcolor-white clearfix">
			<div class="container">
				<!-- row -->
				<div class="row d-block">
					<div class="col-lg-9 content-area">
						<!-- ttm-service-single-content-are -->
						<div class="ttm-service-single-content-area">
							<div class="ttm_single_image-wrapper mb-35">
								<img class="img-fluid" src="{{URL::asset('admin/media/'.$single->photo)}}" alt="blog-1">
							</div>
							<h3>{{ $single->titre }}</h3>
							<div class="ttm-service-description mb-30">
								<p>{{ $single->description }}</p>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="featured-icon-box left-icon icon-align-top mb-30">
										<div class="featured-icon">
											<div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
												<i class="fa fa-dollar"></i>
											</div>
										</div>
										<div class="featured-content">
											<div class="featured-title">
												<h5 class="mb-5">Prix: {{ $single->prix }}</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="featured-icon-box left-icon icon-align-top mb-30">
										<div class="featured-icon">
											<div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
												<i class="ti ti-location-pin"></i>
											</div>
										</div>
										<div class="featured-content">
											<div class="featured-title">
												<h5 class="mb-5">Lieu: {{ $single->lieu }}</h5>
											</div>
										</div>
									</div>
								</div>   
							</div>
							<div class="ttm-service-description mb-30">
							<br>
								@if ($single->photos)
								<div class="ttm-service-description mb-30" align="justify">
									<h4>Autres images</h4>
								</div>
								<div class="services-slide owl-carousel owl-theme owl-loaded mt-5" data-item="3" data-nav="false" data-dots="false" data-auto="true" style="padding-top: 2em;">
									@foreach(json_decode($single->photos) as $image)
									<div class="featured-imagebox mb-20">
										<img class="img-fluid" src="{{ asset('admin/media/'.$image) }}" alt="">
									</div>
									@endforeach
								</div>
								@endif
							</div>
						</div>
					</div>
					<div class="col-lg-3 widget-area ttm-bgcolor-grey mb-50">
						<aside class="widget post-widget">
							<h3 class="widget-title">Autres offres</h3>
							<ul class="widget-post ttm-recent-post-list">
								@foreach($other as $th)
								<li>
									<a href="/details/construction/{{ $th->id }}"><img src="{{URL::asset('admin/media/'.$th->photo)}}" alt="post-img"></a>
									<span class="post-date">{{ (new DateTime($single->created_at))->format('d/m/Y') }}</span>
									<a href="/details/construction/{{ $th->id }}" class="clearfix">{{ $single->titre }}</a>
								</li>
								@endforeach
							</ul>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection