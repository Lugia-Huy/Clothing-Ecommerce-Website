<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

	@include('User.layout.header')
</head>
<body class="animsition">
	
	@include('User.layout.navbar_shop')
	
	@include('User.payment')
	
    @include('User.layout.footer')

    @include('User.layout.script')

</body>
</html>