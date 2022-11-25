<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
// database connection will be here
// include database and object files
include_once 'config/database/Database.php';
include_once 'objects/Product.php';
  
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$cliente = new Cliente($db);
  
// read products will be here

// query products
$stmt = $product->read();
$num = $stmt->rowCount();
  
// check if more than 0 record found
if($num>0){
  
    // products array
    $cliente_arr=array();
    $cliente_arr["records"]=array();
  
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
  
        $cliente=array(
            "id" => $id,
            "name" => $name,
            "email" => $email,
            "cargo" => $cargo,
            "salario" => $salario,
            "cpf" => $cpf,
            "rg" => $rg,
            "email" => $email,
            "senha" => $senha,
            "atribuicoes" => $atribuicoes,
            "inicio" => $inicio,
            "nascimento" => $nascimento
        );
  
        array_push($products_arr["records"], $product_item);
    }
  
    // set response code - 200 OK
    http_response_code(200);
  
    // show products data in json format
    echo json_encode($products_arr);
}
  

