

<div class='shopping-cart'>

  <div class='column-labels'>
    <label class='product-image'>Image</label>
    <label class='product-details'>Product</label>
    <label class='product-price'>Price</label>
    <label class='product-quantity'>Quantity</label>
    <label class='product-removal'>Remove</label>
    <label class='product-line-price'>Total</label>
  </div>

  <div class='product'>
    <div class='product-image'>
      <img src='$productImg'>
    </div>
    <div class='product-details'>
      <div class='product-title'>$productName</div>
      <p class='product-description'>$productDesc</p>
    </div>
    <div class='product-price'>$productPrice</div>
    <div class='product-quantity'>
      <input type='number' value='2' min='1' placeholder='$quantity' required>
    </div>
    <div class='product-removal'>
      <a href='?remove=$id'><button class='btn btn-outline-danger'>Remove from cart</button></a>
    </div>
    <div class='product-line-price'></div>
  </div>