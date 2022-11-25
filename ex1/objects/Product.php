<?php
class Product{
  
    // database connection and table name
    private $conn;
    private $table_name = "products";
  
    // object properties
    public $id;
    public $name;
    public $email;
    public $cargo;
    public $salario;
    public $cpf;
    public $rg;
    public $senha;
    public $atribuicoes;
    public $inicio;
    public $nascimento;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products
function read(){
  
    // select all query
    $query = "SELECT
               c.id, c.name, c.email, c.cargo, c.salario, c.cpf, c.rg, c.senha, c.atribuicoes, c.inicio, c.nascimento; 
            FROM
                " . $this->table_name . " c
                
            ORDER BY
                c.inicio DESC";
  
    // prepare query statement
    $stmt = $this->conn->prepare($query);
  
    // execute query
    $stmt->execute();
  
    return $stmt;
}

// create product
function create(){
  
    // query to insert record
    $query = "INSERT INTO
                " . $this->table_name . "
            SET
                name=:name, email=:email, cargo=:cargo, salario=salario, cpf=:cpf,  rg=:rg,  senha=:senha,  atribuicoes=:atribuicoes , inicio=:inicio, nascimento=:nascimento";
  
    // prepare query
    $stmt = $this->conn->prepare($query);
  
    // sanitize
    $this->name=htmlspecialchars(strip_tags($this->name));
    $this->id=htmlspecialchars(strip_tags($this->id));


  
    // bind values
    $stmt->bindParam(":name", $this->name);
    $stmt->bindParam(":email", $this->email);
    $stmt->bindParam(":cargo", $this->cargo);
    $stmt->bindParam(":salario", $this->salario);
    $stmt->bindParam(":cpf", $this->cpf);
    $stmt->bindParam(":rg", $this->rg);
    $stmt->bindParam(":senha", $this->senha);
    $stmt->bindParam(":atribuicoes", $this->atribuicoes);
    $stmt->bindParam(":inicio", $this->inicio);
    $stmt->bindParam(":nascimento", $this->nascimento);
  
    // execute query
    if($stmt->execute()){
        return true;
    }
  
    return false;
      
}

// update the product
function update(){
  
    // update query
    $query = "UPDATE
                " . $this->table_name . "
            SET
                name = :name,
                
            WHERE
                id = :id";
  
    // prepare query statement
    $stmt = $this->conn->prepare($query);
  
    // sanitize
    $this->name=htmlspecialchars(strip_tags($this->name));
    $this->id=htmlspecialchars(strip_tags($this->id));
  
    // bind new values
    $stmt->bindParam(":name", $this->name);
    $stmt->bindParam(":email", $this->email);
    $stmt->bindParam(":cargo", $this->cargo);
    $stmt->bindParam(":salario", $this->salario);
    $stmt->bindParam(":cpf", $this->cpf);
    $stmt->bindParam(":rg", $this->rg);
    $stmt->bindParam(":senha", $this->senha);
    $stmt->bindParam(":atribuicoes", $this->atribuicoes);
    $stmt->bindParam(":inicio", $this->inicio);
    $stmt->bindParam(":nascimento", $this->nascimento);
  
    // execute the query
    if($stmt->execute()){
        return true;
    }
  
    return false;
}
// delete the product
function delete(){
  
    // delete query
    $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
  
    // prepare query
    $stmt = $this->conn->prepare($query);
  
    // sanitize
    $this->id=htmlspecialchars(strip_tags($this->id));
  
    // bind id of record to delete
    $stmt->bindParam(1, $this->id);
  
    // execute query
    if($stmt->execute()){
        return true;
    }
  
    return false;
}
}


?>
