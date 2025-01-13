<?php

class Emprunt
{

    private Livre $livre;
    private Utilisateur $utilisateur;
    private string $date;

    /**
     * @param Livre $livre
     * @param Utilisateur $utilisateur
     * @param string $date
     */
    public function __construct(Livre $livre, Utilisateur $utilisateur, string $date)
    {
        $this->livre = $livre;
        $this->utilisateur = $utilisateur;
        $this->date = $date;
    }

    public function getLivre(): Livre
    {
        return $this->livre;
    }

    public function setLivre(Livre $livre): void
    {
        $this->livre = $livre;
    }

    public function getUtilisateur(): Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(Utilisateur $utilisateur): void
    {
        $this->utilisateur = $utilisateur;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    public function getDetails()
    {
        $tableau = [$this->livre, $this->utilisateur, $this->date];
        return $tableau;
    }


}