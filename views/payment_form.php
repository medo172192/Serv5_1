 <!-- 
    ____________________SERV5___________________________________
                    PRODUCT FORM
 -->
<div class="container-fluid">
    <div class="row">
        
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" class="form mt-3">
           <div class="col-lg-3">
           <div class="card" >
                    <img class="card-img-top" src="public/storage/images/product.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Product title</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, dicta.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Price 100$ USD</li>
                    <li class="list-group-item">Lorem, ipsum dolor.</li>
                </ul>
                <div class="card-body">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="business" value="sb-oawvl25795123@business.example.com">
                    <input type="hidden" name="item_name" value="Order For subscribtion">
                    <input type="hidden" name="item_number" value="NA">
                    <label >Amount$ :</label>
                    <input type="number" name="amount"  value='100' min='100' class='form-control'>
                    <input type="hidden" name="invoice" value="45678899">
                    <input type="hidden" name="discount_amount" value="0">
                    <input type="hidden" name="no_shipping" value="0">
                    <input type="hidden" name="cn" value="No comments">
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" name="return" value="http://localhost/storage/serv5/">
                    <input type="hidden" name="rm" value="2">
                    <input type="hidden" name="lc" value="US">
                    <input type="hidden" name="bn" value="PP_BuyNowBF">
                    <input type="hidden" name="amount2" value="100 USD">
                    <input type="hidden" name="finalizeOrder" value="">
                    <input type="submit" name="finalizeOrder" value="buy" class="btn btn-primary mt-2"  id='finalizeOrder'>
                </div>
            </div>
           </div>
        </form>

    </div>
</div>