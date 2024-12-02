<x-app-layout>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modern Dashboard</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f1f4f9;
            }
    
            .sidebar {
                height: 100vh;
                background-color: #007BFF;
                color: white;
                padding-top: 1rem;
            }
    
            .sidebar .nav-link {
                color: #e9ecef;
                margin: 0.5rem 0;
                font-weight: 500;
                border-radius: 5px;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .sidebar .nav-link:hover, .sidebar .nav-link.active {
                background-color: #0056b3;
                color: white;
            }
    
            .navbar {
                background-color: #ffffff;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }
    
            .navbar-brand, .navbar-nav .nav-link {
                color: #007BFF !important;
            }
    
            .navbar-nav .nav-link:hover {
                color: #0056b3 !important;
            }
    
            .content {
                padding: 2rem;
            }
    
            .card {
                border: none;
                border-radius: 15px;
                transition: transform 0.3s, box-shadow 0.3s;
            }
    
            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            }
    
            .card .card-title {
                font-weight: bold;
                color: #6C757D;
            }
    
            .card .card-text {
                font-size: 1.5rem;
                font-weight: bold;
                color: #007BFF;
            }
    
            .recent-activity {
                background-color: white;
                border-radius: 15px;
                padding: 1.5rem;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }
    
            .recent-activity h5 {
                font-weight: bold;
                color: #6C757D;
            }
    
            .list-group-item {
                border: none;
                padding: 0.75rem 0;
            }
    
            .list-group-item span {
                font-weight: bold;
                color: #6C757D;
            }
    
            .list-group-item .text-muted {
                font-size: 0.9rem;
            }
        </style>
    </head>
    <body>
        <div class="d-flex">
            <!-- Sidebar -->
            <div class="sidebar d-flex flex-column p-3">
                <h2 class="text-center mb-4">Dashboard</h2>
                <nav class="nav flex-column">
                    <a href="#" class="nav-link active">Home</a>
                    <a href="#" class="nav-link">Members</a>
                    <a href="#" class="nav-link">Savings</a>
                    <a href="#" class="nav-link">Loans</a>
                    <a href="#" class="nav-link">Settings</a>
                </nav>
            </div>
    
            <!-- Main Content -->
            <div class="flex-grow-1">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Mazer Dashboard</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </nav>
    
                <!-- Content -->
                <div class="content">
                    <div class="row g-4">
                        <!-- Cards -->
                        <div class="col-md-4">
                            <div class="card text-center p-4">
                                <h5 class="card-title">Total Members</h5>
                                <p class="card-text">150</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center p-4">
                                <h5 class="card-title">Total Savings</h5>
                                <p class="card-text">Rp 1,250,000</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center p-4">
                                <h5 class="card-title">Loans Pending</h5>
                                <p class="card-text">Rp 300,000</p>
                            </div>
                        </div>
                    </div>
    
                    <!-- Recent Activity -->
                    <div class="recent-activity mt-4">
                        <h5>Recent Activity</h5>
                        <ul class="list-group list-group-flush mt-3">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>New member added</span>
                                <span class="text-muted">2 hours ago</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Loan approved</span>
                                <span class="text-muted">5 hours ago</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Savings updated</span>
                                <span class="text-muted">1 day ago</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
    
    
</x-app-layout>
