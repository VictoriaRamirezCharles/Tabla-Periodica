<?php
//Arreglo Principal
$elements  = array(

	array(
		['H', 'no-metales'], 
		['colspan',16], 
		['He', 'gases-nobles']
	),

	array(
		['Li', 'alcalinos'],
		['Be', 'alcalinoterreos'], 
		['colspan', 10], 
		['B', 'metaloides'],
		['C', 'no-metales'],
		['N', 'no-metales'],
		['O', 'no-metales'],
		['F', 'halogenos'],
		['Ne', 'gases-nobles']
	),

	array(
		['Na', 'alcalinos'],
		['Mg', 'alcalinoterreos'], 
		['colspan', 10], 
		['AI', 'otros-metales'],
		['Si', 'metaloides'],
		['P', 'no-metales' ],
		['S', 'no-metales'],
		['CI', 'halogenos'],
		['Ar', 'gases-nobles']
	),
	 array(
		['K', 'alcalinos'],
		['Ca', 'alcalinoterreos'], 
		['Sc', 'metales-transicion'], 
		['Ti', 'metales-transicion'], 
		['V', 'metales-transicion'], 
		['Cr', 'metales-transicion'], 
		['Mn', 'metales-transicion'], 
		['Fe', 'metales-transicion'], 
		['Co', 'metales-transicion'], 
		['Ni', 'metales-transicion'], 
		['Cu', 'metales-transicion'], 
		['Zn', 'metales-transicion'], 
		['Ga', 'otros-metales'],
		['Ge', 'metaloides'],
		['As', 'metaloides'],
		['Se', 'no-metales'],
		['Br', 'halogenos'],
		['Kr', 'gases-nobles']
	),

	 array(
		['Rb', 'alcalinos'],
		['Sr', 'alcalinoterreos'], 
		['Y', 'metales-transicion'], 
		['Zr', 'metales-transicion'], 
		['Nb', 'metales-transicion'], 
		['Mo', 'metales-transicion'], 
		['Tc', 'metales-transicion'], 
		['Ru', 'metales-transicion'], 
		['Rh', 'metales-transicion'], 
		['Pd', 'metales-transicion'], 
		['Ag', 'metales-transicion'], 
		['Cd', 'metales-transicion'], 
		['In', 'otros-metales'],
		['Sn', 'otros-metales'],
		['Sb', 'metaloides'],
		['Te', 'metaloides'],
		['I', 'halogenos'],
		['Xe', 'gases-nobles']
	),

	  array(
		['Cs', 'alcalinos'],
		['Ba', 'alcalinoterreos'], 
		['La-Lu', 'lantanidos'], 
		['Hf', 'metales-transicion'], 
		['Ta', 'metales-transicion'], 
		['W', 'metales-transicion'], 
		['Re', 'metales-transicion'], 
		['Os', 'metales-transicion'], 
		['Ir', 'metales-transicion'], 
		['Pt', 'metales-transicion'], 
		['Au', 'metales-transicion'], 
		['Hg', 'metales-transicion'], 
		['Ti', 'otros-metales'],
		['Pb', 'otros-metales'],
		['Bi', 'otros-metales'],
		['Po', 'metaloides'],
		['At', 'halogenos'],
		['Rn', 'gases-nobles']
	),

	array(
		['Fr', 'alcalinos'],
		['Ra', 'alcalinoterreos'], 
		['Ac-Lr', 'actinidos'], 
		['Rf', 'metales-transicion'], 
		['Db', 'metales-transicion'], 
		['Sg', 'metales-transicion'], 
		['Bh', 'metales-transicion'], 
		['Hs', 'metales-transicion'], 
		['Mt', 'metales-transicion'], 
		['Ds', 'metales-transicion'], 
		['Rg', 'metales-transicion'], 
		['Cn', 'metales-transicion'], 
		['Nh', 'otros-metales'],
		['Fi', 'otros-metales'],
		['Mc', 'otros-metales'],
		['Lv', 'otros-metales'],
		['Ts', 'halogenos'],
		['Og', 'gases-nobles']
	)

);

$elements2 = array(
	array(
		['La', 'lantanidos'],
		['Ce', 'lantanidos'], 
		['Pr', 'lantanidos'], 
		['Nd', 'lantanidos'], 
		['Pm', 'lantanidos'], 
		['Sm', 'lantanidos'], 
		['Eu', 'lantanidos'], 
		['Gd', 'lantanidos'], 
		['Tb', 'lantanidos'], 
		['Dy', 'lantanidos'], 
		['Ho', 'lantanidos'], 
		['Er', 'lantanidos'], 
		['Tm', 'lantanidos'], 
		['Yb', 'lantanidos'],
		['Lu', 'lantanidos']
	
	),
	array(
		['Ac', 'actinidos'],
		['Th', 'actinidos'], 
		['Pa', 'actinidos'], 
		['U', 'actinidos'], 
		['Np', 'actinidos'], 
		['Pu', 'actinidos'], 
		['Am', 'actinidos'], 
		['Cm', 'actinidos'], 
		['Bk', 'actinidos'], 
		['Cf', 'actinidos'], 
		['Es', 'actinidos'], 
		['Fm', 'actinidos'], 
		['Md', 'actinidos'], 
		['No', 'actinidos'],
		['Lr', 'actinidos']
	
	)
	);

$blockElements = ['H'];//Prueba de eliminacion
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilos.css">
	<title>Tabla periódica de los Elementos</title>
</head>
<body>
<h1>Tabla Periódica</h1>
	<table>
		<tbody>
	<?php foreach($elements as $element):  ?>
		<tr>
		<?php foreach($element as $value):  ?>
			<?php if ($value[0] == 'colspan'): ?>
				 <td  colspan="<?php echo "{$value[1]}"; ?>">  
				  </td>
				  <?php else: ?>
				 <td class="<?php echo "{$value[1]}"; ?> td-table <?php if (in_array($value[0], $blockElements)): ?> bElements <?php endif ?>">  
				  	<span ><?php echo "{$value[0]}"; ?></span>	
		       </td>
			<?php endif ?>
		<?php endforeach ?>
		</tr>
	<?php endforeach ?>
	 </tbody>
	</table>

	<table>
		<tbody>
	<?php foreach($elements2 as $element):  ?>
		<tr>
		<?php foreach($element as $value):  ?>
		
				 <td class="<?php echo "{$value[1]}"; ?> td-table <?php if (in_array($value[0], $blockElements)): ?> bElements <?php endif ?>">  
				  	<span ><?php echo "{$value[0]}"; ?></span>	
		       </td>
		
		<?php endforeach ?>
		</tr>
	<?php endforeach ?>
	 </tbody>
	</table>

	<h2>Leyenda</h2>
<div class="container">
  <div class="alcalinos">Alcalinos</div>
  <div class="alcalinoterreos">Alcalinoterreos</div>
  <div class="metales-transicion">Metales de Transicion/ Bloque D</div>
  <div class="lantanidos">Lantanidos</div>
  <div class="actinidos">Actinidos</div>
  <div class="otros-metales ">Otros Metales </div>
  <div class="metaloides  ">Metaloides </div>
  <div class="no-metales">No Metales </div>
  <div class="halogenos">Halogenos </div>
  <div class="gases-nobles">Gases Nobles </div>
  </div>
</body>
</html>