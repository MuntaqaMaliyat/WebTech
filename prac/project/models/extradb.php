
<?php
require_once('condb.php');
function selectConsultants()
{
    $conn = conn();
    $query = "SELECT cons_name FROM consultants";

    $result = mysqli_query($conn, $query);

    $options = '';

    while ($row = mysqli_fetch_assoc($result)) {
        $options .= "<option value='{$row['cons_name']}'>{$row['cons_name']}</option>";
    }

    return $options;
}
?>