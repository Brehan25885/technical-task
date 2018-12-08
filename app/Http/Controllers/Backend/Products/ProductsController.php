<?php

namespace App\Http\Controllers\Backend\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Repositories\Backend\Product\ProductRepository;

class ProductsController extends Controller
{

    protected $productRepo;

    public function __construct(ProductRepository $productRepo){

        $this->productRepo = $productRepo;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=$this->productRepo->getActivePaginated(25,'created_at','desc');

        return view('backend.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.products.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'name'           => 'required',
            'price'          => 'required',
            'description'    => 'required',
            'price'          => 'required | numeric',


        ];

        $request->validate($rules);

        //
        $request['product_image'] = 'default.png';
        if($request->hasFile('image'))
        {
            $request['product_image'] = md5(time()).'.'.$request->image->extension();
            $request->image->storeAs('public/uploads/products' , $request['product_image']);

        }

        $this->productRepo->create($request->all());


        return back()->withFlashSuccess('Product Created successfully');

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
        $product=Product::find($id);

        return view('backend.products.edit',compact('product'));
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
        $rules = [
            'name'           => 'required',
            'price'          => 'required',
            'description'    => 'required',
            'price'          => 'required | numeric',


        ];

        $request->validate($rules);

        $product=Product::find($id);

        $request['product_image'] = $product->getOriginal('image');

        if($request->hasFile('image'))
        {
            $request['product_image'] = md5(time()).'.'.$request->image->extension();
            $request->image->storeAs('public/uploads/products' , $request['product_image']);

        }
        $this->productRepo->update($id, $request->all());

        return back()->withFlashSuccess('Product Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->productRepo->deleteProduct($id);
        return back()->withFlashSuccess('Product Delete successfully');

    }
}
