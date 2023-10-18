<!-- application/views/edit_page.php -->

<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Edit Page</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Page</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit Page</h5>
                <hr/>
                <form action="<?= base_url();?>super_admin/update_page_for_seo" method="post" enctype="multipart/form-data">
                    <div class="form-body mt-4">
                        <input type="hidden" id="page_id" name="page_id" value="<?= $page_data !== null ? $page_data->pages_id : 'No Data';?>">
                        <div class="row border border-1">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Page Permalink<label class="text-danger"> *</label></label>
                                    <input type="text" id="page_permalink" name="page_permalink" class="form-control" placeholder="Page Permalink" value="<?= $page_data !== null ? $page_data->page_permalink : 'No Data';?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Page Meta Title</label>
                                    <input type="text" id="page_meta_title" name="page_meta_title" class="form-control" placeholder="Page Meta Title" value="<?= $page_data !== null ? $page_data->page_meta_title : 'No Data';?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Page Meta Keyword</label>
                                    <input type="text" id="page_meta_keyword" name="page_meta_keyword" class="form-control" placeholder="Page Meta Keyword" value="<?= $page_data !== null ? $page_data->page_meta_keyword : 'No Data';?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Page Meta Desc</label>
                                    <textarea id="page_meta_desc" name="page_meta_desc" class="form-control" rows="5" placeholder="Page Meta Description"><?= $page_data !== null ? $page_data->page_meta_desc : 'No Data';?></textarea>
                                </div>
                            </div>

							
							<div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Page Html </label>
									<textarea  type="text" name="html" id="html" class="form-control" cols="30" rows="5"><?= $page_data !== null ? $page_data->html : 'No Data';?></textarea requred>
                                </div>
                            </div>
                            <!-- Add more fields for editing other data here -->
                            <div class="col-md-12">
                                <div class="mb-3" style="text-align: center;">
                                    <label class="form-label">Click Below to Update</label>
                                    <input type="submit" id="updateData" class="form-control btn btn-primary" value="Update">
                                </div>
                            </div>
                        </div><!--end row-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
