<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="../stylesheets/pageStyle.css">
</head>
<body>

    <!-- HEADER -->

    <?php include 'assets/header.php' ?>

    <!-- NAVIGATION BAR -->

    <?php include 'assets/navigation.php' ?>

    <!-- MAIN CONTENT -->

    <main id="main">
        
    </main>

    <!-- FOOTER -->

    <?php include 'assets/footer.php' ?>

    <!-- Javascript -->
    <script>

        changeNavActiveId();   //Change the id of the tab (inside the top navigation) relative the the actual page to "active" in order change the color through CSS

        function changeNavActiveId() 
        {
            document.getElementById("resume").id = "active";
            document.getElementById("searchBarText").textContent = "Resume";
        }

    </script>
</body>
</html>