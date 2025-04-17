<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Presensi Digital Apotik</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        html, body {
            height: 100%;
            width: 100%;
            overflow-x: hidden;
        }
        
        body {
            background-color: #f8f9fa;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .container {
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            max-width: 100%;
            padding: 0;
            margin: 0;
        }
        
        header {
            background-color: #0d6efd;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            font-family: 'Montserrat', sans-serif;
            letter-spacing: 0.5px;
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
            color: #0d6efd;
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
            padding: 4rem 1rem;
            flex: 1;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            width: 100%;
        }
        
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            color: #0d6efd;
            font-weight: 700;
            font-family: 'Montserrat', sans-serif;
            letter-spacing: 0.5px;
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 800px;
            line-height: 1.8;
            margin-bottom: 2rem;
            color: #495057;
            font-weight: 400;
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
            color: #0d6efd;
            font-weight: 600;
            font-family: 'Montserrat', sans-serif;
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
            color: #495057;
            font-weight: 500;
        }
        
        .form-control {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 1rem;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #0d6efd;
        }
        
        .form-footer {
            margin-top: 1.5rem;
            text-align: center;
        }
        
        .form-footer a {
            color: #0d6efd;
            text-decoration: none;
        }
        
        .form-footer a:hover {
            text-decoration: underline;
        }
        
        .btn-submit {
            background-color: #0d6efd;
            color: white;
            width: 100%;
            padding: 0.8rem;
            font-weight: 500;
        }
        
        .btn-submit:hover {
            background-color: #0b5ed7;
        }
        
        footer {
            background-color: #0d6efd;
            color: white;
            text-align: center;
            padding: 1.5rem;
            margin-top: auto;
            width: 100%;
        }
        
        .features {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 2rem;
            padding: 3rem 2rem;
            background-color: white;
            width: 100%;
        }
        
        .feature-card {
            background-color: white;
            border-radius: 8px;
            padding: 2.5rem;
            width: 45%;
            min-width: 300px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
            border: 1px solid #e9ecef;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
        }
        
        .feature-icon {
            font-size: 3.5rem;
            color: #0d6efd;
            margin-bottom: 1.5rem;
        }
        
        .feature-title {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: #212529;
            font-weight: 700;
            font-family: 'Montserrat', sans-serif;
        }
        
        .feature-description {
            color: #495057;
            line-height: 1.8;
            font-size: 1.1rem;
            font-weight: 400;
        }
        
        .social-media {
            margin-top: 1.5rem;
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
        }
        
        .social-media a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: opacity 0.3s ease;
            font-weight: 500;
        }
        
        .social-media a:hover {
            opacity: 0.8;
        }
        
        .social-media i {
            font-size: 1.2rem;
        }
        
        /* Responsive styles */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            .feature-card {
                width: 80%;
            }
        }
        
        @media (max-width: 768px) {
            header {
                padding: 1rem;
                flex-direction: column;
                gap: 1rem;
            }
            
            .nav-buttons {
                width: 100%;
                justify-content: center;
            }
            
            .hero {
                padding: 3rem 1rem;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .feature-card {
                width: 100%;
                padding: 2rem;
            }
            
            .feature-title {
                font-size: 1.5rem;
            }
            
            .feature-description {
                font-size: 1rem;
            }
            
            .social-media {
                flex-direction: column;
                gap: 1rem;
            }
        }
        
        @media (max-width: 576px) {
            .logo {
                font-size: 1.5rem;
            }
            
            .btn {
                padding: 0.5rem 1rem;
                font-size: 0.8rem;
            }
            
            .hero h1 {
                font-size: 1.8rem;
            }
            
            .features {
                padding: 2rem 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <i class="fas fa-clock"></i>
                <span>Presensi Apotik</span>
            </div>
            <div class="nav-buttons">
                <button class="btn btn-outline" onclick="showLoginModal()">Masuk</button>
                <button class="btn btn-primary" onclick="showRegisterModal()">Daftar</button>
            </div>
        </header>
        
        <section class="hero">
            <h1>Sistem Presensi Sina Medika</h1>
            <p>Solusi modern untuk manajemen kehadiran karyawan apotek yang akurat, efisien, dan terintegrasi</p>
            <button class="btn btn-primary" onclick="showRegisterModal()">Mulai Sekarang</button>
        </section>
        
        <section class="features">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3 class="feature-title">Visi</h3>
                <p class="feature-description">Menjadi solusi presensi digital terbaik untuk apotek, meningkatkan efisiensi dan akurasi manajemen kehadiran karyawan dengan teknologi modern.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-tasks"></i>
                </div>
                <h3 class="feature-title">Misi</h3>
                <p class="feature-description">
                    1. Memberikan sistem presensi yang akurat, aman, dan mudah digunakan.<br><br>
                    2. Meningkatkan efisiensi operasional apotek melalui otomatisasi pencatatan kehadiran.<br><br>
                    3. Menyediakan layanan berbasis teknologi untuk meningkatkan produktivitas tenaga kerja di apotek.
                </p>
            </div>
        </section>
        
        <footer>
            <div class="social-media">
                <a href="https://wa.me/6285423330754" target="_blank">
                    <i class="fab fa-whatsapp"></i> WhatsApp: 0854 2333 0754
                </a>
                <a href="https://instagram.com/Sina_Medikaaaa" target="_blank">
                    <i class="fab fa-instagram"></i> Instagram: Sina_Medikaaaa
                </a>
                <a href="mailto:sinamedika@gmail.com">
                    <i class="far fa-envelope"></i> Email: sinamedika@gmail.com
                </a>
            </div>
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
    
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
