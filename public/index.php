<?php
// Main Entry Point - Krabby Enterprise Solution Prototype
$pageTitle = "Krabby Enterprise Solution | System Portal";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="navbar">
        <div class="logo">🦀 KES Portal</div>
        <nav>
            <a href="#">Home</a>
            <a href="#">Modules</a>
            <a href="#">Documentation</a>
            <a href="#">Support</a>
        </nav>
    </header>

    <main class="container">
        <section class="hero">
            <h1>Welcome to Krabby Enterprise Portal</h1>
            <p>Integrated Operations, Supply Chain & Inventory Management System</p>
            <div class="status-badge">System Status: Maintenance / Build Phase</div>
        </section>

        <section class="grid">
            <div class="card">
                <h3>Point of Sale (POS)</h3>
                <p>Order processing and register integration module.</p>
                <button disabled>Module Offline</button>
            </div>
            <div class="card">
                <h3>Inventory Management</h3>
                <p>Real-time stock tracking for ingredients and kitchen supplies.</p>
                <button disabled>Module Offline</button>
            </div>
            <div class="card">
                <h3>Internal Communications</h3>
                <p>Corporate notices and inter-department messaging hub.</p>
                <button disabled>Module Offline</button>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Krabby Enterprise Corp. Internal Systems Division.</p>
    </footer>
</body>
</html>
