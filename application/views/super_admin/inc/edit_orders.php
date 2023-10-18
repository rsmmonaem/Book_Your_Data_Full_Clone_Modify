<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3"><?= $title ?></div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">All <?= $title ?></li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="<?= base_url() ?>super_admin/job_function_list_content" type="button" class="btn btn-primary"><i class="bx bx-plus-circle"></i>Job Function List</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title"><?= $title ?></h5>
                <hr />
                <form action="<?= base_url(); ?>super_admin/update_job_function" method="post" enctype="multipart/form-data">
                    <div class="form-body mt-4">
                        <div class="row border border-1">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Order Id<label class="text-danger"> *</label></label>
                                    <input type="hidden" name="o_id" value="<?= $page_data !== null ? $page_data->o_id : 'No Data'; ?>">
                                    <input type="number" id="order_id" value="<?= $page_data !== null ? $page_data->order_id : ''; ?>" name="order_id" class="form-control" placeholder="Example: Medical Officer, CEO" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">package_id <label class="text-danger"> *</label></label>
                                    <input type="text" class="form-control" placeholder="package_id" id="package_id" value="<?= $page_data !== null ? $page_data->package_id : 'No Data'; ?>" name="package_id" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Job Function Short Description <label class="text-danger"> *</label></label>
                                    <textarea type="text" name="job_function_desc" id="job_function_desc" class="form-control" cols="30" rows="5" required><?= $page_data !== null ? $page_data->job_function_desc : 'No Data'; ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Job Function Details <label class="text-danger"> *</label></label>
                                    <textarea type="text" name="job_function_details" id="job_function_details" class="form-control" cols="30" rows="5" required><?= $page_data !== null ? $page_data->job_function_details : 'No Data'; ?></textarea>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Job Function Image <label class="text-danger"> *</label></label>
                                    <input type="file" name="job_function_img" id="job_function_img" class="form-control" required>
                                </div>
                            </div> -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Type <label class="text-danger"> *</label></label>
                                    <select class="form-select" name="type" id="type" aria-label="Default select example" required="">
                                        <option value="">--Select--</option>
                                        <?php 
                                        $data = $this->db->get('type')->result();
                                        foreach ($data as $row) : ?>
                                            <option value="<?= $row->type ?>" <?php if($page_data !== null && $row->type === $page_data->type) { echo 'selected'; } ?>><?= $row->type_h1 ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Price <label class="text-danger"> *</label></label>
                                    <input type="number" name="job_function_price" id="job_function_price" class="form-control" required value="<?= $page_data !== null ? $page_data->job_function_price : 'No Data'; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Number Of Emails <label class="text-danger"> *</label></label>
                                    <input type="number" name="job_function_emails_numbers" id="job_function_emails_numbers" class="form-control" required value="<?= $page_data !== null ? $page_data->job_function_emails_numbers : 'No Data'; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Number Of Leads <label class="text-danger"> *</label></label>
                                    <input type="number" name="job_function_number_of_leads" id="job_function_number_of_leads" class="form-control" required value="<?= $page_data !== null ? $page_data->job_function_number_of_leads : 'No Data'; ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Click Below</label>
                                    <input type="submit" id="submitData" class="form-control btn btn-primary" value="Submit">
                                </div>
                            </div>
                        </div><!--end row-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
