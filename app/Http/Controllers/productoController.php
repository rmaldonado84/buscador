<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductoModel;

class productoController extends Controller
{
   	public function search(Request $request)
	{
		$productoModel = new ProductoModel();
		$keyword = $request->input('keyword');

		$result = [];
		if (!empty($keyword)) {
			$result = $productoModel->search($keyword);
		}

		if (!empty($result)) {
			$productoModel->insert($result, $keyword);
		}

		return json_encode($result);
	}

	public function estadistica()
	{
		$productoModel = new ProductoModel();
		$productos = $productoModel->est_productos();

		foreach ($productos as $producto) {
			$producto->palabras = $productoModel->est_palabras($producto->idproducto);
		}
		$productos = $productos;

		return view('estadistica', compact('productos'));
	}
}