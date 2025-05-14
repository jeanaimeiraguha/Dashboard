<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-card {
      width: 300px;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      background: white;
    }
  </style>
</head>
<body>

  <div class="login-card">
    <form>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email">
       
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password">
      </div>

      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="check">
        <label class="form-check-label" for="check">Check me out</label>
      </div>

      <button type="submit" class="btn btn-primary w-100">Submit</button>
      <a href="#">sign up</a>
    </form>
  </div>

</body>
</html>
