 <?php include '../dashboard/user-dash.php'; ?>
 <main class="main-container">
 
         <?php

        // Retrieve the customer's cart items
        $query = "SELECT ct.cart_id , c.c_id 
          FROM customer AS c
          JOIN cart AS ct ON c.c_id = ct.c_id
          WHERE c.c_fname = 'Lachhu'";

        $result = $conn->query($query);

        // Store the cart_id values in an array
        
        $cartIds = array();
        while ($row = $result->fetch_assoc()) {
            $cartIds[] = $row['cart_id'];

        }

        // Check if transaction ID is submitted
        if (isset($_POST['transaction_id'])!=null && !empty($cartIds)) {
            $transaction_id = $_POST['transaction_id'];
            $totalPrice = $_SESSION['totalPrice'];
                

            // Store payment details for each cart item
            foreach ($cartIds as $cartId) {
                $query = "INSERT INTO payment (p_amount, cart_id, transaction_id)
                        VALUES ('$totalPrice', '$cartId', '$transaction_id')";

                if ($conn->query($query)) {
                    // Perform any additional actions or validations if required
                } else {
                    echo "Error: Failed to store payment details.";
                    die();
                }
            }

            // Redirect the user to a success page or perform any necessary actions
            header("Location: ./usercart.php");
            exit();
        } else {
            // Redirect the user back to usercart.php if transaction ID is not entered or there are no cart items
            echo "<script>alert('error occur'); </scrpt>";
            header("Location: ./usercart.php");
            exit();
        }

            ?>




<!-- 
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
                    <td><?php // echo $_SESSION['c_fname']; 
                        ?></td>
                    <td><?php // echo $_SESSION['c_lname']; 
                        ?></td>
                    <td><?php //echo $_SESSION['rowCount']; 
                        ?></td>
                    <td><?php //echo $_SESSION['totalPrice']; 
                        ?></td>
                    <td><?php //echo $transaction_id; 
                        ?></td>
                    <form action="" method="post">
                        <td><button type="submit" name="checkout" value="<?php ?>" class="btn btn-success">Process</button>
                        </td>
                        <td><button type="submit" name="checkout" value="<?php ?>" class="btn btn-danger">Delete</button>
                        </td>
                    </form>


                </tr>
            </tbody>
        </table>  -->

 </main>
 </body>

 </html>