<?php
include 'security.php';
include 'includes/db_admin.php';


// Create admins
if (isset($_POST['register_btn'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$usertype = 'admin';

	$query = $link1->query("INSERT INTO admins(username,password,usertype) VALUES('$username','$password','$usertype')");
	if ($query) {
		$_SESSION['success'] = 'Your Data is updated';
		header('Location: register.php');
	}
	else {
		$_SESSION['status'] = 'Your Data is not updated';
		header('Location: word.php');
	}

}


// Update admins

if (isset($_POST['update_btn'])) {
	$id = $_POST['edit_id'];
	$username = $_POST['edit_username'];
	$password = $_POST['edit_password'];
	$usertype = $_POST['edit_usertype'];

	$query = $link1->query("UPDATE admins SET username = '$username', password = '$password', usertype = '$usertype' WHERE id = '$id'");

	if ($query) {
		$_SESSION['success'] = 'Your Data is updated';
		header('Location: register.php');
	}
	else {
		$_SESSION['status'] = 'Your Data is not updated';
		header('Location: register.php');
	}

}

// Delete admins
if (isset($_POST['delete_btn'])) {
	$id = $_POST['delete_id'];
	$query = $link1->query("DELETE FROM admins WHERE id = '$id'");
	if ($query) {
		$_SESSION['success'] = 'Your Data is deleted';
		header('Location: register.php');
	}
	else {
		$_SESSION['status'] = 'Your Data is not deleted';
		header('Location: register.php');
	}
}



//Login

if (isset($_POST['login_btn'])) {
	$email_login = $_POST['email'];
	$password_login = $_POST['password'];

	$query = $link1->query("SELECT * FROM admins WHERE username = '$email_login' AND password = '$password_login'");
	$auth = $query->fetch_assoc();
		if ($auth['usertype'] == 'admin') {
			$_SESSION['username'] = $email_login;
			header('Location: ../admin/admin_index.php');
		}
		elseif ($auth['usertype'] == 'user') {
			$_SESSION['status'] = 'You do not have enough permissions';
			header('Location: login.php');
		}
		else {
			$_SESSION['status'] = 'Email or password is invalible';
			header('Location: login.php');
		}
}





// Update Word

if (isset($_POST['update_btn_word4'])) {
	$id = $_POST['edit_id'];
	$mark = $_POST['mark'];


	$query = $link1->query("UPDATE course_4w SET mark = $mark WHERE id = $id");

	if ($query) {
		$_SESSION['success'] = 'Mark is updated';
		header('Location: word.php');
		}
		else {
			$_SESSION['status'] = 'Mark is not updated';
		header('Location: word.php');
		}
}

if (isset($_POST['update_btn_word3'])) {
	$id = $_POST['edit_id'];
	$mark = $_POST['mark'];


	$query = $link1->query("UPDATE course_3w SET mark = $mark WHERE id = $id");

	if ($query) {
		$_SESSION['success'] = 'Mark is updated';
		header('Location: word.php');
		}
		else {
			$_SESSION['status'] = 'Mark is not updated';
		header('Location: word.php');
		}
}

if (isset($_POST['update_btn_word2'])) {
	$id = $_POST['edit_id'];
	$mark = $_POST['mark'];


	$query = $link1->query("UPDATE course_2w SET mark = $mark WHERE id = $id");

	if ($query) {
		$_SESSION['success'] = 'Mark is updated';
		header('Location: word.php');
		}
		else {
			$_SESSION['status'] = 'Mark is not updated';
		header('Location: word.php');
		}
}

if (isset($_POST['update_btn_word1'])) {
	$id = $_POST['edit_id'];
	$mark = $_POST['mark'];


	$query = $link1->query("UPDATE course_1w SET mark = $mark WHERE id = $id");

	if ($query) {
		$_SESSION['success'] = 'Mark is updated';
		header('Location: word.php');
		}
		else {
			$_SESSION['status'] = 'Mark is not updated';
		header('Location: word.php');
		}
}
// Delete Word
if (isset($_POST['delete_btn_word1'])) {
	$id = $_POST['delete_id'];

	$lab = $link1->query("SELECT lab FROM course_1w WHERE id = '$id'");
	$result = $lab->fetch_assoc();
	$labpath ='../'. $result['lab'];
	unlink($labpath);

	$query = $link1->query("DELETE FROM course_1w WHERE id = '$id'");
	if ($query) {
		$_SESSION['success'] = 'Your Word lab is deleted';
		header('Location: word.php');
	}
	else {
		$_SESSION['status'] = 'Your Word lab is not deleted';
		header('Location: word.php');
	}
}

if (isset($_POST['delete_btn_word2'])) {
	$id = $_POST['delete_id'];

	$lab = $link1->query("SELECT lab FROM course_2w WHERE id = '$id'");
	$result = $lab->fetch_assoc();
	$labpath ='../'. $result['lab'];
	unlink($labpath);

	$query = $link1->query("DELETE FROM course_2w WHERE id = '$id'");
	if ($query) {
		$_SESSION['success'] = 'Your Word lab is deleted';
		header('Location: word.php');
	}
	else {
		$_SESSION['status'] = 'Your Word lab is not deleted';
		header('Location: word.php');
	}
}

if (isset($_POST['delete_btn_word3'])) {
	$id = $_POST['delete_id'];

	$lab = $link1->query("SELECT lab FROM course_3w WHERE id = '$id'");
	$result = $lab->fetch_assoc();
	$labpath ='../'. $result['lab'];
	unlink($labpath);

	$query = $link1->query("DELETE FROM course_3w WHERE id = '$id'");
	if ($query) {
		$_SESSION['success'] = 'Your Word lab is deleted';
		header('Location: word.php');
	}
	else {
		$_SESSION['status'] = 'Your Word lab is not deleted';
		header('Location: word.php');
	}
}

if (isset($_POST['delete_btn_word4'])) {
	$id = $_POST['delete_id'];

	$lab = $link1->query("SELECT lab FROM course_4w WHERE id = '$id'");
	$result = $lab->fetch_assoc();
	$labpath ='../'. $result['lab'];
	unlink($labpath);

	$query = $link1->query("DELETE FROM course_4w WHERE id = '$id'");
	if ($query) {
		$_SESSION['success'] = 'Your Word lab is deleted';
		header('Location: word.php');
	}
	else {
		$_SESSION['status'] = 'Your Word lab is not deleted';
		header('Location: word.php');
	}
}

// Update Excel

if (isset($_POST['update_btn_excel4'])) {
	$id = $_POST['edit_id'];
	$mark = $_POST['mark'];


	$query = $link->query("UPDATE course_4e SET mark = $mark WHERE id = $id");

	if ($query) {
		$_SESSION['success'] = 'Mark is updated';
		header('Location: excel.php');
		}
		else {
			$_SESSION['status'] = 'Mark is not updated';
		header('Location: excel.php');
		}
}

if (isset($_POST['update_btn_excel3'])) {
	$id = $_POST['edit_id'];
	$mark = $_POST['mark'];


	$query = $link->query("UPDATE course_3e SET mark = $mark WHERE id = $id");

	if ($query) {
		$_SESSION['success'] = 'Mark is updated';
		header('Location: excel.php');
		}
		else {
			$_SESSION['status'] = 'Mark is not updated';
		header('Location: excel.php');
		}
}

if (isset($_POST['update_btn_excel2'])) {
	$id = $_POST['edit_id'];
	$mark = $_POST['mark'];


	$query = $link->query("UPDATE course_2e SET mark = $mark WHERE id = $id");

	if ($query) {
		$_SESSION['success'] = 'Mark is updated';
		header('Location: excel.php');
		}
		else {
			$_SESSION['status'] = 'Mark is not updated';
		header('Location: excel.php');
		}
}

if (isset($_POST['update_btn_excel1'])) {
	$id = $_POST['edit_id'];
	$mark = $_POST['mark'];


	$query = $link->query("UPDATE course_1e SET mark = $mark WHERE id = $id");

	if ($query) {
		$_SESSION['success'] = 'Mark is updated';
		header('Location: excel.php');
		}
		else {
			$_SESSION['status'] = 'Mark is not updated';
		header('Location: excel.php');
		}
}
// Delete Excel
if (isset($_POST['delete_btn_excel1'])) {
	$id = $_POST['delete_id'];

	$lab = $link->query("SELECT lab FROM course_1e WHERE id = '$id'");
	$result = $lab->fetch_assoc();
	$labpath ='../'. $result['lab'];
	unlink($labpath);

	$query = $link->query("DELETE FROM course_1e WHERE id = '$id'");
	if ($query) {
		$_SESSION['success'] = 'Your Excel lab is deleted';
		header('Location: excel.php');
	}
	else {
		$_SESSION['status'] = 'Your Excel lab is not deleted';
		header('Location: excel.php');
	}
}

if (isset($_POST['delete_btn_excel2'])) {
	$id = $_POST['delete_id'];

	$lab = $link->query("SELECT lab FROM course_2e WHERE id = '$id'");
	$result = $lab->fetch_assoc();
	$labpath ='../'. $result['lab'];
	unlink($labpath);

	$query = $link->query("DELETE FROM course_2e WHERE id = '$id'");
	if ($query) {
		$_SESSION['success'] = 'Your Excel lab is deleted';
		header('Location: excel.php');
	}
	else {
		$_SESSION['status'] = 'Your Excel lab is not deleted';
		header('Location: excel.php');
	}
}

if (isset($_POST['delete_btn_excel3'])) {
	$id = $_POST['delete_id'];

	$lab = $link->query("SELECT lab FROM course_3e WHERE id = '$id'");
	$result = $lab->fetch_assoc();
	$labpath ='../'. $result['lab'];
	unlink($labpath);

	$query = $link->query("DELETE FROM course_3e WHERE id = '$id'");
	if ($query) {
		$_SESSION['success'] = 'Your Word lab is deleted';
		header('Location: excel.php');
	}
	else {
		$_SESSION['status'] = 'Your Word lab is not deleted';
		header('Location: excel.php');
	}
}

if (isset($_POST['delete_btn_excel4'])) {
	$id = $_POST['delete_id'];

	$lab = $link->query("SELECT lab FROM course_4e WHERE id = '$id'");
	$result = $lab->fetch_assoc();
	$labpath ='../'. $result['lab'];
	unlink($labpath);

	$query = $link->query("DELETE FROM course_4e WHERE id = '$id'");
	if ($query) {
		$_SESSION['success'] = 'Your Excel lab is deleted';
		header('Location: excel.php');
	}
	else {
		$_SESSION['status'] = 'Your Word lab is not deleted';
		header('Location: excel.php');
	}
}


 ?>
