<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Category;
use App\Models\Notes;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index()
    {
        $notes_query = Notes::with(['category', 'status']);
        $notes = $notes_query->get();

        return response()->json([
            'notes' => $notes
        ], 200);
    }

    public function categories()
    {
        $categories = Category::all();

        return response()->json([
            'categories' => $categories,
        ], 200);
    }

    public function category_index($id)
    {
        $category_query = Notes::with(['category', 'status'])->where('category', $id);
        $category_index = $category_query->get();

        return response()->json([
            'Category' => $category_index,
        ], 200);
    }

    public function status_index($id)
    {
        $status_query = Notes::with(['category', 'status'])->where('status', $id);
        $status_index = $status_query->get();

        return response()->json([
            'Status' => $status_index,
        ], 200);
    }

    public function create(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
        $title = $request->title;
        $content = $request->content;
        $date = date("Y-m-d H:i:s");
        $status = $request->status;
        $category = $request->category;

        $create = Notes::create([
            'title' => $title,
            'content' => $content,
            'date' => $date,
            'status' => $status,
            'category' => $category,
        ]);

        if ($create) {
            return response()->json([
                'status' => "berhasil",
                'notes' => $create
            ]);
        } else {
            return response()->json([
                'status' => "gagal",
                'notes' => $create
            ]);
        }
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
        $title = $request->title;
        $content = $request->content;
        $date = date("Y-m-d H:i:s");
        $status = $request->status;
        $category = $request->category;

        $note = Notes::find($id);

        $update = $note->update([
            'title' => $title,
            'content' => $content,
            'date' => $date,
            'status' => $status,
            'category' => $category,
        ]);

        if ($update) {
            return response()->json([
                'status' => "berhasil mengupdate data",
                'notes' => $note
            ]);
        } else {
            return response()->json([
                'status' => "gagal mengupdate data",
                'notes' => $note
            ]);
        }
    }

    public function delete($id)
    {
        $notes = Notes::find($id);
        $delete = $notes->delete();

        if ($delete) {
            return response()->json([
                'status' => "berhasil menghapus data",
                'notes' => $notes
            ]);
        } else {
            return response()->json([
                'status' => "gagal menghapus data",
                'notes' => $notes
            ]);
        }
    }
}
