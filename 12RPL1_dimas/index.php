<!DOCTYPE html>
<html>
<head>
    <title>Login to your main account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            background: #A52A2A;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        } 
        .card {
            width: 400px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Login</h2>
            <form method="post" action="processlogin.php">
                <div class="form-group">
                    <label for="username">username:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>