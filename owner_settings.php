<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan - Sistem Presensi Apotek</title>
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
        }
        
        .sidebar {
            width: 250px;
            background-color: #1a73e8;
            color: white;
            padding: 20px 0;
            display: flex;
            flex-direction: column;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            padding: 0 20px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        
        .logo i {
            margin-right: 10px;
        }
        
        .menu {
            list-style: none;
        }
        
        .menu-item {
            padding: 12px 20px;
            display: flex;
            align-items: center;
            transition: all 0.3s;
            cursor: pointer;
        }
        
        .menu-item:hover, .menu-item.active {
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        .menu-item i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        
        .user-info {
            margin-top: auto;
            padding: 15px 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            color: #1a73e8;
            font-size: 1.2rem;
        }
        
        .user-name {
            font-weight: 500;
        }
        
        .user-role {
            font-size: 0.8rem;
            opacity: 0.8;
        }
        
        .main-content {
            flex: 1;
            padding: 20px;
        }
        
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        
        .page-title {
            font-size: 1.8rem;
            color: #1a73e8;
        }
        
        .settings-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            padding: 30px;
            margin-bottom: 20px;
        }
        
        .settings-title {
            font-size: 1.2rem;
            color: #1a73e8;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        
        .settings-title i {
            margin-right: 10px;
        }
        
        .language-options {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }
        
        .language-option {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .language-option:hover {
            border-color: #1a73e8;
            background-color: #f0f5ff;
        }
        
        .language-option.active {
            border-color: #1a73e8;
            background-color: #e8f4fd;
        }
        
        .language-option img {
            width: 24px;
            height: 24px;
            margin-right: 10px;
            border-radius: 4px;
        }
        
        .language-option span {
            font-weight: 500;
        }
        
        .btn {
            padding: 0.6rem 1.2rem;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
        }
        
        .btn i {
            margin-right: 5px;
        }
        
        .btn-primary {
            background-color: #1a73e8;
            color: white;
        }
        
        .btn-primary:hover {
            background-color: #0d62d1;
        }
    </style>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">
                <i class="fas fa-clipboard-list"></i>
                <span>Sistem Presensi</span>
            </div>
            <ul class="menu">
                <li class="menu-item">
                    <i class="fas fa-users"></i>
                    <span>Daftar Karyawan</span>
                </li>
                <li class="menu-item">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Daftar Presensi</span>
                </li>
                <li class="menu-item active">
                    <i class="fas fa-cog"></i>
                    <span>Pengaturan</span>
                </li>
            </ul>
            <div class="user-info">
                <div class="user-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <div class="user-name">Admin Presensi</div>
                    <div class="user-role">Owner</div>
                </div>
            </div>
        </aside>
        
        <main class="main-content">
            <div class="header">
                <h1 class="page-title">Pengaturan</h1>
            </div>
            
            <div class="settings-card">
                <h2 class="settings-title">
                    <i class="fas fa-globe"></i>
                    Pengaturan Bahasa
                </h2>
                <p>Pilih bahasa yang ingin digunakan dalam sistem:</p>
                <div class="language-options">
                    <div class="language-option active">
                        <img src="https://flagcdn.com/w20/id.png" alt="Indonesia">
                        <span>Indonesia</span>
                    </div>
                    <div class="language-option">
                        <img src="https://flagcdn.com/w20/gb.png" alt="English">
                        <span>English</span>
                    </div>
                </div>
                <button class="btn btn-primary" style="margin-top: 20px;">
                    <i class="fas fa-save"></i> Simpan Perubahan
                </button>
            </div>
        </main>
    </div>
    
    <script>
        // Navigation to other pages
        document.querySelectorAll('.menu-item')[0].addEventListener('click', function() {
            window.location.href = 'owner_employee.php';
        });
        
        document.querySelectorAll('.menu-item')[1].addEventListener('click', function() {
            window.location.href = 'owner_attendance.php';
        });
        
        // Language selection
        const languageOptions = document.querySelectorAll('.language-option');
        languageOptions.forEach(option => {
            option.addEventListener('click', function() {
                languageOptions.forEach(opt => opt.classList.remove('active'));
                this.classList.add('active');
            });
        });
        
        // Save language preference
        document.querySelector('.btn-primary').addEventListener('click', function() {
            const selectedLanguage = document.querySelector('.language-option.active span').textContent;
            alert(`Bahasa berhasil diubah ke ${selectedLanguage}`);
        });
    </script>
</body>
</html> 