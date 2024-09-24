<!DOCTYPE html>
<html>
<head>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- 
    - primary meta tags
  -->
  <title>Grilli - Amazing & Delicious Food</title>
  <meta name="title" content="Grilli - Amazing & Delicious Food">


  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">


  <style>
    /* Add CSS styles for specific elements */
    body {
        background-color: hsl(38, 61%, 73%); /* Background color for the entire page */
    }

    h1 {
        color: red; /* Text color for the h1 element */
    }

     /* Style the footer container */
.footer {
    background-color: #1a1a1a; /* Set your desired background color or use the background image */
    color: #fff; /* Set the text color */
    padding: 60px 0;
}

/* Style the footer brand section */
.footer-brand {
    text-align: center;
}

.footer-brand .logo img {
    max-width: 160px; /* Set the maximum logo width */
    height: auto; /* Maintain aspect ratio */
}

/* Style the contact information */
.footer-brand address, .footer-brand .contact-link {
    color: #ccc; /* Set the contact information text color */
    margin: 10px 0;
}

/* Style the "Get News & Offers" section */
.title-1 {
    color: #fff; /* Set the title color */
}

.label-1 {
    color: #ccc; /* Set the label text color */
}

.label-1 .span {
    color: #ff6600; /* Set the color for the "25% Off" span */
}

.input-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;

}

.icon-wrapper ion-icon {
    color: #ff6600; /* Set the icon color */
    font-size: 24px; /* Set the icon size */
    margin-right: 10px;
    align-items: center;
}

.input-field {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc; /* Set the input field border */
    border-radius: 4px; /* Add rounded corners */
    color: #333; /* Set text color */
}

.btn-secondary {
    background-color: #ff6600; /* Set the button background color */
    color: #fff; /* Set the button text color */
    border: none;
    padding: 10px 20px;
    border-radius: 4px; /* Add rounded corners */
    cursor: pointer;
}

/* Style the footer list */
.footer-list {
    list-style: none;
    padding: 0;
}

.footer-link {
    color: #ccc; /* Set the link text color */
    text-decoration: none;
    margin-bottom: 10px;
    display: block;
    transition: color 0.3s; /* Add a smooth color transition on hover */
}

.footer-link:hover {
    color: #ff6600; /* Set the link color on hover */
}

/* Style the copyright section */
.copyright {
    text-align: center;
    color: #ccc; /* Set the copyright text color */
    margin-top: 20px;
}

</style>

</head>
<body>
    <h1 class="text-center mt-3">Booked Timings</h1>

    <?php
    include "conf.php";
    $sql = "select * from booktable";
    $result = mysqli_query($conn, $sql);
    ?>

    <div class="container mt-3">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Customer Name</th>
                    <th>Telephone No</th>
                    <th>Number of Person</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $cusName = $row["cusname"];
                        $teleNo = $row["teleno"];
                        $no_of_per = $row["noofper"];
                        $date = $row["date"];
                        $time = $row["time"];

                        echo '<tr>
                                <td>' . $cusName . '</td>
                                <td>' . $teleNo . '</td>
                                <td>' . $no_of_per . '</td>
                                <td>' . $date . '</td>
                                <td>' . $time . '</td>
                            </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <footer class="footer section has-bg-image text-center" style="background-image: url('./assets/images/footer-bg.jpg')" id="footer">
        <div class="container">
            <div class="footer-top grid-list">
                <div class="footer-brand has-before has-after">
                    <a href="#" class="logo">
                        <img src="./assets/images/logo.svg" width="160" height="50" loading="lazy" alt="grilli home">
                    </a>
                    <address class="body-4">
                    Restaurant St, Nugegoda, Sri Lanka
                    </address>
                    <a href="mailto:booking@grilli.com" class="body-4 contact-link">booking@grilli.com</a>
                    <a href="" class="body-4 contact-link">Booking Request : +94 77 1234567</a>
                    <p class="body-4">
                        Open : 09:00 am - 10:00 pm
                    </p>
                    <div class="wrapper">
                        <div class="separator"></div>
                        <div class="separator"></div>
                        <div class="separator"></div>
                    </div>
                    <p class="title-1">Get News & Offers</p>
                    <p class="label-1">
                        Subscribe us & Get <span class="span">25% Off.</span>
                    </p>
                    <form action="" class="input-wrapper">
                        <div class="icon-wrapper">
                            <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
                            <input type="email" name="email_address" placeholder="Your email" autocomplete="off" class="input-field">
                        </div>
                        <button type="submit" class="btn btn-secondary">
                            <span class="text text-1">Subscribe</span>
                            
                        </button>
                    </form>
                </div>
                <ul class="footer-list">
                    <li>
                        <a href="index.html" class="label-2 footer-link hover-underline">Home</a>
                    </li>
                    <li>
                        <a href="index.html#menu" class="label-2 footer-link hover-underline">Menus</a>
                    </li>
                    <li>
                        <a href="index.html#about" class="label-2 footer-link hover-underline">About Us</a>
                    </li>
                    <li>
                        <a href="display.php" class="label-2 footer-link hover-underline">Booked Timings</a>
                    </li>
                    <li>
                        <a href="index.html#footer" class="label-2 footer-link hover-underline">Contact</a>
                    </li>
                </ul>
                
            </div>
            <div class="footer-bottom">
                <p class="copyright">
                    &copy; 2023 Grilli. All Rights Reserved
                </p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


