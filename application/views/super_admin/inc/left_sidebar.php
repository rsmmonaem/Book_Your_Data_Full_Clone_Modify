<?php
//$user_id = $this->session->userdata('user_id');
//$user_info = $this->umm->get_user_modification_id('admin_user',$user_id);
//?>

<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
	<div class="sidebar-header">
		<div class="text-center">
			<img src="<?= base_url()?>assets/home/images/bookyourdata-logo.svg" style="max-height: 118px;" class="img-fluid p-1" alt="logo icon" width="60%">
		</div>
		 <div>
			<h4 class="logo-text">Admin</h4>
		</div>
		<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
		</div>
	</div>
	<!--navigation-->
	<ul class="metismenu" id="menu">
		<li>
			<a href="<?= base_url()?>">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">Visit Site</div>
			</a>
		</li>
		<li>
			<a href="<?= base_url()?>super_admin">
				<div class="parent-icon"><i class='bx bx-home-alt'></i>
				</div>
				<div class="menu-title"> Dashboard </div>
			</a>
		</li>
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">Email</div>
			</a>
			<ul>
				<li> <a href="<?= base_url()?>super_admin/add_email"><i class='bx bx-radio-circle'></i>Add New Email</a></li>
				<li> <a href="<?= base_url()?>super_admin/email_list_content"><i class='bx bx-radio-circle'></i>Email List</a></li>
			</ul>
		</li>
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">Email Include</div>
			</a>
			<ul>
				<li> <a href="<?= base_url()?>super_admin/add_job_function"><i class='bx bx-radio-circle'></i>Add Job Function</a></li>
				<li> <a href="<?= base_url()?>super_admin/job_function_list_content"><i class='bx bx-radio-circle'></i>Job Function List</a></li>
			</ul>
		</li>
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">Order Management</div>
			</a>
			<ul>
				<li> <a href="<?= base_url()?>super_admin/all_orders"><i class='bx bx-radio-circle'></i>All Orders</a></li>
			</ul>
		</li>
		<li>
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">Package</div>
			</a>
			<ul>
				<li> <a href="<?= base_url()?>super_admin/add_package"><i class='bx bx-radio-circle'></i>Add Package</a></li>
				<li> <a href="<?= base_url()?>super_admin/package_list"><i class='bx bx-radio-circle'></i>All Package</a></li>
			</ul>
		</li>
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">SEO For Page</div>
			</a>
			<ul>
				<li> <a href="<?= base_url()?>super_admin/add_page_for_seo"><i class='bx bx-radio-circle'></i>Add Page For SEO</a></li>
				<li> <a href="<?= base_url()?>super_admin/page_for_seo_list"><i class='bx bx-radio-circle'></i>Lists</a></li>

			</ul>
		</li>
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">Footer</div>
			</a>
			<ul>
				<div class="menu-title">Footer Link</div>
				<li> <a href="<?= base_url()?>super_admin/add_footer_link"><i class='bx bx-radio-circle'></i>Add Footer Link</a></li>
				<li> <a href="<?= base_url()?>super_admin/list_footer_link"><i class='bx bx-radio-circle'></i>Lists</a></li>
			</ul>
			<ul>
				<div class="menu-title">Footer Address</div>
				<li> <a href="<?= base_url()?>super_admin/add_footer_address"><i class='bx bx-radio-circle'></i>Add Footer Address</a></li>
				<li> <a href="<?= base_url()?>super_admin/list_footer_address"><i class='bx bx-radio-circle'></i>Lists</a></li>
			</ul>
		</li>
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">User Management</div>
			</a>
			<ul>

				<li> <a href="<?= base_url()?>super_admin/update_profile"><i class='bx bx-radio-circle'></i>My Profile</a></li>
			</ul>
		</li>
	</ul>
	<!--end navigation-->
</div>
<!--end sidebar wrapper -->


