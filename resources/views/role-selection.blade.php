<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Your Role - School System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .role-card {
            transition: transform 0.3s ease;
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .role-card:hover {
            transform: translateY(-10px);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center text-white mb-5">
                <h1 class="display-4 fw-bold">School Management System</h1>
                <p class="lead">Select your role to continue</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <!-- Super Admin -->
            <div class="col-md-4 mb-4">
                <div class="card role-card h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <div class="bg-danger text-white rounded-circle mx-auto d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                <i class="fas fa-crown fa-2x"></i>
                            </div>
                        </div>
                        <h4 class="card-title">Super Admin</h4>
                        <p class="card-text text-muted">Full system access and management</p>
                        <a href="{{ route('login') }}?role=SuperAdmin" class="btn btn-danger btn-lg">Select</a>
                    </div>
                </div>
            </div>

            <!-- Teacher -->
            <div class="col-md-4 mb-4">
                <div class="card role-card h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <div class="bg-info text-white rounded-circle mx-auto d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                <i class="fas fa-chalkboard-teacher fa-2x"></i>
                            </div>
                        </div>
                        <h4 class="card-title">Teacher</h4>
                        <p class="card-text text-muted">Manage classes and student progress</p>
                        <a href="{{ route('login') }}?role=Teacher" class="btn btn-info btn-lg">Select</a>
                    </div>
                </div>
            </div>

            <!-- Student -->
            <div class="col-md-4 mb-4">
                <div class="card role-card h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <div class="bg-success text-white rounded-circle mx-auto d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                <i class="fas fa-user-graduate fa-2x"></i>
                            </div>
                        </div>
                        <h4 class="card-title">Student</h4>
                        <p class="card-text text-muted">Access courses and view grades</p>
                        <a href="{{ route('login') }}?role=Student" class="btn btn-success btn-lg">Select</a>
                    </div>
                </div>
            </div>

            <!-- Parent -->
            <div class="col-md-4 mb-4">
                <div class="card role-card h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <div class="bg-primary text-white rounded-circle mx-auto d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                <i class="fas fa-users fa-2x"></i>
                            </div>
                        </div>
                        <h4 class="card-title">Parent</h4>
                        <p class="card-text text-muted">Monitor child's academic progress</p>
                        <a href="{{ route('login') }}?role=Parent" class="btn btn-primary btn-lg">Select</a>
                    </div>
                </div>
            </div>

            <!-- School Admin -->
            <div class="col-md-4 mb-4">
                <div class="card role-card h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <div class="bg-warning text-dark rounded-circle mx-auto d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                <i class="fas fa-school fa-2x"></i>
                            </div>
                        </div>
                        <h4 class="card-title">School Admin</h4>
                        <p class="card-text text-muted">Manage school operations</p>
                        <a href="{{ route('login') }}?role=SchoolAdmin" class="btn btn-warning btn-lg">Select</a>
                    </div>
                </div>
            </div>

            <!-- Bursar -->
            <div class="col-md-4 mb-4">
                <div class="card role-card h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <div class="bg-secondary text-white rounded-circle mx-auto d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                <i class="fas fa-money-bill-wave fa-2x"></i>
                            </div>
                        </div>
                        <h4 class="card-title">Bursar</h4>
                        <p class="card-text text-muted">Handle fees and financial management</p>
                        <a href="{{ route('login') }}?role=Bursar" class="btn btn-secondary btn-lg">Select</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
</body>
</html>