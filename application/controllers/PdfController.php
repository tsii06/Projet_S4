<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PdfController extends CI_Controller{
	public function __construct(){
		parent::__construct();
          $this->load->library('fpdf183/fpdf');
		$this->load->helper('Fpdf_helper');
		$this->load->helper('form');
		$this->load->model('ObjectifModel');
		$this->load->model('SakafoModel');
		$this->load->model('SportModel');
		$this->load->model('RegimeModel');
		$this->load->model('RegimeUtilisateurModel');
		$this->load->model('UtilisateurModel');
	}
	public function index()
	{
		$this->load->view('pdf/export');
	}
	public function Exporter() {
		$idRegime = $this->input->post('idRegime');
		$multiple = $this->input->post('multiple');
		//
		$idUtilisateur = 1;
		$Utilisateur = $this->UtilisateurModel->utilisateurById($idUtilisateur);
		$regime = $this->RegimeUtilisateurModel->getById($idRegime);
		$listaliment = $this->RegimeUtilisateurModel->getDetailAlimentById($idRegime);
		$listactivite =  $this->RegimeUtilisateurModel->getDetailActiviteById($idRegime);
		$prix = $regime['prix'] * $multiple;
		$duree = $regime['duree'] * $multiple;
		// Génération du fichier PDF
		$pdf = new Fpdf_helper();
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 14);
		//Utilisateur et regime
		$width = $pdf->GetStringWidth("Nom".$Utilisateur['nom']) + 6;
		//$pdf->SetX((210-$width)/2);
		$pdf->Cell(50, 9,$Utilisateur['nom'], 0, 1, 'C');
		$pdf->Cell($width, 9,$Utilisateur['email'], 0, 1, 'C');
		$pdf->Cell($width, 9,$regime['objectif'], 0, 1, 'C');
		$pdf->Cell($width, 9,$regime['poids'], 0, 1, 'C');
		$pdf->Cell($width, 9,$prix, 0, 1, 'C');
		$pdf->Cell($width, 9,$duree, 0, 1, 'C');
		
		// sakafo
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->SetX($pdf->GetX() + 18);
		$pdf->Cell(80, 7, 'Sakafo', 1, 0, 'C'); // Largeur de cellule augmentée à 60
		$pdf->Cell(80, 7, 'Quantite(par jrs)', 1, 0, 'C');
		$pdf->Ln();
		// Contenu sakafo
		$pdf->SetFont('Arial', 'B', 10);
		foreach ($listaliment as $row) {
		    $pdf->SetX($pdf->GetX() + 18); 
		    $pdf->Cell(60, 6, $row['sakafo'], 1, 0, 'C');
		    $pdf->Cell(40, 6, $row['quantite'], 1, 0, 'C');
		    $pdf->Ln();
		}

		// activité
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->SetX($pdf->GetX() + 18);
		$pdf->Cell(60, 7, 'Activité', 1, 0, 'C'); // Largeur de cellule augmentée à 60
		$pdf->Cell(40, 7, 'Nombre(par jrs)', 1, 0, 'C');
		$pdf->Ln();
		//contenu activite
		$pdf->SetFont('Arial', 'B', 10);
		foreach ($listactivite as $row) { 
			$pdf->SetX($pdf->GetX() + 18); 
			$pdf->Cell(60, 6, $row['nom'], 1, 0, 'C');
			$pdf->Cell(40, 6, $row['nombre'], 1, 0, 'C');
			$pdf->Ln();
		}

		$pdf->Output();
	 }
	 
	 
}
?>
