<?php
session_start();

if(isset($_SESSION['logged']))
{

header("location:login.php");

}
?>


<html>
<head>

<link rel="stylesheet" href="stylesheets/style.css"/>

<script type="text/javascript">



function check()
{

var c=document.forms["form1"]["uname"].value;
if(c==null ||c=="")
{
alert("enter a username");
return false;
}

var y=document.forms["form1"]["pwd"].value;
if(y==null ||y=="")
{
alert("enter a password");
return false;
}

var z=document.forms["form1"]["mob"].value;
if(z==null ||z=="")
{
alert("enter a mobile num");
return false;
}

var l=z.length;
if(l<10)
{
alert("enter a valid mobile number..it will be useful!");
return false;
}



var d=document.forms["form1"]["email"].value;
if(d==null ||d=="")
{
alert("enter a email id");
return false;
}

var b=document.forms["form1"]["coll"].value;
if(b==null ||b=="")
{
alert("enter a college");
return false;
}


var e=document.forms["form1"]["email"].value;
var atpos=e.indexOf("@");
var dotpos=e.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }


}
</script>


</head>
<body>
<div class="smsg">
<p>sign up to start rocking buddy!</p>
</div>


<div class="frm2">


<form action="signup.php" method="post" onsubmit="return check()" name="form1">

username<br><input type="text" name="uname" size="30" />
<br>
password<br><input type="password" name="pwd" size="30"/>
<br>
mobile<br><input type="text" size="30" name="mob" ONKEYPRESS="if ((event.keyCode < 48) ||
            (event.keyCode > 57)) event.returnValue = false;"/>
<br>
email id<br><input type="text" size="30" name="email" />
<br>
college<br>
<select name="coll">
<option value="COLLEGE OF ENGINEERING GUINDY"> COLLEGE OF ENGINEERING GUINDY, ANNA UNIVERSITY
<option value="A.C. College of Technology, Guindy, CHENNAI
"> A.C. College of Technology, Guindy, CHENNAI

<option value="A.J.College of Engineering, Kelambakkam, CHENNAI
">A.J.College of Engineering, Kelambakkam, CHENNAI

<option value="A.R.J. College of Engineering & Technology, Mannargudi, THIRUVARUR
">A.R.J. College of Engineering & Technology, Mannargudi, THIRUVARUR

<option value="A.V.C.College Of Engineering Mayiladuthurai NAGAPATTINAM
">A.V.C.College Of Engineering Mayiladuthurai NAGAPATTINAM

<option value="Aalim Mohammed Salegh college of Engineering Avadi THIRUVALLUR
">Aalim Mohammed Salegh college of Engineering Avadi THIRUVALLUR

<option value="Aarupadai Veedu Institute of Technology Paiyanoor KANCHEEPURAM
">Aarupadai Veedu Institute of Technology Paiyanoor KANCHEEPURAM

<option value="Adhiparasakthi Engineering College Melmaruvathur KANCHEEPURAM
">Adhiparasakthi Engineering College Melmaruvathur KANCHEEPURAM

<option value="Adhiparasakthi Engineering College for Women, Kalavai, VELLORE">Adhiparasakthi Engineering College for Women, Kalavai, VELLORE
<option value="Adhiyamaan College of Engineering Hosur DHARMAPURI">Adhiyamaan College of Engineering Hosur DHARMAPURI
<option value="Alagappa Chettiar College of Engineering & Technology, Karaikudi">Alagappa Chettiar College of Engineering & Technology, Karaikudi
<option value="Amrita Institute of Technology & Science, Ettimadai, Coimbatore District">Amrita Institute of Technology & Science, Ettimadai, Coimbatore District
<option value="Anand Institute of Higher Technology Kazhipattur KANCHEEPURAM
">Anand Institute of Higher Technology Kazhipattur KANCHEEPURAM

<option value="Angala Amman College of Engineering & Technology Siruganoor TIRUCHIRAPPALLI
">Angala Amman College of Engineering & Technology Siruganoor TIRUCHIRAPPALLI

<option value="Anjalai Ammal Mahalingam Engineering College Kovilvenni THIRUVARUR">Anjalai Ammal Mahalingam Engineering College Kovilvenni THIRUVARUR
<option value="Annai Mathammal Sheela Engineering College Erumaipatti SALEM">Annai Mathammal Sheela Engineering College Erumaipatti SALEM
<option value="Annai Teresa College of Engineering Ulundurpet VILLUPURAM">Annai Teresa College of Engineering Ulundurpet VILLUPURAM
<option value="Annai Velankanni Engineering College Enathur KANCHEEPURAM">Annai Velankanni Engineering College Enathur KANCHEEPURAM
<option value="Annamalai University, Chidambaram, Cuddalore Dist.">Annamalai University, Chidambaram, Cuddalore Dist.
<option value="Arasu Engineering College Kumbakkonam THANJAVUR">Arasu Engineering College Kumbakkonam THANJAVUR
<option value="Arignar Anna Institute of Science & Technology Sriperumpudur KANCHEEPURAM">Arignar Anna Institute of Science & Technology Sriperumpudur KANCHEEPURAM
<option value="Arulmigu Kalasalingam College of Engineering Krishnankoil VIRUDHUNAGAR
">Arulmigu Kalasalingam College of Engineering Krishnankoil VIRUDHUNAGAR

