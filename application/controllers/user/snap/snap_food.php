<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Snap_food extends CI_Controller
{
	private $user_data;

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
	{
		parent::__construct();
		$params = array('server_key' => 'SB-Mid-server-nkwLZY24oVjbCLWPibM2SojC', 'production' => false);
		$this->load->library('midtrans');
		$this->load->model('food_model', 'food');
		$this->midtrans->config($params);
		$this->load->helper('url');
		
		$user_data = $this->session->userdata('user_logged');
		$this->user_data = $user_data;
	}

	public function index()
	{
		$this->load->view('checkout_snap');
	}

	public function token()
	{

		$foodid = $this->input->post("id");
		$qtyacak = $this->input->post("qty");
		$type = $this->input->post("type");

		$foodid = str_replace("&", "", $foodid);
		$qtyacak = str_replace("&", "", $qtyacak);

		$foodid = explode("foodid=", $foodid);
		$qtyacak = explode("qtyacak=", $qtyacak);

		unset($foodid[0]);
		unset($qtyacak[0]);

		$foodid = array_values($foodid);
		$qtyacak = array_values($qtyacak);

		for ($i = 0; $i < count($foodid); $i++) {
			if ($qtyacak[$i] == 0) {
				unset($foodid[$i]);
				unset($qtyacak[$i]);
			}
		}

		$foodid = array_values($foodid);
		$qtyacak = array_values($qtyacak);
		$priceTotal = 0;
		$item_details = array();

		for($i = 0; $i < count($foodid); $i++){
			$foodDetail = $this->food->getFootbyId($foodid[$i]);
			$foodItem = array(
				'id' => (int)$foodid[$i],
				'price' => (int)$foodDetail->food_price,
				'quantity' => (int)$qtyacak[$i],
				'name' => $foodDetail->food_name
			);
			$food_price = $foodDetail->food_price * $qtyacak[$i];
			$priceTotal = $priceTotal + $food_price;
			array_push($item_details, $foodItem);
		}


		// // Required
		$transaction_details = array(
			'order_id' => rand(),
			'gross_amount' => $priceTotal, // no decimal allowed for creditcard
		);


		// Optional
		$billing_address = array(
			'first_name'    => $this->user_data->first_name,
			'last_name'     => $this->user_data->last_name,
			'address'       => $this->user_data->address,
			'city'          => $this->user_data->city,
			'postal_code'   => $this->user_data->postal_code,
			'phone'         => $this->user_data->phone,
			'country_code'  => 'IDN'
		);

		// Optional
		$shipping_address = array(
			'first_name'    => $this->user_data->first_name,
			'last_name'     => $this->user_data->last_name,
			'address'       => $this->user_data->address,
			'city'          => $this->user_data->city,
			'postal_code'   => $this->user_data->postal_code,
			'phone'         => $this->user_data->phone,
			'country_code'  => 'IDN'
		);

		// Optional
		$customer_details = array(
			'first_name'    => $this->user_data->first_name,
			'last_name'     => $this->user_data->last_name,
			'email'         => $this->user_data->email,
			'phone'         => $this->user_data->phone,
			'billing_address'  => $billing_address,
			'shipping_address' => $shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
		$credit_card['secure'] = true;
		//ser save_card true to enable oneclick or 2click
		//$credit_card['save_card'] = true;

		$time = time();
		$custom_expiry = array(
			'start_time' => date("Y-m-d H:i:s O", $time),
			'unit' => 'day',
			'duration'  => 1
		);
		
		$transaction_data = array(
			'transaction_details' => $transaction_details,
			'item_details'       => $item_details,
			'customer_details'   => $customer_details,
			'credit_card'        => $credit_card,
			'expiry'             => $custom_expiry
		);

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo json_encode(array($snapToken, $item_details, $type));
	}

	public function finish()
	{
		$result = json_decode($this->input->post('result_data'));
		echo 'RESULT <br><pre>';
		var_dump($result);
		echo '</pre>';
		echo $result->status_code;
	}
}
