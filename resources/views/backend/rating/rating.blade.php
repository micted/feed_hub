@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            <div class="row">


                <!-- TABLE -->

                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Google PlayStore Ratings</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">

                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="5%">SL</th>
                                            <th>App</th>
                                            <th>Category</th>
                                            <th>Rating</th>
                                            <th>Size</th>
                                            <th>Installs</th>
                                            <th>Type</th>
                                            <th>Content Rating</th>
                                            <th>Last Updated</th>
                                            <th>Current Ver</th>
                                            <th>Android Ver</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allData as $key => $value )
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td> {{ $value->App }}</td>
                                            <td> {{ $value->Category }}</td>
                                            <td> {{ $value->Rating }} </td>
                                            <td> {{ $value->Size }}</td>
                                            <td> {{ round($value->Installs) }} </td>
                                            <td> {{ $value->Type }} </td>
                                            <td> {{ $value->Content_Rating }} </td>
                                            <td> {{ $value->Last_Updated }} </td>
                                            <td> {{ $value->Current_Ver }} </td>
                                            <td> {{ $value->Android_Ver }} </td>



                                        </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>

                                    </tfoot>
                                </table>


                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>
</div>





@endsection