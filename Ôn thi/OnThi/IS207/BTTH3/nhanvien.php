<?php
	class nhanvien{
		private $maNV, $tenNV, $soNgay, $luongNgay; 
		
		public function Gan($maNV, $tenNV, $soNgay, $luongNgay) {
			$this->maNV = $maNV;
			$this->tenNV = $tenNV;
			$this->soNgay = $soNgay;
			$this->luongNgay = $luongNgay;
		}
		
		public function InNhanVien() {
			echo "<h3>Thông tin nhân viên:</h3>";
			echo "Mã nhân viên: ".$this->maNV."<br>";
			echo "Tên nhân viên: ".$this->tenNV."<br>";
			echo "Số ngày: ".$this->soNgay."<br>";
			echo "Lương ngày: ".$this->luongNgay."<br>";
		}
		
		public function TinhLuong() {
			return $this->soNgay * $this->luongNgay ;
		}
	}
?>