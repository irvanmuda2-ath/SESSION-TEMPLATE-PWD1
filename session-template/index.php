<php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: loginForm.php");
    exit();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url('assets/bg.jpg');
        }

        nav {
            display: flex;
            justify-content: space-between;
            background-color: rgb(1, 24, 53);
            color: white;
            margin: 0 100px 0 100px;
            border-radius: 30px;
        }

        h1 {
            margin-left: 40px;
        }

        ul {
            display: flex;
            gap: 30px;
            margin-top: 35px;
        }

        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            color: #47a7e7ff;
        }

        li {
        list-style-type: none;
        }

        .material-icons {
            font-size: 35px;
            margin: 30px;
        }


        section {
            display: flex;
            justify-content: center;
        }

        .img-container {
            background-color: white;
            padding: 50px;
            box-shadow: 5px 5px 10px black;
            border-radius: 20%;
            margin-top: 100px;
            text-align: center;
        }

        img {
            width: 150px;
            height: 150px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <h1>Laboratorium Teknik Informatika</h1>

        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Profile</a></li>
        </ul>

         <i class="material-icons"><a href="#">logout</a></i>
    </nav>

    <section>
        <div class="img-container">
            <img src="assets/Logo-Laboratorium.png" alt="">
            <h1>Selamat Datang, <?php echo $_SESSION di Laboratorium Teknik Informatika</h1>
        </div>
    </section>
</body>
</html>