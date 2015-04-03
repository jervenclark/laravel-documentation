<?php 

	require __DIR__ . '/../vendor/autoload.php';

	use Ciconia\Ciconia as Ciconia;	

	class Parse_MD{

		static $docs, $pages;

		public function __construct( $docs = '\..\vendor\laravel\docs\\' ){			
			self::$docs = __DIR__ . $docs;
			self::$pages = [];
			self::get_md_files();
			
		}

		public static function get_md_files(){
			$ciconia = new Ciconia();	
			$docs = (self::$docs);			
			$pattern = $docs.'*.md';
			foreach (glob($pattern) as $fullpath) {		    
			    $filename = preg_replace ( ["/".preg_quote($docs)."/", '/.md/'], ['', ''], $fullpath);
				self::$pages[$filename] = ['name' => $filename,'content' => $ciconia->render(file_get_contents($fullpath))];
			}
		}

	}	
	
?>