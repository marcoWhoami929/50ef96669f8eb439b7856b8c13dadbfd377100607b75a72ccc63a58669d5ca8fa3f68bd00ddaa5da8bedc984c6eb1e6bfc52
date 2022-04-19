<div class="wrappers">
    <section class="hero-wrap hero-bread items jarallax" style="background-image: url('views/images/bg_2.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">

                    <h1 class="mb-0 bread">Mi carrito</h1>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr class="text-center">
                                <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

                                <td class="image-prod">
                                    <div class="img" style="background-image:url(views/images/product-2.jpg);"></div>
                                </td>

                                <td class="product-name">
                                    <h3>Fresas</h3>
                                    <p></p>
                                </td>

                                <td class="price">$120.00</td>

                                <td class="quantity">
                                    <div class="input-group mb-3">
                                        <input type="text" name="quantity" class="quantity form-control input-number" value="2" min="1" max="100">
                                    </div>
                                </td>

                                <td class="total">$240.00</td>
                            </tr><!-- END TR-->

                            <tr class="text-center">
                                <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

                                <td class="image-prod">
                                    <div class="img" style="background-image:url(views/images/product-10.jpg);"></div>
                                </td>

                                <td class="product-name">
                                    <h3>Manzanas</h3>
                                    <p></p>
                                </td>

                                <td class="price">$120.00</td>

                                <td class="quantity">
                                    <div class="input-group mb-3">
                                        <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                                    </div>
                                </td>

                                <td class="total">$120.00</td>
                            </tr><!-- END TR-->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Cupón de descuento</h3>
                    <p>Ingresar cupón si tiene alguno</p>
                    <form action="#" class="info">
                        <div class="form-group">
                            <label for="">Código de cupón</label>
                            <input type="text" class="form-control text-left px-3" placeholder="">
                        </div>
                    </form>
                </div>
                <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Aplicar Cupón</a></p>
            </div>
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Estimado de Envio</h3>
                    <p>Ingrese la dirección de entrega para obtener un costo estimado.</p>
                    <form action="#" class="info">
                        <div class="form-group">
                            <label for="">Estado</label>
                            <input type="text" class="form-control text-left px-3" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="country">Municipio</label>
                            <input type="text" class="form-control text-left px-3" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="country">Código Postal</label>
                            <input type="text" class="form-control text-left px-3" placeholder="">
                        </div>
                    </form>
                </div>
                <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Calcular</a></p>
            </div>
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Total</h3>
                    <p class="d-flex">
                        <span>Subtotal</span>
                        <span>$360.00</span>
                    </p>
                    <p class="d-flex">
                        <span>Entrega</span>
                        <span>$0.00</span>
                    </p>
                    <p class="d-flex">
                        <span>Descuento</span>
                        <span>$10.00</span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Total</span>
                        <span>$350.00</span>
                    </p>
                </div>
                <p><a href="checkout" class="btn btn-primary py-3 px-4">Proceder a pagar</a></p>
            </div>
        </div>
    </div>
</section>