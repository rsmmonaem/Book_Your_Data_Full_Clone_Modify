<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Email</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><?=$title?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title"><?=$title?></h5>
                <hr/>
                <form id="dataForm">
                    <div class="form-body mt-4">
                        <div class="row border border-1">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Page Permalink<label class="text-danger"> *</label></label>
                                    <input type="text" id="page_permalink" name="page_permalink" class="form-control" placeholder="page_permalink">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Page Meta Title </label>
                                    <input type="text" class="form-control"  placeholder="Title" id="page_meta_title" name="page_meta_title">
                                </div>
                            </div>

							<div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Page Meta Keyword </label>
									<textarea  type="text" name="page_meta_keyword" id="page_meta_keyword" class="form-control" cols="30" rows="5"></textarea requred>
                                </div>
                            </div>

							<div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Page Meta Desc </label>
									<textarea  type="text" name="page_meta_desc" id="page_meta_desc" class="form-control" cols="30" rows="5"></textarea requred>
                                </div>
                            </div>

							<div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Page Html </label>
									<textarea  type="text" name="html" id="html" class="form-control" cols="30" rows="5"></textarea requred>
                                </div>
                            </div>

							<div class="col-md-12">
                                <div class="mb-3" style="text-align: center;">
                                    <label  class="form-label">Click Below</label>
                                    <input type="button" id="submitData" class="form-control btn btn-primary" value="Submit">
                                </div>
                            </div>
                        </div><!--end row-->
                    </div>
                </form>

            </div>
        </div>
<script>
    $(document).ready(function() {
        $('#submitData').click(function() {
            $.ajax({
                url: '<?php echo base_url('super_admin/save_page_for_seo'); ?>',
                type: 'POST',
                data: $('#dataForm').serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.message) {
                        // Display a success notification using iziToast
                        iziToast.success({
                            title: 'Success',
                            message: response.message,
                            position: 'topRight'
                        });
                    } else {
                        $('#result').html('An error occurred.');
                    }
                },
                error: function() {
                    // Display an error notification using iziToast
                    iziToast.error({
                        title: 'Error',
                        message: 'An error occurred.',
                        position: 'topRight'
                    });
                }
            });
        });
    });
</script>





