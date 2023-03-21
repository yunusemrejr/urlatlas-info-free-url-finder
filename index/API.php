<?php

$url=$value;

$ip = gethostbyname(parse_url($url)['host']);

$DNS_CNAME = dns_get_record(parse_url("$url")['host'],DNS_CNAME);
$DNS_MX = dns_get_record(parse_url("$url")['host'],DNS_MX);
$DNS_NS = dns_get_record(parse_url("$url")['host'],DNS_NS);
$DNS_PTR = dns_get_record(parse_url("$url")['host'],DNS_PTR);
$DNS_TXT = dns_get_record(parse_url("$url")['host'],DNS_TXT);
$DNS_HINFO = dns_get_record(parse_url("$url")['host'],DNS_HINFO);
$DNS_A = dns_get_record(parse_url("$url")['host'],DNS_A);
$DNS_CAA = dns_get_record(parse_url("$url")['host'],DNS_CAA);
$DNS_SOA = dns_get_record(parse_url("$url")['host'],DNS_SOA);
$DNS_AAAA = dns_get_record(parse_url("$url")['host'],DNS_AAAA);
$DNS_A6 = dns_get_record(parse_url("$url")['host'],DNS_A6);

 
$DNS_arr = array($DNS_CNAME[0]['target'],$DNS_MX[0]['target'],$DNS_NS[0]['target']
,$DNS_PTR[0]['target'],$DNS_TXT[0]['target'],$DNS_HINFO[0]['target'],$DNS_A[0]['ip'],$DNS_CAA[0]['target'],$DNS_SOA[0]['target'],$DNS_AAAA[0]['target'],$DNS_A6[0]['target']);

   for($i=0; $i < count($DNS_arr); $i++){          

      if($DNS_arr[$i]==null||strval($DNS_arr[$i])==""||strval($DNS_arr[$i]==" ")){
     $DNS_arr[$i]="?";
}
  }
  
  
   $domain = parse_url("$url")['host'];

 




$outputjs="<script>bootbox.alert('".

"<h2><i style=\"color:blue\" aria-hidden=\"true\" class=\"fa fa-envelope-open-o\"></i> Parsing & WHOIS Results:</h2><br>".

"<b>Scheme: </b> ".

parse_url($url)['scheme'].



"<br><b>Host: </b> ".

parse_url($url)['host'].



"<br><b>Path: </b> ".

parse_url($url)['path'].



"<br><b>Fragment: </b> ".

parse_url($url)['fragment'].


 "<br><b>IP: </b> ".

$ip.


 "<br><b>DNS CNAME: </b>".

$DNS_arr[0].


 "<br><b>DNS MX: </b>".

$DNS_arr[1].


 "<br><b>DNS NS: </b>".

$DNS_arr[2].



 "<br><b>DNS A: </b>".

$DNS_arr[6].

 "<br><b>DNS PTR: </b>".

$DNS_arr[3].



 "<br><b>DNS TXT: </b>".

$DNS_arr[4].


 "<br><b>DNS HINFO: </b>".

$DNS_arr[5].


 "<br><b>DNS CAA: </b>".

$DNS_arr[7].


 "<br><b>DNS  SOA: </b>".

$DNS_arr[8].




 "<br><b>DNS AAAA: </b>".

$DNS_arr[9].




 "<br><b>DNS A6: </b>".

$DNS_arr[10].



 "<br><br><h3><i style=\"color:green\" aria-hidden=\"true\" class=\"fa  fa-globe\"></i> Discover This Site on: </h3><br>".
 
"<b>Web Archive: </b><a target=\"_blank\" href=\"https://web.archive.org/web/$domain\">https://web.archive.org/web/$domain</a><br>".
   
"<b>Archive.is: </b><a target=\"_blank\" href=\"https://archive.is/$domain\">https://archive.is/$domain</a><br>".

"<b>Whois.com: </b><a target=\"_blank\" href=\"https://www.whois.com/whois/$domain\">https://www.whois.com/whois/$domain</a><br>".

 "<b>Who.is: </b><a target=\"_blank\" href=\"https://who.is/whois/$domain\">https://who.is/whois/$domain</a><br>".



"');</script>";

    
?>
