<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
    function index(Request $request, int $t, string $tt)
    {
        dd($t, $tt);
    }

    function param(Request $request)
    {
        $data = $request->only(['id', 'name']);
        dd($data);
    }

    function getForm()
    {
        return view("lab.aForm");
    }

    function postForm(Request $request, $id)
    {
        dd($request, $id);
    }

    function xml() {
        $content = "<book><title>ooo</title><price>500</price></book>";
        return response($content, 200, 
            [
                'Content-Type' => 'application/xml'
            ]);
    }

}
