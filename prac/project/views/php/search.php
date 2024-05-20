<?php 
    require_once('../../models/condb.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Consultant</title>
    <link rel="stylesheet" href="../css/styleSearchv.css">
</head>

<body>
    <form action="" method="get">
        <h2>Search Consultant</h2>
        <input type="text" name="search" value="<?php if (isset($_GET['search'])) {echo $_GET['search'];} ?>" placeholder="Type here to search...">
        <button type="subbmit">Search</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Speciality</th>
                <th>Degree</th>
                <th>Availability</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if (isset($_GET['search']))
                {
                    $searchValues = $_GET['search'];
                    $con = conn();
                    $query = "select * from consultants where concat(cons_name, speciality, availibility) like '%$searchValues%'";
                    $result = mysqli_query($con, $query);
                    $row = mysqli_num_rows($result);

                    if ($row > 0)
                    {
                        foreach ($result as $value)
                        {
                            ?>
                            <tr>
                                <td><?= $value['cons_id'];?></td>
                                <td><?= $value['cons_name'];?></td>
                                <td><?= $value['speciality'];?></td>
                                <td><?= $value['degree'];?></td>
                                <td><?= $value['availibility'];?></td>
                            </tr>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                            <tr>
                                <td colspan="5">No Record Found</td>
                            </tr>
                        <?php
                    }
                }
             ?>
        </tbody>
    </table>
</body>
</html>