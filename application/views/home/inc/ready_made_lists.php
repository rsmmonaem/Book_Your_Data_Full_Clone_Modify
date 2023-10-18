

<!-- slider part start here -->
<div class="jumbotron jumbotron--regular jumbotron--regular-bg ">
		<div class="container jumbotron__container">
			<div class="jumbotron__inner topjum">
				<div class="row">
					<div class="col-md-6 gap-bottom-tld ceotitle ">
						<h1 class="jumbotron__title">
						<?php
								$type = $this->uri->segment(3);
									$result_type = $this->db->get_where('type', ['type' => $type])->row();
									if ($result_type) {
										echo $result_type->type_h1;									
									} else {
										echo "not found";
									}
						?>
						EMAIL LISTS</h1>
					</div>
					<div class="col-md-6 topse  all_connt topjum">
						<p>
							<?php
									$type = $this->uri->segment(3);
										$result_type = $this->db->get_where('type', ['type' => $type])->row();
										if ($result_type) {
											echo $result_type->type_desc;									
										} else {
											echo "not found";
										}
							?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>	
<!-- slider part end here -->

<!-- business contact part start here -->
	<main class="pad-bottom-medium">
		<div class="container regular-page-content regular-page-content--pull-top">
			<div class="box box--ready-made">
				<div class="row">
					<div class="col-md-6 col-lg-7 gap-bottom-small-tpnd ceodtl ">
						<h2 class="secondary-title clear-gap-vertical font-medium">
						<?php
									$type = $this->uri->segment(3);
										// $result_type = $this->db->get_where('type', ['type' => $type])->row();
										if ($type ==="healthcare") {
											echo $result_type->type_h1;									
										} else {
											echo "BUSINESS CONTACTS";
										}
							?>
						</h2>
						<span>You can select a ready-made list from below or create your own list..</span>
					</div>
					<div class="col-md-6 col-lg-5">
						<a class="button button--septenary button--small text-uppercase gap-bottom-small-tld full-width" href="#">
						Build your own 						<?php
									$type = $this->uri->segment(3);
										// $result_type = $this->db->get_where('type', ['type' => $type])->row();
										if ($type ==="healthcare") {
											echo $result_type->type_h1;									
										} else {
											echo "BUSINESS CONTACTS";
										}
							?> list
						</a>
					</div>
				</div>
			</div>
		
			<div class="premade-lists gap-bottom-small ceodtll">
<?php 
$this->load->database(); 
$query = $this->db->order_by('job_function_id', 'ASC')->get('job_function_uri');
$counts = array();

foreach ($query->result() as $row) {
    $type = $row->type;
	$job_function_uri = $row->job_function_uri;

    if (!isset($counts[$type][$job_function_uri])) {
        $counts[$type][$job_function_uri] = 1;
    } else {
        $counts[$type][$job_function_uri]++;
    }
}

// Specify the type you want to display
$desiredType = $this->uri->segment(3);

if (isset($counts[$desiredType])) {
    foreach ($counts[$desiredType] as $job_function_uri => $count) {
        ?>
        <a href="<?=base_url()?>home/email_list_database/<?=$job_function_uri?>" class="premade-lists__item">
            <div class="premade-lists__item__row">
                <div class="premade-lists__item__col">
                    <h2 class="premade-lists__item__title h4">
							<?php
									
										$job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();
										if ($job_function) {
											echo $job_function->job_function;									
										} else {
											echo "not found";
										}
							?>
                    </h2>
                    <span class="text-primary"></span>
                </div>
                <div class="premade-lists__item__col gap-bottom-small-tpd">
                    <span class="premade-lists__item__contact-title h6">
                        <!-- <?=$count?> -->
						<?php
									
									$job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();
									if ($job_function) {
											
										$number = $job_function->job_function_emails_numbers;
										$formattedNumber = ($number >= 1000000) ? number_format($number / 1000000, 1) . 'M' : (($number >= 1000) ? number_format($number / 1000, 1) . 'K' : $number);
										echo $formattedNumber;
								
									} else {
										echo "not found";
									}
						?>Contacts
                    </span>
                </div>
                <div class="premade-lists__item__col getin">
							<?php
									
										$job_function = $this->db->get_where('job_function_uri', ['job_function_uri' => $job_function_uri])->row();
										if ($job_function) {
											echo $job_function->job_function_desc;									
										} else {
											echo "not found";
										}
							?>
						
                </div>
                <div class="premade-lists__item__col text-right getin">
                    <span class="premade-lists__item__price">
                        Review
                    </span>
                </div>
            </div>
        </a>
        <?php
    }
}
?>


			</div>
		</div>
	</main>	
	<hr class="hr-line">
<!-- business contact part end here -->