<option value="Arulmigu Meenakshi Amman College of Engineering Vadamavandal TIRUVANNAMALAI
">Arulmigu Meenakshi Amman College of Engineering Vadamavandal TIRUVANNAMALAI

<option value="Arunai Engineering College Mathur TIRUVANNAMALAI">Arunai Engineering College Mathur TIRUVANNAMALAI
<option value="Asan Memorial College of Engineering & Technology Thirukkazhukundram KANCHEEPURAM">Asan Memorial College of Engineering & Technology Thirukkazhukundram KANCHEEPURAM
<option value="Avinashilingam Institute for Home Science & Higher Education for Women Varapalayam Post COIMBATORE">Avinashilingam Institute for Home Science & Higher Education for Women Varapalayam Post COIMBATORE
<option value="Balaji College of Engineering Enathur KANCHEEPURAM">Balaji College of Engineering Enathur KANCHEEPURAM
<option value="Bannari Amman Institute of Technology Sathyamangalam ERODE">Bannari Amman Institute of Technology Sathyamangalam ERODE
<option value="Bhajrang Engineering College Veppampattu THIRUVALLUR">Bhajrang Engineering College Veppampattu THIRUVALLUR
<option value="Bharat Institute Of Science and Technology Selaiyur KANCHEEPURAM">Bharat Institute Of Science and Technology Selaiyur KANCHEEPURAM
<option value="Bharath Niketan Engineering College Andipatti THENI">Bharath Niketan Engineering College Andipatti THENI
<option value="Bharathidasan Engineering College Tirupattur VELLORE">Bharathidasan Engineering College Tirupattur VELLORE
<option value="Bharathidasan Institute of Engineering & Technology Trichy TIRUCHIRAPPALLI">Bharathidasan Institute of Engineering & Technology Trichy TIRUCHIRAPPALLI
<option value="C.Abdul Hakkeem College of Engineering & Technology Melvisharam VELLORE">C.Abdul Hakkeem College of Engineering & Technology Melvisharam VELLORE
<option value="C.S.I Engineering College Ketty, Coonoor NILGIRIS">C.S.I Engineering College Ketty, Coonoor NILGIRIS
<option value="C.S.I Institute of Technology Thovalai KANYAKUMARI">C.S.I Institute of Technology Thovalai KANYAKUMARI
<option value="Cape Institute of Technology Levingipuram TIRUNELVELI">Cape Institute of Technology Levingipuram TIRUNELVELI
<option value="Central Electro Chemical Research Institute, Karaikudi">Central Electro Chemical Research Institute, Karaikudi
<option value="Christian College of Engineering and Technology Ottanchatram DINDIGUL">Christian College of Engineering and Technology Ottanchatram DINDIGUL
<option value="Coimabatore Institute of Engineering and Information Technology, Narasipuram Post, Coimbatore Distt">Coimabatore Institute of Engineering and Information Technology, Narasipuram Post, Coimbatore Distt
<option value="Coimbatore Institute of Technology, Coimbatore
College of Engineering, Guindy, Chennai">Coimbatore Institute of Technology, Coimbatore
College of Engineering, Guindy, Chennai
<option value="Crescent Engineering College Vandalur KANCHEEPURAM">Crescent Engineering College Vandalur KANCHEEPURAM
<option value="D.M.I College of Engineering Nazerethpet THIRUVALLUR">D.M.I College of Engineering Nazerethpet THIRUVALLUR
<option value="Deendayal Engineering College Kunnavalam Post THIRUVALLUR">Deendayal Engineering College Kunnavalam Post THIRUVALLUR
<option value="Dhanalakshmi College of Engineering Manimangalam CHENNAI">Dhanalakshmi College of Engineering Manimangalam CHENNAI
<option value="Dhanalakshmi Srinivasan Engineering College Perambulur PERAMBALUR">Dhanalakshmi Srinivasan Engineering College Perambulur PERAMBALUR
<option value="Dhanish College of Engineering Padappai KANCHEEPURAM">Dhanish College of Engineering Padappai KANCHEEPURAM
<option value="Dr. G.U. Pope College of Engineering Sawyerpuram TUTICORIN">Dr. G.U. Pope College of Engineering Sawyerpuram TUTICORIN
<option value="Dr. Navalar Nedunchezhian College of Engineering Tholudur VILLUPURAM">Dr. Navalar Nedunchezhian College of Engineering Tholudur VILLUPURAM
<option value="Dr.M.G.R Engineering College Maduravoyal CHENNAI">Dr.M.G.R Engineering College Maduravoyal CHENNAI
<option value="Dr.Mahalingam College of Engineering and Technology Pollachi COIMBATORE">Dr.Mahalingam College of Engineering and Technology Pollachi COIMBATORE
<option value="Dr.Pauls Engineering College Vanur VILLUPURAM">Dr.Pauls Engineering College Vanur VILLUPURAM
<option value="Dr.Sivanthi Aditanar College of Engineering Tiruchendur TUTICORIN">Dr.Sivanthi Aditanar College of Engineering Tiruchendur TUTICORIN
<option value="E.V.P Engineering College Chembarampakkam Village THIRUVALLUR">E.V.P Engineering College Chembarampakkam Village THIRUVALLUR
<option value="Easwari Engineering College for Women Ramavaram CHENNAI
">Easwari Engineering College for Women Ramavaram CHENNAI

