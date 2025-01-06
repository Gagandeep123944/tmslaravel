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
                        <td>{{$name}}</td>
                        <td>{{$email}}</td>
                        <td><button class="btn btn-primary" id="update Profile" data-id="{{$id}}">Update Profile</button></td>
                    </tr>
                </tbody>
                    
                </table>
            </div>
                
            </div>

            <script>
                let table = new DataTable('#myTable');
            </script>

            
@endsection