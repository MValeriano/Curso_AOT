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

    public function create($data){
        // Filtra os dados permitidos usando fillables
        $filteredData = array_intersect_key($data, array_flip($this->fillables));
        
        $columns = implode(', ', array_keys($filteredData));
        $placeholders = ':' . implode(', :', array_keys($filteredData));
        
        $sql = "INSERT INTO {$this->table} ({$columns}) VALUES ({$placeholders})";
        $stmt = $this->conn->prepare($sql);
        
        foreach($filteredData as $key => $value){
            $stmt->bindValue(":{$key}", $value);
        }
        
        return $stmt->execute();
    }

    public function all(){
      $sql = "SELECT * FROM " . $this->table;
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($id, $data){
        // Filtra os dados permitidos usando fillables
        $filteredData = array_intersect_key($data, array_flip($this->fillables));
        
        $setClause = [];
        foreach(array_keys($filteredData) as $column){
            $setClause[] = "{$column} = :{$column}";
        }
        $setClause = implode(', ', $setClause);
        
        $sql = "UPDATE {$this->table} SET {$setClause} WHERE {$this->primaryKey} = :id";
        $stmt = $this->conn->prepare($sql);
        
        foreach($filteredData as $key => $value){
            $stmt->bindValue(":{$key}", $value);
        }
        $stmt->bindValue(':id', $id);
        
        return $stmt->execute();
    }

    public function get($id){
      $sql = "SELECT * FROM " . $this->table . " WHERE " . $this->primaryKey . " = :id ";
      $stmt = $this->conn->prepare($sql);
      $stmt->bindValue(":id", $id);
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_ASSOC);      
    }

    public function destroy($id){
        $sql = "DELETE FROM {$this->table} WHERE {$this->primaryKey} = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }

}
