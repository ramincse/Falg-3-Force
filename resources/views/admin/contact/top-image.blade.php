@extends('admin.layouts.app')
@section('main-content')
<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    @include('admin.layouts.header')
    <!-- /Header -->

    <!-- Sidebar -->
    @include('admin.layouts.menu')
    <!-- /Sidebar -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            @include('admin.layouts.page-header')
            <!-- /Page Header -->
            <div class="row">
            @include('validate')
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Top Image</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('contact.image') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Photo</label>
                                    <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="{{ URL::to('/') }}/media/contact/{{ $top_photo->top_img }}" alt="" id="contop_photo_load">
                                    <input style="display: none;" id="contop_photo" name="photo" type="file">
                                    <label for="contop_photo"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-lg btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- content container-fluid -->
    </div>
    <!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->
@endsection