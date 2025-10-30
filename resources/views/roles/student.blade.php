<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Student Dashboard</a>
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
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">Student Dashboard</h4>
                    </div>
                    <div class="card-body">
                        <p>This is the Student dashboard. Only users with Student role can access this page.</p>
                        <ul>
                            <li>View your grades</li>
                            <li>Access course materials</li>
                            <li>View class schedule</li>
                            <li>Track your progress</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>