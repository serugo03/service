<?php
// Start the session at the very beginning, before any output
session_start();

// Ensure there are no spaces, newlines, or HTML before PHP opening tag
// Buffer the output to prevent headers already sent error
ob_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Étudiant</title>
    //<?php include "connexion.php"; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --background-color: #f8f9fa;
            --text-color: #2c3e50;
            --hover-color: #e74c3c;
            --select-bg: #fff;
            --transition: all 0.3s ease-in-out;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--background-color);
        }

        .header {
            
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
            width: 30%;
            backdrop-filter: blur(10px);
            padding: 1rem;
			margin-left:480px;
			margin-top:40px;
        }

        .nav-container {
            max-width: 30px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .select-group {
            position: relative;
            min-width: 280px;
        }

        .select-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--text-color);
            font-weight: 500;
            font-size: 0.9rem;
        }

        .custom-select {
            width: 100%;
            padding: 0.8rem 1rem;
            font-size: 1rem;
            border: 2px solid rgba(44, 62, 80, 0.1);
            border-radius: 8px;
            background-color: var(--select-bg);
            color: var(--text-color);
            cursor: pointer;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 1em;
            transition: var(--transition);
        }

        .custom-select:hover, .custom-select:focus {
            border-color: var(--hover-color);
            box-shadow: 0 2px 8px rgba(231, 76, 60, 0.1);
        }

        .custom-select option {
            padding: 1rem;
        }

        .inscription-btn {
            display: inline-block;
            text-decoration: none;
            background-color: var(--hover-color);
            
            padding: 0.8rem 2rem;
            border-radius: 8px;
            font-weight: bold;
            transition: var(--transition);
            text-align: center;
           

        .inscription-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(231, 76, 60, 0.2);
        }

        .inscription-btn i {
            margin-right: 8px;
        }

        @media screen and (max-width: 768px) {
            .nav-container {
                flex-direction: column;
                gap: 1rem;
            }

            .select-group {
                width: 100%;
            }

            .custom-select {
                width: 100%;
            }

            .inscription-btn {
                width: 30%;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="nav-container">
           
            <!-- Inscription Button -->
            <a href="inscription.php" class="inscription-btn">
                <i class="fas fa-user-plus"></i>INSCRIPTION
            </a>
        </div>
    </header>
</body>
</html>