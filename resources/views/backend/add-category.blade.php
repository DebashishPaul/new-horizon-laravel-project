 @extends('backend/admin-layout')
@section('backend/admin-content')

            <!-- MAIN CONTENT-->

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="card">
                                    <div class="card-header">Credit Card</div>
                                    <div class="card-body">
                                    
                                         <form action="{{ route('addcategory') }}" method="post" enctype="multipart/form-data">
                                        <lebel>Category Name</lebel>
                                        <input  name="cat" type="text" class="form-control" >
                                        <br>
                                        <button  type="submit" class="btn btn-primary" >Add Category</button>
 
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



 


                           
@endsection('backend/admin-content')