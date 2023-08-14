<?php
require('config/conn.php');
session_start();
include_once('TCPDF-main/tcpdf.php');

if (isset($_POST["generate_pdf"])) {
    $month = $_POST['month'];

    $name = $_POST['name'];


    if ($month == 1) {
        $sql = "SELECT  * FROM pay_slip WHERE status=1 and name ='$name' and  MONTH(generated_at) = MONTH(now())
  and YEAR(generated_at) = YEAR(now()) ";
        $result = mysqli_query($connect, $sql);

        $n = $result->num_rows;

        if ($n != 0) {

            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $ename = $row['name'];
            $job = $row['designation'];
            $pay = $row['salary'];
            $head = $row['supervisor'];
            $date = date("M - Y") . "\n";

            //----- Code for generate pdf
            $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
            $pdf->SetCreator(PDF_CREATOR);
            //$pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
            $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
            $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
            $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
            $pdf->SetDefaultMonospacedFont('helvetica');
            $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
            $pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
            $pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);
            $pdf->SetAutoPageBreak(TRUE, 10);
            $pdf->SetFont('helvetica', '', 12);
            $pdf->AddPage(); //default A4
            //$pdf->AddPage('P','A5'); //when you require custome page size 

            $content = '';

            $content .= '
  <span align="center"><img src="./assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" alt="" width="80" height="80" >  </span>
  <h3 align="center">Jaam Communications LLC</h3>
  
 <br /><div></div>
          
            <span align="center">Payment slip for the month:</span>&nbsp;&nbsp;&nbsp;
        <b>' . $date . '</b> <br><br>
        <div class="row">
        <div class="col-md-10">
            
               
               <table border="0" cellspacing="0" cellpadding="3"><tr><td><b>EMP ID: </b> 39124 </td><td></td>
                
                 
                <td><b>EMP Name: </b>' . $ename . ' </td></tr>               
          
           
                <tr><td><b>PF No: </b>101523065714</td> <td></td>
               
             <td><b>Mode of Pay :</b>SBI </td></tr>
              
         
            
           <tr><td><b>Designation: </b>' . $job . '</td><td></td>
                
              <td><b>Ac No: </b> *******0701</td></tr> </table>
                </div>
            </div>
        </div>
        <table border="1" cellspacing="0" cellpadding="3">
           
                <tr>
                    <th width="25%"><b>Earnings</b></th>
                    <th width="25%"><b>Amount</b></th>
                    <th width="25%"><b>Deductions</b></th>
                    <th width="25%"><b>Amount</b></th>
                </tr>
            
            <tbody>
                <tr>
                    <th scope="row">Basic</th>
                    <td>15000</td>
                    <td>Income Tax</td>
                    <td>1800.00</td>
                </tr>
                <tr>
                    <th scope="row">House Rent Allowance</th>
                    <td>5000</td>
                    <td>PF</td>
                    <td>200</td>
                </tr>
                <tr>
                    <th scope="row">Other Allowance</th>
                    <td>7000 </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="border-top">
                <th scope="row"><b>Total Earning</b></th>
                <td>27000.00</td>
                <td><b>Total Deductions</b></td>
                <td>2000.00</td>
            </tr>
            </tbody>
        </table>
    </div><br><br>
    <table cellspacing="0" cellpadding="3"><tr><td><b>Net Pay : ' . $pay . '</b></td><td></td>
      
   <td><b>For Jaam Communication</b></td></tr><tr><td></td><td></td><td>' . $head . '</td></tr></table>
    </div>
</div>
</div>
</div><br>';


            $pdf->writeHTML($content);

            $file_location = "/home/fbi1glfa0j7p/public_html/examples/generate_pdf/uploads/"; //add your full path of your server
            //$file_location = "/opt/lampp/htdocs/examples/generate_pdf/uploads/"; //for local wampp server

            $file_name = "Payslip.pdf";
            ob_end_clean();



            $pdf->Output($file_name, 'D'); // D means download

            //----- End Code for generate pdf

        } else {
            echo 'No records Found!';
        }
    } else if ($month == 2) {
        $sql = "SELECT  * FROM pay_slip WHERE status=1 and name ='$name' and  MONTH(generated_at) = MONTH(now())-1
    and YEAR(generated_at) = YEAR(now()) ";
        $sql1 = "SELECT  * FROM pay_slip WHERE status=1 and name ='$name' and  MONTH(generated_at) = MONTH(now())-2
     and YEAR(generated_at) = YEAR(now()) ";
        $result = mysqli_query($connect, $sql);
        $result1 = mysqli_query($connect, $sql1);

        $n = $result->num_rows;

        if ($n != 0) {

            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
            $ename = $row['name'];
            $job = $row['designation'];
            $pay = $row['salary'];
            $head = $row['supervisor'];
            $date = date("M - Y") . "\n";
            $ename1 = $row1['name'];
            $job1 = $row1['designation'];
            $pay1 = $row1['salary'];
            $head1 = $row1['supervisor'];
            $newDat = date('Y-m-d', strtotime('-1 month'));
            $datey = strtotime($newDat);
            $date1 = date('M Y ', $datey);



            $newDa = date('Y-m-d', strtotime('-2 month'));
            $datex = strtotime($newDa);
            $date2 = date('M Y ', $datex);



            //----- Code for generate pdf
            $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
            $pdf->SetCreator(PDF_CREATOR);
            //$pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
            $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
            $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
            $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
            $pdf->SetDefaultMonospacedFont('helvetica');
            $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
            $pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
            $pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);
            $pdf->SetAutoPageBreak(TRUE, 10);
            $pdf->SetFont('helvetica', '', 12);
            $pdf->AddPage(); //default A4
            //$pdf->AddPage('P','A5'); //when you require custome page size 

            $content = '';

            $content .= '
    <span align="center"><img src="./assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" alt="" width="80" height="80" >  </span>
    <h3 align="center">Jaam Communications LLC</h3>
    
   <br /><div></div>
            
              <span align="center">Payment slip for the month:</span>&nbsp;&nbsp;&nbsp;
          <b>' . $date1 . '</b> <br><br>
          <div class="row">
          <div class="col-md-10">
              
                 
                 <table border="0" cellspacing="0" cellpadding="3"><tr><td><b>EMP ID: </b> 39124 </td><td></td>
                  
                   
                  <td><b>EMP Name: </b>' . $ename . ' </td></tr>               
            
             
                  <tr><td><b>PF No: </b>101523065714</td> <td></td>
                 
               <td><b>Mode of Pay :</b>SBI </td></tr>
                
           
              
             <tr><td><b>Designation: </b>' . $job . '</td><td></td>
                  
                <td><b>Ac No: </b> *******0701</td></tr> </table>
                  </div>
              </div>
          </div>
          <table border="1" cellspacing="0" cellpadding="3">
             
                  <tr>
                      <th width="25%"><b>Earnings</b></th>
                      <th width="25%"><b>Amount</b></th>
                      <th width="25%"><b>Deductions</b></th>
                      <th width="25%"><b>Amount</b></th>
                  </tr>
              
              <tbody>
                  <tr>
                      <th scope="row">Basic</th>
                      <td>15000</td>
                      <td>Income Tax</td>
                      <td>1800.00</td>
                  </tr>
                  <tr>
                      <th scope="row">House Rent Allowance</th>
                      <td>5000</td>
                      <td>PF</td>
                      <td>200</td>
                  </tr>
                  <tr>
                      <th scope="row">Other Allowance</th>
                      <td>7000 </td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr class="border-top">
                  <th scope="row"><b>Total Earning</b></th>
                  <td>27000.00</td>
                  <td><b>Total Deductions</b></td>
                  <td>2000.00</td>
              </tr>
              </tbody>
          </table>
      </div><br><br>
      <table cellspacing="0" cellpadding="3"><tr><td><b>Net Pay : ' . $pay . '</b></td><td></td>
        
     <td><b>For Jaam Communication</b></td></tr><tr><td></td><td></td><td>' . $head . '</td></tr></table>
      </div>
  </div>
  </div>
  </div><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
  <span align="center"><img src="./assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" alt="" width="80" height="80"></span>
  <h3 align="center">Jaam Communications LLC</h3>
  
 <br/><div></div>
            
              <span align="center">Payment slip for the month:</span>&nbsp;&nbsp;&nbsp;
          <b>' . $date2 . '</b> <br><br>
          <div class="row">
          <div class="col-md-10">
              
                 
                 <table border="0" cellspacing="0" cellpadding="3"><tr><td><b>EMP ID: </b> 39124 </td><td></td>
                  
                   
                  <td><b>EMP Name: </b>' . $ename1 . ' </td></tr>               
            
             
                  <tr><td><b>PF No: </b>101523065714</td> <td></td>
                 
               <td><b>Mode of Pay :</b>SBI </td></tr>
                
           
              
             <tr><td><b>Designation: </b>' . $job1 . '</td><td></td>
                  
                <td><b>Ac No: </b> *******0701</td></tr> </table>
                  </div>
              </div>
          </div>
          <table border="1" cellspacing="0" cellpadding="3">
             
                  <tr>
                      <th width="25%"><b>Earnings</b></th>
                      <th width="25%"><b>Amount</b></th>
                      <th width="25%"><b>Deductions</b></th>
                      <th width="25%"><b>Amount</b></th>
                  </tr>
              
              <tbody>
                  <tr>
                      <th scope="row">Basic</th>
                      <td>15000</td>
                      <td>Income Tax</td>
                      <td>1800.00</td>
                  </tr>
                  <tr>
                      <th scope="row">House Rent Allowance</th>
                      <td>5000</td>
                      <td>PF</td>
                      <td>200</td>
                  </tr>
                  <tr>
                      <th scope="row">Other Allowance</th>
                      <td>7000 </td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr class="border-top">
                  <th scope="row"><b>Total Earning</b></th>
                  <td>27000.00</td>
                  <td><b>Total Deductions</b></td>
                  <td>2000.00</td>
              </tr>
              </tbody>
          </table>
      </div><br><br>
      <table cellspacing="0" cellpadding="3"><tr><td><b>Net Pay : ' . $pay1 . '</b></td><td></td>
        
     <td><b>For Jaam Communication</b></td></tr><tr><td></td><td></td><td>' . $head1 . '</td></tr></table>
      </div>
  </div>
  </div>
  </div><br>';


            $pdf->writeHTML($content);

            $file_location = "/home/fbi1glfa0j7p/public_html/examples/generate_pdf/uploads/"; //add your full path of your server
            //$file_location = "/opt/lampp/htdocs/examples/generate_pdf/uploads/"; //for local wampp server

            $file_name = "Payslip.pdf";
            ob_end_clean();



            $pdf->Output($file_name, 'D'); // D means download

            //----- End Code for generate pdf

        } else {
            echo 'No records Found!';
        }
    } else if ($month == 3) {
        $sql = "SELECT  * FROM pay_slip WHERE status=1 and name ='$name' and  MONTH(generated_at) = MONTH(now())-1
    and YEAR(generated_at) = YEAR(now()) ";
        $sql1 = "SELECT  * FROM pay_slip WHERE status=1 and name ='$name' and  MONTH(generated_at) = MONTH(now())-2
     and YEAR(generated_at) = YEAR(now()) ";
        $sql2 = "SELECT  * FROM pay_slip WHERE status=1 and name ='$name' and  MONTH(generated_at) = MONTH(now())-3
      and YEAR(generated_at) = YEAR(now()) ";
        $result = mysqli_query($connect, $sql);
        $result1 = mysqli_query($connect, $sql1);
        $result2 = mysqli_query($connect, $sql2);

        $n = $result->num_rows;

        if ($n != 0) {

            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
            $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
            $ename = $row['name'];
            $job = $row['designation'];
            $pay = $row['salary'];
            $head = $row['supervisor'];

            $ename1 = $row1['name'];
            $job1 = $row1['designation'];
            $pay1 = $row1['salary'];
            $head1 = $row1['supervisor'];
            $date1 = date("M - Y") . "\n";
            $ename2 = $row2['name'];
            $job2 = $row2['designation'];
            $pay2 = $row2['salary'];
            $head2 = $row2['supervisor'];
            $new = date('Y-m-d', strtotime('-3 month'));
            $datez = strtotime($new);
            $date3 = date('M Y ', $datez);



            $newDa = date('Y-m-d', strtotime('-1 month'));
            $datex = strtotime($newDa);
            $date1 = date('M Y ', $datex);



            $newD = date('Y-m-d', strtotime('-2 month'));
            $datey = strtotime($newD);
            $date2 = date('M Y ', $datey);

            //----- Code for generate pdf
            $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
            $pdf->SetCreator(PDF_CREATOR);
            //$pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
            $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
            $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
            $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
            $pdf->SetDefaultMonospacedFont('helvetica');
            $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
            $pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
            $pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);
            $pdf->SetAutoPageBreak(TRUE, 10);
            $pdf->SetFont('helvetica', '', 12);
            $pdf->AddPage(); //default A4
            //$pdf->AddPage('P','A5'); //when you require custome page size 

            $content = '';

            $content .= '  
    <span align="center"><img src="./assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" alt="" width="80" height="80" >  </span>
    <h3 align="center">Jaam Communications LLC</h3>
    
   <br /><div></div>
            
              <span align="center">Payment slip for the month:</span>&nbsp;&nbsp;&nbsp;
          <b>' . $date1 . '</b> <br><br>
          <div class="row">
          <div class="col-md-10">
              
                 
                 <table border="0" cellspacing="0" cellpadding="3"><tr><td><b>EMP ID: </b> 39124 </td><td></td>
                  
                   
                  <td><b>EMP Name: </b>' . $ename . ' </td></tr>               
            
             
                  <tr><td><b>PF No: </b>101523065714</td> <td></td>
                 
               <td><b>Mode of Pay :</b>SBI </td></tr>
                
           
              
             <tr><td><b>Designation: </b>' . $job . '</td><td></td>
                  
                <td><b>Ac No: </b> *******0701</td></tr> </table>
                  </div>
              </div>
          </div>
          <table border="1" cellspacing="0" cellpadding="3">
             
                  <tr>
                      <th width="25%"><b>Earnings</b></th>
                      <th width="25%"><b>Amount</b></th>
                      <th width="25%"><b>Deductions</b></th>
                      <th width="25%"><b>Amount</b></th>
                  </tr>
              
              <tbody>
                  <tr>
                      <th scope="row">Basic</th>
                      <td>15000</td>
                      <td>Income Tax</td>
                      <td>1800.00</td>
                  </tr>
                  <tr>
                      <th scope="row">House Rent Allowance</th>
                      <td>5000</td>
                      <td>PF</td>
                      <td>200</td>
                  </tr>
                  <tr>
                      <th scope="row">Other Allowance</th>
                      <td>7000 </td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr class="border-top">
                  <th scope="row"><b>Total Earning</b></th>
                  <td>27000.00</td>
                  <td><b>Total Deductions</b></td>
                  <td>2000.00</td>
              </tr>
              </tbody>
          </table>
      </div><br><br>
      <table cellspacing="0" cellpadding="3"><tr><td><b>Net Pay : ' . $pay . '</b></td><td></td>
        
     <td><b>For Jaam Communication</b></td></tr><tr><td></td><td></td><td>' . $head . '</td></tr></table>
      </div>
  </div>
  </div>
  </div><br><br><br><br><br><br><br><br><br><br><br><br><br>
    

  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  
<span align="center"><img  align="center" src="./assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg"   alt="" width="80" height="80"></>
  <h3 align="center">Jaam Communications LLC</h3>
  
 
            
              <span align="center">Payment slip for the month:</span>&nbsp;&nbsp;&nbsp;
          <b>' . $date2 . '</b> <br><br>
          <div class="row">
          <div class="col-md-10">
              
                 
                 <table border="0" cellspacing="0" cellpadding="3"><tr><td><b>EMP ID: </b> 39124 </td><td></td>
                  
                   
                  <td><b>EMP Name: </b>' . $ename1 . ' </td></tr>               
            
             
                  <tr><td><b>PF No: </b>101523065714</td> <td></td>
                 
               <td><b>Mode of Pay :</b>SBI </td></tr>
                
           
              
             <tr><td><b>Designation: </b>' . $job1 . '</td><td></td>
                  
                <td><b>Ac No: </b> *******0701</td></tr> </table>
                  </div>
              </div>
          </div>
          <table border="1" cellspacing="0" cellpadding="3">
             
                  <tr>
                      <th width="25%"><b>Earnings</b></th>
                      <th width="25%"><b>Amount</b></th>
                      <th width="25%"><b>Deductions</b></th>
                      <th width="25%"><b>Amount</b></th>
                  </tr>
              
              <tbody>
                  <tr>
                      <th scope="row">Basic</th>
                      <td>15000</td>
                      <td>Income Tax</td>
                      <td>1800.00</td>
                  </tr>
                  <tr>
                      <th scope="row">House Rent Allowance</th>
                      <td>5000</td>
                      <td>PF</td>
                      <td>200</td>
                  </tr>
                  <tr>
                      <th scope="row">Other Allowance</th>
                      <td>7000 </td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr class="border-top">
                  <th scope="row"><b>Total Earning</b></th>
                  <td>27000.00</td>
                  <td><b>Total Deductions</b></td>
                  <td>2000.00</td>
              </tr>
              </tbody>
          </table>
      </div><br><br>
      <table cellspacing="0" cellpadding="3"><tr><td><b>Net Pay : ' . $pay1 . '</b></td><td></td>
        
     <td><b>For Jaam Communication</b></td></tr><tr><td></td><td></td><td>' . $head1 . '</td></tr></table>
      </div>
  </div>
  </div>
  </div></div></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
  <span align="center"><img align="center" src="./assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" alt="" width="80" height="80" >  </span>
    <h3 align="center">Jaam Communications LLC</h3>
    
   <br /><div></div>
            
              <span align="center">Payment slip for the month:</span>&nbsp;&nbsp;&nbsp;
          <b>' . $date3 . '</b> <br><br>
          <div class="row">
          <div class="col-md-10">
              
                 
                 <table border="0" cellspacing="0" cellpadding="3"><tr><td><b>EMP ID: </b> 39124 </td><td></td>
                  
                   
                  <td><b>EMP Name: </b>' . $ename2 . ' </td></tr>               
            
             
                  <tr><td><b>PF No: </b>101523065714</td> <td></td>
                 
               <td><b>Mode of Pay :</b>SBI </td></tr>
                
           
              
             <tr><td><b>Designation: </b>' . $job2 . '</td><td></td>
                  
                <td><b>Ac No: </b> *******0701</td></tr> </table>
                  </div>
              </div>
          </div>
          <table border="1" cellspacing="0" cellpadding="3">
             
                  <tr>
                      <th width="25%"><b>Earnings</b></th>
                      <th width="25%"><b>Amount</b></th>
                      <th width="25%"><b>Deductions</b></th>
                      <th width="25%"><b>Amount</b></th>
                  </tr>
              
              <tbody>
                  <tr>
                      <th scope="row">Basic</th>
                      <td>15000</td>
                      <td>Income Tax</td>
                      <td>1800.00</td>
                  </tr>
                  <tr>
                      <th scope="row">House Rent Allowance</th>
                      <td>5000</td>
                      <td>PF</td>
                      <td>200</td>
                  </tr>
                  <tr>
                      <th scope="row">Other Allowance</th>
                      <td>7000 </td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr class="border-top">
                  <th scope="row"><b>Total Earning</b></th>
                  <td>27000.00</td>
                  <td><b>Total Deductions</b></td>
                  <td>2000.00</td>
              </tr>
              </tbody>
          </table>
      </div><br><br>
      <table cellspacing="0" cellpadding="3"><tr><td><b>Net Pay : ' . $pay2 . '</b></td><td></td>
        
     <td><b>For Jaam Communication</b></td></tr><tr><td></td><td></td><td>' . $head2 . '</td></tr></table>
      </div>
  </div>
  </div>
  </div>';


            $pdf->writeHTML($content);

            $file_location = "/home/fbi1glfa0j7p/public_html/examples/generate_pdf/uploads/"; //add your full path of your server
            //$file_location = "/opt/lampp/htdocs/examples/generate_pdf/uploads/"; //for local wampp server

            $file_name = "Payslip.pdf";
            ob_end_clean();



            $pdf->Output($file_name, 'D'); // D means download

            //----- End Code for generate pdf

        } else {
            echo 'No records Found!';
        }
    } else {
        echo 'No records Found!';
    }
} else {
    $name = ' ';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Get - Payslip</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" rel="icon">
    <link href="assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="assets/vendor/jquery/jquery.js" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">



    <!-- Custom fonts for this template-->
    <link href="./assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="./assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="../img/logo.png" rel="icon">
    <!-- Custom fonts for this template-->
    <link href="./assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https: //unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>

    <style>
        .header {
            color: grey;
            transition: all 0.5s;
            z-index: 997;
            height: 60px;
            box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);
            background-color: #FFFFF7;

            padding-left: 20px;
            /* Toggle Sidebar Button */
            /* Search Bar */
        }

        hr.style2 {
	border-top: 3px double #5A5A5A;
}
    </style>
