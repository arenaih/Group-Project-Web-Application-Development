<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DineConnect</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        /* Custom styles */
        :root {
            --background-color: #0c0b09; /* Background color for the entire website, including individual sections */
            --default-color: rgba(255, 255, 255, 0.7); /* Default color used for the majority of the text content across the entire website */
            --heading-color: #ffffff; /* Color for headings, subheadings and title throughout the website */
            --accent-color: #cda45e; /* Accent color that represents your brand on the website. It's used for buttons, links, and other elements that need to stand out */
            --contrast-color: #151411; /* The contrast color is used for elements when the background color is one of the heading, accent, or default colors. Its purpose is to ensure proper contrast and readability when placed over these more dominant colors */
        }

        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');

        body {
            font-family: 'Playfair Display', serif; /* Use Playfair Display font */
            background-color: var(--background-color);
            color: var(--default-color); /* Default color for text */
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: var(--contrast-color); /* Use contrast color for navbar */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            font-size: 28px;
            font-weight: bold;
            color: var(--accent-color); /* Accent color for navbar brand */
            text-decoration: none;
        }

        .navbar-links a {
            margin-left: 20px;
            font-size: 16px;
            text-decoration: none;
            color: var(--heading-color); /* Heading color for navbar links */
            transition: color 0.3s ease;
            padding: 10px 15px;
            border-radius: 5px;
        }

        .navbar-links a:hover {
            background-color: var(--accent-color); /* Accent color on hover for navbar links */
            color: var(--background-color); /* Background color for text on hover */
        }

        .hero {
            height: 100vh; /* Full screen height */
            background: url('{{ asset('images/hero-bg.jpg') }}') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--accent-color); /* Accent color for hero section */
            text-align: center;
            background-attachment: fixed;
        }

        .hero h1 {
        font-size: 48px;
        margin-bottom: 20px;
        color: #fff; /* Change text color to white */
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); /* Add text shadow for black outline */
        }

        .hero h2 {
        font-size: 24px;
        color: #fff; /* Change text color to white */
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); /* Add text shadow for black outline */
        }

        .hero p {
            font-size: 24px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }

        .main-content {
            padding: 60px 20px;
            text-align: center;
        }

        .main-content h2 {
            font-size: 32px;
            margin-bottom: 20px;
            color: var(--heading-color); /* Heading color for main content */
        }

        .main-content p {
            font-size: 18px;
            color: var(--default-color); /* Default color for main content text */
            margin-bottom: 30px;
        }

        .features {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            margin-top: 50px;
        }

        .feature-box {
            background-color: var(--accent-color); /* Accent color for feature boxes */
            color: var(--background-color); /* Background color for text in feature boxes */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 300px;
            width: 100%;
        }

        .feature-box h3 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .feature-box p {
            font-size: 16px;
        }


        .footer {
            background-color: var(--contrast-color); /* Use contrast color for footer */
            color: var(--default-color); /* Default color for footer text */
            text-align: center;
            padding: 20px 0;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>

<body>

    <header class="navbar">
        <div class="container mx-auto">
            <a href="{{ url('/') }}" class="navbar-brand">DineConnect</a>
            <nav class="navbar-links">
                @if (Route::has('login'))
                @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                <a href="{{ route('login') }}">Log in</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth
                @endif
            </nav>
        </div>
    </header>

    <section class="hero">
        <div>
            <h1>Welcome to DineConnect</h1>
            <h2>Discover, book, review, and discuss your favorite restaurants!</h2>
            <div class="features">
                <div class="feature-box">
                    <h3>Discover Restaurants</h3>
                    <p>Find new restaurants based on your preferences and location.</p>
                </div>
                <div class="feature-box">
                    <h3>Book Tables</h3>
                    <p>Make reservations at your favorite restaurants hassle-free.</p>
                </div>
                <div class="feature-box">
                    <h3>Review & Discuss</h3>
                    <p>Share your dining experiences and read reviews from other users.</p>
                </div>
            </div>
        <!-- Additional content can go here -->
        </div>
    </section>

    <footer class="footer">
        <div class="container mx-auto">
            <p>&copy; {{ date('Y') }} DineConnect. All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
