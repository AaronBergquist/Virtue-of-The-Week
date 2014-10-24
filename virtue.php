<?php
$now = date("Y/m/d");
$date = new DateTime($now);
$week = $date->format("W");

$temperance = array('1', '14', '27', '40');
$silence = array('2', '15', '28', '41');
$order = array('3', '16', '29', '42');
$resolution = array('4', '17', '30', '43');
$frugality = array('5', '18', '31', '44');
$industry = array('6', '19', '32', '45');
$sincerity = array('7', '20', '33', '46');
$justice = array('8', '21', '34', '47');
$moderation = array('9', '22', '35', '48');
$cleanliness = array('10', '23', '36', '49');
$tranquility = array('11', '24', '37', '50');
$chastity = array('12', '25', '38', '51');
$humility = array('13', '26', '39', '52');

if (in_array($week, $temperance)){ ?>

<div class="virtue">Temperance</div> 
<div class="meaning">"Eat not to dullness; drink not to elevation."</div> 

<?php } elseif (in_array($week, $silence)){ ?>

<div class="virtue">Silence</div>
<div class="meaning">"Speak not but what may benefit others or yourself; avoid trifling conversation."</div> 

<?php } elseif (in_array($week, $order)){ ?>

<div class="virtue">Order</div>
<div class="meaning">"Let all your things have their places; let each part of your business have its time."</div>

<?php } elseif (in_array($week, $resolution)){ ?>

<div class="virtue">Resolution</div>
<div class="meaning">"Resolve to perform what you ought; perform without fail what you resolve."</div> 

<?php } elseif (in_array($week, $frugality)){ ?>

<div class="virtue">Frugality</div>
<div class="meaning">"Make no expense but to do good to others or yourself; that is, waste nothing."</div> 

<?php } elseif (in_array($week, $industry)){ ?>

<div class="virtue">Industry</div>
<div class="meaning">"Lose no time; be always employed in something useful; cut off all unnecessary actions."</div> 

<?php } elseif (in_array($week, $sincerity)){ ?>

<div class="virtue">Sincerity</div>
<div class="meaning">"Use no hurtful deceit; think innocently and justly; and, if your speak, speak accordingly."</div> 

<?php } elseif (in_array($week, $justice)){ ?>

<div class="virtue">Justice</div>
<div class="meaning">"Wrong none by doing injuries or omitting the benefits that are your duty."</div> 

<?php } elseif (in_array($week, $moderation)){ ?>

<div class="virtue">Moderation</div>
<div class="meaning">"Avoid extremes; forbear resenting injuries, so much as you think they deserve."</div> 

<?php } elseif (in_array($week, $cleanliness)){ ?>

<div class="virtue">Cleanliness</div>
<div class="meaning">"Tolerate no uncleanliness in body, clothes, or habitation."</div> 

<?php } elseif (in_array($week, $tranquility)){ ?>

<div class="virtue">Tranquility</div>
<div class="meaning">"Be not disturbed at trifles or accidents common or unavoidable."</div> 

<?php } elseif (in_array($week, $chastity)){ ?>

<div class="virtue">Chastity</div>
<div class="meaning">"Rarely use venery but for health or offspring, never to dullness, weakness, or the injury of your own or anothers peace or reputation."</div> 

<?php } elseif (in_array($week, $humility)){ ?>

<div class="virtue">Humility</div>
<div class="meaning">"Imitate Jesus and Socrates."</div>

<?php } 

else {
	echo "Error! Just do good things.";
}
?>
