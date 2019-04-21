<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'locale'], function() {
    Route::get('change/{language}', 'LangController@changeLanguage');
    Route::get('/', 'IndexController@getHome');
    Route::get('/lien-he.html', 'IndexController@getContact');
    Route::post('/lien-he.html', 'IndexController@postSaveContact');
    Route::get('/tuyen-dung.html', 'IndexController@getPostRecruitment');
    Route::get('/dich-vu.html', 'IndexController@getSevices');
    Route::get('/gioi-thieu.html', 'IndexController@getAbout');
    Route::get('/tin-tuc.html', 'IndexController@getPostNew');
    Route::get('/danh-muc/{slug}-{id}.html', 'IndexController@getPostByCat');

    Route::get('/tuyen-dung/{slug}-{id}.html', 'IndexController@getDetailPostRecruitment');

    Route::get('tin-tuc/{slug}-{id}.html', 'IndexController@getPostbdetail');
    Route::get('/dich-vu/{slug}-{id}.html', 'IndexController@getDetailSevices');
    Route::get('loadmorepost', 'IndexController@getLoadMorePost');
});








// Route::get('drop', function() {
//     Schema::dropIfExists('dichvu');
// });


Route::group([ 'namespace' => "Admin"], function() {
	Route::group(['prefix' => 'login', 'middleware' => 'CheckLogedIn'], function() {
    	Route::get('/', 'LoginController@getLogin');
    	Route::post('/', 'LoginController@postLogin');
	});
	Route::get('logout', 'IndexController@getLogout');
    Route::group(['prefix' => 'backend', 'middleware' => 'CheckLogedOut'], function() {
    	Route::get('/', 'IndexController@getHome');
      	Route::group(['prefix' => 'users'], function() {
	        Route::get('/', 'UserController@getListUser');
	        Route::get('/add', 'UserController@getAddUser');
	        Route::post('/add', 'UserController@postAddUser');
	       	Route::get('/edituse', 'UserController@getEditUser');
	       	Route::post('/postedituse', 'UserController@postEditUser');
	       	Route::get('/deleteuse', 'UserController@getDeleteUser');
	       	Route::get('/lockuse', 'UserController@getLockUser');
    	});
    	Route::group(['prefix' => 'slider'], function() {
    	    Route::get('/', 'SliderController@getListSlider');
    	    Route::get('/add', 'SliderController@getAddSlider');
    	    Route::post('/add', 'SliderController@postAddSlider');
    	    Route::get('/edit', 'SliderController@getEditSlider');
    	    Route::post('/edit', 'SliderController@postEditSlider');
    	    Route::get('/delete', 'SliderController@getDeleteSlider');
    	});
    	Route::group(['prefix' => 'abouthome'], function() {
    	    Route::get('/', 'AboutHomeController@getAbout');
    	    Route::post('/', 'AboutHomeController@postAbout');
    	    Route::get('/video/add', 'AboutHomeController@getAddVideoAbout');
    	    Route::post('/video/add', 'AboutHomeController@postAddVideoAbout');
    	    Route::get('/video/edit', 'AboutHomeController@getEditVideoAbout');
    	    Route::post('/video/edit', 'AboutHomeController@postEditVideoAbout');
    	    Route::get('/video/delete', 'AboutHomeController@getDeleteVideoAbout');
    	});
        Route::group(['prefix' => 'post'], function() {
            Route::get('/', 'DichVuController@getDichVu');
            Route::get('/add', 'DichVuController@getAddDichVu');
            Route::post('/add', 'DichVuController@postAddDichVu');
            Route::get('/edit', 'DichVuController@getEditDichVu');
            Route::post('/edit', 'DichVuController@postEditDichVu');
            Route::get('/delete', 'DichVuController@getDeleteDichVu');
            Route::get('/imgdelete', 'DichVuController@getDeleteImgDichVu');
        });
        Route::group(['prefix' => 'setting'], function() {
            Route::get('/', 'SettingController@getSetting');
            Route::post('/', 'SettingController@postSaveSetting');
        });
        Route::group(['prefix' => 'about'], function() {
            Route::get('/', 'SettingController@getAbout');
            Route::post('/', 'SettingController@postAbout');
        });
        Route::group(['prefix' => 'contact'], function() {
            Route::get('/', 'ContacController@getListContact');
            Route::get('/view', 'ContacController@getViewContact');
			Route::get('/delete', 'ContacController@getDeleteContact');
			Route::get('{id}/deleteList', 'ContacController@deleteList');
        });
        Route::group(['prefix' => 'news'], function() {
            Route::get('/', 'PostNewController@getPostNew');
        });
        Route::group(['prefix' => 'catenew'], function() {
            Route::get('/', 'CategoryPost@getListCate');
            Route::get('/add', 'CategoryPost@getAddCate');
            Route::post('/add', 'CategoryPost@postAddCate');
            Route::get('/delete', 'CategoryPost@getDeleteCate');
            Route::post('/edit', 'CategoryPost@postEditCate');
            Route::get('/edit', 'CategoryPost@getEditCate');
        });

        Route::group(['prefix' => 'new'], function() {
            Route::get('/', 'PostNewController@getListPostNew');
            Route::get('/add', 'PostNewController@getAddPostNew');
            Route::post('/add', 'PostNewController@postAddPostNew');
            Route::get('/delete', 'PostNewController@getDeletePostNew');
            Route::post('/edit', 'PostNewController@postEditPostNew');
            Route::get('/edit', 'PostNewController@getEditPostNew');
			Route::get('{id}/deleteList', 'PostNewController@deleteList');
        });
         Route::group(['prefix' => 'sevices'], function() {
            Route::get('/', 'SevicesController@getServiceDetail');
            Route::get('/add', 'SevicesController@getAddServiceDetail');
            Route::post('/add', 'SevicesController@postAddServiceDetail');
            Route::get('/delete', 'SevicesController@getDeleteSevice');
            Route::post('/edit', 'SevicesController@postEditPostNew');
            Route::get('/edit', 'SevicesController@getEditPostNew');
			Route::get('{id}/deleteList', 'SevicesController@deleteList');
        });
    }); 
});