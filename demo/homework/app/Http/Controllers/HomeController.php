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
        $time = time();
        $home = new home();
        $home->title = $data['title'];
        $home->content = $data['content'];
        $home->time = $time;
        if($home->save()===true){
            return redirect('/home');
        }else{
            $error = "新增失敗";
            return redirect('/home/create')->with('error',$error);
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
        $data = home::find($id);
        $data->time = $data->time>$data->updatetime?$data->time:$data->updatetime;
        return view('home.show',compact('data'));
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
        $flag = false;
        $data = home::find($id);
       if($req['title'] !== $data->title || $req['content'] !== $data->content){
            $flag = true;
       }
        

        if($flag === true){
            $data->title = $req['title'];
            $data->content = $req['content'];
            $data->updatetime = time();
            if($data->save()){
                return redirect('/home');
            }else{
                $error="修改失敗";
                return redirect("/home/{$id}/edit")->with('error',$error);
            }
        }else{
            return redirect('/home');
            
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
        $data = home::find($id);
        if(!empty($data)){
            $data->delete();
            return redirect('/home');
        }else{
            $error="刪除失敗";
            return redirect("/home/{$id}/del")->with('error',$error);
        }
    }

    public function delete($id)
    {
        $data = home::find($id);
        return view('home.del',compact('data'));
    }

}
