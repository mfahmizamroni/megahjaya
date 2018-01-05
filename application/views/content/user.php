<?php
$sqldev = $user;

function getTemplate($pinT){
	$header = "[";
	$footer = "]";
	$content = "";
	$sqlGetTemp = mysql_query("SELECT * FROM tb_template where pin=".$pinT);
	while($dataGetTemp = mysql_fetch_array($sqlGetTemp)){
		if ($content != ""){
			$content = $content.',';
		}
		$content = $content.'{"pin":"'.$dataGetTemp[pin].'","idx":"'.$dataGetTemp[finger_idx].'","alg_ver":"'.$dataGetTemp[alg_ver].'","template":"'.$dataGetTemp[template].'"}';
	}
	return ($header.$content.$footer);
}

function viewUser(){
	$sqluser = mysql_query("SELECT * FROM tb_user");
	$jml = mysql_num_rows($sqluser);
	echo'
	<h3>Data User <span class="badge">'.$jml.'</span></h3>';
	while($datauser = mysql_fetch_array($sqluser))
	{
		$idUser = $datauser[pin];
		echo "
		<td>".$idUser."</td>
		<td>".$datauser[nama]."</td>
		<td>".$datauser[pwd]."</td>
		<td>".$datauser[rfid]."</td>
		<td>".$datauser[privilege]."</td>";
		echo'
		<td>
			<button type="button" class="btn" data-toggle="modal" data-target="#message'.$idUser.'">
			<span class="glyphicon glyphicon glyphicon-eye-open"></span></button>
		</td>
		</tr>
		<div id="message'.$idUser.'" class="modal fade" role="dialog">
			<div class="modal-dialog">
			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
					<!--  <h4 class="modal-title"></h4>-->
					</div>
					<div class="modal-body">
					';
					$sqltemplate = mysql_query("SELECT * FROM tb_template where pin=".$idUser);
					while($datatemplate = mysql_fetch_array($sqltemplate)){
						echo '
						<ul class="list-group">
							<li class="list-group-item">
								<label>PIN : </label>
								<input type="text" class="form-control" value="'.$datatemplate[pin].'" readonly="readonly">
							</li>
							<li class="list-group-item">
								<label>Finger Index : </label>
								<input type="text" class="form-control" value="'.$datatemplate[finger_idx].'" readonly="readonly">
							</li>
							<li class="list-group-item">
								<label>Algoritma Version : </label>
								<input type="text" class="form-control" value="'.$datatemplate[alg_ver].'" readonly="readonly">
							</li>
							<li class="list-group-item">
								<label>Template : </label>
								<textarea class="form-control" readonly="readonly">'.$datatemplate[template].'</textarea>
							</li>
						</ul>
						';
					}
					echo'
					</div>
					<div class="modal-footer">
						<button class="btn btn-info" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>';
	}
	echo '
	</table>
	';
}
?>

<form method="post" action="index.php?m=content&p=user">
<div class="row">
	<div class="col-sm-4"><input type="submit" class="btn btn-primary btn-block" name="b_GetUser" value="Get All User"></div>
	<div class="col-sm-4"><input type="submit" class="btn btn-primary btn-block" name="b_DelUser" value="Delete All User"></div>
	<div class="col-sm-4"><input type="submit" class="btn btn-primary btn-block" name="b_delUserDB" value="Clear User in Database"></div>
</div><br>
<div class="row">
	<div class="col-sm-4"><div class="col-xs-6"><input type="text" class="form-control" placeholder="PIN"  name="i_setUser" style="width:120px"></div>
	<div class="col-xs-6"><input type="submit" class="btn btn-primary btn-block" name="b_SetUser" value="Set User" style="width:133px"></div></div>
	<div class="col-sm-4"><div class="col-xs-6"><input type="text" class="form-control" placeholder="PIN" name="i_delUser" style="width:120px"></div>
	<div class="col-xs-6"><input type="submit" class="btn btn-primary btn-block" name="b_delUserPIN" value="Delete User Pin" style="width:133px"></div></div>
</div>
<div class="row">
	<div class="col-sm-4">*) Leave PIN Empty to Upload All User</div>
