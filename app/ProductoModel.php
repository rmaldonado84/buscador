<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class ProductoModel extends Model
{
    public function search($keyword)
    {
    	$query = 'select * from producto where tags like :keywordTag OR titulo like :keywordTitulo';
    	$params = array(
    		':keywordTag' => '%'.$keyword.'%',
    		':keywordTitulo' => '%'.$keyword.'%',
		);
    	$result = DB::select($query, $params);
    	return $result;
    }

    public function insert($result, $keyword)
    {
    	foreach ($result as $row) {
    		$query = 'insert into estadistica(idproducto, keyword) values (:idproducto, :keyword)';
    		$params = array(
    			':idproducto' => $row->id, 
    			':keyword' => $keyword
    			);
    		$result1 = DB::insert($query, $params);
    	}

    	return $result1;
    }

    public function est_productos()
    {
    	$query = 'select idproducto, count(keyword) cantidad from estadistica group by idproducto order by cantidad DESC limit 20';

    	$result = DB::select($query);
    	return $result;
    }

    public function est_palabras($id_producto)
    {
    	$query = 'select keyword, count(idproducto) producto from estadistica where idproducto = :idproducto group by keyword order by producto DESC limit 5';
    	
    	$params = array(
    		':idproducto' => $id_producto
		);

    	$result = DB::select($query, $params);
    	return $result;
    }
}
