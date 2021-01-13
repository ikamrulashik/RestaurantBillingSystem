
<style>
</style>
<nav id="sidebar" class='mx-lt-5 bg-dark' >
		<div class="sidebar-list">
				<a href="home.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Dashboard</a>
				<a href="home.php?page=inventory" class="nav-item nav-inventory"><span class='icon-field'><i class="fad fa-inventory"></i></span> Inventory</a>
				<a href="home.php?page=categories" class="nav-item nav-categories"><span class='icon-field'><i class="fa fa-list"></i></span> Category</a>
				<a href="home.php?page=product" class="nav-item nav-product"><span class='icon-field'><i class="fa fa-boxes"></i></span> Product</a>
				<a href="home.php?page=billing" class="nav-item nav-billing"><span class='icon-field'><i class="fa fa-truck-loading"></i></span> Billing</a>
				<a href="home.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
	<style>
		.nav-item{
			display: none!important;
		}
		.nav-sales ,.nav-home ,.nav-inventory{
			display: block!important;
		}
	</style>
<?php endif ?>