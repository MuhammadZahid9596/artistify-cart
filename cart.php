<head>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/jquery.mycart.js"></script>
  <title>jQuery mycart Electronics</title>
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <style>
  body { font-family:'Open Sans'}
  .badge-notify{
    background:red;
    position:relative;
    top: -20px;
    right: 10px;
  }
  </style>
</head>
<script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 0.5;
      }
    });

  });
  </script>
<?php


echo '
<body class="container">

        <div class="page-header">
            <h1>jQuery mycart Electronics
            <div style="float: right; cursor: pointer;">
                <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
            </div>
            </h1>
    </div>

    <div class="row">
        <div class="col-md-3 text-center">
            <img src="images/img_1.png" width="150px" height="150px">
            <br>
            product 1 - <strong>$10</strong>
            <br>
            <button class="btn btn-danger my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1" data-price="10" data-quantity="1" data-image="images/img_1.png">Add to Cart</button>
            <a href="#" class="btn btn-info">Details</a>
        </div>

        <div class="col-md-3 text-center">
            <img src="images/img_2.png" width="150px" height="150px">
            <br>
            product 2 - <strong>$20</strong>
            <br>
            <button class="btn btn-danger my-cart-btn" data-id="2" data-name="product 2" data-summary="summary 2" data-price="20" data-quantity="1" data-image="images/img_2.png">Add to Cart</button>
            <a href="#" class="btn btn-info">Details</a>
        </div>
    
        <div class="col-md-3 text-center">
            <img src="images/img_3.png" width="150px" height="150px">
            <br>
            product 3 - <strong>$30</strong>
            <br>
            <button class="btn btn-danger my-cart-btn" data-id="3" data-name="product 3" data-summary="summary 3" data-price="30" data-quantity="1" data-image="images/img_3.png">Add to Cart</button>
            <a href="#" class="btn btn-info">Details</a>
        </div>

        <div class="col-md-3 text-center">
            <img src="images/img_4.png" width="150px" height="150px">
            <br>
            product 4 - <strong>$40</strong>
            <br>
            <button class="btn btn-danger my-cart-btn" data-id="4" data-name="product 4" data-summary="summary 4" data-price="40" data-quantity="1" data-image="images/img_4.png">Add to Cart</button>
            <a href="#" class="btn btn-info">Details</a>
        </div>

    <div class="col-md-3 text-center">
        <img src="images/img_5.png" width="150px" height="150px">
        <br>
        product 5 - <strong>$50</strong>
        <br>
        <button class="btn btn-danger my-cart-btn" data-id="5" data-name="product 5" data-summary="summary 5" data-price="50" data-quantity="1" data-image="images/img_5.png">Add to Cart</button>
        <a href="#" class="btn btn-info">Details</a>
    </div>

    </div>
</body>
';

?>