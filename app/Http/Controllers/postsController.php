<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\Post;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class postsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        
        return view('blog.index')->with('posts',Post::orderBy('updated_at','DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImgName = uniqid().'-'.$request->title.'.'.$request->image->extension();

        $request->image->move(public_path('image'),$newImgName);

        Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(Post::class, 'slug',  $request->title),
            'img_path' => $newImgName,
            'user_id' => Auth()->user()->id,
        ]);

        return redirect('/blog')->with('msg',"You're post has been added");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        return view('blog.show')->with('post' ,Post::where('slug',$slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        return view("blog.edit")->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImgName = uniqid().'-'.$request->title.'.'.$request->image->extension();

        POST::where('slug',$slug)->update([
            'title' => $request->input('title'),
                'description' => $request->input('description'),
                'slug' => SlugService::createSlug(Post::class, 'slug',  $request->title),
                'img_path' => $newImgName,
                'user_id' => Auth()->user()->id,
        ]);

        return redirect('/blog')->with('msg',"You're post has been updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
       $post = Post::where('slug',$slug);
       $post->delete();

       return redirect('/blog')->with('msg',"You're post has been delete");
    }
}
