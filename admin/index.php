<?php include 'header.php' ?>
<?php 
$veri = $db->prepare("SELECT * from servers WHERE id=:id");
$veri->execute(array(
	'id' => 0
));

$fetch = $veri->fetch (PDO::FETCH_ASSOC);
?>


                <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Server Ayarları</strong>
                        </div>
                        <div class="card-body">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
						  <strong>Not:</strong> Gözükmesini istediğiniz serverleri <strong>sırasıyla</strong> aktif ediniz.
						</div>
                        <hr>

                        <form id="s_update" role="form" enctype="multipart/form-data">
                        <input type="hidden" name="serverForm">
                        <div class="row">
                        <div class="card-body card-block col-md-4">
							<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="s1_active" name="s1_active" value="1" <?php echo $fetch['s1_active'] == 1 ? "checked" : ""; ?> >
							<label class="custom-control-label" for="s1_active">Pasif/Aktif</label>
							</div>
							<label class=" form-control-label"><strong>1. Server Ayarı</strong></label>
							<div class="has-success form-group"><label class=" form-control-label">Server Adı</label><input type="text" class="form-control" name="s1_name" value="<?php echo $fetch['s1_name'] ?>"></div>
                            <div class="has-success form-group"><label class=" form-control-label">Açılış Tarihi</label><input type="text" class="form-control" name="s1_date" value="<?php echo $fetch['s1_date'] ?>"></div>
                            <div class="has-success form-group"><label class=" form-control-label">Server Link</label><input type="text" class="form-control" name="s1_link" value="<?php echo $fetch['s1_link'] ?>"></div>
                            <div class="has-success form-group"><label class="form-control-label">Arka Plan Resmi</label><input type="file" name="s1_img" value=""></div>
                            <input type="hidden" name="s1_old_img" value="<?php echo $fetch['s1_img'] ?>">
                            <hr>
                            <div class="has-success form-group"><label class="form-control-label">Yüklü Arka Plan Resmi</label><img class="img-fluid" src="../assets/uploads/<?php echo $fetch['s1_img'] ?>" alt=""></div>

                        </div>

                        <div class="card-body card-block col-md-4">
							<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="s2_active" name="s2_active" value="1" <?php echo $fetch['s2_active'] == 1 ? "checked" : ""; ?> >
							<label class="custom-control-label" for="s2_active">Pasif/Aktif</label>
							</div>
							<label class=" form-control-label"><strong>2. Server Ayarı</strong></label>
							<div class="has-success form-group"><label class=" form-control-label">Server Adı</label><input type="text" class="form-control" name="s2_name" value="<?php echo $fetch['s2_name'] ?>"></div>
                            <div class="has-success form-group"><label class=" form-control-label">Açılış Tarihi</label><input type="text" class="form-control" name="s2_date" value="<?php echo $fetch['s2_date'] ?>"></div>
                            <div class="has-success form-group"><label class=" form-control-label">Server Link</label><input type="text" class="form-control" name="s2_link" value="<?php echo $fetch['s2_link'] ?>"></div>
                            <div class="has-success form-group"><label class="form-control-label">Arka Plan Resmi</label><input type="file" name="s2_img" value=""></div>
                            <input type="hidden" name="s2_old_img" value="<?php echo $fetch['s2_img'] ?>">
                            <hr>
                            <div class="has-success form-group"><label class="form-control-label">Yüklü Arka Plan Resmi</label><img class="img-fluid" src="../assets/uploads/<?php echo $fetch['s2_img'] ?>" alt=""></div>
                        </div>

                        <div class="card-body card-block col-md-4">
							<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="s3_active" name="s3_active" value="1" <?php echo $fetch['s3_active'] == 1 ? "checked" : ""; ?> >
							<label class="custom-control-label" for="s3_active">Pasif/Aktif</label>
							</div>
							<label class=" form-control-label"><strong>3. Server Ayarı</strong></label>
							<div class="has-success form-group"><label class=" form-control-label">Server Adı</label><input type="text" class="form-control" name="s3_name" value="<?php echo $fetch['s3_name'] ?>"></div>
                            <div class="has-success form-group"><label class=" form-control-label">Açılış Tarihi</label><input type="text" class="form-control" name="s3_date" value="<?php echo $fetch['s3_date'] ?>"></div>
                            <div class="has-success form-group"><label class=" form-control-label">Server Link</label><input type="text" class="form-control" name="s3_link" value="<?php echo $fetch['s3_link'] ?>"></div>
                            <div class="has-success form-group"><label class="form-control-label">Arka Plan Resmi</label><input type="file" name="s3_img" value=""></div>
                            <input type="hidden" name="s3_old_img" value="<?php echo $fetch['s3_img'] ?>">
                            <hr>
                            <div class="has-success form-group"><label class="form-control-label">Yüklü Arka Plan Resmi</label><img class="img-fluid" src="../assets/uploads/<?php echo $fetch['s3_img'] ?>" alt=""></div>
                        </div>
                        <div class="col-md-12">
                        	<hr> <br>
                        	<p class="p-3 mb-2 bg-light text-dark"><strong>Not - Video link:</strong> https://www.youtube.com/watch?v=<span class="text-danger">UO0QnHtix3g</span> kırmızı ile gösterilen = (eşittir) işaretinden sonraki kısmı link kısmına yazınız. Bu link örnektir, sizin videonuzdaki link başkadır. Şablona uyarak giriniz.</p>
                        </div>
                        <div class="card-body card-block col-md-12">
							<label class=" form-control-label"><strong>Youtube tanıtım videosu</strong></label>
							<div class="has-success form-group"><label class=" form-control-label">Video linki (Yukarıdaki not'a göre link giriniz.)</label><input type="text" class="form-control" name="youtube" value="<?php echo $fetch['youtube'] ?>"></div>
						<div class="alert alert-info alert-dismissible fade show mt-4" role="alert">
						  <strong>Not:</strong> Video kısmını boş bırakırsanız indexten video yeri kalkar.
						</div>
						<div class="form-actions form-group">
						<button type="submit" class="btn btn-primary btn-sm">Güncelle</button>
						</div>
                        </div>
                        </div>
						
                        </form>
<script>
$(document).ready(function(){
  $('#s_update').on('submit',function(e) {
	event.preventDefault();
	var form = $('#s_update')[0];
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
                        </div>
                    </div>
                </div>
                </div>

<?php include 'footer.php' ?>
