<?php $__env->startSection('content'); ?>
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg"
            style="background-image: url(<?php echo e(asset('public/frontend/assets/images/backgrounds/page-header-bg.jpg')); ?>)">
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
                <h2>Blog </h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li><span>-</span></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Blog Page Start -->

    <section class="blog-page">
        <div class="container">
            <div class="row">
                <!-- Blog Post 1 -->
                <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-page__single">
                            <div class="blog-page__img-box">
                                <div class="blog-page__img">
                                    <img src="<?php echo e(asset('public/' . $blogs->banner)); ?>" class="img-fluid" alt="">
                                </div>
                                <div class="blog-page__date">
                                    <p>20 <br> June</p>
                                </div>
                            </div>
                            <div class="blog-page__content">
                                <ul class="list-unstyled blog-page__meta">
                                    <li><a href="<?php echo e(route('blog-details', ['slug' => $blogs->slug])); ?>">
                                            <i class="far fa-user-circle"></i>Paul Smith</a></li>
                                    <li><a href="<?php echo e(route('blog-details', ['slug' => $blogs->slug])); ?>">
                                            <i class="far fa-comments"></i>0 Comment</a></li>
                                    <li><a href="<?php echo e(route('blog-details', ['slug' => $blogs->slug])); ?>">
                                            <i class="far fa-heart"></i>0 Like</a></li>
                                </ul>
                                <h3 class="blog-page__title">
                                    <a href="<?php echo e(route('blog-details', ['slug' => $blogs->slug])); ?>">
                                        <?php echo e($blogs->title); ?>

                                    </a>
                                </h3>
                                <p class="blog-page__text-1"><?php echo e(Str::limit($blogs->short_description, 40)); ?></p>
                                <a href="<?php echo e(route('blog-details', ['slug' => $blogs->slug])); ?>"
                                    class="blog-page__read-more">
                                    Read more <span class="icon-right-arrow1"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
            </div>
        </div>
    </section>

    <!--Blog Page End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\digital_marketing_4website_from_anumam_with_backend\resources\views/frontend/blog.blade.php ENDPATH**/ ?>