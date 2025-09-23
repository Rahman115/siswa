<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Siswa - SMKN 4 Buton Utara</title>
        
        <!-- CSS -->
        <link href="resources/css/style.css" rel="stylesheet" />
    </head>

    <body>
        <main class="login-container">
            <div class="form-signin">
                <form method="post" class="login-form">
                    <div class="form-header">
                        <div class="logo-container">
                            <img src="<?php echo PATH; ?>resources/images/logo.png" alt="Logo SMKN 4 Buton Utara" class="logo">
                        </div>
                        <h1>SMKN 4 BUTON UTARA</h1>
                        <h2>Login Siswa</h2>
                    </div>
                    
                    <hr class="divider">
                    
                    <?php if (isset($message) && count($message)): ?>
                        <div class="alert <?php echo $message["success"] ? "alert-success" : "alert-danger"; ?>">
                            <?php echo htmlspecialchars($message["message"]); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="form-group">
                        <label for="input-username" class="form-label">Username</label>
                        <input type="text" id="input-username" name="username" class="form-control" 
                               placeholder="Contoh: abdurrahman" required autofocus autocomplete="username">
                    </div>
                    
                    <div class="form-group">
                        <label for="input-password" class="form-label">Password</label>
                        <input type="password" name="password" id="input-password" class="form-control" 
                               placeholder="Masukkan password" required autocomplete="current-password">
                    </div>
                    
                    <button class="btn btn-primary" type="submit">Masuk</button>
                </form>
            </div>
        </main>
    </body>
</html>