</div>
<table class="table table-hover">
	<tr>
		<th>PIN</th>
		<th>Nama</th>
		<th>Password</th>
		<th>RFID</th>
		<th>Privilege</th>
		<th></th>
	</tr>
	<tr>
</form>

<?php
if(isset($_POST['b_delUserDB'])){
	$querydel	= mysql_query("delete from tb_user");
	if($querydel){
		header("location: index.php?m=content&p=user");
	}else{
		echo '<script>alert ("Failed !")</script>';
	}
}
if($datadev = mysql_fetch_array($sqldev)) {
	$sn = $datadev[device_sn];
	$port = $datadev[server_port];
	if(isset($_POST['b_GetUser'])){
		$parameter = "sn=".$sn;
		$url = $datadev[server_IP]."/user/all";
		$server_output = webservice($port,$url,$parameter);
	}elseif (isset($_POST['b_DelUser'])){
		$parameter = "sn=".$sn;
		$url = $datadev[server_IP]."/user/delall";
		$server_output = webservice($port,$url,$parameter);
	}elseif (isset($_POST['b_delUserPIN'])){
		$pinDel	= $_POST['i_delUser'];
		$parameter = "sn=".$sn."&pin=".$pinDel;
		$url = $datadev[server_IP]."/user/del";
		$server_output = webservice($port,$url,$parameter);
	}elseif (isset($_POST['b_SetUser'])){
		$pinSet	= $_POST['i_setUser'];
		if ($pinSet == null){
			$sqluserUp = mysql_query("SELECT * FROM tb_user");
		}else{
			$sqluserUp = mysql_query("SELECT * FROM tb_user where pin=".$pinSet);
		}
		while ($datauserUp = mysql_fetch_array($sqluserUp)) {
			$upPin = $datauserUp[pin];
			$upNama = $datauserUp[nama];
			$upPwd = $datauserUp[pwd];
			$upRfid = $datauserUp[rfid];
			$upPriv = $datauserUp[privilege];
			$upTemp = getTemplate($upPin);
			$upTemp = str_replace("+","%2B",$upTemp);
			$parameter = "sn=".$sn."&pin=".$upPin."&nama=".$upNama."&pwd=".$upPwd."&rfid=".$upRfid."&priv=".$upPriv."&tmp=".$upTemp;
			$url = $datadev[server_IP]."/user/set";
			$server_output = webservice($port,$url,$parameter);
		}
}

	if(isset($_POST['b_GetUser'])){
		$content = json_decode($server_output);
		foreach ($content as $key => $value){
			if ((!is_array($value)) and ($value==1)) {
				$querydeluser	= mysql_query("delete from tb_user");
				$querydeltemp	= mysql_query("delete from tb_template");
				if($querydeluser and $querydeltemp){}else{
					echo '<script>alert ("Failed !")</script>';
				}
				foreach($content->Data as $entry){
					$Jpin = $entry->PIN;
					$Jname = $entry->Name;
					$Jrfid = $entry->RFID;
					$Jpass = $entry->Password;
					$Jpriv = $entry->Privilege;
					$JTemp = $entrytemp->Template;
					$sqlinsertuser	= 'insert into tb_user (pin,nama,pwd,rfid,privilege) values ("'.$Jpin.'","'.$Jname.'","'.$Jpass.'","'.$Jrfid.'","'.$Jpriv.'")';
					$queryinsertuser	= mysql_query($sqlinsertuser);
					if($queryinsertuser){
					}else{
					echo '<script>alert ("Failed !")</script>';
					}
					foreach($entry->Template as $values)
					{
              			$valPin = $values->pin;
              			$valIdx = $values->idx;
              			$valAlg_ver = $values->alg_ver;
              			$valTemp = $values->template;
              			$sqlinserttemp	= 'insert into tb_template (pin,finger_idx,alg_ver,template) values ("'.$valPin.'","'.$valIdx.'","'.$valAlg_ver.'","'.$valTemp.'")';
						$queryinserttemp	= mysql_query($sqlinserttemp);
						if($queryinserttemp){
						}else{
							echo '<script>alert ("Failed !")</script>';
						}
          			}
				}
			}elseif((!is_array($value)) and (!$value==1)) {
			}
		}
	}
}
echo viewUser(),'<textarea class="form-control" placeholder="Result" readonly="readonly">'.$server_output."</textarea>";
?>