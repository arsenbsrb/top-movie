<?php
include 'security.php';
include 'includes/db_admin.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/user_bar.php';
?>
<?php  if(isset($_SESSION['success']) && $_SESSION['success']!=""): ?>
      <h3 class="text-success text-center"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></h3>
    <?php  endif;?>
 <h2 class="text-center">I курс</h2>

		<!-- Earnings (Monthly) Card Example -->
    <?php

        $query1 = $link1->query("SELECT * FROM course_1w");
        $row = $query1->fetch_all(MYSQLI_ASSOC);

     ?>

     <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Group</th>
      <th scope="col">lab</th>
      <th scope="col">File</th>
      <th scope="col">Mark</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach($row as $key): ?>
    <tr>
      <td><?php echo $key['name']; ?></td>
      <td><?php echo $key['lastname']; ?></td>
      <td><?php echo $key['grupa']; ?></td>
      <td><?php echo $key['lab_num']; ?></td>
      <td><a href="../<?php echo $key['lab']; ?>">Download</a></td>
      <td><?php echo $key['mark']; ?></td>
      <td>
<form action="word_edit.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="edit_id" value="<?php echo $key['id'];?>">
<button type="submit" name="edit1_btn" class="btn btn-sm btn-primary mr-3">Get mark</button>
</form>
      </td>
      <td>
<form action="actions.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="delete_id" value="<?php echo $key['id'];?>">
<button type="submit" name="delete_btn_word1" class="btn btn-sm btn-danger">Delete</button>
</form>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>




<h2 class="text-center">II курс</h2>

    <!-- Earnings (Monthly) Card Example -->
    <?php

        $query1 = $link1->query("SELECT * FROM course_2w");
        $row = $query1->fetch_all(MYSQLI_ASSOC);

     ?>

     <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Group</th>
      <th scope="col">lab</th>
      <th scope="col">File</th>
      <th scope="col">Mark</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($row as $key): ?>
    <tr>
      <td><?php echo $key['name']; ?></td>
      <td><?php echo $key['lastname']; ?></td>
      <td><?php echo $key['grupa']; ?></td>
      <td><?php echo $key['lab_num']; ?></td>
      <td><a href="../<?php echo $key['lab']; ?>">Download</a></td>
      <td><?php echo $key['mark']; ?></td>
      <td>
<form action="word_edit.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="edit_id" value="<?php echo $key['id'];?>">
<button type="submit" name="edit2_btn" class="btn btn-sm btn-primary mr-3">Get mark</button>
</form>
      </td>
      <td>
<form action="actions.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="delete_id" value="<?php echo $key['id'];?>">
<button type="submit" name="delete_btn_word2" class="btn btn-sm btn-danger">Delete</button>
</form>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>




<h2 class="text-center">III курс</h2>

    <!-- Earnings (Monthly) Card Example -->
    <?php

        $query1 = $link1->query("SELECT * FROM course_3w");
        $row = $query1->fetch_all(MYSQLI_ASSOC);

     ?>

     <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Group</th>
      <th scope="col">lab</th>
      <th scope="col">File</th>
      <th scope="col">Mark</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($row as $key): ?>
    <tr>
      <td><?php echo $key['name']; ?></td>
      <td><?php echo $key['lastname']; ?></td>
      <td><?php echo $key['grupa']; ?></td>
      <td><?php echo $key['lab_num']; ?></td>
      <td><a href="../<?php echo $key['lab']; ?>">Download</a></td>
      <td><?php echo $key['mark']; ?></td>
      <td>
<form action="word_edit.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="edit_id" value="<?php echo $key['id'];?>">
<button type="submit" name="edit3_btn" class="btn btn-sm btn-primary mr-3">Get mark</button>
</form>
      </td>
      <td>
<form action="actions.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="delete_id" value="<?php echo $key['id'];?>">
<button type="submit" name="delete_btn_word3" class="btn btn-sm btn-danger">Delete</button>
</form>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>



<h2 class="text-center">IV курс</h2>

    <!-- Earnings (Monthly) Card Example -->
    <?php

        $query1 = $link1->query("SELECT * FROM course_4w");
        $row = $query1->fetch_all(MYSQLI_ASSOC);

     ?>

     <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Group</th>
      <th scope="col">lab</th>
      <th scope="col">File</th>
      <th scope="col">Mark</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($row as $key): ?>
    <tr>
      <td><?php echo $key['name']; ?></td>
      <td><?php echo $key['lastname']; ?></td>
      <td><?php echo $key['grupa']; ?></td>
      <td><?php echo $key['lab_num']; ?></td>
      <td><a href="../<?php echo $key['lab']; ?>">Download</a></td>
      <td><?php echo $key['mark']; ?></td>
      <td>
<form action="word_edit.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="edit_id" value="<?php echo $key['id'];?>">
<button type="submit" name="edit4_btn" class="btn btn-sm btn-primary mr-3">Get mark</button>
</form>
      </td>
      <td>
<form action="actions.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="delete_id" value="<?php echo $key['id'];?>">
<button type="submit" name="delete_btn_word4" class="btn btn-sm btn-danger">Delete</button>
</form>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>










 <?php
include 'includes/scripts.php';
include 'includes/footer.php';
  ?>
