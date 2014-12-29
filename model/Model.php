<?php
    require'DBConnect.php';
	abstract class Model
    {

        static protected $table;


        static public function findAll()
        {
            return DBConnect::query_all();
        }

        static public function findByPk($id)
        {
            return DBConnect::query_by_id($id);
        }


        public function save(){
            $tokens = array();
            $values = array();
  //  var_dump($this->id);

                foreach (static::$columns as $column) {
                    $tokens[] = ":" . $column;
                    $values[':' . $column] = $this->$column;
                }
            if (!isset($this->id_art)) {
                $id_user = '1';
                $sql = 'INSERT INTO ' . static::$table . '
					(id_user,' . implode(',', static::$columns) . ',created_date)
					VALUES
					(' . $id_user . ',' . implode(',', $tokens) . ', now())';
                $dbh = DBConnect::getConnection();
                $sth = $dbh->prepare($sql);
                $sth->execute($values);
                $this->id_art = $dbh->lastInsertId();
            } else {
                $columns = array();
                foreach (static::$columns as $column) {
                    $columns[] = $column . "=:" . $column;
                }
                $sql = 'UPDATE ' . static::$table . '
                SET ' . implode(',', $columns) . '
                WHERE id_art=:id_art';
                    $dbh = DBConnect::getConnection();
                    $sth = $dbh->prepare($sql);
                    $arr = array(':id_art' => $this->id_art) + $values;
                    $sth->execute($arr);
                //var_dump($sth->errorInfo());

            }
        }

        public function deleteArticle(){
            $sql = 'DELETE FROM '.static::$table.' WHERE id_art=:id_art';
            $dbh = DBConnect::getConnection();
            $sth = $dbh->prepare($sql);
            $arr = array(':id_art' => $this->id_art);
            $sth->execute($arr);

        }

    }