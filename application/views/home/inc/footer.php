<!-- footer section start here -->
<footer class="footer" id="footer">
		<div class="pad-vertical bg-concrete">
			<div class="container">
				<div class="row">
					<div class="col-md-2 gap-bottom-tld ft_a">
						<div class="text-uppercase" style="font-weight: bold;color: black;">Products</div>
						<div class="menu menu--primary">
							<?php 
								$footer_link = $this->db->get_where('footer_link', ['position' => 1])->result();
								foreach ($footer_link as $row) {
									echo '<a href="' . base_url('home/') . $row->perma_link . '" class="menu__item hidden-dd">' . $row->name . '</a>';
								}
							?>
						</div>
					</div>
					<div class="col-md-3 gap-bottom-tld ft_a">
						<div class="text-uppercase"style="font-weight: bold;color: black;">Company</div>
						<div class="menu menu--primary">
							<?php 
								$footer_link = $this->db->get_where('footer_link', ['position' => 2])->result();
								foreach ($footer_link as $row) {
									echo '<a href="' . base_url('home/') . $row->perma_link . '" class="menu__item hidden-dd">' . $row->name . '</a>';
								}
							?>
						</div>
					</div>
					<div class="col-md-3 gap-bottom-tld ft_a">
						<div class="text-uppercase" style="font-weight: bold;color: black;">Community</div>
						<div class="menu menu--primary">
							<?php 
								$footer_link = $this->db->get_where('footer_link', ['position' => 3])->result();
								foreach ($footer_link as $row) {
									echo '<a href="' . base_url('home/') . $row->perma_link . '" class="menu__item hidden-dd">' . $row->name . '</a>';
								}
							?>
						</div>
						<div class="text-uppercase" style="font-weight: bold;color: black;">Popular</div>
							<div class="menu menu--primary">
								<?php 
									$footer_link = $this->db->get_where('footer_link', ['position' => 4])->result();
									foreach ($footer_link as $row) {
										echo '<a href="' . base_url('home/') . $row->perma_link . '" class="menu__item hidden-dd">' . $row->name . '</a>';
									}
								?>
							</div>
						</div>
						<div class="col-md-3 gap-bottom-tld sm">
							<div class="text-uppercase ft_a" style="font-weight: bold;color: black;">Bookyourdata</div>
								<a href="<?=base_url()?>home/">Send Message</a>
								<address class="ft_a">
								<?php 
									$footer_link = $this->db->get_where('footer_link', ['position' => 5])->result();
									foreach ($footer_link as $row) {
										echo "<p><strong>$row->perma_link:</strong> $row->name </p>";
									}
								?>
								</address>
							</div>
						</div>
					</div>
				</div>
				<div class="footer__brands">
					<div class="container">
						<div class="footer-logos gap-bottom-small-tld">
							<span class="footer-logos__title">Secured <br>By</span>
							<div id="DigiCertClickID_SBKZHQvT" class="norton-digicert">
								<div id="DigiCertClickID_SBKZHQvTSeal" style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; inset: 0px; clear: both; float: none; cursor: default;"><img src="<?= base_url() ?>assets/home/images/download.png" alt="DigiCert Secured Site Seal" tabindex="0" role="link" style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; inset: 0px; clear: both; float: none; cursor: pointer;">
								</div>
							</div>
							<a href="#" target="_blank" rel="noopener noreferrer" class="footer-logos__item"><img data-cfsrc=" " width="89" height="23" alt="logo" src="<?= base_url() ?>assets/home/images/mcafee-logo.webp "></a>
							<br>
							<a href="#" target="_blank" rel="noopener noreferrer">
							<img data-cfsrc=" " data-cfstyle="margin-top: 16px;" width="280px" height="44px" border="0" alt="braintree logo" style="margin-top: 16px;" src="<?= base_url() ?>assets/home/images/braintree-badge-wide-dark.png ">
							</a>
						</div>
						<div class="footer-logos pull-right-tlnu">
							<span class="footer-logos__title">Proud <br>Member Of</span>
							<a href="#" target="_blank" rel="noopener noreferrer" class="footer-logos__item"><img data-cfsrc=" " width="47" height="28" alt="nyama logo" src="<?= base_url() ?>assets/home/images/ana-logo.webp "></a>
							<a href="#" target="_blank" rel="noopener noreferrer" class="footer-logos__item"><img data-cfsrc=" " width="96" height="28" alt="ama logo" src="<?= base_url() ?>assets/home/images/ama-logo.webp "></a>
							<a href="#" target="_blank" rel="noopener noreferrer" class="footer-logos__item"><img data-cfsrc=" " width="112" height="28" alt="dma logo" src="<?= base_url() ?>assets/home/images/dmfa-logo.webp"></a>
							<a href="#" target="_blank" rel="noopener noreferrer" class="footer-logos__item"><img data-cfsrc=" " width="68" height="28" alt="pma logo" src="<?= base_url() ?>assets/home/images/pma-logo.webp">
							</a>
						</div>
					</div>
				</div>
				<hr class="hr-line">
				<div class="footer__bottom text-gray-chateau tpl">
					<div class="container font-small">
						<ul class="list list--primary footer__bottom-links tpl">
							<li class="list__item">Copyright © <?=date('Y')?> Bookyourdata - All Rights Reserved</li>
							<li class="list__item"><a class="link-quaternary" href="<?=base_url()?>home/">Terms of Use</a></li>
							<li class="list__item"><a class="link-quaternary" href="<?=base_url()?>home/">Privacy Policy</a></li>
							<li class="list__item"><a class="link-quaternary" href="<?=base_url()?>home/">Legal Notice</a></li>
						</ul>
					<div class="footer__social-menu">
						<a href="<?=base_url()?>home/" target="_blank" rel="noopener noreferrer nofollow">
							<img data-cfsrc=" " data-cfstyle="border: 0;" alt="Bookyourdata.com - BBB Rating and Accreditation: A+" style="border: 0;" src="<?= base_url() ?>assets/home/images/blue-seal-200-42-bbb-87158178.png">
						</a>
						<a href="<?=base_url()?>home/">
							<img src="<?= base_url() ?>assets/home/images/gdpr-logo.svg" width="128" height="53" alt="GDPR logo">
						</a>
						<span>Find us on</span>
						<div class="social-menu gap-left align-middle">
							<a href="<?=base_url()?>home/" target="_blank" rel="noopener noreferrer" class="social-menu__item icon-facebook">
							<i class="ri-facebook-fill"></i></a>
							<a href="<?=base_url()?>home/" target="_blank" rel="noopener noreferrer" class="social-menu__item icon-twitter"><i class="ri-twitter-fill"></i></a>
							<a href="<?=base_url()?>home/" target="_blank" rel="noopener noreferrer" class="social-menu__item icon-linkedin"><i class="ri-linkedin-fill"></i></a>
						</div>
				</div>
			</div>
		</div>
