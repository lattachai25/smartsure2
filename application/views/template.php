<!DOCTYPE html>
<html lang="en">
<head>
			<?php 	
			$this->db->select  ("*");
			$this->db->from ("tag_meta");
			$query = $this->db->get();
			$products=$query->row();
			?>
			
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-176316280-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-176316280-1');
    </script>
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>/favicon-32x32.png">
	<meta name="description" content="<?php echo $products->description?>">
	<meta name="keywords" content="<?php echo $products->keywords?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo  $title; ?></title>


    <meta property="og:description" content="<?php echo (isset($description) ? $description : "")  ?>" />
    <meta property="og:title" content="<?php echo (isset($title) ? $title : "")  ?>" />
    <meta property="og:url" content="<?php echo $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]?>" />

    <!-- <meta property="og:type"content="article" /> -->
    <!-- <meta property="og:locale"content="pt-br" />
    <meta property="og:locale:alternate"content="pt-pt" />
    <meta property="og:locale:alternate"content="en-us" /> -->
    <meta property="og:site_name" content="smartsure" />
    <!-- <meta property="og:image"content="http://image.url.com/cover.jpg" />
    <meta property="og:image"content="http://image.url.com/img1.jpg" />
    <meta property="og:image"content="http://image.url.com/img2.jpg" />
    <meta property="og:image"content="http://image.url.com/img3.jpg" /> -->
    <meta property="og:image:url" content="http://smartsure.co.th/assets/images/LOGO2.png" />
    <meta property="og:image:size" content="300" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?php echo (isset($title) ? $title : "")  ?>" />
    <!-- <meta name="twitter:site"content="@LuizVinicius73" /> -->



	
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/smartsure-style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>font/stylesheet.css">
<body>
    <div class="container">
        <?php $this->load->view('Menu2'); ?>
        <div id="content">
            <?php $this->load->view($content); ?>
        </div>
        <?php $this->load->view('footer'); ?>
    </div>

</body>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</html>