<!-- icons part start here -->
	<div class="section ceoa ceoaas">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<ul class="list">
						<li class="iconic-content gap-bottom">
							<div class="iconic-content__icon-area">
								<i class="iconic-content__icon icon icon-coins ri-stack-fill"></i>
							</div>
							<div class="iconic-content__content">
								<h3 class="iconic-content__title">Affordable Pricing</h3>
								<p>Quality email lists enable businesses to make B2B connections for an amazingly low price.</p>
							</div>
						</li>
						<li class="iconic-content gap-bottom">
							<div class="iconic-content__icon-area">
								<i class="iconic-content__icon icon icon-search ri-search-line"></i>
							</div>
							<div class="iconic-content__content">
								<h3 class="iconic-content__title">Search, Order, Download!</h3>
								<p>Within minutes, you can download a database of contacts and start connecting with your audience.</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-md-6">
					<ul class="list">
						<li class="iconic-content gap-bottom">
							<div class="iconic-content__icon-area">
								<i class="iconic-content__icon icon icon-identification ri-pass-pending-line"></i>
							</div>
							<div class="iconic-content__content">
								<h3 class="iconic-content__title">Unmatched Accuracy</h3>
								<p>Both automated and manual processes ensure the accuracy of our human-verified lists.</p>
							</div>
						</li>
						<li class="iconic-content gap-bottom">
							<div class="iconic-content__icon-area">
								<i class="iconic-content__icon icon icon-crm-ready ri-file-text-line"></i>
							</div>
							<div class="iconic-content__content">
								<h3 class="iconic-content__title">CRM-Ready Files</h3>
								<p>Download your list as a .csv file, integrate it into your CRM, and start networking.</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>	
	
<!-- icons end here -->



<!-- footer address_1 section start here -->
	<section class="bg-concrete pad-vertical all_connt">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="text-uppercase uppercase">Email Lists</div>
					<ul class="list text-capitalize">
						<li><a href="#">Manufacturing Email List</a></li>
						<li><a href="#">Manufacturing Email List</a></li>
						<li><a href="#">Manufacturing Email List</a></li>
						<li><a href="#">Manufacturing Email List</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<div class="text-uppercase uppercase">Leads by Job Function</div>
					<ul class="list text-capitalize">
						<li><a href="#">Manufacturing Email List</a></li>
						<li><a href="#">Manufacturing Email List</a></li>
						<li><a href="#">Manufacturing Email List</a></li>
						<li><a href="#">Manufacturing Email List</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<div class="text-uppercase uppercase">Industry Contact Emails</div>
					<ul class="list text-capitalize">
						<li><a href="#">Biotechnology Mailing List</a></li>
						<li><a href="#">Retail Mailing List</a></li>
						<li><a href="#">Travel Agencies Mailing List</a></li>
						<li><a href="#">Manufacturing Email List</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<div class="text-uppercase uppercase">Healthcare Contact Lists</div>
					<ul class="list text-capitalize">
						<li><a href="#">Dentist Email Database</a></li>
						<li><a href="#">Physician Email Database</a></li>
						<li><a href="#">Veterinarians Email List</a></li>
						<li><a href="#">Chiropractor Database</a></li>
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
				<h4 class="lead__text gap-bottom-tld">Ready To Boost Your Sales Like Your Competitors? Try Our Tool For Free.</h4>
			</div>
			<div class="lead__col lead__col--right">
				<a class="button button--quaternary full-width" href="#">
				Build a List <i class="icon icon-arrow-forward button--quaternary__icon ri-arrow-right-line"></i>
				</a>
			</div>
		</div>
	</div>
<!-- ready to boost section end here -->



<!-- live message section start here -->
<!-- <div class="intercom-lightweight-app"><div class="intercom-lightweight-app-launcher intercom-launcher" role="button" tabindex="0" aria-label="Open Intercom Messenger" aria-live="polite"><div class="intercom-lightweight-app-launcher-icon intercom-lightweight-app-launcher-icon-open"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 32"><path d="M28 32s-4.714-1.855-8.527-3.34H3.437C1.54 28.66 0 27.026 0 25.013V3.644C0 1.633 1.54 0 3.437 0h21.125c1.898 0 3.437 1.632 3.437 3.645v18.404H28V32zm-4.139-11.982a.88.88 0 00-1.292-.105c-.03.026-3.015 2.681-8.57 2.681-5.486 0-8.517-2.636-8.571-2.684a.88.88 0 00-1.29.107 1.01 1.01 0 00-.219.708.992.992 0 00.318.664c.142.128 3.537 3.15 9.762 3.15 6.226 0 9.621-3.022 9.763-3.15a.992.992 0 00.317-.664 1.01 1.01 0 00-.218-.707z"></path></svg></div><div class="intercom-lightweight-app-launcher-icon intercom-lightweight-app-launcher-icon-minimize"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M18.601 8.39897C18.269 8.06702 17.7309 8.06702 17.3989 8.39897L12 13.7979L6.60099 8.39897C6.26904 8.06702 5.73086 8.06702 5.39891 8.39897C5.06696 8.73091 5.06696 9.2691 5.39891 9.60105L11.3989 15.601C11.7309 15.933 12.269 15.933 12.601 15.601L18.601 9.60105C18.9329 9.2691 18.9329 8.73091 18.601 8.39897Z" fill="white"></path>
</svg>
</div></div> -->
