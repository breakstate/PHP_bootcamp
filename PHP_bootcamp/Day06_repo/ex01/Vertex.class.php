<?PHP
	class Vertex
	{
		private $_x;
		private $_y;
		private $_z;
		private $_w;
		private $_color;

		public static $verbose = False;

		public function __construct($vertex)
		{
			$this->_x = $vertex['x'];
			$this->_y = $vertex['y'];
			$this->_z = $vertex['z'];
			if ($vertex['w'])
				$this->_w = $vertex['w'];
			else 
				$this->_w = 1.0;
			if ($vertex['color'])
				$this->_color = $vertex['color'];
			else
				$this->_color = new Color( array( 'red' => 255, 'green' => 255, 'blue' => 255) );
/*
			foreach($vertex as $key => $value)
			{
				echo("-$key\n");
				echo("-$value\n");
				if ($key == 'x')
					$_x = $value;
				else if ($key == 'y')
					$_y = $value;
				else if ($key == 'z')
					$_z = $value;
				else if ($key == 'w')
					$_w = $value;
				else if ($key == 'color')
					$_color = $value;
			}*/
			if (self::$verbose == True)
			{
				printf("Vertex( x: %0.2f, y: %0.2f, z: %0.2f, w: %0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) constructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue );
				//Vertex( x: 0.00, y: 0.00, z:0.00, w:1.00, Color( red: 255, green: 255, blue: 255 ) ) constructed
			}
		}
		public	function __destruct()
		{
			if (self::$verbose == True)
			{	
				printf("Vertex( x: %0.2f, y: %0.2f, z: %0.2f, w: %0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) destructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue );
				//printf("Vertex( x: %0.2f, y: %0.2f, z: %0.2f, w: %0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) constructed");
			}
		}
		public function doc()
		{
			echo file_get_contents("Vertex.doc.txt");
			echo "\n";
		}
		public function __toString()
		{
				$str1 = (sprintf("Vertex( x: %0.2f, y: %0.2f, z: %0.2f, w: %0.2f", $this->_x, $this->_y, $this->_z, $this->_w));
				if (self::$verbose == True)
				{
					$str2 = (sprintf(", Color( red: %3d, green: %3d, blue: %3d )", $this->_color->red, $this->_color->green, $this->_color->blue ));
					$str1 = $str1 . $str2;
				}
				$str3 = " )";
				return ($str1 . $str3);
		}
	}

?>