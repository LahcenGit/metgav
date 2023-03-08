@extends('layouts.front')
@section('content')



<!--=== Start Blog Details Section ===-->
<section class="blog-details-section ptb-100">
    <div class="container">
        <div class="row">
            
                        @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            
        </div>
    </div>
</section>
<!--=== End Blog Details Section ===-->

@endsection
