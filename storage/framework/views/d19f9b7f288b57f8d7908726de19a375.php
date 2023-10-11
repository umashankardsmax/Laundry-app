<?php $__env->startSection('main-container'); ?>
<style>
    .notification{
        height: 20px;
        align-items: center;
        display: flex;
        justify-content: center;
        width: 20px;
        border-radius: 10px;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
    }
    .banner-content h2{
        font-size:30px;
        font-weight: bold;
    }
    .banner-content span{
        font-size:15px;
    }
    .custom{
        margin-bottom: 30px;

    }
    .categories{
        height: 100%;
        border-radius: 10px;
        background: #E7F6FF;
    }
    .category-icon{
        height: 60%;
    }
    .categories h3{
        color: #000;
        text-align: center;
        font-family: Inter;
        font-size: 10px;
        font-style: normal;
        font-weight: 600;
        line-height: 20px; /* 200% */
        letter-spacing: 0.1px;
    }
    .post{
        margin: 4%;
    }
    .shop-card{
        flex-shrink: 0;
        border-radius: 10px;
        background: #51A7D9;
        color: white;
        position: relative;
        justify-content: center;
        text-align: center;
        align-items: center;
    }
    .offer{
        color: #FFF;
        text-align: center;
        font-family: Inter;
        font-size: 32px;
        font-style: normal;
        font-weight: 700;
        line-height: 20px; /* 62.5% */
        letter-spacing: 0.1px;
    }
    .off{
        color: #FFF;
        text-align: center;
        font-family: Inter;
        font-size: 15px;
        font-style: normal;
        font-weight: 500;
        line-height: 20px; /* 133.333% */
        letter-spacing: 0.1px;
    }
    .code{
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
        width: 100px;
        height: 20px;
        border-radius: 5px;
        background-color: white;
    }
    .left{
        position: relative;
        text-align: center;
        justify-content: center;
        align-items: center;
    }
    .process h3{
        color: #595959;
        font-size: 12px;
        width: 100%;
    }
    .post1{
        margin: 4%;
    }
