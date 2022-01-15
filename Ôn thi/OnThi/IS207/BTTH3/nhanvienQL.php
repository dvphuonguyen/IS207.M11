<?php
	include "nhanvien.php";
	
	class nhanvienQL extends nhanvien {
		private $phucap = 2000;
		
		public function Gan($maNV, $tenNV, $soNgay, $luongNgay) {
			parent::Gan($maNV, $tenNV, $soNgay, $luongNgay);
		}
		
		public function InNhanVien() {
			parent::InNhanVien();
			echo "Phụ cấp: ".$this->phucap."<br>";
		}
		
		public function TinhLuong() {
			return parent::TinhLuong() + $this->phucap; 
		}
	}
?>