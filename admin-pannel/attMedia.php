<?php
require_once('tcpdf/tcpdf.php');
include('../dbconnect.php');

$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', true);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetTitle('Media Events Attendance');

$pdf->SetMargins(10, 10, 10);
$pdf->SetAutoPageBreak(TRUE, 10);

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->AddPage();

// Header text
$headerText = 'Media Events Participants';
$pdf->SetFont('helvetica', 'C', 14);
$pdf->Cell(0, 10, $headerText, 0, 1, 'B');

$pdf->Ln(10); // Add some space after the header

// Create a table with cell margins
$html = '<?php
session_start();
echo " <h3>Welcome <span class="stroke1">" . $_SESSION["user_name"] . "</span></h3>";

if (isset($_SESSION["user_name"])) {

} else {
    header("location:../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== BOXICONS ===============-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="adstyles/style1.css">

    <title>EMMOREAL-2024</title>
    <link rel="icon" type="image/png" href="../assets/titleLogo.png"/>
</head>

<body>
    <table border="1" cellpadding="2">
            <tr>
                <th>Serial No.</th>
                <th>Participant Name</th>
                <th>CC Name</th>
                <th>Contact</th>
                <th>Subevent</th>
                <th>Attendace</th>
                <th>PR points</th>
            </tr>';

// Fetch data from the 'fine_arts' table
$sql = "SELECT participantName, ccName, contactNumber, subEvent FROM media_events";
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
            $html .= '<td style="padding: 2px;"></td>';
            $html .= '</tr>';
        }
    } else {
        echo "0 results";
    }
}

$html .= '</table>
</body>
</html>';

$pdf->writeHTML($html, true, false, true, false, '');

$pdf->Output('AttMedia.pdf', 'I');
?>