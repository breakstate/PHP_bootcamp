<?PHP
	class Color
	{
		public $red = 0;
		public $green = 0;
		public $blue = 0;

		public static $verbose = False;

		public function __construct($color)
		{
			if ($color['rgb'])
			{
				$this->red = $color['rgb'] / 256 / 256;
				$this->green = ($color['rgb'] >> 8) % 256;
				$this->blue = $color['rgb'] % 256;
			}
			else
			{
				$this->red = $color['red'];
				$this->green = $color['green'];
				$this->blue = $color['blue'];
			}
			if (self::$verbose == True)
			{
				printf("Color ( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue); 
			}
		}
		public	function __destruct()
		{
			if (self::$verbose == True)
			{	
				printf("Color ( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue); 
			}
		}
		public function doc()
		{
			echo file_get_contents("Color.doc.txt");
		}
		public function add($addclass)
		{
			return (new Color( array( 'red' => $this->red + $addclass->red, 'green' => $this->green + $addclass->green, 'blue' => $this->blue + $addclass->blue)));
		}
		public function sub($addclass)
		{
			return (new Color( array( 'red' => $this->red - $addclass->red, 'green' => $this->green - $addclass->green, 'blue' => $this->blue - $addclass->blue)));			
		}
		public function mult($addclass)
		{
			return (new Color( array( 'red' => $this->red * $addclass->red, 'green' => $this->green * $addclass->green, 'blue' => $this->blue * $addclass->blue)));			
		}
		public function __toString()
		{
			return (sprintf("Color ( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue)); 
		}
	}

?>