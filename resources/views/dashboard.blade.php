<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">School Management System</a>
            <div class="navbar-nav ms-auto">
                @auth
                <span class="navbar-text text-light me-3">
                    Welcome, {{ Auth::user()->name }}!
                </span>
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-light btn-sm">Logout</button>
                </form>
                @endauth
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Dashboard</h4>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @auth
                        <h5>Welcome, {{ Auth::user()->name }}!</h5>
                        <p>Your role: 
                            @foreach(Auth::user()->getRoleNames() as $role)
                                <span class="badge bg-primary">{{ $role }}</span>
                            @endforeach
                        </p>

                        <div class="mt-4">
                            <h6>Available Actions:</h6>
                            <div class="d-flex flex-wrap gap-2">
                                @role('SuperAdmin')
                                    <a href="{{ route('super.admin') }}" class="btn btn-danger">Super Admin Panel</a>
                                    <a href="{{ route('system.settings') }}" class="btn btn-outline-danger">System Settings</a>
                                @endrole

                                @role('SchoolAdmin')
                                    <a href="{{ route('school.admin') }}" class="btn btn-warning">School Admin Panel</a>
                                    <a href="{{ route('manage.users') }}" class="btn btn-outline-warning">Manage Users</a>
                                @endrole

                                @role('Teacher')
                                    <a href="{{ route('teacher.dashboard') }}" class="btn btn-info">Teacher Dashboard</a>
                                    <a href="{{ route('manage.classes') }}" class="btn btn-outline-info">Manage Classes</a>
                                @endrole

                                @role('Student')
                                    <a href="{{ route('student.dashboard') }}" class="btn btn-success">Student Dashboard</a>
                                    <a href="{{ route('my.grades') }}" class="btn btn-outline-success">My Grades</a>
                                @endrole

                                @role('Parent')
                                    <a href="{{ route('parent.dashboard') }}" class="btn btn-primary">Parent Dashboard</a>
                                    <a href="{{ route('child.grades') }}" class="btn btn-outline-primary">Child Grades</a>
                                @endrole

                                @role('Bursar')
                                    <a href="{{ route('bursar.dashboard') }}" class="btn btn-secondary">Bursar Dashboard</a>
                                    <a href="{{ route('manage.payments') }}" class="btn btn-outline-secondary">Manage Payments</a>
                                @endrole
                            </div>
                        </div>
                        @else
                        <div class="alert alert-warning">
                            You are not logged in. <a href="{{ route('login') }}">Login here</a>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>