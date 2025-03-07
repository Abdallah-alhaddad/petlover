
<?php
require_once __DIR__.'../../../layout/public/nav.php';
?>


<body>  
<div class="container">
        <div class="container">
        <h1 class="text-center mt-5"><?= htmlspecialchars($pageTitle) ?></h1>

        <a href="/shoping/category/1" class="btn btn-primary">Foods</a>



                    <!-- <form action="/products/" method="POST" style="display:inline;">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" onclick="return confirm('Are you sure?')">
                            Delete
                        </button>
                    </form>

                    <form action="/products" method="POST" style="display:inline;">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" onclick="return confirm('Are you sure?')">
                            Delete
                        </button>
                    </form> -->
       

    </div>

       

        <div class="row">
            <?php foreach ($products as $product): ?>
            <div class="col-md-4 col-sm-6">
                <div class="product-card ">
                    <div class="position-relative">
                        <img src="<?= htmlspecialchars($product['image_url']) ?>" 
                             alt="<?= htmlspecialchars($product['product_name']) ?>" 
                             class="card-image">
                        <div class="card-badge">
                            Popular
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="product-title"><?= htmlspecialchars($product['product_name']) ?></h3>
                        <p class="product-description">
                            <?= htmlspecialchars($product['description']) ?>
                        </p>
                        <div class="product-meta">
                            <div>
                                <span class="price-tag">$<?= number_format($product['price'], 2) ?></span>
                                <div class="rating">
                                    ★★★★☆ <span class="rating-count">(24)</span>
                                </div>
                            </div>
                            <a href="/products/<?= htmlspecialchars($product['product_id']) ?>" 
                               class="btn btn-primary-custom">
                                Add to Cart
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

<?php
require_once __DIR__.'../../../layout/public/footer.php';
?>