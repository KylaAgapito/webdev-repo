<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index($id)
    {
        return view('home');
        // return $id;
    }

    public function getUser()
    {
        $result = DB::table('user')->get();
        return $result;
    }


    public function addStudent(Request $request)
    {
        Log::info('======================>>> ENTER STUDENT CONTROLLER');
        $request->validate([
            'emailAddress' => ['required', 'email', 'ends_with:@iskolarngbayan.pup.edu.ph'],
            'firstName' => ['required', 'min:1', 'max:50'],
            'lastName' => ['required', 'min:1', 'max:50'],
            'middleName' => ['required', 'min:1', 'max:50']
        ], [
            'firstName.required' => 'engot k talaga',
            'firstName.max' => 'sumosobra k na'
        ]);

        //ddeclare yung variables
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $middleName = $request->input('middleName');
        $email = $request->input('emailAddress');
        // $age = $this->calculateAge($request->input('dateofBirth'));

        $password = $this->generatePassword();

        DB::table('user')->insert(
            [
                // 'email' => $email,
                // 'first_name' => $firstName,
                // 'last_name' => $lastName,
                // 'middle_name' => $middleName

                'first_name' => $request->input('firstName'),
                'last_name' => $request->input('lastName'),
                'middle_name' => $request->input('middleName'),
                'email' => $request->input('emailAddress'),
                'password' => $this->encryptPassword($password)

            ]
        );

        Log::info('======================>>> EXIT STUDENT CONTROLLER');
        //return view('student.addStudent', compact('firstName', 'lastName'));
    }

    public function generatePassword()
    {
        return Str::random(12);
    }

    public function encryptPassword($password)
    {
        return Hash::make($password);
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
