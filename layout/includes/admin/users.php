
<div class="row">
	<div class="col-md-6">
	<h3 class="text-center">Add new user</h3>
		<hr>

		<div class="form-horizontal"><!--form start -->

			<div class="form-group">
				<label for="username" class="col-md-2">Username:</label>
				<div class="col-md-10">
					<input type="text" name="korisnickoIme" class="form-control" id="username">
				</div>
			</div>

			<div class="form-group"><!-- form start-->
				<label for="username" class="col-md-2">Email:</label>
				<div class="col-md-10">
					<input type="email" name="email" class="form-control" id="email">
				</div>
			</div>

			<div class="form-group">
				<label for="sifra" class="col-md-2">Password:</label>
				<div class="col-md-10">
					<input type="password" name="sifra" class="form-control" id="password">
				</div>
			</div>
            <div class="form-group">
                <label for="sifra2" class="col-md-2">Repeat Password:</label>
                <div class="col-md-10">
                    <input type="password" name="sifra2" class="form-control" id="password2">
                </div>
            </div>

						<div class="form-group">
							<label for="Role" class="col-md-2">User Role:</label>
							<div class="col-md-10">
								<select name="role" id="role" class="form-control">
									<option value="admin">Admin</option>
									<option value="user">Standrad user</option>
								</select>
							</div>
						</div>

            <div class="form-group text-center">
							<button id="dugme" type="submit"  name="insert" value="adduser" class="btn btn-info btn-md" onclick="addUser();">Add user</button>
						</div>
		</div><!-- end of form -->


	</div>
	<div class="col-md-6" id="tabela">
			<h3 class="text-center">All users</h3>
			<hr>
		</div>
</div>
