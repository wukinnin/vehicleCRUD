<!DOCTYPE html>
<html>
<head>
    <title>Vehicle List</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}"><!-- located at public\bootstrap\css-->
    @livewireStyles
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Vehicle List</h2>
                    </div>

                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                        @livewire('posts')
                    </div>
                </div>
            </div>
        </div>
    </div>

    @livewireScripts
</body>
</html>