<option value="Edayathangudi G.S Pillay Engineering College Nagapattinam THIRUVARUR">Edayathangudi G.S Pillay Engineering College Nagapattinam THIRUVARUR
<option value="Edayathangudi G.S Pillay Engineering College Nagapattinam THIRUVARUR">Edayathangudi G.S Pillay Engineering College Nagapattinam THIRUVARUR
<option value="Er. Perumal Manimekalai College of Engineering Nallaganakothapalli DHARMAPURI">Er. Perumal Manimekalai College of Engineering Nallaganakothapalli DHARMAPURI
<option value="Erode Sengunthar Engineering College Thudupathi ERODE">Erode Sengunthar Engineering College Thudupathi ERODE
<option value="Francis Xavier Engineering College Vannarapettai TIRUNELVELI">Francis Xavier Engineering College Vannarapettai TIRUNELVELI
<option value="G.G.R College of Engineering Perumugai VELLORE">G.G.R College of Engineering Perumugai VELLORE
<option value="G.K.M.College of Engineering and Tech Thiruvencherry Village CHENNAI">G.K.M.College of Engineering and Tech Thiruvencherry Village CHENNAI
<option value="Ganadipathy Tulsi's Engineering College Kaniyambadi VELLORE">Ganadipathy Tulsi's Engineering College Kaniyambadi VELLORE
<option value="Govt. College of Engineering Salem SALEM">Govt. College of Engineering Salem SALEM
<option value="Govt. College of Engineering Bargur DHARMAPURI">Govt. College of Engineering Bargur DHARMAPURI
<option value="Govt. College of Engineering Tirunelveli TIRUNELVELI">Govt. College of Engineering Tirunelveli TIRUNELVELI
<option value="Govt. College of Technology Coimbatore COIMBATORE">Govt. College of Technology Coimbatore COIMBATORE
<option value="Hindustan College of Engineering, Padur - Kelambakkam, Chennai">Hindustan College of Engineering, Padur - Kelambakkam, Chennai
<option value="Hindustan College of Engineering and Technology Mandapam Post Othakkaal COIMBATORE">Hindustan College of Engineering and Technology Mandapam Post Othakkaal COIMBATORE
<option value="I.F.E.T College of Engineering Valavanur VILLUPURAM">I.F.E.T College of Engineering Valavanur VILLUPURAM
<option value="Idaya Engineering College for Women Chinnasalem VILLUPURAM">Idaya Engineering College for Women Chinnasalem VILLUPURAM
<option value="IIT-bhubaneswar">IIT-bhubaneswar
<option value="IIT-chennai">IIT-chennai
<option value="IIT-delhi">IIT-delhi
<option value="IIT-gandhinagar">IIT-gandhinagar
<option value="IIT-guwahati">IIT-guwahati

<option value="IIT-hyderabad">IIT-hyderabad
<option value="IIT-kanpur">IIT-kanpur
<option value="IIT-kharagpur">IIT-kharagpur
<option value="IIT-mumbai">IIT-mumbai

<option value="IIT-patna">IIT-patna
<option value="IIT-rookee">IIT-rookee
<option value="IIT-varanasi">IIT-varanasi

<option value="Infant Jesus College of Engineering Srivaikundam TUTICORIN">Infant Jesus College of Engineering Srivaikundam TUTICORIN
<option value="Institute of Road and Transport Technology Erode ERODE">Institute of Road and Transport Technology Erode ERODE
<option value="J.A. Institute of Engineering and Technology Cheyyar CHENNAI">J.A. Institute of Engineering and Technology Cheyyar CHENNAI
<option value="J.J. College of Engineering and Technology Poolankulathupatti TIRUCHIRAPPALLI ">J.J. College of Engineering and Technology Poolankulathupatti TIRUCHIRAPPALLI
<option value="Jaya Engineering College Thiruninravur THIRUVALLUR">Jaya Engineering College Thiruninravur THIRUVALLUR
<option value="Jayam College of Engineering and Technology Nallanur DHARMAPURI">Jayam College of Engineering and Technology Nallanur DHARMAPURI
<option value="Jayamatha Engineering College Aralvaimozhi KANYAKUMARI">Jayamatha Engineering College Aralvaimozhi KANYAKUMARI
<option value="Jayaraj Annapackiam C.S.I. College of Engineering Nazareth TUTICORIN">Jayaraj Annapackiam C.S.I. College of Engineering Nazareth TUTICORIN
<option value="Jayaram College of Engineering and Technology Pagalavadi TIRUCHIRAPPALLI">Jayaram College of Engineering and Technology Pagalavadi TIRUCHIRAPPALLI
<option value="Jeppiar Engineering College, Jeppiar Nagar, Chennai">Jeppiar Engineering College, Jeppiar Nagar, Chennai
<option value="Jerusalam College of Engineering Pallikaranai CHENNAI">Jerusalam College of Engineering Pallikaranai CHENNAI
<option value="Joe Suresh Engineering College Mundradaippu TIRUNELVELI">Joe Suresh Engineering College Mundradaippu TIRUNELVELI
<option value="K.C.G. College of Technology Karapakkam CHENNAI">K.C.G. College of Technology Karapakkam CHENNAI

