<?php

namespace App\Http\Controllers;

use App\Employee;
use DB;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeeList = Employee::all();
        //$employeeList = DB::table('employees')->get();
        return view('employees.index', compact('employeeList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        if (!empty($data['FirstName']) &&  !empty($data['LastName'])) {
            $emp = new Employee();
            $emp->firstName = $request->FirstName;
            $emp->lastName = $request->LastName;
            $emp->save();
            dd(DB::getPdo()->lastInsertId());
            return redirect("/employees");
        } else {
            return "錯誤";
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
        $data = Employee::find($id);
        return view('employees.edit', compact('data'));
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
        $user = Employee::find($id);
        $user->firstName = $request->FirstName;
        $user->lastName = $request->LastName;
        $user->update();
        dd($user->insertgetid);
        return redirect('/employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Employee::find($id);
        if($user->delete()){
            return redirect('employees');
        }else{
            return "fail";
        }
    }
}
