 @extends('backend/admin-layout')
@section('backend/admin-content')

            <!-- MAIN CONTENT-->

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="card">
                                    <div class="card-header">Credit Card</div>
                                    <div class="card-body">
                                    
                                        <form action="" method="post" novalidate="novalidate">
                                        <lebel>Sub Category Name</lebel>
                                        <input  name="cc-payment" type="text" class="form-control" >
                                        <lebel>Category name</lebel>
                                        <select class="form-control" >
                                            <option>AA</option>
                                        </select>
                                        <br>
                                        <button  type="button" class="btn btn-primary" >Add Receipe</button>

                                            
                                           
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



 


                           
@endsection('backend/admin-content')