<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
    <?php
    if(isset($_POST['showbtn'])){
    $id=$_POST['sid'];
    $con=mysqli_connect('localhost','root','','crud') or die('connection failed!');
    $sql="select *from student where s_id={$id}";
    $result=mysqli_query($con,$sql) or die('query unsuccessful!');

    if(mysqli_num_rows($result)>0){
       while($row=mysqli_fetch_assoc($result)){

    ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="<?php echo $row['s_id']?>"/>
            <input type="text" name="sname" value="<?php echo $row['s_name']?>"/>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row['s_address']?>"/>
        </div>
        <div class="form-group">
        <label>Class</label>
        <?php
        $sql1='select *from student_class';
        $result1=mysqli_query($con,$sql1) or die('query unsuccessful!');
        echo '<select name="sclass">';
        while($row1=mysqli_fetch_assoc($result1)){
            if($row['s_class']==$row['c_id'])
            $select='selected';
            else
            $select='';
            echo "<option value='{$row1['c_id']}' >{$row1['c_name']}</option>";
        }
        echo "</select>";
        ?>
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $row['s_phone']?>" />
        </div>
    <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
        }
      }
    }
    ?>
</div>
</div>
</body>
</html>