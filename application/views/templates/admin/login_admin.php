<!--
 *  DILARANG MENGUBAH ATAU MENGHAPUS HAK CIPTA INI.
 * 
 *  Hak Cipta 2012 Totalindo Rekayasa Telematika.
 * 
 *  Semua isi dalam file ini adalah hak milik dari PT.Totalindo Rekayasa Telematika.
 *  Anda tak diperkenankan untuk menggunakan file atau mengubah file ini
 *  kecuali Anda tidak menghapus atau merubah hak cipta ini.
 * 
 *  Pemilik tidak bertanggung jawab jika Anda menyalah gunakan file ini
 *  dan Pemilik TIDAK MENJAMIN apapun atas file ini.
 * 
 *  Anda bisa menghubungi pemilik hak cipta ini di : 
 *
 *  Head Office Menara Karya Lt 19, 
 *  Jln HR Rasuna Said Blok X-5 kav 1-2 Jakarta 12950.
 *  ph. +6221 5794 4518 - Fax. +6221 57944519
 *  email : info@totalindo.co.id
 *  website : http://wwww.totalindo.co.id
--><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sign in &middot; Twitter Bootstrap</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <?php
        echo link_tag('asset/templates/admin/css/bootstrap.css');
        echo link_tag('asset/templates/admin/css/bootstrap-responsive.css');
        ?>
        <style type="text/css">
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #f5f5f5;
            }

            .form-signin {
                max-width: 300px;
                padding: 19px 29px 29px;
                margin: 0 auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .form-signin input[type="text"],
            .form-signin input[type="password"] {
                font-size: 16px;
                height: auto;
                margin-bottom: 15px;
                padding: 7px 9px;
            }

        </style>

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>/asset/templates/admin/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>/asset/templates/admin/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>/asset/templates/admin/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>/asset/templates/admin/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>/asset/templates/admin/ico/apple-touch-icon-57-precomposed.png">
    </head>

    <body>

        <div class="container">

            <form class="form-signin">
                <h2 class="form-signin-heading">Please sign in</h2>
                <input type="text" class="input-block-level" placeholder="Email address">
                <input type="password" class="input-block-level" placeholder="Password">
                <label class="checkbox">
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
                <button class="btn btn-large btn-primary" type="submit">Sign in</button>
            </form>

        </div> <!-- /container -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="<?php echo base_url('asset/templates/admin/js/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('asset/templates/admin/js/bootstrap-transition.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('asset/templates/admin/js/bootstrap-alert.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('asset/templates/admin/js/bootstrap-modal.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('asset/templates/admin/js/bootstrap-dropdown.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('asset/templates/admin/js/bootstrap-scrollspy.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('asset/templates/admin/js/bootstrap-tab.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('asset/templates/admin/js/bootstrap-tooltip.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('asset/templates/admin/js/bootstrap-popover.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('asset/templates/admin/js/bootstrap-button.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('asset/templates/admin/js/bootstrap-carousel.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('asset/templates/admin/js/bootstrap-typeahead.js'); ?>"></script>



    </body>
</html>
