<?php 
$exmneId = $_SESSION['studentSession']['exmne_id'];

// Select Data sa nilogin nga student
$selExmneeData = $conn->query("SELECT * FROM student_tbl WHERE exmne_id='$exmneId' ")->fetch(PDO::FETCH_ASSOC);
$exmneCourse =  $selExmneeData['exmne_course'];


        
// Select and tanang exam depende sa course nga ni login 
$selExam = $conn->query("SELECT * FROM exam_tbl WHERE cou_id='$exmneCourse' ORDER BY ex_id DESC ");


//

 ?>