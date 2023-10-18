<!-- slider part start here -->
<div class="jumbotron jumbotron--list-detail jumbotron--regular-bg topse">
    <div class="container jumbotron--list-detail__container table-layout-fixed">
        <div class="jumbotron--list-detail__col-half jumbotron--list-detail__col-left">
            <img class="img-responsive" src="<?=base_url()?>assets/home/images/email-address-list-preview.jpg"
                width="542px" height="433px" alt="email list details preview">
            <div class="box-contact-count">
                <div class="vertical-center">
                    <span>Direct</span>
                    <span class="box-contact-count__title">
                        <?php
									$job_function_uri = $this->uri->segment(3);
										$job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();
										if ($job_function) {
											echo $job_function->job_function_emails_numbers;									
										} else {
											echo "0000";
										}
						?>
                    </span>
                    <span>Email Contacts</span>
                </div>
            </div>
        </div>
        <div class="jumbotron--list-detail__col-half jumbotron--list-detail__col-right">
            <div class="gap-bottom-small ceotitle">
                <h1 class="jumbotron__title">

                    <?php
									$job_function_uri = $this->uri->segment(3);
										$job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();
										if ($job_function) {
											echo $job_function->job_function;									
										} else {
											echo "not found";
										}
					?>
                    Email List</h1>
                <strong class="jumbotron--list-detail__subtitle"></strong>
            </div>
            <div class="gap-bottom topse">
                <span class="font-large ceoa">
                    It starts at
                    <strong class="text-primary ceot">
                        <?php
									$job_function_uri = $this->uri->segment(3);
										$job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();
										if ($job_function) {
											echo $job_function->job_function_price;									
										} 
					?>
                    </strong> for <?php
									$job_function_uri = $this->uri->segment(3);
										$job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();
										if ($job_function) {
											echo $job_function->job_function_number_of_leads;									
										} 
					?> leads. The more leads you order, the less you pay for each. Please visit our <a
                        href="<?=base_url()?>/home/pricing">pricing</a> page for all tiers.
                </span>
            </div>
            <p class="text-loblolly">
                <?php
										$job_function_uri = $this->uri->segment(3);
											$job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();
											if ($job_function) {
												echo $job_function->job_function_desc;									
											} else {
												echo "not found";
											}
				?>
            </p>
            <div class="gap-bottom-medium hidden-tlnd">
                <a href="#" class="button button--primary full-width-pld">START USING THIS FILTER</a>
                <br>
                <br>
                <form method="post" action="<?= base_url('add-to-cart') ?>">
                    <input type="hidden" name="product_id" value="<?php $id =  $this->uri->segment(3); echo $id;?>">
                    <input type="hidden" name="product_name" value="<?php
										$job_function_uri = $this->uri->segment(3);
											$job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();
											if ($job_function) {
												echo $job_function->job_function;									
											} else {
												echo "not found";
											}
					?>">

<?php 
$job_function_uri = $this->uri->segment(3);
$package = $this->db->get_where('email_list_database_price', ['job_function_uri' => $job_function_uri])->result();
?>

<?php if (!empty($package)) : ?>
    <select class="form-control col-md-12 col-xs-12" name="package_id" id="package" required>
        <option value="">--Select--</option>
        <?php foreach ($package as $row) : ?>
            <option value="<?= $row->email_list_database_id ?>" data-price="<?= $row->email_list_database_price ?>">
                <?= $row->package_name . '--$' . $row->email_list_database_price . ' USD --' . $row->number_of_leads . ' leads' ?>
            </option>
        <?php endforeach; ?>
		<input style="background: black;color: white;text-align: center;" type="text" name="product_price"
                        value="Please Select" readonly>
                    <div>
                        <!-- Decrement Button -->
                        <button style="width: 25px;" type="button" onclick="decrementQuantity()"> - </button>
                        <!-- Quantity Input -->
                        <input style="background: black;color: white;text-align: center; width: 121px" type="number"
                            name="quantity" id="quantity" value="1" min="1">
                        <!-- Increment Button -->
                        <button style="width: 25px;" type="button" onclick="incrementQuantity()">+</button>
                    </div>
                    <input style="width: 179px;" type="submit" value="Add to Cart">
    </select>
