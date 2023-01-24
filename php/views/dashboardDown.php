<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" type="text/css" href="../../css/whatsapp.css"> </link>

		<div>
		<div>
			<form id="formulariowtsp" action="" class="formulariowtsp">
				<p class="newmessagewts">Nuevo mensaje</p> <span class="closemodal">x</span>
				<label for="">Nombre</label>
				<input id="inputname" class="inputwts" type="text" required="" placeholder="Nombre" autocomplete="off">
				<label for="">Mensaje</label>
				<textarea id="inputmensaje" name="" id="" cols="30" rows="10" class="textareawts" required=""></textarea>
				<button type="submit" id="sendbttn" class="btnwtsp">Enviar mensaje</button type="submit">
			</form>
		</div>
		<img id="icon-whatsapp" class="image-icon-whatsapp" src="../../images/whatsapp.webp" alt="" width="70">
	</div>

	<script>
		var IconWhatsapp = document.querySelector('#icon-whatsapp');
		var formulariowtsp = document.getElementById('formulariowtsp');
		var closemodal = document.querySelector('.closemodal');
		var sendbttn = document.querySelector('#sendbttn');

		
		IconWhatsapp.addEventListener('click' , function(){
			formulariowtsp.classList.toggle('entrarysalir')
		})

		closemodal.addEventListener('click' , function(){
			formulariowtsp.classList.remove('entrarysalir')
		})

		sendbttn.addEventListener('click' , EnviarMensaje)

		function EnviarMensaje(){


			let name = document.querySelector('#inputname').value;
			let mensaje = document.querySelector('#inputmensaje').value;
		
			let url = "https://api.whatsapp.com/send?phone=529933326201&text=Nombre: %0A" + name + "%0A%0AMensaje: %0A" + mensaje + "%0A";
			window.open(url);

		}

	</script>
                </div>
            </div>
        </main>
    </div>
</div>
<script type="text/javascript" src="../../librerias/jquery.min.js"></script>
<script type="text/javascript" src="../../bootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="../../bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../../bootstrap/js/fontawesome.js"></script>
<script type="text/javascript" src="../../librerias/datatable/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../librerias/datatable/dataTables.bootstrap4.min.js"></script>
</body>
</html>