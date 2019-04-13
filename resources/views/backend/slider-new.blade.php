 @extends('backend/admin-layout')
@section('backend/admin-content')

<!-- MAIN CONTENT-->

<div class="row">
    <div class="col-sm-8">
        <div class="card">
            <div class="card-header">Credit Card</div>
            <div class="card-body">
            
                 <form action="{{ url('admin/insert_slider') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                <lebel>Slider Short Sescription</lebel>
                <input  name="slider_desc" type="text" class="form-control" >
                <lebel>Slider Image</lebel>
                <input  name="slider_image" type="file" class="form-control" >

                <br>
                <button  type="submit" class="btn btn-primary" >Add Category</button>

                </form>
            </div>
        </div>
    </div>
</div>



 


                           
@endsection('backend/admin-content')