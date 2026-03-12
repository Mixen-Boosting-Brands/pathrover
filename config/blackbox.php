<?php
class Blackbox {

	protected $opciones;
	public $metadata = array();
	public $navigation = array();
	public $urlforma = array();

	function __construct($opciones=array()){
		$this->opciones = array(
			"sitio" => PROYECTO,
			"titulo" => "",
			"page" => "",
			"js" => array(),
			"bottomjs" => array(),
			"css" => array(),
			"normallayout" => true,
		);
		$this->metadata['image'] = URLIMAGES . 'social_share.jpg';

		if ($opciones) {
            $this->mix($opciones);
        }
	}

	public function get($type){
		if(isset($this->opciones[$type]))
			return $this->opciones[$type];
		else
			return null;
	}

	public function getTitle(){
		if($this->opciones['titulo']!=""){
			if($this->get("page") == "home"){
				return $this->opciones['sitio'] . " | ".$this->opciones['titulo'];
			}else{
				return $this->opciones['titulo'] . " | ".$this->opciones['sitio'];
			}

		}else{
			return $this->opciones['sitio'];
		}
	}

	public function set($type,$value){
		if(isset($this->opciones[$type]) && is_array($this->opciones[$type])){
			$this->opciones[$type][]=$value;
		}else{
			$this->opciones[$type]=$value;
		}
		return $this->opciones[$type];
	}

	public function mix($opciones=array()){
		if ($opciones && is_array($opciones)) {
            $this->opciones = $opciones + $this->opciones;
        }
	}


	public function setMeta($type,$value){
		$this->metadata[$type] = $value;
	}

	public function setMetas(array $values){
		$this->metadata = array_merge($this->metadata, $values);
	}

	public function printMetaData(){
		$metas=array('description', 'robots', 'keywords');
		$ogs=array('title','description','url','image');
		$especiales=array('canonical','og:url','og:price:amount','og:price:currency','product:brand','product:availability','product:catalog_id','product:condition','product:price:amount','product:price:currency','product:retailer_item_id');
		if(!empty($this->metadata)){
			foreach($this->metadata as $md => $value){
				if(in_array($md,$metas)){
					echo '<meta name="'.$md.'" content="'.$value.'">';
				}
				if(in_array($md,$ogs)){
					echo '<meta property="og:'.$md.'" content="'.$value.'">';
				}
				if(in_array($md,$especiales)){
					echo $value;
				}
			}
		}
	}
}

?>
