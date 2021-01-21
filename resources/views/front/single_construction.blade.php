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
		<div class="container">
			<div class="row">
				<!-- row -->
				<div class="col-lg-4">
					<div class="featured-imagebox featured-imagebox-team featured-imagebox-team-details">
						<div class="featured-thumbnail">
							<img class="img-fluid" src="{{URL::asset('admin/media/'.$single->photo)}}" alt="image">
						</div>
						@if(isset($single->photos))
						<div class="featured-content featured-content-team">
							<div class="ttm-social-links-wrapper">
								<ul class="social-icons list-inline" style="visibility: hidden;">
									<li class="social-facebook"><a class="tooltip-top" target="_blank" href="https://web.facebook.com/MG-Immobilier-101298968365194" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li class="social-twitter"><a class=" tooltip-top" target="_blank" href="mailto:info@mgimmobilier.org" data-tooltip="Twitter"><i class="fa fa-google" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
						@endif
						@if(isset($single->photos))
						<div class="ttm-team-member-data">
							<ul class="ttm-team-details-list clearfix">
								<li>
									<div class="ttm-team-list-title">
										<i class="fa fa-phone"></i>Contact:
									</div>
									<div class="ttm-team-list-value">
										<a href="tel:+22567357240" tabindex="0">(+225) 09-54-31-62</a>
									</div>
								</li>
								<li>
									<div class="ttm-team-list-title">
										<i class="ti ti-email"></i> Email :
									</div>
									<div class="ttm-team-list-value">
										<a href="mailto:info@construction.org" tabindex="0">info@groupori.org</a>
									</div>
								</li>
								<li>
									<div class="ttm-team-list-title">
										<i class="ti ti-world"></i>Site web :
									</div>
									<div class="ttm-team-list-value">
										<a target="_blank" href="https://www.construction.org/">www.groupori.com</a>
									</div>
								</li>
								<li>
									<div class="ttm-team-list-title">
										<i class="ti ti-location-pin"></i>Localisation :
									</div>
									<div class="ttm-team-list-value">ABIDJAN FAYA ROUTE D'ABATTA FACE AB CENTER</div>
								</li>
							</ul>
						</div>
						@endif
					</div>
				</div>
				<div class="col-lg-8 ttm-team-member-single-content-area">
					<div class="ttm-team-member-content">
						<h3 class="ttm-team-member-single-title">{{ $single->titre }}</h3>
						<h4 class="ttm-team-member-single-position" style="padding-top: 2em;"><i class="fa fa-map-marker"></i> {{ $single->lieu }} | Prix: {{ $single->prix }}</h4>
						<p class="pt-20">{{ $single->description }}</p>
						<a href="https://wa.me/+22509543162?text=Bonjour%20,%20je%20suis%20intéressé%20par%20l'offre:%20{{ $single->titre }}%20qui%20coûte%20{{$single->prix}}" class="ttm-btn ttm-btn-size-xs ttm-btn-shape-square ttm-btn-style-fill ttm-btn-bgcolor-skincolor ttm-btn-color-white" target="_blank">Whatasapp</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="tel:+22509543162" class="ttm-btn ttm-btn-size-xs ttm-btn-shape-square ttm-btn-style-fill ttm-btn-bgcolor-skincolor ttm-btn-color-white" target="_blank">Appelez</a>
						<div class="ttm-tabs ttm-tab-style-horizontal pt-40 clearfix">
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
			</div>
		</div>
	</div>
</div>
</div>
@endsection