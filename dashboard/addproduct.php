
    <?php include '../dashboard/admin-dash.php'; ?>
    <!---------------start of main section------------------>
    <main class="main-container main-addproduct-container">
        <div class="main-title">
            Add Product
        </div>
        <div class="wrapper">

            <form action="./update.php" class="form" method="post" enctype="multipart/form-data">
                <div class="input_field ">
                    <label>Product Name</label>
                    <input class="input" type="text" name="p_name">
                </div>
                <div class="input_field ">
                    <label>Product Category</label>
                    <div class="select_item">
                        <select class="input" name="p_category" id="category">
                            <option value="">Select Category</option>
                            <option value="ElectronicDevice">Electronic Device</option>
                            <option value="TVandHomeAppliance">TV and Home Appliance</option>
                            <option value="ElectronicAccessories">Electronic Accessories</option>
                            <option value="Gadget">Gadget</option>
                        </select>
                    </div>
                </div>
                <div class=" input_field">
                    <label for="product">Select Sub-Category</label>
                    <div class="select_item">
                        <select class="input" name="p_subcategory" id="product">
                            <option value="">Select Category First</option>
                        </select>
                    </div>
                </div>
                <div class=" input_field">
                    <label>Product Brand</label>
                    <input class="input" type="text" name="p_brand">
                </div>
                <div class=" input_field">
                    <label>Product Description</label>
                    <textarea class="textarea" name="p_description" cols="30" rows="10"></textarea>
                </div>

                <div class=" input_field">
                    <label>Product Image</label>
                    <input class="input" type="file" accept="image/png , image/jpg , image/jpeg " name="p_image">
                </div>

                <div class=" input_field">
                    <label>Product Price</label>
                    <input class="input" type="text" name="p_price">
                </div>

                <div class="input_field">
                    <!-- <div class="btn">Add Product</div> -->
                    <button type="submit" class="btn" name="add-product"> Add Product</button>
                </div>


            </form>
        </div>
    </main>
    <!--------------end of main section--------------->













    <script>
        // // Define the products for each category
        var products = {
            ElectronicDevice: ["Smart Phone", "Laptop", "Desktop", "Camera"],
            TVandHomeAppliance: ["TV", "Vacuum", "Audio Device", "Fridge", "A.C"],
            ElectronicAccessories: ["Mobile Accessories", "Camera Accessories", "Computer Accessories", "Storage"],
            Gadget: ["Drone", "VR"]
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