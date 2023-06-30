<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css') ?>">
</head>

<body>


	<nav class="nav bg-dark mb-3">
		<a class="nav-link text-white text-decoration-none" href="<?php echo base_url('index.php/customers') ?>">Customers</a>
		<a class="nav-link text-white text-decoration-none" href="<?php echo base_url('index.php/employees') ?>">Employees</a>
		<a class="nav-link text-white text-decoration-none" href="<?php echo base_url('index.php/offices') ?>">Offices</a>
		<a class="nav-link text-white text-decoration-none" href="<?php echo base_url('index.php/orderdetails') ?>">Order Details</a>
		<a class="nav-link text-white text-decoration-none" href="<?php echo base_url('index.php/orders') ?>">Orders</a>
		<a class="nav-link text-white text-decoration-none" href="<?php echo base_url('index.php/payments') ?>">Payments</a>
		<a class="nav-link text-white text-decoration-none" href="<?php echo base_url('index.php/productlines') ?>">Product Lines</a>
		<a class="nav-link text-white text-decoration-none" href="<?php echo base_url('index.php/products') ?>">Products</a>
	</nav>


	<script src="<?php echo base_url('assets/bootstrap.bundle.min.js.download') ?>"></script>
</body>

</html>