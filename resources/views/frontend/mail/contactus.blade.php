<!DOCTYPE html>
<html>
<head>
	<title>Contact Us Email</title>
	<!-- <link rel="icon" href="{{ route('home') }}/images/favicon.ico" type="image/gif"> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ url('/') }}/print.css"> -->
    <!-- <link rel="stylesheet" href="{{ asset('fontawesome/css/font-awesome.min.css') }}"> -->
    <!-- <script src="{{ url('/') }}/jquery.js"></script> -->
</head>
<body>
	<p>
		<strong>Sender Name: </strong> {{ $name }}
	</p>

	<p>
		<strong>Sender Email: </strong> {{ $email }}
	</p>

	<p>
		<strong>Sender Phone: </strong> {{ $phone }}
	</p>

	<p>
		<strong>Messege Body: </strong> <br> {{ $userMessage }}
		
	</p>
</body>
</html>