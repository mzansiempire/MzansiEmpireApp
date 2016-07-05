<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class addbanks extends Sximo  {
	
	protected $table = 'me_banks';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT me_banks.* FROM me_banks  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE me_banks.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
