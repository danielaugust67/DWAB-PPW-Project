<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\CommunityFormRequest;
    use App\Models\Category;
    use App\Models\Community;
    use Illuminate\Http\Request;
    use Illuminate\Support\Str;
    use Illuminate\Support\Facades\File;


    class CommunityController extends Controller
    {
        public function index()
        {
            $community = Community::orderBy('id', 'desc')->paginate(5);
            return view('Community.index', compact('community'));
        }

        public function create()
        {
            $categories = Category::all();
            return view('Community.create', compact('categories'));
        }

        public function store(CommunityFormRequest $request)
    {
        $validatedData = $request->validated();
        $code = random_int(10, 99);
        $originalSlug = Str::slug($validatedData['title']);
        $slug = $originalSlug . "-" . $code;

        $community = new Community();
        $community->title = $validatedData['title'];
        $community->category_id = $validatedData['category_id'];
        $community->description = $validatedData['description'];
        $community->status = $validatedData['status'];
        $community->whatsapp = $validatedData['whatsapp'];

        if (Community::where('slug', $originalSlug)->exists()) {
        $community->slug = $slug;
    } else {
        $community->slug = $originalSlug;
    }

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time() . '.' . $ext;
        $file->move('uploads/Community/', $filename);
        $community->image = $filename;
    }

    $community->save();

    return redirect('/find-your-communities')->with('message', 'Community berhasil ditambahkan');
}


        public function edit(Community $community)
        {
            $categories = Category::all(); // Mengubah $category menjadi $categories
            return view('Community.edit', compact('community', 'categories'));
        }

        public function update(CommunityFormRequest $request, $community)
        {
            $validatedData = $request->validated(); // Mengubah menjadi $validatedData
            $community = Community::findOrFail($community); // Mengubah $community menjadi $communityId
            $community->title = $validatedData['title'];
            $community->category_id = $validatedData['category_id'];
            $community->description = $validatedData['description'];
            $community->status = $validatedData['status'];
            $community->whatsapp = $validatedData['whatsapp'];

            if ($request->hasFile('image')) {
                $path = 'uploads/Community/' . $community->image; // Mengubah 'upload' menjadi 'uploads'
                if (File::exists($path)) {
                    File::delete($path);
                }
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time() . '.' . $ext;
                $file->move('uploads/Community/', $filename);
                $community->image = $filename;
            }

            $community->update(); // Menggunakan save() daripada update()
            return redirect('Community')->with('message', 'Community berhasil diupdate');
        }

        public function destroy(int $community_id){
            $community = Community::findOrFail($community_id);
            $path = 'uploads/Community/' . $community->image; // Mengubah 'upload' menjadi 'uploads'
                if (File::exists($path)) {
                    File::delete($path);
                }
            $community->delete();
            return redirect()->back()->with('message', 'Community berhasil dihapus');
        }


    }
