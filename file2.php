class Collaborateur{
    public $nom;
    public $prenom;
    public $adresse;
    public function __construct($nom,$prenom,$adresse){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->adresse=$adresse;
    }
    public function direBonjour(){
        echo 'Bonjour '.$this->prenom.' '.$this->nom.' Vous venez de '.$this->$adresse.'<br/>';
    }
}
Developpeur extends Collaborateur{
    public $type_dev="back-end";
    public function backendDev(){
        parent::direBonjour();
        echo "Et vous etes developpeur ".$type_dev;
    }
    parent::direBonjour();
    echo "Et vous etes developpeur ".$type_dev;

}
//Aliou

$aliou=new Collaborateur("BOP","Aliou","Fass");
$aliou_dev=new Developpeur();
$aliou_dev->backendDev();

//Yussuf

$yussuf=new= Collaborateur("DIONE","Yussuf","Colobanne");
$yussuf_dev=new Developpeur();
$yussuf_dev->backendDev();

//Baba

$baba=new Collaborateur("SAMB","Baba","Mermoz");
$baba_dev=new Developpeur();
$baba_dev->backendDev();

//Anna

$anna=new Collaborateur("DIONE","Anna","Parcelles Asssainies");
$anna_dev=new Developpeur();
$anna_dev->backendDev();