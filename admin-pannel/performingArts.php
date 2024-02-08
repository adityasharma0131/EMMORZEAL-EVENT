<?php
require_once('tcpdf/tcpdf.php');
include('../dbconnect.php');

$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetTitle('Performing Arts Participants');

$pdf->SetMargins(10, 10, 10);
$pdf->SetAutoPageBreak(TRUE, 10);

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->AddPage();

// Header text
$headerText = 'Performing Arts Participants';
$pdf->SetFont('helvetica', 'C', 14);
$pdf->Cell(0, 10, $headerText, 0, 1, 'B');

$pdf->Ln(10); // Add some space after the header

// Create a table with cell margins
$html = '<table border="1" cellpadding="2">
            <tr>
                <th>Serial No.</th>
                <th>Participant Name</th>
                <th>CC Name</th>
                <th>Contact</th>
                <th>Subevent</th>
                <th>Signature</th>
            </tr>';

// Fetch data from the 'fine_arts' table
$sql = "SELECT participantName, ccName, contactNumber, subEvent FROM performing_arts";
$result = mysqli_query($conn, $sql);

if ($result === false) {
    // Query execution failed
    echo "Error: " . mysqli_error($conn);
} else {
    if (mysqli_num_rows($result) > 0) {
        $serialNo = 1; // Initialize the serial number
        while ($row = mysqli_fetch_assoc($result)) {
            $html .= '<tr>';
            // First columns with auto-incremented number and fetched data
            $html .= '<td style="padding: 2px;">' . $serialNo++ . '</td>';
            $html .= '<td style="padding: 2px;">' . $row["participantName"] . '</td>';
            $html .= '<td style="padding: 2px;">' . $row["ccName"] . '</td>';
            $html .= '<td style="padding: 2px;">' . $row["contactNumber"] . '</td>';
            $html .= '<td style="padding: 2px;">' . $row["subEvent"] . '</td>';
            // Empty cell for the "Signature" column
            $html .= '<td style="padding: 2px;"></td>';
            $html .= '</tr>';
        }
    } else {
        echo "0 results";
    }
}

$html .= '</table>';

$pdf->writeHTML($html, true, false, true, false, '');

$pdf->Output('performingarts.pdf', 'I');
?>