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
                <div class="col-md-12">
                    @include('validate')
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-uppercase">Security Services LIST <a class="btn btn-sm btn-info pull-right" data-toggle="modal" href="#add_fsservice_modal">Add Service</a></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Sub-Title</th>
                                            <th>Photo</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($all_data as $data)
                                        <tr>
                                            <td>{{ $loop -> index + 1 }}</td>
                                            <td>{{ $data -> title }}</td>
                                            <td>{{ $data -> sub_title }}</td>
                                            <td>
                                                <img style="width: 160px; height: 60px; border-radius: 4px;" src="{{ URL::to('/') }}/media/fsservice/{{ $data -> photo }}" alt="">
                                            </td>
                                            <td>{{ $data -> photo_name }}</td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input status_id="{{ $data->id }}" type="checkbox" id="fsservice_status_{{ $loop-> index + 1 }}" class="check fsservice_switcher" {{ $data->status == true ? 'checked="checked"' : '' }} />
                                                    <label for="fsservice_status_{{ $loop-> index + 1 }}" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                            <td>
                                                <a edit_id="{{ $data->id }}" class="btn btn-sm btn-info edit_fsservice" href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <form class="d-inline" action="{{ route('fsservice.destroy', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button id="post_delete_btn" class="btn btn-sm btn-danger"><i style="color: #fff;" class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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

<!-- Add Security Service Modal -->
<div id="add_fsservice_modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add new service</h4>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('fsservice.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input name="title" class="form-control" type="text" value="{{ old('title') }}">
                    </div>

                    <div class="form-group">
                        <label>Sub-Title</label>
                        <input name="sub_title" class="form-control" type="text" value="{{ old('sub_title') }}">
                    </div>

                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" class="form-control" id="">{{ old('content') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Photo</label>
                        <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="" alt="" id="fsservice_photo_load">
                        <input style="display: none;" id="fsservice_photo" name="photo" type="file">
                        <label for="fsservice_photo"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <input name="photo_name" class="form-control" type="text" value="{{ old('photo_name') }}">
                    </div>

                    <div class="form-group">
                        <input class="btn btn-block btn-info" type="submit" value="Add service">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Security Service Modal -->
<div id="update_fsservice_modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update service</h4>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('fsservice.update', 1) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Title</label>
                        <input name="title" class="form-control" type="text">
                        <input name="id" class="form-control" type="hidden">
                    </div>

                    <div class="form-group">
                        <label>Sub-Title</label>
                        <input name="sub_title" class="form-control" type="text">
                    </div>

                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" class="form-control" id=""></textarea>
                    </div>

                    <div class="form-group">
                        <label>Photo</label>
                        <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="" alt="" id="fsservice_new_photo_load">
                        <input style="display: none;" id="fsservice_new_photo" name="new_photo" class="form-control" type="file">
                        <label for="fsservice_new_photo"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <input name="photo_name" class="form-control" type="text">
                    </div>

                    <div class="form-group">
                        <input class="btn btn-block btn-info" type="submit" value="Update service">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection