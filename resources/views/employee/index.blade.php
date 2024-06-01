@extends('layouts.app')

@section('content')
  
    <!-- /.content-header -->

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Employee Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Employee Management</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="card card-primary"  style="margin-left:250px; margin-right:250px;">

              <div  class="bg bg-warning card-header " >
                <h3  class="card-title">Add New employee</h3>
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  class="bg bg-secondary"style="padding:20px; " method="POST" action="save">
            
              <!-- /.card-header -->
              <!-- form start -->
              <form  style="padding:20px; " method="POST" action="save">

              @csrf
                <div   style="margin-left:50px; margin-right:50px;" class="form-row -flex">
                <div class="col-md-4 mb-5">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="text" class="form-control @error('lname') is-invalid @enderror" required autocomplete="lname" id="exampleInputPassword1" name="lname">
                
                    @if ($errors->has('lname'))
                                    <span class="">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                  </div>
                  <div class="col-md-4 mb-5">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="fname">
                  </div>
          
                  <div class="col-md-4 mb-5">
                    <label for="exampleInputPassword1">Middle Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="mname">
                  </div>
                  <div class="col-md-4 mb-5">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="address" >
                  </div>

                  <div class="col-md-4 mb-5">

                  <label for="exampleInputPassword1">Country</label>


                  <select class="custom-select form-control-border" id="exampleSelectBorder" name="country"  placeholder="Please select your Country">
                    <option>Please select your Country</option>
                    <option>andrei</option>
                    <option>Value 3</option>
                  </select>

                  </div>


                  <div class="col-md-4 mb-4">

                  <label for="exampleInputPassword1">State</label>


                  <select class="custom-select form-control-border" id="exampleSelectBorder"  name="state" placeholder="Please select your State">
                    <option>Please select your State</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                  </select>

                  </div>


                  <div class="col-md-4 mb-4">

                  <label for="exampleInputPassword1">City</label>


                  <select class="custom-select form-control-border" id="exampleSelectBorder" name="city"   placeholder="Please select your City">
                    <option>Please select your City</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                  </select>

                  </div> 

                  <div class="col-md-4 mb-4">
                    <label for="exampleInputPassword1">Zip</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="zip">
                  </div>

                  
                  <div class="col-md-4 mb-4">
                    <label for="exampleInputPassword1">Birthday</label>
                    <input type="Date" class="form-control" id="exampleInputPassword1" name="bday">
                  </div>


                  <div class="col-md-4 mb-4">
                    <label for="exampleInputPassword1">Hired Date</label>
                    <input type="Date"  class="form-control" id="exampleInputPassword1" name="hdate">
                  </div>



                  
                  <div class="col-md-4 mb-4">

                  <label for="exampleInputPassword1">Department</label>


                  <select class="custom-select form-control-border" id="exampleSelectBorder" name="department"  placeholder="General Management">
                    <option>General Management</option>
                    <option>IT</option>
                    <option>HM</option>

                  </select>

                  </div>


                  

                  




                  







                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Submit</button>
                </div>
              </form>
            </div>
    <!-- /.content -->
@endsection