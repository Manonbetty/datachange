<?php


class Antrag
{


    private string $vornameP;
    private string $nachnameP;
    private string $geburi;
    private string $patID;
    private string $unterDatum;
    private string $unterZeit;
    private int $massID;
//    private string $studie;
    private string $modalitaet;
    private string $instanz;
    private string $begruendung;
//    private string $erklaerung;

    /**
     * Antrag constructor.
     * @param string $vornameP
     * @param string $nachnameP
     * @param string $geburi
     * @param string $patID
     * @param string $unterDatum
     * @param string $unterZeit
     * @param int $massID
     * @param string $modalitaet
     * @param string $instanz
     * @param string $begruendung
     */
    public function __construct(string $vornameP, string $nachnameP, string $geburi, string $patID, string $unterDatum, string $unterZeit, int $massID, string $modalitaet, string $instanz, string $begruendung)
    {
        $this->vornameP = $vornameP;
        $this->nachnameP = $nachnameP;
        $this->geburi = $geburi;
        $this->patID = $patID;
        $this->unterDatum = $unterDatum;
        $this->unterZeit = $unterZeit;
        $this->massID = $massID;
        $this->modalitaet = $modalitaet;
        $this->instanz = $instanz;
        $this->begruendung = $begruendung;
    }

    public static function createAntrag(string $vornameP, string $nachnameP, string $geburi, string $patID, string $unterDatum, string $unterZeit, int $massID, string $modalitaet, string $instanz,  string $begruendung): Antrag
    {
        $antrag = new Antrag($vornameP, $nachnameP,  $geburi,  $patID, $unterDatum, $unterZeit,  $massID, $modalitaet, $instanz, $begruendung);
        return $antrag;
    }
}