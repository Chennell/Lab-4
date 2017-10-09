
        <div class="line">
            <h2>Search Book</h2>
            <form action="browsebook.php" method="POST">
                <table cellpadding="8">
                    <tbody>
                        <tr>
                            <td>Title:</td>
                            <td><INPUT type="text" name="searchtitle"></td>
                        </tr>
                        <tr>
                            <td>Author:</td>
                            <td><INPUT type="text" name="searchauthor"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><INPUT type="submit" name="submit" value="Submit"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
            
            
            <?php  
                # This is the mysqli version

                $searchtitle = "";
                $searchauthor = "";

                if (isset($_POST) && !empty($_POST)) {
                # Get data from form
                    $searchtitle = trim($_POST['searchtitle']);
                    $searchauthor = trim($_POST['searchauthor']);
                }

                //	if (!$searchtitle && !$searchauthor) {
                //	  echo "You must specify either a title or an author";
                //	  exit();
                //	}
                
                //This is to protect the forms from the XSS
                $searchtitle = htmlentities($searchtitle);
                $searchtitle = mysqli_real_escape_string($db, $searchtitle);

                $searchauthor = htmlentities($searchauthor);
                $searchauthor = mysqli_real_escape_string($db, $searchauthor);

                $searchtitle = addslashes($searchtitle);
                $searchauthor = addslashes($searchauthor);

                # Open the database
                @ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

                if ($db->connect_error) {
                    echo "could not connect: " . $db->connect_error;
                    printf("<br><a href=index.php>Return to home page </a>");
                    exit();
                }

                # Build the query. Users are allowed to search on title, author, or both

                $query = "select bookid, Author, Title from Book";
                if ($searchtitle && !$searchauthor) { // Title search only
                    $query = $query . " where Title like '%" . $searchtitle . "%'";
                }
                if (!$searchtitle && $searchauthor) { // Author search only
                    $query = $query . " where Author like '%" . $searchauthor . "%'";
                }
                if ($searchtitle && $searchauthor) { // Title and Author search
                    $query = $query . " where Title like '%" . $searchtitle . "%' and Author like '%" . $searchauthor . "%'"; // unfinished
                }

                //$query = "SELECT ISBN, Author, Title FROM Book where Title like '%cool%'"





                //echo "Running the query: $query <br/> Title is: $searchtitle"; # For debugging


                // Here's the query using an associative array for the results
                //$result = $db->query($query);
                //echo "<p> $result->num_rows matching books found </p>";
                //echo "<table border=1>";
                //while($row = $result->fetch_assoc()) {
                //echo "<tr><td>" . $row['bookid'] . "</td> <td>" . $row['title'] . "</td><td>" . $row['author'] . "</td></tr>";
                //}
                //echo "</table>";


                // Here's the query using bound result parameters
                    // echo "we are now using bound result parameters <br/>";
                    $stmt = $db->prepare($query);
                    $stmt->bind_result( $ISBN, $Author, $Title);
                    $stmt->execute();

                    echo '<table bgcolor="#dddddd" cellpadding="6">';
                    echo '<tr><b><td>Title</td> <td>Author</td> <td>ISBN</td> </b> </tr>';
                    while ($stmt->fetch()) {
                        echo "<tr>";
                        echo "<td> $Title </td><td> $Author </td><td> $ISBN </td>";
                        echo '<td><a href="reserveBook.php?bookid=' . urlencode($ISBN) . '"> Reserve </a></td>';
                        echo "</tr>";
                    }
                    echo "</table>";
            ?>

            
            
            
            <!--
        
            WHAT WOULD THIS PART OF CODE DO???
            
            
            -->
            
            <?php
//            if (isset($_COOKIE['colourpreference']))
//                    $colourpreference = $_COOKIE['colourpreference'];
//                else
//                    $colourpreference = "#dddddd";
//                echo '<table bgcolor="' . $colourpreference . '" cellpadding="6">';
//                
//                ?>