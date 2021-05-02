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
                            <h4 class="card-title">Office Information</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('contact.us') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        @php
                                            $corporate_office = json_decode($contactus->corporate_office);
                                        @endphp
                                        <h4 class="card-title">Corporate Office Address</h4>
                                        <div class="form-group">
                                            <label>Office Name</label>
                                            <input name="c_name" type="text" class="form-control" value="{{ $corporate_office->c_name }}" />
                                        </div>
                                        <div class="form-group">
                                            <label>Office Address</label>
                                            <input name="c_address" type="text" class="form-control" value="{{ $corporate_office->c_address }}" />
                                        </div>
                                        <div class="form-group">
                                            <label>Office Phone</label>
                                            <input name="c_phone" type="text" class="form-control" value="{{ $corporate_office->c_phone }}" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-md-12">Contact Number</label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="c_cell1" type="text" class="form-control" value="{{ $corporate_office->c_cell1 }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="c_cell2" type="text" class="form-control" value="{{ $corporate_office->c_cell2 }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-md-12">Contact E-mail</label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="c_email1" type="text" class="form-control" value="{{ $corporate_office->c_email1 }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="c_email2" type="text" class="form-control" value="{{ $corporate_office->c_email2 }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        @php
                                            $dhaka1_office = json_decode($contactus->dhaka1_office);
                                        @endphp
                                        <h4 class="card-title">Dhaka Office-01</h4>
                                        <div class="form-group">
                                            <label>Office Name</label>
                                            <input name="d1_name" type="text" class="form-control" value="{{ $dhaka1_office->d1_name }}" />
                                        </div>
                                        <div class="form-group">
                                            <label>Office Address</label>
                                            <input name="d1_address" type="text" class="form-control" value="{{ $dhaka1_office->d1_address }}" />
                                        </div>                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-md-12">Contact Number</label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="d1_cell1" type="text" class="form-control" value="{{ $dhaka1_office->d1_cell1 }}" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="d1_cell2" type="text" class="form-control" value="{{ $dhaka1_office->d1_cell2 }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-md-12">Contact E-mail</label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="d1_email1" type="text" class="form-control" value="{{ $dhaka1_office->d1_email1 }}" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="d1_email2" type="text" class="form-control" value="{{ $dhaka1_office->d1_email2 }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        @php
                                            $dhaka2_office = json_decode($contactus->dhaka2_office);
                                        @endphp
                                        <h4 class="card-title">Dhaka Office-02</h4>
                                        <div class="form-group">
                                            <label>Office Name</label>
                                            <input name="d2_name" type="text" class="form-control" value="{{ $dhaka2_office->d2_name }}" />
                                        </div>
                                        <div class="form-group">
                                            <label>Office Address</label>
                                            <input name="d2_address" type="text" class="form-control" value="{{ $dhaka2_office->d2_address }}" />
                                        </div>                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-md-12">Contact Number</label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="d2_cell1" type="text" class="form-control" value="{{ $dhaka2_office->d2_cell1 }}" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="d2_cell2" type="text" class="form-control" value="{{ $dhaka2_office->d2_cell2 }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-md-12">Contact E-mail</label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="d2_email1" type="text" class="form-control" value="{{ $dhaka2_office->d2_email1 }}" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="d2_email2" type="text" class="form-control" value="{{ $dhaka2_office->d2_email2 }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        @php
                                            $training_center1 = json_decode($contactus->training_center1);
                                        @endphp
                                        <h4 class="card-title">Training Center-01</h4>
                                        <div class="form-group">
                                            <label>Center Name</label>
                                            <input name="tc1_name" type="text" class="form-control" value="{{ $training_center1->tc1_name }}" />
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input name="tc1_address" type="text" class="form-control" value="{{ $training_center1->tc1_address }}" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="row">                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Mobile</label>
                                                        <input name="tc1_cell" type="text" class="form-control" value="{{ $training_center1->tc1_cell }}" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label>E-mail</label>
                                                        <input name="tc1_email" type="text" class="form-control" value="{{ $training_center1->tc1_email }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        @php
                                            $training_center2 = json_decode($contactus->training_center2);
                                        @endphp
                                        <h4 class="card-title">Training Center-02</h4>
                                        <div class="form-group">
                                            <label>Center Name</label>
                                            <input name="tc2_name" type="text" class="form-control" value="{{ $training_center2->tc2_name }}" />
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input name="tc2_address" type="text" class="form-control" value="{{ $training_center2->tc2_address }}" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="row">                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Mobile</label>
                                                        <input name="tc2_cell" type="text" class="form-control" value="{{ $training_center2->tc2_cell }}" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label>E-mail</label>
                                                        <input name="tc2_email" type="text" class="form-control" value="{{ $training_center2->tc2_email }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <h4 class="card-title">We are open</h4>
                                        <div class="form-group">
                                            <label>Day</label>
                                            <input name="day" type="text" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Time</label>
                                            <input name="time" type="text" class="form-control" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Quotes</label>
                                            <input name="quotes" type="text" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <h4 class="card-title">Google Map Link</h4>
                                        <div class="form-group">
                                            <input name="google_link" type="text" class="form-control" value="{{ $contactus->google_link }}" />
                                        </div>
                                    </div>

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