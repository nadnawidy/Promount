<?php

namespace App\Http\Controllers;

use View;

class HomeController extends PromountController {
    /*
      |--------------------------------------------------------------------------
      | DashboardController
      |--------------------------------------------------------------------------
     */

    public function __construct() {
        
        parent::__construct();

        $this->setApp();

        // page level styles
        $this->css['pages'] = [
            'global/plugins/bower_components/fontawesome/css/font-awesome.min.css',
             'global/plugins/bower_components/animate.css/animate.min.css',
        'global/plugins/bower_components/spinkit/css/spinners/2-double-bounce.css',
        'global/plugins/bower_components/simple-line-icons/css/simple-line-icons.css',
        'commercial/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css',
        'commercial/plugins/slider-revolution/revolution/css/settings.css',
        'commercial/plugins/slider-revolution/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css',
        'commercial/plugins/slider-revolution/revolution/fonts/font-awesome/css/font-awesome.min.css',
        'commercial/plugins/slider-revolution/revolution/css/layers.css',
        'commercial/plugins/slider-revolution/revolution/css/navigation.css'
        ];

        // page level plugins
        $this->js['plugins'] = [];
    }

    /**
     * Show the application dashboard screen to the user.
     *
     * @return Response
     */
    public function index() {

        // theme styles
        $this->css['themes'] = [
            'banner/css/reset.css',
       'banner/css/section.css',
        'banner/css/component.css',
        'banner/css/plugin.css',
        'banner/css/theme.css',
        'banner/css/custom.css'
        ];

        // page level plugins
        $this->js['plugins'] = [
             'global/plugins/bower_components/wow/dist/wow.min.js',
        'commercial/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js',
       'commercial/plugins/slider-revolution/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>',
       'commercial/plugins/slider-revolution/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0',
        'commercial/plugins/slider-revolution/revolution/js/extensions/revolution.extension.migration.min.js',
        'commercial/plugins/slider-revolution/revolution/js/extensions/revolution.extension.video.min.js',
        'commercial/plugins/slider-revolution/revolution/js/extensions/revolution.extension.carousel.min.js',
        'commercial/plugins/slider-revolution/revolution/js/extensions/revolution.extension.actions.min.js',
        'commercial/plugins/slider-revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js',
        'commercial/plugins/slider-revolution/revolution/js/extensions/revolution.extension.navigation.min.js'
        ];
        
        // page level scripts
        $this->js['scripts'] = [
            'banner/js/main.js'
        ];

        // pass variable to view
        View::share('css', $this->css);
        View::share('js', $this->js);
        View::share('title', 'Promount: Deal and Discount for Everything');
        
        return view('home/index');
    }

    

}
