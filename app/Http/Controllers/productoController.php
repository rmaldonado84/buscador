<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductoModel;

class productoController extends Controller
{
    public function index()
	{
		return view('home');
	}

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
}