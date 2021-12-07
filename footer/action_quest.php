<?php


include $_SERVER['DOCUMENT_ROOT'] . '/moodle/mpdf/mpdf.php';

$img1 = $_SERVER['DOCUMENT_ROOT'].'/moodle/images/cs.png';
$img_ques = $_SERVER['DOCUMENT_ROOT'].'/moodle/images/questionnaire.png';
$img_res = $_SERVER['DOCUMENT_ROOT'].'/moodle/images/question.png';
$img_right = $_SERVER['DOCUMENT_ROOT'].'/moodle/images/play-arrow.png';

$per_1 = $_POST['per_1'];
$obs_per_1 = $_POST['obs_per_1'];
$per_2 = $_POST['per_2'];
$obs_per_2 = $_POST['obs_per_2'];
$per_3 = $_POST['per_3'];

$error_message = '';


if ($per_1 == '')
{
  $error_message .= '<p> - Answer the question number 1 *</p>';
}
if ($per_2 == '')
{
  $error_message .= '<p> - Answer the question number 2 *</p>';
}
if ($per_3 == '')
{
  $error_message .= '<p> - Answer the question number 3 *</p>';
}



$html = '
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
.title-black-white {
    background: #000;
    color: #FFF!important;
}
.right {
    float: right;
    width: 68px;
    position: absolute;
    padding: 10px;
  }
  .botm
  {
    margin-bottom: 40px;
  }
  .center {
    display: block;
    margin-left: 280px;
    margin-right: 280px;
    right: 100px;
  }
  .line-bord {
    border: 1px solid #000;
}
.mylabel {
    color: #fff;
    background: #903a8b !important;
}
.align_div {
    margin-bottom: 15px;
}
.w3-padding-8 {
    padding-top: 8px!important;
    padding-bottom: 8px!important;
}
.w3-card-2, .w3-example {
    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;
}
.bolder
{
    font-weight:bold;
}
</style>

<img src="'.$img1.'" class="center">
<div class="botm"></div>
<h3 style="text-align: center;" class="bolder"> Satisfation Questionnaire </h3>
<div class="botm"></div>
<div class="line-bord">
<div class="modal-header title-black-white">
    <h4 class="modal-title bolder" style="color: #fff;"><img src="'.$img_ques.'" class="img-responsive"> Questionnaire - User: '.$_COOKIE['username'].' </h4> 
</div>
<div class="form-horizontal" id="form">
<div class="panel-body" style="padding: 16px; margin-top: -10px;">


<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div bolder"> 
<img src="'.$img_res.'" class="img-responsive">&nbsp;&nbsp;Satisfaction Questionnaire
</h5>

<div class="container">
<div class="row">

<div class="col-xs-12 col-md-12">
<div class="form-group">
<font class="bolder"> 1 - The elearning platform accept all topics desired? </font> 
<br>
<font class="bolder">Answer: </font>'.$per_1.'
<br>
<br>
<img src="'.$img_right.'" class="img-responsive">&nbsp;&nbsp; '.$obs_per_1.'
<br>
<br>


</div>
</div>

<div class="col-xs-12 col-md-12">
<div class="form-group">
<font class="bolder"> 2 - You considerate the elearning platform as a good channel to learn the concept applications? </font>
<br>
<font class="bolder">Answer: </font>'.$per_2.'
<br>
<br>
<img src="'.$img_right.'" class="img-responsive">&nbsp;&nbsp; '.$obs_per_2.'
<br>
<br>

</div>
</div>

<div class="col-xs-12 col-md-12">
<div class="form-group">
<font class="bolder"> 3 - Which improves would you like it? </font>
<br>
<font class="bolder">Answer: </font> '.$per_3.'
<br>
<br>

</div>
</div>






</div>
</div>


</div>
</div>






</div>
</div>

</div>

<br>
Best Regards
<br>
Conceptek a Shiji Group Brand

';


if ($error_message == '')
{






	$mpdf=new mPDF();
	$mpdf->WriteHTML($html);
	$pdfdoc = $mpdf->Output("", "S");
    $attachment = chunk_split(base64_encode($pdfdoc));

    $separator = md5(time());
    $eol = PHP_EOL;

    $attachment = chunk_split(base64_encode($pdfdoc));
    $filename = utf8_decode("Questionnaire - ".$_COOKIE['username']." .pdf");

    $to = "r.peleira@hotmail.com";
    $email = $_COOKIE['email'];
    $nome = $_COOKIE['username'];

    $subject = utf8_decode('Questionnaire - '.$nome);

        $headers  = "From: ".$email.$eol;
        $headers .= "MIME-Version: 1.0".$eol; 
        $headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"". $eol . $eol;

        $info_client =
        "<div style='width:95%; margin-left:2.5%;'>
        <h4>Was sent pdf with informations about the questionnaire user $nome with email $email</h4>
        </div>";

        $info_c = utf8_decode("Howdy $email, the details was sent successfully");

        $body_c = '';
        $body_c .= "Content-Transfer-Encoding: 7bit" . $eol;
    	$body_c .= "This is a MIME encoded message." . $eol; //had one more .$eol

        $body_c .= "--".$separator.$eol;
        $body_c .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
        $body_c .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
        $body_c .= $info_c.$eol;

        $body_c .= "--".$separator.$eol;
        $body_c .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
        $body_c .= "Content-Transfer-Encoding: base64".$eol;
        $body_c .= "Content-Disposition: attachment".$eol.$eol;
        $body_c .= $attachment.$eol;
        $body_c .= "--".$separator."--";

        if (mail($to, $subject, $body_c, $headers)) {

	        $msgsuccess = 'Mail Send Successfully';
	    } else {

	        $msgerror = 'Main not send';
	    }

}

echo $error_message;

?>