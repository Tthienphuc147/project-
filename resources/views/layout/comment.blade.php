<div class="well">
					<h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
				
			
					<form role="form" method="POST" action="comment/{id}">
						{{ csrf_field() }}
						<div class="form-group">
							<textarea name="content" class="form-control" rows="3"></textarea>
						</div>
						<button type="submit" class="btn btn-danger">Gửi</button>
					</form>
				</div>
		

			<hr>

			<!-- Posted Comments -->

			