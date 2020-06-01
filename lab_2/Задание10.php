<?PHP
print "<table border=1>\n";
for ($y=1; $y <= 10; $y++) {
     print "<tr>\n";
     for ($x=1; $x <= 10; $x++) {
          print "\t<td>";
          ++$chislo;
          
          $Prosto_stroka=false;
          for ($n=1; $n<=1; $n++)
          {
            if ($chislo % 2 ==0)  
            {
                print "<font style=\"color:#FF0000\">$chislo</font>";
                $Prosto_stroka = true;
                break;
            }
          }
          if ($Prosto_stroka==false)
          {
              print ($chislo);
          }
          print "</td>\n";
          }
     print "</tr>\n";
     }
print "</table>";


?>