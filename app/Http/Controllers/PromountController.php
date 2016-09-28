<?php

namespace App\Http\Controllers;

use View;

class PromountController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Blankon Controller
      |--------------------------------------------------------------------------
      |
     */

    // url for asset outside folder laravel
    public $assetUrl;
    // global css
    public $css = [];
    // global js
    public $js = [];
    // body class	
    public $bodyClass = "page-session page-sound page-header-fixed page-sidebar-fixed";
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

        $this->setApp();
    }

    /**
     * initialize blankon
     */
    public function setApp() {
        
        $this->assetUrl = config('constant.assetUrl');

        // set global mandatory css
        $this->css = [
            'globals' => ['global/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css']
        ];

        $this->js = [
            'cores' => $this->getCoresJs(),
            'ies' => $this->getIesJs()
        ];

        // pass variable to view
        View::share('assetUrl', $this->assetUrl);
        View::share('title', 'Promount');
        View::share('bodyClass', $this->bodyClass);
        View::share('css', $this->css);
        View::share('js', $this->js);
    }

    /**
     * get js core scripts
     * @return array blankon's core javascript plugins 
     */
    private function getCoresJs() {
        return [
            'global/plugins/bower_components/jquery/dist/jquery.min.js',
            'global/plugins/bower_components/jquery-easing-original/jquery.easing.1.3.min.js',
            'global/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js',
            'global/plugins/bower_components/retina.js/dist/retina.min.js'
        ];
    }

    /**
     * get Internet Explorer plugin
     * @return array javascript plugins for IE
     */
    private function getIesJs() {
        return [
            'global/plugins/bower_components/html5shiv/dist/html5shiv.min.js',
            'global/plugins/bower_components/respond-minmax/dest/respond.min.js'
        ];
    }

}
