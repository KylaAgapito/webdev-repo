<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index($id)
    {
        return view('home');
        // return $id;
    }

    public function filter(Request $request)
    {
        log::info("==============ENTER FILTER");
        $name = $request->query('name');
        log::debug("name= " . $name);

        // dd('STOP');

        $age = $request->query('age');
        log::debug("age= " . $age);

        $parameters = $name . "" . $age;

        log::info("==============END FILTER");
        return $parameters;
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function static()
    {
        return view('static');
    }

    public function editId($id)
    {
        return view('students.edit', ['studentId' => $id]);
    }

    public function idName($id, $name)
    {
        return view('students.idname', ['studentId' => $id, 'studentName' => $name]);
    }

    public function id($id)
    {
        return view('students.id', ['studentId' => $id]);
    }

    public function name($name)
    {
        return view('students.name', ['studentName' => $name]);
    }

    public function student()
    {
        return view('student');
    }

    public function temp()
    {
        return view('temp');
    }

    public function fallbackRoute()
    {
        return redirect()->route('dashboard');
    }
}
