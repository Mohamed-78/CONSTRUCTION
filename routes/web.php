<?php


//--------------------------SITE WEB-----------------------------------
Route::get('/', 'websiteController@index')->name('accueil');
Route::get('/services', 'websiteController@services')->name('services');
Route::get('/offre_speciale', 'websiteController@offre_speciale')->name('offre_speciale');
Route::get('/presentation', 'websiteController@presentation')->name('presentation');
Route::get('/dimension200m²', 'websiteController@dimension')->name('dimension');
Route::get('/dimension300m²', 'websiteController@dimension3')->name('dimension3');
Route::get('/dimension400m²', 'websiteController@dimension4')->name('dimension4');
Route::get('/dimension500m²', 'websiteController@dimension5')->name('dimension5');
Route::get('/dimension600m²', 'websiteController@dimension6')->name('dimension6');
Route::get('/modeles_de_maison', 'websiteController@projet')->name('projet');
Route::get('/duplex', 'websiteController@duplex')->name('duplex');
Route::get('/triplex', 'websiteController@triplex')->name('triplex');
Route::get('/contacts', 'websiteController@contacts')->name('contacts');
Route::get('/realisations', 'websiteController@realisations')->name('realisations');
Route::get('/offres', 'websiteController@offres')->name('offres');
Route::get('/etat', 'websiteController@etat')->name('etat');
Route::get('/description_projet', 'websiteController@dp')->name('dp');
Route::get('/conception_vue', 'websiteController@cv')->name('cv');
Route::get('/rendu_projet', 'websiteController@rp')->name('rp');
Route::get('/devis', 'websiteController@devis')->name('devis');
Route::get('/realisation_batiment', 'websiteController@rb')->name('rb');
Route::get('/nos_offres', 'websiteController@construction')->name('constructions');
Route::get('/details/terrains/{id}', 'websiteController@singleTerrains');
Route::get('/details/lot/{id}', 'websiteController@singleLot');
Route::get('/details/location/{id}', 'websiteController@singleLocation');
Route::get('/details/construction/{id}', 'websiteController@singleConstruction');
Route::get('/details/realisation/{id}', 'websiteController@singleRealisation');
Route::get('/details/dimension3/{id}', 'websiteController@singleDimension3');
Route::get('/details/typeProjet/{id}', 'websiteController@singleType');
Route::get('/gestion_locative', 'websiteController@locative')->name('locative');
Route::get('/location_maison', 'websiteController@location_maison')->name('location_maison');
Route::get('/vente_apparts', 'websiteController@vente_apparts')->name('vente_apparts');
Route::get('/details/appart/{id}', 'websiteController@singleAppart');

Route::post('/poster_message', 'websiteController@send_msg')->name('send_msg');

Auth::routes();

Route::get('/connexion/user', 'ConnexionController@authenticate');



