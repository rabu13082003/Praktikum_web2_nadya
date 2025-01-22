<?php 
 
namespace App\Http\Controllers; 
 
use App\Models\Posts; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 
 
class PostController extends Controller 
{ 
    public function store(Request $request) 
    { 
        $input = $request->all(); 
        $input['user_id'] = Auth::user()->id; 
        Posts::create($input); 
        return redirect()->route('main')->with('success', 'data berhasil disimpan'); 
    } 
 
    public function delete($id) 
    { 
        $post = Posts::findOrFail($id); 
        $post->delete(); 
        return redirect()->route('main')->with('success', 'data berhasil dihapus'); 
    } 
}