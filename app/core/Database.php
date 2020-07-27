<?php

/**
 * @desc this class will handle database wrapper
 * 
 * @class Database
 * @author Hachidaime
 */
class Database
{
  /**
   * @var string $host is database host
   */
  private $host = DB_HOST;

  /**
   * @var string $user is database user
   */
  private $user = DB_USER;

  /**
   * @var string $pass is database password
   */
  private $pass = DB_PASS;

  /**
   * @var string $name is database name
   */
  private $db_name = DB_NAME;

  /**
   * @var PDO $dbh is database handler
   */
  private $dbh;

  /**
   * @var PDOStatement|bool $stmt is PDO statement
   */
  private $stmt;

  /**
   * @desc this method is constructor function
   * 
   * @method __construct
   */
  public function __construct()
  {
    // data source name
    $dsn = "mysql:host={$this->host};dbname={$this->db_name}";

    $option = [
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    try {
      $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  /**
   * @desc this method will handle prepare SQL query
   * 
   * @method query
   * @param string query is SQL query
   */
  public function query(string $query)
  {
    $this->stmt = $this->dbh->prepare($query);
  }

  /**
   * @desc this method will handle query bind
   * 
   * @method bind
   * @param string $param is field name
   * @param string $value is field value
   * @param string $type is field data type
   */
  public function bind(string $param, string $value, string $type = null)
  {
    if (is_null($type)) {
      switch (true) {
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value):
          $type = PDO::PARAM_BOOL;
          break;
        case is_null($value):
          $type = PDO::PARAM_NULL;
          break;
        default:
          $type = PDO::PARAM_STR;
      }
    }

    $this->stmt->bindValue($param, $value, $type);
  }

  /**
   * @desc this method will handle execute query
   * 
   * @method execute
   */
  public function execute()
  {
    $this->stmt->execute();
  }

  /**
   * @desc this method will handle return query as multi array
   * 
   * @method resultSet
   * @return array is multi array
   */
  public function resultSet()
  {
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  /**
   * @desc this method will handle return query as single array
   * 
   * @method single
   * @return array is single array
   */
  public function single()
  {
    $this->execute();
    return $this->stmt->fetch(PDO::FETCH_ASSOC);
  }

  /**
   * @desc this method will handle return number of affected query row
   * 
   * @method rowCount
   * @return int is row count
   */
  public function rowCount()
  {
    return $this->stmt->rowCount();
  }
}
