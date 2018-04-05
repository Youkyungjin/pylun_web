<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//HTTP Request 처리 라이브러리
use Illuminate\Http\Request;

Route::get('/', 'HomeController@index')->name("main");
Route::get('/minor', 'HomeController@minor')->name("minor");

Route::get('/product', 'ProductController@index')->name("product");
Route::get('/product/list', 'ProductController@list')->name("product");
Route::get('/product/add', 'ProductController@add')->name("product");


Route::get('/api/product/list', function (Request $request) {

    $params = $request->all();

    $data  = new stdClass();
    $data->productcode     = '1';
    $data->channel         = '네이버';
    $data->store           = '르꼬샤';
    $data->productname     = 'ToscanaMiss O Camel miniBag Shoulder strap) ';
    $data->brand           = '토튬';
    $data->supply          = '공급사명';
    $data->saleprice       = '$299';
    $data->deliverycompany = 'ACI Expreess';
    $data->deliveryprice   = '$10';
    $data->supplyprice     = '$200';
    $data->saledate        = '2018-04-05 23:42:11';

    $rst = new stdClass();
    $rst->result = true;
    $rst->data = new stdClass();
    $dummyArray = array();

    $cnt = 0;
    $i   = $request->page;
    while($cnt < 10)
    {
        $data->productcode = $data->productcode + ( $cnt +  $i );
        array_push($dummyArray,$data);
        $cnt++;
    }

    $rst->data->contents               = $dummyArray;
    $rst->data->pagination             = new stdClass();
    $rst->data->pagination->page       = $params['page'];
    $rst->data->pagination->totalCount = 300;

    return json_encode($rst);
});