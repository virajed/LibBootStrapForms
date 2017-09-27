<div class="jumbotron">

	<h1> ABC Pvt Ltd <small> This is the life </small> </h1>

</div>



<div class="container">

	
	<div class="row"> <!--row 1-->
		<div class="col-md-12"><!--col 2-->

			<?php
				form_create('form-inline');

				form_input('fn','First Name','text','inline','sr-only');

				form_input('ln','Last Name','text','inline');

				form_button('submit','Save');

				form_close();
			?>  

		</div>
	</div>

</div>