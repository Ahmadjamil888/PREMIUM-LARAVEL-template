<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8" />
  <meta name="theme-color" content="#000000" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login | AI chatbot template</title>
  <style>
    /* Professional Black & White Theme */
    * {
      box-sizing: border-box;
    }
    
    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', sans-serif;
      background-color: #ffffff;
      color: #000000;
      line-height: 1.5;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    
    .login-container {
      width: 100%;
      max-width: 400px;
      padding: 2rem;
      background: #ffffff;
      border: 1px solid #e0e0e0;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
    
    .login-header {
      margin-bottom: 1.5rem;
      text-align: center;
    }
    
    .login-header h1 {
      font-size: 1.5rem;
      font-weight: 600;
      margin: 0 0 0.5rem 0;
      color: #000000;
    }
    
    .status-message {
      padding: 0.75rem;
      margin-bottom: 1rem;
      background: #f5f5f5;
      border-radius: 4px;
      font-size: 0.875rem;
      text-align: center;
    }
    
    .input-group {
      margin-bottom: 1rem;
    }
    
    .input-label {
      display: block;
      margin-bottom: 0.5rem;
      font-size: 0.875rem;
      font-weight: 500;
      color: #000000;
    }
    
    .text-input {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #cccccc;
      border-radius: 4px;
      font-size: 0.875rem;
      transition: border-color 0.15s ease;
    }
    
    .text-input:focus {
      outline: none;
      border-color: #000000;
    }
    
    .input-error {
      margin-top: 0.25rem;
      font-size: 0.75rem;
      color: #cc0000;
    }
    
    .remember-me {
      display: flex;
      align-items: center;
      margin: 1rem 0;
    }
    
    .remember-me input {
      margin-right: 0.5rem;
    }
    
    .remember-me span {
      font-size: 0.875rem;
      color: #000000;
    }
    
    .login-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 1.5rem;
    }
    
    .forgot-password {
      font-size: 0.875rem;
      color: #000000;
      text-decoration: none;
      transition: color 0.15s ease;
    }
    
    .forgot-password:hover {
      color: #333333;
      text-decoration: underline;
    }
    
    .login-button {
      padding: 0.75rem 1.5rem;
      background: #000000;
      color: #ffffff;
      border: 1px solid #000000;
      border-radius: 4px;
      font-size: 0.875rem;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.15s ease;
    }
    
    .login-button:hover {
      background: #333333;
      border-color: #333333;
    }
    
    .login-button:active {
      transform: translateY(1px);
    }
  </style>
</head>
<body>
  <div class="login-container">
    <!-- Session Status -->
    <div class="login-header">
      <h1>Welcome to my chatbot</h1>
    </div>

    @if (session('status'))
      <div class="status-message">
        {{ session('status') }}
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <!-- Email Address -->
      <div class="input-group">
        <label for="email" class="input-label">Email</label>
        <input id="email" class="text-input" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
        @if ($errors->has('email'))
          <div class="input-error">
            {{ $errors->first('email') }}
          </div>
        @endif
      </div>

      <!-- Password -->
      <div class="input-group">
        <label for="password" class="input-label">Password</label>
        <input id="password" class="text-input" type="password" name="password" required autocomplete="current-password">
        @if ($errors->has('password'))
          <div class="input-error">
            {{ $errors->first('password') }}
          </div>
        @endif
      </div>

      <!-- Remember Me -->
      <div class="remember-me">
        <input id="remember_me" type="checkbox" name="remember">
        <span>Remember me</span>
      </div>

      <div class="login-footer">
        @if (Route::has('password.request'))
          <a class="forgot-password" href="{{ route('password.request') }}">
            Forgot your password?
          </a>
        @endif

        <button type="submit" class="login-button">
          Log in
        </button>
      </div>
    </form>
  </div>
</body>
</html>