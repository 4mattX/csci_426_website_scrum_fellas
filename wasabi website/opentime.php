<!--  File Created By Collin Ardoin-->

<!--  File is necessary to retrieve data regarding the operating hours-->
<?php
            $dbhost = "sql9.freesqldatabase.com";
            $dbuser = "sql9580202";
            $dbpass = "TYpymQBFpf";
            $db = "sql9580202";
            $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

            if(!$conn)
            {
                die("Connection failed!" . mysqli_connect_error());
            }
            else 
            {
                echo "";
            }

            $sql = "SELECT * FROM hours";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0)
            {
                echo '<div class="column"><table class="center" style="font-size: 20px;" height="15px"> <tr> 
                <th height="94px"> Days </th> 
                <th height="94px"> Hours </th> 
                </tr>';
                while($row = mysqli_fetch_assoc($result))
                {
                    echo '<tr>
                    <td style="text-align: center" height="94px">' . $row["WeekDay"] . '</td>
                    <td style="text-align: center" height="94px"> ' . $row["OpenTime"] . '</td>
                    </tr>';

                }
                echo '</table>';
            }
            else
            {
                echo "0 results";
            }
            mysqli_close($conn);
?>