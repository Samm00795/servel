<?php
    class PersonalModel
    {
        private $pdo;
        public function __CONSTRUCT()
        {
            try 
            {
                $this->pdo = new PDO('mysql:host=localhost;dbname=consorcio','root','');
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            }
            catch(Exception $e)
            {
                die($e->getMessage());
            }
        }
        public function Listar(){
            try
            {

              $result = array();
              $stm = $this->pdo->prepare("SELECT * FROM personal");
              $stm->execute();
              foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
                {
                  $alm = new personal();
                  $alm->__SET('codper', $r->codper);
                  $alm->__SET('nom', $r->nom);
                  $alm->__SET('ape', $r->ape);
                  $alm->__SET('dir', $r->dir);
                  $alm->__SET('fnac', $r->fnac);
                  $alm->__SET('sex', $r->sex);
                  
                  $result[] = $alm;
                }
                return $result;
            }
            catch(Exception $e)
            {
              die($e->getMessage());
            }
        }
        public function Obtener($codper)
        {
            try
            {
                $stm = $this->pdo
                ->prepare("SELECT * FROM personal WHERE codper = ?");
                $stm->execute(array($codper));
                $r = $stm->fetch(PDO::FETCH_OBJ);
                $alm = new personal();
                $alm->__SET('codper', $r->codper);
                $alm->__SET('nom', $r->nom);
                $alm->__SET('ape', $r->ape);
                $alm->__SET('dir', $r->dir);
                $alm->__SET('fnac', $r->fnac);
                $alm->__SET('sex', $r->sex);
                return $alm;
            } 
            catch (Exception $e)
            {
                die($e->getMessage());
            }   
        }
        public function Eliminar($codper)
        {
            try
            {
                $stm = $this->pdo
                ->prepare("DELETE FROM personal WHERE codper = ?");
                $stm->execute(array($codper));
            } 
            catch (Exception $e)
            {
                die($e->getMessage());
            }
        }
        public function Actualizar(personal $data)
        {
            try
            {

                $sql = "UPDATE personal SET
                nom = ?,
                ape = ?,
                dir = ?,
                fnac= ?,
                sex = ?
                WHERE codper = ?";
                $this->pdo->prepare($sql)
                ->execute(
                array(
                $data->__GET('nom'),
                $data->__GET('ape'),
                $data->__GET('dir'),                
                $data->__GET('fnac'),
                $data->__GET('sex'),
                $data->__GET('codper')
                )
                );
            } 
            catch (Exception $e)
            {
                die($e->getMessage());
            }
        }

        public function Registrar(personal $data)
        {
            try
            {
                $sql = "INSERT INTO personal (nom,ape,dir,fnac,sex) VALUES ( ?, ?, ?,?,?)";
                $this->pdo->prepare($sql)->execute(array(
                $data->__GET('nom'),
                $data->__GET('ape'),
                $data->__GET('dir'),
                $data->__GET('fnac'),
                $data->__GET('sex'),
                )
                );
            }   
            catch (Exception $e)
            {
                die($e->getMessage());
            }
        }
    }   
?>