<?php
include'../koneksi.php';
 ?>
<html>
<head>
  <title>Perpustakaan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../img/cssadmin.css">
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style media="screen">
.dropdown-container {
  display: none;
  background-color: #171515;
  padding-left: 0px;
}

.dropdown-btn {
  display: block;
  color: white;
  padding: 0px;
  text-decoration: none;
  font-size: 20px;
  margin-left: 0px;
}

.dropdown-btn:hover {
  color: black;
}

.active {
  background-color: #f1f1f1;
  color: black;
}

</style>
</head>
<body>

<div class="sidebar">
  <div class="judul">
  <img src="../img/anonymous.png" alt="user" class="avatar"><br><br>
  <div class="a">
  <?php echo $_SESSION['username']['id']."<br>".$_SESSION['username']['nama'];?>
</div>
<hr style="background-color:white">
  </div>
  <a href="utama_anggota.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="buku.php"><i class="fa fa-fw fa-book"></i> Buku</a>
    <a href="pinjam.php"><i class="fa fa-fw fa-folder-open"></i> Peminjaman</a>
    <a href="profil.php"><i class="fa fa-fw fa-user"></i> Profil</a>
    <a href="akun.php"><i class="fa fa-fw fa-wrench"></i> Akun</a>
  <a href="../logout.php" onclick="return confirm('apakah anda yakin?')"><i class="fa fa-fw fa-power-off"></i> Logout</a>
</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
</body>
</html>
