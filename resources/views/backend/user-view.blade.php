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

                     @if(Session::has('msg2'))
                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                    {{Session::get('msg2')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    @endif              
                                
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                   <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th class="text-right">Email</th>
                    <th class="text-right">Status</th>
                                
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($view_user_info as $v_user)
                    <tr>
                    <td>{{$v_user->id}}</td>
                    <td>{{$v_user->fname}} {{$v_user->lname }}</td>
                    <td>
                        {{$v_user->email}}

                    </td>
                    <td class="text-right">
                    <a href="{{('/admin/user-edit/'.$v_user->id)}}" class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i></a>
                    <a href="{{('/admin/user-delete/'.$v_user->id)}}" class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></a>
                    </td>
                                          
                
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

                               
                              
                               





                      
    </div>
</div>
         
@endsection('backend/admin-content')