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

                             

        <form action="{{url('/admin/user-update/' .$edit_user_info->id)}}" method="POST">
                {{csrf_field()}}
             <input type="text" name="fname" value="{{($edit_user_info->fname)}}" class="form-control" placeholder="Enter your first name"><br>

             <input type="text" name="lname" value="{{($edit_user_info->lname)}}" class="form-control" placeholder="Enter your last name"><br>

             <input type="text" name="email" value="{{($edit_user_info->email)}}" class="form-control" placeholder="Enter your email address" disabled><br>

             <select class="form-control"  name="status" >
                 <option value="Active" >Active</option>
                 <option value="Inactive" >Inactive</option>
             </select><br>
             <input type="submit" value="Update User" class="btn btn-info">

        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>


                            

 


                           
@endsection('backend/admin-content')