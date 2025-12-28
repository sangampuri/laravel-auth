<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Create Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .container {
            display: flex;
            width: 100%;
            max-width: 1200px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.8s ease-out;
        }
        
        .left-panel {
            flex: 1;
            background: linear-gradient(rgba(106, 17, 203, 0.9), rgba(37, 117, 252, 0.9));
            color: white;
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .right-panel {
            flex: 1.2;
            padding: 60px 50px;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 2.5rem;
            margin-bottom: 40px;
            color: white;
        }
        
        .welcome-text h1 {
            font-size: 2.8rem;
            margin-bottom: 20px;
        }
        
        .welcome-text p {
            font-size: 1.2rem;
            line-height: 1.6;
            opacity: 0.9;
        }
        
        .features {
            margin-top: 40px;
        }
        
        .feature {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
        }
        
        .feature i {
            font-size: 1.5rem;
            color: #ffcc00;
            width: 30px;
        }
        
        .form-header {
            margin-bottom: 40px;
        }
        
        .form-header h2 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 10px;
        }
        
        .form-header p {
            color: #666;
            font-size: 1.1rem;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #444;
        }
        
        .input-with-icon {
            position: relative;
        }
        
        .input-with-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
        }
        
        .input-with-icon input, .input-with-icon select {
            width: 100%;
            padding: 15px 15px 15px 50px;
            border: 2px solid #ddd;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s;
        }
        
        .input-with-icon input:focus, .input-with-icon select:focus {
            border-color: #6a11cb;
            outline: none;
            box-shadow: 0 0 0 3px rgba(106, 17, 203, 0.1);
        }
        
        .terms {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 30px;
        }
        
        .terms input {
            margin-top: 5px;
        }
        
        .terms label {
            color: #555;
            font-size: 0.95rem;
            line-height: 1.5;
        }
        
        .terms a {
            color: #6a11cb;
            text-decoration: none;
            font-weight: 600;
        }
        
        .terms a:hover {
            text-decoration: underline;
        }
        
        .btn {
            width: 100%;
            padding: 18px;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.2rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(106, 17, 203, 0.2);
        }
        
        .login-link {
            text-align: center;
            margin-top: 30px;
            color: #666;
        }
        
        .login-link a {
            color: #6a11cb;
            text-decoration: none;
            font-weight: 600;
        }
        
        .login-link a:hover {
            text-decoration: underline;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Responsive design */
        @media (max-width: 900px) {
            .container {
                flex-direction: column;
                max-width: 600px;
            }
            
            .left-panel {
                padding: 40px 30px;
            }
            
            .right-panel {
                padding: 40px 30px;
            }
        }
        
        @media (max-width: 480px) {
            .welcome-text h1 {
                font-size: 2rem;
            }
            
            .form-header h2 {
                font-size: 2rem;
            }
            
            .left-panel, .right-panel {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Left Panel -->
        <div class="left-panel">
            <div class="logo">
                <i class="fas fa-rocket"></i>
                <span>LaunchPad</span>
            </div>
            
            <div class="welcome-text">
                <h1>Join Our Community</h1>
                <p>Create your account to unlock all features and connect with thousands of users worldwide.</p>
            </div>
            
            <div class="features">
                <div class="feature">
                    <i class="fas fa-shield-alt"></i>
                    <div>
                        <h3>Secure Account</h3>
                        <p>Your data is protected with military-grade encryption</p>
                    </div>
                </div>
                
                <div class="feature">
                    <i class="fas fa-bolt"></i>
                    <div>
                        <h3>Fast Registration</h3>
                        <p>Complete your profile in less than 2 minutes</p>
                    </div>
                </div>
                
                <div class="feature">
                    <i class="fas fa-gift"></i>
                    <div>
                        <h3>Free Forever</h3>
                        <p>Basic account is completely free with no hidden fees</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Right Panel -->
        <div class="right-panel">
            <div class="form-header">
                <h2>Create Account</h2>
                <p>Fill in your details to get started</p>
            </div>
            
            <form method="post" action="{{ route('register.save') }}">
                @csrf
                <div class="form-group">
                    <label for="fullName">Full Name</label>
                    <div class="input-with-icon">
                        <i class="fas fa-user"></i>
                        <input type="text" id="fullName" placeholder="Enter your full name" name="name" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <div class="input-with-icon">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="email" placeholder="Enter your email address" name="email" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" placeholder="Create a strong password" name="password" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="confirmPassword" placeholder="Re-enter your password" name="password_confirmation" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="role">
                        <select name="role" id="role">
                            <option value="admin">admin</option>
                            <option value="reader">reader</option>
                        </select>
                    </label>
                </div>
                
                
                <button type="submit" class="btn">
                    <i class="fas fa-user-plus"></i>
                    Create Account
                </button>
                
                <div class="login-link">
                    <p>Already have an account? <a href="login.html">Log in here</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>