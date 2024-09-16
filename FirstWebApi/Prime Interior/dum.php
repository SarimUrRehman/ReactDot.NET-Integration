<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertical Navbar with Dropdown</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* General Styles */
html, body {
    height: 100%;
    margin: 0;
    font-family: Arial, sans-serif;
}

/* Vertical Navbar */
.vertical-Navbar {
    width: 18%;
    height: 100%;
    background-color: #E9C874;
    border: #E9C874 2px solid;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 1rem;
    border-radius: 10px;
    margin-left: 8px;
    position: fixed; /* Ensure it stays fixed on the left */
    top: 0;
    left: 0;
    padding-top: 20px;
}

/* Navbar Links */
.vertical-Navbar a {
    text-decoration: none;
    color: #fff;
    font-size: 1.2rem;
    font-weight: 200;
}

/* Navbar List */
.vertical-tab ul {
    list-style-type: none;
    padding: 0;
    width: 100%;
    text-align: center;
}

/* List Items */
.vertical-tab ul li {
    position: relative;
    width: 100%;
}

/* List Links */
.vertical-tab ul li a {
    display: block;
    padding: 15px 20px;
    color: #fff;
    text-decoration: none;
    font-size: 18px;
    background-color: #B89B5B;
    margin: 5px 0;
    border-radius: 5px;
}

/* Dropdown Menu */
.ul-dropdown {
    list-style-type: none;
    padding: 0;
    margin: 0;
    width: 100%;
    background-color: #C0DDE8;
    position: absolute;
    top: 100%; /* Position it below the parent */
    left: 0;
    z-index: 999;
    display: none;
    border-radius: 5px;
}

/* Dropdown List Items */
.ul-dropdown li a {
    padding: 10px 20px;
    color: #000;
    text-decoration: none;
    display: block;
    text-align: left;
    background-color: #C0DDE8;
    border-radius: 5px;
}

/* Hover Effects */
.vertical-tab ul li a:hover,
.ul-dropdown li a:hover {
    background-color: #A1B2C3;
}

/* Show Dropdown on Click */
.show {
    display: block;
}

</style>
<body>
    <div class="vertical-Navbar">
        <div class="vertical-tab">
            <ul>
                <li><a href="#home">Home</a></li>
                <li class="dropdown">
                    <a href="#services" class="dropbtn">Services</a>
                    <ul class="ul-dropdown">
                        <li><a href="#web">Web Development</a></li>
                        <li><a href="#app">App Development</a></li>
                        <li><a href="#seo">SEO</a></li>
                    </ul>
                </li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
    <script src="script.js">

        
    </script>
</body>
</html>
