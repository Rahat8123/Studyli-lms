<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use App\Models\SubCategory;
class CategoryController extends Controller
{
    // Show all categories
    public function AllCategory()
    {
        $category = Category::latest()->get();
        return view('admin.backend.category.all_category', compact('category'));
    }


    // Show add form
    public function AddCategory()
    {
        return view('admin.backend.category.add_category');
    }

    // Store a new category
    public function StoreCategory(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // Upload image
        $imagePath = null;
        if ($request->file('image')) {
            $image = $request->file('image');
            $filename = date('YmdHi') . $image->getClientOriginalName();
            $image->move(public_path('upload/category'), $filename);
            $imagePath = 'upload/category/' . $filename;
        }

        // Generate slug
        $slug = Str::slug($request->category_name);

        // Save to DB
        Category::create([
            'category_name' => $request->category_name,
            'category_slug' => $slug,
            'image' => $imagePath,
        ]);

        return redirect()->route('all.category')->with('success', 'Category Added Successfully!');
    }

     public function EditCategory($id){






        $category = Category::find($id);


        return view('admin.backend.category.edit_category',compact('category'));


    }// End Method





    public function UpdateCategory(Request $request){




        $cat_id = $request->id;





        if ($request->file('image')) {





            $image = $request->file('image');


            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();


            Image::make($image)->resize(370,246)->save('upload/category/'.$name_gen);


            $save_url = 'upload/category/'.$name_gen;





            Category::find($cat_id)->update([


                'category_name' => $request->category_name,


                'category_slug' => strtolower(str_replace(' ','-',$request->category_name)),


                'image' => $save_url,





            ]);





            $notification = array(


                'message' => 'Category Updated with image Successfully',


                'alert-type' => 'success'


            );


            return redirect()->route('all.category')->with($notification);





        } else {





            Category::find($cat_id)->update([


                'category_name' => $request->category_name,


                'category_slug' => strtolower(str_replace(' ','-',$request->category_name)),





            ]);





            $notification = array(


                'message' => 'Category Updated without image Successfully',


                'alert-type' => 'success'


            );


            return redirect()->route('all.category')->with($notification);





        } // end else


}
 public function DeleteCategory($id){






        $item = Category::find($id);


        $img = $item->image;


        unlink($img);





        Category::find($id)->delete();





            $notification = array(


                'message' => 'Category Deleted Successfully',


                'alert-type' => 'success'


            );


            return redirect()->back()->with($notification);





    }// End Method
     public function AllSubCategory(){






        $subcategory = SubCategory::latest()->get();


        return view('admin.backend.subcategory.all_subcategory',compact('subcategory'));





    }// End Method

       public function AddSubCategory(){






        $category = Category::latest()->get();


        return view('admin.backend.subcategory.add_subcategory',compact('category'));





    }// End Method








    public function StoreSubCategory(Request $request)
{
    $request->validate([
        'category_id' => 'required|exists:categories,id',
        'subcategory_name' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
    ]);

    // Upload image if exists
    $imagePath = null;
    if ($request->file('image')) {
        $image = $request->file('image');
        $filename = date('YmdHi') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(370, 246)->save(public_path('upload/subcategory/' . $filename));
        $imagePath = 'upload/subcategory/' . $filename;
    }

    // Generate slug
    $slug = Str::slug($request->subcategory_name);

    // Insert to DB
    SubCategory::create([
        'category_id' => $request->category_id,
        'subcategory_name' => $request->subcategory_name,
        'subcategory_slug' => $slug,
        'image' => $imagePath, // add image field in DB if not present
    ]);

    $notification = [
        'message' => 'SubCategory Added Successfully!',
        'alert-type' => 'success',
    ];

    return redirect()->route('all.subcategory')->with($notification);
}

public function EditSubCategory($id){






        $category = Category::latest()->get();


        $subcategory = SubCategory::find($id);


        return view('admin.backend.subcategory.edit_subcategory',compact('category','subcategory'));





    }// End Method








    public function UpdateSubCategory(Request $request){





        $subcat_id = $request->id;





        SubCategory::find($subcat_id)->update([


            'category_id' => $request->category_id,


            'subcategory_name' => $request->subcategory_name,


            'subcategory_slug' => strtolower(str_replace(' ','-',$request->subcategory_name)),





        ]);





        $notification = array(


            'message' => 'SubCategory Updated Successfully',


            'alert-type' => 'success'


        );


        return redirect()->route('all.subcategory')->with($notification);





    }// End Method








    public function DeleteSubCategory($id){





        SubCategory::find($id)->delete();





        $notification = array(


            'message' => 'SubCategory Deleted Successfully',


            'alert-type' => 'success'


        );


        return redirect()->back()->with($notification);





    }// End Method








}
