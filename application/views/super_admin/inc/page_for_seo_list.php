<!-- Include necessary CSS and JS libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style>
    .card-body{
        text-align: center;
    }
</style>

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3"><?=$title?></div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">All <?=$title?></li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="<?= base_url()?>super_admin/add_page_for_seo" type="button" class="btn btn-primary"><i class="bx bx-plus-circle"></i> Add Page for SEO</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-header">
                <h4 class="mb-0 text-uppercase" id="seoTitle"> </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="seoTable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Page Permalink</th>
                                <th>Meta Title</th>
                                <th>Page Meta Desc</th>
                                <th>Meta Keyword</th>
                                <th>Create Date</th>
                                <th colspan='2'>Action</th>
                            </tr>
                        </thead>
                        <tbody id="seoTableBody">
                            <!-- Table rows will be populated here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Function to load or reload data for the new table
    function loadSeoData() {
        $.ajax({
            url: '<?php echo base_url('super_admin/page_for_seo_list_content'); ?>',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    // Data retrieval was successful
                    var seoData = response.data['data'];
                    var seoTitle = response.data['title'];
                    document.getElementById("seoTitle").innerHTML = seoTitle;

                    // Get a reference to the new table body
                    var seoTableBody = $('#seoTableBody');

                    // Clear any existing rows in the table
                    seoTableBody.empty();

                    // Loop through the data and populate the new table
                    $.each(seoData, function(index, item) {
                        var rowHtml = '<tr>' +
                            '<td>' + (index + 1) + '</td>' +
                            '<td>' + (item.page_permalink.length > 20 ? item.page_permalink.substring(0, 20) : item.page_permalink) + '</td>' +
                            '<td>' + (item.page_meta_title.length > 20 ? item.page_meta_title.substring(0, 20) : item.page_meta_title) + '</td>' +
                            '<td>' + (item.page_meta_desc.length > 20 ? item.page_meta_desc.substring(0, 20) : item.page_meta_desc) + '</td>' +
                            '<td>' + (item.page_meta_keyword.length > 20 ? item.page_meta_keyword.substring(0, 20) : item.page_meta_keyword) + '</td>' +
                            '<td>' + (item.create_at.length > 20 ? item.create_at.substring(0, 20) : item.create_at) + '</td>' +
                            '<td><a class="btn btn-info edit-seo" href="<?php echo base_url('super_admin/edit_page_for_seo/'); ?>' + item.pages_id + '">Edit</a></td>' + // Edit link
                            '<td><button class="btn btn-danger delete-seo" data-id="' + item.pages_id + '">Delete</button></td>' +
                            '</tr>';
                        seoTableBody.append(rowHtml);
                    });

                    // Display success message using iziToast
                    iziToast.success({
                        title: 'Success',
                        message: response.message,
                        position: 'topRight'
                    });
                } else {
                    // Handle the case where no data was found
                    console.error(response.message);
                }
            },
            error: function() {
                console.error('An error occurred during the AJAX request.');
            }
        });
    }

    // Load data for the new table initially
    loadSeoData();

    // Handle delete button click for the new table
    $(document).on("click", ".delete-seo", function () {
        var id = $(this).data('id');

        $.ajax({
            url: '<?php echo base_url('super_admin/delete_page_for_seo'); ?>',
            type: 'POST',
            data: { id: id },
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    // Display success message using iziToast
                    iziToast.success({
                        title: 'Success',
                        message: response.message,
                        position: 'topRight'
                    });

                    // Reload data for the new table after successful deletion
                    loadSeoData();
                } else {
                    // Display error message using iziToast
                    iziToast.error({
                        title: 'Error',
                        message: response.message,
                        position: 'topRight'
                    });
                }
            },
            error: function() {
                // Display a generic error message using iziToast
                iziToast.error({
                    title: 'Error',
                    message: 'An error occurred during the request.',
                    position: 'topRight'
                });
            }
        });
    });

    // Additional JavaScript code for the new table
</script>