</style>
	<!-- Page Content Start -->
	<div class="page-content space-top p-b80">
		<div  class="container p-0">

            <div style="margin-top: 10%" class="title-bar container mb-0 pb-0">
                <div class="banner-content">
                    <span  style="color: #51A7D9 ; ">Welcome back,</span>
                    <h2>Nareshkumar</h2>
                </div>
                <div class="notification">
                    <img src="<?php echo e(asset('frontend/images/bell.svg')); ?>">
                </div>
			</div>

				<div style="margin-top: 5%" class="container">
					<div class="row">
						<div class="col-4 m-b10 custom">
							<div class="categories">
								<a href="product-list.html" class="category-link">
									<div class="category-icon">
										<img style="width: 42px;
                                        height: 46px;
                                        flex-shrink: 0;" src="<?php echo e(asset('frontend/images/wm.svg')); ?>" alt="">
									</div>
									<h3 class="category-title">Wash & Iron</h3>
								</a>
							</div>
						</div>
						<div class="col-4 m-b10 custom">
							<div class="categories">
								<a href="product.html" class="category-link">
									<div class="category-icon">
										<img style="width: 34.233px;
                                        height: 45.833px;
                                        flex-shrink: 0;" src="<?php echo e(asset('frontend/images/Clothes.svg')); ?>" alt="">
									</div>
									<h3 class="category-title">Dry Cleaning</h3>
								</a>
							</div>
						</div>
						<div class="col-4 m-b10 custom">
							<div class="categories">
								<a href="product.html" class="category-link">
									<div class="category-icon">
										<img style="width: 52px;
                                        height: 29.486px;
                                        flex-shrink: 0;" src="<?php echo e(asset('frontend/images/Iron.svg')); ?>" alt="">
									</div>
									<h3 class="category-title">Ironing</h3>
								</a>
							</div>
						</div>
						<div class="col-4 m-b10 custom">
							<div class="categories">
								<a href="product.html" class="category-link">
									<div class="category-icon">
										<img style="width: 40.43px;
                                        height: 48.46px;
                                        flex-shrink: 0;" src="<?php echo e(asset('frontend/images/Carpet.svg')); ?>" alt="">
									</div>
									<h3 class="category-title">Carpet Wash</h3>
								</a>
							</div>
						</div>
						<div class="col-4 m-b10 custom">
							<div class="categories">
								<a href="product.html" class="category-link">
									<div class="category-icon">
										<img style="width: 44.692px;
                                        height: 41.834px;
                                        flex-shrink: 0;" src="<?php echo e(asset('frontend/images/bulk.svg')); ?>" alt="">
									</div>
									<h3 class="category-title">Bulky Items</h3>
								</a>
							</div>
						</div>
						<div class="col-4 m-b10 custom">
							<div class="categories">
								<a href="product.html" class="category-link">
									<div class="category-icon">
										<img style="width: 51.075px;
                                        height: 37.297px;
                                        flex-shrink: 0;" src="<?php echo e(asset('frontend/images/Bed.svg')); ?>" alt="">
									</div>
									<h3 class="category-title">Shoe Care</h3>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="row post">
					<div class="col-12 content">
						<div class="shop-card row">
							<div style="width:50%; color:white; text-align: center;" class=" col-6 left">
                                <h1 style="font-size: 32px; color:white;">20% <span style="font-size: 15px; color:white;">OFF</span></h1>
								<h6 style="color:white;">on your first order!</h6>
                                <div class="code">
                                    <h1 style="font-size: 10px; color:#80B9DA; margin-top: 10px;"><span style="font-size: 8px;">Use code:</span>FIRSTORDER</h1>
                                </div>
                            </div>
                            <div style="width:50%; align-items:center;" class=" col-6">
								<a href="product-detail.html">
									<img style="width: 148px;
                                    height: 137px;
                                    flex-shrink: 0;" src="<?php echo e(asset('frontend/images/wash.png')); ?>" alt="image">
								</a>
							</div>
						</div>
					</div>
                </div>

                <div style="margin-bottom: 50px" class="row post1">
					<div class="col-12 content">
						<div style="padding: 20px 0px; background: #FFCA42;" class="shop-card row">
                            <h1 style="color: #595959; font-size:17px; margin-bottom:10px;">HOW KRISH-V LAUNDRY APP WORKS</h1>
                            <div class="col-3 process">
                                <div class="category-icon">
                                    <img style="width: 34.233px;
                                    height: 40px;
                                    flex-shrink: 0;" src="<?php echo e(asset('frontend/images/order.png')); ?>" alt="">
                                </div>
                                <h3 class="category-title">Your order</h3>
                            </div>
                            <div class="col-3 process">
                                <div class="category-icon">
                                    <img style="width: 34.233px;
                                    height: 40px;
                                    flex-shrink: 0;" src="<?php echo e(asset('frontend/images/collect.png')); ?>" alt="">
                                </div>
                                <h3 class="category-title">We collect</h3>
                            </div>
                            <div class="col-3 process">
                                <div class="category-icon">
                                    <img style="width: 34.233px;
                                    height: 40px;
                                    flex-shrink: 0;" src="<?php echo e(asset('frontend/images/clean.png')); ?>" alt="">
                                </div>
                                <h3 class="category-title">We clean</h3>
                            </div>
                            <div class="col-3 process">
                                <div class="category-icon">
                                    <img style="width: 34.233px;
                                    height: 40px;
                                    flex-shrink: 0;" src="<?php echo e(asset('frontend/images/delivery.png')); ?>" alt="">
                                </div>
                                <h3 class="category-title">We deliver</h3>
                            </div>
						</div>
					</div>
                </div>

		</div>
	</div>
	<!-- Page Content End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Branding\laundry\resources\views/frontend/index.blade.php ENDPATH**/ ?>