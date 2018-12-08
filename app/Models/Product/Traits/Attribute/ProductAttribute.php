<?php
namespace App\Models\Product\Traits\Attribute;


trait ProductAttribute{

    public function getImageAttribute($image)
    {

    	return \Storage::url('public/uploads/products/'.$image);
    }



       /**
     * @return string
     */
    public function getDeletePermanentlyButtonAttribute()
    {
        return '<a href="/admin/products/'.$this->id.'/delete"
         name="confirm_item" class="btn btn-danger">Delete</a> ';
    }

     /**
     * @return string
     */
    public function getEditButtonAttribute()
    {
        return '<a href="'.route('admin.products.edit', $this).'" class="btn btn-primary">Edit</a>';
    }

     /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        $delete =
        '<div class="btn-group btn-group-sm" role="group" aria-label="Product Actions">
            '.$this->delete_permanently_button.'
        </div>';

    	$edit = '<div class="btn-group btn-group-sm" role="group" aria-label="Product Actions">
		  '.$this->edit_button.'
        </div>';


        return $edit . ' ' . $delete;
    }

}
