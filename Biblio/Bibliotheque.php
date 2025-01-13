<?php

class Bibliotheque
{

    //Attributs
    private array $livres;
    private array $utilisateurs;

    //Getters et Setters
    public function getUtilisateurs(): array
    {
        return $this->utilisateurs;
    }

    public function setUtilisateurs(array $utilisateurs): void
    {
        $this->utilisateurs = $utilisateurs;
    }

    public function getLivres(): array
    {
        return $this->livres;
    }

    public function setLivres(array $livres): void
    {
        $this->livres = $livres;
    }

    public function ajouterLivre(Livre $livre){
        $this->livres[] = $livre;
    }

    public function ajouterUtilisateur(Utilisateur $utilisateur)
    {
        $this->utilisateurs[] = $utilisateur;
    }

    public function listerLivres()
    {
        return $this->livres;
    }
    public function listerUtilisateurs(){
        return $this->utilisateurs;
    }
}