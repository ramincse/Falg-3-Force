@extends('frontend.layouts.app')
@section('page-title', 'Clients')
@section('main-content')
<!-- END MAIN CONTENT -->
<div class="main_content">
    <!-- START SECTION Clients -->
    <div class="section pb_20 small_pt">
        <div class="container px-2">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="text-center">
                        <h2 style="font-size: 24px; text-transform: uppercase;" class="mb-5">Featured Clients</h2>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                @foreach($all_clients as $clients)
                <div class="col-md-3">
                    <div class="sale_banner">
                        <a class="hover_effect1" href="#">
                            <img style="width: 100%; height: 200px;" src="{{ URL::to('/') }}/media/clients/{{ $clients->photo }}" alt="" />
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->
@endsection