<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Group;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        return view('groups.index', compact('groups'));
    }

    public function create()
    {
        return view('groups.create');
    }

    public function add(Request $request)
    {
        $group = new Group(
            [
                'title' => $request->title,
                'start_from' => $request->start_from,
            ]
        );
        $group->save();
        return redirect('/groups');
    }
}
