<?php
   function addbook(){

    if(isset($_POST['Add'])){
        include("connect.php");
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
   
   
?>