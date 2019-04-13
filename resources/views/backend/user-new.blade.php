 @extends('backend/admin-layout')
@section('backend/admin-content')

            <!-- MAIN CONTENT-->

                        <div class="row">
                            <div class="col-sm-12">
                               
                                
                        @if(Session::has('msg'))
                                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                    {{Session::get('msg')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                        @endif

                               
                              
                               





                                <div class="card">
                                    <div class="card-header"></div>
                                    <div class="card-body">

                             

        <form action="{{url('/admin/user-insert')}}" method="POST">
                {{csrf_field()}}
             <input type="text" name="fname" class="form-control" placeholder="Enter your first name"><br>
             <input type="text" name="lname" class="form-control" placeholder="Enter your last name"><br>

             @if($errors->has('email'))
                <div class="alert alert-danger">
                    {{ $errors->first('email') }}
                </div>
             <br>
             @endif

             <input type="text" name="email" class="form-control" placeholder="Enter your email address"><br>

             @if($errors->has('password'))
                <div class="alert alert-danger">
                    {{ $errors->first('password') }}
                </div>
             <br>
             @endif

             <input type="password" name="password" class="form-control" placeholder="Create a strong password"><br>
             <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password"><br>

             @if($errors->has('dob'))
                <div class="alert alert-danger">
                    {{ $errors->first('dob') }}
                </div>
             <br>
             @endif
             
             <input type="date" name="dob" class="form-control"><br>
             <select class="form-control" name="status" >
                 <option value="Active" >Active</option>
                 <option value="Inactive" >Inactive</option>
             </select><br>
             <input type="submit" value="Create New Category" class="btn btn-info">

        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>


                            

 


                           
@endsection('backend/admin-content')