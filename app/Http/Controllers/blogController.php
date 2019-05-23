<?php


namespace App\Http\Controllers;
use App\Blog;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class blogController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        //Blog::create(['title'=>'This is ORM title', 'details'=>'title-ORM', 'file'=>'file path ORM']);
        //DB::table('blogs')->insert(['title'=>'This is first title', 'details'=>'title-1', 'file'=>'file path']);
        //$blog = \DB::table('blogs');
        //$blog =  $blog->get();
        //$blog = new Blog();
        //$blog = $blog->get();

        //$blog = Blog::with('user')->get();
        //dd($blog);

        //$user = User::with('blogs')->get();
        //dd($user);

        //$blog = new Blog();
        //$data['blog'] = $blog->blog();

        $data['title'] = 'List of blogs';
        $data['blogs'] = Blog::all();
        return view('blog/index',$data);
    }

    public function create()
    {
        $data['title'] = 'Create new blog';
        return view('blog/create',$data);
    }
    public function store(Request $request)
    {
        Blog::create(['title'=>$request->title, 'details'=>$request->details, 'user_id'=>1]);
        return redirect()->to('blogs');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Blog';
        $data['blog'] = Blog::where('id', $id)->first();
        return view('blog/edit', $data);
    }

    public function update(Request $request, $id)
    {
        Blog::where('id', $id)->update(['title'=>$request->title, 'details'=>$request->details, 'user_id'=>1]);
        return redirect()->to('blogs');
    }

    public function destroy($id)
    {
        Blog::where('id', $id)->delete();
        return redirect()->to('blogs');
    }
}
