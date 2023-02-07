<?php
class Departement {
  private int $numero_departement;
  private string $location;
  private Employe $list_employe = [];
  private Employe $Directeur;

  public function setNumero_departement(int $numero_departement) : void {
    $this->numero_departement = $numero_departement;
  }
  public function getNumero_departement() : int{
    return $this->numero_departement;
  }

  public function setLocation(string $location) : void {
    $this->location = $location;
  }
  public function getLocation() : string{
    return $this->location;
  }

  public function setList_employe(array $list_employe) : void{
    $this->list_employe = $list_employe;
  }
  public function getList_employe() : array{
    return $this->list_employe;
  }

  public function setDirecteur(Employe $Directeur) : void {
    $this->Directeur = $Directeur;
  }
  public function getDirecteur() : Employe{
    return $this->Directeur;
  }


}
class Employe {
  private int $numero_matricule;
  private string $nom_employe;
  private string $grade_employe;
  private Departement $departement;

  public function setNumero_matricule(int $numero_matricule) : void {
    $this->numero_matricule = $numero_matricule;
  }
  public function getNumero_matricule() : int {
    return $this->numero_matricule;
  }

  public function setNom_employe(string $nom_employe) : void {
    $this->nom_employe = $nom_employe;
  }
  public function getNom_employe() : string {
    return $this->nom_employe;
  }

  public function setGrade_employe(string $grade_employe) : void {
    $this->grade_employe = $grade_employe;
  }
  public function getGrade_employe() : string {
    return $this->grade_employe;
  }

  public function setDepartement(Departement $departement) : void {
    $this->departement = $departement;
  }
  public function getDepartement() : Departement {
    return $this->departement;
  }


}

class Compagnie {
  private Pilote $list_pilote = [];
  private Vol $list_vol = [];

  public function setList_pilote(array $list_pilote) : void {
    $this->list_pilote = $list_pilote;
  }
  public function getList_pilote(): array {
    return $this->list_pilote;
  }

  public function setList_vol(array $list_vol) : void {
    $this->list_vol = $list_vol;
  }
  public function getList_vol(): array {
    return $this->list_vol;
  }

}

class Pilote {
  private Compagnie $compagnie;
  private Vol $list_vol = [];

  public function setCompagnie(Compagnie $compagnie) : void {
    $this->compagnie = $compagnie;
  }
  public function getCompagnie(): Compagnie {
    return $this->compagnie;
  }

  public function setList_vol(array $list_vol) : void {
    $this->list_vol = $list_vol;
  }
  public function getList_vol(): array {
    return $this->list_vol;
  }

}

class Vol {
  private Compagnie $compagnie;
  private Pilote $pilote;
  private Avion $avion;
  private Billet $list_billet = [];
}

class Avion {
  private Vol $list_vol = [];
  private Siege $list_siege = [];
}
class Siege {
  private Avion $avion;
  private Billet $list_billet = [];
}
class Billet {
  private Vol $vol;
  private Siege $siege;
}
class Passager {
  private Billet $list_billet = [];
}
