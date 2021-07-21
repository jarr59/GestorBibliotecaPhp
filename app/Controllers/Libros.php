<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Libro;
class Libros extends Controller{

    public function index(){
        return view('libros/listar');
    }
}