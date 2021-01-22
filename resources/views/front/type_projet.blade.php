@extends('front.layouts.defaults',['title' => 'NOS MODELES DE MAISON'])

@section('content')

<div class="page">
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">NOS MODELES DE MAISON</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('accueil') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Accueil</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>Nos differents modèles</span>
                        </div>  
                    </div>
                </div>
            </div> 
        </div>               
    </div>

    <div class="site-main">

    <section class="ttm-bg ttm-bgimage-yes bg-img2 ttm-bgcolor-darkgrey" style="padding-bottom: 2em;padding-top: 2em;">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-20">
                            <h2 class="title" style="color: white;">VILLA BASSE</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section><br><br>
         <p style="text-align: center;font-size: 18px;">Trouver l’inspiration pour votre futur projet. Cette manière de procéder vous aidera lors de la description du projet.</p>
        <section class="ttm-row blog-section home-blog-section clearfix" style="background: #f2f2f247; padding-top: 4em;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12" align="Center">
                        <!-- section-title -->
                        <div class="section-title">
                            <div class="title-header">
                                <h2 class="title" style="visibility: hidden;">VILLA BASSE</h2>
                              <p  style="visibility: hidden;">Trouver l’inspiration pour votre futur projet. Cette manière de procéder vous aidera lors de la description du projet.</p> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row" style="padding-top: 4em;padding-bottom: 4em;">
                    <!-- post-slide -->
                    <div class="post-slide owl-carousel owl-theme owl-loaded " data-item="3" data-nav="false" data-dots="false" data-auto="false">
                        <!-- featured-imagebox-post -->
                        @foreach($villa_basse as $vb)
                        <div class="featured-imagebox featured-imagebox-post box-shadow">
                            <div class="featured-thumbnail">
                                <a href="/details/typeProjet/{{$vb->id}}"><img class="img-fluid" src="{{URL::asset('admin/media/'.$vb->photo)}}" alt=""></a>
                                @if(isset($vb->prix))
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs" style="width: 100%;"> 
                                        <b>{{ $vb->prix }}</b>
                                    </div>
                                </div>
                                @endif
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
                                <div class="ttm-btn-box pr-20 pb-20">
                                    <a class="ttm-btn ttm-btn-size-xs ttm-btn-shape-square ttm-btn-style-border ttm-icon-btn-left ttm-btn-color-black" href="/contacts" title=""  style="float: left"><i class="fa fa-envelope"></i>Nous contactez</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="ttm-row ttm-bg ttm-bgimage-yes bg-img2 ttm-bgcolor-darkgrey">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-20">
                            <h2 class="title" style="color: white;">DUPLEX</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row" style="padding-top: 4em;padding-bottom: 4em;">
            <!-- post-slide -->
            <div class="post-slide owl-carousel owl-theme owl-loaded " data-item="3" data-nav="false" data-dots="false" data-auto="false">
                <!-- featured-imagebox-post -->
                @foreach($duplex as $vb)
                <div class="featured-imagebox featured-imagebox-post box-shadow">
                    <div class="featured-thumbnail">
                        <a href="/details/typeProjet/{{$vb->id}}"><img class="img-fluid" src="{{URL::asset('admin/media/'.$vb->photo)}}" alt=""></a>
                        @if(isset($vb->prix))
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs" style="width: 100%;"> 
                                <b>{{ $vb->prix }}</b>
                            </div>
                        </div>
                        @endif
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
                     <div class="ttm-btn-box pr-20 pb-20">
                        <a class="ttm-btn ttm-btn-size-xs ttm-btn-shape-square ttm-btn-style-border ttm-icon-btn-left ttm-btn-color-black" href="/contacts" title=""  style="float: left"><i class="fa fa-envelope"></i>Nous contactez</a>
                    </div>
                     {{-- <div class="post-meta">
                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="{{ route('contacts') }}">Nous contactez</a>
                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" target="_blank" href="mailto:info@successgroup.com" style="float: right;">Nous contactez via mail</a>
                   </div> --}}
               </div>
           </div>
           @endforeach
            </div>
           {{-- <div class="row">
                <div class="col-md-12 text-center">
                    <div class="ttm-pagination">
                        <p>{{ $villa_basse->links() }}</p>
                    </div>
                </div>
            </div> --}}
        </div>
        </div>
        <section class="ttm-row ttm-bg ttm-bgimage-yes bg-img2 ttm-bgcolor-darkgrey">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-20">
                            <h2 class="title" style="color: white;">COUR COMMUNE</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row" style="padding-top: 4em;padding-bottom: 4em;">
            <!-- post-slide -->
            <div class="post-slide owl-carousel owl-theme owl-loaded " data-item="3" data-nav="false" data-dots="false" data-auto="false">
                <!-- featured-imagebox-post -->
                @foreach($courComm as $vb)
                <div class="featured-imagebox featured-imagebox-post box-shadow">
                    <div class="featured-thumbnail">
                        <a href="/details/typeProjet/{{$vb->id}}"><img class="img-fluid" src="{{URL::asset('admin/media/'.$vb->photo)}}" alt=""></a>
                        @if(isset($vb->prix))
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs" style="width: 100%;"> 
                                <b>{{ $vb->prix }}</b>
                            </div>
                        </div>
                        @endif
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
                     <div class="ttm-btn-box pr-20 pb-20">
                        <a class="ttm-btn ttm-btn-size-xs ttm-btn-shape-square ttm-btn-style-border ttm-icon-btn-left ttm-btn-color-black" href="/contacts" title=""  style="float: left"><i class="fa fa-envelope"></i>Nous contactez</a>
                    </div>
               </div>
           </div>
           @endforeach
            </div>
           {{-- <div class="row">
                <div class="col-md-12 text-center">
                    <div class="ttm-pagination">
                        <p>{{ $villa_basse->links() }}</p>
                    </div>
                </div>
            </div> --}}
        </div>
        </div>
        <section class="ttm-row ttm-bg ttm-bgimage-yes bg-img2 ttm-bgcolor-darkgrey">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-20">
                            <h2 class="title" style="color: white;">IMMEUBLE R+</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row" style="padding-top: 4em;padding-bottom: 4em;">
            <!-- post-slide -->
            <div class="post-slide owl-carousel owl-theme owl-loaded " data-item="3" data-nav="false" data-dots="false" data-auto="false">
                <!-- featured-imagebox-post -->
                @foreach($immeuble as $vb)
                <div class="featured-imagebox featured-imagebox-post box-shadow">
                    <div class="featured-thumbnail">
                        <a href="/details/typeProjet/{{$vb->id}}"><img class="img-fluid" src="{{URL::asset('admin/media/'.$vb->photo)}}" alt=""></a>
                        @if(isset($vb->prix))
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs" style="width: 100%;"> 
                                <b>{{ $vb->prix }}</b>
                            </div>
                        </div>
                        @endif
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
                     <div class="ttm-btn-box pr-20 pb-20">
                        <a class="ttm-btn ttm-btn-size-xs ttm-btn-shape-square ttm-btn-style-border ttm-icon-btn-left ttm-btn-color-black" href="/contacts" title=""  style="float: left"><i class="fa fa-envelope"></i>Nous contactez</a>
                    </div>
               </div>
           </div>
           @endforeach
            </div>
           {{-- <div class="row">
                <div class="col-md-12 text-center">
                    <div class="ttm-pagination">
                        <p>{{ $villa_basse->links() }}</p>
                    </div>
                </div>
            </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection