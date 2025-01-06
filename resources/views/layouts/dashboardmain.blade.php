<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="{{asset( 'css/dashboardStyle.css')}}">

    
    @stack('css')
</head>
<body>
    <div class="roller_div" style="display:none;"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>

    <div id="notificationContainer"></div>
    <div class="dashboard">
        <nav class="sidebar">
            <div class="sidebar-header">
                <img src="https://via.placeholder.com/50" alt="Logo" class="logo">
                <h2>AdminPro</h2>
            </div>
            <ul class="nav-linkss ">
                <a href="/dashboard"><li class="active" data-page="dashboard"><i class="fas fa-home"></i>Dashboard</li></a>
                <a href="/uploadProduct"><li data-page="Upload_tour"><i class="fas fa-chart-line"></i>Upload Tours</li></a>
                <a href="/booked_tours"><li data-page="booked_tour"><i class="fas fa-shopping-cart"></i>Booked Tours</li></a>
            </ul>
        </nav>
        <main class="main-content">
            <header>
                <div class="Testing">
                  <h1>Welcome, @yield('welcome')</h1>
                </div>
                <div class="user-info" id="userInfoDropdown">
                    <img src="https://via.placeholder.com/40" alt="User Avatar" class="avatar">
                    <span>@yield('Name')</span>
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-menu" id="profileDropdown">
                        <a href="/Dashboard"><i class="fas fa-user"></i> Profile</a>
                        <a href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </div>
            </header>
            
			@yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('js/dashboardScript.js')}}"></script>
</body>
</html>