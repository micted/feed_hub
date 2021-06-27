@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            <div class="row">        

                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Google PlayStore Reviews List</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">                    

                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="5%">SL</th>
                                            <th>AppID</th>
                                            <th>UserName</th>
                                            <th>UserImage</th>
                                            <th>Content</th>
                                            <th>ThumbsUp</th>
                                            <th>ReviewCreatedVersion</th>
                                            <th>ReplyContent</th>
                                            <th>Review Date</th>
                                            

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allData as $key => $value )
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td> {{ $value->appId }}</td>
                                            <td> {{ $value->userName }}</td>
                                            <td> <img src="{{ (!empty($value->userImage))? url($value->userImage):url('upload/no_image.jpg') }}" style="width: 60px; width: 60px;"> </td>
                                            <td> {{ $value->content }}</td>
                                            <td> {{ $value->thumbsUpCount }}</td>
                                            <td> {{ $value->reviewCreatedVersion }} </td>
                                            <td> {{ $value->replyContent }}</td>
                                            <td> {{ $value->at }} </td>


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