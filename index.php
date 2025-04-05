<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Basic Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-image: url('https://via.placeholder.com/1500x900');
            background-size: cover;
            background-repeat: no-repeat;
        }

        nav {
            background-color: #333;
            overflow: hidden;
            padding: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 14px 16px;
            display: inline-block;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        header, footer {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }

        section {
            padding: 20px;
            background-color: rgba(255,255,255,0.8);
            margin: 20px;
        }

        button {
            padding: 10px 15px;
            margin-top: 10px;
        }

        input[type="text"], input[type="email"] {
            padding: 10px;
            margin: 5px 0;
            width: 100%;
        }

        video {
            max-width: 100%;
            height: auto;
        }
    </style>
    <script>
        function showMessage() {
            alert("Thanks for clicking the button!");
        }
    </script>
</head>
<body>

<nav>
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#video">Video</a>
    <a href="#contact">Contact</a>
</nav>

<header>
    <h1>Welcome to the Website</h1>
</header>

<section id="home">
    <h2>Home Section</h2>
    <p>This is a basic website built using HTML, CSS, JavaScript, and PHP in one file.</p>
    <button onclick="showMessage()">Click Me</button>
</section>

<section id="about">
    <h2>About Section</h2>
    <p>This section contains some text describing the purpose of the website.</p>
</section>

<section id="video">
    <h2>Video Section</h2>
    <video controls>
        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</section>

<section id="contact">
    <h2>Contact Us</h2>
    <form method="post" action="#contact">
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Submit</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            echo "<p>Thank you, $name. We have received your message at $email.</p>";
        }
    ?>
</section>

<footer>
    <p>&copy; 2025 Basic Website</p>
</footer>

</body>
</html>
