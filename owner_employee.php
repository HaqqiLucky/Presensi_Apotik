<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Karyawan - Sistem Presensi Apotek</title>
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
        
        .status-active {
            background-color: #e3f8e2;
            color: #28a745;
        }
        
        .status-inactive {
            background-color: #fbe7e8;
            color: #dc3545;
        }
        
        .action-btn {
            width: 32px;
            height: 32px;
            border-radius: 4px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            margin-right: 5px;
        }
        
        .edit-btn {
            background-color: #e8f4fd;
            color: #1a73e8;
        }
        
        .edit-btn:hover {
            background-color: #d0e7fb;
        }
        
        .delete-btn {
            background-color: #fbe7e8;
            color: #dc3545;
        }
        
        .delete-btn:hover {
            background-color: #f8d0d3;
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
        
        /* Modal styles */
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
            border-radius: 8px;
            width: 500px;
            max-width: 95%;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }
        
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .modal-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #1a73e8;
        }
        
        .close-modal {
            font-size: 1.3rem;
            cursor: pointer;
            color: #999;
        }
        
        .modal-body {
            padding: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
        }
        
        .form-control {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 0.95rem;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #1a73e8;
            box-shadow: 0 0 0 3px rgba(26, 115, 232, 0.1);
        }
        
        select.form-control {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 8px 10px;
            appearance: none;
        }
        
        .modal-footer {
            padding: 15px 20px;
            border-top: 1px solid #f0f0f0;
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }
        
        .btn-secondary {
            background-color: #f8f9fa;
            color: #333;
            border: 1px solid #ddd;
        }
        
        .btn-secondary:hover {
            background-color: #e9ecef;
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
                <li class="menu-item active">
                    <i class="fas fa-users"></i>
                    <span>Daftar Karyawan</span>
                </li>
                <li class="menu-item">
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
                <h1 class="page-title">Daftar Karyawan</h1>
                <div class="header-actions">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Cari karyawan...">
                    </div>
                    <button class="btn btn-primary" onclick="showEmployeeModal()">
                        <i class="fas fa-plus"></i> Tambah Karyawan
                    </button>
                </div>
            </div>
            
            <div class="card">
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>ID Karyawan</th>
                                <th>Nama Karyawan</th>
                                <th>ID Kartu RFID</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Gender</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>K001</td>
                                <td>Budi Santoso</td>
                                <td>RF7823456</td>
                                <td>Apoteker</td>
                                <td><span class="status-badge status-active">Aktif</span></td>
                                <td>Laki-laki</td>
                                <td>
                                    <button class="action-btn edit-btn" onclick="showEmployeeModal('edit', 'K001')">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="action-btn delete-btn">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>K002</td>
                                <td>Siti Aminah</td>
                                <td>RF7823457</td>
                                <td>Kasir</td>
                                <td><span class="status-badge status-active">Aktif</span></td>
                                <td>Perempuan</td>
                                <td>
                                    <button class="action-btn edit-btn" onclick="showEmployeeModal('edit', 'K002')">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="action-btn delete-btn">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>K003</td>
                                <td>Ahmad Faisal</td>
                                <td>RF7823458</td>
                                <td>Asisten Apoteker</td>
                                <td><span class="status-badge status-inactive">Nonaktif</span></td>
                                <td>Laki-laki</td>
                                <td>
                                    <button class="action-btn edit-btn" onclick="showEmployeeModal('edit', 'K003')">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="action-btn delete-btn">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>K004</td>
                                <td>Dewi Lestari</td>
                                <td>RF7823459</td>
                                <td>Apoteker</td>
                                <td><span class="status-badge status-active">Aktif</span></td>
                                <td>Perempuan</td>
                                <td>
                                    <button class="action-btn edit-btn" onclick="showEmployeeModal('edit', 'K004')">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="action-btn delete-btn">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>K005</td>
                                <td>Hendra Wijaya</td>
                                <td>RF7823460</td>
                                <td>Kasir</td>
                                <td><span class="status-badge status-active">Aktif</span></td>
                                <td>Laki-laki</td>
                                <td>
                                    <button class="action-btn edit-btn" onclick="showEmployeeModal('edit', 'K005')">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="action-btn delete-btn">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
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
    
    <!-- Employee Modal -->
    <div id="employeeModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="modalTitle">Tambah Karyawan</h2>
                <span class="close-modal" onclick="closeModal()">&times;</span>
            </div>
            <div class="modal-body">
                <form id="employeeForm">
                    <div class="form-group">
                        <label for="employeeId">ID Karyawan</label>
                        <input type="text" id="employeeId" class="form-control" placeholder="Masukkan ID karyawan">
                    </div>
                    <div class="form-group">
                        <label for="employeeName">Nama Karyawan</label>
                        <input type="text" id="employeeName" class="form-control" placeholder="Masukkan nama karyawan">
                    </div>
                    <div class="form-group">
                        <label for="rfidId">ID Kartu RFID</label>
                        <input type="text" id="rfidId" class="form-control" placeholder="Masukkan ID kartu RFID">
                    </div>
                    <div class="form-group">
                        <label for="employeeRole">Role</label>
                        <select id="employeeRole" class="form-control">
                            <option value="">Pilih role</option>
                            <option value="Owner">Owner</option>
                            <option value="Pegawai">Pegawai</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="employeeStatus">Status</label>
                        <select id="employeeStatus" class="form-control">
                            <option value="">Pilih status</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Nonaktif">Nonaktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="employeeGender">Gender</label>
                        <select id="employeeGender" class="form-control">
                            <option value="">Pilih gender</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" onclick="closeModal()">Batal</button>
                <button class="btn btn-primary" id="saveBtn">Simpan</button>
            </div>
        </div>
    </div>
    
    <script>
        // Navigation to attendance page
        document.querySelectorAll('.menu-item')[1].addEventListener('click', function() {
            window.location.href = 'owner_attendance.php';
        });
        
        // Show/hide modal functions
        function showEmployeeModal(mode = 'add', id = null) {
            const modal = document.getElementById('employeeModal');
            const modalTitle = document.getElementById('modalTitle');
            
            if (mode === 'edit') {
                modalTitle.textContent = 'Edit Karyawan';
                // Here we would normally fetch employee data based on id
                // and populate the form fields
                // This is just a simulation for the frontend
                if (id === 'K001') {
                    document.getElementById('employeeId').value = 'K001';
                    document.getElementById('employeeName').value = 'Budi Santoso';
                    document.getElementById('rfidId').value = 'RF7823456';
                    document.getElementById('employeeRole').value = 'Apoteker';
                    document.getElementById('employeeStatus').value = 'Aktif';
                    document.getElementById('employeeGender').value = 'Laki-laki';
                }
            } else {
                modalTitle.textContent = 'Tambah Karyawan';
                document.getElementById('employeeForm').reset();
            }
            
            modal.style.display = 'flex';
        }
        
        function closeModal() {
            document.getElementById('employeeModal').style.display = 'none';
        }
        
        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('employeeModal');
            if (event.target === modal) {
                closeModal();
            }
        }
        
        // Handle form submission
        document.getElementById('saveBtn').addEventListener('click', function() {
            // Here we would normally process the form data
            // and send it to a backend
            alert('Data karyawan berhasil disimpan!');
            closeModal();
        });
    </script>
</body>
</html> 