<?php
if(!defined('ADMIN_PATH') || count(get_included_files())==1){
  	echo '<meta http-equiv="refresh" content="0; url=http://'.$_SERVER['HTTP_HOST'].'">';
	exit('Direct access not permitted.');
} 
include ADMIN_PATH.'/val_session.php';

?>

<!-- morris stacked chart -->
<div class="row-fluid">
<?php if (isset($_SESSION['user']['error'])) {
    echo '<div class="alert alert-error"><button class="close" data-dismiss="alert">&times;</button>'; 
    foreach ($_SESSION['user']['error'] as $error) echo '<p>'.$error.'</p>';
    echo '</div>'; 
}

?>
<!-- block -->
<div class="block">
	<div class="navbar navbar-inner block-header">
		<div class="muted pull-left"><a href="<?php echo ADMIN_URL.'/main.php?module=user';?>">Data User Account</a> &#187; Tambah User Account</div>
	</div>	
	<div class="block-content collapse in">
		<div class="span12">
			 <form class="form-horizontal" method="POST" action="<?php echo ADMIN_URL.'/module/user/act_user.php?act=add&module=user';?>">
			  <fieldset>				
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Username</label>
				  <div class="controls">
					<input class="input-xlarge focused" id="focusedInput" type="text" name="username">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Nama Lengkap</label>
				  <div class="controls">
					<input class="input-xlarge focused" id="focusedInput" type="text" name="name">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Email</label>
				  <div class="controls">
					<input class="input-xlarge focused" id="focusedInput" type="text" name="email">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Password</label>
				  <div class="controls">
					<input class="input-xlarge focused" id="focusedInput" type="password" name="pass">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="focusedInput">Re-Password</label>
				  <div class="controls">
					<input class="input-xlarge focused" id="focusedInput" type="password" name="repass">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="select">Level</label>
					<div class="controls">
						<select name="level">
							<option value="0">Contributor</option>
							<option value="1">Administrator</option>
						</select>
					</div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="select">Status</label>
					<div class="controls">
						<select name="status">
							<option value="0">Blokir</option>
							<option value="1">Aktif</option>
						</select>
					</div>
				</div>
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Save changes</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form>

		</div>
	</div>
</div>
<!-- /block -->
</div>
<?php
    if (isset($_SESSION['user'])) unset ($_SESSION['user']);
?>