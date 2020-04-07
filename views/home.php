<div class="card">
		<div class="card-body">
						
			<form method="POST" action="<?php echo BASE_URL;?>home">

				<div class="form-group">
					<?php if(!empty($msgErro)) : ;?>
						<div class="alert alert-danger" role="alert">
							Atenção ! <?php echo $msgErro ;?>
						</div>
					<?php endif ;?>
				</div>

				<div class="form-group">
					<?php if(isset($_GET['link_no'])) : ;?>
						<div class="alert alert-danger" role="alert">
							Atenção ! Link Informado não existe.
						</div>
					<?php endif ;?>
				</div>

				<div class="row">
					<div class="col">
						<div class="form-group">							
							<input class="form-control" 
								   type="url" 
								   id="txtlink_original" 
								   name="txtlink_original" 
								   placeholder="https://example.com.br" 								   
								   required>            
								   
							<small class="text-muted">* Necessário informar http:// ou https:// nos links</small>
						</div>						
					</div>
				</div>

				<div class="row">
					<div class="col">
						<div class="form-group">
							<button class="btn btn-success" type="submit">Encurtar</button>   
						</div>   					
					</div>
				</div>

			</form>

					<p class="text-primary text-center"><strong>LISTA DE LINKS</strong></p>

					<table class="table table-hover table-sm ">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Link Curto</th>
								<th scope="col">Link Original</th>																								
							</tr>
						</thead>	
											
						<?php foreach($link_all as $item) : ;?>
							<tbody>
								<tr>
									<td><small><?php echo $item['id'] ;?></small></td>
									<td><small><a href="<?php echo BASE_URL.'abre/link/'.$item['url_curta_hash'] ;?>" target="_blank"><?php echo 'abre/link/'.$item['url_curta_hash'] ;?></a></small></td>
									<td><small><?php echo $item['url_original'] ;?></small></td>
									
								</tr>
							</tbody>
						<?php endforeach ;?>
						
					</table>

					<small class="text-muted">* Caso copie o link encurtado e cole na URL ele irá redirecionar automaticamente.</small>

		</div>
</div>