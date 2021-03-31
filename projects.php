<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="../stylesheets/pageStyle.css">
    <script type="text/javascript" src="../scripts/dropdownMenu.js"></script> 
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
                <h2>Search algorithms</h2>
                <ul>
                    <li><a href="algorithms/sortingAlgorithms.php">Sorting algorithms</a></li>
                    <li><a href="algorithms/linearSearch.php">Linear search</a></li>
                    <li><a href="algorithms/binarySearch.php">Binary search</a></li>
                </ul>
                <h2>Sorting algorithms</h2>
                <ul>
                    <li><a href="algorithms/selectionSort.php">Selection sort</a></li>
                    <li><a href="algorithms/bubbleSort.php">Bubble sort</a></li>
                    <li><a href="algorithms/insertionSort.php">Insertion sort</a></li>
                    <li><a href="algorithms/mergeSort.php">Merge sort</a></li>
                    <li><a href="algorithms/quickSort.php">Quick sort</a></li>
                </ul>
                <h2>Mathematics</h2>
                <ul>
                    <li><a href="algorithms/factorial.php">Factorial</a></li>
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