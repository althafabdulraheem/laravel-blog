<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="{{ asset('assets/admin/img/favicon.ico') }}" type="image/x-icon"> <!-- Favicon-->
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		

		<title>Admin</title>

		@include('layouts.includes.admin.head')
		@section('styles')
		<style>
			 .spanBorder {
				background-color: #006280;
				padding: 12px;
				text-align: center;
				color: white;
				border-radius: 15px;
				border: 2px solid #ffffff;
			 }
		
		* {
		box-sizing: border-box;
		}

		/* Add a gray background color with some padding */
		body {
		font-family: Arial;
		padding: 20px;
		background: #f1f1f1;
		}

		/* Header/Blog Title */
		.header {
		padding: 30px;
		font-size: 40px;
		text-align: center;
		background: white;
		}

		/* Create two unequal columns that floats next to each other */
		/* Left column */
		.leftcolumn {   
		float: left;
		width: 75%;
		}

		/* Right column */
		.rightcolumn {
		float: left;
		width: 25%;
		padding-left: 20px;
		}

		/* Fake image */
		.fakeimg {
		background-color: #aaa;
		width: 100%;
		padding: 20px;
		}

		/* Add a card effect for articles */
		.card {
		background-color: white;
		padding: 20px;
		margin-top: 20px;
		}

		/* Clear floats after the columns */
		.row:after {
		content: "";
		display: table;
		clear: both;
		}

		/* Footer */
		.footer {
		padding: 20px;
		text-align: center;
		background: #ddd;
		margin-top: 20px;
		}

		/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 800px) {
		.leftcolumn, .rightcolumn {   
			width: 100%;
			padding: 0;
		}
		}

		</style>
	</head>
	
	<body class="layout-1" data-luno="theme-blue">
		
		@include('layouts.includes.admin.sidebar')
		 
		 	
		<div class="wrapper">
			
			@include('layouts.includes.admin.header')

			@yield('content')


		</div>

		
		<script src="{{ asset('assets/admin/js/theme.js') }}"></script>
		<script src="{{ asset('assets/admin/js/bundle/dataTables.bundle.js') }}"></script>
	
		@yield('scripts')

	</body>

</html>