namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller {

	public function showForm() {
    
    	return view('create-product');
    
    }

	public function uploadFile(Request $request) {
    
    	$requirest->validate(['file'=> 'requiredrequired|image|mimes:jpeg,png,jpg,gif,pdf,csv,xls|max:2048',]);
    
    	$filename = time().".".$request->image->extension();
    
    	$request->file->move(public_path('uploads'),$filename);
    
    	return back()->with('success','file uploaded sucessfully!')->with('file',$filename);
    
    }

}