<!-- /col -->
<div class="col-lg-4" id="sidebar_fixed">
    <div class="box_order mobile_fixed">
        <div class="head">
            <h3>Sipariş Özeti</h3>
            <a href="#0" class="close_panel_mobile"><i class="icon_close"></i></a>
        </div>
        <!-- /head -->
        <div class="main">
            <ul class="clearfix">
                <li><a href="#0">5x Enchiladas</a><span>11₺</span></li>
                <li><a href="#0">2x Burrito</a><span>14₺</span></li>
                <li><a href="#0">1x Chicken</a><span>18₺</span></li>
                <li><a href="#0">2x Corona Beer</a><span>9₺</span></li>
                <li><a href="#0">2x Cheese Cake</a><span>11₺</span></li>
            </ul>
            <hr>
            <ul class="clearfix">
                <li>Ara toplam<span>56₺</span></li>
                <li>Teslimat ücreti<span>10₺</span></li>
                <li class="total">Toplam<span>66₺</span></li>
            </ul>
            <hr>
            <!-- <div class="row opt_order">
                <div class="col-6">
                    <label class="container_radio">Teslimat
                        <input type="radio" value="option1" name="opt_order" checked>
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-6">
                    <label class="container_radio">Gel Al
                        <input type="radio" value="option1" name="opt_order">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div> -->
            <div class="dropdown day">
                <a href="#" data-bs-toggle="dropdown">Gün <span id="selected_day"></span></a>
                <div class="dropdown-menu">
                    <div class="dropdown-menu-content">
                        <!-- <h4>Ne zaman teslim edilsin?</h4> -->
                        <div class="radio_select chose_day">
                            <ul>
                                <?php takwAwayCDays(); ?>
                            </ul>
                        </div>
                        <!-- /people_select -->
                    </div>
                </div>
            </div>
            <!-- /dropdown -->
            <div class="dropdown time">
                <a href="#" data-bs-toggle="dropdown">Saat <span id="selected_time"></span></a>
                <div class="dropdown-menu">
                    <div class="dropdown-menu-content">
                        <!-- <h4>Öğleden Önce</h4> -->
                        <div class="radio_select add_bottom_15">
                            <ul>
                                <?php takwAwayCTimes(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /dropdown -->
            <div class="btn_1_mobile">
                <a href="order.php" class="btn_1 gradient full-width mb_5">Siparişi Onayla</a>
                <div class="text-center"><small>Bu adımda ücret alınmaz</small></div>
            </div>
        </div>
    </div>
    <!-- /box_order -->
    <div class="btn_reserve_fixed"><a href="#0" class="btn_1 gradient full-width">Sepeti Görüntüle</a></div>
</div>