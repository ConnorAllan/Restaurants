<?php

class RestaurantLists {

    public function __construct($db) {
        $this->db = $db;
        $sql = "SELECT * FROM `list` ORDER BY `Type`, `Cost`, `Name`";
        $data = "";

        $results = $this->db->select($sql, $data, 0, 1, 0, 0);

        if ($results) {
            echo '<table>';
            echo '<tr>';
            echo '<th>Name</th>';
            echo '<th>Type</th>';
            echo '<th>Cost</th>';
            echo '<th>Address</th>';
            echo '<th>Time</th>';
            echo '</tr>';
            foreach ($results as $row) {
                echo '<tr>';
                echo '<td>' . $row["Name"] . '</td>';
                echo '<td>' . $row["Type"] . '</td>';
                echo '<td>' . $row["Cost"] . '</td>';
                echo '<td>' . $row["Address"] . '</td>';
                echo '<td>' . $row["Time"] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
            
            }
    }
}
?>

