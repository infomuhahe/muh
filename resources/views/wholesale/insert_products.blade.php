@extends('wholesale.layouts.master2')
@section('content')

<div id="wrapper">

    @include('wholesale.inc.sidebar')

        <div id="page-wrapper">
        <h3></h3>
            <div class="container-fluid">
            <form method="post" class="form-horizontal" enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="col-md-2 control-label">Select Category </label>
                        <div class="col-md-4">
                            <select name="cat" class="form-control">
                                <option> Select a Category </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Name </label>
                        <div class="col-md-4">
                            <input name="product_name" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Code </label>
                        <div class="col-md-4">
                            <input name="product_code" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Color </label>
                        <div class="col-md-4">
                            <input name="product_code" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Description </label>
                        <div class="col-md-4">
                            <textarea name="product_description" cols="19" rows="6" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Price </label>
                        <div class="col-md-4">
                            <input name="product_price" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Image upload </label>
                        <div class="col-md-4">
                            <input name="product_price" type="file" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>
                        <div class="col-md-2">
                            <input name="submit" value="Add new Product" type="submit" class="btn btn-primary form-control">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


