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
                                <th> Name </th>
                                <th> Code </th>
                                <th> Color </th>
                                <th>Description </th>
                                <th> Price </th>
                                <th> Image </th>
                                <th> Action </th>

                            </tr>
                        </thead>

                        <tbody>


                                <tr><!-- tr begin -->
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                        <td> <a href="index.php?edit_product"><i class="fa fa-pencil"></i> Edit</a><a href="index.php?edit_product"><i class="fa fa-pencil"></i> Delete</a></td>
                                </tr><!-- tr finish -->

                        </tbody><!-- tbody finish -->

                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->




            </div>
        </div>
    </div>
@endsection


