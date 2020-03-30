@extends('layouts.master-blank')

@section('content')
{{-- <style type="text/css">
    .card {
        background: none;
    }

    .form-control {
        background: none;
    }

    .login h1 {
        color: #fff;
        text-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        letter-spacing: 1px;
        text-align: center;
    }

    input {
        width: 100%;
        margin-bottom: 10px;
        background: rgba(0, 0, 0, 0.3);
        border: none;
        outline: none;
        padding: 10px;
        font-size: 15px;
        color: #fff;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
        border: 1px solid rgba(0, 0, 0, 0.3);
        border-radius: 4px;
        box-shadow: inset 0 -5px 45px rgba(100, 100, 100, 0.2), 0 1px 1px rgba(255, 255, 255, 0.2);
        -webkit-transition: box-shadow .5s ease;
        -moz-transition: box-shadow .5s ease;
        -o-transition: box-shadow .5s ease;
        -ms-transition: box-shadow .5s ease;
        transition: box-shadow .5s ease;
    }

    input:focus {
        box-shadow: inset 0 -5px 45px rgba(100, 100, 100, 0.4), 0 1px 1px rgba(255, 255, 255, 0.2);
    }
</style> --}}
<!-- Begin page -->
<div class="account-pages my-5 pt-5 overflow-hidden">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary">
                        <div class="text-primary text-center p-4">
                            <h5 class="text-white font-size-20">Silahkan Login Untuk Melanjutkan</h5>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="p-3">
                            <form class="form-horizontal mt-4" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Nama Pengguna</label>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                                        name="username" value="{{ old('username') }}" placeholder="Masukkan Nama Pengguna"
                                        required="required" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="userpassword">Kata Sandi</label>
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Masukkan Kata Sandi" required="required">
                                </div>
                                <div class="float-right text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log
                                        In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <p class="mb-0">© <script>
                            document.write(new Date().getFullYear())
                        </script> PT Wibu BUSUK
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="accountbg"></div>
<div class="wrapper-page account-page-full">
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <img src="{{ URL::asset('assets/images/logoit2.png') }}" height="82" alt="logo">
</div>
<div class="p-3">
    <h1 class="font-25 m-b-5 text-center">
        <font color="white">Silakan Login</font>
    </h1>
    @if (session('info'))
    <div class="p-3 mb-2 bg-success text-white" align="center">
        {{ session('info') }}
    </div>
    @endif

    @if (session('alert'))
    <div class="p-3 mb-2 bg-danger text-white" align="center">
        {{ session('alert') }}
    </div>
    @endif

    <form class="form-horizontal m-t-30" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="username">
                <font color="white">Username</font>
            </label>
            <input type="text" class="@error('username') is-invalid @enderror" name="username"
                value="{{ old('username') }}" placeholder="Masukkan Username Anda" required="required" autofocus="" />
            <input type="password" name="password" class="@error('password') is-invalid @enderror"
                placeholder="Masukkan Password Anda" required="required" />
        </div>

        <div class="form-group">
            <label for="userpassword">
                <font color="white">Password</font>
            </label>
            <input type="password" name="password" class="@error('password') is-invalid @enderror"
                placeholder="Masukkan Password Anda" required="required" />
        </div>

        <div class="form-group row m-t-20">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary w-md waves-effect waves-light" style="width: 350px">Log
                    In</button>
            </div>
        </div>
        <div class="m-t-40 text-center">
            <p></p>
            <font color="white">
                <p>© {{date('Y')}} IT Online Training Registration<br>PT. Wibu.</p>
            </font>
        </div>
    </form>
</div>

</div>
</div>

</div> --}}
<!-- end wrapper-page -->
@endsection

@section('script')
@if (session('info'))
<script type="text/javascript">
    $(document).ready(function() {
    iziToast.info({
        title: 'Info',
        position: 'topRight',
        message: '{{ session('info') }}',});
    });
</script>
@endif

@if (session('alert'))
<script type="text/javascript">
    $(document).ready(function() {
    iziToast.error({
        title: 'Error',
        position: 'topRight',
        message: '{{ session('alert') }}',});
    });
</script>
@endif
@endsection