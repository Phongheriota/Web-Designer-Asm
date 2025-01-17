<div class="d-flex justify-content-end" onmouseover="showCartPopup()" onmouseout="hideCartPopup()">
    <a
        href="/view_cart" class="btn border btn-outline-secondary" 
        style="margin-right: 1%; border-radius: 0;">
        <div class="d-flex justify-content-end mt-1">
            <i class="fas fa-shopping-cart"></i>
            <span class="badge">0</span>
        </div>
    </a>
    <div id="popup"></div>
    <div id="cart-popup" class="p-3 text-center">
        <ul class="list-group">
        <?php 
            $totalPrice = 0;
            if (!isset($_COOKIE['cartArr'])) echo 'Chưa có sản phẩm trong giỏ hàng!';
            else {
                $cartList = json_decode($_COOKIE['cartArr'], true);
                include_once('model\product_db.php');
                
                foreach($cartList as $productID => $productQuantity) {
                    $productObj = json_decode(getProductById($productID));
                    $totalPrice = $totalPrice + (int)$productObj->price*(int)$productQuantity;
                    echo '
                    <li class="list-group-item d-flex align-items-center">
                        <img src="'.$productObj->image.'"
                                alt="products">
                        <div class="inline-block">
                            <div class="name-item">'.$productObj->name.'</div>
                            <div class="quantity-item">SL: '.$productQuantity.'</div>
                        </div>
                        <div class="price-item">'.number_format($productObj->price, 0, ',' , '.').'đ</div>
                    </li>
                    ';
                }
            }
        ?>
        </ul>
        <hr>
        <div class="d-flex justify-content-between">
            <div style="font-weight:500;">Tổng cộng: 
                <span class="price-item"><?php echo number_format($totalPrice, 0, ',' , '.'); ?><span>
            </div>
            <a href="/view_cart"><div class="cart-btn">Xem Giỏ Hàng</div></a>
        </div>
        <!-- <ul class="list-group">
            <li class="list-group-item d-flex align-items-center">
                <img src="https://beptueu.vn/hinhanh/tintuc/top-15-hinh-anh-mon-an-ngon-viet-nam-khien-ban-khong-the-roi-mat-1.jpg"
                        alt="products">
                <div class="inline-block">
                    <div class="name-item">Bánh Mì Đặc Biệt</div>
                    <div class="quantity-item">SL: 1</div>
                </div>
                <div class="price-item">30.000đ</div>
            </li>
            <li class="list-group-item d-flex align-items-center">
                <img src="https://cdnimg.vietnamplus.vn/uploaded/ngtnnn/2022_07_27/2707banhxeo.jpg"
                        alt="products">
                <div class="inline-block">
                    <div class="name-item">Bánh Xèo Tôm Thịt</div>
                    <div class="quantity-item">SL: 1</div>
                </div>
                <div class="price-item">40.000đ</div>
            </li>
            <li class="list-group-item d-flex align-items-center">
                <img src="https://lavenderstudio.com.vn/wp-content/uploads/2017/03/chup-san-pham.jpg"
                        alt="products">
                <div class="inline-block">
                    <div class="name-item">Shushi Cá Hồi</div>
                    <div class="quantity-item">SL: 1</div>
                </div>
                <div class="price-item">130.000đ</div>
            </li>
            <li class="list-group-item d-flex align-items-center">
                <img src="https://chuphinhmenu.com/wp-content/uploads/2019/05/chup-hinh-mon-an-menu-nha-hang-quan-2-2019.jpg"
                        alt="products">
                <div class="inline-block">
                    <div class="name-item">Cơm Chiên Hải Sản</div>
                    <div class="quantity-item">SL: 1</div>
                </div>
                <div class="price-item">60.000đ</div>
            </li>
        </ul>
        <hr>
        <div class="d-flex justify-content-between">
            <div style="font-weight:500;">Tổng cộng: 
                <span class="price-item">260.000đ<span>
            </div>
            <a href="/view_cart"><div class="cart-btn">Xem Giỏ Hàng</div></a>
        </div> -->
    </div> 
</div>