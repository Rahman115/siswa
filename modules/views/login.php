<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Responsif</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #4f46e5, #3b82f6);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .login-container {
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    h1 {
      margin-bottom: 20px;
      font-size: 24px;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
      text-align: left;
    }

    label {
      display: block;
      margin-bottom: 5px;
      color: #444;
      font-size: 14px;
    }

    input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
    }

    button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 8px;
      background: #4f46e5;
      color: white;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background: #3730a3;
    }

    /* Responsif untuk HP (max 480px) */
    @media (max-width: 480px) {
      .login-container {
        padding: 20px;
        border-radius: 8px;
      }

      h1 {
        font-size: 20px;
      }

      input, button {
        font-size: 14px;
        padding: 10px;
      }
    }

    /* Responsif untuk Tablet (481px–768px) */
    @media (min-width: 481px) and (max-width: 768px) {
      .login-container {
        max-width: 350px;
        padding: 25px;
      }

      h1 {
        font-size: 22px;
      }
    }

    /* Untuk PC (lebih dari 768px) */
    @media (min-width: 769px) {
      .login-container {
        max-width: 400px;
      }
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h1>Login</h1>
    <form>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" placeholder="Masukkan username">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Masukkan password">
      </div>
      <button type="submit">Masuk</button>
    </form>
  </div>

</body>
</html>