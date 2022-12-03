<?php

class Database
{

    private static $instances = [];

    protected function __construct()
    {
        $conn = mysqli_connect(
            'localhost',
            'root',
            '',
            'shop_abc'
        ) or die("Can't Connect To Database!");
        $conn->set_charset("utf8");
        $this->conn = $conn;
        return $this;
    }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): Database
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }
        return self::$instances[$cls];
    }


    /**
     * 
     */

    public function num_rows($result)
    {
        if ($result)
            return mysqli_num_rows($result);
        return 0;
    }


    public function exec($sql)
    {
        $this->conn->set_charset("utf8");
        return $this->conn->query($sql);
    }



    public function fetchObject($SQL, $callback)
    {
        $result = [];
        $data = $this->exec($SQL);
        if ($this->num_rows($data) > 0) {
            while ($row = $data->fetch_object()) {
                array_push($result, $row);
            }
        } else {
            $result = 0;
        }
        if (is_callable($callback)) {
            call_user_func($callback, $result);
        }
    }
}
