<?php
require_once dirname(__FILE__) . '/Classes/PHPExcel.php';
include("koneksi.php");

date_default_timezone_set('Asia/Jakarta');

//	Change these values to select the Rendering library that you wish to use
//		and its directory location on your server
$rendererName = PHPExcel_Settings::PDF_RENDERER_TCPDF;
// $rendererName = PHPExcel_Settings::PDF_RENDERER_MPDF;
// $rendererName = PHPExcel_Settings::PDF_RENDERER_DOMPDF;
$rendererLibrary = 'TCPDF-master';
// $rendererLibrary = 'mPDF5.4';
// $rendererLibrary = 'domPDF-master';
$rendererLibraryPath = dirname(__FILE__).'/lib/' . $rendererLibrary;

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();
// Set document properties
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
							 ->setLastModifiedBy("Maarten Balliauw")
							 ->setTitle("Office 2007 XLSX Test Document")
							 ->setSubject("Office 2007 XLSX Test Document")
							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
							 ->setKeywords("office 2007 openxml php")
							 ->setCategory("Test result file");

// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('RKBMD');
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

// Buat header
$objPHPExcel->getActiveSheet()
			->setCellValue('C2', 'HASIL PENELAAHAN USULAN RENCANA KEBUTUHAN BARANG MILIK DAERAH')
			->setCellValue('C3', '(RENCANA PENGADAAN)')
			->setCellValue('C4', 'PENGGUNAAN BARANG DAN PENGELOLA KEUANGAN DAN ASET DAERAH')
			->setCellValue('C5', 'TAHUN 2018');
$objPHPExcel->getActiveSheet() //Merge
			->mergeCells('C2:T2')
			->mergeCells('C3:T3')
			->mergeCells('C4:T4')
			->mergeCells('C5:T5');
$style = array( //Center text
		'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
		)
	);
$objPHPExcel->getActiveSheet()->getStyle('C2:T5')->applyFromArray($style);
$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
$objPHPExcel->setActiveSheetIndex(0)
	        ->getPageSetup()
    	    ->setPrintArea("A1:Z10" )
        	->setFitToWidth(1366);
// //Province and city
// $objPHPExcel->getActiveSheet()
// 			->setCellValue('C7','PEMERINTAH PROVINSI')
// 			->setCellValue('H7',':JAWA BARAT')
// 			->setCellValue('C8','KABUPATEN/KOTA')
// 			->setCellValue('H8',':CIMAHI');
// $objPHPExcel->getActiveSheet() //Merge
// 			->mergeCells('C7:G7')
// 			->mergeCells('C8:G8');
// //Buat judul tabel
// $objPHPExcel->getActiveSheet()
// 			->setCellValue('C10','No.')
// 			->setCellValue('D11','Program/Kegiatan/Output')
// 			->setCellValue('D10','Usulan BMD')
// 			->setCellValue('L10','Kebutuhan Maksimum')
// 			->setCellValue('N10','Data Daftar Barang Yang Dapat Dioptimalisasikan')
// 			->setCellValue('R10','Keputusan Riil BMD')
// 			->setCellValue('H11','Kode Barang')
// 			->setCellValue('I11','Nama Barang')
// 			->setCellValue('J11','Jumlah')
// 			->setCellValue('K11','Satuan')
// 			->setCellValue('L11','Jumlah')
// 			->setCellValue('M11','Satuan')
// 			->setCellValue('N11','Kode Barang')
// 			->setCellValue('O11','Nama Barang')
// 			->setCellValue('P11','Jumlah')
// 			->setCellValue('Q11','Satuan')
// 			->setCellValue('R11','Jumlah')
// 			->setCellValue('S11','Satuan')
// 			->setCellValue('T10','RKBMD Yang Disetujui')
// 			->setCellValue('T11','Jumlah')
// 			->setCellValue('U11','Satuan')
// 			->setCellValue('V10','Cara Pemenuhan')
// 			->setCellValue('W10','Keterangan')
// 			->setCellValue('C12','1')
// 			->setCellValue('D12','2')
// 			->setCellValue('H12','3')
// 			->setCellValue('I12','4')
// 			->setCellValue('J12','5')
// 			->setCellValue('K12','6')
// 			->setCellValue('L12','7')
// 			->setCellValue('M12','8')
// 			->setCellValue('N12','9')
// 			->setCellValue('O12','10')
// 			->setCellValue('P12','11')
// 			->setCellValue('Q12','12')
// 			->setCellValue('R12','13')
// 			->setCellValue('S12','14')
// 			->setCellValue('T12','15')
// 			->setCellValue('U12','16')
// 			->setCellValue('V12','17')
// 			->setCellValue('W12','18');
// $objPHPExcel->getActiveSheet() //Merge
// 			->mergeCells('C10:C11')
// 			->mergeCells('D10:K10')
// 			->mergeCells('D11:G11')
// 			->mergeCells('L10:M10')
// 			->mergeCells('N10:Q10')
// 			->mergeCells('R10:S10')
// 			->mergeCells('T10:U10')
// 			->mergeCells('V10:V11')
// 			->mergeCells('W10:W11')
// 			->mergeCells('D12:G12');
// $objPHPExcel->getActiveSheet()->getStyle('C10:W12')->applyFromArray($style);

