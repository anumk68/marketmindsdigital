<?php $__env->startSection('content'); ?>

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Pages</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item active" aria-current="page">New Page</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->

            <h6 class="mb-0 text-uppercase">Pages Create</h6>
            <hr />

            <div class="card">

                <div class="card-body">
                    <form id="add_form" class="form-horizontal" action="<?php echo e(route('meta.create.post')); ?>"
                        enctype="multipart/form-data" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row mb-4">
                            <label class="col-md-3 col-form-label">
                                Page
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <select id="page" name="page" class="form-control" required>
                                    <option value="" disabled selected>Select a Page</option>
                                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($page->page); ?>"><?php echo e($page->page); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-md-3 col-form-label">
                                Title
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="Title" id="page" name="title" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-md-3 col-form-label">
                                Description
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="Description" id="page" name="description"
                                    class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-md-3 col-form-label">
                                Keyword
                            </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="Keyword" id="page" name="keyword" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-md-3 col-form-label">
                                Faq Schema
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="faq_schema" id="page" name="faq_schema"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-md-3 col-form-label">
                                Extra Schema
                            </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="extra_schema" id="page" name="extra_schema"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="form-group mb-0 text-right">
                            <button type="submit" id="submit_button" class="btn btn-primary">
                                Save
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.includes.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\marktingminds7novserver\resources\views/admin/settings/meta/create.blade.php ENDPATH**/ ?>