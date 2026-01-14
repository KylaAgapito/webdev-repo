<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\category;
use App\Models\Blog;

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

    //returns the main blog forms
    public function mainBlog()
    {
        // $categories = DB::table('categories')->get();
        $categories = category::all();
        return view('mainBlog', compact('categories'));
    }

    public function blogJSON()
    {
        $result = DB::table('blog_posts as b')->join('categories as c', 'c.id', '=', 'b.category_id')
            ->select('b.*', 'c.name')
            ->get();
        return $result;
    }

    public function blogSave(Request $request)
    {
        Log::info('======================>>> ENTER BLOG CONTROLLER');
        $request->validate([
            'title' => ['required', 'min:1', 'max:50'],
            'content' => ['required', 'min:1', 'max:500'],
            'timestamps' => ['required'],
            'author' => ['required', 'min:1', 'max:50'],
            'category' => ['required']
        ], [
            'content.max' => 'Content has reached the maximum 200 character limit.',
            'author.max' => 'Author has reached the 50 character limit.'
        ]);


        // DB::table('blog_posts')->insert([
        //     'title' => $request->input('title'),
        //     'content' => $request->input('content'),
        //     'timestamps' => $request->input('timestamps'),
        //     'author' => $request->input('author'),
        //     'category_id' => $request->input('category')
        // ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->timestamps = $request->timestamps;
        $blog->content = $request->content;
        $blog->author = $request->author;
        $blog->category_id = $request->category;

        $blog->save();

        Log::info('======================>>> EXIT BLOG CONTROLLER');
        return redirect('/blog');
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
