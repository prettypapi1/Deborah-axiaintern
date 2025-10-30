<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - School System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .role-badge {
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="card shadow" style="width: 100%; max-width: 400px;">
            <div class="card-header text-center 
                @if($selectedRole == 'SuperAdmin') bg-danger text-white
                @elseif($selectedRole == 'Teacher') bg-info text-white
                @elseif($selectedRole == 'Student') bg-success text-white
                @elseif($selectedRole == 'Parent') bg-primary text-white
                @elseif($selectedRole == 'SchoolAdmin') bg-warning text-dark
                @elseif($selectedRole == 'Bursar') bg-secondary text-white
                @else bg-dark text-white @endif">
                <h4 class="mb-1">School Management System</h4>
                @if($selectedRole)
                    <span class="role-badge">Logging in as: <strong>{{ $selectedRole }}</strong></span>
                @else
                    <small>Login to your account</small>
                @endif
            </div>
            <div class="card-body p-4">
                @if(!$selectedRole)
                <div class="alert alert-info text-center">
                    <a href="{{ url('/') }}">← Select your role</a>
                </div>
                @endif

                <form method="POST" action="/login">
                    @csrf
                    <!-- Hidden field to preserve role -->
                    <input type="hidden" name="role" value="{{ $selectedRole }}">
                    
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn 
                        @if($selectedRole == 'SuperAdmin') btn-danger
                        @elseif($selectedRole == 'Teacher') btn-info
                        @elseif($selectedRole == 'Student') btn-success
                        @elseif($selectedRole == 'Parent') btn-primary
                        @elseif($selectedRole == 'SchoolAdmin') btn-warning
                        @elseif($selectedRole == 'Bursar') btn-secondary
                        @else btn-primary @endif w-100">
                        Login as {{ $selectedRole ?: 'User' }}
                    </button>
                </form>
                
                <div class="text-center mt-3">
                    @if($selectedRole)
                        <a href="{{ url('/') }}">Not a {{ $selectedRole }}? Select different role</a>
                    @else
                        <a href="{{ route('register') }}">Don't have an account? Register here</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>