<option value="K.L.N. College of Engineering Konthagai SIVAGANGAI">K.L.N. College of Engineering Konthagai SIVAGANGAI
<option value="K.L.N. College of Information Technology Konthagai SIVAGANGAI">K.L.N. College of Information Technology Konthagai SIVAGANGAI
<option value="K.S. Rangaswamy College of Technology Tiruchengode SALEM">K.S. Rangaswamy College of Technology Tiruchengode SALEM
<option value="Kalsar College of Engineering Sriperumpudur KANCHEEPURAM">Kalsar College of Engineering Sriperumpudur KANCHEEPURAM
<option value="Kamaraj College of Engineering and Technology Virudhunagar MADURAI">Kamaraj College of Engineering and Technology Virudhunagar MADURAI
<option value="Kamban Engineering College Mathur Post TIRUVANNAMALAI">Kamban Engineering College Mathur Post TIRUVANNAMALAI
<option value="Karpaga Vinayaga College of Engineering and Technology Palayanoor Post KANCHEEPURAM ">Karpaga Vinayaga College of Engineering and Technology Palayanoor Post KANCHEEPURAM

<option value="Karpagam College of Engineering Othakkaal Mandapam Post COIMBATORE ">Karpagam College of Engineering Othakkaal Mandapam Post COIMBATORE

<option value="Karunya Institute of Technology Coimbatore">Karunya Institute of Technology Coimbatore
<option value="Kings College of Engineering Gandarvakottai PUDUKKOTTAI">Kings College of Engineering Gandarvakottai PUDUKKOTTAI
<option value="Kodaikanal Institute of Technology Vilpatti DINDIGUL">Kodaikanal Institute of Technology Vilpatti DINDIGUL
<option value="Kongu Engineering College Perunthurai ERODE">Kongu Engineering College Perunthurai ERODE
<option value="Krishnaswamy College of Engineering and Technology S.Kumarapuram CUDDALORE">Krishnaswamy College of Engineering and Technology S.Kumarapuram CUDDALORE
<option value="Kumaraguru College of Technology Chinnavedampatti Post COIMBATORE">Kumaraguru College of Technology Chinnavedampatti Post COIMBATORE
<option value="Kurinji College of Engineering and Techology Manapparai TIRUCHIRAPPALLI">Kurinji College of Engineering and Techology Manapparai TIRUCHIRAPPALLI

<option value="Lakshmi Chand Rajani College of Engineering and Technology Tiruttani THIRUVALLUR">Lakshmi Chand Rajani College of Engineering and Technology Tiruttani THIRUVALLUR
<option value="Lord Venkateswara Engineering College Pulliampakkam KANCHEEPURAM">Lord Venkateswara Engineering College Pulliampakkam KANCHEEPURAM
<option value="M.A.M College of Engineering Siruganur TIRUCHIRAPPALLI">M.A.M College of Engineering Siruganur TIRUCHIRAPPALLI
<option value="M.I.E.T Engineering College Gundur TIRUCHIRAPPALLI">M.I.E.T Engineering College Gundur TIRUCHIRAPPALLI
<option value="M.Kumarasamy College of Engineering Thalavapalayam Post KARUR">M.Kumarasamy College of Engineering Thalavapalayam Post KARUR
<option value="M.N.M Jain Engineering College Thorapakkam CHENNAI">M.N.M Jain Engineering College Thorapakkam CHENNAI
<option value="M.N.S.K. College of Engineering Arimalam PUDUKKOTTAI">M.N.S.K. College of Engineering Arimalam PUDUKKOTTAI
<option value="M.P Nachimuthu M. Jaganathan Engineering College Perundurai ERODE">M.P Nachimuthu M. Jaganathan Engineering College Perundurai ERODE
<option value="Maamallan Institute of Technology Mamallapuram KANCHEEPURAM">Maamallan Institute of Technology Mamallapuram KANCHEEPURAM

<option value="Madha Engineering College Kunrathur CHENNAI">Madha Engineering College Kunrathur CHENNAI
<option value="Madras Institute of Technology Chromepet CHENNAI">Madras Institute of Technology Chromepet CHENNAI
<option value="Magna College of Engineering Magral THIRUVALLUR">Magna College of Engineering Magral THIRUVALLUR
<option value="Maharaja Engineering College Avinashi COIMBATORE">Maharaja Engineering College Avinashi COIMBATORE
<option value="Mahendra Engineering College Mallasamudram NAMAKKAL">Mahendra Engineering College Mallasamudram NAMAKKAL

<option value="Mailam Engineering College Mailam VILLUPURAM">Mailam Engineering College Mailam VILLUPURAM
<option value="Mariana Engineering College Irungattukottai KANCHEEPURAM">Mariana Engineering College Irungattukottai KANCHEEPURAM
<option value="Maruthi Institute of Engineering and Technology Kolivakkam Village KANCHEEPURAM">Maruthi Institute of Engineering and Technology Kolivakkam Village KANCHEEPURAM