<?php else : ?>
    <select class="form-control col-md-12 col-xs-12" name="package_id" id="package" required>
        <option value="No PAckage Include">NO Package Found</option>
    </select>
<?php endif; ?>
				



                </form>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Get references to the select element and the input field
    var selectElement = document.getElementById("package");
    var productPriceInput = document.querySelector("input[name='product_price']");

    // Add an event listener to the select element
    selectElement.addEventListener("change", function() {
        // Get the selected option
        var selectedOption = selectElement.options[selectElement.selectedIndex];

        // Update the input field with the selected option's value
        productPriceInput.value = selectedOption.getAttribute("data-price");
    });
});
</script>

                <script>
                function incrementQuantity() {
                    var quantityInput = document.getElementById('quantity');
                    quantityInput.stepUp(); // Increment the input value by 1
                }

                function decrementQuantity() {
                    var quantityInput = document.getElementById('quantity');
                    if (quantityInput.value > 1) {
                        quantityInput.stepDown(); // Decrement the input value by 1, but not below 1
                    }
                }
                </script>

            </div>

            <ul class="list row">
                <li class="col-lg-4 col-md-5 col-sm-6 gap-bottom-small-tpd">
                    <span class="icon icon-checkbox font-xlarge align-middle ceoicons"><img
                            src="<?=base_url()?>assets/home/images/icons8-checkbox.svg" alt=""></span>
                    <span class="font-small align-middle gap-left-small">Best Price Guarantee</span>
                </li>
                <li class="col-lg-8 col-md-7 col-sm-6 gap-bottom-small-tpd">
                    <span class="icon icon-checkbox font-xlarge align-middle ceoicons"><img
                            src="<?=base_url()?>assets/home/images/icons8-checkbox.svg" alt=""></span>
                    <span class="font-small align-middle gap-left-small">Last Update <?php
										$job_function_uri = $this->uri->segment(3);
											$job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();
											if ($job_function->last_update_date!='0000-00-00 00:00:00') {
												echo $job_function->last_update_date;									
											}else{
												echo date('Y/m/d');
											}
				?></span>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- slider part end here -->

<!-- portfolio icon part start here -->
<div class="pad-vertical-small">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 gap-bottom-small-tpd">
                <div class="iconic-block">
                    <span class="icon icon-checkbox iconic-block__icon oticon"><img
                            src="<?=base_url()?>assets/home/images/icons8-checkbox (2).svg" alt=""></span>
                    <span class="iconic-block__text ceotxt">95% Deliverability <br class="hidden-tpd">Guarantee</span>
                </div>
            </div>
            <div class="col-sm-3 gap-bottom-small-tpd">
                <div class="iconic-block">
                    <span class="icon icon-checkbox iconic-block__icon oticon"><img
                            src="<?=base_url()?>assets/home/images/icons8-checkbox (2).svg" alt=""></span>
                    <span class="iconic-block__text ceotxt">Best Price <br class="hidden-tpd">Guarantee</span>
                </div>
            </div>
            <div class="col-sm-3 gap-bottom-small-tpd">
                <div class="iconic-block">
                    <span class="icon icon-csv iconic-block__icon oticon"><img
                            src="<?=base_url()?>assets/home/images/icons8-csv-48.png" alt=""></span>
                    <span class="iconic-block__text ceotxt">Instant <br class="hidden-tpd">Download (.csv)</span>
                </div>
            </div>
            <div class="col-sm-3 gap-bottom-small-tpd">
                <div class="iconic-block">
                    <span class="icon icon-identification iconic-block__icon oticon"><img
                            src="<?=base_url()?>assets/home/images/icons8-badge-50.png" alt=""></span>
                    <span class="iconic-block__text ceotxt">Verified <br class="hidden-tpd">Weekly</span>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="hr-line">
<!-- portfolio icon part end here -->

