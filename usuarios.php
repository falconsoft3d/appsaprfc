<?php  
require("header.php");
include ("conexion.php");
?>

<!-- Banner -->
<section id="banner">
	<div class="content">
		<header>
			<h1>Listado de usuarios<br /></h1>
			<p>Marlon Falcón Hernández</p>
		</header>


		<?php
		$fce = &$sap->NewFunction ("SO_USER_LIST_READ");
		if ($fce == false ) {
			$sap->PrintStatus();
			exit;
		}

		$fce->USER_GENERIC_NAME = "*";
		$fce->Call();

		if ($fce->GetStatus() == SAPRFC_OK) {
			echo "<table class='table table-striped'><tr><td>SAP-Name</td><td>User-Number</td></tr>";
			$fce->USER_DISPLAY_TAB->Reset();
			while ( $fce->USER_DISPLAY_TAB->Next() )
				echo "<tr><td>".$fce->USER_DISPLAY_TAB->row["SAPNAM"]."</td><td>".$fce->USER_DISPLAY_TAB->row["USRNO"]."</td></tr>";
			echo "</table>";
		} else
		$fce->PrintStatus();
		$sap->Close();
		?>

	</div>


</div>


<div>
	
</div>
</section>
<?php  require("footer.php") ?>

														

						

				