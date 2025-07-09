<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8" />
  <meta name="theme-color" content="#000000" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register | AI chatbot template</title>
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
    
    .register-container {
      width: 100%;
      max-width: 400px;
      padding: 2rem;
      background: #ffffff;
      border: 1px solid #e0e0e0;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
    
    .register-header {
      margin-bottom: 1.5rem;
      text-align: center;
    }
    
    .register-header h1 {
      font-size: 1.5rem;
      font-weight: 600;
      margin: 0 0 0.5rem 0;
      color: #000000;
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
    
    .register-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 1.5rem;
    }
    
    .login-link {
      font-size: 0.875rem;
      color: #000000;
      text-decoration: none;
      transition: color 0.15s ease;
    }
    
    .login-link:hover {
      color: #333333;
      text-decoration: underline;
    }
    
    .register-button {
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
    
    .register-button:hover {
      background: #333333;
      border-color: #333333;
    }
    
    .register-button:active {
      transform: translateY(1px);
    }
  </style>
</head>
<body>
  <div class="register-container">
    <div class="register-header">
      <h1>Create an Account</h1>
    </div>

    <form method="POST" action="{{ route('register') }}">
      @csrf

      <!-- Name -->
      <div class="input-group">
        <label for="name" class="input-label">Name</label>
        <input id="name" class="text-input" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
        @if ($errors->has('name'))
          <div class="input-error">
            {{ $errors->first('name') }}
          </div>
        @endif
      </div>

      <!-- Email Address -->
      <div class="input-group">
        <label for="email" class="input-label">Email</label>
        <input id="email" class="text-input" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
        @if ($errors->has('email'))
          <div class="input-error">
            {{ $errors->first('email') }}
          </div>
        @endif
      </div>

      <!-- Password -->
      <div class="input-group">
        <label for="password" class="input-label">Password</label>
        <input id="password" class="text-input" type="password" name="password" required autocomplete="new-password">
        @if ($errors->has('password'))
          <div class="input-error">
            {{ $errors->first('password') }}
          </div>
        @endif
      </div>

      <!-- Confirm Password -->
      <div class="input-group">
        <label for="password_confirmation" class="input-label">Confirm Password</label>
        <input id="password_confirmation" class="text-input" type="password" name="password_confirmation" required autocomplete="new-password">
        @if ($errors->has('password_confirmation'))
          <div class="input-error">
            {{ $errors->first('password_confirmation') }}
          </div>
        @endif
      </div>

      <div class="register-footer">
        <a class="login-link" href="{{ route('login') }}">
          Already registered?
        </a>

        <button type="submit" class="register-button">
          Register
        </button>
      </div>
    </form>
  </div>
</body>
</html>