<?php




namespace App\Http\Controllers;
use DB;
use Session;
session_start();
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CategoryProductController extends Controller
{
    public function showAddcategoryProduct(){
        return view('admin.addcategoryproduct');
    }
    public function showAllCategoryProduct(){
        return view('admin.allcategoryproduct');
    }
       
    public function addCategoryProduct(Request $request){
        $data = array();
        $data['category_name'] = $request->categoty_product_name;
        $data['category_description'] = $request->categoty_product_decs;
        $data['category_status'] = $request->categoty_product_status;
        
        DB::table('tbl_category_product')->insert($data);

        Session::put('success', 'Product created successfully');
        return Redirect::to('/add-category-product');
        
    }
    public function allCategoryProduct(){
        echo 'hello';
    }
}
