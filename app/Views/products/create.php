<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>

    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="custom-form small-form">
                    <h1 class="text-center">Add Product</h1>
                    <form action="/products/store" method="post">
                        <div class="form-group">
                            <label for="ProductName">Product Name:</label>
                            <input type="text" class="form-control" name="ProductName" id="ProductName" required>
                        </div>

                        <div class="form-group">
                            <label for="ProductDescription">Product Description:</label>
                            <textarea class="form-control" name="ProductDescription" id="ProductDescription" rows="4"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="motorcycle_category">Category:</label>
                            <select class="form-control" name="motorcycle_category" id="motorcycle_category" required>
                                <?php foreach ($categories as $category): ?>
                                    <option value="<?= $category['id'] ?>"><?= $category['Name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="ProductQuantity">Quantity:</label>
                            <input type="number" class="form-control" name="ProductQuantity" id="ProductQuantity" required>
                        </div>

                        <div class="form-group">
                            <label for="ProductPrice">Price:</label>
                            <input type="text" class="form-control" name="ProductPrice" id="ProductPrice" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Create Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optionally, include Bootstrap JavaScript for interactive features -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>
</html>
