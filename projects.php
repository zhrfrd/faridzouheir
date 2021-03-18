<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="../stylesheets/pageStyle.css">
</head>
<body>
    <!-- HEADER -->
    <?php include 'assets/header.php' ?>

    <!-- NAVIGATION BAR -->
    <?php include 'assets/navigation.php' ?>

    <!-- MAIN CONTENT -->
    <main id="main">
        <section class="section">
            <div id="myProjects">
                <h1>My projects</h1>
                <p>This section contains a list of projects made by me</p>
                <ul>
                    <li><a href="projects/roulette.php">Roulette</a></li>
                    <li><a href="projects/mastermind.php">Mastermind</a></li>
                </ul>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <?php include 'assets/footer.php' ?>

    <!-- Javascript -->
    <script>

        changeNavActiveId();   //Change the id of the tab (inside the top navigation) relative the the actual page to "active" in order change the color through CSS

        function changeNavActiveId() 
        {
            document.getElementById("projects").id = "active";
            document.getElementById("searchBarText").textContent = "Projects";
        }

    </script>
</body>
</html>