<!-- DATA structure list part start here -->
<div class="pad-top-small">
    <div class="container">
        <div class="row gap-bottom-large">
            <div class="col-md-5 datcnt">
                <p><strong>DATA STRUCTURE OF FULL CONTACT DATA</strong></p>
                <img src="<?=base_url()?>uploads/job_function/
					<?php
									$job_function_uri = $this->uri->segment(3);
										$job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();
										if ($job_function) {
											echo $job_function->job_function_img;									
										} 
					?>
					" alt="Email List." class="shadow-primary gap-bottom img-responsive" width="458px" height="688px">
                <a href="#" class="button button--primary full-width gap-bottom-tld js-sampledata-download">Download A
                    Sample List</a>
            </div>
            <div class="col-md-7 ceodtl">
                <h2 class="primary-title h3">
                    <?php
									$job_function_uri = $this->uri->segment(3);
										$job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();
										if ($job_function) {
											echo $job_function->job_function;									
										} else {
											echo "not found";
										}
					?> Email List Details
                </h2>
                <p>
                    <?php
									$job_function_uri = $this->uri->segment(3);
										$job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();
										if ($job_function) {
											echo $job_function->job_function_details;									
										} else {
											echo "not found";
										}
					?>
                </p>
            </div>
        </div>
        <a href="#" class="lead lead--secondary lead--link wegent">
            <h5 class="lead__text">We Guarantee Over 95% Email Deliverability With Complete Vcard Information</h5>
        </a>
        <div class="row pad-vertical">
            <div class="col-md-3 col-sm-6 gap-bottom-tld iconn">
                <i class="icon icon-checkbox text-primary icon-medium"><img
                        src="<?=base_url()?>assets/home/images/icons8-checkbox (2).svg" alt=""></i>
                <h4>95% Deliverability Guarantee</h4>
                <p class="clear-gap-bottom">Our data is verified by automated processes and human eyes. We're so
                    confident about our contact lists that we provide a 95% accuracy guarantee. If more than 5%
                    of your emails bounce, you'll get credits to make up the difference.</p>
            </div>
            <div class="col-md-3 col-sm-6 gap-bottom-tld iconn">
                <i class="icon ri-download-cloud-2-line text-primary icon-medium"></i>
                <h4>Instant Download</h4>
                <p class="clear-gap-bottom">Get an email list in minutes and download it instantly as a
                    .csv file! Both file types can be integrated into your CRM application quickly
                    and easily. So you can get started with making new connections right away.</p>
            </div>
            <div class="col-md-3 col-sm-6 gap-bottom-tld iconn">
                <i class="icon icon-identification text-primary icon-medium"><img
                        src="<?=base_url()?>assets/home/images/icons8-badge-50.png" alt=""></i>
                <h4>Email, Phone, Company Information, &amp; More</h4>
                <p class="clear-gap-bottom">We provide direct, detailed, specific information to help you make
                    more valuable connections with your future business contacts: emails, names, phone numbers,
                    postal addresses, business titles, company/industry information, department information,
                    fax numbers, revenue, and even employee information.</p>
            </div>
            <div class="col-md-3 col-sm-6 iconn">
                <i class="icon ri-copyright-line text-primary icon-medium"></i>
                <h4>Unlimited Usage Rights</h4>
                <p class="clear-gap-bottom">Once you order the list, you own it! Our pricing is transparent; we
                    don't charge extra fees for using the contacts we give you. There are no hidden fees or
                    contracts. We charge the same low price regardless of if you're a small start-up or a large
                    enterprise!</p>
            </div>
        </div>
        <div class="lead lead--secondary bpg">
            <h5 class="lead__text gap-bottom-small-tlnd">Best Price Guarantee</h5>
            <p class="text-white clear-gap-bottom">For sure there's no another supplier that can provide better pricing
                with the same 95% email deliverability guarantee. Even if you find, we beat it directly! </p>
        </div>
    </div>
</div>

<!-- DATA structure  list end here -->

