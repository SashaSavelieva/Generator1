<?php 


function rand_number() {
	echo rand(0,9);
}

function rand_abc() {
	 $arr=array( 'a','b','c','d', 'e', 'f', 'g','h','i','g','l','m','n','o','p','r','s','t','u','v','w','x','y','z' );
	$x = rand(0,23);
	// echo "(".$x.")";
	echo $arr[$x];
}
function rand_abc_big(){
	$arr=array ('A', 'B','C','D','E','F','G','H','I','G','L','M','N','O','P','R','S','T','U','V','W','X','Y','Z');
	$y=rand(0,23);
	echo $arr[$y];
}
function rand_sumb(){
	$arr=array ('!', '@','#','$','%','^','&','*','(',')','_','-','{','}','<','>');
	$s=rand(0,15);
	echo $arr[$s];
}

function random($kol,$abc,$num,$ABC,$sumb) {
	
 $i=1;
 while ( $i<= $kol) {

 	//123151351
 	if ($_GET['num']==1 and !$abc==1 and !$ABC==1 and !$sumb==1 ) {
		 rand_number();
	}
	//fgdgfhfh
	elseif ($abc==1 and !$num==1 and !$ABC==1 and !$sumb==1 ) {
		rand_abc();
	}
	//aa7ss
	elseif ($abc==1 and $num==1 and !$ABC==1 and !$sumb==1 ) {
			$ug = rand (0,1);	
			if ($ug == 0) {
			 rand_abc();
		}			
		elseif ($ug == 1) {
			rand_number();	
		}
	}
	//HKJKHJ
	elseif (!$abc==1 and !$num==1 and $ABC==1 and !$sumb==1) {
		rand_abc_big();
	}
	elseif (!$abc==1 and $num=1 and $ABC==1 and !$sumb==1) {
			$ug = rand (0,1);	
			if ($ug == 0) {
			 rand_abc_big();
		}			
		elseif ($ug == 1) {
			rand_number();	
		}
	}
	//dsFf
	elseif ($abc==1 and !$num==1 and $ABC==1 and !$sumb==1) {
			$ug = rand (0,1);	
			if ($ug == 0) {
			 rand_abc_big();
		}			
		elseif ($ug == 1) {
			rand_abc();	
		}
	}
	//-)(__+)
	elseif (!$abc==1 and !$num==1 and !$ABC==1 and $sumb==1 ) {
			rand_sumb();
	}
	//AAA*_%
	elseif (!$abc==1 and !$num==1 and $ABC==1 and $sumb==1 ) {
			
			$ug = rand (0,1);	
			if ($ug == 0) {
			 rand_abc_big();
		}			
		elseif ($ug == 1) {
			rand_sumb();	
		}


	}//&^34
	elseif (!$abc==1 and $num==1 and !$ABC==1 and $sumb==1 ) {
		
				$ug = rand (0,1);	
			if ($ug == 0) {
			 rand_number();
		}			
		elseif ($ug == 1) {
			rand_sumb();	
		}

	}
	//sd$!@d
	elseif ($abc==1 and !$num==1 and !$ABC==1 and $sumb==1 ) {
			$ug = rand (0,1);	
			if ($ug == 0) {
			 rand_abc();
		}			
		elseif ($ug == 1) {
			rand_sumb();	
		}

	}

	//223(^%)ACD
	elseif (!$abc==1 and $num==1 and $ABC==1 and $sumb==1 ) {
			$ug = rand (0,2);	
			if ($ug == 0) {
			 rand_number();
		}		
		
		elseif ($ug == 1) {
			rand_abc_big();	
		}
		elseif ($ug == 2) {
			rand_sumb();	
		}
	}
	//#@@&FHSVsad
	elseif ($abc==1 and !$num==1 and $ABC==1 and $sumb==1 ) {
			$ug = rand (0,2);	
			
		if ($ug == 1) {
			rand_abc();	
		}
		elseif ($ug == 2) {
			rand_abc_big();	
		}
		elseif ($ug == 3) {
			rand_sumb();	
		}
	}
	//34FdSA6
	elseif ($abc==1 and $num==1 and $ABC==1 and !$sumb==1 ) {
			$ug = rand (0,2);	
			if ($ug == 0) {
			 rand_number();
		}
		elseif ($ug == 1) {
			rand_abc();	
		}
		elseif ($ug == 2) {
			rand_abc_big();	
		}
		
		
	}
	
	elseif ($abc==1 and $num==1 and  $ABC==1 and $sumb==1) {
		$ug = rand (0,3);	
			if ($ug == 0) {
			 rand_number();
		}
		elseif ($ug == 1) {
			rand_abc();	
		}
		elseif ($ug == 2) {
			rand_abc_big();	
		}
		elseif ($ug == 3) {
			rand_sumb();	
		}
	}

		$i++;
	}
 	


}



// random($_GET['kol'],$_GET['abc'],$_GET['num'],$_GET['ABC'],$_GET['sumb']);



 ?>