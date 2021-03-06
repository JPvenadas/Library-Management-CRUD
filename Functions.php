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
            $BookName = $_POST['BookName'];
            $Author = $_POST['Author'];
            $stocks = $_POST['Stocks'];
            $command = "insert into TBL_books(BookName, Author, Stocks) values('$BookName','$Author','$stocks')";
            if(mysqli_query($conn,$command)){
                header('Location: index.php');
            }
            mysqli_close($conn);
        }
        if(isset($_POST['Delete'])){
            $conn =  Opencon();
            $ID = $_POST['BookID'];
            $command = "delete from TBL_books where BookID='$ID'";
            if(mysqli_query($conn,$command)){
                header('Location: index.php');
            }
            mysqli_close($conn);
        }
        if(isset($_POST['Update'])){
            $conn =  Opencon();
            $BookID = $_POST['Update_BookID'];
            $BookName = $_POST['Update_BookName'];
            $Author = $_POST['Update_Author'];
            $Stocks = $_POST['Update_Stocks'];
            $command = "update TBL_books set BookName='$BookName', Author='$Author', Stocks='$Stocks' where BookID = '$BookID'";
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

   Function readTransactions($type){
    $conn = Opencon();
    $command = "select TransactionsID, B.BookID, StudentName, BookName, TransactionType, Date
                from TBL_transactions as T inner join TBL_students as S
                on T.StudentID = S.StudentID
                inner join TBL_books as B
                on T.BookID = B.BookID
                where TransactionType = '$type'";
    $result = mysqli_query($conn, $command);
    $Transactions = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    return $Transactions;
   }

   Function UpdateStocks($ID, $Operation){
       $conn = Opencon();
       $command = "select Stocks from TBL_books where BookID = '$ID'";
       $result = mysqli_fetch_row(mysqli_query($conn, $command));
       $stocks = $result[0];
       mysqli_close($conn);
       if($Operation == "Increment"){
        $stocks++;
       }
       elseif($Operation == "Decrement"){
        $stocks--;
       }
       $conn2 = Opencon();
       $command2 = "update TBL_books set Stocks = '$stocks' where BookID = '$ID'";
       mysqli_query($conn2, $command2);
       mysqli_close($conn2);
   }
   Function TransactionChanges(){
    if(isset($_POST['AddTransaction'])){
        $conn = Opencon();
        $StudentID = $_POST['StudentID'];
        $BookID = $_POST['BookID'];
        UpdateStocks($BookID, "Decrement");
        $Date = $_POST['Date'];
        $FormattedDate = date("Y/m/d", strtotime($Date));
        $command = "insert into TBL_transactions(StudentID, BookID, Date, TransactionType) values('$StudentID','$BookID','$FormattedDate', 'Borrowing')";
        if(mysqli_query($conn,$command)){
            header('Location: transactions.php');
        }
        mysqli_close($conn);
    }
    if(isset($_POST['Return'])){
        $conn = Opencon();
        $TransacID = $_POST['TransactionsID'];
        $BookID = $_POST['BookID'];
        UpdateStocks($BookID, "Increment");
        $date = date("Y/m/d");
        $command = "update TBL_transactions set TransactionType = 'Returning', Date = '$date' where TransactionsId = '$TransacID'";
        if(mysqli_query($conn,$command)){
            header('Location: transactions.php');
        }
        mysqli_close($conn);
    }
    if(isset($_POST['DeleteTransaction'])){
        $conn = Opencon();
        $TransacID = $_POST['TransactionsID'];
        $BookID = $_POST['BookID'];
        UpdateStocks($BookID, "Increment");
        $command = "delete from TBL_transactions where TransactionsID = '$TransacID'";
        if(mysqli_query($conn,$command)){
            header('Location: transactions.php');
        }
        mysqli_close($conn);
    }
   }

?>