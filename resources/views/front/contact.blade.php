@extends('front.layouts.defaults',['title' => 'CONTACTS'])

@section('content')

<div class="page">
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">CONTACTS</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('accueil') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Accueil</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>Contactez-nous</span>
                        </div>  
                    </div>
                </div>
            </div> 
        </div>               
    </div>
    <div class="site-main">

        <section class="ttm-row contact-form-section clearfix" style="padding-top: 10em;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="spacing-6 clearfix">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h3 class="title">Nous sommes heureux de discuter de vos projets avec vous</h3>
                                </div>
                                @if(session()->has('message'))
                                <div class="bs-component">
                                    <div class="alert alert-dismissible alert-success">
                                      <button class="close" type="button" data-dismiss="alert">×</button><strong><i class="fa fa-ok"></i>SUCCES : <span style="font-size: 16px;">   Opération effectuée avec succès..</span></strong>.
                                  </div>
                              </div>
                              @endif
                          </div><!-- section title end -->
                          <ul class="ttm_contact_widget_wrapper">
                            <li>
                                <h6>ABIDJAN</h6>
                                <i class="ttm-textcolor-skincolor ti ti-location-pin"></i>
                                <span style="color: #000000;">FAYA ROUTE D'ABATTA FACE AB CENTER</span>
                            </li>
                            <li>
                                <h6>Adresse-email</h6>
                                <i class="ttm-textcolor-skincolor ti ti-comment"></i>
                                <span style="color: #000000;"><a href="mailto:infos@mgimmobilier.org">info@successgroup.com</a></span>
                            </li>
                            <li>
                                <h6>Contacts</h6>
                                <i class="ttm-textcolor-skincolor ti ti-mobile"></i>
                                <span style="color: #000000;">(+225) 09-54-31-62</span>
                            </li><br><br>
                            <div class="ttm-btn-box pr-20 pb-20">
                            <a class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-darkgrey ttm-icon-btn-left" href="https://wa.me/+22509543162" target="_blank"  style="float: left"><i class="fa fa-whatsapp"></i>Nous contactez via whatsapp</a></div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" style="padding-top: 15em;">
                    <div class="map-col-bg ttm-bgcolor-skincolor spacing-7">
                        <!-- section title -->
                        <div class="section-title text-left with-desc clearfix">
                            <div class="title-header">
                                <h2 class="title">Contactez-nous</h2>
                            </div>
                        </div><!-- section title end -->
                        <form id="ttm-contactform" class="ttm-contactform wrap-form clearfix" action="/poster_message" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label>
                                        <span class="text-input">
                                            <input name="nom" type="text" placeholder="Nom" required="required">
                                        </span>
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label>
                                        <span class="text-input">
                                            <input name="prenom" type="text"  placeholder="Prénom(s)" required="required">
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>
                                        <span class="text-input">
                                            <input name="mail" type="email" value="" placeholder="Adresse-email" required="required">
                                        </span>
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label>
                                        <span class="text-input">
                                            <input name="numero" type="text" value="" placeholder="Numero de telephone" required="required">
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <label>
                                <span class="text-input">
                                    <textarea name="message" cols="40" rows="3" placeholder="Message" required="required"></textarea>
                                </span>
                            </label>
                            <input  type="submit" id="submit" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-darkgrey" value="ENVOYER">
                             <a class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-darkgrey ttm-icon-btn-left" target="_blank" href="mailto:info@successgroup.com" style="float: right;margin-top: 2.2em;"><i class="fa fa-envelope"></i>Nous contactez via mail</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>

@endsection
