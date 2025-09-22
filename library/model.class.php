<?php

class Model
{

    public $db;
    protected $tableName;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function model($modelName)
    {
        require_once ROOT . DS . 'modules' . DS . 'models' . DS . $modelName . 'Model.php';
        $className = ucfirst($modelName) . 'Model';
        $this->$modelName = new $className();
    }

    public function get($params = "")
    {

        $sql = "SELECT*FROM " . $this->tableName;

        if (is_array($params)) {
            if (isset($params["limit"])) {

                $sql .= " LIMIT " . $params["limit"];
            }
        }

        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

    public function query($param = "")
    {

        $this->db->query($param);

        return $this->db->execute()->toObject();
    }

    public function rows()
    {
        return $this->db->getAll($this->tableName)->numRows();
    }

    public function getWhere($params)
    {

        return $this->db->getWhere($this->tableName, $params)->toObject();
    }
    public function getLike($params, $limit = '')
    {

        return $this->db->getLike($this->tableName, $params, $limit)->toObject();
    }

    public function getOrderBy($params)
    {

        //        var_dump($params);

        $sql = "SELECT * FROM " . $this->tableName;

        if (is_array($params)) {
            $sql .= " ORDER BY ";

            foreach ($params["order"] as $key => $value) {

                $sql .= $key . " " . $value;
            }

            if (isset($params["limit"])) {

                $sql .= " LIMIT " . $params["limit"];
            }
        }

        //        var_dump($sql);

        $this->db->query($sql);

        return $this->db->execute()->toObject();

        //        return $this->db->getOrderBy($this->tableName, $params)->toObject();
    }

    public function delete($where = array())
    {

        return $this->db->delete($this->tableName, $where);
    }

    public function getJoin($tableJoin, $params, $join = "JOIN", $where = "")
    {

        $sql = "SELECT*FROM " . $this->tableName;

        if (is_array($tableJoin)) {

            foreach ($tableJoin as $table) {

                $sql .= " " . $join . " " . $table . " ";
            }
        } else {
            $sql .= " " . $join . " " . $tableJoin . " ";
        }

        if ($params && is_array($params)) {
            $sql .= " ON ";
            $i = 0;
            foreach ($params as $key => $value) {

                $sql .= " " . $key . " = " . $value . " ";

                $i++;
                if ($i < count($params)) {
                    $sql .= " AND ";
                }
            }
        } else {
            $sql .= " ON " . $key . " = " . $value . " ";
        }

        if ($where && is_array($where)) {

            $sql .= " WHERE ";
            $i = 0;

            foreach ($where as $key => $value) {

                $sql .= " " . $key . "='" . $value . "' ";

                $i++;
                if ($i < count($where)) {

                    $sql .= " AND ";
                }
            }
        }
        // SELECT*FROM matapelajaran LEFT JOIN absen_siswa  ON  absen_siswa.id_mapel = matapelajaran.id_mapel LEFT JOIN siswa ON absen_siswa.id_siswa = siswa.id_siswa

        // SELECT 
        //  matapelajaran.nama_pelajaran, 
        //  matapelajaran.kelas, absen_siswa.date_absen, absen_siswa.status, siswa.fullname, siswa.room_class 
        // FROM matapelajaran 
        // LEFT JOIN absen_siswa  ON  absen_siswa.id_mapel = matapelajaran.id_mapel 
        // LEFT JOIN siswa ON absen_siswa.id_siswa = siswa.id_siswa

        /**
         * 
         SELECT
            C.CustomerID,
            C.CustomerName,
            O.OrderID,
            O.OrderDate,
            P.ProductName,
            OI.Quantity,
            P.Price
        FROM
            Customers AS C
        LEFT JOIN
            Orders AS O ON C.CustomerID = O.CustomerID
        LEFT JOIN
            OrderItems AS OI ON O.OrderID = OI.OrderID
        LEFT JOIN
            Products AS P ON OI.ProductID = P.ProductID;
         * 
         */

       // var_dump($sql);

        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

    function getMultiJoin($select = array(), $dataTables = array(), $where = array())
    {
        $db = "SELECT ";
        $c = count($select);
        $n = 1;
        $table = array();
        foreach ($select as $key => $val) {
            $db .= $val;
            if ($n < $c) {
                $db .= ", ";
            }
            $n++;
        }
        $m = 0;
        foreach ($dataTables as $key => $val) {
            $table[$m] = $val;
            $m++;
        }
        // var_dump($table);
        $db .= ' FROM ' . $table[0];
        $x = 1;
        foreach ($where as $key => $value) {
            $db .= ' LEFT JOIN ';
            $db .= $table[$x] . ' ON ' . $key . ' = ' . $value;
            $x++;
        }

         $this->db->query($db);

        return $this->db->execute()->toObject();
        // return $db;
    }

    public function insert($data = array())
    {

        $insert = $this->db->insert($this->tableName, $data);

        if ($insert) {
            return true;
        }

        return false;
    }

    public function update($data = array(), $where = array())
    {

        $update = $this->db->update($this->tableName, $data, $where);

        if ($update) {
            return true;
        }

        return false;
    }

}

?>