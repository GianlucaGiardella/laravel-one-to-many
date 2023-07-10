<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Type::all();

        return view('admin.types.index', compact('types'));
    }

    public function create()
    {
        return view('admin.types.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Type $type)
    {
        return view('admin.categories.show', compact('type'));
    }

    public function edit(Type $type)
    {
        return view('admin.categories.edit', compact('type'));
    }

    public function update(Request $request, Type $type)
    {
        //
    }

    public function destroy(Type $type)
    {
        //
    }
}