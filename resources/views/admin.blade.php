<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar Navigation -->
        <div class="admin-sidebar">
            <div class="admin-brand">
                <h2>Admin Dashboard</h2>
            </div>
            
            <div class="admin-menu">
                <div class="menu-item active" data-target="dashboard">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </div>
                <div class="menu-item" data-target="reports">
                    <i class="fas fa-flag"></i> Reports
                </div>
                <div class="menu-item" data-target="users">
                    <i class="fas fa-users"></i> Users
                </div>
                <div class="menu-item" data-target="settings">
                    <i class="fas fa-cog"></i> Settings
                </div>
            </div>
            
            <div class="admin-footer">
                <div class="user-menu">
                    <a href="/logout" class="logout-btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Main Content Area -->
        <div class="admin-content">
            <!-- Dashboard Section -->
            <div id="dashboard" class="content-section active">
                <h2>Admin Dashboard</h2>
                <div class="stats-container">
                    <div class="stat-card">
                        <div class="stat-icon"><i class="fas fa-flag"></i></div>
                        <div class="stat-value">100</div>
                        <div class="stat-label">Total Reports</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon"><i class="fas fa-users"></i></div>
                        <div class="stat-value">150</div>
                        <div class="stat-label">Total Users</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon"><i class="fas fa-check-circle"></i></div>
                        <div class="stat-value">345</div>
                        <div class="stat-label">Resolved</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon"><i class="fas fa-hourglass-half"></i></div>
                        <div class="stat-value">12</div>
                        <div class="stat-label">Pending</div>
                    </div>
                </div>
                
            </div>
            
            <!-- Reports Section -->
            <div id="reports" class="content-section">
                <div class="section-header">
                    <h2>Reports Management</h2>
                    <div class="search-filter">
                        <input type="text" placeholder="Search reports...">
                        <select>
                            <option value="all">All Status</option>
                            <option value="pending">Pending</option>
                            <option value="approved">Approved</option>
                            <option value="rejected">Rejected</option>
                        </select>
                    </div>
                </div>
                
                <div class="table-container">
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Category</th>
                                <th>Location</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td>11</td>
                                <td>moha</td>
                                <td>dir brk</td>
                                <td>bba</td>
                                <td>12 12 2022</td>
                                <td>
                                    <span class="status-badge status-pending}">
                                        pending
                                    </span>
                                </td>
                                <td>
                                    <button class="action-btn view-btn" >
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn edit-btn" >
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                
                <div class="pagination">
                    
                </div>
            </div>
            
            <!-- Users Section -->
            <div id="users" class="content-section">
                <div class="section-header">
                    <h2>Users Management</h2>
                    <div class="search-filter">
                        <input type="text" placeholder="Search users...">
                        <select>
                            <option value="all">All Users</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                
                <div class="table-container">
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Reports</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            <tr>
                                <td>34</td>
                                <td>mohh</td>
                                <td>mohasssdsk@gmail</td>
                                <td>123</td>
                                <td>
                                    <span class="status-badge status-active">
                                        
                                    </span>
                                </td>
                                <td>
                                    <button class="action-btn view-btn" >
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn edit-btn" >
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="action-btn delete-btn">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                
                <div class="pagination">
                   
                </div>
            </div>
            
            
    
    <!-- Report Modal -->
    <div id="reportModal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <div class="modal-header">
                <h3>Report Details</h3>
            </div>
            <div class="modal-body">
                <div class="report-images">
                    <!-- Images will be loaded here -->
                </div>
                <div class="report-details">
                    <div class="detail-row">
                        <span class="detail-label">User:</span>
                        <span class="detail-value" id="modal-user"></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Category:</span>
                        <span class="detail-value" id="modal-category"></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Location:</span>
                        <span class="detail-value" id="modal-location"></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Date:</span>
                        <span class="detail-value" id="modal-date"></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Status:</span>
                        <select id="modal-status" class="status-select">
                            <option value="pending">Pending</option>
                            <option value="approved">Approved</option>
                            <option value="rejected">Rejected</option>
                        </select>
                    </div>
                    <div class="detail-row full-width">
                        <span class="detail-label">Description:</span>
                        <p class="detail-value" id="modal-description"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="cancel-btn">Cancel</button>
                <button class="save-btn">Save Changes</button>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>