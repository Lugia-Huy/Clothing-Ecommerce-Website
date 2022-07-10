<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.header')
</head>

<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        <div class="container-fluid page-body-wrapper">
            @include('admin.navbar')

            <div class="main-panel">
                @include('admin.body')
            </div>
        </div>
    </div>
    @include('admin.script')
</body>

</html>