<?php

/*
 * Returns the four most recent products, using the order of the elements in the array
 * @return   array           a list of the last four products in the array;
                             the most recent product is the last one in the array
 */
function get_products_recent() {
    $recent = array();
    $all = get_products_all();

    $total_products = count($all);
    $position = 0;
    
    foreach($all as $product) {
        $position = $position + 1;
        if ($total_products - $position < 4) {
            $recent[] = $product;
        }
    }
    return $recent;
}

/*
 * Loops through all the products, looking for a search term in the product names
 * @param    string    $s    the search term
 * @return   array           a list of the products that contain the search term in their name
 */
function get_products_search($s) {
    $results = array();
    $all = get_products_all();

    foreach($all as $product) {
        if (stripos($product["name"],$s) !== false) {
            $results[] = $product;
        }
    }
    return $results;
}

/*
 * Counts the total number of products
 * @return   int             the total number of products
 */
function get_products_count() {
    return count(get_products_all());
}

function get_details_count() {
    return count(get_products_all());
}


/*
 * Returns a specified subset of products, based on the values received,
 * using the order of the elements in the array .
 * @param    int             the position of the first product in the requested subset 
 * @param    int             the position of the last product in the requested subset 
 * @return   array           the list of products that correspond to the start and end positions
 */
function get_products_subset($positionStart, $positionEnd) {
    $subset = array();
    $all = get_products_all();

    $position = 0;
    foreach($all as $product) {
        $position += 1;
        if ($position >= $positionStart && $position <= $positionEnd) {
            $subset[] = $product;
        }
    }
    return $subset;
}




/*
 * Returns the full list of products. This function contains the full list of products,
 * and the other model functions first call this function.
 * @return   array           the full list of products
 */
