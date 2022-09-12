<?php

use Illuminate\Support\Facades\Route;

Route::get('cron/mlm/ranks', 'CronController@mlmRanks')->name('mlm.ranks');
