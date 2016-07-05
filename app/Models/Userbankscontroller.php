<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class userbankscontroller extends Sximo  {
	
	protected $table = 'me_mybanks';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT me_mybanks.* FROM me_mybanks  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE me_mybanks.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
