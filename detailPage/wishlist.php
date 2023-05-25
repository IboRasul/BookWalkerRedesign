<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Product Card/Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php require_once "../test/db_conn.php" ?>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/style.css">

</head>

<body>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style>
    .button {
      margin-top: 10px;
      width: 100%;
      height: 40px;
      border: none;
      background: linear-gradient(to bottom right, #002AFF, #006EFF);
      border-radius: 20px;
      cursor: pointer;
      font-size: 16px;
      font-family: 'Open Sans';
      font-weight: 600;
      color: #FFFFFF;
    }


    .cart-wrap {
      padding: 40px 0;
      font-family: 'Open Sans', sans-serif;
    }

    .main-heading {
      font-size: 19px;
      margin-bottom: 20px;
    }

    .table-wishlist table {
      width: 100%;
    }

    .table-wishlist thead {
      border-bottom: 1px solid #e5e5e5;
      margin-bottom: 5px;
    }

    .table-wishlist thead tr th {
      padding: 8px 0 18px;
      color: #484848;
      font-size: 15px;
      font-weight: 400;
    }

    .table-wishlist tr td {
      padding: 25px 0;
      vertical-align: middle;
    }

    .table-wishlist tr td .img-product {
      width: 72px;
      float: left;
      margin-left: 8px;
      margin-right: 31px;
      line-height: 63px;
    }

    .table-wishlist tr td .img-product img {
      width: 100%;
    }

    .table-wishlist tr td .name-product {
      font-size: 15px;
      color: #484848;
      padding-top: 8px;
      line-height: 24px;
      width: 50%;
    }

    .table-wishlist tr td.price {
      font-weight: 600;
    }

    .table-wishlist tr td .quanlity {
      position: relative;
    }

    .total {
      font-size: 24px;
      font-weight: 600;
      color: #1E00FF;
    }

    .display-flex {
      display: flex;
    }

    .align-center {
      align-items: center;
    }

    .round-black-btn {
      border-radius: 25px;
      background: #212529;
      color: #fff;
      padding: 5px 20px;
      display: inline-block;
      border: solid 2px #212529;
      transition: all 0.5s ease-in-out 0s;
      cursor: pointer;
      font-size: 14px;
    }

    .round-black-btn:hover,
    .round-black-btn:focus {
      background: transparent;
      color: #212529;
      text-decoration: none;
    }

    .mb-10 {
      margin-bottom: 10px !important;
    }

    .mt-30 {
      margin-top: 30px !important;
    }

    .d-block {
      display: block;
    }

    .custom-form label {
      font-size: 14px;
      line-height: 14px;
    }

    .pretty.p-default {
      margin-bottom: 15px;
    }

    .pretty input:checked~.state.p-primary-o label:before,
    .pretty.p-toggle .state.p-primary-o label:before {
      border-color: #1500FB;
    }

    .pretty.p-default:not(.p-fill) input:checked~.state.p-primary-o label:after {
      background-color: #0008FF !important;
    }

    .main-heading.border-b {
      border-bottom: solid 1px #ededed;
      padding-bottom: 15px;
      margin-bottom: 20px !important;
    }

    .custom-form .pretty .state label {
      padding-left: 6px;
    }

    .custom-form .pretty .state label:before {
      top: 1px;
    }

    .custom-form .pretty .state label:after {
      top: 1px;
    }

    .custom-form .form-control {
      font-size: 14px;
      height: 38px;
    }

    .custom-form .form-control:focus {
      box-shadow: none;
    }

    .custom-form textarea.form-control {
      height: auto;
    }

    .mt-40 {
      margin-top: 40px !important;
    }

    .in-stock-box {
      background: #0055FF;
      font-size: 12px;
      text-align: center;
      border-radius: 25px;
      padding: 4px 15px;
      display: inline-block;
      color: #fff;
    }

    .trash-icon {
      font-size: 20px;
      color: #212529;
    }
  </style>
  <!------ Include the above in your HEAD tag ---------->

  <?php include_once "../header.php" ?>


  <div class="cart-wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="main-heading mb-10">My wishlist</div>
          <div class="table-wishlist">
            <table cellpadding="0" cellspacing="0" border="0" width="100%">
              <thead>
                <tr>
                  <th width="45%">Product Name</th>
                  <th width="15%">Unit Price</th>
                  <th width="15%">Stock Status</th>
                  <th width="15%"></th>
                  <th width="10%"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td width="45%">
                    <div class="display-flex align-center">
                      <div class="img-product">
                        <img src="../image/book-1.png" alt="" class="mCS_img_loaded">
                      </div>
                      <div class="name-product">
                        Art Book
                      </div>
                    </div>
                  </td>
                  <td width="15%" class="price">$7.00</td>
                  <td width="15%"><span class="in-stock-box">In Stock</span></td>
                  <td width="15%"><button class="round-black-btn small-btn">Add to Cart</button></td>
                  <td width="10%" class="text-center"><a href="#" class="trash-icon"><i
                        class="far fa-trash-alt"></i></a></td>
                </tr>
                <tr>
                  <td width="45%">
                    <div class="display-flex align-center">
                      <div class="img-product">
                        <img src="../image/book-2.png" alt="" class="mCS_img_loaded">
                      </div>
                      <div class="name-product">
                        Motivation
                      </div>
                    </div>
                  </td>
                  <td width="15%" class="price">$10.00</td>
                  <td width="15%"><span class="in-stock-box">In Stock</span></td>
                  <td width="15%"><button class="round-black-btn small-btn">Add to Cart</button></td>
                  <td width="10%" class="text-center"><a href="#" class="trash-icon"><i
                        class="far fa-trash-alt"></i></a></td>
                </tr>
                <tr>
                  <td width="45%">
                    <div class="display-flex align-center">
                      <div class="img-product">
                        <img src="../image/book3.png" alt="" class="mCS_img_loaded">
                      </div>
                      <div class="name-product">
                        Money Making
                      </div>
                    </div>
                  </td>
                  <td width="15%" class="price">$1.00</td>
                  <td width="15%"><span class="in-stock-box">In Stock</span></td>
                  <td width="15%"><button class="round-black-btn small-btn">Add to Cart</button></td>
                  <td width="10%" class="text-center"><a href="#" class="trash-icon"><i
                        class="far fa-trash-alt"></i></a></td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>

  </div>



  <section class="footer">

    <div class="box-container">

      <div class="box">
        <h3>our locations</h3>
        <a href=""><i class="fas fa-map-marker-alt"></i>india</a>
        <a href=""><i class="fas fa-map-marker-alt"></i>USA</a>
        <a href=""><i class="fas fa-map-marker-alt"></i>russia</a>
        <a href=""><i class="fas fa-map-marker-alt"></i>france</a>
        <a href=""><i class="fas fa-map-marker-alt"></i>japan</a>
        <a href=""><i class="fas fa-map-marker-alt"></i>africa</a>
      </div>

      <div class="box">
        <h3>quick links</h3>
        <a href=""><i class="fas fa-arrow-right"></i>home</a>
        <a href=""><i class="fas fa-arrow-right"></i>freatured</a>
        <a href=""><i class="fas fa-arrow-right"></i>arrivals</a>
        <a href=""><i class="fas fa-arrow-right"></i>blogs</a>

      </div>

      <div class="box">
        <h3>extra links</h3>
        <a href=""><i class="fas fa-arrow-right"></i>account info</a>
        <a href=""><i class="fas fa-arrow-right"></i>ordered items</a>
        <a href=""><i class="fas fa-arrow-right"></i>privacy policy</a>
        <a href=""><i class="fas fa-arrow-right"></i>payment method</a>
        <a href=""><i class="fas fa-arrow-right"></i>our services</a>
      </div>


      <div class="box">
        <h3>contact info</h3>
        <a href=""><i class="fas fa-phone"></i>+123-356-546</a>
        <a href=""><i class="fas fa-phone"></i>+123-134-879</a>
        <a href=""><i class="fas fa-envelope"></i>IboHamaYousf@gmail.com</a>
        <img src="./image/worldmap.png" alt="" class="map">
      </div>
    </div>


    <div class="credit">create by <span>Ibo , Hama , Yousf</span> | all rights reserved</div>

  </section>

</body>

</html>