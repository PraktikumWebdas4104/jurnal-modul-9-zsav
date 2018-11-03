<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "d_jurnal9"; //isi sesuai nama database anda

	function __construct(){
	$this->conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		
		
}
	function tampil_data(){
		$data = mysqli_query($this->conn,"SELECT * FROM t_jurnal9");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nama,$alamat,$usia){
		mysqli_query($this->conn,"insert into user values('','$nama','$alamat,'$usia')");
		//buatlah method input
		//query inset into user
	}

	function hapus($id){
		mysqli_query($this->conn,"DELETE FROM t_jurnal9 where id ='$id'");
		//buatlah method hapus
		//query delete from id where id ='$id'
	}

	function edit($id){
		$data = mysqli_query($this->conn,"SELECT * FROM t_jurnal9 WHERE id ='$id'");
		//lengkapilah method edit
		//query select from user where id ='$id'
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$alamat,$usia){
		mysqli_query($this->conn,"update user set nama ='$nama', alamat='$alamat', usia='$usia' where id = '$id'");
		//buatlah method update
		//query update user set blablabla where id='$id'
	}

} 

?>