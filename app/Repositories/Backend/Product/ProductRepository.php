<?php

namespace App\Repositories\Backend\Product;
use DB;

use App\Models\Product\Product;
use App\Repositories\BaseRepository;
use Illuminate\Pagination\LengthAwarePaginator;
class ProductRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Product::class;
    }

     /**
     * @param int    $paged
     * @param string $orderBy
     * @param string $sort
     *
     * @return mixed
     */
    public function getActivePaginated($paged = 25, $orderBy = 'created_at', $sort = 'desc') : LengthAwarePaginator
    {
        return $this->model
            ->orderBy($orderBy, $sort)
            ->paginate($paged);
    }

    /**
     * @param array $data
     *
     * @return Area
     * @throws \Exception
     * @throws \Throwable
     */
    public function create(array $data) : Product
    {
        $product = Product::create([
            'name'        => $data['name'],
            'description' => $data['description'],
            'price'       => $data['price'],
            'image'       => $data['product_image'],
        ]);

        if($product){
            return $product;
        }




    }

     /**
     * @param AreaId  $areaId
     * @param array $data
     *
     * @return Area
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     */
    public function update($productId, array $data) : Product
    {
        $product = product::find($productId);

        return DB::transaction(function () use ($product, $data) {
            if ($product->update([
                'name'                => $data['name'],
                'description'         => $data['description'],
                'price'               => $data['price'],
                'image'               => $data['product_image'],
            ])) {


                return $product;
            }

            throw new GeneralException(__('An Error Occurd'));
        });
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);

        if($product)
        {
         $product->delete();
        }
    }


}
