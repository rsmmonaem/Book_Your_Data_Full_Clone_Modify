<div id="root" style="min-height: 100vh; background-color: #f6f6f6;">
    <div>
        <div class="page-title tab">
            <div class="container page-title__container table-layout-fixed">
                <div class="page-title__col page-title__col--4">
				<?php
						if ($this->cart->contents() !== null) {
							echo '<h1 style="color: white;text-align: center;">Your Cart </h1>';
						}else {
							echo '<h1 style="text-align: center;">Your Cart Is Empty</h1>';
						}
				?>
                    
                </div>
            </div>
        </div>
        <main class="pad-top-small pad-bottom-medium bg-vapor">
            <div class="container">
                <div class="row">
                    <table class="table table-striped" style="text-align:center;font-size:16px;">
					<?php
						if ($this->cart->contents() !== null) {
							echo '<tr>';
							echo '<th>Product</th>';
							echo '<th>Package</th>';
							echo '<th>Price</th>';
							echo '<th>Quantity</th>';
							echo '<th>Total</th>';
							echo '<th>Action</th>';
							echo '</tr>';
						}
					?>


    <?php
    $grand_total = 0; // Initialize grand total
    foreach ($this->cart->contents() as $item):
        $total_item_price = $item['subtotal'];
        $grand_total += $total_item_price; // Accumulate the subtotal
    ?>
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
                            <td style="color: black;">$<?= $item['price'] ?></td>
                            <td style="color: black;"><?= $item['qty'] ?></td>
                            <td style="color: black;">$<?= $total_item_price ?></td>

                            <td>
                                <form method="post" action="<?= base_url('remove-from-cart/' . $item['rowid']) ?>">
                                    <input class="button btn-danger" type="submit" value="Remove">
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
						<?php 
							if (isset($item['name'])) {
								echo '<tr>';
								echo '<td style="color: black;" colspan="4">Grand Total</td>';
								echo '<td style="color: black;">$' . $grand_total . '</td>';
								echo '<td>';
								echo '<form method="post" action="' . base_url('checkout') . '">';
								echo '<input class="button btn-success" type="submit" value="Checkout">';
								echo '</form>';
								echo '</td>';
								echo '</tr>';
							}
						?>
                        
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>
