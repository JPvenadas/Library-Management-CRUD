<?php

    function Opencon(){
        $conn = mysqli_connect('127.0.0.2:3307','root','','db_library');
        if(!$conn){
         echo "Connection Error" . mysqli_error;
        }
        return $conn;
    }

    Function readBooks(){
        $conn = Opencon();
        $command = "select * from TBL_books";
        $result = mysqli_query($conn, $command);
        $books = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($conn);
        return $books;
    }

    Function BookChanges(){
        if(isset($_POST['Add'])){
            $conn =  Opencon();
            $StudentName = $_POST['StudentName'];
            $YearSection = $_POST['YearSection'];
            $stocks = $_POST['Stocks'];
            $command = "insert into TBL_books(StudentName, YearSection, Stocks) values('$StudentName','$YearSection','$stocks')";
            if(mysqli_query($conn,$command)){
                header('Location: index.php');
            }
            mysqli_close($conn);
        }
        if(isset($_POST['Delete'])){
            $conn =  Opencon();
            $ID = $_POST['StudentID'];
            $command = "delete from TBL_books where StudentID='$ID'";
            if(mysqli_query($conn,$command)){
                header('Location: index.php');
            }
            mysqli_close($conn);
        }
        if(isset($_POST['Update'])){
            $conn =  Opencon();
            $StudentID = $_POST['Update_StudentID'];
            $StudentName = $_POST['Update_StudentName'];
            $YearSection = $_POST['Update_YearSection'];
            $stocks = $_POST['Update_Stocks'];
            $command = "update TBL_books set StudentName='$StudentName', YearSection='$YearSection', Stocks='$stocks' where StudentID = '$StudentID'";
            if(mysqli_query($conn,$command)){
                header('Location: index.php');
            }
            mysqli_close($conn);
        }
    }

   Function readStudents(){
    $conn = Opencon();
    $command = "select * from TBL_students";
    $result = mysqli_query($conn, $command);
    $students = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    return $students;
   }
   Function StudentChanges(){
        if(isset($_POST['AddStudent'])){
            $conn =  Opencon();
            $studentname = $_POST['StudentName'];
            $yearsection = $_POST['YearSection'];
            $command = "insert into TBL_students(StudentName, YearSection) values('$studentname','$yearsection')";
            if(mysqli_query($conn,$command)){
                header('Location: Students.php');
            }
            mysqli_close($conn);
        }
        if(isset($_POST['DeleteStudent'])){
            $conn =  Opencon();
            $ID = $_POST['StudentID'];
            $command = "delete from TBL_students where StudentID='$ID'";
            if(mysqli_query($conn,$command)){
                header('Location: Students.php');
            }
            mysqli_close($conn);
        }
        if(isset($_POST['UpdateStudent'])){
            $conn =  Opencon();
            $StudentID = $_POST['Update_StudentID'];
            $StudentName = $_POST['Update_StudentName'];
            $YearSection = $_POST['Update_YearSection'];
            $command = "update TBL_students set StudentName='$StudentName', YearSection='$YearSection' where StudentID = '$StudentID'";
            if(mysqli_query($conn,$command)){
                header('Location: Students.php');
            }
            mysqli_close($conn);
        }
   }

?>