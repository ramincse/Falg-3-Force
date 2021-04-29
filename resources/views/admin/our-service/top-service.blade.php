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
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Our Services Form</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('top.service') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Title</label>
                                    <input name="title" type="text" class="form-control" value="{{ $all_data->title }}" />
                                </div>

                                <div class="form-group">
                                    <label>Photo</label>
                                    <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="{{ URL::to('/') }}/media/our_service/top/{{ $all_data->top_photo }}" alt="" id="top_service_photo_load">
                                    <input style="display: none;" id="top_service_photo" name="new_photo" class="form-control" type="file">
                                    <label for="top_service_photo"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                                </div>

                                @php
                                $service_photo = json_decode($all_data->service_photo);
                                @endphp                               
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Picture-01</label>
                                            <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="{{ URL::to('/') }}/media/our_service/{{$service_photo->photo1}}" alt="" id="topser_piture1_load">
                                            <input style="display: none;" id="topser_piture1" name="photo1" class="form-control" type="file">
                                            <label for="topser_piture1"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Picture-02</label>
                                            <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="{{ URL::to('/') }}/media/our_service/{{$service_photo->photo2}}" alt="" id="topser_piture2_load">
                                            <input style="display: none;" id="topser_piture2" name="photo2" class="form-control" type="file">
                                            <label for="topser_piture2"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Picture-03</label>
                                            <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="{{ URL::to('/') }}/media/our_service/{{$service_photo->photo3}}" alt="" id="topser_piture3_load">
                                            <input style="display: none;" id="topser_piture3" name="photo3" class="form-control" type="file">
                                            <label for="topser_piture3"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Picture-04</label>
                                            <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="{{ URL::to('/') }}/media/our_service/{{$service_photo->photo4}}" alt="" id="topser_piture4_load">
                                            <input style="display: none;" id="topser_piture4" name="photo4" class="form-control" type="file">
                                            <label for="topser_piture4"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Picture-05</label>
                                            <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="{{ URL::to('/') }}/media/our_service/{{$service_photo->photo5}}" alt="" id="topser_piture5_load">
                                            <input style="display: none;" id="topser_piture5" name="photo5" class="form-control" type="file">
                                            <label for="topser_piture5"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Picture-06</label>
                                            <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="{{ URL::to('/') }}/media/our_service/{{$service_photo->photo6}}" alt="" id="topser_piture6_load">
                                            <input style="display: none;" id="topser_piture6" name="photo6" class="form-control" type="file">
                                            <label for="topser_piture6"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Picture-07</label>
                                            <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="{{ URL::to('/') }}/media/our_service/{{$service_photo->photo7}}" alt="" id="topser_piture7_load">
                                            <input style="display: none;" id="topser_piture7" name="photo7" class="form-control" type="file">
                                            <label for="topser_piture7"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Picture-08</label>
                                            <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="{{ URL::to('/') }}/media/our_service/{{$service_photo->photo8}}" alt="" id="topser_piture8_load">
                                            <input style="display: none;" id="topser_piture8" name="photo8" class="form-control" type="file">
                                            <label for="topser_piture8"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Save</button>
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
@section('javascript')
<script>
    function readURL(en) {
        if (en.files && en.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#our_photo_load')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(en.files[0]);
        }
    }
    //alert();
</script>
@stop
@endsection