function get_products_all() {
   /* $products = array();
    $products[101] = array(
    	"name" => "europe,france,paris",
        "name1" => "paris",
    	"img" => "img/shirts/paris.jpg",
    	"price" => 18,
    	//"paypal" => "9P7DLECFD4LKE",
        "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[102] = array(
    	"name" => "asia, dubai",
        "name1" => "dubai",
        "img" => "img/shirts/dubai.jpg",
        "price" => 20,
        //"paypal" => "SXKPTHN2EES3J",
        "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[103] = array(
        "name" => "europe, norway,oslo",
        "name1" => "oslo",
        "img" => "img/shirts/oslo.jpg",    
        "price" => 20,
        //"paypal" => "7T8LK5WXT5Q9J",
        "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[104] = array(
        "name" => "asia,qatar",
        "name1" => "qatar",
        "img" => "img/shirts/qatar.jpg",    
        "price" => 18,
        //"paypal" => "YKVL5F87E8PCS",
        "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[105] = array(
        "name" => "north america,USA,america,washington",
        "name1" => "washington",
        "img" => "img/shirts/dc.jpg",    
        "price" => 25,
        //"paypal" => "4CLP2SCVYM288",
        "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[106] = array(
        "name" => "north america,Canada,Toronto",
        "name1" => "toronto",
       "img" => "img/shirts/toronto.jpg", 

        "price" => 20,
       // "paypal" => "TNAZ2RGYYJ396",
        "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[107] = array(
        "name" => "North america,Canada,vancuver",
        "name1" => "vancuver",
        "img" => "img/shirts/vancuver.jpg",    
        "price" => 20,
        "paypal" => "S5FMPJN6Y2C32",
        "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[108] = array(
        "name" => "North america,USA,texas",
        "name1" => "texas",
        "img" => "img/shirts/texas.jpg",    
        "price" => 25,
        "paypal" => "JMFK7P7VEHS44",
        "sizes" => array("Large","X-Large")
    );
    $products[109] = array(
            "name" => "europe,switzerland",
            "name1" => "switzerland",
            "img" => "img/shirts/swi.jpg",    
            "price" => 20,
            "paypal" => "B5DAJHWHDA4RC",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[110] = array(
            "name" => "europe,austria",
            "name1" => "austria",
            "img" => "img/shirts/austria.jpg",    
            "price" => 22,
            "paypal" => "6T2LVA8EDZR8L",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[111] = array(
            "name" => "asia,chaina,beijing",
            "name1" => "beijing",
            "img" => "img/shirts/beijing.jpg",    
            "price" => 22,
            "paypal" => "MA2WQGE2KCWDS",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[112] = array(
            "name" => "europe,ireland,dublin",
            "name1" => "dublin",
            "img" => "img/shirts/ireland.jpg",    
            "price" => 22,
            "paypal" => "FWR955VF5PALA",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[113] = array(
            "name" => "asia,turkey,istanbul",
            "name1" => "istanbul",
            "img" => "img/shirts/istanbul.jpg",    
            "price" => 22,
            "paypal" => "4ELH2M2FW7272",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[114] = array(
            "name" => "europe,england,london",
            "name1" => "london",
            "img" => "img/shirts/london.jpg",    
            "price" => 24,
            "paypal" => "AT3XQ3ZVP2DZG",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[115] = array(
            "name" => "asia,malaysia",
            "name1" => "malaysia",
            "img" => "img/shirts/maly.jpg",    
            "price" => 24,
            "paypal" => "LYESEKV9JWE3A",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[116] = array(
            "name" => "europe,russia,moscow",
            "name1" => "moscow",
            "img" => "img/shirts/russia.jpg",    
            "price" => 24,
            "paypal" => "KT7MRRJUXZR34",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[117] = array(
            "name" => "asia,singapore",
            "name1" => "singapore",
            "img" => "img/shirts/singapore.jpg",    
            "price" => 20,
            "paypal" => "5UXJG8PXRXFKE",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[118] = array(
            "name" => "australia,sydney",
            "name1" => "sydney",
            "img" => "img/shirts/sydny.jpg",    
            "price" => 25,
            "paypal" => "KHP8PYPDZZFTA",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[119] = array(
            "name" => "asia,iran,tehran",
            "name1" => "tehran",
            "img" => "img/shirts/tehran.jpg",    
            "price" => 22,
            "paypal" => "BFJRFE24L93NW",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[120] = array(
            "name" => "asia,thailand",
            "name1" => "thailand",
            "img" => "img/shirts/thailand.jpg",    
            "price" => 22,
            "paypal" => "RUVJSBR9FXXWQ",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[121] = array(
            "name" => "europe,italy,milan",
            "name1" => "milan",
            "img" => "img/shirts/italy.jpg",    
            "price" => 20,
            "paypal" => "PGN6ULGFZTXL4",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[122] = array(
            "name" => "south america,brazil,rio",
            "name1" => "rio",
            "img" => "img/shirts/rio.jpg",    
            "price" => 24,
            "paypal" => "PYR4QH97W2TSJ",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[123] = array(
            "name" => "europe,genmany,berlin",
            "name1" => "berlin",
            "img" => "img/shirts/berlin.jpg",    
            "price" => 25,
            "paypal" => "STDAUJJTSPT54",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[124] = array(
            "name" => "north america, cuba",
            "name1" => "cuba",
            "img" => "img/shirts/cuba.jpg",    
            "price" => 20,
            "paypal" => "2R2U74KWU5RXG",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[125] = array(
            "name" => "europe,belgium",
            "name1" => "belgium",
            "img" => "img/shirts/belgium.jpg",    
            "price" => 22,
            "paypal" => "GJG7F8EW3XFAS",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[126] = array(
            "name" => "north america,mexico",
            "name1" => "mexico",
            "img" => "img/shirts/mexico.jpg",    
            "price" => 25,
            "paypal" => "QW2LFRYGU7L4Q",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[127] = array(
            "name" => "europe,romania",
            "name1" => "romania",
            "img" => "img/shirts/romania.jpg",    
            "price" => 20,
            "paypal" => "GFV6QVRMJU7F8",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
   
    // when creating a new product, create it first in PayPal and
    // then copy the product ID from PayPal to use here     

    // automated duplication to copy the product_id/sku from the array key
    // and duplicate it into the product details inside the array
    foreach ($products as $product_id => $product) {
        $products[$product_id]["sku"] = $product_id;
    }
    */


require(ROOT_PATH . "inc/database.php");

try{
    $results=$db->query("SELECT name,price,img,sku,paypal FROM products ORDER BY sku ASC");
   
}catch(Exception $e){
    echo"data could not be rettrived";
    exit;

}
$products = $results->fetchAll(PDO::FETCH_ASSOC);

    return $products;
}
/* return an array of product information for the product that matches the sku;
returns a boolean false if no product matches the sku @param int $sku the sku
@return mixed array list of product information for the one matching product
bool false if no product matchs */
function get_details_all() {
    require(ROOT_PATH . "inc/database.php");

try{
    $results=$db->query("SELECT Duration,flight,hotel,sight,food FROM details ORDER BY sku ASC");
   
}catch(Exception $e){
    echo"data could not be rettrived";
    exit;

}
$products = $results->fetchAll(PDO::FETCH_ASSOC);

    return $products;
}


function get_product_single($sku){
     
     require(ROOT_PATH . "inc/database.php");
     try{
       $result= $db->prepare("SELECT name,price,img,sku,paypal FROM products WHERE sku=?");
       $result->bindparam(1,$sku);
       $result->execute();
     }
     catch(Exception $e){
        echo"could not ";
        exit;
     }
     $product=$result->fetch(PDO::FETCH_ASSOC);
     return $product;
}

//function get_de_all() {

function get_details_single($sku){
           
    require(ROOT_PATH . "inc/database.php");
     try{
       $result= $db->prepare("SELECT Duration,flight,hotel,sight,food FROM details WHERE sku=?");
       $result->bindparam(1,$sku);
       $result->execute();
     }
     catch(Exception $e){
        echo"could not ";
        exit;
     }
     $detail=$result->fetch(PDO::FETCH_ASSOC);
     return $detail;
}

function get_details_subset($positionStart, $positionEnd) {
    $subset = array();
    $all = get_details_all();

    $position = 0;
    foreach($all as $product) {
        $position += 1;
        if ($position >= $positionStart && $position <= $positionEnd) {
            $subset[] = $product;
        }
    }
    return $subset;
}

?>