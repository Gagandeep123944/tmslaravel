@extends('layouts.dashboardmain')



@section('title')
 Admin Dashboard
@endsection

@section('Name')
{{ $name }}
@endsection

@section('welcome')
{{ $name }}
@endsection
@section('content')
<style>
    .modal-title {
        color: black;
        font-size: 30px;
    }

    label{
        color:black;
    }
</style>
<div id="dashboard" class="page-content active">
                <h1>Dashboard Overview</h1>
              {{---  <div class="stats-grid">
                    <div class="stat-card glow">
                        <i class="fas fa-users"></i>
                        <div class="stat-info">
                            <h3>Total Users</h3>
                            <p>15,687</p>
                        </div>
                    </div>
                    <div class="stat-card glow">
                        <i class="fas fa-shopping-bag"></i>
                        <div class="stat-info">
                            <h3>Total Sales</h3>
                            <p>$124,563</p>
                        </div>
                    </div>
                    <div class="stat-card glow">
                        <i class="fas fa-chart-line"></i>
                        <div class="stat-info">
                            <h3>Revenue</h3>
                            <p>$67,895</p>
                        </div>
                    </div>
                    <div class="stat-card glow">
                        <i class="fas fa-percent"></i>
                        <div class="stat-info">
                            <h3>Growth</h3>
                            <p>+24.5%</p>
                        </div>
                    </div>
                </div> ---}}

            <div class="container">
                <table id="myTable">
                <thead>
                   <tr>
                        <th>Name</th> 
                        <th>Email</th> 
                        <th>Action</th> 
                   </tr>
                </thead>
                <tbody>
                    <tr>
                        <td id="name_table">{{$name}}</td>
                        <td>{{$email}}</td>
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >Update Profile</button></td>
                    </tr>
                </tbody>
                    
                </table>


                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <form id="profile_form" data-action="/profileUpdate" data-id="{{$id}}">
                           @csrf
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter Your Name" class="form-control" value="{{$name}}">
                            <span id="error_name" class="text-danger"></span>
                            <div class="modal-footer">
                                <button type="button" id="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                        </div>
                      
                    </div>
                    </div>
                </div>
            </div>
                
            </div>

            <script>
                let table = new DataTable('#myTable');
            </script>


<script>
 $('#profile_form').on('submit', function(e){
    e.preventDefault();
    let formData = $(this).serialize();
    let id = $(this).data('id');

    $.ajax({
        url: $(this).data('action'),
        type:"post",
        data: formData + '&id=' + id,
        success:function(res){
            $('#error_name').html("");
            $('#name_table').text(res.user.name);
            $('#close').trigger('click');
        },
        error:function(res){
           
            $('#error_name').html(res.responseJSON.message);
        }
    })
 })
</script>

            
@endsection