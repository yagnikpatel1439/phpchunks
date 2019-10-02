<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

#1
if(4 < 3) {
 echo "You know this's wrong";
} elseif (5 < 4) {
	echo "This is too";
} else {
	echo "I love PHP";
}
echo "<br/>";

#2
for ($i=1; $i < 11; $i++) { 
	echo $i . "<br/>";
}

#3
$variable = "Sunday";
switch ($variable) {
	case 'Tuesday':
	echo "10%";
	break;
	case 'Wednesday':
	echo "20%";
	break;
	case 'Thursday':
	echo "30%";
	break;
	case 'Friday':
	echo "40%";
	break;
	case 'Sunday':
	echo "50%";
	break;
	
	default:
		echo "Due for next week";
		break;
}
/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>