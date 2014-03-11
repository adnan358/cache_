<?php 

class cache_
{
	
	public $path = 'cache';
	public $time = false;
	public $files = '';
	
	function cache_($path = 'cache',$time = false)
	{
		$this->path = $path;
		$this->time = $time;
		
		if(!file_exists($this->path))
		{	
			echo 'cache dosyası olusturuldu<br>';
			mkdir($this->path);
			chmod($this->path,0777);
		}
		
			$this->file_ex();
	}
	
	function file_ex()
	{
		echo $file = $this->path.$_SERVER['PHP_SELF'].'.html';
		
		$this->files = $file;
		
		if(!$this->time)
		{
			if(file_exists($file))
			{
				include($file);
				echo '<br>Dosya ınclude Edildi<br>';
				exit;
			}
			else
			{
				echo '<br>Dosya Yok';
				ob_start();
			}
		}
		else 
		{
			if(file_exists($file) and (time() - $this->time < filemtime($file)))
			{
				include($file);
				echo 'Dosya Onceden varmıs Onu ınclude ettım<br>';
				exit;
			}
			else
			{
				echo 'Dosya Onceden varmıs Onu sildim bastan olusturom<br>';
				unlink($file);
				ob_start();
			}
		}
	}
	
	function cache_end()
	{
		$ch = fopen($this->files,'w');
		
		fwrite($ch,ob_get_contents());
		fclose($ch);

		ob_end_flush();
		
		echo 'Dosya yazıldı.<br>';
	}
}

?>