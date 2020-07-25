<?php 
require_once 'models/Model.php';
/**
 * 
 */
Class Order extends Model{
	public $fullname;
	public $address;
	public $mobile;
	public $email;
	public $price_total;
    public $note;

	public function insert()
	{
		 $sql_insert ="INSERT INTO orders(`fullname`, `address`, `mobile`, `email`,`note`,`price_total`)
		VALUES (:fullname, :address, :mobile, :email,:note,:price_total)";
        //cbi đối tượng truy vấn
        $obj_insert = $this->connection
            ->prepare($sql_insert);
        //gán giá trị thật cho các placeholder
        $arr_insert = [
            ':fullname' => $this->fullname,
            ':address' => $this->address,
            ':mobile' => $this->mobile,
            ':email' => $this->email,
            ':note' => $this->note,
            ':price_total'=>$this->price_total,
        ];
        $obj_insert->execute($arr_insert);
        $order_id = $this->connection->lastInsertId();
        return $order_id;
	}
}
 ?>
