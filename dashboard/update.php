<?php include '../connection/config.php'; ?> 
<?php
if (isset($_POST['add-product']) && isset($_FILES['p_image'])) {

    echo "<pre>";
    print_r($_FILES['p_image']);
    echo "</pre>";
    $p_name = mysqli_real_escape_string($conn, $_POST['p_name']);
    $p_category = mysqli_real_escape_string($conn, $_POST['p_category']);
    $p_subcategory = mysqli_real_escape_string($conn, $_POST['p_subcategory']);
    $p_brand = mysqli_real_escape_string($conn, $_POST['p_brand']);
    $p_description = mysqli_real_escape_string($conn, $_POST['p_description']);
    $p_price = mysqli_real_escape_string($conn, $_POST['p_price']);

    $img_name = $_FILES['p_image']['name'];
    $img_size = $_FILES['p_image']['size'];
    $tmp_name = $_FILES['p_image']['tmp_name'];
    $error = $_FILES['p_image']['error'];

    if ($error === 0) {
        if ($img_size > 2000000) {
            $em = "sorry file size is too large";
            header("Location: ./addproduct.php?error=$em");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $p_image = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = '../resources/image/uploads/' . $p_image;

                //  p_name	p_category	p_subcategory	p_brand	p_description	p_image	p_price	

                $query = "INSERT INTO product (p_name ,p_category ,p_subcategory ,p_brand ,p_description ,p_image ,p_price)
                  VALUES ('$p_name','$p_category','$p_subcategory','$p_brand','$p_description','$p_image','$p_price')";
                mysqli_query($conn, $query);
                if ($query) {
                    move_uploaded_file($tmp_name, $img_upload_path);
                    header("Location:./addproduct.php");
                }
            } else {
                $em = "you cannot this type of file ";
                header("Location: ./addproduct.php?error=$em");
            }
        }
    } else {
        $em = "unknown error occured!";
        header("Location: ./addproduct.php?error=$em");
    }
} else {
    header("Location:./addproduct.php");
}

?>