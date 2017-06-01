<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'v1'], function () {


        // Страница спиcка рубрик
        Route::get('/rubrics', [
            'uses' => 'Admin\V1\ContentManagement\Rubrics\IndexController@execute',
            'as' => 'admin.v1.content-management.rubrics.index-controller.execute',
        ])
            ->middleware([
                'sanitaze.limit-offset'
            ]);

        Route::group(['prefix' => 'rubric'], function () {
            // Страница добавления рубрики
            Route::match(['get', 'post'], '/add', [
                'uses' => 'Admin\V1\ContentManagement\Rubrics\AddController@execute',
                'as' => 'admin.v1.content-management.rubrics.add-controller.execute'
            ]);

            // Страница редактирования рубрики
            Route::match(['get', 'post'], '/{rubric_id}/edit', [
                'uses' => 'Admin\V1\ContentManagement\Rubrics\EditController@execute',
                'as' => 'admin.v1.content-management.rubrics.edit-controller-controller.execute'
            ])
                ->where([
                    'rubric_id' => '[0-9]+'
                ]);

            // Страница удаления рубрики
            Route::match(['get', 'post'], '/{rubric_id}/delete', [
                'uses' => 'Admin\V1\ContentManagement\Rubrics\DeleteController@execute',
                'as' => 'admin.v1.content-management.rubrics.delete-controller.execute'
            ])
                ->where([
                    'rubric_id' => '[0-9]+'
                ]);
        });


        // Страница списка категорий
        Route::get('/categories', [
            'uses' => 'Admin\V1\ContentManagement\Categories\IndexController@execute',
            'as' => 'admin.v1.content-management.categories.index-controller.execute'
        ])
            ->middleware([
                'sanitaze.limit-offset'
            ]);

        Route::group(['prefix' => 'category'], function () {
            // Страница добавления категории
            Route::match(['get', 'post'], '/add', [
                'uses' => 'Admin\V1\ContentManagement\Categories\AddController@execute',
                'as' => 'admin.v1.content-management.categories.add-controller.execute'
            ]);

            // Страница редактирования категории
            Route::match(['get', 'post'], '/{category_id}/edit', [
                'uses' => 'Admin\V1\ContentManagement\Categories\EditController@execute',
                'as' => 'admin.v1.content-management.сategories.edit-controller.execute'
            ])
                ->where([
                    'category_id' => '[0-9]+'
                ]);

            // Страница удаления категории
            Route::match(['get', 'post'], '/{category_id}/delete', [
                'uses' => 'Admin\V1\ContentManagement\Categories\DeleteController@execute',
                'as' => 'admin.v1.content-management.categories.delete-controller.execute'
            ])
                ->where([
                    'category_id' => '[0-9]+'
                ]);
        });


        // Страница списка подкатегорий
        Route::get('/sub-categories', [
            'uses' => 'Admin\V1\ContentManagement\SubCategories\IndexController@execute',
            'as' => 'admin.v1.content-management.sub-categories.index-controller.execute'
        ])
            ->middleware([
                'sanitaze.limit-offset'
            ]);

        Route::group(['prefix' => 'sub-category'], function () {
            // Страница добавления подкатегории
            Route::match(['get', 'post'], '/add', [
                'uses' => 'Admin\V1\ContentManagement\SubCategories\AddController@execute',
                'as' => 'admin.v1.content-management.sub-categories.add-controller.execute'
            ]);

            // Страница редактирования подкатегории
            Route::match(['get', 'post'], '/{sub_category_id}/edit', [
                'uses' => 'Admin\V1\ContentManagement\SubCategories\EditController@execute',
                'as' => 'admin.v1.content-management.sub-сategories.edit-controller.execute'
            ])
                ->where([
                    'sub_category_id' => '[0-9]+'
                ]);

            // Страница удаления категории
            Route::match(['get', 'post'], '/{sub_category_id}/delete', [
                'uses' => 'Admin\V1\ContentManagement\SubCategories\DeleteController@execute',
                'as' => 'admin.v1.content-management.sub-categories.delete-controller.execute'
            ])
                ->where([
                    'sub_category_id' => '[0-9]+'
                ]);
        });


        // Страница списка статей
        Route::get('/articles', [
            'uses' => 'Admin\V1\ContentManagement\Articles\IndexController@execute',
            'as' => 'admin.v1.content-management.articles.index-controller.execute'
        ])
            ->middleware([
                'sanitaze.limit-offset'
            ]);

        Route::group(['prefix' => 'article'], function () {
            // Страница добавления статьи
            Route::match(['get', 'post'], '/add', [
                'uses' => 'Admin\V1\ContentManagement\Articles\AddController@execute',
                'as' => 'admin.v1.content-management.articles.add-controller.execute'
            ]);

            // Страница редактирования сатьи
            Route::match(['get', 'post'], '/{article_id}/edit', [
                'uses' => 'Admin\V1\ContentManagement\Articles\EditController@execute',
                'as' => 'admin.v1.content-management.articles.edit-controller.execute'
            ])
                ->where([
                    'article_id' => '[0-9]+'
                ]);

            // Страница удаления статьи
            Route::match(['get', 'post'], '/{article_id}/delete', [
                'uses' => 'Admin\V1\ContentManagement\Articles\DeleteController@execute',
                'as' => 'admin.v1.content-management.articles.delete-controller.execute'
            ])
                ->where([
                    'article_id' => '[0-9]+'
                ]);
        });

        // Страница спиcка фотографий
        Route::get('/photos', [
            'uses' => 'Admin\V1\ContentManagement\Photos\IndexController@execute',
            'as' => 'admin.v1.content-management.photos.index-controller.execute',
        ])
            ->middleware([
                'sanitaze.limit-offset'
            ]);

        Route::group(['prefix' => 'photo'], function () {
            // Страница добавления фотографии
            Route::match(['get', 'post'], '/add', [
                'uses' => 'Admin\V1\ContentManagement\Photos\AddController@execute',
                'as' => 'admin.v1.content-management.photos.add-controller.execute'
            ]);

            // Страница редактирования фотографии
            Route::match(['get', 'post'], '/{photo_id}/edit', [
                'uses' => 'Admin\V1\ContentManagement\Photos\EditController@execute',
                'as' => 'admin.v1.content-management.photos.edit-controller-controller.execute'
            ])
                ->where([
                    'photo_id' => '[0-9]+'
                ]);

            // Страница удаления фотографии
            Route::match(['get', 'post'], '/{photo_id}/delete', [
                'uses' => 'Admin\V1\ContentManagement\Photos\DeleteController@execute',
                'as' => 'admin.v1.content-management.photos.delete-controller.execute'
            ])
                ->where([
                    'photo_id' => '[0-9]+'
                ]);
        });


        // Получение категорий по рубрике
        // Получение подктегорий по рубрике
        // Получение подкатегорий по категории

    });
});
