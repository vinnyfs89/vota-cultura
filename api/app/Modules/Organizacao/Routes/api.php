<?php

Route::group([
    'prefix' => 'organizacao'
], function () {
    Route::get('{co_organizacao}', 'OrganizacaoApiResourceController@show')->where('co_organizacao', '[0-9]+');
    Route::apiResource('/', 'OrganizacaoApiResourceController');
    Route::apiResource('criterio', 'CriterioApiResourceController')->only('index', 'show');
    Route::apiResource('segmento', 'SegmentoApiResourceController')->only('index', 'show');
});
