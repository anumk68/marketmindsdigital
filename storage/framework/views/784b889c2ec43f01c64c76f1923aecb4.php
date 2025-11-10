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
                    <form id="add_form" class="form-horizontal" action="<?php echo e(route('pages.create.post')); ?>"
                        enctype="multipart/form-data" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row mb-4">
                            <label class="col-md-6 col-form-label">
                                Page
                                <span class="text-danger">*</span> (Page name = Route url <strong>OR</strong> Page name =
                                sitename.com/<strong>page-name</strong>)
                            </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="Page Name" id="page" name="page" class="form-control"
                                    required>
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

<?php echo $__env->make('admin.includes.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\marktingminds7novserver\resources\views/admin/settings/pages/create.blade.php ENDPATH**/ ?>