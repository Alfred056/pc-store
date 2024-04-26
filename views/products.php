
        <?php foreach ($products as $product): ?>
            <div class="col" data-bs-theme="light">
                <form action="./modes/carrito.php" method="post">
                <div class="card">
                    <!-- Pasa el ID del producto al script get_image.php como un parámetro de consulta -->
                    <img src="data:image/jpg;base64,<?php echo base64_encode($product['image']); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['name'] ?></h5>
                        <p class="card-text"><?= $product['price'] ?></p>  
                        <button name="btnAccion" type="submit" class="btn btn-primary">Anadir al carrito</button>
                    </div>
                </div>  
            </div>
        <?php endforeach; ?>