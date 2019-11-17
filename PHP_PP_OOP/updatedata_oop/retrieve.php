<div class="col-sm-6">
    <?php
        $sql = "SELECT *FROM student";
        $result=$conn->query($sql);
        if($result->num_rows > 0){
            echo "<table class='table table-hover table-light'>";
                echo "<thead>";
                    echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>Name</th>";
                        echo "<th>Roll</th>";
                        echo "<th>Address</th>";
                        echo "<th>Action</th>";
                    echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while($row = $result->fetch_assoc()){
                    echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['roll']."</td>";
                        echo "<td>".$row['address']."</td>";
                        echo '<td>
                        <form method="POST" action="">
                        <input type="hidden" name="id" value=' . $row["id"] . '>                            
                        <input type="submit" name="delete" class="btn btn-danger" value="Delete">
                        <input type="hidden" name="id" value=' . $row["id"] . '>                            
                        <input type="submit" name="edit" class="btn btn-warning" value="edit">
                        </form></td>';
                    echo "</tr>";
                }
                echo "</tbody>";
            echo "</table>";
        }else{
            echo "0 records";
        }
    ?>
</div><!--col-sm-6-->