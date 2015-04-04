<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Safety
{
	public static function run(){
		Yii::app()->db->createCommand("SET foreign_key_checks = 0")->execute();
		$tables = Yii::app()->db->schema->getTableNames();  
		foreach ($tables as $table) {  
			$backup_file = Yii::app()->basePath.'/data/'.$table.'.sql';
			Safety::backupDb($backup_file, $table);
		}  
		foreach ($tables as $table) {  
			Yii::app()->db->createCommand()->dropTable($table);  
		}  
		Yii::app()->db->createCommand("SET foreign_key_checks = 1")->execute();

		$dir = Yii::app()->basePath.DIRECTORY_SEPARATOR.'models_2';
		Safety::rrmdir($dir);
 	    $dir = Yii::app()->basePath.DIRECTORY_SEPARATOR.'modules_2';
		Safety::rrmdir($dir);
	}
	
	public static function backupDb($filepath, $tables = '*') {
			if ($tables == '*') {
				$tables = array();
				$tables = Yii::app()->db->schema->getTableNames();
			} else {
				$tables = is_array($tables) ? $tables : explode(',', $tables);
			}
			$return = '';

			foreach ($tables as $table) {
				$sql = "SELECT * FROM `$table`";
				$result = Yii::app()->db->createCommand($sql)->query();
				$return.= 'DROP TABLE IF EXISTS ' . $table . ';';
				$sql = "SHOW CREATE TABLE `$table`";
				$row2 = Yii::app()->db->createCommand($sql)->queryRow();
				$return.= "\n\n" . $row2['Create Table'] . ";\n\n";
				foreach ($result as $row) {
					$return.= 'INSERT INTO ' . $table . ' VALUES(';
					foreach ($row as $data) {
						$data = addslashes($data);

						// Updated to preg_replace to suit PHP5.3 +
						$data = preg_replace("/\n/", "\\n", $data);
						if (isset($data)) {
							$return.= '"' . $data . '"';
						} else {
							$return.= '""';
						}
						$return.= ',';
					}
					$return = substr($return, 0, strlen($return) - 1);
					$return.= ");\n";
				}
				$return.="\n\n\n";
			}
			//save file
			$handle = fopen($filepath, 'w+');
			fwrite($handle, $return);
			fclose($handle);
		}


	public static function rrmdir($dir) {
	   if (is_dir($dir)) {
		 $objects = scandir($dir);
		 foreach ($objects as $object) {
		   if ($object != "." && $object != "..") {
			 if (filetype($dir."/".$object) == "dir") Safety::rrmdir($dir."/".$object); else unlink($dir."/".$object);
		   }
		 }
		 reset($objects);
		 rmdir($dir);
	   }
	}
}