<?php
@include 'config.php'; // Include your database connection code
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit();
}

// Rest of your dashboard code
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard - LankaBangla Securities</title>
</head>
<body>
    <!-- Header -->
    <header class="bg-gray-800 p-4">
        <div class="flex justify-between container mx-auto">
            <a href="#" class="flex items-center text-white text-xl">
                LankaBangla Securities
            </a>
            <div class="mr-4 hover:text-blue-100">
                <span class="inline-flex mr-1">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    <a href="logout.php">Logout</a>
                </span>
            </div>
        </div>
    </header>
    <!-- End of Header -->

    <!-- Main Content -->
    <div class="container mx-auto mt-6 p-4">
        <!-- Sidebar -->
        <div class="sidebar">
            <a href="info.html" class="theme-blue py-2">Customer Account Opening Form</a>
            <a href="openform.html" class="theme-blue py-2">Account Opening Form</a>
            <a href="address.html" class="theme-blue py-2">About</a>
            <!-- Add more links to your sidebar as needed -->
        </div>

        <!-- Content Area -->
        <div class="tag">
            <h2 class="text-2xl font-bold mb-4">
                Welcome to LankaBangla Securities Dashboard
            </h2>
            <!-- Add your dashboard content here -->
        </div>
    </div>
    <!-- End of Main Content -->
</body>
</html>
