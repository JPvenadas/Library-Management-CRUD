<?php

    function Opencon(){
        $conn = mysqli_connect('127.0.0.2:3307','root','','db_library');
        if(!$conn){
         echo "Connection Error" . mysqli_error;
        }
        return $conn;
    }

   function addbook(){
    if(isset($_POST['Add'])){
        $conn =  Opencon();
        $bookname = $_POST['BookName'];
        $author = $_POST['Author'];
        $stocks = $_POST['Stocks'];
        $command = "insert into TBL_books(BookName, Author, Stocks) values('$bookname','$author','$stocks')";
        if(mysqli_query($conn,$command)){
            header('Location: index.php');
        }
        mysqli_close($conn);
       }
   }
   
   Function deleteBook(){
    if(isset($_POST['Delete'])){
        $conn =  Opencon();
        $ID = $_POST['BookID'];
        $command = "delete from TBL_books where BookID='$ID'";
        if(mysqli_query($conn,$command)){
            header('Location: index.php');
        }
        mysqli_close($conn);
       }
   }
   
?>