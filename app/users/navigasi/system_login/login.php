    <link rel="stylesheet" href="../../../../assets/css/users/navigasi/system_login/login.css" type="text/css">
    <link rel="stylesheet" href="../../../../assets/font/fontawsome/css/all.css">

        <h3 style="color:red;">Warning: Anda harus login sebelum memesan!</h3>
    <div class="content">
        <form action="../../../../system/function/users/system_login/login.php" method="POST">
            <div class="title"><span>user Login</span></div>

            <div class="input-icon">
                <input type="email" name="email" class="box_login" placeholder="email" autocomplete="off"
                    required>
                <i class="fas fa-credit-card"></i>
            </div>

            <div class="input-icon">
                <input type="password" name="password" class="box_login" placeholder="Password" autocomplete="off"
                    required>
                <i class="fas fa-lock"></i>
            </div>
            <button type="submit" class="tombol" name="login"><i class="fa fa-location-arrow"></i> LOGIN</button>

            <div class="text1">
                <span> 
                    <a href="daftar.php">Registrasi Users</a>
                    <a href="../../../admin/navigasi/system_login/login.php">Login Admin</a>
                </span>
            </div>
        </form>
    </div>