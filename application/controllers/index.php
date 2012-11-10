<?php

if (!defined('BASEPATH'))
    exit('Script ini tidak diizinkan');

/**
 * Description of index
 *
 * @author Nurul Huda Mustaqim -- Trenggalek
 */
class Index extends CI_Controller {

    function __construct() {
        parent::__construct();
        global $template;
        $template = "user";
    }

    function index() {
        $data = array(
            'slider' => 'user/slider.php'
        );
        show("home", $data);
    }

    function news() {
        show("news");
    }

    function services() {
        show("services");
    }

    function product() {
        show("product");
    }
    function contact() {
        show("contact");
    }

}