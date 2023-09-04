@include('layouts.header')
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->

        <div class="col-lg-8">
            @yield('content')
        </div>
        <div class="col-lg-4">
            <!-- Side widgets-->
            @section('sidebar')
                @include('layouts.sidebar')
            @show
        </div>
    </div>
</div>
@include('layouts.footer')
