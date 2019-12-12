@extends('layouts.app')

@section('content')
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-fulid mt-1">
            <h2> &nbsp Books</h2> 
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-book"></i> Books</a></li>
                    <li class="active"><i class="fa fa-plus"></i> Add Book</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <!-- --------------------------- section 1------------------------------------- -->
                <section class="col-lg-12 connectedSortable">
 
                    <div class="box box-info">
                        <div class="box-header ">
                           <div class="pull-left header"> <h4> <i class="fa fa-plus"> Add New Books</i></h4></div>
                        </div>

                        <div class="box-body">
                            <form action="#" method="post">
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label for="accessionnumber">Accession Number</label>
                                    <input type="text" class="form-control" name="accessionnumber" placeholder="Accession Number:">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="isbn">ISBN</label>
                                    <input type="text" class="form-control" name="isbn" placeholder="ISBN">
                                </div>

                            </div>
                                
                            <div class="form-row">
                                
                                <div class="form-group col-md-12">
                                    <label for="book_title">Title</label>
                                    <textarea class="form-control" id="book_title" placeholder="Title" rows="2"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="authors">Authors</label>
                                    <textarea class="form-control" id="authors" placeholder="Author" rows="2"></textarea>
                                </div>
                                
                            </div>
                            <hr> <hr>
                            <div class="form-row">

                                <div class="form-group col-md-4">
                                    <label for="book_category">Category</label> &nbsp; &nbsp;
                                    <select class="form-control" id="book_category">
                                    <option>History</option>
                                    <option>Science & Technology</option>
                                    <option>Art & Litreture</option>
                                    <option>Fiction & Translated</option>
                                    <option>Kids & fairy tales</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                <label for="new_category">New Category</label>  &nbsp; &nbsp;
                                <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="language">Language</label>
                                    <select class="form-control" id="language">
                                    <option>Sinhala</option>
                                    <option>English</option>
                                    <option>Tamil</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                <label for="new_language">New Language</label>  &nbsp; &nbsp;
                                <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                                </div>
                                
                            </div>

                            <div class="form-row">
                                
                                <div class="form-group col-md-4">
                                    <label for="publisher">Publisher</label>
                                    <select class="form-control" id="publisher">
                                    <option>Sarasavi</option>
                                    <option>M.D.Gunasena</option>
                                    <option>Rathna</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                <label for="new_publisher">New Publisher</label>  &nbsp; &nbsp;
                                <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="phymedium">Physical Medium</label>
                                    <select class="form-control" id="phymedium">
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                <label for="new_phymedium">New Physical Medium</label> 
                                <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                                </div>

                            </div>

                            <div class="form-row">


                            <div class="form-group col-md-4">
                                    <label for="dewey_decimal">Dewey Decimal Classification</label>
                                    <select class="form-control" id="dewey_decimal">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                <label for="new_dewey_decimal"> New DDC </label> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                                <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <label for="purchase_date" >Purchase Date</label>
                                    <input class="form-control" type="date" value="2019-12-01" id="purchase_date">
                                </div>
                                <div class="form-group col-md-2"></div>
                              
                            </div>

                            <div class="form-row">
                                
                                <div class="form-group col-md-4">
                                    <label for="edition">Edition</label>
                                    <select class="form-control" id="edition">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2"></div>
                                <div class="form-group col-md-4">
                                    <label for="price">Price</label>
                                    <input type="value" class="form-control" name="price" placeholder="Price:">
                                </div>


                            </div>
                            <div class="form-row">

                            <div class="form-group col-md-4">
                                    <label for="publishyear">Publication year</label>
                                    <input class="form-control" type="month" value="2019-01" id="purchasedate">
                                </div>
                                <div class="form-group col-md-2"></div>
                                <div class="form-group col-md-4">
                                    <label for="phy_details">Physical Details</label>
                                    <input type="text" class="form-control" name="phydetails" placeholder="Physical Details">
                                </div>
                                </div>
                                <div class="form-row">
                                <div class="form-group col-md-4">
                                <label for="rackno">Rack No</label>
                                    <select class="form-control" id="rackno">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2"></div>
                                <div class="form-group col-md-4">
                                <label for="rowno">Row No</label>
                                    <select class="form-control" id="rowno">
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                    <option>E</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="note">Note</label>
                                    <textarea class="form-control" id="note" placeholder="Note" rows="3"></textarea>
                                </div>

                            </div>

                            <div class="form-row">
                                
                                <div class="form-group col-md-12">
                                <label for="br_qr_code">BarCode Or QRCode</label>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="bar_code"> BarCode
                                        </label> 
                                        &nbsp;
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="qr_code"> QRCode
                                        </label>
                                        &nbsp;  &nbsp;
                                        <button type="button" class="btn btn-info btn-lg" id="generate_code">Generate
                                        <i class="fa fa-barcode"></i></button>
                                        

                                </div>
                                <div class="form-group col-md-12"> </div>
                               
                                <div class="form-group col-md-6">
                                    <textarea class="form-control" id="bar_Qr_code" rows="4"></textarea>
                                </div>
                                <div class="form-group col-md-2">
                                &nbsp; &nbsp;&nbsp; 
                                <button type="button" class="btn btn-light"><label for="advancedgen"><i class="fa fa-cog"></i> Advanced Generate </label></button>
                                </div>
                            </div>

                                

                            </div>
                            
                            </form>
                        </div>
                        
                        <div class="box-footer clearfix pull-right">
                                <button type="button" class="btn btn-primary btn-md" id="save_book">
                                <i class="fa fa-floppy-o"></i> Save</button>
                                &nbsp; &nbsp;
                                <button type="button" class="btn btn-warning btn-md" id="reset_book">
                                <i class="fa fa-times"></i> Reset</button>
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