<!--FAQ REGARDING TO CEO EMAIL LIST start here -->
<div class="section">
    <div class="container ceodtl">
        <h2 class="primary-title">FAQ Regarding to
            <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>
            Email List</h2>
        <div class="row">
            <div class="col-md-6 ceodtl">
                <h3>How do I find
                    <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>
                    Business Emails?</h3>
                <p></p>
                <p>Bookyourdata provides a verified and updated list of
                    <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>
                    business emails in different niches. You can select filters from the left menu and place an order
                    online to download contacts as an excel sheet instantly. You either click onto the “customize this
                    list” button to go list-builder directly or go to https://bookyourdata.com/tool to start.</p>
                <p></p>
            </div>
            <div class="col-md-6 ceodtl">
                <h3>How can I contact
                    <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>s?
                </h3>
                <p></p>
                <p>Contacting a
                    <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>
                    directly is possible through BookYourData.com. Our
                    <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>
                    email list allows you to build a targeted
                    <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>
                    email list in seconds. You'll have the direct contact information of chief executive officers.
                    Whether you are looking for
                    <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>s
                    in the construction, healthcare, finance, or manufacturing sector, our pre-built list of
                    <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>s
                    can be an invaluable asset to your sales team. </p>
                <p></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 ceodtl">
                <h3>Is there a
                    <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>
                    mail directory?</h3>
                <p></p>
                <p>No, there's no such thing as a
                    <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>
                    email directory. There are, however, multiple lead generation tools with thousands of
                    <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>
                    profiles and their contact information. These tools allow you to build a targeted
                    <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>
                    email list in seconds. </p>
                <p></p>
            </div>
            <div class="col-md-6 ceodtl">
                <h3>Can I find
                    <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>
                    Emails for free?</h3>
                <p></p>
                <p>
                    You may find tons of free information on the internet. However, free data may have lots of invalid
                    and outdated information. We recommend using a reputable <a href="#">email database</a> provider
                    like bookyourdata .com instead of searching for free lists. Bookyourdata
                    <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>s'
                    email contact list is the most exhaustive B2B marketing database in the world today. It has been
                    verified by human editors. We do this so that you don't have to worry about sending emails to the
                    wrong people.
                </p>
                <p></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 ceodtl">
                <h3>Why should I get the
                    <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>
                    email list?</h3>
                <p></p>
                <p>You can get the direct contact information of chief executive officers! As decision-makers,
                    <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>s
                    have the authority to make important marketing decisions for their companies. That's why working
                    with them directly is much more effective than reaching out to the gatekeepers who filter through
                    your marketing efforts and decide which ones are worthy of their
                    <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>'s
                    time. Our accurate
                    <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>
                    mailing lists can help you gain valuable B2B leads and generate sales in no time.</p>
                <p></p>
            </div>
            <div class="col-md-6 ceodtl">
                <h3>What are common
                    <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>
                    email addresses?</h3>
                <p></p>
                <p><?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>
                    email addresses usually contain the full name of the
                    <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>
                    plus their company website. This may be limited to just the name, initials, or a combination of
                    both. For example, John Smith who is the
                    <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>
                    of a company called “XYZ Corporation” might have an email address like this john.smith@xyzcorp.com
                    or john@xyzcorp.com.</p>
                <p></p>
            </div>
        </div>
    </div>
</div>
<!-- FAQ REGARDING TO CEO EMAIL LIST part end here -->

