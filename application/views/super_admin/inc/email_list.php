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
                        <li class="breadcrumb-item active" aria-current="page">All <?=$title?> </li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="<?= base_url()?>super_admin/add_email" type="button" class="btn btn-primary"><i class="bx bx-plus-circle"></i> Add New E-mail</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-header">
                <h4 class="mb-0 text-uppercase" id="emailTitle"> </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="emailTable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Person Name</th>
                                <th>Company</th>
                                <th>S.I.C Coad</th>
                                <th>Employee Range</th>
                                <th>Revenue Range</th>
                                <th>Job Level</th>
                                <th>Job Function URI</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>Type</th>
                                <th>Create Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="emailTableBody">
                            <!-- Table rows will be populated here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Function to load or reload data for the email table
    function loadEmailData() {
        $.ajax({
            url: '<?php echo base_url('super_admin/email_list'); ?>',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    // Data retrieval was successful
                    var emailData = response.data['data'];
                    var emailTitle = response.data['title'];
                    document.getElementById("emailTitle").innerHTML = emailTitle;

                    // Get a reference to the email table body
                    var emailTableBody = $('#emailTableBody');

                    // Clear any existing rows in the table
                    emailTableBody.empty();

                    // Loop through the data and populate the email table
                    $.each(emailData, function(index, item) {
                        var rowHtml = '<tr>' +
                            '<td>' + (index + 1) + '</td>' +
                            '<td>' + item.direct_email+ '</td>' + 
                            '<td>' + item.contact_name + '</td>' + 
                            '<td>' + item.company + '</td>' + 
                            '<td>' + item.sic_coad + '</td>' + 
                            '<td>' + item.employee_range + '</td>' + 
                            '<td>' + item.revenue_range + '</td>' + 
                            '<td>' + item.job_lavel + '</td>' + 
                            '<td>' + item.job_function_uri + '</td>' + 
                            '<td>' + item.country + '</td>' + 
                            '<td>' + item.city + '</td>' + 
                            '<td>' + item.type + '</td>' + 
                            '<td>' + item.create_date + '</td>' + 
                            '<td><a class="btn btn-info edit-email" href="<?php echo base_url('super_admin/edit_email/'); ?>' + item.email_id + '">Edit</a></td>' + // Edit link
                            '<td><button class="btn btn-danger delete-email" data-id="' + item.email_id + '">Delete</button></td>' +
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

    // Load data for the email table initially
    loadEmailData();

    // Handle delete button click for the email table
    $(document).on("click", ".delete-email", function () {
        var id = $(this).data('id');

        $.ajax({
            url: '<?php echo base_url('super_admin/delete_email'); ?>',
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

                    // Reload data for the email table after successful deletion
                    loadEmailData();
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

    // Additional JavaScript code for the email table
</script>
