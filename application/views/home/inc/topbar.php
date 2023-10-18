<!-- header part start here -->
<div class="header header--fixed">
		<div class="header__inner">
			<button id="mobileMenuOpenBtn" class="mobile-menu-toggle-btn navbar-toggler" type="button"></button>
			<a href="<?=base_url()?>" class="logo-link">
				<img class="logo" width="112px" height="100px" src="<?= base_url() ?>assets/home/images/bookyourdata-logo.svg" alt="Book Your Data Logo ">
			</a>
			<nav id="main-nav" class="main-nav">
				<ul class="main-nav__list nav nav--primary">
					<li class="nav__item">
						<a class="nav__item__link js-submenu-trigger hidden-tlnd" href="<?=base_url()?>home/email_list_builder">Email List Builder</a>
						<a class="nav__item__link js-submenu-trigger hidden-tlnu" href="<?=base_url()?>home/email_list_builder">Email List Builder</a>
						<ul class="main-nav__sub nav nav--secondary">
							<li class="nav__item">
								<a class="nav__item__link js-build-link" href="<?= base_url('home/email_list_builder')?>">Business Contacts</a>
								<a class="nav__item__link js-build-link" href="<?= base_url('home/email_list_by_health_Care')?>">Healthcare Professionals</a>
								<a class="nav__item__link js-build-link" href="<?= base_url('home/email_list_by_real_state')?>">Real Estate Agents</a>
							</li>
						</ul>
					</li>
					<li class="nav__item">
						<a class="nav__item__link js-submenu-trigger" href="<?=base_url()?>home/ready_made_email_lists">Email Lists</a>
						<ul class="main-nav__sub nav nav--secondary">
						<?php 
$query = $this->db->order_by('type_id', 'ASC')->get('type')->result();
foreach ($query as $value) {
    if ($value->type === "business") {
        // Handle business type differently, if needed
    } else {
        echo '<li class="nav__item">';
        echo '<a class="nav__item__link" href="' . base_url('home/ready_made_lists') . '/' . $value->type . '">' . $value->type_h1 . '</a>';
        echo '</li>';
    }
}
?>


						</ul>
					</li>
					<li class="nav__item nav__item--popular">
						<a class="nav__item__link js-submenu-trigger" href="#">Email Database</a>
						<ul class="main-nav__sub nav nav--secondary">
						<?php 
$query = $this->db->order_by('job_function_id', 'ASC')->get('job_function_uri')->result();
foreach ($query as $value) {
    if ($value->job_function_id <= 6) {
        echo '<li class="nav__item">';
        echo '<a class="nav__item__link" href="' . base_url('home/email_list_database') . '/' . $value->job_function_uri . '">' . $value->job_function . '</a>';
        echo '</li>';
    } else {
        break; // Exit the loop when job_function_id is greater than 6
    }
}
?>


						</ul>
					</li>
					<li class="nav__item">
						<a class="nav__item__link" href="<?=base_url()?>home/pricing">Pricing</a>
					</li>
					<li class="nav__item nav__item--about">
						<a class="nav__item__link" href="<?=base_url()?>home/about_us">About</a>
					</li>
				</ul>
			</nav>
			<div class="header__build-btn dropdown dropdown--build-list dropdown--arrow">
				<a class="button button--primary dropdown__btn" href="#" data-toggle="dropdown">Build a list</a>
				<div class="dropdown__container">
					<div class="menu menu--secondary text-uppercase secmenu">
						<a class="menu__item gap-bottom-small" href="<?= base_url('home/email_list_builder')?>">Business Contacts</a>
						<a class="menu__item gap-bottom-small" href="<?= base_url('home/email_list_by_health_Care')?>">Healthcare Professionals</a>
						<a class="menu__item" href="<?= base_url('home/email_list_by_real_state')?>">Real Estate Agents</a>
					</div>
				</div>
			</div>
				<?php
						$this->load->library('session');
						$user_type = $this->session->userdata('user_type');
						if ($user_type === 'super_admin' || $user_type === 'user'):
				?>						
						<div class="header__iconic-box iconic-box">
							<i class="iconic-box__icon icon ri-user-line"></i>
							<div class="iconic-box__content">
								<a href="<?= base_url($user_type)?>" class="iconic-box__content__title iconic-box__content__title--link"><strong style="font-size: 20px;">Dashboard</strong></a><br>
								<a href="<?= base_url()?>admin/logout" style="font-size: 16px;" class="iconic-box__content__subtitle link-secondary">logout</a>
							</div>
						</div>
                <?php else: ?>
						<div class="header__iconic-box iconic-box">
							<i class="iconic-box__icon icon ri-user-line"></i>
							<div class="iconic-box__content">
								<a href="<?= base_url()?>login" class="iconic-box__content__title iconic-box__content__title--link"><strong style="font-size: 20px;">USER LOGIN</strong></a><br>
								<a href="<?= base_url()?>sign_up" style="font-size: 10px;" class="iconic-box__content__subtitle link-secondary">Not a member? Sign up!</a>
							</div>
						</div>
                <?php endif; ?>

				<?php
						$this->load->library('session');
						$user_type = $this->session->userdata('user_type');
						if ($user_type === 'super_admin' || $user_type === 'user'):
				?>
						<div class="header__iconic-box iconic-box">
							<div class="iconic-box__content">
								<a href="<?= base_url('cart')?>" class="iconic-box__content__title iconic-box__content__title--link">
									<img style="height: 47px;" src="<?=base_url('uploads/cart.png')?>" alt="">
									<strong style="font-size: 20px;margin: 5px;">View Cart</strong>
								</a>
							</div>
						</div>
				<?php endif; ?>
		</div>
</div>

