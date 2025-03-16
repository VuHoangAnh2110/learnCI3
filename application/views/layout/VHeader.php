<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{$base_url}tailwind/OutCSS/output.css">
    <link rel="stylesheet" href="{$base_url}application/assets/toastr/toastr.min.css">
	<!-- <link href="./tailwind/OutCSS/output.css" rel="stylesheet"> -->
    <script src="https://cdn.tailwindcss.com"></script>

    <title> {$title} </title>
</head>

<body>
    <div class="">
        <header class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg">
            <div class="container mx-auto px-4 py-6 grid grid-cols-1 md:grid-cols-3 items-center gap-4">
                <!-- Logo -->
                <div class="text-center md:text-left">
                    <a href="#" class="text-3xl font-bold tracking-wide">
                        <span class="text-yellow-400">My</span>Learn
                    </a>
                </div>
                
                <!-- Navigation -->
                <nav class="hidden md:flex justify-center space-x-8 text-lg font-medium">
                    <a href="#" class="hover:text-yellow-400 transition duration-200">Home</a>
                    <a href="#" class="hover:text-yellow-400 transition duration-200">Page 2</a>
                    <a href="#" class="hover:text-yellow-400 transition duration-200">Page 3</a>
                    <a href="#" class="hover:text-yellow-400 transition duration-200">Page 4</a>
                </nav>

                <!-- User Actions -->
                <div class="flex justify-center md:justify-end space-x-4">
                    <a href="#" class="px-4 py-2 bg-yellow-400 text-blue-800 font-semibold rounded-lg hover:bg-yellow-500 transition duration-200">Login</a>
                    <a href="#" class="px-4 py-2 bg-white text-blue-800 font-semibold rounded-lg hover:bg-gray-200 transition duration-200">Sign Up</a>
                </div>
            </div>
        </header>
    </div>
    
