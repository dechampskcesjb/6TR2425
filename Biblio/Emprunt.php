<?php

class Emprunt
{

    private Livre $livre;
    private Utilisateur $utilisateur;
    private int $date;

    /**
     * @param Livre $livre
     * @param Utilisateur $utilisateur
     * @param int $date
     */
    public function __construct(Livre $livre, Utilisateur $utilisateur, int $date)
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

    public function getDate(): int
    {
        return $this->date;
    }

    public function setDate(int $date): void
    {
        $this->date = $date;
    }

    public function getDetails()
    {
        $tableau = [$this->livre, $this->utilisateur, $this->date];
        return $tableau;
    }


}