Route::get('/managment/groupOri/index', 'HomeController@index')->name('home');
Route::get('/managment/groupOri/lot', 'HomeController@lot')->name('lot');
Route::get('/managment/groupOri/offre', 'HomeController@offre')->name('offre');
Route::get('/managment/groupOri/location', 'HomeController@location')->name('location');
Route::get('/managment/groupOri/appart', 'HomeController@appart')->name('appart');
Route::get('/managment/groupOri/message', 'HomeController@message');
Route::get('/managment/groupOri/construction', 'HomeController@construction')->name('construction');
Route::get('/managment/groupOri/ModelOfHouse', 'HomeController@TypeProjet')->name('TypeProjet');
Route::get('/managment/groupOri/dimensionTerrain', 'HomeController@dimensionTerrain')->name('dimensionTerrain');
Route::get('/managment/groupOri/temoignage', 'HomeController@temoignage')->name('temoignage');
Route::get('/managment/groupOri/realisations', 'HomeController@real')->name('real');
Route::get('/managment/ajouter/terrain', 'HomeController@ajouter_terrain')->name('ajouter_terrain');
Route::get('/managment/ajouter/lot', 'HomeController@ajouter_lot')->name('ajouter_lot');
Route::get('/managment/ajouter/location', 'HomeController@ajouter_location')->name('ajouter_location');
Route::get('/managment/ajouter/appart', 'HomeController@ajouter_appart')->name('ajouter_appart');
Route::get('/managment/ajouter/construction', 'HomeController@ajouter_construction')->name('ajouter_construction');
Route::get('/managment/ajouter/dimensionT', 'HomeController@ajouter_dimensionT')->name('ajouter_dimensionT');
Route::get('/managment/ajouter/projet', 'HomeController@ajouter_projet')->name('ajouter_projet');
Route::get('/managment/ajouter/offre', 'HomeController@ajouter_offre')->name('ajouter_offre');
Route::get('/managment/ajouter/temoignage', 'HomeController@ajouter_temoignage')->name('ajouter_temoignage');
Route::get('/managment/ajouter/realisation', 'HomeController@ajouter_realisation')->name('ajouter_realisation');
Route::get('/managment/update/terrain/{id}', 'HomeController@update_terrain')->name('update_terrain');
Route::get('/managment/update/const/{id}', 'HomeController@update_const')->name('update_const');
Route::get('/managment/update/dimensionT/{id}', 'HomeController@update_dimensionT')->name('update_dimensionT');
Route::get('/managment/update/typePr/{id}', 'HomeController@update_typePr')->name('update_typePr');
Route::get('/managment/update/offre/{id}', 'HomeController@update_offre')->name('update_offre');
Route::get('/managment/update/temoin/{id}', 'HomeController@update_temoin')->name('update_temoin');
Route::get('/managment/view/msg/{id}', 'HomeController@view_msg')->name('view_msg');
Route::get('/managment/update/real/{id}', 'HomeController@update_real')->name('update_real');
Route::get('/managment/delete/terrain/{id}', 'HomeController@delete_terrain')->name('delete_terrain');
Route::get('/managment/delete/dimensionT/{id}', 'HomeController@delete_dimensionT')->name('delete_dimensionT');
Route::get('/managment/delete/offre/{id}', 'HomeController@delete_offre')->name('delete_offre');
Route::get('/managment/delete/real/{id}', 'HomeController@delete_real')->name('delete_real');
Route::get('/managment/delete/messages/{id}', 'HomeController@delete_msg')->name('delete_msg');
Route::get('/managment/delete/lot/{id}', 'HomeController@delete_lot')->name('delete_lot');
Route::post('/managment/ajout/terrain', 'HomeController@add_terrains');
Route::post('/managment/updated/terrain/{id}', 'HomeController@updated_terrain');
Route::post('/managment/ajout/lots', 'HomeController@add_lots');
Route::get('/managment/update/lot/{id}', 'HomeController@update_lot')->name('update_lot');
Route::post('/managment/updated/lot/{id}', 'HomeController@updated_lot');
Route::post('/managment/ajout/const', 'HomeController@add_const');
Route::post('/managment/ajout/dimensionsT', 'HomeController@add_dimensionsT');
Route::post('/managment/ajout/typePr', 'HomeController@add_typePr');
Route::get('/managment/delete/delete_typePr/{id}', 'HomeController@delete_typePr')->name('delete_typePr');
Route::post('/managment/ajout/offre', 'HomeController@add_offre');
Route::post('/managment/ajout/temoin', 'HomeController@add_temoin');
Route::post('/managment/updated/constr/{id}', 'HomeController@updated_constr');
Route::post('/managment/updated/dimensionsT/{id}', 'HomeController@updated_dimensionsT');
Route::post('/managment/updated/typePr/{id}', 'HomeController@updated_typePr');
Route::post('/managment/updated/offre/{id}', 'HomeController@updated_offre');
Route::post('/managment/updated/temoin/{id}', 'HomeController@update_temo');
Route::post('/managment/updated/real/{id}', 'HomeController@updated_real');
Route::post('/managment/ajout/real', 'HomeController@add_realisation');
Route::post('/managment/ajout/locations', 'HomeController@add_locations');
Route::get('/managment/update/locations/{id}', 'HomeController@update_locations')->name('update_locations');
Route::post('/managment/updated/locations/{id}', 'HomeController@updated_location');
Route::get('/managment/delete/location/{id}', 'HomeController@delete_location')->name('delete_location');
Route::post('/managment/ajout/apparts', 'HomeController@add_apparts');
Route::get('/managment/update/apparts/{id}', 'HomeController@update_apparts')->name('update_apparts');

Route::post('/managment/updated/apparts/{id}', 'HomeController@updated_apparts');
Route::get('/managment/delete/apparts/{id}', 'HomeController@delete_apparts')->name('delete_apparts');
