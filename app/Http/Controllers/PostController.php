<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
//use App\Input;
use Illuminate\Http\Request;
class PostController extends Controller
{
    //
    public function index()
    {
    }
    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new \App\Input;
        $post->name = $request->input('name');
        $post->title = $request->input('title');
        $post->post = $request->input('post');
        $post->year = $request->input('year');
        $post->description = $request->input('description');
        Auth::user()->Posts()->save($post);
        $request->session()->flash('status', "{$post->title} has been posted!");
        return redirect()->route('home');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  \App\Input  $post
     * @return \Illuminate\Http\Response
     */
    public function show(\App\Input $post)
    {
      return view('inputs.show', compact('input'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  \App\Input  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\Input $post)
    {
        return view('edit', compact('post'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Input  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, \App\Input $post)
    {
        //$post = \App\post::find($id);
        $post->name = $request->input('name');
        $post->title = $request->input('title');
        $post->post = $request->input('post');
        $post->year = $request->input('year');
        $post->description = $request->input('description');
         $post->save();
        return redirect('/');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Input  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Input $post)
    {
    }
}
