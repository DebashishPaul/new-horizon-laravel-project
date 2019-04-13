 @extends('backend/admin-layout')
@section('backend/admin-content')
<?php
    //dd($category);
?>
            <!-- MAIN CONTENT-->

<div class="row">
    <div class="col-sm-8">
        <div class="card">
            <div class="card-header">Add Receipe</div>
            <div class="card-body">
            
                <form action="{{ route('add_receipe') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @if($errors->has('receipe_name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('receipe_name') }}
                    </div>
                <br>
                @endif
                <lebel>Receipe Name</lebel>
                <input  name="receipe_name" type="text" class="form-control" maxlength="10">
                <lebel>Receipe Price per Dish</lebel>
                <input  name="receipe_price" type="number" class="form-control" >
                <lebel>Receipe Category</lebel>
                <select class="form-control" name="receipe_cat">
                    @foreach($category as $categories)
                        <option value="{{ $categories->id }}">
                            {{ $categories->name }}
                        </option>
                    @endforeach
                </select>

                <lebel>Receipe Sub Category</lebel>
                <select class="form-control" name="receipe_scat">
                    <option value="1">AA</option>
                </select>
                
                @if($errors->has('receipe_description'))
                    <div class="alert alert-danger">
                        {{ $errors->first('receipe_description') }}
                    </div>
                <br>
                @endif

                <lebel>Description</lebel>
                <textarea name="receipe_description" type="text" class="form-control" style="height:200px;">{{ old('receipe_description') }}</textarea>

                @if($errors->has('receipe_image'))
                    <div class="alert alert-danger">
                        {{ $errors->first('receipe_image') }}
                    </div>
                <br>
                @endif

                <lebel>Receipe Image</lebel>
                <input name="receipe_image[]" type="file" class="form-control" multiple>
                <br>
                <!--
                Beef<input type="checkbox" name="food[]" value="Beef">
                Chicken<input type="checkbox" name="food[]" value="Chicken">
                Rice<input type="checkbox" name="food[]" value="Rice">
                Vegetable<input type="checkbox" name="food[]" value="Vegetable">
                -->
                <button type="submit" class="btn btn-primary" >Add Receipe</button>

                    
                   
                </form>
            </div>
        </div>
    </div>
</div>



 


                           
@endsection('backend/admin-content')