<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create() {

        return view('pages.category.create');

    }

    publix

    // $id
    public function destroy(Category $category) {

        // $category = Category::query()->find($ids);

        $category->delete();

        return redirect()->route('index.admin');

    }

    public function edit(Category $category) {

        return view('pages.category.edit', compact('category'));

    }

    public function update(Category $category, UpdateRequest $updateRequest) {

        $data = $updateRequest->validated();

        $category->update($data);

        return redirect()->route('index.admin');

    }
}