<!-- TESTIMONIALS section start here -->
<div class="section small pad-top-0">
    <div class="container ceodtll ">
        <h3 class="primary-title">Testimonials</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="testimonial text-left">
                    <h6 class="secondary-title">
                        Reta Cummings - Smitham LLC
                    </h6>
                    <em>"I recently used Bookyourdata to build a targeted
                        <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>
                        email list, and it was much easier than I expected. It made building my list a lot faster—and
                        the best part is that now I don't have to worry about wasting time on people who aren't going to
                        be my ideal client. I just want to work with CEOs who are going to decide about whether or not
                        to buy from me, and now I can do that."</em>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonial text-left">
                    <h6 class="secondary-title">
                        London Farrell - Surround Sound
                    </h6>
                    <p><em>"I'd highly recommend checking out BookYourData.com if you're responsible for B2B lead
                            generation, especially if your product is specialized and you need
                            <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>
                            contacts to sell it!"</em><br></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div
                    class="testimonial text-left <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>dtl">
                    <h6 class="secondary-title">
                        Sybil Walker - Kairos Marketing
                    </h6>
                    <p>
                        <em>"I have to say, I was a little skeptical when I first tried bookyourdata. I mean, there are
                            so many lists of email addresses for sale out there, how could this one be any different?
                            And then I tried it. </em>
                    </p>
                    <p>
                        <em>And it was just…easy. It took me seconds to build the list of
                            <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>s
                            I wanted to target for my marketing campaign. All I did was pick a few filters about the
                            company size, industry, and location of the
                            <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>—and
                            boom! There were thousands of potential contacts that matched my criteria. The quality
                            didn't just seem good from what I could see on screen—it really ended up being great. Most
                            of them worked! If you're looking for an easy way to build a <a href="#">targeted email
                                list</a>, fast, bookyourdata is definitely worth checking out."</em>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonial text-left">
                    <h6 class="secondary-title">
                        Nettie Groh - Estudio Apollo
                    </h6>
                    <p><em>"I'm a sales manager for a software company, and it's my job to find new prospects as quickly
                            as possible. I can't afford to waste my time with leads that don't pan out, so when I found
                            Bookyourdata.com, I was pretty skeptical that their
                            <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>
                            database would actually be accurate. But after I spent less than an hour using the platform
                            to download a targeted list of
                            <?php $job_function_uri = $this->uri->segment(3); $job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();if ($job_function) {echo $job_function->job_function;}?>s
                            from companies in my target market, I was blown away. Not only was the list accurate and
                            very complete, but it enabled me to get in touch with decision-makers in a way I'd never
                            been able to before. Now instead of wasting my time sending cold emails and trying to use
                            "tricks" to get around gatekeepers, I can just pick up the phone and call anyone in my
                            target audience right away.</em>"</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- TESTIMONIALS end here -->


<!-- footer address_1 section start here -->
<section class="bg-concrete pad-vertical all_connt">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="text-uppercase uppercase">Email Lists</div>
                <ul class="list text-capitalize">
                    <li><a href="#">Email List For Sale</a></li>
                    <li><a href="#">Real Estate Email</a></li>
                    <li><a href="#">Contacts Online</a></li>
                    <li><a href="#">Pharmaceutical Email List</a></li>
                    <li><a href="#">Architect Email List</a></li>
                    <li><a href="#">Tour Operator Email</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <div class="text-uppercase uppercase">Leads by Job Function</div>
                <ul class="list text-capitalize">
                    <li><a href="#">Professor Email List</a></li>
                    <li><a href="#">Cpa Email List</a></li>
                    <li><a href="#">Technology Email Lists</a></li>
                    <li><a href="#">Lawyer Email List</a></li>
                    <li><a href="#">Email Addresses Of Construction Companies</a></li>
                    <li><a href="#">Insurance Agent Email List</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <div class="text-uppercase uppercase">Industry Contact Emails</div>
                <ul class="list text-capitalize">
                    <li><a href="#">List Manufacturing Companies</a></li>
                    <li><a href="#">Hospital List</a></li>
                    <li><a href="#">Pharmacy Database</a></li>
                    <li><a href="#">University Email List</a></li>
                    <li><a href="#">Retail Industry Email Database</a></li>
                    <li><a href="#">Engineering Email</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <div class="text-uppercase uppercase">Healthcare Contact Lists</div>
                <ul class="list text-capitalize">
                    <li><a href="#">Ophthalmologist Email List</a></li>
                    <li><a href="#">List Of Gastroenterologists</a></li>
                    <li><a href="#">Nurse Mailing Lists</a></li>
                    <li><a href="#">Radiologist Email Lists</a></li>
                    <li><a href="#">Surgeon Email List</a></li>
                    <li><a href="#">Plastic Surgeon Email List</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- footer address_1 section end here -->

<!-- ready to boost section start here -->
<div class="lead hidden-dd ttop_ttitlle">
    <div class="container lead__container">
        <div class="lead__col lead__col--left">
            <h4 class="lead__text gap-bottom-tld">Ready To Boost Your Sales Like Your Competitors? Try Our Tool For
                Free.</h4>
        </div>
        <div class="lead__col lead__col--right">
            <a class="button button--quaternary full-width" href="#">
                Build a List <i class="icon icon-arrow-forward button--quaternary__icon ri-arrow-right-line"></i>
            </a>
        </div>
    </div>
</div>
