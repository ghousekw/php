<div class="col-sm-4">
    <?php
        if(isset($_REQUEST['edit'])){
            $sql = "SELECT *FROM STUDENT WHERE id = {$_REQUEST['id']}";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        }
    ?>
    <form action="" method="POST">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="
            <?php if(isset($row['name'])){
                echo $row['name'];
            }?>
            ">
          </div>
          <div class="form-group">
            <label for="roll">Roll</label>
            <input type="text" name="roll" class="form-control"id="roll" value="
            <?php if(isset($row['roll'])){
                echo $row['roll'];
            }?>
            ">
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control"id="address" value="
            <?php if(isset($row['address'])){
                echo $row['address'];
            }?>
            ">
          </div>
          <input type="hidden" name="id" value="<?php echo $row['id'];?>">
          <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
          <button type="submit" name="update" class="btn btn-warning btn-block">Update</button>
        </form>
</div><!--col-sm-4-->
