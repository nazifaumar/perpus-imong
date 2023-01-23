<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">

	<title>User</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">User</span>
				</a>
			</li>

			<li>
				<a href="#">
					<i class='bx bxs-book' ></i>
					<span class="text">Book</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-category' ></i>
					<span class="text">Category</span>
				</a>
			</li>

            <li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Users</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>User's Data</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>No</th>
								<th>Name</th>
                                <th>Email</th>
								<th>Address</th>
								<th>No Handphone</th>
								<th>Action</th>
							</tr>
						</thead>
						@foreach ($user as $item)
						<tbody>
							<tr>
								<th>{{ $item->id }}</th>
								<td class="data-title">{{ $item->name }} </td>
								<td class="data-title">{{ $item->email }}</td>
								<td class="data-title">{{ $item->address }} </td>
								<td class="data-title">{{ $item->tlp }} </td>
								<td><span class="status completed">Delete</span></td>
							</tr>
							</tr>
						</tbody>
						@endforeach
					</table>
				</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>