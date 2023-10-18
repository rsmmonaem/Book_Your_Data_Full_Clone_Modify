<div id="root" style="min-height: 100vh; background-color: #f6f6f6;">
    <div>
        <div class="page-title tab">
            <div class="container page-title__container table-layout-fixed">
                <div class="page-title__col page-title__col--4">
					<?php
							if ($this->cart->contents() !==null) {
								echo '<h1 style="color: white;text-align: center;">Please Check Out Now</h1>';
							}else {
								echo '<h1 style="text-align: center;">No Item Available For Check Out</h1>';
							}
					?>
                </div>
            </div>
        </div>
        <main class="pad-top-small pad-bottom-medium bg-vapor">
            <div class="container">
			<?php
				if ($this->cart->contents() !==null) {
			?>
					<div class="row">
                    <table class="table table-striped" style="text-align:center;font-size:16px;">
								<tr>
									<th>Product</th>
									<th>Package</th>
									<th>Price</th>
								</tr>
							<?php foreach ($this->cart->contents() as $item): ?>
								
								
								<tr>
									<td style="color: black;"><?= $item['name'] ?></td>
									<td style="color: black;"><?php
										$result = $this->db->get_where('email_list_database_price', ['email_list_database_id ' => $item['package_id']])->row();
										if ($result) {
											echo $result->package_name;									
										} else {
											echo "No Package found";
										}
									?>
								</td>
									<td style="color: black;" ><?= $item['qty'] ?> x <?= $item['price'] ?> USD</td>
								</tr>
							<?php endforeach; ?>
								<tr>
									<td colspan="2" style="color: black;">Total Amount To Pay: </td>
									<td style="color: black;"><?= $this->cart->total() ?> USD</td>
								</tr>
                    </table>
					<form method="post" action="<?= base_url('checkout/process_order') ?>">
						<button style="float:right;" class="button btn-success" type="submit">Confirm Purchase</button>
					</form>

                </div>			
			<?php 
				}
			?>
            </div>
        </main>
    </div>
</div>
