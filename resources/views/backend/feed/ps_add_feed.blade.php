@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->

        <section class="content">

            <!-- Basic Forms -->
            <div class="box">

                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">

                        

                            <form method="post" action="{{ route('feed.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">



                                        <div class="row">
                                            <!-- 1st Row -->

                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Your Name <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="name" class="form-control" required="">
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->


                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>App Name <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="appname" class="form-control" required="">
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->


                                        </div> <!-- End 1stRow -->





                                        <div class="row">
                                            <!-- 5TH Row -->


                                           




                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Profile Image <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="file" name="image" class="form-control" id="image">
                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->


                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <div class="controls">
                                                        <img id="showImage" src="{{ url('upload/no_image.jpg') }}" style="width: 100px; width: 100px; border: 1px solid #000000;">

                                                    </div>
                                                </div>

                                            </div> <!-- End Col md 4 -->


                                        </div> <!-- End 5TH Row -->


                                        <div class="row">

                                            <div class="form-group">

                                                <label for="content">Content</label>

                                                <textarea name="content" id="content" cols="45" rows="5" class="form-control" required=""></textarea>

                                            </div>

                                        </div>




                                        <div class="text-xs-right">
                                            <input type="submit" class="btn btn-rounded btn-success mb-5" value="Submit">
                                        </div>
                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>





    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>



@endsection