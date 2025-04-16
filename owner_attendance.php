<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Presensi - Sistem Presensi Apotek</title>
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
        
        .header-actions {
            display: flex;
            gap: 10px;
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
        
        .btn-success {
            background-color: #28a745;
            color: white;
        }
        
        .btn-success:hover {
            background-color: #218838;
        }
        
        .btn-danger {
            background-color: #dc3545;
            color: white;
        }
        
        .btn-danger:hover {
            background-color: #c82333;
        }
        
        .search-box {
            background-color: white;
            border-radius: 4px;
            padding: 0.5rem 1rem;
            display: flex;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }
        
        .search-box input {
            border: none;
            outline: none;
            padding: 5px;
            flex: 1;
            font-size: 0.9rem;
        }
        
        .search-box i {
            color: #999;
            margin-right: 5px;
        }
        
        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            overflow: hidden;
        }
        
        .summary-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .summary-card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        
        .summary-card i {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #1a73e8;
        }
        
        .summary-card h3 {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 5px;
        }
        
        .summary-card p {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1a73e8;
        }
        
        .filters {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        
        .filter-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .filter-group label {
            font-weight: 500;
            color: #555;
            white-space: nowrap;
        }
        
        .filter-group select, .filter-group input {
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 0.9rem;
            min-width: 150px;
        }
        
        .table-container {
            width: 100%;
            overflow-x: auto;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #f0f0f0;
        }
        
        th {
            background-color: #f8f9fa;
            font-weight: 600;
            color: #555;
            white-space: nowrap;
        }
        
        tr:last-child td {
            border-bottom: none;
        }
        
        tr:hover {
            background-color: #f8f9fa;
        }
        
        .status-badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            display: inline-block;
        }
        
        .status-present {
            background-color: #e3f8e2;
            color: #28a745;
        }
        
        .status-late {
            background-color: #fff3cd;
            color: #856404;
        }
        
        .status-absent {
            background-color: #fbe7e8;
            color: #dc3545;
        }
        
        .pagination {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 15px;
        }
        
        .pagination-text {
            color: #666;
            font-size: 0.9rem;
            margin-right: 15px;
        }
        
        .pagination-buttons {
            display: flex;
            gap: 5px;
        }
        
        .page-btn {
            width: 35px;
            height: 35px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            border: 1px solid #ddd;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .page-btn:hover, .page-btn.active {
            background-color: #1a73e8;
            color: white;
            border-color: #1a73e8;
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
                <li class="menu-item active">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Daftar Presensi</span>
                </li>
                <li class="menu-item">
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
                <h1 class="page-title">Daftar Presensi</h1>
                <div class="header-actions">
                    <button class="btn btn-success">
                        <i class="fas fa-file-excel"></i> Export Data
                    </button>
                    <button class="btn btn-danger">
                        <i class="fas fa-print"></i> Cetak Laporan
                    </button>
                </div>
            </div>
            
            <div class="summary-cards">
                <div class="summary-card">
                    <i class="fas fa-user-check"></i>
                    <h3>Total Presensi Hari Ini</h3>
                    <p>15</p>
                </div>
                <div class="summary-card">
                    <i class="fas fa-clock"></i>
                    <h3>Terlambat</h3>
                    <p>3</p>
                </div>
                <div class="summary-card">
                    <i class="fas fa-user-times"></i>
                    <h3>Tidak Hadir</h3>
                    <p>2</p>
                </div>
            </div>
            
            <div class="card">
                <div class="filters">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Cari presensi...">
                    </div>
                    <div class="filter-group">
                        <label for="dateFilter">Tanggal:</label>
                        <input type="date" id="dateFilter">
                    </div>
                    <div class="filter-group">
                        <label for="employeeFilter">Karyawan:</label>
                        <select id="employeeFilter">
                            <option value="">Semua Karyawan</option>
                            <option value="K001">Budi Santoso</option>
                            <option value="K002">Siti Aminah</option>
                            <option value="K003">Ahmad Faisal</option>
                            <option value="K004">Dewi Lestari</option>
                            <option value="K005">Hendra Wijaya</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <label for="statusFilter">Status:</label>
                        <select id="statusFilter">
                            <option value="">Semua Status</option>
                            <option value="Hadir">Hadir</option>
                            <option value="Terlambat">Terlambat</option>
                            <option value="Tidak Hadir">Tidak Hadir</option>
                        </select>
                    </div>
                </div>
                
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>ID Presensi</th>
                                <th>Nama Karyawan</th>
                                <th>Status</th>
                                <th>Waktu Masuk</th>
                                <th>Waktu Keluar</th>
                                <th>Dibuat Pada</th>
                                <th>Diperbarui Pada</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>P001</td>
                                <td>Budi Santoso</td>
                                <td><span class="status-badge status-present">Hadir</span></td>
                                <td>08:00:00</td>
                                <td>17:00:00</td>
                                <td>2024-03-20 08:00:00</td>
                                <td>2024-03-20 17:00:00</td>
                            </tr>
                            <tr>
                                <td>P002</td>
                                <td>Siti Aminah</td>
                                <td><span class="status-badge status-late">Terlambat</span></td>
                                <td>08:30:00</td>
                                <td>17:00:00</td>
                                <td>2024-03-20 08:30:00</td>
                                <td>2024-03-20 17:00:00</td>
                            </tr>
                            <tr>
                                <td>P003</td>
                                <td>Ahmad Faisal</td>
                                <td><span class="status-badge status-absent">Tidak Hadir</span></td>
                                <td>-</td>
                                <td>-</td>
                                <td>2024-03-20 00:00:00</td>
                                <td>2024-03-20 00:00:00</td>
                            </tr>
                            <tr>
                                <td>P004</td>
                                <td>Dewi Lestari</td>
                                <td><span class="status-badge status-present">Hadir</span></td>
                                <td>08:00:00</td>
                                <td>17:00:00</td>
                                <td>2024-03-20 08:00:00</td>
                                <td>2024-03-20 17:00:00</td>
                            </tr>
                            <tr>
                                <td>P005</td>
                                <td>Hendra Wijaya</td>
                                <td><span class="status-badge status-late">Terlambat</span></td>
                                <td>08:45:00</td>
                                <td>17:00:00</td>
                                <td>2024-03-20 08:45:00</td>
                                <td>2024-03-20 17:00:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="pagination">
                    <div class="pagination-text">
                        Menampilkan 1-5 dari 5 entri
                    </div>
                    <div class="pagination-buttons">
                        <button class="page-btn" disabled>
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="page-btn active">1</button>
                        <button class="page-btn" disabled>
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <script>
        // Navigation to employee page
        document.querySelectorAll('.menu-item')[0].addEventListener('click', function() {
            window.location.href = 'owner_employee.php';
        });
        
        // Handle filter changes
        document.getElementById('dateFilter').addEventListener('change', function() {
            // Here we would normally filter the attendance records
            console.log('Date filter changed:', this.value);
        });
        
        document.getElementById('employeeFilter').addEventListener('change', function() {
            // Here we would normally filter the attendance records
            console.log('Employee filter changed:', this.value);
        });
        
        document.getElementById('statusFilter').addEventListener('change', function() {
            // Here we would normally filter the attendance records
            console.log('Status filter changed:', this.value);
        });
        
        // Handle export and print buttons
        document.querySelector('.btn-success').addEventListener('click', function() {
            // Here we would normally handle the export functionality
            alert('Data presensi berhasil diekspor!');
        });
        
        document.querySelector('.btn-danger').addEventListener('click', function() {
            // Here we would normally handle the print functionality
            window.print();
        });
    </script>
</body>
</html> 