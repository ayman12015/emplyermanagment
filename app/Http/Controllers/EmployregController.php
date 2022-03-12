<?php
    
namespace App\Http\Controllers;
    
use App\Product;
use Illuminate\Http\Request;
    
class EmployregController extends Controller
{ 

    public function index(){
        return view('employyer');
    }
    
 
}