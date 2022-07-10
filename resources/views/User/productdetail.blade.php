<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">

	@include('User.layout.header')
</head>
<body class="animsition">
	
	@include('User.layout.navbar_shop')
	
	@include('User.detail')

    @include('User.related')
	
    @include('User.layout.footer')

    @include('User.layout.script')

</body>
</html>