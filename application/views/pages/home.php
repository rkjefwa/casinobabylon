<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $title;?>-CasinoBabylon</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php echo base_url('css/normalize.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('css/main.css');?>">

        <script src="<?php echo base_url('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js');?>"></script>
    </head>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
               <?php $this->load->view('templates/header'); ?>
            </header>
        </div>
        <div class="banner-top-with-image">
        	<!--<div class="search-within-banner-easycheck">
        		<?php $this->load->view('templates/search');?>
        	</div>-->
        </div>
        <div class="bottom-banner-menu">
        	<?php //$this->load->view('templates/menubottom'); ?>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <?php $this->load->view('templates/content');?>
                <?php $this->load->view('templates/rightaside');?>

            </div><!-- #main -->
        </div> 
        <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
            	<div class="footer-menu">
               <?php $this->load->view('templates/footer')?>
               </div>
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
