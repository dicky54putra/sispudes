<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('meta') ?>
</head>
<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">
	  <header class="main-header">
	    <?php $this->load->view('navbar') ?>
	  </header>
	  <div class="content-wrapper">
	    <div class="container">
	      <?php $this->load->view('content_slider') ?>
	      <section class="content-header">
	        <h1>
	          Top Navigation
	          <small>Example 2.0</small>
	        </h1>
	        <ol class="breadcrumb">
	          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	          <li><a href="#">Layout</a></li>
	          <li class="active">Top Navigation</li>
	        </ol>
	      </section>
	      <section class="content">
	      	<div class="row">
	      		<div class="col-md-3">
	      			<div class="box box-primary">
		            <div class="box-header with-border">
		              <h3 class="box-title">Recently Added Products</h3>

		              <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		              </div>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		              <ul class="products-list product-list-in-box">
		                <li class="item">
		                  <div class="product-img">
		                    <img src="<?php echo image_module();?>" alt="Product Image">
		                  </div>
		                  <div class="product-info">
		                    <a href="javascript:void(0)" class="product-title">Samsung TV
		                      <span class="label label-warning pull-right">$1800</span></a>
		                    	<span class="product-description">
	                          Samsung 32" 1080p 60Hz LED Smart HDTV.
		                      </span>
		                  </div>
		                </li>
		                <!-- /.item -->
		                <li class="item">
		                  <div class="product-img">
		                    <img src="<?php echo image_module();?>" alt="Product Image">
		                  </div>
		                  <div class="product-info">
		                    <a href="javascript:void(0)" class="product-title">Bicycle
		                      <span class="label label-info pull-right">$700</span></a>
		                    <span class="product-description">
		                          26" Mongoose Dolomite Men's 7-speed, Navy Blue.
		                        </span>
		                  </div>
		                </li>
		                <!-- /.item -->
		                <li class="item">
		                  <div class="product-img">
		                    <img src="<?php echo image_module();?>" alt="Product Image">
		                  </div>
		                  <div class="product-info">
		                    <a href="javascript:void(0)" class="product-title">Xbox One <span
		                        class="label label-danger pull-right">$350</span></a>
		                    <span class="product-description">
		                          Xbox One Console Bundle with Halo Master Chief Collection.
		                        </span>
		                  </div>
		                </li>
		                <!-- /.item -->
		                <li class="item">
		                  <div class="product-img">
		                    <img src="<?php echo image_module();?>" alt="Product Image">
		                  </div>
		                  <div class="product-info">
		                    <a href="javascript:void(0)" class="product-title">PlayStation 4
		                      <span class="label label-success pull-right">$399</span></a>
		                    <span class="product-description">
		                          PlayStation 4 500GB Console (PS4)
		                        </span>
		                  </div>
		                </li>
		                <!-- /.item -->
		              </ul>
		            </div>
		            <!-- /.box-body -->
		            <div class="box-footer text-center">
		              <a href="javascript:void(0)" class="uppercase">View All Products</a>
		            </div>
		            <!-- /.box-footer -->
		          </div>
		          <div class="box box-danger">
		            <div class="box-header with-border">
		              <h3 class="box-title">Temukan Produk</h3>

		              <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		              </div>
		            </div>
		            <div class="box-body">
		              <ul class="products-list product-list-in-box">
		                <li class="item">
		                  <div class="product-img" style="width: 100%;text-align: center;">
		                    <a href="javascript:void(0)" class="product-title">lelang
		                    </a>
	                    	<span class="product-description">
                          Kumpulan Produk dicari
	                      </span>
		                  </div>
		                </li>
		                <li class="item">
											<div class="product-img" style="width: 100%;text-align: center;">
		                    <a href="javascript:void(0)" class="product-title">dijual
		                    </a>
	                    	<span class="product-description">
                          Kumpulan Produk dicari
	                      </span>
		                  </div>
		                </li>
		                <li class="item">
		                  <div class="product-img" style="width: 100%;text-align: center;">
		                    <a href="javascript:void(0)" class="product-title">dicari
		                    </a>
	                    	<span class="product-description">
                          Kumpulan Produk dicari
	                      </span>
		                  </div>
		                </li>
		              </ul>
		            </div>
		          </div>
	      		</div>
	      		<div class="col-md-9">
	      			<div class="box box-warning">
		            <div class="box-header with-border">
		              <h3 class="box-title">Produk Terbaru</h3>

		              <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		              </div>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
			      			<div class="timeline-item">
		                <div class="timeline-body" style="text-align: center;">
		                	<?php for ($i=0; $i < 20; $i++) {
		                		?>
		                		<div class="col-md-3">
				                	<div class="panel panel-default">
				                		<div class="panel-body" style="padding: 0;">
				                			<img src="<?php echo image_module() ?>" alt="" class="margin" width="150">
				                			<span class="label pull-right bg-blue">dijual</span>
				                			<hr>
				                			<span class="product-description">
		                          	PlayStation 4 500GB Console (PS4)
		                        	</span>
				                		</div>
				                	</div>
		                		</div>
			                	<?php
		                	} ?>
		                </div>
		              </div>
		            </div>
		          </div>
	      		</div>
	      	</div>
	      </section>
	    </div>
	  </div>
	  <footer class="main-footer">
	    <div class="container">
	      <div class="pull-right hidden-xs">
	        <b>Version</b> 2.4.0
	      </div>
	      <strong>Copyright &copy; <?php echo $site['year'] ?>-<?php echo date('Y') ?> <a href="<?php echo $site['link'] ?>"><?php echo $site['title'] ?></a>.</strong> All rights
	      reserved.
	    </div>
	  </footer>
	</div>
	<?php $this->load->view('js') ?>
	<?php $this->load->view('script') ?>
</body>
</html>
