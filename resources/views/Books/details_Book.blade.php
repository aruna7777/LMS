@extends('layouts.app')

@section('content')
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-fulid mt-1">
            <h2> &nbsp Details</h2> 
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href=""><i class="fa fa-book"></i> Books</a></li>
                    <li class="active"><i class="fa fa-info-circle"></i> Details Book</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <!-- --------------------------- section 1------------------------------------- -->
                <section class="col-lg-12 connectedSortable">
 
                    <div class="box box-info">
                        <div class="box-header ">
                           <div class="pull-left header"> <h4> <i class="fa fa-info-circle"></i> Details Books</i></h4></div>
                        </div>

                        <div class="box-body">
                            <form action="#" method="post">
                            <div class="form-row">

                                <div class="form-group col-md-12">
                                <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Category</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Language</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Publisher</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Physical Medium</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Dewey Decimal</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Rack No</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Row No</a>
                                </li>
                              </ul>
                              <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                
                                <div class="form-group col-md-6">
                                  <br><br>
                                  <hr>
                                    <label for="authors">Category</label>
                                    <input type="text" class="form-control" name="accessionnumber" placeholder="Enter Your New Category:"> <br>
                                    
                                    <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</button>
                                </div>
                                </div>
                                
                                
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="form-group col-md-6">
                                  <br><br>
                                  <hr>
                                    <label for="authors">Category</label>
                                    <input type="text" class="form-control" name="accessionnumber" placeholder="Enter Your New Category:"> <br>
                                    
                                    <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</button>
                                </div>
                                </div>
                                </div>
                                
                                
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                
                                </div>
                              </div>
                                </div>
                                
                                <div class="form-row">
                                
                                
                                </div>

                            </div> 
                            </div>
                            
                            </form>
                        </div>
                 

                    </div>
                   
                    <!-- --------------------------end section1----------------------------------------------- -->

                </section>



            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
@endsection
