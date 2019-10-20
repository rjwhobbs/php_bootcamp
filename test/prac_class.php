<?php
class customer
{
	private $id;
	private $name;
	protected $email;
	private $balance;

	public function __construct($id, $name, $email, $balance)
	{
		$this->id 		= $id;
		$this->name 	= $name;
		$this->email	= $email;
		$this->balance	= $balance;
	}

	public function getEmail()
	{
		return $this->email;
	}
	// public function getcustomer($id)
	// {
		// 	$id = $this->id;
		// 	return $id;
		// 	// $this->id = $id;
		// 	// $this->id += 1;
		// 	// return $this->id;
		// }
		
		// public function __destruct()
		// {
			// 	echo 'So did this';
			// }	
}
	
class subscriber extends customer
{
	public $plan;
	
	public function __construct($id, $name, $email, $balance, $plan)
	{
		parent::__construct($id, $name, $email, $balance);
		$this->plan = $plan;
	}
	
	// public function getEmail()
	// {
	// 	return $this->email;
	// }
}

$cus = new subscriber(1, "Joe's garage", "joe@garage", 200, "pro");
echo $cus->getEmail();
?>