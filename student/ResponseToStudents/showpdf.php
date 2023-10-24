<?php
$name=$_GET["name"];
$nationalid=$_GET["nationalid"];
$message_title=$_GET["message_title"];
$research_type=$_GET["research_type"];
$faculty=$_GET["faculty"];
$code_id=$_GET["code_id"];
//$quesm=$_GET["quesm"];
require_once('tcpdf\tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('مركز الخدمات العامة للرسائل العلمية والبحوث');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);


// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
// remove default header/footer

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language dependent data:
$lg = Array();
$lg['a_meta_charset'] = 'UTF-8';
$lg['a_meta_dir'] = 'rtl';
$lg['a_meta_language'] = 'fa';
$lg['w_page'] = 'page';

// set some language-dependent strings (optional)
$pdf->setLanguageArray($lg);

// ---------------------------------------------------------


// add a page
$pdf->AddPage();




// Restore RTL direction
$pdf->setRTL(true);

// set font
$pdf->SetFont('dejavusans', '', 16);
$pdf->Cell(0, 12,  'مركز الخدمات العامة للرسائل العلمية والبحوث'
            , 0, 1,'C');
			$pdf->Cell(0, 12,  'المستودع الرقمي للرسائل العلمية'
            , 0, 1,'C');
			$pdf->Cell(0, 12,  'بيانات طلب فحص موضوع'
            , 0, 1,'C');
			


// Arabic and English content

			 $pdf->Cell(0, 12, ' أسم الباحث :'.$name
            , 0, 1,'R');
			$pdf->Cell(0, 12, ' الرقم القومي :'.$nationalid 
            , 0, 1,'R');
			$pdf->Cell(0, 12, ' الكلية :'.$faculty 
            , 0, 1,'R');
			
			$pdf->Cell(0, 12, ' نوع الدرجة :'.$research_type 
            , 0, 1,'R');
			$pdf->Cell(0, 12, ' عنوان المخطط :'.$message_title 
            , 0, 1,'R');
			$pdf->Cell(0, 12, ' مسلسل رقم :'.$code_id 
            , 0, 1,'R');
			
			$pdf->Ln();
			$pdf->SetFont('dejavusans', '', 14);
			$htmlcontent="";
						$htmlcontent.= '<span color="#FF0000"> تم تسجيل طلبكم بنجاح ،لأ يعتد بهذا الطلب كطلب رسمي الأ  بعد  التوجه الي  مقر المركز لإستيفاء الإجراءات  المالية </span><br />';
						$htmlcontent.= '<span color="#FF0000"> الرجاء طباعة هذه الأستمارة لتقديمهما للموظف المختص بمقر المركز </span><br />';

$htmlcontent.= '<span color="#FF0000"> الرجاء عدم تقديم هذا الطلب مرة أخري علي الموقع، الرجاء التواصل مع الموظف المختص بالمركز اذا أردت القيان بأي تعديلات علي طلبكم هذا </span><br />';
$pdf->WriteHTML($htmlcontent, true, 0, true, 0);
			
			$pdf->Ln();
			$pdf->Ln();
			$pdf->Ln();
		
$pdf->Cell(0,12,'مركز الخدمات العامة للرسائل العلمية والبحوث',0,1,'C');
$pdf->Cell(0,12,'(المبني الإداري بجامعة أسيوط أسفل القاعة الثمانية)',0,1,'C');
session_start(); //to ensure you are using same session

    unset($_SESSION['id_user']);

session_destroy(); //destroy the session

$pdf->Output('OrderRequested.pdf', 'I');

