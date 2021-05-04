<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// Mi nombre de colecciones platzi_db
		// Insertando Datos
		$insertOneResult = $this->db->platzi_db->insertOne([
			'username' => 'admin',
			'email' => 'admin@example.com',
			'name' => 'Admin User',
		]);
		printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

		var_dump($insertOneResult->getInsertedId());

		// Seleccionando
		$document = $this->db->platzi_db->findOne([]);
		var_dump($document);

		return view('welcome_message');
	}
}
