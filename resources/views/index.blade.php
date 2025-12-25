<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Home Page</title>
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
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            padding: 20px;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px;
            animation: fadeIn 1s ease-out;
        }
        
        header {
            text-align: center;
            margin-bottom: 60px;
            width: 100%;
        }
        
        .logo {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }
        
        h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .tagline {
            font-size: 1.5rem;
            font-weight: 300;
            margin-bottom: 40px;
            opacity: 0.9;
            max-width: 700px;
            line-height: 1.6;
        }
        
        .main-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 40px;
            width: 100%;
            max-width: 800px;
        }
        
        .button-container {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }
        
        .btn {
            padding: 18px 40px;
            font-size: 1.3rem;
            font-weight: 600;
            border-radius: 50px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 12px;
            min-width: 200px;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        
        .btn-register {
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            color: white;
        }
        
        .btn-login {
            background: transparent;
            color: white;
            border: 3px solid white;
        }
        
        .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.3);
        }
        
        .btn-register:hover {
            background: linear-gradient(to right, #ff6b47, #fea05c);
        }
        
        .btn-login:hover {
            background: rgba(255, 255, 255, 0.1);
        }
        
        .features {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 60px;
            width: 100%;
        }
        
        .feature-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 25px;
            width: 250px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.15);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #ffcc00;
        }
        
        .feature-title {
            font-size: 1.4rem;
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .feature-desc {
            font-size: 1rem;
            opacity: 0.8;
            line-height: 1.5;
        }
        
        footer {
            margin-top: 80px;
            text-align: center;
            opacity: 0.7;
            font-size: 1rem;
            width: 100%;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Responsive design */
        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }
            
            .tagline {
                font-size: 1.2rem;
            }
            
            .button-container {
                flex-direction: column;
                align-items: center;
            }
            
            .btn {
                width: 100%;
                max-width: 300px;
            }
            
            .features {
                flex-direction: column;
                align-items: center;
            }
            
            .logo {
                font-size: 2.5rem;
            }
        }
        
        @media (max-width: 480px) {
            h1 {
                font-size: 2rem;
            }
            
            .container {
                padding: 20px;
            }
            
            .logo {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <i class="fas fa-rocket"></i>
                <span>LaunchPad</span>
            </div>
            <h1>Welcome to Our Platform</h1>
            <p class="tagline">Join thousands of users who are already experiencing the future of seamless digital interaction. Get started today!</p>
        </header>
        
        <div class="main-content">
            <div class="button-container">
                <!-- Using anchor tags as buttons since we're not using JS -->
                <a href="{{ url('/register') }}" class="btn btn-register">
                    <i class="fas fa-user-plus"></i>
                    Register Now
                </a>
                <a href="{{ url('/login') }}" class="btn btn-login">
                    <i class="fas fa-sign-in-alt"></i>
                    Login
                </a>
            </div>
            
            <div class="features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="feature-title">Secure & Safe</h3>
                    <p class="feature-desc">Your data is protected with enterprise-grade security and encryption.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3 class="feature-title">Lightning Fast</h3>
                    <p class="feature-desc">Experience blazing fast performance with our optimized platform.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="feature-title">Community</h3>
                    <p class="feature-desc">Join a thriving community of users who help each other grow.</p>
                </div>
            </div>
        </div>
        
        <footer>
            <p>&copy; 2023 Simple Home Page. All rights reserved. | <a href="#" style="color: #ffcc00; text-decoration: none;">Privacy Policy</a> | <a href="#" style="color: #ffcc00; text-decoration: none;">Terms of Service</a></p>
        </footer>
    </div>
</body>
</html>
