<?php
  require('ScouterMock.php');

  //ファイルの保存先
  $uploadFiledir = '../uploadFiles/';
  $newFilename = date("YmdHis") . '-' . $_FILES['imageFile']['name'];
  $uploadPath = $uploadFiledir . $newFilename;
  
  //アップロードが正しく完了したかチェック
  if (move_uploaded_file($_FILES['imageFile']['tmp_name'], $uploadPath)) {
      echo 'アップロード完了';
  } else {
      echo 'アップロード失敗'; 
  }

  $scouter = new ScouterMock();

  $scouter->execute();
?>
    