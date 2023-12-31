<?php
  shuffle($product_shuffle);
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
   if(isset($_POST['product_submit'])){
     $cart->addToCart($_POST['user_id'], $_POST['item_id']);
   }
 }
?>
<?php
  $item_id = $_GET['item_id'] ?? 1;
  foreach($product->getData() as $item) :
    if($item['item_id'] == $item_id):
?>
<section id="product" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="<?php echo $item['item_image'] ?>" alt="product" class="img-fluid"/>
                    <div class="row pt-4 font-size-16 font-roboto">
                        <div class="col">
                            <button type="submit" class="btn btn-danger form-control">Proceed to Payment</button>
                        </div>
                        <div class="col">
                        <form method="post">
                        <input type="hidden" name="item_id" value="<?php echo $item["item_id"];?>"/>
                        <input type="hidden" name="user_id" value="<?php echo '1';?>"/>
                        <?php 
                          if (in_array($item['item_id'], $cart->getCartId($product->getData('cart')) ?? [])) {
                           echo '<button type="submit" disabled class="btn btn-success form-control font-size-16">In the Cart</button>';
                          } else {
                            echo '<button type="submit" name="product_submit" class="btn btn-warning form-control font-size-16">Add to Cart</button>';
                          }
                        ?>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h5 class="font-open font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                    <small>By <?php echo $item['item_brand'] ?? 'Brand' ?></small>
                    <div class="d-flex">
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <a href="#" class="px-2 font-open font-size-14">20,534 ratings | 1000+ answered questions</a>
                    </div>
                    <hr class="m-0"/>
                    <table class="my-3">
                        <tr class="font-roboto font-size-14">
                            <td>Previous Price:</td>
                            <td><strike>$162.00</strike></td>
                        </tr>
                        <tr class="font-roboto font-size-14">
                            <td>Deal Price:</td>
                            <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'] ?? 0 ?></span><small class="text-dark font-size-12">&nbsp;&nbsp; VAT included</small></td>
                        </tr>
                    </table>
                    <div id="policy">
                      <div class="d-flex">
                        <div class="return text-center mr-5">
                          <div class="font-size-20 my-2 color-secondary">
                            <span class="fas fa-retweet border p-3 rounded-pill"></span>
                          </div>
                          <a href="#" class="font-roboto font-size-12">10 Days <br>Replacement</br></a>
                        </div>
                        <div class="return text-center mr-5">
                          <div class="font-size-20 my-2 color-secondary">
                            <span class="fas fa-truck border p-3 rounded-pill"></span>
                          </div>
                          <a href="#" class="font-roboto font-size-12">Free<br>Delivery</br></a>
                        </div>
                        <div class="return text-center mr-5">
                          <div class="font-size-20 my-2 color-secondary">
                            <span class="fas fa-check-double border p-3 rounded-pill"></span>
                          </div>
                          <a href="#" class="font-roboto font-size-12">1 Year<br>Warranty</br></a>
                        </div>
                      </div>
                    </div>
                    <hr/>
                    <div id="order-details" class="font-roboto d-flex flex-column text-dark">
                      <small>Delivery by June 29 - July 4</small>
                      <small>Sold by <a href="#">Apple Jungle</a></small>
                      <small><i class="fas fa-map-marker-alt color-pri mary"></i>&nbsp;&nbsp;Deliver to Customer-424201</small>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <div class="color my-3">
                          <div class="d-flex justify-content-between">
                            <h6 class="font-open">Color</h6>
                          <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                          <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                          <div class="p-2 color-secondary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                          </div>
                          </div>
                        </div>
                      <div class="col-6">
                        <div class="qty d-flex">
                          <h6 class="font-open">Qty</h6>
                          <div class="px-4 d-flex font-roboto">
                            <button data-id="pro1" class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                            <input data-id="pro1" type="text" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1"/>
                            <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="size my-3">
                      <h6 class="font-open">Size </h6>
                      <div class="d-flex justify-content-between w-75">
                        <div class="font-roboto border p-2">
                          <button class="btn p-0 font-size-14">8 GB RAM</button>
                        </div>
                        <div class="font-roboto border p-2">
                          <button class="btn p-0 font-size-14">16 GB RAM</button>
                        </div>
                        <div class="font-roboto border p-2">
                          <button class="btn p-0 font-size-14">32 GB RAM</button>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-12 mt-5">
                  <h6 class="font-open">Product Description</h6>
                  <hr/>
                  <p class="font-roboto font-size-14">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias a nam ex accusantium sint minus ipsam libero eveniet consequuntur dolores.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias a nam ex accusantium sint minus ipsam libero eveniet consequuntur dolores.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias a nam ex accusantium sint minus ipsam libero eveniet consequuntur dolores.
                  </p>
                  <p class="font-roboto font-size-14">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias a nam ex accusantium sint minus ipsam libero eveniet consequuntur dolores.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias a nam ex accusantium sint minus ipsam libero eveniet consequuntur dolores.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias a nam ex accusantium sint minus ipsam libero eveniet consequuntur dolores.
                  </p>
                </div>
            </div>
        </div>
</section> 
<?php
  endif;
  endforeach;
?>