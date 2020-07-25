<?php 
require_once 'models/Model.php';
/**
 * 
 */
Class OrderDetail extends Model{
	public $order_id;
	public $product_id;
	public $quality;
	
	public function insert()
	{
		 $sql_insert ="INSERT INTO order_details(`order_id`, `product_id`, `quality`)
		VALUES (:order_id, :product_id, :quality)";
        //cbi đối tượng truy vấn
        $obj_insert = $this->connection
            ->prepare($sql_insert);
        //gán giá trị thật cho các placeholder
        $arr_insert = [
            ':order_id' => $this->order_id,
            ':product_id' => $this->product_id,
            ':quality' => $this->quality,
        ];
        return $obj_insert->execute($arr_insert);
	}
}
 ?>
