<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', sans-serif;
    background: #f4f6f9;
    color: #333;
}

.dashboard-container {
    display: flex;
    min-height: 100vh;
}

/* Sidebar */
.sidebar {
    width: 220px;
    background: #2c3e50;
    color: white;
    padding: 20px;
}

.logo {
    font-size: 24px;
    margin-bottom: 40px;
    text-align: center;
}

.nav {
    display: flex;
    flex-direction: column;
}

.nav-link {
    color: #bdc3c7;
    text-decoration: none;
    padding: 10px 0;
    transition: color 0.3s ease;
}

.nav-link.active,
.nav-link:hover {
    color: #ecf0f1;
}

/* Main Content */
.main-content {
    flex: 1;
    padding: 40px;
}

.dashboard-header h1 {
    font-size: 32px;
    margin-bottom: 10px;
}

.card {
    background: white;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    margin-top: 30px;
}

.card h2 {
    margin-bottom: 15px;
    font-size: 24px;
}

.dashboard-table {
    width: 100%;
    border-collapse: collapse;
}

.dashboard-table thead {
    background-color: #ecf0f1;
}

.dashboard-table th,
.dashboard-table td {
    padding: 12px 15px;
    border-bottom: 1px solid #ddd;
    text-align: left;
}

.btn {
    padding: 6px 12px;
    border-radius: 4px;
    text-decoration: none;
    font-size: 14px;
    color: white;
    border: none;
    cursor: pointer;
}

.edit {
    background-color: #3498db;
}

.delete {
    background-color: #e74c3c;
    margin-left: 6px;
}

.btn:hover {
    opacity: 0.85;
}

    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2 class="logo">Admin</h2>
            <nav class="nav">
                <a href="#" class="nav-link active">Dashboard</a>
                <a href="#" class="nav-link">Users</a>
                <a href="#" class="nav-link">Projects</a>
                <a href="#" class="nav-link">Settings</a>
                <a href="#" class="nav-link">Logout</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header class="dashboard-header">
                <h1>Dashboard</h1>
                <p>Welcome back, Admin</p>
            </header>

            <!-- Data Table -->
            <section class="card">
                <h2>Project List</h2>
                <table class="dashboard-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Project Name</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Weather App</td>
                            <td>A weather forecasting web app</td>
                            <td>
                                <a href="#" class="btn edit">Edit</a>
                                <button class="btn delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Portfolio Site</td>
                            <td>Personal web developer portfolio</td>
                            <td>
                                <a href="#" class="btn edit">Edit</a>
                                <button class="btn delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Todo Manager</td>
                            <td>A simple task tracker app</td>
                            <td>
                                <a href="#" class="btn edit">Edit</a>
                                <button class="btn delete">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>
