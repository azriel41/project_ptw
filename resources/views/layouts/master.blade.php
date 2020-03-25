<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Project PTW</title>
    <meta content="Admin Dashboard" name="description" />
    @include('layouts.head')
</head>

<body>
    <div id="wrapper">
        <div id="wait"
            style="display:none;width:69px;height:89px;border:1px solid black;position:absolute;top:50%;left:50%;padding:2px;">
            <img src='{{ asset('/assets/images/loading.gif') }}' width="64" height="64" /><br>Loading..</div>
        @include('layouts.header')
        @include('layouts.sidebar')
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    @include('layouts.settings')
                    @yield('content')
                </div>
            </div>
        </div>
        @include('layouts.footer')
        @include('layouts.footer-script')
    </div>
</body>

</html>