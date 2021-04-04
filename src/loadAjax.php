<?php

use Frast\AjaxLoader;
use App\Ajax\MyAction;

(new AjaxLoader())
    ->register(MyAction::class)
    ->load();