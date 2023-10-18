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
                <form action="<?= base_url(); ?>super_admin/update_package" method="post" enctype="multipart/form-data">
				<input type="hidden" name="email_list_database_id" value="<?= $page_data !== null ? $page_data->email_list_database_id  : 'No Data'; ?>">
					<div class="form-body mt-4">
                        <div class="row border border-1">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Package Name<label class="text-danger"> *</label></label>
                                    <input type="text" value="<?= isset($page_data) ? $page_data->package_name : ''; ?>" id="package_name" name="package_name" class="form-control" placeholder="Package Name">
                                </div>
                            </div>

							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Job Function URI <label class="text-danger"> *</label></label>
									<select class="form-select" aria-label="Default select example" name="job_function_uri" id="job_function_uri" required="">
										<option value="">--Select--</option>
										<?php 
											$datax = $this->db->get('job_function_uri')->result();
											foreach ($datax as $row) : 
										?>
										<option value="<?=$row->job_function_uri?>" <?= isset($page_data) && $page_data->job_function_uri == $row->job_function_uri ? 'selected' : ''; ?>><?=$row->job_function?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>

							<div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Price</label>
									<input  type="number"  value="<?= isset($page_data) ? $page_data->email_list_database_price : ''; ?>" name="email_list_database_price" id="email_list_database_price" placeholder="510"  class="form-control" requred>
                                </div>
                            </div>

							<div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Quantity of Emails </label>
									<input  type="text" value="<?= isset($page_data) ? $page_data->number_of_leads : ''; ?>" name="number_of_leads"  id="number_of_leads" placeholder="50000" class="form-control" >
                                </div>
                            </div>

							<div class="col-md-4">
								<div class="mb-3">
									<label class="form-label"> Status <label class="text-danger"> *</label></label>
									<select class="form-select" aria-label="Default select example" name="status" id="status" required="">
										<option value="">--Select--</option>
										<option value="published" <?= $page_data->status == 'published' ? 'selected' : ''; ?>>Published</option>
										<option value="unpublished" <?=$page_data->status == 'unpublished' ? 'selected' : ''; ?>>Unublished</option>
									</select>
								</div>
							</div>

							
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">File Link<label class="text-danger"> *</label></label>
                                    <input type="text" value="<?= isset($page_data) ? $page_data->file_download_link : ''; ?>" id="file_download_link" name="file_download_link" class="form-control" placeholder="file_download_link">
                                </div>
                            </div>

							<div class="col-md-12">
                                <div class="mb-3" style="text-align: center;">
                                    <label  class="form-label">Click Below</label>
                                    <input type="submit" id="submitData" class="form-control btn btn-primary" value="Update">
                                </div>
                            </div>
                        </div><!--end row-->
                    </div>
                </form>

            </div>
        </div>










