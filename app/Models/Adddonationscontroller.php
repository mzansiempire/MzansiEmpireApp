<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class adddonationscontroller extends Sximo  {
	
	protected $table = 'me_donations';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT me_donations.* FROM me_donations  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE me_donations.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
