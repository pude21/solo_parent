<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
     integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>App Form</title>
</head>
<style>
    input::placeholder {
        color: black; 
        font-family: Arial, bold;
        font-size: large;
    }
    table {
        width: 100px;
        border-collapse: collapse;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
    }
    table, th, td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: left;
    }
    th, td {
        min-width: 100px;
        background-color: #f8f9fa;
    }
    th {
        background-color: #007bff;
        color: white;
        font-weight: bold;
        font-size: 1.1rem;
        text-transform: uppercase;
        padding: 12px;
        position: sticky;
        top: 0; /* Makes header sticky */
        z-index: 2; /* Ensures header is above table content */
    }
    tbody tr:nth-child(even) {
        background-color: #f2f2f2; /* Alternating row color */
    }
    tbody tr:hover {
        background-color: #e9ecef; /* Highlight on hover */
    }
    .add-btn {
        border-radius: 10px; 
        margin-bottom: 18px; 
        border: none;
        color: white;
        background-color: #28a745;
        padding: 8px 16px;
        font-weight: bold;
    }
    .add-btn:hover {
        background-color: #218838;
    }
</style>
<body>
    <nav class="navbar navbar-light bg-primary justify-content-center fs-3 mb-5">
        <span class="navbar-brand mb-0 h1 text-white">Application Portal</span>
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>APPLICATION FORM FOR SOLO PARENT</h3>
        </div>
        
        <div class="text-end mb-3">
            <a href="app_form.php"><button class="add-btn">Add New</button></a>
        </div>
        
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Philsys Card Number</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Age</th>
                        <th scope="col">Place of Birth</th>
                        <th scope="col">Sex</th>
                        <th scope="col">Address</th>
                        <th scope="col">Educational Attainment</th>
                        <th scope="col">Civil Status</th>
                        <th scope="col">Occupation</th>
                        <th scope="col">Religion</th>
                        <th scope="col">Company/Agency</th>
                        <th scope="col">Monthly Income</th>
                        <th scope="col">Employment Status</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">LGBTQ+</th>
                        <th scope="col">Migrant Worker</th>
                        <th scope="col">Pantawid Beneficiary</th>
                        <th scope="col">Indigenous Person</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "data_connect.php";
                    $sql = "SELECT * FROM `solo_parent`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['fullname'] ?></td>
                            <td><?php echo $row['philsys_card_number'] ?></td>
                            <td><?php echo $row['date_of_birth'] ?></td>
                            <td><?php echo $row['age'] ?></td>
                            <td><?php echo $row['place_of_birth'] ?></td>
                            <td><?php echo $row['sex'] ?></td>
                            <td><?php echo $row['address'] ?></td>
                            <td><?php echo $row['civil_status'] ?></td>
                            <td><?php echo $row['educational_attainment'] ?></td>
                            <td><?php echo $row['occupation'] ?></td>
                            <td><?php echo $row['religion'] ?></td>
                            <td><?php echo $row['company_agency'] ?></td>
                            <td><?php echo $row['monthly_income'] ?></td>
                            <td><?php echo $row['employment_status'] ?></td>
                            <td><?php echo $row['contact_number'] ?></td>
                            <td><?php echo $row['email_address'] ?></td>
                            <td><?php echo $row['pantawid_beneficiary'] ?></td>
                            <td><?php echo $row['indigenous_person'] ?></td>
                            <td><?php echo $row['are_you_a_migrant_worker'] ?></td>
                            <td><?php echo $row['lgbtq'] ?></td>
                            <td>
                                <a href="edit_form.php?id=<?php echo $row['id'] ?>" class="link-dark">
                                    <i class="fa-solid fa-pen-to-square fs-5 me-3"></i>
                                </a>
                                <a href="delete_info.php?id=<?php echo $row['id'] ?>" class="link-dark">
                                    <i class="fa-solid fa-trash fs-5"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
