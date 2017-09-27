<div class="jumbotron">

	<h1> ABC Pvt Ltd <small> This is the life </small> </h1>

</div>



<div class="container">

	<div class="row"> <!--row 1-->
		<div class="col-md-12"><!--col 1-->

			<?php
				form_create();

				form_input('fn','First Name');

				form_input('ln','Last Name');

				form_textarea('cmt','Comment');

				form_select('cnt','Country',array('Sri Lanka','India'));

				form_button('submit','Save');

				form_close();
			?>  

		</div>
	</div>


</div>