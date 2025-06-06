<? function supp($target,$verbose=false) {
  $exceptions = array('.','..');
  if (!$sourcedir=@opendir($target)) {
    echo "<strong>Erreur : ouverture impossible ($target)</strong><br />\n";
    return false;
  }
  while(false!==($sibling=readdir($sourcedir))) {
    if(!in_array($sibling,$exceptions)) {
      $object=str_replace('//','/',$target.'/'.$sibling);
      if(is_dir($object)) supp($object);
      if(is_file($object)) {
        echo '<strong>'.$object."</strong> : ";
        $result=@unlink($object);
        if ($result)echo "Fichier supprimé<br />\n";
          else echo "<strong>!!! Suppression du fichier impossible</strong>\n";
      }
    }
  }
  closedir($sourcedir);
  if($result=@rmdir($target)) {
    echo "Suppression terminée<br /><hr>\n";
    return true;
  }
}

supp("./", true); ?>