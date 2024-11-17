    <!-- <?php

    include ".solo_parent/data_connect.php";

    // Display data from the database
    $sql = "SELECT * FROM `familymembers`"; // Adjust the table name if needed
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        echo '<div class="container my-5">';
        echo '<h3>Household Members Data</h3>';
        echo '<table class="table table-bordered">';
        echo '<thead class="table-light">';
        echo '<tr>
                <th>ID</th>
                <th>Name</th>
                <th>Sex</th>
                <th>Relationship</th>
                <th>Age</th>
                <th>Birthdate</th>
                <th>Civil Status</th>
                <th>Educational Attainment</th>
                <th>Occupation</th>
                <th>Monthly Income</th>
                <th>Reason Solo Parent</th>
                <th>Needs Solo Parent</th>
            </tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . htmlspecialchars($row['name']) . '</td>
                    <td>' . htmlspecialchars($row['sex']) . '</td>
                    <td>' . htmlspecialchars($row['relationship']) . '</td>
                    <td>' . htmlspecialchars($row['age']) . '</td>
                    <td>' . htmlspecialchars($row['birthdate']) . '</td>
                    <td>' . htmlspecialchars($row['civil_status']) . '</td>
                    <td>' . htmlspecialchars($row['educational_attainment']) . '</td>
                    <td>' . htmlspecialchars($row['occupation']) . '</td>
                    <td>' . htmlspecialchars($row['monthly_income']) . '</td>
                    <td>' . htmlspecialchars($row['reason_solo_parent']) . '</td>
                    <td>' . htmlspecialchars($row['needs_solo_parent']) . '</td>
                </tr>';
        }

        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    } else {
        echo '<div class="container my-5">';
        echo '<p>No data found in the database.</p>';
        echo '</div>';
    }
    ?> -->
