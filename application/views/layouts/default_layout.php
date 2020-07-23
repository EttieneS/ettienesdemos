<!DOCTYPE html>
<html lang="en">
<head>
	<title>Planes management - <?php echo $title;?></title>
	<meta name="description" content="overview &amp; stats" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>../../assets/vendor/fontawesome-free/css/fontawesome.min.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>../../assets/css/sb-admin-2.min.css" class="theme-stylesheet" id="theme-style" />
  <!-- <link rel="stylesheet" href="<?php //echo base_url();?>assets/css/theme.min.css" class="theme-stylesheet" id="theme-style" /> -->
	<!-- <link rel="stylesheet" href="<?php //echo base_url();?>assets/fonts/fonts.googleapis.com.css" /> -->
	<!-- page specific plugin styles -->
</head>

<body class="no-skin">
<div id="navbar" class="navbar navbar-default">
</div>

<div class="page-content">
  <div class="row">
  	<div class="col-xs-12">
  					<!-- PAGE CONTENT BEGINS -->
  									<?php echo $contents;?>
  					<!-- PAGE CONTENT ENDS -->
  	</div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->

<div class="footer">
  <div class="footer-inner">
      <div class="footer-content">
        <span class="bigger-120">
	         Copyright © ettienes. All rights reserved.
        </span>
      </div>
    </div>
</div>

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div><!-- /.main-container -->

<!-- basic scripts -->
<script type="text/javascript" src="<?php echo base_url();?>../../assets/vendor/bootstrap/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>../../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>../../assets/js/theme.min.js"></script>
</body>
</html>
