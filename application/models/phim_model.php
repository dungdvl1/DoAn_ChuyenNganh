<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class phim_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	// Lấy tất cả dữ liệu phim từ csdl về
	public function getAllPhim()
	{
		$this->db->select('*');
		$dulieu = $this->db->get('phim');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}

	// lấy dữ liệu từ ID
	public function getAllPhimById($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$dulieu = $this->db->get('phim');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}


	// Thêm mới 1 phim
	public function insertPhim($ten, $theloai, $thoiluong, $dienvien, $daodien, $xuatsu, $khoichieu, $noidung, $hinhtitle, $hinhbackground, $hinhslide, $video)
	{
		$dulieu = array(
			'ten_phim' => $ten,
			'the_loai' => $theloai,
			'thoi_luong' => $thoiluong,
			'dien_vien' => $dienvien,
			'dao_dien' => $daodien,
			'xuat_xu' => $xuatsu,
			'khoi_chieu' => $khoichieu,
			'noi_dung' => $noidung,
			'hinh_title' => $hinhtitle,
			'hinh_background' => $hinhbackground,
			'hinh_slide' => $hinhslide,
			'video' => $video
		);

		$this->db->insert('phim',$dulieu);
		return $this->db->insert_id();
	}

	// cập nhật lại thông tin phim
	public function updatephim($id, $ten, $theloai, $thoiluong, $dienvien, $daodien, $xuatsu, $khoichieu, $noidung, $hinhtitle, $hinhbackground, $hinhslide, $video)
	{
		$data = [
			'id_phim' => $id,
			'ten_phim' => $ten,
			'the_loai' => $theloai,
			'thoi_luong' => $thoiluong,
			'dien_vien' => $dienvien,
			'dao_dien' => $daodien,
			'xuat_xu' => $xuatsu,
			'khoi_chieu' => $khoichieu,
			'noi_dung' => $noidung,
			'hinh_title' => $hinhtitle,
			'hinh_background' => $hinhbackground,
			'hinh_slide' => $hinhslide,
			'video' => $video
		];

		$this->db->where('id_phim', $id);
		return $this->db->update('phim', $data);
	}

	public function removeById($id)
	{
		// $this->db->where('id_phim', $id);
		// return $this->db->delete('phim');
	}




}

/* End of file phim_model.php */
/* Location: ./application/models/phim_model.php */