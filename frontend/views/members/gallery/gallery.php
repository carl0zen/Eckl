<?php 

$pager="";
$no_page=0;
$pictures_page=51;
	
$user_id=isset($_GET['user_id']) ? $_GET['user_id'] : $GEN_USER_ID;
$no_page=isset($_GET['no_page']) ? $_GET['no_page'] : 0;

if(isset($_POST['user_id']))$user_id=$_POST['user_id'];
if(isset($_POST['no_page']))$no_page=$_POST['no_page'];


if(!$GEN_USER_ID){echo "not logged";exit;}

$user_image_galery_path= $GEN_PATH_MEMBERS_PICTURES.members_get_info("hash",$user_id)."/";
$user_image_galery_url= $GEN_URL_MEMBERS_PICTURES.members_get_info("hash",$user_id)."/";

$consult="SELECT Count(hash) FROM members_pictures Where user_id=$user_id Order By member_picture_id DESC";
$rst= mysql_query($consult, $ecologikal) or die(mysql_error());
$row=mysql_fetch_array(	$rst );
$total_pictures=$row[0];

if($total_pictures>$pictures_page){
	if(!$no_page){
		$no_page=0;
	}
	$pager=" Limit ".($no_page*$pictures_page).", $pictures_page";
}
$sql="Select * From members_pictures Where user_id=$user_id Order By member_picture_id desc $pager";
$rst = mysql_query($sql, $ecologikal);
?>
<script type="text/javascript">
	current_gallery_page=<?php echo $no_page?>;

	function delete_picture(obj,hash){
		var dataString="command=delete_picture"+
			"&hash="+hash;
		$.ajax({
			type: "POST",
			url: "<?php echo _HOME_URL_?>/include/members/gallery/actions.php?q="+ 1*new Date(),
			contentType: "application/x-www-form-urlencoded;charset=ISO-8859-15",
			data: dataString,
			dataType: "html",
			success: function(msg) {
				//console.log(msg);
				if (msg == "REMOVED" ){
					obj.parent().remove();
				}
			}
		 });			
		return false;
	}
</script>
	<style type="text/css">
	/* jQuery lightBox plugin - Gallery style */
	
	#gallery #picture{
		background:url(<?php echo _HOME_URL_?>/images/ajax-loader.gif) no-repeat center;
		width:78px;
		height:59px;
		overflow:hidden;
		background:#ddd;
	}
	#gallery #picture img{
		position:relative;
		clip:rect(0px,78px, 60px,0px);
	}	
	</style>
<div id="galleryheader">
	<h1 >Gallery</h1>
</div>
<?php if($GEN_USER_ID && $GEN_USER_ID==$user_id){?>
<div id="loadpics" onClick="javascript:$(location).attr('href','<?php echo _HOME_URL_;?>/template.php?goto=image-uploader');">Subir Imagenes</div>
<?php } ?>

<div id="gallery">
<?php
if(mysql_num_rows($rst)){
	$c=0;
	while($row=mysql_fetch_assoc($rst)){
		$image_path=$user_image_galery_path.$row['hash'].".jpg";
		$image_url=$user_image_galery_url.$row['hash'].".jpg";

		$image_path_th=$user_image_galery_path."thumbnails/".$row['hash'].".jpg";
		$image_url_th=$user_image_galery_url."thumbnails/".$row['hash'].".jpg";
		if(file_exists($image_path) && file_exists($image_path_th)){?>
			<div id="picture"><div onclick="javascript:delete_picture($(this),'<?php echo $row['hash']?>');" id="delete"><span class="ui-icon ui-icon-circle-close"></span><div class="text">Delete</div></div><a  onClick="javascript: current_gallery_page=<?php echo $no_page?>; load_html('content', '<?php echo _HOME_URL_?>/include/members/gallery/show_picture.php?no_page=<?php echo ($no_page*$pictures_page)+$c;?>&user_id=<?php echo $user_id?>')" href="javascript:;"><img src="<?php echo $image_url_th;?>"></a></div>

<?php 
		$c++;
		}else{
			//if not exist files then delete from db
//			if($user_id == $GEN_USER_ID)
				delete_picture($row['hash']);
		}
	 }
}
?>
</div>

    <?php if($pager){?>
	<div id="pager"><div>Paginas:</div>
		<?php 
		if(($no_page * $pictures_page) < $total_pictures){
		$p=0;
			while($p<($total_pictures/$pictures_page)){
		?>
	    <div onClick="javascript: load_html('content', '<?php echo _HOME_URL_?>/include/members/gallery/gallery.php?no_page=<?php echo $p;?>&user_id=<?php echo $user_id?>')" ><a href="javascript:;"><?php echo $p+1?></a></div>
        <?php $p++;	}?>
    <?php }else{?>
		    <div  id="no_more_comments"><?php echo LANGUAGE_MEMBERS_TEXT_NOT_MORE_PICTURES;?></div>
	<?php }?>
    </div>
<?php
	$no_page++;
 } ?>
