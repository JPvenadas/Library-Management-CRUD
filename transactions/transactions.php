<?php
  require("../Functions.php");
  TransactionChanges();
  $BorrowTransacs = readTransactions('Borrowing');
  $ReturnTransacs = readTransactions('Returning');
  $students = readStudents();
  $books = readBooks()
?>
<!DOCTYPE html>
<html lang="en">

 <?php include('Header.php') ?>
 <div class="container my-4">
    <div class="mb-1" style="display: flex; justify-content: space-between">
    <ul class="nav nav-pills" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Borrowed</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Returned</button>
    </li>
    </ul>
    <?php include("addmodal.php")?>
    </div>
    <div class="tab-content" id="pills-tabContent">
    <?php include("Borrowing.php")?>
    <?php include("Returning.php")?>
    </div>
 </div>
</body>
</html>