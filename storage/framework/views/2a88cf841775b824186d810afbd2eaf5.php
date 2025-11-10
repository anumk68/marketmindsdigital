<?php $__env->startSection('content'); ?>
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(<?php echo e(asset('public/frontend/assets/images/backgrounds/page-header-bg.jpg')); ?>)">
        </div>
        <div class="page-header__shape-1"></div>
        <div class="page-header__shape-2 float-bob-y">
            <img src="<?php echo e(asset('public/frontend/assets/images/shapes/page-header-shape-2.png')); ?>" alt="">
        </div>
        <div class="page-header__shape-3 float-bob-x">
            <img src="<?php echo e(asset('public/frontend/assets/images/shapes/page-header-shape-3.png')); ?>" alt="">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Blog Details</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li><span>-</span></li>
                    <li>Blog Details</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--BLog Details Start-->
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="blog-details__left">
                        <div class="blog-details__img-box">
                            <div class="blog-details__img">
                                <img src="<?php echo e(asset('public/'. $blog->banner)); ?>" class="img-fluid" alt="">
                            </div>
                            <div class="blog-details__date">
                                  <p><?php echo e($blog->created_at->format('M d, Y')); ?></p>
                            </div>
                        </div>
                        <ul class="list-unstyled blog-details__meta">
                            <li><a href="#"><i class="fas fa-user-circle"></i> Jhon Albert</a>
                            </li>
                            <li><a href="#"><i class="fas fa-comments"></i> 0 Comment</a>
                            </li>
                            <li><a href="#"><i class="fas fa-heart"></i> 0 Like</a>
                            </li>
                        </ul>
                        <p class="blog-details__text-1"><?php echo $blog->description; ?></p>




                    </div>
                </div>
            </div>
        </div>


    </section>
    <!--BLog Details End-->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\marketingmindsdigital\MarketingMindsDigital.com\smartwebelevate.com\resources\views/frontend/blog-details.blade.php ENDPATH**/ ?>