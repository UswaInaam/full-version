<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {

    /**
     * Display user members list.
     */
    public function index(){
        $title = "User Members";
        $description = "Some description for the page";

        $users = User::orderBy('id', 'DESC')->paginate(20);

        return view('pages.applications.user.member',
            compact('title','description','users')
        );
    }

    /**
     * Display user grid.
     */
    public function grid(){
        $title = "User Grid";
        $description = "Some description for the page";

        $users = User::orderBy('id', 'DESC')->paginate(20);

        return view('pages.applications.user.grid',
            compact('title','description','users')
        );
    }

    /**
     * Display user list.
     */
    public function list(){
        $title = "User List";
        $description = "Some description for the page";

        $users = User::orderBy('id', 'DESC')->paginate(20);

        return view('pages.applications.user.list',
            compact('title','description','users')
        );
    }

    /**
     * Display user grid style.
     */
    public function gridStyle(){
        $title = "User Grid Style List";
        $description = "Some description for the page";

        $users = User::orderBy('id', 'DESC')->paginate(20);

        return view('pages.applications.user.grid_style',
            compact('title','description','users')
        );
    }

    /**
     * Display user group list.
     */
    public function userGroup(){
        $title = "User Group List";
        $description = "Some description for the page";

        $users = User::orderBy('id', 'DESC')->paginate(20);

        return view('pages.applications.user.user_group',
            compact('title','description','users')
        );
    }

    /**
     * Display add new user form.
     */
    public function add(){
        $title = "User Add";
        $description = "Some description for the page";

        return view('pages.applications.user.add',
            compact('title','description')
        );
    }

    /**
     * Display user table.
     */
    public function table(){
        $title = "User Data Table";
        $description = "Some description for the page";

        $users = User::orderBy('id', 'DESC')->paginate(20);

        return view('pages.applications.user.data_table',
            compact('title','description','users')
        );
    }
}
