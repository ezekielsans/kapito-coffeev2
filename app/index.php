<?php
error_reporting(E_ALL);
require_once 'src/controller/productsController.php';



 $items = $products->getAllProducts();


 print_r($items);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kapito</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/index.css">

</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

<div class="container-fluid">
<div class="d-flex justify-content-center mt-3 align-items-center">
        <a href="/" class="navbar-brand">
        <div class="d-flex align-items-center">
        <svg id="logo" fill="white" height="72px" width="72px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-117.76 -117.76 747.52 747.52" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M407.874,376.72c8.138,2.803,16.768,4.277,25.627,4.277c20.967,0,40.681-8.166,55.507-22.992 C503.834,343.18,512,323.467,512,302.499s-8.166-40.681-22.992-55.507c-21.906-21.903-53.639-28.124-81.134-18.675v-27.654H31.293 v195.539l72.839,72.841H0v35.006h139.139h160.889h139.139v-35.006H335.034l72.841-72.841V376.72z M407.874,267.355 c17-12.411,41.041-10.949,56.381,4.389c8.215,8.215,12.739,19.137,12.739,30.754c0,11.617-4.524,22.538-12.739,30.753 c-8.215,8.215-19.137,12.739-30.754,12.739c-9.342,0-18.231-2.93-25.627-8.348V267.355z M291.729,368.383l-74.179,74.179 l-74.18-74.179c-11.56-11.56-17.927-26.93-17.927-43.278c0-16.349,6.366-31.719,17.927-43.279 c20.076-20.074,50.742-23.262,74.18-9.56c23.439-13.7,54.104-10.515,74.179,9.559 C315.593,305.689,315.593,344.519,291.729,368.383z"></path> </g> </g> <g> <g> <path d="M266.976,306.579c-10.215-10.214-26.837-10.215-37.05,0.001l-12.376,12.375l-12.376-12.375 c-5.107-5.107-11.816-7.661-18.525-7.661c-6.709,0-13.419,2.553-18.525,7.661c-10.215,10.214-10.215,26.834,0,37.05l49.426,49.426 l49.426-49.426C277.191,333.414,277.191,316.793,266.976,306.579z"></path> </g> </g> <g> <g> <path d="M125.31,7.95l-24.753,24.754c12.331,12.331,12.331,32.399,0,44.731c-25.982,25.982-25.982,68.254,0,94.235l24.753-24.754 c-5.974-5.974-9.264-13.917-9.264-22.365c0-8.447,3.289-16.39,9.264-22.364C151.292,76.205,151.292,33.931,125.31,7.95z"></path> </g> </g> <g> <g> <path d="M317.453,7.95L292.7,32.703c12.331,12.331,12.331,32.399,0,44.731c-25.982,25.982-25.982,68.254,0,94.235l24.753-24.753 c-5.974-5.974-9.264-13.917-9.264-22.365c0-8.447,3.289-16.39,9.264-22.364C343.434,76.205,343.434,33.931,317.453,7.95z"></path> </g> </g> <g> <g> <path d="M221.381,7.95l-24.753,24.753c12.331,12.331,12.331,32.399,0,44.731c-25.982,25.982-25.982,68.254,0,94.235l24.753-24.753 c-5.974-5.974-9.264-13.917-9.264-22.365c0-8.447,3.289-16.39,9.264-22.364C247.362,76.205,247.362,33.931,221.381,7.95z"></path> </g> </g> </g></svg>
        <h3 class="mt-3">Kapito</h3>
       </div>
    </a>

    <button class="navbar-toggler" type="button"
    data-bs-toggle ="collapse"
    data-bs-target ="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse"
    id="collapsibleNavbar">


    <ul class="navbar-nav   mx-auto mb-2 mb-lg-0">
        <li class="nav-link"> <a href="products.php" class="text-decoration-none text-white">Products</a></li>
        <li class="nav-link"> <a href="addProduct.php" class="text-decoration-none text-white">Add New Product</a></li>
        <li class="nav-link"> <a href="addNewUser.php" class="text-decoration-none text-white">Add New User</a></li>
        <li class="nav-link"> <a href="login.php" class="text-decoration-none text-white">Login</a></li>
        <li class="nav-link"> <a href="logout.php" class="text-decoration-none text-white">Logout</a></li>

    </ul>

    </div>
    </div>
    </div>
    </div>

</nav>

<main>
    <div class="container">
        <h1 class="mt-5">Menu</h1>

<?php if($items): ?> 
 <?php foreach ($items as $item) {?>        
 <div class="d-inline-flex mx-3 mt-5">
<div class="card mb-3 mx-4" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $item['product_name'] ?></h5>
        <p class="card-text"><?= $item['product_description'] ?></p>
        <a href="#" class="btn btn-primary">View Product</a>
      </div>
    </div>
  </div>
</div>
</div>
<?php }?>
<?php else:?>


<?php endif;?>

<!-- <div class="mt-2">
<a href="addProduct.php" class="btn btn-lg bg-primary text-white"> Add New Product</a>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
      
            <tr>
            <td width="50px"> <a href="details.php?ID=<?=$product['ID'];?> " class="btn btn-sm bg-primary text-white">View</a></td></td>
            <td width="50px"> <a href="details.php?ID=<?=$product['ID'];?> " class="btn btn-sm bg-primary">Edit</a></td></td>
            <td> <?=$item['product_name'];?></td>
            <td> <?=$item['created_at'];?></td>
        </tr>


     

    </tbody>

</table>
</div> -->
</div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>