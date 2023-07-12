<section id="cart" class="py-3 mb-5">
            <div class="container-fluid w-75">
                <h5 class="font-open font-size-20">Shoppingt Cart</h5>
                <div class="row">
                    <div class="col-sm-9">
                      <?php 
                        foreach($product->getData('cart') as $item):
                          $cart = $product->getProducts($item['item_id']);
                          $subTotal[] = array_map(function($item){
                      ?>
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image']?>" style="height: 120px;" alt="product 1"/>
                            </div>
                            <div class="col-sm-8">
                              <h5 class="font-open font-size-20"><?php echo $item['item_name'] ?? "Unknown" ?></h5>
                              <small>by <?php echo $item['item_brand'] ?? "brand" ?></small>
                              <div class="d-flex">
                                <div class="rating text-warning font-size-12">
                                  <span><i class="fas fa-star"></i></span>
                                  <span><i class="fas fa-star"></i></span>
                                  <span><i class="fas fa-star"></i></span>
                                  <span><i class="fas fa-star"></i></span>
                                  <span><i class="far fa-star"></i></span>
                                </div> 
                                <a href="#" class="px-2 font-roboto font-size-14">20,578 ratingss</a>
                              </div>
                              <div class="qty d-flex pt-2">
                                <div class="d-flex font-roboto w-25">
                                  <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                  <input type="text" data-id="pro1" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1"/>
                                  <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                </div>
                                <button type="submit" class="btn font-roboto text-danger px-3 border-right">Delete</button>
                                <button type="submit" class="btn font-roboto text-danger px-3">Save for Later</button>
                              </div>
                            </div>
                            <div class="col-sm-2 text-right">
                              <div class="font-size-20 text-danger font-open">
                                $<span class="product_price"><?php echo $item['item_price'] ?></span>
                              </div>
                            </div>
                            <?php
                              return $item['item_price'];
                            }, $cart);
                            endforeach;
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="sub-total mt-2 border text-center">
                        <h6 class="font-size-12 font-roboto text-success py-3"><i class="fas fa-check"></i>Your order is eligible for free delivery</h6>
                        <div class="border-top py-4">
                          <h5 class="font-open font-size-16">Subtotal (<?php echo count($subTotal)?> items):&nbsp;<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $cart->getSum($subTotal) : 0; ?></span></h5>
                          <button type="submit" class="btn btn-warning mt-3">Proceed to Payment</button>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </section>