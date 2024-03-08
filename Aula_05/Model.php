<?php 

class Model
{

    // $variavel -> atributos
    // modificadores de acesso
    // public
    // private   - Somente à propria classe pode alterar, gravar e recuperar os dados
    // protected - A própria classe e suas filhas pode alterar, gravar e recuperar os dados

    // protected $primaryKey = "id";
    // protected $fillables;
    
    protected $table;
    private $conn;
    protected $primaryKey = "id";
    protected $fillables;

    // function funcao() -> metodos

    public function __construct($banco)
    {
      $this->conn = new PDO('sqlite:'.$banco);
    }

    public function create(){

    }

    public function all(){
      $sql = "SELECT * FROM " . $this->table;

      $stmt = $this->conn->prepare($sql);

      $stmt->execute();

      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update(){

    }

    public function get($id){
      $sql = "SELECT * FROM " . $this->table . " WHERE " . $this->primaryKey . " = :id ";

      $stmt = $this->conn->prepare($sql);

      $stmt->bindValue(":id", $id);

      $stmt->execute();
      
      return $stmt->fetch(PDO::FETCH_ASSOC);      
    }

    public function destroy(){

    }

}


