<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>card</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row mb-3">
            <div class="col mb-3"> 
                <div class="card text-center">
                    <h5 class="card-title">Items in Store</h5>
                    <div class="card-header mb-3">
                        <ul class="nav nav-pills card-header-pills">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="true" href="alert.php">Next Item</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="true" href="accordion.php">Previous</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row"> 
                    <div class="card-group">
                            <div class="card border-danger text-bg-secondary g-2">
                                <img src="./images/product-image-1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <img src="./images/product-image-1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="./images/product-image-1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </div>
                                    <div class="card-footer">
                                        <small class="text-body-secondary">Last updated 5 mins ago</small>
                                    </div>
                            </div>

                            <div class="card">
                                <img src="./images/product-image-1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="./images/product-image-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./images/product-image-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./images/product-image-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                        </ul>
                    </div>
            </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./images/product-image-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
    <!-- Card Shadows -->
    <div class="row">
        <div class="col-md-3 mb-3 mt-3">
            <div class="card">
                <div class="card-body bg-danger">
                    No Shadow
                </div>
            </div>
        </div>
        <!-- Light shadow -->
        <div class="col-md-3 mb-3 mt-3">
            <div class="card shadow">
                <div class="card-body">
                    Shadow - Level 1
                </div>
            </div>
        </div>
         <!-- Small Shadow -->
        <div class="col-md-3 mb-3 mt-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    Shadow - Level 2
                </div>
            </div>
        </div>
        <!--  Large Shadow-->
        <div class="col-md-3 mb-3 mt-3">
            <div class="card shadow-lg">
                <div class="card-body">
                    Shadow - Level 3
                </div>
            </div>
        </div>
        <!-- csustom shaddow modified with css -->
        <div class="col-md-3 mb-3 mt-3">
            <div class="card shadow-4 ">
                <div class="card-body bg-body-secondary">
                    Shadow - Level 4
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>