</footer>


<!-- footer section end here -->

<!-- live message section start here -->
<div class="intercom-lightweight-app">
	<div class="intercom-lightweight-app-launcher intercom-launcher" role="button" tabindex="0" aria-label="Open Intercom Messenger" aria-live="polite"><div class="intercom-lightweight-app-launcher-icon intercom-lightweight-app-launcher-icon-open"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 32"><path d="M28 32s-4.714-1.855-8.527-3.34H3.437C1.54 28.66 0 27.026 0 25.013V3.644C0 1.633 1.54 0 3.437 0h21.125c1.898 0 3.437 1.632 3.437 3.645v18.404H28V32zm-4.139-11.982a.88.88 0 00-1.292-.105c-.03.026-3.015 2.681-8.57 2.681-5.486 0-8.517-2.636-8.571-2.684a.88.88 0 00-1.29.107 1.01 1.01 0 00-.219.708.992.992 0 00.318.664c.142.128 3.537 3.15 9.762 3.15 6.226 0 9.621-3.022 9.763-3.15a.992.992 0 00.317-.664 1.01 1.01 0 00-.218-.707z"></path></svg></div><div class="intercom-lightweight-app-launcher-icon intercom-lightweight-app-launcher-icon-minimize"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path fill-rule="evenodd" clip-rule="evenodd" d="M18.601 8.39897C18.269 8.06702 17.7309 8.06702 17.3989 8.39897L12 13.7979L6.60099 8.39897C6.26904 8.06702 5.73086 8.06702 5.39891 8.39897C5.06696 8.73091 5.06696 9.2691 5.39891 9.60105L11.3989 15.601C11.7309 15.933 12.269 15.933 12.601 15.601L18.601 9.60105C18.9329 9.2691 18.9329 8.73091 18.601 8.39897Z" fill="white"></path></svg>
	</div></div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/home/js/app.min.js"></script>
<!-- <script src="<?= base_url() ?>assets/home/js/rocket-loader.min.js"></script> -->
<script src="<?= base_url() ?>assets/home/js/custom_forms.js"></script>
</body>
</html>
<?php
//   $query = $this->db->get('pages');
//   $result = $query->row();
//   $page = $result->pages_description;
//   echo $page;
?>
