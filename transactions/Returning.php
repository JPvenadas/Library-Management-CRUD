<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
<table class="table">
  <thead class="bg-secondary text-light">
    <tr>
      <th scope="col">Transactions ID</th>
      <th scope="col">Student Name</th>
      <th scope="col">Book Name</th>
      <th scope="col">Date</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($ReturnTransacs as $Transac){?>
      <tr>
      <td><?php echo $Transac['TransactionsID']?></td>
      <td><?php echo $Transac['StudentName']?></td>
      <td><?php echo $Transac['BookName']?></td>
      <td><?php echo $Transac['Date']?></td>
      <td style="display:flex; flex-direction: row">
        
      <Button class="btn text-light bg-primary" data-bs-toggle="modal" data-bs-target="#editTransaction" data-bs-whatever="@mdo"
      onclick="">
      <i class="bi bi-pen-fill"></i>
      </Button>

        <!-- This is the delete Button -->
        <Form action="transactions.php" method="POST">
          <input type="hidden" name="BookID" value="None">
          <input type="hidden" name="TransactionsID" value="<?php echo $Transac['TransactionsID']?>">
          <Button type="submit" name="DeleteTransaction" class="btn mx-1 text-light bg-danger">
            <i class="bi bi-trash2-fill"></i>
          </Button>
        </Form>

      </td>
    </tr>
    <?php }?>
  </tbody>
</table>
</div>