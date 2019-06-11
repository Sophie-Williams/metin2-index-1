<?php include 'header.php' ?>
<?php 
$veri = $db->prepare("SELECT * from ayarlar WHERE id=:id");
$veri->execute(array(
	'id' => 1
));

$fetch = $veri->fetch (PDO::FETCH_ASSOC);
?>

<?php 
$veri = $db->prepare("SELECT * from users WHERE id=:id");
$veri->execute(array(
  'id' => 1
));

$fetch2 = $veri->fetch (PDO::FETCH_ASSOC);
?>
                <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Ayarlar</strong>
                        </div>
                        <div class="card-body">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
						  Bu sayfadan, index linklerini, logosunu, arka plan görüntüsünü ve admin bilgilerini değiştirebilirsiniz.
						</div>
                        <hr>
                        <form id="adminForm">
                        <div class="row">
                        <input type="hidden" name="adminForm">
                        <div class="card-body card-block col-md-6">
							<div class="has-success form-group"><label class=" form-control-label">Admin kullanıcı adı</label><input type="text" class="form-control" name="user" value="<?php echo $fetch2['user'] ?>"></div>
                        </div>
                        <div class="card-body card-block col-md-6">
							<div class="has-success form-group"><label class=" form-control-label">Admin şifre</label><input type="text" class="form-control" name="password" value="<?php echo $fetch2['password'] ?>"></div>
                        </div>
                        </div>
						<div class="form-actions form-group">
						<button type="submit" class="btn btn-primary btn-sm">Güncelle</button>
						</div>
                        </form>

                        <form id="linkForm">
                        <div class="row">
                        <div class="card-body card-block col-md-4">
                        <input type="hidden" name="linkForm">
							<div class="has-success form-group"><label class=" form-control-label">Tanıtım Sayfası Linki</label><input type="text" class="form-control" name="tanitim_link" value="<?php echo $fetch['tanitim_link'] ?>"></div>
                        </div>
                        <div class="card-body card-block col-md-4">
							<div class="has-success form-group"><label class=" form-control-label">Forum Linki (Yoksa boş bırakın)</label><input type="text" class="form-control" name="forum_link" value="<?php echo $fetch['forum_link'] ?>"></div>
                        </div>
                        <div class="card-body card-block col-md-4">
							<div class="has-success form-group"><label class=" form-control-label">Wiki Linki (Yoksa boş bırakın)</label><input type="text" class="form-control" name="wiki_link" value="<?php echo $fetch['wiki_link'] ?>"></div>
                        </div>
                        </div>
						<div class="form-actions form-group">
						<button type="submit" class="btn btn-primary btn-sm">Güncelle</button>
						</div>
                        </form>

                        <form id="logoForm" role="form" enctype="multipart/form-data">
                        <div class="row">
                        <div class="card-body card-block col-md-6">
                        	<input type="hidden" name="bgForm">
							<div class="has-success form-group"><label class=" form-control-label">Logo Seç</label><input type="file" class="form-control p-1" name="logo" value=""></div>

							<div class="has-success form-group"><label class="form-control-label">Yüklü Logo</label><img class="img-fluid" src="../assets/uploads/<?php echo $fetch['logo'] ?>" alt=""></div>
							<input type="hidden" name="old_logo" value="<?php echo $fetch['logo'] ?>">
                        </div>
                        <div class="card-body card-block col-md-6">
							<div class="has-success form-group"><label class="form-control-label">Arka Plan Seç</label><input type="file" class="form-control p-1" name="bg_img" value=""></div>
							<div class="has-success form-group"><label class="form-control-label">Yüklü Arka Plan Resmi</label><img class="img-fluid" src="../assets/uploads/<?php echo $fetch['bg_img'] ?>" alt=""></div>
							<input type="hidden" name="old_bg" value="<?php echo $fetch['bg_img'] ?>">
                        </div>
                        </div>
						<div class="form-actions form-group">
						<button type="submit" class="btn btn-primary btn-sm">Güncelle</button>
						</div>
                        </form>
                        </div>
                    </div>
                </div>
                </div>

<script>
$(document).ready(function(){
  $('#adminForm').on('submit',function(e) {
  $.ajax({
      url:'action.php',
      data:$(this).serialize(),
      type:'POST',
      success:function(data){
        console.log(data);
	    swal("Başarılı!", "Admin bilgileri değiştirildi.", "success").then(function(){
	    	location.reload();
	    });
      },
      error:function(data){
	    swal("Oops...", "Bir hata meydana geldi :(", "error");
      }
    });
    e.preventDefault();
  });
});
</script>

<script>
$(document).ready(function(){
  $('#linkForm').on('submit',function(e) {
  $.ajax({
      url:'action.php',
      data:$(this).serialize(),
      type:'POST',
      success:function(data){
        console.log(data);
	    swal("Başarılı!", "Linkler değiştirildi.", "success").then(function(){
	    	location.reload();
	    });
      },
      error:function(data){
	    swal("Oops...", "Bir hata meydana geldi :(", "error");
      }
    });
    e.preventDefault();
  });
});
</script>

<script>
$(document).ready(function(){
  $('#logoForm').on('submit',function(e) {
	event.preventDefault();
	var form = $('#logoForm')[0];
	var data = new FormData(form);
  $.ajax({
      url:'action.php',
      data: data,
	  processData: false,
	  contentType: false,
	  cache: false,
	  timeout: 600000,
      type:'POST',
      success:function(data){
        console.log(data);
	    swal("Başarılı!", "Bilgiler güncellendi.", "success").then(function(){
	    	location.reload();
	    });
      },
      error:function(data){
	    swal("Oops...", "Bir hata meydana geldi :(", "error");
      }
    });
    e.preventDefault();
  });
});
</script>
<?php include 'footer.php' ?>