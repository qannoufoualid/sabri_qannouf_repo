<?php

class DaoImpl implements Dao {

	private $entityManager = $GLOBALS['entityManager'];
	private $className;

	public function __construct($className)
    {
        $this->$className = $className;
    }
	public function save($o) Throws{

		try {

			$entityManager->persist($o);
			$entityManager->flush();

		} catch (Exception $e) {
				throw $e;
		}

		return $o->getId();

	}

	public function findById($id) {
		$obj = NULL;
		try {
			//ceci retourne nulle si aucun objet trouvé
			$obj = $entityManager->find($className, $id);

		} catch (Exception $e) {
			throw $e;
		}
		return $obj;
	}

	
	public function update($o) {
		
		try {
			$entityManager->flush();
		} catch (Exception $e) {
			throw $e;
		}
	}

	
	public function delete($o) {
		try{
		    $entityManager->remove($o);
		    $entityManager->flush();
		}catch(Exception $e){
			throw $e;
		}
	}

	
	public function getAll() {
		$objects = NULL;
		try {

			$repository = $entityManager->getRepository($className);
			$objects = $repository->findAll();

		} catch (Exception $e) {
			throw $e;
		}

		return $objects;
	}
	
}
?>