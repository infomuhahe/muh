<?php

namespace App\Http\Controllers;


use App\ProductsWholesale;
use Illuminate\Support\Facades\Storage;
use Image;



use Illuminate\Http\Request;

class ProductsWholesales extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $Products = ProductsWholesale::orderBy('created_at','desc')->get();
        return view('wholesale.view_products',compact('Products'));
=======
        //
>>>>>>> 630f57f680b14ca8181f228cdecea722863cbea9
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|min:5',
            'code'=>'required',
            'color'=>'required',
            'description'=>'required',
            'price'=>'required|numeric',
            'image'=>'required|image|mimes:png,jpg,jpeg|max:1000',
        ]);
        $formInput=$request->all();
        if($request->file('image')){
            $image=$request->file('image');
            if($image->isValid()){
<<<<<<< HEAD
                $fileName=time().'-'.str_slug($formInput['name'],"-").'.'.$image->getClientOriginalExtension();
=======
                $fileName=time().'-'.str_slug($formInput['p_name'],"-").'.'.$image->getClientOriginalExtension();
>>>>>>> 630f57f680b14ca8181f228cdecea722863cbea9
                $large_image_path=public_path('products/large/'.$fileName);
                $medium_image_path=public_path('products/medium/'.$fileName);
                $small_image_path=public_path('products/small/'.$fileName);
                //Resize Image
                Image::make($image)->save($large_image_path);
                Image::make($image)->resize(600,600)->save($medium_image_path);
                Image::make($image)->resize(300,300)->save($small_image_path);
                $formInput['image']=$fileName;
            }
        }
        ProductsWholesale::create($formInput);
<<<<<<< HEAD
        return redirect()->route('/register_productsWholesale')->with('message','Add Products Successfully!');
=======
        return redirect()->route('wholesale.insert_products')->with('message','Add Products Successfully!');
>>>>>>> 630f57f680b14ca8181f228cdecea722863cbea9

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
