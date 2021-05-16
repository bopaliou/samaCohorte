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
$aliou=new Collaborateur("BOP","Aliou","Fass");
$yussuf=new= Collaborateur("DIONE","Yussuf","Colobanne");
$baba=new Collaborateur("SAMB","Baba","Mermoz");
$anna=new Collaborateur("DIONE","Anna","Parcelles Asssainies");