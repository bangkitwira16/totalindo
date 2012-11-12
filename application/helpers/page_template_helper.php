<?php

if (!function_exists('show')) {

    function show($view, $data=null) {
        global $template;
        $ci = &get_instance();
        $a = $template === "admin"?"admin":$template === "login"?"login":"user";
        $data['content'] = $a."/".$view;
        $ci->load->view("templates/".$template, $data);
    }

}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
