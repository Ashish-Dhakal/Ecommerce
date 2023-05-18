<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <div class="add-product">
        <form action="">
            <div class="input">
                <label>Product Name</label>
                <input type="text" name="p-name">
                <br><br>
            </div>
            <div class="input">
                <label for="category">Select a product category:</label>
                <select name="category" id="category">
                    <option value="">Select Category</option>
                    <option value="1">Electronic Device</option>
                    <option value="2">TV and Home Appliance</option>
                    <option value="3">Electronic Accessories</option>
                    <option value="4">Gadget</option>
                </select>
                <br><br>
            </div>

            <div class="input">
                <label for="product">Select a product:</label>
                <select name="product" id="product">
                    <option value="">Select Category First</option>
                </select>
                <br><br>
            </div>
            <div class="input">
                <label>Product Brand</label>
                <input type="text" name="p-name">
                <br><br>
            </div>
            <div class="input">
                <label>Product Descri</label>
                <input type="text" name="p-name">
                <br><br>
            </div>
            <div class="input">
                <label>Product Price</label>
                <input type="file" accept="image/png , image/jpg , image/jpeg " name="p-name">
                <br><br>
            </div>
            <div class="input">
                <label>Product Price</label>
                <input type="text" name="p-name">
                <br><br>
            </div>
            <input type="submit" value="Submit">
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