</head>

<body>

    <div class="fixed-top">
        <div class="container-fluid  navbar-cg p-2" style="margin-bottom:-15px; background-image: url('./assets/img/240_F_303562524_QfNWIptUFfYdGbR0AdcA0wJ0pZuJfW2w.jpg');  
  background-color: #5C00A3;
  height: 500px; 
  background-position: bottom; 
  background-repeat: no-repeat;
  background-size: cover; color:white; height:100px; position:sticky;">
            <center>
                <h4 style="margin-top:15px;">Jaam Communications LLC</h4>
            </center>
        </div>

        <!-- ======= Header ======= -->
        <header id="header" class="header fixed d-flex align-items-center" style="position: sticky;">


            <div class="d-flex align-items-center justify-content-between">
                <a href="./dashboard.php" class="logo d-flex align-items-center">
                    <img src="./assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" alt="" width="100" height="100">

                </a>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- End Logo -->


            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">
                    <li class="nav-item dropdown pe-3">
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2"><?php
                                                                                    echo $_SESSION['uname'];
                                                                                    ?>
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6><?php
                                    echo $_SESSION['uname'];
                                    ?></h6>
                                <span><?php echo $_SESSION['role']; ?></span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="./login/logout.php">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </a>
                            </li>

                        </ul>
                        <!-- End Profile Dropdown Items -->
                    </li>
                    <!-- End Profile Nav -->
                </ul>
            </nav>
            <!-- End Icons Navigation -->

        </header>
        <!-- End Header -->
    </div>

 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar" style="margin-top: 85px; ">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="./dashboard.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->
  <?php
  if ($_SESSION['role'] == 'Admin') {
  ?>




    <li class="nav-item">
      <a class="nav-link collapsed" href="addUser.php">
        <i class="bi bi-person-fill-add"></i>
        <span>Add user</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="updateSalary.php">
        <i class="bi bi-upload"></i>
        <span>Update Salary</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="paySlip.php">
        <i class="bi bi-cash"></i>
        <span>Payslip</span></a>
    </li>


    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#reports-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-receipt"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="reports-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="projectReport.php" class="active">
            <i class="bi bi-circle"></i><span>Project Report</span>
          </a>
          <a href="attendanceReport.php">
            <i class="bi bi-circle"></i><span>Attendance Report</span>
          </a>

          <a href="salaryReport.php">
            <i class="bi bi-circle"></i><span>Salary Report</span>
          </a>

        </li>
      </ul>
    </li>


  <?php
  } else if ($_SESSION['role'] == 'S-Employee') {

  ?>
    <li class="nav-item">
      <a class="nav-link collapsed" href="addProfile.php">
        <i class="bi bi-person-lines-fill"></i>
        <span>Profile info</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="myProject.php">
        <i class="bi bi-display"></i>
        <span>Projects</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link " href="getPayslip.php">
        <i class="bi bi-cash"></i>
        <span>Payslip</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="timeSheet.php">
        <i class="bi bi-clock-history"></i>
        <span>Timesheet</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#leave-nav" data-bs-toggle="collapse" href="#students-nav">
        <i class=" bi bi-calendar3"></i> <span>Leave details</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="leave-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="requestLeave.php">
            <i class="bi bi-circle"></i><span>Request leave</span>
          </a>
        </li>
        <li>
          <a href="manageLeave.php">
            <i class="bi bi-circle"></i><span>My Requests</span>
          </a>
        </li>


      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#subjects-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-display"></i><span>Projects</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="subjects-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="projectAllocation.php">
            <i class="bi bi-circle"></i><span>Project Allocation</span>
          </a>
        </li>
        <li>
          <a href="manageAllocation.php">
            <i class="bi bi-circle"></i><span>Manage Allocation</span>
          </a>
        </li>
      </ul>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#approvals-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-check2-square"></i><span>Approvals</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="approvals-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="leaveRequest.php">
            <i class="bi bi-circle"></i><span>Employee requests</span>
          </a>
        </li>
        <li>
          <a href="approveTimesheet.php">
            <i class="bi bi-circle"></i> <span>Timesheet</span></a>

        </li>
      </ul>
    <?php
  }
  if ($_SESSION['role'] == 'Employee') {
    ?>
      <!-- End Forms Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="addProfile.php">
        <i class="bi bi-person-lines-fill"></i>
        <span>Profile info</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="myProject.php">
        <i class="bi bi-display"></i>
        <span>Projects</span></a>
    </li>


    <li class="nav-item">
      <a class="nav-link " href="getPayslip.php">
        <i class="bi bi-cash"></i>
        <span>Payslip</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="timeSheet.php">
        <i class="bi bi-clock-history"></i>
        <span>Timesheet</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#leave-nav" data-bs-toggle="collapse" href="#students-nav">
        <i class=" bi bi-calendar3"></i> <span>Leave details</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="leave-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="requestLeave.php">
            <i class="bi bi-circle"></i><span>Request leave</span>
          </a>
        </li>

        <li>
          <a href="manageLeave.php">
            <i class="bi bi-circle"></i><span>My Requests</span>
          </a>
        </li>
      </ul>
    </li>

    <!-- End Tables Nav -->
</ul>
<?php } ?>
</aside><!-- End Sidebar-->
    <main id="main" class="main">
        <br><br><br><br>

        <div class="pagetitle">
            <h1> Payslip</h1>

        </div><!-- End Page Title --><br>
        <section class="section">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card "> <div class="container mt-5 mb-5">
                            <div style="float:right;">
                                <form class="form-horizontal" method="post">
                                    <?php
                                    require('config/conn.php');
                                    if (isset($_POST["month"])) {

                                        $month = $_POST['month'];
                                    } else {
                                        $month = '';
                                    }
                                    $sql = "SELECT  * FROM employee_details WHERE status=1 and email ='" . $_SESSION['uname'] . "' ";
                                    $result = mysqli_query($connect, $sql);

                                    $n = $result->num_rows;

                                    if ($n != 0) {
                                        $row = mysqli_fetch_assoc($result);
                                        echo '
<div class="col-md-12 col-lg-4 col-sm-12 col-xl-4">
<input type="hidden" name="month" id="month" class="form-control" value="' . $month . '" " readonly>
<input type="hidden" name="name" id="staff_name" class="form-control" value="' . $row['name'] . '" " readonly></div>';
                                    } ?>
                                    <button type="submit" name="generate_pdf" class="btn btn-primary btn-flat m-b-30 m-t-30">Generate pdf</button>
                                </form>
                            </div><br><br><br>
                        <center>
                            <form class="form-horizontal" method="post" action="getPayslip.php">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-4 control-label"><b>Choose month</b></label>
                                        <div class="col-sm-4">
                                            <select class="form-control" id="month" name="month" required>
                                                <option value="" selected disabled>-- Choose month --</option>
                                                <option value="1">Current month</option>
                                                <option value="2">Last 2 months</option>
                                                <option value="3">Last 3 months</option>

                                            </select>
                                        </div>
                                    </div>
                                </div> <br><br>
                                <button type="submit" name="submit" style="background-color: #333d97;" class="btn btn-primary btn-flat m-b-30 m-t-30">View Payslip</button>
                            </form>
                        </center>
                       
                            <div class="card-body mt-3"><br>
                                <form>

                                    <?php
                                    if (isset($_POST["month"])) {

                                        $month = $_POST['month'];
                                    } else {
                                        $month = '';
                                    }
                                    if ($month == 1) {
                                        $sql7 = "SELECT * FROM employee_details WHERE email='" . $_SESSION['uname'] . "'";
                                        $result7 = mysqli_query($connect, $sql7);

                                        $n7 = $result7->num_rows;

                                        if ($n7 != 0) {
                                            $row7 = mysqli_fetch_assoc($result7);

                                            $name = $row7['name'];
                                        }


                                        $sql = "SELECT  * FROM pay_slip WHERE status=1  and  MONTH(generated_at) = MONTH(now())
  and YEAR(generated_at) = YEAR(now()) and name='$name' ";

                                        $result = mysqli_query($connect, $sql);

                                        $n = $result->num_rows;

                                        if ($n != 0) {
                                            $row = mysqli_fetch_assoc($result);
                                            $date = date("M - Y") . "\n";

                                            echo '
 <div class="row">
 <div class="row">
 <div class="col-md-12">
     <div class="text-center lh-1 mb-2">
     <img src="./assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" alt="" width="90" height="90" >
         <h5 class="fw-bold" >Jaam Communications LLC</h5> 
     </div><br><br>
     <div class="d-flex justify-content-end"> 
     <span class="fw-normal">Payment slip for the month:</span>&nbsp;&nbsp;&nbsp;
 <br><span class="fw-bold">' . $date . '</span></div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6">
                            <div> <span class="fw-bolder">EMP ID</span> <small class="ms-3">39124</small> </div>
                        </div>
                        <div class="col-md-6">
                            <div> <span class="fw-bolder">EMP Name</span> <small class="ms-3">' . $row["name"] . '</small> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div> <span class="fw-bolder">PF No.</span> <small class="ms-3">101523065714</small> </div>
                        </div>
                        <div class="col-md-6">
                            <div> <span class="fw-bolder">Mode of Pay</span> <small class="ms-3">SBI</small> </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div> <span class="fw-bolder">Designation</span> <small class="ms-3">' . $row["designation"] . '</small> </div>
                        </div>
                        <div class="col-md-6">
                            <div> <span class="fw-bolder">Ac No.</span> <small class="ms-3">*******0701</small> </div>
                        </div>
                    </div>
                </div><br><br><br>  <br>
                <table class="mt-4 table table-bordered">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">Earnings</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Deductions</th>
                            <th scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Basic</th>
                            <td>15000</td>
                            <td>Income Tax</td>
                            <td>1800.00</td>
                        </tr>
                        <tr>
                            <th scope="row">House Rent Allowance</th>
                            <td>5000</td>
                            <td>PF</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <th scope="row">Other Allowance</th>
                            <td>7000 </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="border-top">
                        <th scope="row">Total Earning</th>
                        <td>27000.00</td>
                        <td>Total Deductions</td>
                        <td>2000.00</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-4"> <br> <span class="fw-bold">Net Pay : ' . $row["salary"] . '</span> </div>
              
            </div>
            <div class="d-flex justify-content-end">
                <div class="d-flex flex-column mt-2"> <span class="fw-bolder">For Jaam Communication</span> <span class="mt-4">' . $row["supervisor"] . '</span> </div>
            </div>
        </div>
    </div>
</div><br>';
                                        }
                                    } else if ($month == 2) {
                                        $sql7 = "SELECT * FROM employee_details WHERE email='" . $_SESSION['uname'] . "'";
                                        $result7 = mysqli_query($connect, $sql7);

                                        $n7 = $result7->num_rows;

                                        if ($n7 != 0) {
                                            $row7 = mysqli_fetch_assoc($result7);

                                            $name = $row7['name'];
                                        }

                                        $sql = "SELECT  * FROM pay_slip WHERE status=1  and  MONTH(generated_at) = MONTH(now())-1
  and YEAR(generated_at) = YEAR(now()) AND name='$name'";
                                        $sql1 = "SELECT  * FROM pay_slip WHERE status=1  and  MONTH(generated_at) = MONTH(now())-2
     and YEAR(generated_at) = YEAR(now()) AND name='$name'  ";

                                        $result1 = mysqli_query($connect, $sql);



                                        $newDate = date('Y-m-d', strtotime('-2 month'));
                                        $datex = strtotime($newDate);
                                        $date2 = date('M Y ', $datex);
                                        $result = mysqli_query($connect, $sql);

                                        $n = $result->num_rows;

                                        if ($n != 0) {
                                            $row1 = mysqli_fetch_assoc($result1);
                                            $row = mysqli_fetch_assoc($result);
                                            $newDate = date('Y-m-d', strtotime('-1 month'));
                                            $datex = strtotime($newDate);
                                            $date1 = date('M Y ', $datex);

                                            echo ' <div class="row">
<div class="col-md-12">
    <div class="text-center lh-1 mb-2">
    <img src="./assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" alt="" width="90" height="90" >
        <h5 class="fw-bold" >Jaam Communications LLC</h5> 
    </div><br><br>
    <div class="d-flex justify-content-end"> 
    <span class="fw-normal">Payment slip for the month:</span>&nbsp;&nbsp;&nbsp;
<br><span class="fw-bold">' . $date1 . '</span></div>
 <div class="row">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6">
                            <div> <span class="fw-bolder">EMP ID</span> <small class="ms-3">39124</small> </div>
                        </div>
                        <div class="col-md-6">
                            <div> <span class="fw-bolder">EMP Name</span> <small class="ms-3">' . $row["name"] . '</small> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div> <span class="fw-bolder">PF No.</span> <small class="ms-3">101523065714</small> </div>
                        </div>
                        <div class="col-md-6">
                            <div> <span class="fw-bolder">Mode of Pay</span> <small class="ms-3">SBI</small> </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div> <span class="fw-bolder">Designation</span> <small class="ms-3">' . $row["designation"] . '</small> </div>
                        </div>
                        <div class="col-md-6">
                            <div> <span class="fw-bolder">Ac No.</span> <small class="ms-3">*******0701</small> </div>
                        </div>
                    </div>
                </div><br><br><br>  <br>
                <table class="mt-4 table table-bordered">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">Earnings</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Deductions</th>
                            <th scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Basic</th>
                            <td>15000</td>
                            <td>Income Tax</td>
                            <td>1800.00</td>
                        </tr>
                        <tr>
                            <th scope="row">House Rent Allowance</th>
                            <td>5000</td>
                            <td>PF</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <th scope="row">Other Allowance</th>
                            <td>7000 </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="border-top">
                        <th scope="row">Total Earning</th>
                        <td>27000.00</td>
                        <td>Total Deductions</td>
                        <td>2000.00</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-4"> <br> <span class="fw-bold">Net Pay : ' . $row["salary"] . '</span> </div>
              
            </div>
            <div class="d-flex justify-content-end">
                <div class="d-flex flex-column mt-2"> <span class="fw-bolder">For Jaam Communication</span> <span class="mt-4">' . $row["supervisor"] . '</span> </div>
            </div>
        </div>
    </div>
</div><br><hr class="style2">';




                                            echo ' <div class="row">
<div class="col-md-12">
    <div class="text-center lh-1 mb-2">
    <img src="./assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" alt="" width="90" height="90" >
        <h5 class="fw-bold" >Jaam Communications LLC</h5> 
    </div><br><br>
    <div class="d-flex justify-content-end"> 
    <span class="fw-normal">Payment slip for the month:</span>&nbsp;&nbsp;&nbsp;
<br><span class="fw-bold">' . $date2 . '</span></div>
<div class="row">
              <div class="col-md-10">
                  <div class="row">
                      <div class="col-md-6">
                          <div> <span class="fw-bolder">EMP ID</span> <small class="ms-3">39124</small> </div>
                      </div>
                      <div class="col-md-6">
                          <div> <span class="fw-bolder">EMP Name</span> <small class="ms-3">' . $row["name"] . '</small> </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                          <div> <span class="fw-bolder">PF No.</span> <small class="ms-3">101523065714</small> </div>
                      </div>
                      <div class="col-md-6">
                          <div> <span class="fw-bolder">Mode of Pay</span> <small class="ms-3">SBI</small> </div>
                      </div>
                  </div>
                  
                  <div class="row">
                      <div class="col-md-6">
                          <div> <span class="fw-bolder">Designation</span> <small class="ms-3">' . $row["designation"] . '</small> </div>
                      </div>
                      <div class="col-md-6">
                          <div> <span class="fw-bolder">Ac No.</span> <small class="ms-3">*******0701</small> </div>
                      </div>
                  </div>
              </div><br><br><br>  <br>
              <table class="mt-4 table table-bordered">
                  <thead class="bg-dark text-white">
                      <tr>
                          <th scope="col">Earnings</th>
                          <th scope="col">Amount</th>
                          <th scope="col">Deductions</th>
                          <th scope="col">Amount</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <th scope="row">Basic</th>
                          <td>15000</td>
                          <td>Income Tax</td>
                          <td>1800.00</td>
                      </tr>
                      <tr>
                          <th scope="row">House Rent Allowance</th>
                          <td>5000</td>
                          <td>PF</td>
                          <td>200</td>
                      </tr>
                      <tr>
                          <th scope="row">Other Allowance</th>
                          <td>7000 </td>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr class="border-top">
                      <th scope="row">Total Earning</th>
                      <td>27000.00</td>
                      <td>Total Deductions</td>
                      <td>2000.00</td>
                  </tr>
                  </tbody>
              </table>
          </div>
          <div class="row">
              <div class="col-md-4"> <br> <span class="fw-bold">Net Pay : ' . $row["salary"] . '</span> </div>
            
          </div>
          <div class="d-flex justify-content-end">
              <div class="d-flex flex-column mt-2"> <span class="fw-bolder">For Jaam Communication</span> <span class="mt-4">' . $row["supervisor"] . '</span> </div>
          </div>
      </div>
  </div>
</div><br>';
                                        }
                                    } else if ($month == 3) {
                                        $sql7 = "SELECT * FROM employee_details WHERE email='" . $_SESSION['uname'] . "'";
                                        $result7 = mysqli_query($connect, $sql7);

                                        $n7 = $result7->num_rows;

                                        if ($n7 != 0) {
                                            $row7 = mysqli_fetch_assoc($result7);

                                            $name = $row7['name'];
                                        }

                                        $sql = "SELECT  * FROM pay_slip WHERE status=1  and  MONTH(generated_at) = MONTH(now())-1
and YEAR(generated_at) = YEAR(now()) AND name='$name' ";
                                        $sql1 = "SELECT  * FROM pay_slip WHERE status=1  and  MONTH(generated_at) = MONTH(now())-2
 and YEAR(generated_at) = YEAR(now()) AND name='$name' ";
                                        $sql2 = "SELECT  * FROM pay_slip WHERE status=1  and  MONTH(generated_at) = MONTH(now())-3
 and YEAR(generated_at) = YEAR(now()) AND name='$name' ";


                                        $result1 = mysqli_query($connect, $sql1);
                                        $result = mysqli_query($connect, $sql);
                                        $result2 = mysqli_query($connect, $sql2);

                                        $n = $result->num_rows;

                                        if ($n != 0) {
                                            $row = mysqli_fetch_assoc($result);
                                            $row2 = mysqli_fetch_assoc($result2);
                                            $row1 = mysqli_fetch_assoc($result1);
                                            $newDate = date('Y-m-d', strtotime('-3 month'));
                                            $datex = strtotime($newDate);
                                            $date3 = date('M Y ', $datex);



                                            $newDate = date('Y-m-d', strtotime('-1 month'));
                                            $datex = strtotime($newDate);
                                            $date1 = date('M Y ', $datex);



                                            $newDate = date('Y-m-d', strtotime('-2 month'));
                                            $datex = strtotime($newDate);
                                            $date2 = date('M Y ', $datex);

                                            echo ' <div class="row">
<div class="col-md-12">
    <div class="text-center lh-1 mb-2">
    <img src="./assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" alt="" width="90" height="90" >
        <h5 class="fw-bold" >Jaam Communications LLC</h5> 
    </div><br><br>
    <div class="d-flex justify-content-end"> 
    <span class="fw-normal">Payment slip for the month:</span>&nbsp;&nbsp;&nbsp;
<br><span class="fw-bold">' . $date1 . '</span></div>
<div class="row">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6">
                        <div> <span class="fw-bolder">EMP ID</span> <small class="ms-3">39124</small> </div>
                    </div>
                    <div class="col-md-6">
                        <div> <span class="fw-bolder">EMP Name</span> <small class="ms-3">' . $row["name"] . '</small> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div> <span class="fw-bolder">PF No.</span> <small class="ms-3">101523065714</small> </div>
                    </div>
                    <div class="col-md-6">
                        <div> <span class="fw-bolder">Mode of Pay</span> <small class="ms-3">SBI</small> </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div> <span class="fw-bolder">Designation</span> <small class="ms-3">' . $row["designation"] . '</small> </div>
                    </div>
                    <div class="col-md-6">
                        <div> <span class="fw-bolder">Ac No.</span> <small class="ms-3">*******0701</small> </div>
                    </div>
                </div>
            </div><br><br><br>  <br>
            <table class="mt-4 table table-bordered">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col">Earnings</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Deductions</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Basic</th>
                        <td>15000</td>
                        <td>Income Tax</td>
                        <td>1800.00</td>
                    </tr>
                    <tr>
                        <th scope="row">House Rent Allowance</th>
                        <td>5000</td>
                        <td>PF</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <th scope="row">Other Allowance</th>
                        <td>7000 </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="border-top">
                    <th scope="row">Total Earning</th>
                    <td>27000.00</td>
                    <td>Total Deductions</td>
                    <td>2000.00</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-4"> <br> <span class="fw-bold">Net Pay : ' . $row["salary"] . '</span> </div>
          
        </div>
        <div class="d-flex justify-content-end">
            <div class="d-flex flex-column mt-2"> <span class="fw-bolder">For Jaam Communication</span> <span class="mt-4">' . $row["supervisor"] . '</span> </div>
  
</div><br> <br><br><hr class="style2">';



                                            echo ' <div class="row">
<div class="col-md-12">
    <div class="text-center lh-1 mb-2">
    <img src="./assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" alt="" width="90" height="90" >
        <h5 class="fw-bold" >Jaam Communications LLC</h5> 
    </div><br><br>
    <div class="d-flex justify-content-end"> 
    <span class="fw-normal">Payment slip for the month:</span>&nbsp;&nbsp;&nbsp;
<br><span class="fw-bold">' . $date2 . '</span></div>
<div class="row">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6">
                        <div> <span class="fw-bolder">EMP ID</span> <small class="ms-3">39124</small> </div>
                    </div>
                    <div class="col-md-6">
                        <div> <span class="fw-bolder">EMP Name</span> <small class="ms-3">' . $row1["name"] . '</small> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div> <span class="fw-bolder">PF No.</span> <small class="ms-3">101523065714</small> </div>
                    </div>
                    <div class="col-md-6">
                        <div> <span class="fw-bolder">Mode of Pay</span> <small class="ms-3">SBI</small> </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div> <span class="fw-bolder">Designation</span> <small class="ms-3">' . $row1["designation"] . '</small> </div>
                    </div>
                    <div class="col-md-6">
                        <div> <span class="fw-bolder">Ac No.</span> <small class="ms-3">*******0701</small> </div>
                    </div>
                </div>
            </div><br><br><br>  <br>
            <table class="mt-4 table table-bordered">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col">Earnings</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Deductions</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Basic</th>
                        <td>15000</td>
                        <td>Income Tax</td>
                        <td>1800.00</td>
                    </tr>
                    <tr>
                        <th scope="row">House Rent Allowance</th>
                        <td>5000</td>
                        <td>PF</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <th scope="row">Other Allowance</th>
                        <td>7000 </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="border-top">
                    <th scope="row">Total Earning</th>
                    <td>27000.00</td>
                    <td>Total Deductions</td>
                    <td>2000.00</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-4"> <br> <span class="fw-bold">Net Pay : ' . $row1["salary"] . '</span> </div>
          
        </div>
        <div class="d-flex justify-content-end">
            <div class="d-flex flex-column mt-2"> <span class="fw-bolder">For Jaam Communication</span> <span class="mt-4">' . $row1["supervisor"] . '</span> </div>
        </div>
   <br><br><br><hr class="style2">';





                                            echo '  <div class="row">
<div class="col-md-12">
    <div class="text-center lh-1 mb-2">
    <img src="./assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" alt="" width="90" height="90" >
        <h5 class="fw-bold" >Jaam Communications LLC</h5> 
    </div><br><br>
    <div class="d-flex justify-content-end"> 
    <span class="fw-normal">Payment slip for the month:</span>&nbsp;&nbsp;&nbsp;
<br><span class="fw-bold">' . $date3 . '</span></div>
<div class="row">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6">
                        <div> <span class="fw-bolder">EMP ID</span> <small class="ms-3">39124</small> </div>
                    </div>
                    <div class="col-md-6">
                        <div> <span class="fw-bolder">EMP Name</span> <small class="ms-3">' . $row2["name"] . '</small> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div> <span class="fw-bolder">PF No.</span> <small class="ms-3">101523065714</small> </div>
                    </div>
                    <div class="col-md-6">
                        <div> <span class="fw-bolder">Mode of Pay</span> <small class="ms-3">SBI</small> </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div> <span class="fw-bolder">Designation</span> <small class="ms-3">' . $row2["designation"] . '</small> </div>
                    </div>
                    <div class="col-md-6">
                        <div> <span class="fw-bolder">Ac No.</span> <small class="ms-3">*******0701</small> </div>
                    </div>
                </div>
            </div><br><br><br>  <br>
            <table class="mt-4 table table-bordered">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col">Earnings</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Deductions</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Basic</th>
                        <td>15000</td>
                        <td>Income Tax</td>
                        <td>1800.00</td>
                    </tr>
                    <tr>
                        <th scope="row">House Rent Allowance</th>
                        <td>5000</td>
                        <td>PF</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <th scope="row">Other Allowance</th>
                        <td>7000 </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="border-top">
                    <th scope="row">Total Earning</th>
                    <td>27000.00</td>
                    <td>Total Deductions</td>
                    <td>2000.00</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-4"> <br> <span class="fw-bold">Net Pay : ' . $row2["salary"] . '</span> </div>
          
        </div>
        <div class="d-flex justify-content-end">
            <div class="d-flex flex-column mt-2"> <span class="fw-bolder">For Jaam Communication</span> <span class="mt-4">' . $row2["supervisor"] . '</span> </div>
        </div>
    </div>
</div>
</div><br>';
                                        }
                                    }

                                    ?>
                            </div>
        </section>
    </main>
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Jaam</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://dce.techology/">DCE TECHNOLOGY</a>
        </div>
    </footer><!-- End Footer -->



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="./assets/js/ajax.js"></script>

</body>

</html>