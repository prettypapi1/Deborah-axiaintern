<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">School Admin Panel</a>
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
                    <div class="card-header bg-warning text-dark">
                        <h4 class="mb-0">School Admin Panel</h4>
                    </div>
                    <div class="card-body">
                        <p>This is the School Admin dashboard. Only users with SchoolAdmin role can access this page.</p>
                        <ul>
                            <li>Manage school users</li>
                            <li>Manage classes and courses</li>
                            <li>View school reports</li>
                            <li>School-level configuration</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>