@extends('wholesale.layouts.master2')
@section('content')

<div id="wrapper">
    @include('wholesale.inc.sidebar')
        <div id="page-wrapper">
        <h4 style="text-align:center">Update your Profile</h4>
            <div class="container-fluid">
                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-3 control-label"> ID/Passport </label>
                            <div class="col-md-4">
                                <input name="product_img1" type="file" class="form-control" required>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Selfie with Your ID </label>
                            <div class="col-md-4">
                                <input name="product_img1" type="file" class="form-control" required>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Bank Statement </label>
                            <div class="col-md-4">
                                <input name="product_img1" type="file" class="form-control" required>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Government Statement </label>
                            <div class="col-md-4">
                                <input name="product_img1" type="file" class="form-control" required>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Company Certificate </label>
                            <div class="col-md-4">
                                <input name="product_img1" type="file" class="form-control" required>
                            </div>
                    </div>
            </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                            <div class="col-md-2">
                                <input name="submit" value="Save" type="submit" class="btn btn-primary form-control">
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


