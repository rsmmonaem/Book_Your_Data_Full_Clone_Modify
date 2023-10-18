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
                        <li class="breadcrumb-item active" aria-current="page">All <?=$title?> </li>
                    </ol>
                </nav>
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
							<th>User Email</th>
                            <th>Order ID</th>
							<th>Product ID</th>
							<th>Package</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>Subtotal</th>
                            <th>Total</th>
							<th>Payment</th>
							<!-- <th>Delivery</th> -->
							<th>Date</th>
							<!-- <th>Action</th> -->
						</tr>
                        </thead>
                        <tbody id="emailTableBody">
						</tbody>

                    </table>
                </div>
            </div>
        </div>

		<script>
    $.ajax({
        url: '<?php echo base_url('super_admin/orders_fatch'); ?>',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            if (response.status === 'success') {
                // Data retrieval was successful
                var emailData = response.data['data'];
                var title = response.data['title'];

                document.getElementById("title").innerHTML = title;

                // Get a reference to the table body
                var emailTableBody = $('#emailTableBody');

                // Clear any existing rows in the table
                emailTableBody.empty();

                // Loop through the data and populate the table
                $.each(emailData, function(index, item) {
                    var rowHtml = '<tr>' +
                        '<td>' + (index + 1) + '</td>' +
                        '<td>' + item.user_email + '</td>' +
                        '<td>' + item.order_id + '</td>' +
                        '<td>' + item.product_id + '</td>' +
                        '<td>' + item.package_id + '</td>' +
                        '<td>' + item.quantity + '</td>' +
						'<td>' + item.price + '</td>' +
                        '<td>' + item.subtotal + '</td>' +
                        '<td>' + item.order_total + ' USD' + '</td>' +
                        '<td>' + item.payment_status + '</td>' +
                        // '<td>' + item.order_delevery_status + '</td>' +
                        '<td>' + item.order_date + '</td>' +
						// '<td><a class="btn btn-info edit-email" href="<?php echo base_url('super_admin/edit_orders/'); ?>' + item.o_id + '">Edit</a></td>' + 
                        '</tr>';

                    emailTableBody.append(rowHtml);
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
</script>

