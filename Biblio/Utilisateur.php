<?php

class Utilisateur
{

    //Attributs
    private string $nom;
    private int $id;
    private array $emprunts = [] ;


    //Methodes GET ET SET



    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getEmprunts(): string
    {
        return $this->emprunts;
    }

    public function setEmprunts(string $emprunts): void
    {
        $this->emprunts = $emprunts;
    }

    //Constructeur

    /**
     * @param string $nom
     * @param int $id
     */
    public function __construct(string $nom, int $id)
    {
        $this->nom = $nom;
        $this->id = $id;

    }
    //Methodes
    public function emprunterLivre(Livre $livre)
    {
        if(!$livre->isEstEmprunte() ){
            $livre->emprunter();
            $this->emprunts[] = $livre;
        }
    }

    public function retournerLivre(Livre $livre)
    {
        foreach ($this->emprunts as $emprunt){
            if ($emprunt === $livre){
                $livre->setEstEmprunte(false);
                unset($this->emprunts[$emprunt->getId()]);
                return;
            }
        }
    }

    public function listerEmprunts(){
        return $this->emprunts;
    }


}