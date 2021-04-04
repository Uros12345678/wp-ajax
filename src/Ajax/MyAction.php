<?php

namespace App\Ajax;

use Frast\AjaxHandler;

class MyAction extends AjaxHandler {
    protected $dependencies = [
        'jquery'
    ];

    public function getAssetSrc(): string {
        return get_stylesheet_directory_uri() . '/js/MyAction.js';
    }

    public function treatment(): void {
        $username = $_POST['username'];

        wp_send_json([
            'message' => "Successful Ajax request for {$username} !",
        ], 200);
    }
}