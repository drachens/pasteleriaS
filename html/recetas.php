<?php 
	include_once("header.php");
	$key_current = $_GET["Receta_s"];
	$InfoRecetas = $client->piñufle->InfoRecetas->findOne(['_id' => new MongoDB\BSON\ObjectID($key_current)]);
	$current_rec = $InfoRecetas['_id'];
	$name_receta = $InfoRecetas['name'];
	$imagen = $InfoRecetas['imagen'];
	if ($key_current == "5ebde59a194d565fcffeefc5" ) {		  //Pan Marraqueta
?>		
<header>
	<title>Recetas: <?php echo "$name_receta" ?> </title>
</header>
	<nav class="Categorias">
		<ul>
			<li class="ref"><a class="ref1" href="index.php">Inicio</a></li>
			<li><a href="menu_recetas.php">Recetas</a></li>
			<li><a><?php echo "$name_receta"; ?></a></li>
		</ul>
	<br>
	<h1 class="adv" style="color:#c00505">Quedate en casa, cuidate y cuida a los demás.</h1>
	</nav>
	<section class="pre-info">

		<div class="imgR">
			<div class="titlE">
				<p><?php echo "$name_receta"; ?></p>
				<hr>
			</div>
			<img src="<?php echo "$imagen"  ?>" >
		</div>
	</section>
	<section class="info">
		<div class="ingredientes">
			<img src="https://www.gourmet.cl/wp-content/themes/gourmet/img/icons/sombrero.png"  width="24px">
			<p>Ingredientes</p>
			<br>
			<ul>
				<li>1kg de Harina simple</li>
				<li>20gr de Levadura</li>
				<li>1/2 cucharada sopera de Azúcar</li>
				<li>100ml de Aceite</li>
				<li>500ml de Agua</li>
				<li>1 pizca de Sal</li>

			</ul>
		</div>
		<div class="preparacion">
			<img src="https://www.gourmet.cl/wp-content/themes/gourmet/img/icons/cubierto.png"  width="24px">
			<p>Preparación</p>
			<br>
			<ol>
				<li>Primero, mezcla la levadura y el azúcar con el agua tibia y deja reposar la mezcla del pan batido unos 15 minutos para que aumente su volumen.</li>
				<li>Incorpora la mezcla anterior en un volcán de harina sobre una superficie para amasar. Disuelve la sal en otra media taza agua tibia y agrégalo también a la harina para continuar con la elaboración del pan amasado chileno</li>
				<li>Añade el aceite y amasa durante unos 30 minutos aproximadamente y ve agregando agua tibia para dar consistencia a la masa de las marraquetas chilenas.</li>
				<li>Al terminar de amasar el pan batido, sacamos inmediatamente las porciones de masa para dar forma a los panes amasados chilenos. Esta técnica consiste en sacar pares de esferas de masas, unirlas solo de un toque y aplastarlas un poco con las manos contra una superficie.</li>
				<li>Luego, cuando vemos que tenemos dos círculos de masa unidos en forma de 8, le hundimos un palo o listón de unos 2 cm de diámetro a lo largo, dejando una marca cargada a lo largo del pan, el cual queda de unos 15 a 20 cm de largo por 7 a 9 de ancho.</li>
				<li>Después, damos una pincelada de aceite a cada marraqueta chilena y las dejamos reposar durante 30 minutos.</li>
				<li>Mientras, encendemos el horno a alta temperatura (unos 250 ºC) y para que nuestras marraquetas chilenas queden como en la fábrica, se debe colocar una fuente grande con agua hirviendo dentro del horno y se deja calentar al menos 15 minutos antes de poner el pan amasado esponjoso.</li>
				<li>Luego, en una bandeja previamente engrasada con aceite, se debe poner el pan batido y hornear a fuego medio durante 1 hora aproximadamente, o hasta que veamos que ya está bien dorado. Mantenemos durante todo el tiempo de cocción la fuente con agua en el horno, y si se agota la reponemos con más agua hirviendo.</li>
			</ol>
		</div>
	</section>
	<?php
		}
	?>	

	<?php
	if ($key_current == "5ebde643194d565fcffeefc6" ) {		  //Pan integral
	?>		
		<header>
		<title>Recetas: <?php echo "$name_receta" ?> </title>
		</head>
		<nav class="Categorias">
			<ul>
				<li class="ref"><a class="ref1" href="index.php">Inicio</a></li>
				<li><a>Recetas</a></li>
				<li><a><?php echo "$name_receta"; ?></a></li>
			</ul>
		</nav>
		<section class="pre-info">

			<div class="imgR">
				<div class="titlE">
					<p><?php echo "$name_receta"; ?></p>
					<hr>
				</div>
				<img src="<?php echo "$imagen"  ?>" >
			</div>
		</section>
		<section class="info">
			<div class="ingredientes">
				<img src="https://www.gourmet.cl/wp-content/themes/gourmet/img/icons/sombrero.png"  width="24px">
				<p>Ingredientes</p>
				<br>
				<ul>
					<li>1/2kg de harina de trigo integral 100% (o de espelta, de centeno, etc...)</li>
					<li>8gr de levadura seca de panadería </li>
					<li>400ml de agua templada/tibia</li>
					<li>1 cucharada chica de sal </li>
				</ul>
			</div>
			<div class="preparacion">
				<img src="https://www.gourmet.cl/wp-content/themes/gourmet/img/icons/cubierto.png"  width="24px">
				<p>Preparación</p>
				<br>
				<ol>
					<li>Mezcla en un bol la harina integral de trigo con la levadura seca de panadería y la cucharada de sal. Si te gusta puedes añadir en este momento algunas semillas o pipas de frutos secos a la masa del pan integral casero fácil y rápido que vamos a hacer.</li>
					<li>Añade el agua tibia poco a poco a los ingredientes secos, chorrito a chorrito, y ves mezclándolo todo hasta conseguir una masa homogénea. No es necesario que amases mucho el pan casero con harina de trigo integral porque igualmente leudará por la acción de la levadura seca y se desarrollará el gluten.</li>
					<li>Deja fermentar el pan integral sin amasar durante 2 horas en el mismo bol tapado con un paño húmedo en un lugar sin corrientes de aire.</li>
					<li>Pasadas las horas, tendrás una masa de pan integral casero sin azúcar ni aceite ni leche que habrá doblado su volumen por la acción de la levadura de panadería seca. En este momento, precalienta el horno a 200 ºC.</li>
					<li>Engrasa un molde rectangular de metal de unos 20-25 cm de largo con un poco de aceite, u omite este paso si es de silicona, y vierte la masa extendiéndola con una espátula o lengua de cocina de manera uniforme.</li>
					<li>Hornea el pan integral casero esponjoso a 200 ºC durante unos 20 minutos y después, baja la temperatura a 170 ºC y termina de cocerlo unos 25 minutos más. En total tiene que estar en el horno unos 45 minutos.</li>
					<li>Recién horneado, intenta desmoldar el pan casero con harina integral fácil y deja que se enfríe sobre una rejilla o algo similar.</li>
				</ol>
			</div>
		</section>
		<?php
			include_once("footer.php");
		?>
	<?php
		}
	?>	
	<?php
	if ($key_current == "5ebde666194d565fcffeefc7" ) {		  //Pan molde
	?>		
		<header>
			<title>Recetas: <?php echo "$name_receta" ?> </title>
		</header>
		<nav class="Categorias">
			<ul>
				<li class="ref"><a class="ref1" href="index.php">Inicio</a></li>
				<li><a>Recetas</a></li>
				<li><a><?php echo "$name_receta"; ?></a></li>
			</ul>
		</nav>
		<section class="pre-info">

			<div class="imgR">
				<div class="titlE">
					<p><?php echo "$name_receta"; ?></p>
					<hr>
				</div>
				<img src="<?php echo "$imagen"  ?>" >
			</div>
		</section>
		<section class="info">
			<div class="ingredientes">
				<img src="https://www.gourmet.cl/wp-content/themes/gourmet/img/icons/sombrero.png"  width="24px">
				<p>Ingredientes</p>
				<br>
				<ul>
					<li>250ml de leche templada</li>
					<li>8gr de levadura seca panadero o 20 gr de levadura fresca panadero </li>
					<li>50gr de aceite de oliva virgen extra</li>
					<li>1 cucharada de azúcar</li>
					<li>1 cucharada de miel</li>
					<li>1 cucharadita de sal</li>
					<li>500gr de harina de fuerza</li>
				</ul>
			</div>
			<div class="preparacion">
				<img src="https://www.gourmet.cl/wp-content/themes/gourmet/img/icons/cubierto.png"  width="24px">
				<p>Preparación</p>
				<br>
				<ol>
					<li>Ponemos en un cuenco amplio todos los ingredientes, primero la leche templada, la levadura que disolvemos en la leche, después el aceite, el azúcar, la miel, la sal y la harina. Amasamos todo muy bien, si tenéis alguna amasadora lo tenéis aún más fácil.</li>
					<li>Sacamos del cuenco y ponemos sobre una superficie, lo estiramos y enrollamos como si fuera un brazo de gitano. Lo ponemos en un molde alargado que hemos pincelado muy bien con aceite de oliva virgen extra. Tapamos con un paño y dejamos que la masa doble su volumen.</li>
					<li>Cuando la masa ha subido pincelamos la superficie con leche, con mucha suavidad para que la masa no se baje y metemos en el horno, precalentado, a 200º C, unos 35 minutos. Sacamos del molde y dejamos enfriar sobre una rejilla.</li>
					<li>Si queréis que la corteza esté blandita, cuando saquéis el pan del molde, lo guardáis en una bolsa aún caliente.</li>
				</ol>
			</div>
		</section>
	<?php
		}
	?>		
	<?php
	if ($key_current == "5ebde686194d565fcffeefc8" ) {		  //Pan cebolla
	?>		
		<header>
			<title>Recetas: <?php echo "$name_receta" ?> </title>
		</header>
		<nav class="Categorias">
			<ul>
				<li class="ref"><a class="ref1" href="index.php">Inicio</a></li>
				<li><a>Recetas</a></li>
				<li><a><?php echo "$name_receta"; ?></a></li>
			</ul>
		</nav>
		<section class="pre-info">

			<div class="imgR">
				<div class="titlE">
					<p><?php echo "$name_receta"; ?></p>
					<hr>
				</div>
				<img src="<?php echo "$imagen"  ?>" >
			</div>
		</section>
		<section class="info">
			<div class="ingredientes">
				<img src="https://www.gourmet.cl/wp-content/themes/gourmet/img/icons/sombrero.png"  width="24px">
				<p>Ingredientes</p>
				<br>
				<ul>
					<li>25ml de agua templada</li>
					<li>25g de levadura para hacer pan </li>
					<li>1/2 cucharada de café de azúcar blanco</li>
					<li>1/2 cebolla grande</li>
					<li>25ml de aceite de oliva</li>
					<li>225ml de agua templada</li>
					<li>500gr de harina de fuerza</li>
					<li>10g de sal</li>
				</ul>
			</div>
			<div class="preparacion">
				<img src="https://www.gourmet.cl/wp-content/themes/gourmet/img/icons/cubierto.png"  width="24px">
				<p>Preparación</p>
				<br>
				<ol>
					<li>Comenzaremos añadiendo la levadura y la cucharadita de azúcar en el agua (recordad que debe estar templada). Removemos y dejamos hasta que ambos ingredientes queden bien diluidos. Reservamos.</li>
					<li>Lavamos la cebolla y la picamos en trozos pequeños que pondremos en un cuenco junto con el aceite de oliva. Reservamos.</li>
					<li>Agregamos la sal a la harina y tamizamos. Echamos esta última preparación en otro bol y vamos incorporando el agua, la cebolla (con el aceite) y la mezcla de levadura.</li>
					<li>Removemos con un utensilio de madera y, cuando todos los ingredientes estén incorporados, pasaremos a trabajarlos con las manos. Para ello, pondremos la masa sobre una superficie ligeramente enharinada y la amasaremos hasta obtener un resultado que muestre homogeneidad y, además, no se nos quede pegado a las manos</li>
					<li>Cuando lo hayamos conseguido, colocaremos la masa en un recipiente que cubriremos con un paño o con papel transparente de cocina, dejando que repose hasta que doble su tamaño (tarda más o menos entre 1 hora o 1 hora y 30 minutos).</li>
					<li>A falta de unos 10 minutos, ponemos el horno a precalentar a 200 grados.</li>
					<li>Con la masa ya lista, la daremos la forma que más nos guste y metemos al horno durante alrededor de unos 50 minutos. Como siempre, este tiempo dependerá de la clase de horno que tengáis en vuestras casas. Truco: Si notáis que el pan comienza a tostarse pero no estáis seguros de si su interior está bien hecho, bastará con que le deis unos golpecitos (como si estuvieseis llamando a una puerta) en la base y, si éste suena hueco, podréis sacarlo sin más.</li>
					<li>Una vez hecho, retiramos y dejamos enfriar sobre una rejilla. Listo.</li>
				</ol>
			</div>
		</section>
	<?php
		}
	?>
	<?php
		include_once 'footer.php';
	?>
