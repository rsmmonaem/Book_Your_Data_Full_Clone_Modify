<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include Bootstrap CSS and JS here -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">All <?=$title?></li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="<?= base_url()?>super_admin/add_job_function" type="button" class="btn btn-primary"><i class="bx bx-plus-circle"></i> Add New Job Function</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-header">
                <h4 class="mb-0 text-uppercase" id="title"> </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>#</th>
							<th>Job Function</th>
							<th>Uri</th>
							<th>Type</th>
							<th>Description</th>
							<th>Details</th>
							<th>Image</th>
							<th colspan='2'>Action</th> 

						</tr>
					</thead>

                        <tbody id="emailTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal for displaying the image -->
        <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="previewImage" src="" alt="Image Preview" style="max-width: 100%;">
                    </div>
                </div>
            </div>
        </div>
<script>
	$('#imageModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Get the button that triggered the modal
    var imageSrc = button.data('image'); // Get the image source from the data-image attribute of the button
    var previewImage = $('#previewImage'); // Get the img element

    // Set the src attribute of the img element with the image source
    previewImage.attr('src', imageSrc);
});
</script>
    </div>
</div>


    <!-- Your HTML content -->
    <h1 id="title">Table Title</h1>
    <table>
        <thead>
            <!-- Table headers -->
        </thead>
        <tbody id="emailTableBody">
            <!-- Table rows will be populated here -->
        </tbody>
    </table>

    <!-- JavaScript code -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Function to load or reload the data table
        function loadData() {
            $.ajax({
                url: '<?php echo base_url('super_admin/job_function_list'); ?>',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        // Data retrieval was successful
                        var emailData = response.data['data'];

                        // Get a reference to the table body
                        var emailTableBody = $('#emailTableBody');

                        // Clear any existing rows in the table
                        emailTableBody.empty();

                        // Loop through the data and populate the table
                        $.each(emailData, function(index, item) {
                            var rowHtml = '<tr>' +
                                
                        '<td>' + (index + 1) + '</td>' +
						'<td>' + (item.job_function.length > 20 ? item.job_function.substring(0, 20) + '...' : item.job_function) + '</td>' +
						'<td>' + (item.job_function_uri.length > 20 ? item.job_function_uri.substring(0, 20) + '...' : item.job_function_uri) + '</td>' +
						'<td>' + item.type + '</td>' +
						'<td>' + (item.job_function_desc.length > 20 ? item.job_function_desc.substring(0, 20) + '...' : item.job_function_desc) + '</td>' +
						'<td>' + (item.job_function_details.length > 20 ? item.job_function_details.substring(0, 20) + '...' : item.job_function_details) + '</td>' +
						'<td><button class="btn btn-link view-image" data-toggle="modal" data-target="#imageModal" data-image="<?= base_url()?>uploads/Job_function/' + item.job_function_img + '"><i class="fa fa-eye" aria-hidden="true"></i></button></td>' +
						'<td><a class="btn btn-info edit-item" href="<?php echo base_url('super_admin/edit_job_function/'); ?>' + item.job_function_id + '">Edit</a></td>' + // Edit link
                        '<td><button class="btn btn-danger delete-item" data-id="' + item.job_function_id + '">Delete</button></td>' +
                                '</tr>';
                            emailTableBody.append(rowHtml);
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

        // Load data initially
        loadData();

        // Handle delete button click
        $(document).on("click", ".delete-item", function () {
            var id = $(this).data('id');

            $.ajax({
                url: '<?php echo base_url('super_admin/delete_job_function'); ?>',
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

                        // Reload data after successful deletion
                        loadData();
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

      // Inside the modal show event handler


    </script>
