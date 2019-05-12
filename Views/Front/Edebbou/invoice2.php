<html>
    <head>
    <title>E-DEBBOU</title>
    <link rel="stylesheet" type="text/css" href="invoice2.css" media="screen" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/3.2.1/jquery.min.js"></script>

    </head>
    
<div id="invoice">

<div class="toolbar hidden-print">
        <div class="text-right">
            <button onclick="window.print();"  id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
        </div>
        <hr>
    </div>
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        
                    </div>
                    <div class="col company-details">
                        <h2 class="name">
                            <a target="_blank" href="https://e-debbou.me">
                            E-DEBBOU
                            </a>
                        </h2>
                        <div>20 Rue Les Jasmins, Ariana 2073 , Tunisia</div>
                        <div>25-159-269</div>
                        <div>edebbou@gmail.com</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <?php
                        session_start();
                        $name=$_SESSION['r'];
                        $email=$_SESSION['l'];

                        ?>
                        <h2 class="to"><?php echo $name ?></h2>
                        <div class="address">796 Silver Harbour, TX 79273, US</div>
                        <div class="email"><a href="mailto:mourad.tlili@esprit.tn"><?php echo $email ?></a></div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id">INVOICE X</h1>
                        <div class="date">Date of Invoice: 06/05/2019</div>
                        <div class="date">Due Date: 06/06/2019</div>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">

                <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-left">Description</th>
                            <th class="text-right">Item Price</th>
                            <th class="text-right">Item Quantity</th>
                            <th class="text-right">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                $cookie_data = stripslashes($_COOKIE['shopping_cart']);
				$cart_data = json_decode($cookie_data, true);
				foreach($cart_data as $keys => $values)
				{

if (isset($_POST['in']))
{
    $total=0;
	$in=$values["item_name"];
	$ip=$values["item_price"];
	$ii=$values["item_id"]; 
    $iq=$values["item_quantity"];
    $total=$values["item_quantity"]*$values["item_price"];
    
?>
                        <tr>
                            <td class="no"></td>
                            <td class="text-left"><h3><?php echo $in ?></h3>Liquide</td>
                            <td class="unit"><?php echo $ip  ?> TND</td>
                            <td class="qty"><?php echo $iq ?></td>
                            <td class="total"><?php echo $total ?> TND </td>
                        </tr>
                        <?php
}}
?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">SUBTOTAL</td>                            
                            <td>2332,33 TND  </td>
                        </tr>

                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">TAX 0%</td>
                            <td>$0</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">GRAND TOTAL</td>
                            <td>2332,33 TND </td>
                        </tr>
                    </tfoot>

                </table>
                <div class="thanks">Thank you!</div>
                <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
                </div>
            </main>
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>

</html>