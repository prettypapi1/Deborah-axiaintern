<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Super Admin Panel</a>
            <div class="navbar-nav ms-auto">
                <a href="{{ route('dashboard') }}" class="btn btn-outline-light btn-sm me-2">Back to Dashboard</a>
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-light btn-sm">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-danger text-white">
                        <h4 class="mb-0">Super Admin Panel</h4>
                    </div>
                    <div class="card-body">
                        <p>This is the Super Admin dashboard. Only users with SuperAdmin role can access this page.</p>
                        <ul>
                            <li>Manage all system settings</li>
                            <li>Access to all features</li>
                            <li>User management across all schools</li>
                            <li>System-wide configuration</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>