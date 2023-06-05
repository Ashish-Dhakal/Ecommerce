<?php include '../header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../resources/css/index.css">
    <link rel="stylesheet" href="./dashboard.css">
</head>

<body>

    <div class="wrapper">
        <div class="title">
            Add Product To Website
        </div>
        <form action="" class="form">
            <div class="input_field ">
                <label>Product Name</label>
                <input class="input" type="text" name="p-name">
            </div>
            <div class="input_field ">
                <label>Product Category</label>
                <div class="select_item">
                    <select class="input" name="category" id="category">
                        <option value="">Select Category</option>
                        <option value="1">Electronic Device</option>
                        <option value="2">TV and Home Appliance</option>
                        <option value="3">Electronic Accessories</option>
                        <option value="4">Gadget</option>
                    </select>
                </div>
            </div>
            <div class=" input_field">
                <label for="product">Select Product</label>
                <div class="select_item">
                    <select class="input" name="product" id="product">
                        <option value="">Select Category First</option>
                    </select>
                </div>
            </div>
            <div class=" input_field">
                <label>Product Brand</label>
                <input class="input" type="text" name="p-name">
            </div>
            <div class=" input_field">
                <label>Product Descri</label>
                <textarea class="textarea" cols="30" rows="10"></textarea>
            </div>

            <div class=" input_field">
                <label>Product Image</label>
                <input class="input" type="file" accept="image/png , image/jpg , image/jpeg " name="p-name">
            </div>

            <div class=" input_field">
                <label>Product Price</label>
                <input class="input" type="text" name="p-name">
            </div>

            <div class="input_field">
                <div class="btn">Add Product</div>
            </div>


        </form>
    </div>













    <script>
        // Define the products for each category
        var products = {
            1: ["Smart Phone", "Laptop", "Desktop", "Camera"],
            2: ["TV", "Vacuum", "Audio Device", "Fridge", "A.C"],
            3: ["Mobile Accessories", "Camera Accessories", "Computer Accessories", "Storage"],
            4: ["Drone", "VR"]
        };

        // Get the select elements
        var categorySelect = document.getElementById("category");
        var productSelect = document.getElementById("product");

        // Function to populate the product select options based on the selected category
        function addProducts() {
            var selectedCategory = categorySelect.value;

            // Clear previous options
            productSelect.innerHTML = "";

            // Populate options based on the selected category
            if (selectedCategory !== "") {
                var categoryProducts = products[selectedCategory];
                categoryProducts.forEach(function(product) {
                    var option = document.createElement("option");
                    option.text = product;
                    option.value = product;
                    productSelect.add(option);
                });
            } else {
                var defaultOption = document.createElement("option");
                defaultOption.text = "Select Category First";
                productSelect.add(defaultOption);
            }
        }

        // Add event listener to the category select element
        categorySelect.addEventListener("change", addProducts);
    </script>
</body>

</html>