<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Reports</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/list.css">
</head>
<body>
    <div class="container">
        <div class="dirbrk">
            <div>
                <h1>All Reports</h1>
            <p class="subtitle">all reports created by {{auth()->user()->name}}</p>
            </div>
            
            <div class="user-menu-container">
                <div class="user-icon" onclick="toggleUserMenu()">
                    <span class="username">{{ Auth::user()->name }}</span>
                    <i class="fas fa-user-circle"></i>
                </div>
            <div class="user-dropdown" id="userDropdown">
                <a href="#" class="dropdown-item">Profile</a>
                <a href="#" class="dropdown-item">Settings</a>
                <a href="logout" class="dropdown-item" 
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
                </a>
                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
    
        </div>
        </div>

        
        
        
        
        <div class="table-container">
            <table id="reportsTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Localisation</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody id="reportsTableBody">
                    @foreach($reports as $report)
                    <tr>
                        <td>{{ $report->id }}</td>
                        <td>{{ $report->category }}</td>
                        <td>
                            <span class="localisation">
                                <img src="imgs/maps-logo.png" alt="Map icon" class="map-icon">
                                {{ $report->location }}
                            </span>
                        </td>
                        <td>{{ $report->created_at }}</td>
                        <td>
                            <span class="status status-{{ $report->status }}">
                                {{ $report->status }}
                            </span>
                        </td>
                        <td>
                            <form  action="{{ route('report.delete', $report->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                <button type="submit" class="delete-btn">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
        <a href="report" class="fab">
        <img src="imgs/plus.png" alt="Map icon" class="map-icon">
        </a>
    <script src="js/script.js"></script>
</body>
</html>