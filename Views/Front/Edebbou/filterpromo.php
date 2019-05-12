<?php
    require_once "C:/xampp/htdocs/integration/config.php";
    if(isset($_POST['action']))
     {     
        $sql="SELECT DISTINCT *  From produits where id IS NOT NULL ";
        
        $db = config::getConnexion();

        if(isset($_POST['prodc']) && !empty($_POST['prodc']))
        {
        $prodc=implode("','",$_POST['prodc']);
           $sql.="AND  Categorie in ('".$prodc."') ";
           
        }

        if(isset($_POST['fourn']) && !empty($_POST['fourn']))
        {
        $fourn=implode("','",$_POST['fourn']);
           $sql.="AND     Fournisseur in ('".$fourn."') ";
           
        }

        if(isset($_POST['min']) && !empty($_POST['min']))
        {
        $min=$_POST['min'];
           $sql.="AND  Prix >= '".($min-0.001)."' ";
           
        }

        if(isset($_POST['max']) && !empty($_POST['max']))
        {
        $max=$_POST['max'];
           $sql.="AND  Prix <= '".($max+0.001)."' ";
           
        }
        if(isset($_POST['pop'])){
            $sql.=" ORDER BY maxoc ".$_POST['pop'];
        }
        
        try{
        $output='';
        $liste=$db->query($sql);
        if($liste->rowCount()!=0)
        foreach($liste as $row){
               $promoval = $row['promovaleur'];
            if ($promoval != 1)
            {
               $output.='<div class="col-md-4 col-xs-6">
               
                   <div class="product">
                       <div class="product-img">
                       <img src="../../images/'.$row['image'].'"/>
                           <div class="product-label">';
                           $today = date("Y-m-d");
                           $datetable = $row['Date'];
                           $conv = substr($datetable,0,10);
                           if (strcmp($today,$conv)==0)
                           {
                               
                               $output.='<span class="new">NEW</span>';
                           }    

                            
                            

    $output.='<span class="sale">'.$row['promovaleur'] *100 .' %</span>';


$output.='</div></div>
                   
                       <div class="product-body">
                           <p class="product-category">'.$row['Categorie'].'</p>
                           <form method="GET" action="product.php">
                           <input type="hidden" value="'.$row['id'].'" name="id">
                           <input type="hidden" value="'. $row['image'].'" name="image">
                           <input type="hidden" value="'.$row['Descr'].'" name="Descr">
                           <input type="hidden" value="'.$row['Categorie'].'" name="Categorie">
                           <input type="hidden" value="'.$row['statut'].'" name="statut">
                           <input type="hidden" value="'.$row['Nom'].'" name="Nom">';
                         if ($row['promovaleur'] != 1) { 
                            $output.='<input type="hidden" value="'.number_format($row['Prix']-($row['Prix']*$row['promovaleur']),3).'" name="Prix">';
                           }
                           else {

                            $output.='<input type="hidden" value="'.$row['Prix'].'" name="Prix">';
                              
                           }
                           $output.='<input type="hidden" value="'.$row['quantity'].'" name="quantity">
                           <input type="hidden" value="'.$row['Code_Barre'].'" name="Code_Barre">
                           <input type="hidden" value="'.$row['Fournisseur'].'" name="Fournisseur">
                           <input type="hidden" value="'.$row['maxoc'].'" name="maxoc">
                           <input type="hidden" value="'.$row['Date'].'" name="Date">
                           <h3 class="product-name"><a><input class="famechback" type="submit" value="'.$row['Nom'].'"></a></h3>
                           </form>';
                           if ($row['promovaleur'] != 1) { 
                            $output.='<h4 class="product-price">'.number_format($row['Prix']-($row['Prix']*$row['promovaleur']),3).'  TND<del class="product-old-price">'.number_format($row['Prix'],3	).'</del> </h4>';
 
}else {

    $output.='<h4 class="product-price">'.number_format($row['Prix'],3).' TND</h4>';

}
$output.='<div class="product-rating">';

for ($i = 1; $i <= $row['maxoc']; $i++) {

    $output.='<i class="fa fa-star"></i>';
                           
                              
}
                               
$output.=' </div>
                           
                           <div class="product-btns">
                               <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">ajouter Whishlist</span></button>
                               <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparer</span></button>
                               <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Aperçu</span></button>
                           </div>
                       </div>
                       <div class="add-to-cart">
                           <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                       </div>
                       
                   </div></div>';
        }}
        else $output='<h3>Ce Produit N existe Pas</h3>';
        
        echo $output;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
?>