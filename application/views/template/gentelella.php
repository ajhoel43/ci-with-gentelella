<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo $title ?></title>

		<!-- Import CSS -->
		<link href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/google-code-prettify/bin/prettify.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/select2/dist/css/select2.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/switchery/dist/switchery.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/starrr/dist/starrr.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/jqvmap/dist/jqvmap.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet">
			<!-- Datatables -->
		<link href="<?php echo base_url('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') ?>" rel="stylesheet">
			<!-- Custom Theme Style -->
		<link href="<?php echo base_url('assets/css/custom.min.css') ?>" rel="stylesheet">
		<!-- /Import CSS -->
	</head>
	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
				<?php echo $sidenavs ?>
				<?php echo $navs ?>
				<!-- Page Content -->
				<div class="right_col" role="main">
					<div>
						<div class="page-title">
							<div class="title_left">
								<h3><?php echo $header ?></h3>
							</div>
							<div class="title_right">
								<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search for...">
										<span class="input-group-btn"><button class="btn btn-default" type="button">Go!</button></span>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<?php echo $content ?>
					</div>
				</div>
				<!-- /Page Content -->
				<!-- Footer Content -->
				<footer>
					<div class="pull-right">
						Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a> || <?php echo $footer; ?>
					</div>
			        <div class="clearfix"></div>
				</footer>
				<!-- /Footer Content -->
			</div>
		</div>

		<!-- Import Javascript -->
		<script src="<?php echo base_url('vendors/jquery/dist/jquery.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/fastclick/lib/fastclick.js') ?>"></script>
		<script src="<?php echo base_url('vendors/nprogress/nprogress.js') ?>"></script>
		<script src="<?php echo base_url('vendors/Chart.js/dist/Chart.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/gauge.js/dist/gauge.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/iCheck/icheck.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/skycons/skycons.js') ?>"></script>
			<!-- Flot -->
		<script src="<?php echo base_url('vendors/Flot/jquery.flot.js') ?>"></script>
		<script src="<?php echo base_url('vendors/Flot/jquery.flot.pie.js') ?>"></script>
		<script src="<?php echo base_url('vendors/Flot/jquery.flot.time.js') ?>"></script>
		<script src="<?php echo base_url('vendors/Flot/jquery.flot.stack.js') ?>"></script>
		<script src="<?php echo base_url('vendors/Flot/jquery.flot.resize.js') ?>"></script>
			<!-- Flot Plugins -->
		<script src="<?php echo base_url('vendors/flot.orderbars/js/jquery.flot.orderBars.js') ?>"></script>
		<script src="<?php echo base_url('vendors/flot-spline/js/jquery.flot.spline.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/flot.curvedlines/curvedLines.js') ?>"></script>
			<!-- JQVMap -->
		<script src="<?php echo base_url('vendors/jqvmap/dist/jquery.vmap.js') ?>"></script>
		<script src="<?php echo base_url('vendors/jqvmap/dist/maps/jquery.vmap.world.js') ?>"></script>
		<script src="<?php echo base_url('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') ?>"></script>

		<script src="<?php echo base_url('vendors/DateJS/build/date.js') ?>"></script>
			<!-- Bootstrap Date Range Picker -->
		<script src="<?php echo base_url('vendors/moment/min/moment.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>

		<script src="<?php echo base_url('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/jquery.hotkeys/jquery.hotkeys.js') ?>"></script>
		<script src="<?php echo base_url('vendors/google-code-prettify/src/prettify.js') ?>"></script>
		<script src="<?php echo base_url('vendors/jquery.tagsinput/src/jquery.tagsinput.js') ?>"></script>
		<script src="<?php echo base_url('vendors/switchery/dist/switchery.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/select2/dist/js/select2.full.min.js') ?>"></script>
		<!-- This is for Form Validation <script src="<?php echo base_url('vendors/parsleyjs/dist/parsley.min.js') ?>"></script> --> 
		<script src="<?php echo base_url('vendors/autosize/dist/autosize.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/starrr/dist/starrr.js') ?>"></script>
			<!-- Datatables -->
		<script src="<?php echo base_url('vendors/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.flash.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') ?>"></script>
		<script src="<?php echo base_url('vendors/datatables.net-scroller/js/dataTables.scroller.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/jszip/dist/jszip.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/pdfmake/build/pdfmake.min.js') ?>"></script>
		<script src="<?php echo base_url('vendors/pdfmake/build/vfs_fonts.js') ?>"></script>
			<!-- Custom JS -->
		<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
		<!-- /Import Javascript -->
	</body>
</html>