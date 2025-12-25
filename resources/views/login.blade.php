<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Access Your Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #2575fc 0%, #6a11cb 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .container {
            display: flex;
            width: 100%;
            max-width: 1100px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.8s ease-out;
        }
        
        .left-panel {
            flex: 1;
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .right-panel {
            flex: 1;
            background: linear-gradient(rgba(37, 117, 252, 0.9), rgba(106, 17, 203, 0.9));
            color: white;
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 2.2rem;
            margin-bottom: 40px;
            color: #333;
        }
        
        .form-header {
            margin-bottom: 40px;
        }
        
        .form-header h1 {
            font-size: 2.8rem;
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
        
        .input-with-icon input {
            width: 100%;
            padding: 15px 15px 15px 50px;
            border: 2px solid #ddd;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s;
        }
        
        .input-with-icon input:focus {
            border-color: #2575fc;
            outline: none;
            box-shadow: 0 0 0 3px rgba(37, 117, 252, 0.1);
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .forgot-password {
            color: #2575fc;
            text-decoration: none;
            font-weight: 600;
        }
        
        .forgot-password:hover {
            text-decoration: underline;
        }
        
        .btn {
            width: 100%;
            padding: 18px;
            background: linear-gradient(to right, #2575fc, #6a11cb);
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
            box-shadow: 0 10px 20px rgba(37, 117, 252, 0.2);
        }
        
        .social-login {
            margin-top: 30px;
            text-align: center;
        }
        
        .social-login p {
            margin-bottom: 20px;
            color: #666;
            position: relative;
        }
        
        .social-login p::before, .social-login p::after {
            content: "";
            position: absolute;
            top: 50%;
            width: 30%;
            height: 1px;
            background-color: #ddd;
        }
        
        .social-login p::before {
            left: 0;
        }
        
        .social-login p::after {
            right: 0;
        }
        
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        
        .social-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.3rem;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .social-icon:hover {
            transform: translateY(-5px);
        }
        
        .facebook {
            background-color: #3b5998;
        }
        
        .google {
            background-color: #dd4b39;
        }
        
        .twitter {
            background-color: #1da1f2;
        }
        
        .register-link {
            text-align: center;
            margin-top: 30px;
            color: #666;
        }
        
        .register-link a {
            color: #2575fc;
            text-decoration: none;
            font-weight: 600;
        }
        
        .register-link a:hover {
            text-decoration: underline;
        }
        
        .welcome-text {
            margin-bottom: 60px;
        }
        
        .welcome-text h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .welcome-text p {
            font-size: 1.2rem;
            line-height: 1.6;
            opacity: 0.9;
        }
        
        .features {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }
        
        .feature {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }
        
        .feature i {
            font-size: 1.8rem;
            color: #ffcc00;
        }
        
        .feature h3 {
            font-size: 1.3rem;
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
            
            .right-panel {
                order: -1;
                padding: 40px 30px;
            }
            
            .left-panel {
                padding: 40px 30px;
            }
        }
        
        @media (max-width: 480px) {
            .form-header h1 {
                font-size: 2rem;
            }
            
            .welcome-text h2 {
                font-size: 1.8rem;
            }
            
            .left-panel, .right-panel {
                padding: 30px 20px;
            }
            
            .social-login p::before, .social-login p::after {
                width: 25%;
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
            
            <div class="form-header">
                <h1>Welcome Back</h1>
                <p>Sign in to your account to continue your journey with us</p>
            </div>
            
            <form method="post" action="{{ route('login.perform') }}">
                @csrf
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
                        <input type="password" id="password" placeholder="Enter your password" name="password" required>
                    </div>
                </div>
                
                <div class="remember-forgot">
                    <div class="remember">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <a href="#" class="forgot-password">Forgot password?</a>
                </div>
                
                <button type="submit" class="btn">
                    <i class="fas fa-sign-in-alt"></i>
                    Sign In
                </button>
                
                <div class="social-login">
                
                <div class="register-link">
                    <p>Don't have an account? <a href="register.html">Register here</a></p>
                </div>
            </form>
        </div>
        

    </div>
</body>
</html>