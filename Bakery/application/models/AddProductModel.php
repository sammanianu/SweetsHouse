<?php


class AddProductModel extends CI_Model
{
    public function insertProductdata()
    {
        $productData = array(

            'category_id'=> $this->input->post('categoryID',TRUE),//TRUE validate input field
            'product_name'=> $this->input->post('productName',TRUE),
            'product_price'=> $this->input->post('productPrice',TRUE),
            'product_image'=> $this->input->post('productImage',TRUE),
        );

        $r1 = $this->db->insert('product',$productData);

        return $r1;
    }
}