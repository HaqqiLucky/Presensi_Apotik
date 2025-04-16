<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Apotek</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f0f5ff;
            color: #333;
        }
        
        .container {
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        header {
            background-color: #1a73e8;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            display: flex;
            align-items: center;
        }
        
        .logo i {
            margin-right: 10px;
        }
        
        .nav-buttons {
            display: flex;
            gap: 1rem;
        }
        
        .btn {
            padding: 0.6rem 1.2rem;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
            font-size: 0.9rem;
        }
        
        .btn-outline {
            background: transparent;
            color: white;
            border: 1px solid white;
        }
        
        .btn-outline:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        .btn-primary {
            background-color: white;
            color: #1a73e8;
        }
        
        .btn-primary:hover {
            background-color: #f1f1f1;
        }
        
        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 3rem 1rem;
            flex: 1;
        }
        
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #1a73e8;
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 800px;
            line-height: 1.6;
            margin-bottom: 2rem;
            color: #555;
        }
        
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        
        .modal-content {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            width: 400px;
            max-width: 90%;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        }
        
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .modal-title {
            font-size: 1.5rem;
            color: #1a73e8;
        }
        
        .close {
            font-size: 1.5rem;
            cursor: pointer;
            color: #666;
        }
        
        .form-group {
            margin-bottom: 1.2rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
            font-weight: 500;
        }
        
        .form-control {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #1a73e8;
        }
        
        .form-footer {
            margin-top: 1.5rem;
            text-align: center;
        }
        
        .form-footer a {
            color: #1a73e8;
            text-decoration: none;
        }
        
        .form-footer a:hover {
            text-decoration: underline;
        }
        
        .btn-submit {
            background-color: #1a73e8;
            color: white;
            width: 100%;
            padding: 0.8rem;
            font-weight: 500;
        }
        
        .btn-submit:hover {
            background-color: #0d62d1;
        }
        
        footer {
            background-color: #1a73e8;
            color: white;
            text-align: center;
            padding: 1.5rem;
            margin-top: auto;
        }
        
        .features {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 2rem;
            padding: 2rem;
            background-color: white;
        }
        
        .feature-card {
            background-color: white;
            border-radius: 8px;
            padding: 1.5rem;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: #1a73e8;
            margin-bottom: 1rem;
        }
        
        .feature-title {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            color: #333;
        }
        
        .feature-description {
            color: #666;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <i class="fas fa-clinic-medical"></i>
                SisInfo Apotek
            </div>
            <div class="nav-buttons">
                <button class="btn btn-outline" onclick="showLoginModal()">Masuk</button>
                <button class="btn btn-primary" onclick="showRegisterModal()">Daftar</button>
            </div>
        </header>
        
        <section class="hero">
            <h1>Sistem Informasi Apotek Modern</h1>
            <p>Kelola inventaris, transaksi, dan layanan apotek Anda dengan lebih efisien menggunakan sistem informasi apotek terpadu yang kami sediakan.</p>
            <button class="btn btn-primary" onclick="showRegisterModal()">Mulai Sekarang</button>
        </section>
        
        <section class="features">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-pills"></i>
                </div>
                <h3 class="feature-title">Manajemen Obat</h3>
                <p class="feature-description">Kelola stok obat dengan mudah, termasuk tanggal kedaluwarsa dan notifikasi stok menipis.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-cash-register"></i>
                </div>
                <h3 class="feature-title">Kasir Terintegrasi</h3>
                <p class="feature-description">Proses transaksi dengan cepat dan efisien dengan sistem kasir yang terintegrasi.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="feature-title">Laporan & Analitik</h3>
                <p class="feature-description">Dapatkan laporan penjualan, pembelian, dan keuntungan dengan visualisasi yang mudah dipahami.</p>
            </div>
        </section>
        
        <footer>
            <p>&copy; 2023 Sistem Informasi Apotek. Semua hak cipta dilindungi.</p>
        </footer>
    </div>
    
    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Masuk</h2>
                <span class="close" onclick="closeModal('loginModal')">&times;</span>
            </div>
            <form id="loginForm" action="login_process.php" method="post">
                <div class="form-group">
                    <label for="loginIdentifier">Email atau Nama Pengguna</label>
                    <input type="text" id="loginIdentifier" name="loginIdentifier" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="loginPassword">Kata Sandi</label>
                    <input type="password" id="loginPassword" name="loginPassword" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-submit">Masuk</button>
                <div class="form-footer">
                    <a href="#" onclick="showForgotPasswordModal(); return false;">Lupa kata sandi?</a>
                    <p>Belum memiliki akun? <a href="#" onclick="showRegisterModal(); return false;">Daftar</a></p>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Register Modal -->
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Daftar Akun</h2>
                <span class="close" onclick="closeModal('registerModal')">&times;</span>
            </div>
            <form id="registerForm" action="register_process.php" method="post">
                <div class="form-group">
                    <label for="registerName">Nama Lengkap</label>
                    <input type="text" id="registerName" name="registerName" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="registerEmail">Email</label>
                    <input type="email" id="registerEmail" name="registerEmail" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="registerPassword">Kata Sandi</label>
                    <input type="password" id="registerPassword" name="registerPassword" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Konfirmasi Kata Sandi</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-submit">Daftar</button>
                <div class="form-footer">
                    <p>Sudah memiliki akun? <a href="#" onclick="showLoginModal(); return false;">Masuk</a></p>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Forgot Password Modal -->
    <div id="forgotPasswordModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Lupa Kata Sandi</h2>
                <span class="close" onclick="closeModal('forgotPasswordModal')">&times;</span>
            </div>
            <form id="forgotPasswordForm" action="forgot_password_process.php" method="post">
                <div class="form-group">
                    <label for="forgotEmail">Email</label>
                    <input type="email" id="forgotEmail" name="forgotEmail" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-submit">Kirim Tautan Reset</button>
                <div class="form-footer">
                    <p>Ingat kata sandi Anda? <a href="#" onclick="showLoginModal(); return false;">Masuk</a></p>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        // Show modal functions
        function showLoginModal() {
            document.getElementById('registerModal').style.display = 'none';
            document.getElementById('forgotPasswordModal').style.display = 'none';
            document.getElementById('loginModal').style.display = 'flex';
        }
        
        function showRegisterModal() {
            document.getElementById('loginModal').style.display = 'none';
            document.getElementById('forgotPasswordModal').style.display = 'none';
            document.getElementById('registerModal').style.display = 'flex';
        }
        
        function showForgotPasswordModal() {
            document.getElementById('loginModal').style.display = 'none';
            document.getElementById('forgotPasswordModal').style.display = 'flex';
        }
        
        // Close modal function
        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }
        
        // Close modal when clicking outside of it
        window.onclick = function(event) {
            if (event.target.className === 'modal') {
                event.target.style.display = 'none';
            }
        }
    </script>
</body>
</html>
