<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class accounttypecontroller extends Sximo  {
	
	protected $table = 'me_accounttypes';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT me_accounttypes.* FROM me_accounttypes  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE me_accounttypes.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