<option value="Measi Academy of Architecture Chennai CHENNAI">Measi Academy of Architecture Chennai CHENNAI
<option value="Meenakshi College of Engineering Uthiramerur KANCHEEPURAM">Meenakshi College of Engineering Uthiramerur KANCHEEPURAM
<option value="Meenakshi Sundarajan Engineering College Kodambakkam CHENNAI">Meenakshi Sundarajan Engineering College Kodambakkam CHENNAI
<option value="Mepco Schlenk Engineering College Sivakasi VIRUDHUNAGAR">Mepco Schlenk Engineering College Sivakasi VIRUDHUNAGAR
<option value="Mohammad Sathak Engineering college Kilakarai RAMANATHAPURAM">Mohammad Sathak Engineering college Kilakarai RAMANATHAPURAM
<option value="Mookambigai College of Engineering keeranur PUDUKKOTTAI">Mookambigai College of Engineering keeranur PUDUKKOTTAI
<option value="Mount Zion College of Engineering and Technology Pilivalam Post PUDUKKOTTAI">Mount Zion College of Engineering and Technology Pilivalam Post PUDUKKOTTAI
<option value="Muthayammal Engineering College Rasipuram NAMAKKAL">Muthayammal Engineering College Rasipuram NAMAKKAL
<option value="Nanda Engineering College Pichandampalayam ERODE">Nanda Engineering College Pichandampalayam ERODE
<option value="Narayanaguru College of Engineering Arumana KANYAKUMARI">Narayanaguru College of Engineering Arumana KANYAKUMARI
<option value="National College of Engineering Maruthukulam TIRUNELVELI">National College of Engineering Maruthukulam TIRUNELVELI
<option value="National Engineering College Nalattinputhur TUTICORIN">National Engineering College Nalattinputhur TUTICORIN
<option value="National Institute of Technology Trichirapalli TIRUCHIRAPPALLI">National Institute of Technology Trichirapalli TIRUCHIRAPPALLI
<option value="National Power Training Institute Neyveli CUDDALORE">National Power Training Institute Neyveli CUDDALORE
<option value="Noorul Islam College of Engineering Kumarakoil KANYAKUMARI">Noorul Islam College of Engineering Kumarakoil KANYAKUMARI
<option value="Odaiyappa College of Engineering and Technology Theni THENI">Odaiyappa College of Engineering and Technology Theni THENI
<option value="Oxford Engineering College Mannachannalur TIRUCHIRAPPALLI">Oxford Engineering College Mannachannalur TIRUCHIRAPPALLI
<option value="P. R. EngineeringCollege Vallam Santh Seethi Village THANJAVUR">P. R. EngineeringCollege Vallam Santh Seethi Village THANJAVUR
<option value="P.A.M. Elizabeth Thomas Engineering College Guduvanchery THIRUVALLUR">P.A.M. Elizabeth Thomas Engineering College Guduvanchery THIRUVALLUR
<option value="P.B. College of Engineering Sriperumpudhur KANCHEEPURAM">P.B. College of Engineering Sriperumpudhur KANCHEEPURAM
<option value="P.G.P. College of Engineering Paramathy Vellur NAMAKKAL">P.G.P. College of Engineering Paramathy Vellur NAMAKKAL
<option value="P.M.R. Institute of Technology Ambathur CHENNAI">P.M.R. Institute of Technology Ambathur CHENNAI
<option value="P.S.G. College of Technology Coimbatore COIMBATORE">P.S.G. College of Technology Coimbatore COIMBATORE
<option value="P.S.N. College of Engineering & Technology Melathidyoor TIRUNELVELI">P.S.N. College of Engineering & Technology Melathidyoor TIRUNELVELI
<option value="P.S.N.A. College of Engineering. & Technology Dindigul DINDIGUL">P.S.N.A. College of Engineering. & Technology Dindigul DINDIGUL
<option value="P.S.R. Engineering College Sevalpatty VIRUDHUNAGAR">P.S.R. Engineering College Sevalpatty VIRUDHUNAGAR
<option value="P.T.Lee Chengalvaraya Naicker College of Engineering & Technology Oovery KANCHEEPURAM">P.T.Lee Chengalvaraya Naicker College of Engineering & Technology Oovery KANCHEEPURAM
<option value="P.T.R. College of Engineering & Technology Austinapatty Post MADURAI">P.T.R. College of Engineering & Technology Austinapatty Post MADURAI
<option value="Paavai Engineering College Pachal Village NAMAKKAL">Paavai Engineering College Pachal Village NAMAKKAL
<option value="Pallavan College of Engineering Thimmasamudram KANCHEEPURAM">Pallavan College of Engineering Thimmasamudram KANCHEEPURAM
<option value="Pandian Saraswathi Yadav Engineering College Tirumanjolai SIVAGANGAI">Pandian Saraswathi Yadav Engineering College Tirumanjolai SIVAGANGAI
<option value="Panimalar Engineering College Nasareth pattai CHENNAI">Panimalar Engineering College Nasareth pattai CHENNAI
<option value="Park College of Engineering and Technology Karumathampatti COIMBATORE">Park College of Engineering and Technology Karumathampatti COIMBATORE
<option value="Pavendar Bharathidasan College of Engineering Mathur PUDUKKOTTAI">Pavendar Bharathidasan College of Engineering Mathur PUDUKKOTTAI
<option value="Periyar Maniammai College of Technology for Women Vallam THANJAVUR">Periyar Maniammai College of Technology for Women Vallam THANJAVUR
<option value="Perumal Sami Rishi Engineering College Silayattam Village KANCHEEPURAM">Perumal Sami Rishi Engineering College Silayattam Village KANCHEEPURAM
<option value="PET College of Engineering Valliyoor TIRUNELVELI">PET College of Engineering Valliyoor TIRUNELVELI
<option value="Prathyusha Engineering College Aranavayal THIRUVALLUR">Prathyusha Engineering College Aranavayal THIRUVALLUR
<option value="Prince Shri Venkateswara Padmavathy Engineering College Ponmar KANCHEEPURAM">Prince Shri Venkateswara Padmavathy Engineering College Ponmar KANCHEEPURAM
<option value="Prithvi Engineering College Kuppandampalayam COIMBATORE">Prithvi Engineering College Kuppandampalayam COIMBATORE
<option value="Priyadarshini Engineering College Vaniambadi VELLORE">Priyadarshini Engineering College Vaniambadi VELLORE
<option value="R.M.D. Engineering College Gummidipoondi THIRUVALLUR">R.M.D. Engineering College Gummidipoondi THIRUVALLUR
<option value="R.M.K. Engineering College Gummidipoondi THIRUVALLUR">R.M.K. Engineering College Gummidipoondi THIRUVALLUR
<option value="R.R. Engineering College Tirchengode NAMAKKAL">R.R. Engineering College Tirchengode NAMAKKAL
<option value="Raja College of Engineering & Technology Veerapanjan MADURAI">Raja College of Engineering & Technology Veerapanjan MADURAI
<option value="Raja Lakshmi Engineering College Thandalam KANCHEEPURAM">Raja Lakshmi Engineering College Thandalam KANCHEEPURAM
<option value="Rajarajeswari Engineering College Adayalampattu THIRUVALLUR">Rajarajeswari Engineering College Adayalampattu THIRUVALLUR
<option value="Rajiv Gandhi College of Engineering Sriperumpudur KANCHEEPURAM">Rajiv Gandhi College of Engineering Sriperumpudur KANCHEEPURAM
<option value="Ranipettai Engineering College Thenkadappanthangal VELLORE">Ranipettai Engineering College Thenkadappanthangal VELLORE
<option value="Ratnavel Subramaniam College of Engineering & Technology Dindigul">Ratnavel Subramaniam College of Engineering & Technology Dindigul
<option value="Roever Engineering College Elambalur PERAMBALUR">Roever Engineering College Elambalur PERAMBALUR
<option value="Royal College of Engineering & Technology Kulathur Taluk. KANCHEEPURAM">Royal College of Engineering & Technology Kulathur Taluk. KANCHEEPURAM
<option value="S M Kader Engineering College Maduramangalam, Sri Perumbudur Taluk KANCHEEPURAM">S M Kader Engineering College Maduramangalam, Sri Perumbudur Taluk KANCHEEPURAM
<option value="S. Veerasawamy Chettiar College of Engineering Puliangudi TIRUNELVELI">S. Veerasawamy Chettiar College of Engineering Puliangudi TIRUNELVELI
<option value="S.A. Engineering College Thiruverkadu THIRUVALLUR">S.A. Engineering College Thiruverkadu THIRUVALLUR
<option value="S.K.P. Engineering College Chinnakangiyanur village TIRUVANNAMALAI">S.K.P. Engineering College Chinnakangiyanur village TIRUVANNAMALAI
<option value="S.K.R. Engineering College Nazarethpet CHENNAI">S.K.R. Engineering College Nazarethpet CHENNAI
<option value="S.N.S. College of Technology Vizhiyampalayam Kalapatty Post COIMBATORE">S.N.S. College of Technology Vizhiyampalayam Kalapatty Post COIMBATORE
<option value="S.R.M. Engineering College Kattankulathur KANCHEEPURAM">S.R.M. Engineering College Kattankulathur KANCHEEPURAM
<option value="S.R.R. Engineering College Padur - Kelambakkam KANCHEEPURAM">S.R.R. Engineering College Padur - Kelambakkam KANCHEEPURAM
<option value="S.S.M. College of Engineering Komarapalayam NAMAKKAL">S.S.M. College of Engineering Komarapalayam NAMAKKAL
<option value="SACS - M.A.V.M.M Engineering College Kidaripatty MADURAI">SACS - M.A.V.M.M Engineering College Kidaripatty MADURAI
<option value="Sakthi Engineering College Mathur KANCHEEPURAM">Sakthi Engineering College Mathur KANCHEEPURAM
<option value="Sakthi Mariamman Engineering College Thandalam KANCHEEPURAM">Sakthi Mariamman Engineering College Thandalam KANCHEEPURAM
<option value="Santhosha Engineering College Chembarampakkam THIRUVALLUR">Santhosha Engineering College Chembarampakkam THIRUVALLUR
<option value="Sapthagiri College of Engineering Periyanahalli DHARMAPURI">Sapthagiri College of Engineering Periyanahalli DHARMAPURI
<option value="Saranathan College of Engineering Panjappur TIRUCHIRAPPALLI">Saranathan College of Engineering Panjappur TIRUCHIRAPPALLI
<option value="Saraswathi Velu College of Engineering Sholingur VELLORE">Saraswathi Velu College of Engineering Sholingur VELLORE
<option value="Sardar Raja College of Engineering Alangulam TIRUNELVELI">Sardar Raja College of Engineering Alangulam TIRUNELVELI
<option value="Sasuri Institute of Engineering & Information Technology Uthukulai ERODE">Sasuri Institute of Engineering & Information Technology Uthukulai ERODE
<option value="Sathyabhama Engineering College Jeppiar Nagar KANCHEEPURAM">Sathyabhama Engineering College Jeppiar Nagar KANCHEEPURAM
<option value="Saveetha Engineering College Thanadalam KANCHEEPURAM">Saveetha Engineering College Thanadalam KANCHEEPURAM
<option value="SCAD College of Engineering & Technology Cheranmadevi TIRUNELVELI">SCAD College of Engineering & Technology Cheranmadevi TIRUNELVELI
<option value="School of Architecture and Planning Guindy CHENNAI">School of Architecture and Planning Guindy CHENNAI
<option value="Seethai Ammal Engineering College Keelankandani SIVAGANGAI">Seethai Ammal Engineering College Keelankandani SIVAGANGAI
<option value="Sengunthur Engineering College Tiruchengode NAMAKKAL">Sengunthur Engineering College Tiruchengode NAMAKKAL
<option value="Sethu Institute of Technology Kariapatti MADURAI">Sethu Institute of Technology Kariapatti MADURAI
<option value="Shanmuga Arts, Science, Technology & Research Tirumalaisamudram THANJAVUR">Shanmuga Arts, Science, Technology & Research Tirumalaisamudram THANJAVUR
<option value="Shanmuganathan Engineering College Pillivalam PUDUKKOTTAI">Shanmuganathan Engineering College Pillivalam PUDUKKOTTAI
<option value="Shree Motilal Kanhaiyalal Fomra Institute of Technology Thaiyur KANCHEEPURAM">Shree Motilal Kanhaiyalal Fomra Institute of Technology Thaiyur KANCHEEPURAM
<option value="Shri Andal Alagar College of Engineering Maduranthakam KANCHEEPURAM">Shri Andal Alagar College of Engineering Maduranthakam KANCHEEPURAM
<option value="Sona College of Technology Salem SALEM">Sona College of Technology Salem SALEM
<option value="Sree Sowdambika College of Engineering Aruppukottai VIRUDHUNAGAR">Sree Sowdambika College of Engineering Aruppukottai VIRUDHUNAGAR
<option value="SreeSastha Institute of Engineering & Technology Chembarapakkam THIRUVALLUR">SreeSastha Institute of Engineering & Technology Chembarapakkam THIRUVALLUR
<option value="Sri Balaji Chockalingam Engineering College Arni TIRUVANNAMALAI">Sri Balaji Chockalingam Engineering College Arni TIRUVANNAMALAI
<option value="Sri Jayaram Engineering College Sellaampuram CUDDALORE">Sri Jayaram Engineering College Sellaampuram CUDDALORE
<option value="Sri Krishna College of Engineering & Technology Kuniamuthur COIMBATORE">Sri Krishna College of Engineering & Technology Kuniamuthur COIMBATORE
<option value="Sri Krishna Engineering College Serpananchery CHENNAI">Sri Krishna Engineering College Serpananchery CHENNAI
<option value="Sri Lakshmi Ammal Engineering College Thiruvencheri KANCHEEPURAM">Sri Lakshmi Ammal Engineering College Thiruvencheri KANCHEEPURAM
<option value="Sri Muthukumaran Institute of Technology Mangadu CHENNAI">Sri Muthukumaran Institute of Technology Mangadu CHENNAI
<option value="Sri Nandanam College of Engineering & Technology Tirupattur VELLORE">Sri Nandanam College of Engineering & Technology Tirupattur VELLORE
<option value="Sri Padmavathi College of Engineering Vadakkupattu KANCHEEPURAM">Sri Padmavathi College of Engineering Vadakkupattu KANCHEEPURAM
<option value="Sri Ramchandra Medical College and Research Institute
Porur, Chennai ">Sri Ramchandra Medical College and Research Institute
Porur, Chennai 
<option value="Sri Ramakrishna Engineering College NGGO Colony Post COIMBATORE">Sri Ramakrishna Engineering College NGGO Colony Post COIMBATORE
<option value="Sri Ramakrishna Institute of Technology Pachapalayam COIMBATORE">Sri Ramakrishna Institute of Technology Pachapalayam COIMBATORE
<option value="Sri Ramanujar Engineering College Vandalur CHENNAI">Sri Ramanujar Engineering College Vandalur CHENNAI
<option value="Sri Sairam Engineering College West Tambaram CHENNAI">Sri Sairam Engineering College West Tambaram CHENNAI
<option value="Sri Sivasubramaniya Nadar College of Engineering Kalavakkam KANCHEEPURAM">Sri Sivasubramaniya Nadar College of Engineering Kalavakkam KANCHEEPURAM
<option value="Sri Subramanya College of Engineering & Technology Palani DINDIGUL">Sri Subramanya College of Engineering & Technology Palani DINDIGUL
<option value="Sri Venkateswara College of Engineering & Technology Thirupachur THIRUVALLUR">Sri Venkateswara College of Engineering & Technology Thirupachur THIRUVALLUR
<option value="Sri Ventateswara College of Engineering Sriperumpudur KANCHEEPURAM">Sri Ventateswara College of Engineering Sriperumpudur KANCHEEPURAM
<option value="Sri Ventateswara Institute of Science & Technology Thipachur THIRUVALLUR">Sri Ventateswara Institute of Science & Technology Thipachur THIRUVALLUR
<option value="Srinivasa College of Engineering & Technology Thalambur Village KANCHEEPURAM">Srinivasa College of Engineering & Technology Thalambur Village KANCHEEPURAM
<option value="Srinivasa Institute of Engineering & Technology Parivakkam Village THIRUVALLUR">Srinivasa Institute of Engineering & Technology Parivakkam Village THIRUVALLUR
<option value="Sriram Engineering College Perumalpattu THIRUVALLUR">Sriram Engineering College Perumalpattu THIRUVALLUR
<option value="St. Joseph's College of Engineering Jeppiar Nagar CHENNAI">St. Joseph's College of Engineering Jeppiar Nagar CHENNAI
<option value="St. Mary's Engineering College Mettupalayam Road COIMBATORE">St. Mary's Engineering College Mettupalayam Road COIMBATORE
<option value="St. Michael College of Engineering & Technology Kalaiyarkoil SIVAGANGAI">St. Michael College of Engineering & Technology Kalaiyarkoil SIVAGANGAI
<option value="St. Peter's Engineering College Avadi CHENNAI">St. Peter's Engineering College Avadi CHENNAI
<option value="St. Xaviers Catholic College of Engineering Chunkankadai KANYAKUMARI">St. Xaviers Catholic College of Engineering Chunkankadai KANYAKUMARI
<option value="Sudharsan Engineering College Kulathur Taluk PUDUKKOTTAI">Sudharsan Engineering College Kulathur Taluk PUDUKKOTTAI
<option value="Sun College of Engineering & Technology Erachakulam KANYAKUMARI">Sun College of Engineering & Technology Erachakulam KANYAKUMARI
<option value="Syed Ammal Engineering College Ramanathapuram RAMANATHAPURAM">Syed Ammal Engineering College Ramanathapuram RAMANATHAPURAM
<option value="T.J. Institute of Technology Karapakkam CHENNAI">T.J. Institute of Technology Karapakkam CHENNAI
<option value="Tagore Engineering College Vandalur KANCHEEPURAM">Tagore Engineering College Vandalur KANCHEEPURAM
<option value="Tamilnadu College of Engineering Karumathampatti COIMBATORE">Tamilnadu College of Engineering Karumathampatti COIMBATORE
<option value="Thangavelu Engineering College Karapakkam CHENNAI">Thangavelu Engineering College Karapakkam CHENNAI
<option value="Thanthai Periyar Govt. Institute of Technology Vellore VELLORE">Thanthai Periyar Govt. Institute of Technology Vellore VELLORE
<option value="The Rajaas Engineering College Vadakkangulam TIRUNELVELI">The Rajaas Engineering College Vadakkangulam TIRUNELVELI
<option value="Thiagarajar College of Engineering Madurai MADURAI">Thiagarajar College of Engineering Madurai MADURAI
<option value="Thirumalai Engineering College Krishnapuram KANCHEEPURAM">Thirumalai Engineering College Krishnapuram KANCHEEPURAM
<option value="Thiruvalluvar College of Engineering & Technology Vandavasi TIRUVANNAMALAI">Thiruvalluvar College of Engineering & Technology Vandavasi TIRUVANNAMALAI
<option value="Trichy Engineering College Konalai TIRUCHIRAPPALLI">Trichy Engineering College Konalai TIRUCHIRAPPALLI
<option value="Udaya School of Engineering Vellamadi Junction KANYAKUMARI">Udaya School of Engineering Vellamadi Junction KANYAKUMARI
<option value="Udayam Engineering College Sriperumbadur KANCHEEPURAM">Udayam Engineering College Sriperumbadur KANCHEEPURAM
<option value="V.L.B. Janaki Ammal College of Engineering & Technology Kovaipudur COIMBATORE">V.L.B. Janaki Ammal College of Engineering & Technology Kovaipudur COIMBATORE
<option value="V.P. Muthiahpillai Meenakshi Ammal Engineering College Krishnankoil VIRUDHUNAGAR">V.P. Muthiahpillai Meenakshi Ammal Engineering College Krishnankoil VIRUDHUNAGAR
<option value="V.R.S. College of Engineering & Technology Arasur VILLUPURAM">V.R.S. College of Engineering & Technology Arasur VILLUPURAM
<option value="V.S.B. Engineering College Karudayampalayam KARUR">V.S.B. Engineering College Karudayampalayam KARUR
<option value="Valliammai Engineering College Kattankulathur KANCHEEPURAM">Valliammai Engineering College Kattankulathur KANCHEEPURAM
<option value="Vel Sri Rangarajan Sakunthala College of Multimedia Avadi CHENNAI">Vel Sri Rangarajan Sakunthala College of Multimedia Avadi CHENNAI
<option value="Vel Sri Rangarajan Sakunthala High Tech. College Avadi CHENNAI">Vel Sri Rangarajan Sakunthala High Tech. College Avadi CHENNAI
<option value="Vel Tech Avadi CHENNAI">Vel Tech Avadi CHENNAI
<option value="Velalar College of Engineering & Technology, Thindal Post ERODE">Velalar College of Engineering & Technology, Thindal Post ERODE
<option value="Velammal Engineering College, Surapet CHENNAI">Velammal Engineering College, Surapet CHENNAI
<option value="Vellore Institute of Technology, Katpadi - Tiruvalam Road VELLORE">Vellore Institute of Technology, Katpadi - Tiruvalam Road VELLORE
<option value="Vickram Institute of Engineering, Enathi SIVAGANGAI">Vickram Institute of Engineering, Enathi SIVAGANGAI
<option value="Vinayaka Mission's Kirupanandha Variyar Engineering College, Periyaseerakapadi SALEM">Vinayaka Mission's Kirupanandha Variyar Engineering College, Periyaseerakapadi SALEM
<option value="Vivekananda College of Engineering for Women, Elayampalayam NAMAKKAL
">Vivekananda College of Engineering for Women, Elayampalayam NAMAKKAL


</options>
</select>
<br><br>
<input type="submit" value="sign up" size="30"/>
</form>
</div>
</body>
</html>