// // Query Program
// $noCell=13;
// $countProgram='A';
// $countKegiatan=1;
// $queryProgram=mysqli_query($koneksi,"SELECT * FROM program_skpd WHERE(id_skpd='1.01.01.')")or die(mysqli_error($koneksi));
// while($dataProgram=mysqli_fetch_array($queryProgram)){
// 	$objPHPExcel->getActiveSheet()
// 				->setCellValue('D'.$noCell , $countProgram)
// 				->setCellValue('E'.$noCell , 'Program '.$dataProgram['nama_program'])
// 				->mergeCells('E'.$noCell.':G'.$noCell);
// 	$noCell++;

// 	// Query Kegiatan
// 	$idprogram=$dataProgram['id_program'];
// 	$queryKegiatan=mysqli_query($koneksi,"SELECT * FROM kegiatan_program WHERE(id_program=$idprogram)")or die(mysqli_error($koneksi));
// 	$countKegiatan=1;
// 	while($dataKegiatan=mysqli_fetch_array($queryKegiatan)){

// 		$objPHPExcel->getActiveSheet()
// 					->setCellValue('E'.$noCell , $countKegiatan)
// 					->setCellValue('F'.$noCell , 'Kegiatan '.$dataKegiatan['nama_kegiatan'])
// 					->mergeCells('F'.$noCell.':G'.$noCell);
// 		$noCell++;

// 		// Query Output/Usulan
// 		$objPHPExcel->getActiveSheet()
// 						->setCellValue('F'.$noCell,'a.')
// 						->setCellValue('G'.$noCell,'Output :');
// 		$idkegiatan=$dataKegiatan['id_kegiatan'];
// 		$queryUsulan=mysqli_query($koneksi,"SELECT b.kode_barang,nama_barang,jumlah,a.satuan,kuantitas_maks,jumlah_disetujui,cara_pemenuhan 
// 			FROM usulan_barang u, barang b ,aturan a
// 			WHERE(id_kegiatan=$idkegiatan AND b.kode_barang=u.kode_barang AND a.kode_barang=b.kode_barang
// 				AND a.kode_ruangan=u.kode_ruangan AND a.kode_jabatan=u.kode_jabatan)")or die(mysqli_error($koneksi));
// 		while($dataUsulan=mysqli_fetch_array($queryUsulan)){
// 			$objPHPExcel->getActiveSheet()
// 						->setCellValue('H'.$noCell , $dataUsulan['kode_barang'])
// 						->setCellValue('N'.$noCell , $dataUsulan['kode_barang'])
// 						->setCellValue('I'.$noCell , $dataUsulan['nama_barang'])
// 						->setCellValue('O'.$noCell , $dataUsulan['nama_barang'])
// 						->setCellValue('J'.$noCell , $dataUsulan['jumlah'])
// 						->setCellValue('K'.$noCell , $dataUsulan['satuan'])
// 						->setCellValue('L'.$noCell , $dataUsulan['kuantitas_maks'])
// 						->setCellValue('M'.$noCell , $dataUsulan['satuan'])
// 						->setCellValue('Q'.$noCell , $dataUsulan['satuan'])
// 						->setCellValue('S'.$noCell , $dataUsulan['satuan'])
// 						->setCellValue('T'.$noCell , $dataUsulan['jumlah_disetujui'])
// 						->setCellValue('U'.$noCell , $dataUsulan['satuan'])
// 						->setCellValue('V'.$noCell , $dataUsulan['cara_pemenuhan']);
// 			$kodebarang=$dataUsulan['kode_barang'];
// 			$queryOptimasi=mysqli_query($koneksi,"SELECT jumlah_barang,keterangan FROM barang_optimasi WHERE(kode_barang='$kodebarang')")or die(mysqli_error($koneksi));
// 			if($dataOptimasi=mysqli_fetch_array($queryOptimasi)){
// 				$objPHPExcel->getActiveSheet()
// 						->setCellValue('P'.$noCell , $dataOptimasi['jumlah_barang'])
// 						->setCellValue('W'.$noCell , $dataOptimasi['keterangan']);
// 			}else{
// 				$objPHPExcel->getActiveSheet()
// 						->setCellValue('P'.$noCell , '0');
// 			}
// 			$jumlahOptimasi=$objPHPExcel->getActiveSheet()->getCell('P'.$noCell)->getValue();
// 			$jumlahRiil=$dataUsulan['kuantitas_maks']-$jumlahOptimasi;
// 			$objPHPExcel->getActiveSheet()
// 						->setCellValue('R'.$noCell , $jumlahRiil);
// 			$noCell++;			
// 		}
// 		$countKegiatan++;
// 	}
// 	$countProgram++;
// }
// $styleBorder = array(
//       'borders' => array(
//           'allborders' => array(
//               'style' => PHPExcel_Style_Border::BORDER_THIN
//           )
//       )
//   );
// $objPHPExcel->getActiveSheet()->getStyle('C10:W'.$noCell)->applyFromArray($styleBorder);

