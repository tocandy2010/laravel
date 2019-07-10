<?php

namespace App\Http\Controllers;

use App\Model\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Home::all();
        return view('home.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['title','content']);
        if(empty($data['title']) || empty($data["content"])){
            return redirect('/home/create');
        }
        $home = new home();
        $home->title = $data['title'];
        $home->content = $data['content'];
        $home->time = time();
        if($home->save()===true){
            return redirect('/home');
        }else{
            return redirect('/home/create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = home::find($id);
        return view('home.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $req = $request->only(['title','content']);
        $data = home::find($id);
       if($req['title'] !== $data->title){
            $data->title = $req['title'];
            $data->time = time();
       }
       if($req['title'] !== $data->title){
            $data->title = $req['title'];
            $data->time = time();
        }
        
        if($data->save()){
            return redirect('/home');
        }else{
            return redirect("/home/{$id}/edit");
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
