<?php


class Employee {
    protected static $db_table = "users";
    protected static $db_table_fields = array('id','name', 'gender', 'type', 'depertment', 'salary');
    public $id;
    public $name;
    public $gender;
    public $type;
    public $depertment;
    public $salary;

    public static function find_all_employee() {
        return self::find_this_query("SELECT * FROM employee");
    }

    public static function find_by_id($id){
        global $database;
        $result_set = $database->query("SELECT * FROM employee WHERE id=$id");
        $found_employee = mysqli_fetch_array($result_set);
        return $found_employee;
    }

    public static function find_this_query($sql){
        global $database;
        $result_set = $database->query($sql);
        return $result_set;
    }

    public function create(){
        global $database;
        $sql = "INSERT INTO employee (name, gender, type, depertment, salary)";
        $sql .= "VALUES('";
        $sql .= $database->escape_string($this->name) . "', '";
        $sql .= $database->escape_string($this->gender) . "', '";
        $sql .= $database->escape_string($this->type) . "', '";
        $sql .= $database->escape_string($this->depertment) . "', '";
        $sql .= $database->escape_string($this->salary) . "')";

        if($database->query($sql)) {
            $this->id = $database->the_insert_id();
            return true;

        }else {
            return false;
        }
    }

    public function update() {
        global $database;
        $sql = "UPDATE employee SET ";
        $sql .= "name= '" . $database->escape_string($this->name)             . "', ";
        $sql .= "gender= '" . $database->escape_string($this->gender)         . "', ";
        $sql .= "type= '" . $database->escape_string($this->type)             . "', ";
        $sql .= "depertment= '" . $database->escape_string($this->depertment) . "', ";
        $sql .= "salary= '" . $database->escape_string($this->salary)         . "' ";
        $sql .=" WHERE id= " . $database->escape_string($this->id);
        $database->query($sql);
        return (mysqli_affected_rows($database->connection) == 1) ? true : false;
    }

    public function delete() {
        global $database;
        $sql = "DELETE FROM employee ";
        $sql .="WHERE id=" . $database->escape_string($this->id);
        $sql .="LIMIT 1";
        $database->query($sql);
    }



}
?>