// //Tandatangan Dan Telah Diperiksa
// $noCell+=3;
// $objPHPExcel->getActiveSheet()
// 			->setCellValue('P'.$noCell,'Cimahi, '.date('d M Y'))
// 			->mergeCells('P'.$noCell.':R'.$noCell)
// 			->setCellValue('P'.(++$noCell),'Disetujui,')
// 			->setCellValue('F'.$noCell,'Telah Diperiksa')
// 			->mergeCells('F'.$noCell.':G'.$noCell)
// 			->mergeCells('P'.$noCell.':Q'.$noCell)
// 			->setCellValue('P'.(++$noCell),'Pengelola Barng')
// 			->setCellValue('F'.$noCell,'No')
// 			->setCellValue('G'.$noCell,'Nama')
// 			->setCellValue('H'.$noCell,'Jabatan')
// 			->setCellValue('I'.$noCell,'Ttd/Paraf')
// 			->setCellValue('J'.$noCell,'Tanggal')
// 			->mergeCells('P'.$noCell.':T'.$noCell)
// 			->setCellValue('F'.(++$noCell),'1')
// 			->setCellValue('F'.(++$noCell),'2');
// $noCell+=2;
// $objPHPExcel->getActiveSheet()
// 			->setCellValue('P'.$noCell,'Regawa')
// 			->mergeCells('P'.$noCell.':Q'.$noCell)
// 			->setCellValue('P'.(++$noCell),'NIP.')
// 			->mergeCells('P'.$noCell.':R'.$noCell);

// foreach(range('C','W') as $columnID) {
//     $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)
//         ->setAutoSize(true);
// }
// $objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(20);

// // Rename worksheet
// $objPHPExcel->getActiveSheet()->setTitle('Simple');
// $objPHPExcel->getActiveSheet()->setShowGridLines(false);

// // Set active sheet index to the first sheet, so Excel opens this as the first sheet
// $objPHPExcel->setActiveSheetIndex(0);

if (!PHPExcel_Settings::setPdfRenderer(
		$rendererName,
		$rendererLibraryPath
	)) {
	die(
		'NOTICE: Please set the $rendererName and $rendererLibraryPath values' .
		'<br />' .
		'at the top of this script as appropriate for your directory structure'
	);
}


// Redirect output to a client’s web browser (PDF)
header('Content-Type: application/pdf');
header('Content-Disposition: attachment;filename="01simple.pdf"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'PDF');
$objWriter->save('php://output');
exit;
?>