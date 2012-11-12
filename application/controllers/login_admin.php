<?php
if (!defined('BASEPATH'))
    exit('Script ini tidak diizinkan');

/**
 * Description of login_admin
 *
 * @author Nurul Huda Mustaqim -- Trenggalek
 */
class login_admin extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
    function index(){
        $this->load->view("templates/admin/login_admin");
    }

}