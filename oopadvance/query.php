<?php

class Database {
    protected $connection;

    public function __construct($host, $username, $password, $database) {
        $this->connection = new mysqli($host, $username, $password, $database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function query($sql) {
        return $this->connection->query($sql);
    }
}

class QueryBuilder {
    protected $table;
    protected $select = [];
    protected $where = [];
    protected $groupBy;
    protected $having;

    public function __construct($table) {
        $this->table = $table;
    }

    public function select($columns) {
        $this->select = $columns;
        return $this;
    }

    public function where($conditions) {
        $this->where = $conditions;
        return $this;
    }

    public function group_by($column) {
        $this->groupBy = $column;
        return $this;
    }

    public function having($column, $operator, $value) {
        $this->having = "$column $operator $value";
        return $this;
    }

    public function get() {
        $columns = implode(', ', $this->select);
        $sql = "SELECT $columns FROM {$this->table}";

        if (!empty($this->where)) {
            $conditions = [];
            foreach ($this->where as $key => $value) {
                $conditions[] = "$key = '$value'";
            }
            $sql .= " WHERE " . implode(' AND ', $conditions);
        }

        if (!empty($this->groupBy)) {
            $sql .= " GROUP BY {$this->groupBy}";
        }

        if (!empty($this->having)) {
            $sql .= " HAVING {$this->having}";
        }

        
        $database = new Database("127.0.0.1", "root", "", "business");
        $result = $database->query($sql);

        
        echo "<table border='1'>";
        echo "<tr>";
        foreach ($this->select as $column) {
            echo "<th>$column</th>";
        }
        echo "</tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($this->select as $column) {
                echo "<td>{$row[$column]}</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    }
}

class Sites extends QueryBuilder {
   
}

class Clients extends QueryBuilder {
    
}


$sites = new Sites("lead_report");
$sites->select(["client_id", "COUNT(*)"])
    ->group_by("client_id")
    ->having("COUNT(*)", ">", 5)
    ->get();


$clients = new Clients("client_list");
$clients->where(["last_name" => "Owen"])
    ->get();

?>
