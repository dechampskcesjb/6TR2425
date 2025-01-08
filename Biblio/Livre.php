<?php

class Livre
{
    private string $titre;
    private string $auteur;
    private int $nbPages;
    private bool $estEmprunte;


    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    public function getAuteur(): string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): void
    {
        $this->auteur = $auteur;
    }

    public function getNbPages(): int
    {
        return $this->nbPages;
    }

    public function setNbPages(int $nbPages): void
    {
        $this->nbPages = $nbPages;
    }

    public function isEstEmprunte(): bool
    {
        return $this->estEmprunte;
    }

    public function setEstEmprunte(bool $estEmprunte): void
    {
        $this->estEmprunte = $estEmprunte;
    }

    public function getDetails(){

        $tableau = [$this->titre, $this->auteur, $this->nbPages, $this->estEmprunte];

        return $tableau;
    }

    public function emprunter()
    {
        $this->estEmprunte = true;
    }
    public function retourner()
    {
        $this->estEmprunte =false;
    }



}