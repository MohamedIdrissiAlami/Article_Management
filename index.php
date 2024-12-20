 <?php
  include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Home Page</title>
    <style>
        /* استايل عام للصفحة */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* استايل الهيدر */
        header {
            background-color: #007BFF;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        header nav {
            display: flex;
            gap: 15px;
        }

        header nav a {
            color: white;
            text-decoration: none;
            background-color: #0056b3;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        header nav a:hover {
            background-color: #003f7f;
        }

        /* استايل محتوى الصفحة */
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 15px;
        }

        .articles {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .article {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .article:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .article h2 {
            margin: 0 0 10px;
            font-size: 20px;
        }

        .article p {
            margin: 0;
            font-size: 14px;
            color: #555;
            line-height: 1.6;
        }

        .article .read-more {
            display: inline-block;
            margin-top: 15px;
            color: #007BFF;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .article .read-more:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- الهيدر -->
    <header>
        <h1>Article Management</h1>
        <nav>
            <a href="sign_up.php">Sign Up</a>
            <a href="sign_in.php">Sign In</a>
        </nav>
    </header>

    <!-- محتوى الصفحة -->
    <div class="container">
        <h2>Latest Articles</h2>
        <div class="articles">
            <!-- مقال 1 -->
            <div class="article">
                <h2>Article Title 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut orci vitae nisl dictum facilisis.</p>
                <a href="#" class="read-more">Read More</a>
            </div>

            <!-- مقال 2 -->
            <div class="article">
                <h2>Article Title 2</h2>
                <p>Quisque euismod orci sit amet velit ultricies, nec tincidunt sapien vehicula. Vestibulum feugiat ligula ut dui euismod feugiat.</p>
                <a href="#" class="read-more">Read More</a>
            </div>

            <!-- مقال 3 -->
            <div class="article">
                <h2>Article Title 3</h2>
                <p>Morbi consequat massa vel enim feugiat, vitae tincidunt libero placerat. Aliquam erat volutpat.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
        </div>
    </div>
</body>
</html>
