<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title> <meta charset="utf-8"/>
        <?php
        echo link_tag('asset/templates/user/css/reset.css');
        echo link_tag('asset/templates/user/css/layout.css');
        echo link_tag('asset/templates/user/css/style.css');
        ?>

        <script type="text/javascript" src="<?php echo site_url('asset/templates/user/js/jquery-1.6.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo site_url('asset/templates/user/js/cufon-yui.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo site_url('asset/templates/user/js/cufon-replace.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo site_url('asset/templates/user/js/Swis721_Cn_BT_400.font.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo site_url('asset/templates/user/js/Swis721_Cn_BT_700.font.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo site_url('asset/templates/user/js/jquery.easing.1.3.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo site_url('asset/templates/user/js/tms-0.3.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo site_url('asset/templates/user/js/tms_presets.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo site_url('asset/templates/user/js/jcarousellite.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo site_url('asset/templates/user/js/script.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo site_url('asset/templates/user/js/tabs.js'); ?>"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#menu a").click(function(){
                    $(this).parent().addClass('active').siblings().removeClass('active');
                })
                
            })
        </script>
    </head>

    <body id="<?php echo isset($slider) ? "page1" : "page2"; ?>">
        <div class="body1">
            <div class="body2">
                <div class="main">
                    <!-- header -->
                    <header>
                        <div class="wrapper">
                            <?php include "user/menu.php";?>
                        </div>
                        <?php
                        if (isset($slider)) {
                            include $slider;
                        }
                        ?>
                    </header>
                    <!-- header end-->
                </div>
            </div>
        </div>
        <div class="body3">
            <div class="main">
                <!-- content -->
                <article id="content">
                    <?php $this->load->view($content); ?>
                </article>
            </div>
        </div>
        <div class="body4">
            <div class="main">
                <?php include "user/footer.php"; ?>
                <!-- content end -->
            </div>
        </div>
        <script type="text/javascript"> Cufon.now(); </script>
    </body>
</html>