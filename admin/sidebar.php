<?php
if (isset($_GET['module'])){   
?>
<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
	<li <?php echo $_GET['module'] == 'dashboard' ? 'class="active"' : ''; ?> >
		<a href="main.php?module=dashboard"><i class="icon-chevron-right"></i> Dashboard</a>
	</li>
	<li <?php echo $_GET['module'] == 'user' ? 'class="active"' : ''; ?> >
		<a href="main.php?module=user"><i class="icon-chevron-right"></i>Kelola User Account</a>
	</li>
	<li <?php echo $_GET['module'] == 'hotel' ? 'class="active"' : ''; ?> >
		<a href="main.php?module=hotel"><i class="icon-chevron-right"></i>Kelola Hotel</a>
	</li>
	<li <?php echo $_GET['module'] == 'kategori_hotel' ? 'class="active"' : ''; ?> >
		<a href="main.php?module=kategori_hotel"><i class="icon-chevron-right"></i>Kelola Kategori Hotel</a>
	</li>
	<li <?php echo $_GET['module'] == 'jenis_hotel' ? 'class="active"' : ''; ?> >
		<a href="main.php?module=jenis_hotel"><i class="icon-chevron-right"></i>Kelola Jenis Hotel</a>
	</li>
	<li <?php echo $_GET['module'] == 'jaringan_hotel' ? 'class="active"' : ''; ?> >
		<a href="main.php?module=jaringan_hotel"><i class="icon-chevron-right"></i>Kelola Jaringan Hotel</a>
	</li>
	<li <?php echo $_GET['module'] == 'kecamatan' ? 'class="active"' : ''; ?> >
		<a href="main.php?module=kecamatan"><i class="icon-chevron-right"></i>Kelola Kecamatan</a>
	</li>
	<li <?php echo $_GET['module'] == 'kelurahan' ? 'class="active"' : ''; ?> >
		<a href="main.php?module=kelurahan"><i class="icon-chevron-right"></i>Kelola Kelurahan</a>
	</li>
</ul>
<?php
}
?>