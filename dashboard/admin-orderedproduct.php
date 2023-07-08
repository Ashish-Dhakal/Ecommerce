 <?php include '../dashboard/admin-dash.php';

    ?>

 <?php
    $query = "SELECT c.c_id ,c.c_fname, c.c_lname, p.p_amount, p.transaction_id
    FROM customer AS c
    JOIN payment AS p ON c.c_id = p.c_id;";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();


    $c_id = $row['c_id'];
    $c_fname = $row['c_fname'];
    $c_lname = $row['c_lname'];
    $p_amount = $row['p_amount'];
    $transaction_id = $row['transaction_id'];


    ?>
 <main class="main-container">
     <?php //show($_SESSION); ?>


     <table class="table table-striped" style="text-align: center;">
         <thead>
             <tr>
                 <th scope="col">First Name</th>
                 <th scope="col">Last Name</th>
                 <th scope="col">Total Product</th>
                 <th scope="col">Total Price</th>
                 <th scope="col">Transaction ID</th>
                 <th scope="col" colspan="2">Action</th>
             </tr>
         </thead>
         <tbody>
             <tr>
                 <td><?php echo $c_fname
                        ?></td>
                 <td><?php echo $c_lname
                        ?></td>
                 <td><?php 
                        ?></td>
                 <td><?php echo $p_amount;
                        ?></td>
                 <td><?php echo $transaction_id;
                        ?></td>
                 <form action="" method="post">
                     <td><button type="submit" name="checkout" value="<?php ?>" class="btn btn-success">Process</button>
                     </td>
                     <td><button type="submit" name="checkout" value="<?php ?>" class="btn btn-danger">Delete</button>
                     </td>
                 </form>


             </tr>
         </tbody>
     </table>

 </main>