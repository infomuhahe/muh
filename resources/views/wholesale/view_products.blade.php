@extends('wholesale.layouts.master2')
@section('content')

<div id="wrapper">

    @include('wholesale.inc.sidebar')

        <div id="page-wrapper">
        <h3></h3>
            <div class="container-fluid">
            <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table  table-bordered  data-table"><!-- table table-striped table-bordered table-hover begin -->

                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> ID</th>
                                <th> Image </th>
                                <th> Name </th>
                                <th> Category </th>
                                <th> Code of Product </th>
                                <th> Color </th>
                                <th> Price </th>
                                <th> Image </th>
                                <th> Add Attribute </th>
                                <th> Action </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->

                        <tbody><!-- tbody begin -->



                            <tr><!-- tr begin -->
                                <td> </td>
                                <td><img src="product_images/" width="60" height="60"></td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td>  <a href="index.php?edit_product">

<i class="fa fa-pencil"></i> Edit

</a></td>
</td>
                            </tr><!-- tr finish -->



                        </tbody><!-- tbody finish -->

                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->




            </div>
        </div>
    </div>
@endsection


