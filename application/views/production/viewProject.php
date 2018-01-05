<div class="card">
	<h4 class="card-title"><strong>Samples</strong></h4>

	<form data-provide="validation" data-disable="false">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-4 col-lg-2 col-form-label require" for="input-1">Required field</label>
				<div class="col-8 col-lg-10">
					<input type="text" class="form-control" id="input-1" required>
					<div class="invalid-feedback"></div>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-4 col-lg-2 col-form-label require">Required checkbox</label>
				<div class="col-8 col-lg-10">
					<label class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" required>
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">Agree to terms and conditions</span>
					</label>
					<div class="invalid-feedback"></div>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-4 col-lg-2 col-form-label" for="input-2">Min length</label>
				<div class="col-8 col-lg-10">
					<input type="text" class="form-control" id="input-2" placeholder="Minimum 6 character" data-minlength="6" data-error="Minimum length is 6 character.">
					<div class="invalid-feedback"></div>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-4 col-lg-2 col-form-label" for="input-3">Max length</label>
				<div class="col-8 col-lg-10">
					<input type="text" class="form-control" id="input-3" placeholder="Maximum 6 character" maxlength="6">
					<div class="invalid-feedback"></div>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-4 col-lg-2 col-form-label" for="input-4">Min value</label>
				<div class="col-8 col-lg-10">
					<input type="number" class="form-control" id="input-4" placeholder="Min = 9" min="9">
					<div class="invalid-feedback"></div>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-4 col-lg-2 col-form-label" for="input-5">Max value</label>
				<div class="col-8 col-lg-10">
					<input type="number" class="form-control" id="input-5" placeholder="Max = 99" max="99">
					<div class="invalid-feedback"></div>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-4 col-lg-2 col-form-label" for="input-6">Email</label>
				<div class="col-8 col-lg-10">
					<input type="email" class="form-control" id="input-6">
					<div class="invalid-feedback"></div>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-4 col-lg-2 col-form-label" for="input-7">Url</label>
				<div class="col-8 col-lg-10">
					<input type="url" class="form-control" id="input-7">
					<div class="invalid-feedback"></div>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-4 col-lg-2 col-form-label" for="input-pass">Password</label>
				<div class="col-8 col-lg-10">
					<input type="password" class="form-control" id="input-pass">
					<div class="invalid-feedback"></div>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-4 col-lg-2 col-form-label" for="input-pass-confirm">Confirm password</label>
				<div class="col-8 col-lg-10">
					<input type="password" class="form-control" id="input-pass-confirm" data-match="#input-pass">
					<div class="invalid-feedback"></div>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-4 col-lg-2 col-form-label" for="input-8">Multiple rule</label>
				<div class="col-8 col-lg-10">
					<input type="email" class="form-control" id="input-8" placeholder="Required email" required>
					<div class="invalid-feedback"></div>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-4 col-lg-2 col-form-label" for="input-9">Multiple rule</label>
				<div class="col-8 col-lg-10">
					<input type="text" class="form-control" id="input-9" placeholder="Required and minlength 6" data-minlength="6" required>
					<div class="invalid-feedback"></div>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-4 col-lg-2 col-form-label" for="input-10">Regular expression</label>
				<div class="col-8 col-lg-10">
					<input type="text" class="form-control" id="input-10" placeholder="IP Address" pattern="^(?!0)(?!.*\.$)((1?\d?\d|25[0-5]|2[0-4]\d)(\.|$)){4}$" data-error="An incorrect IP ddress.">
					<div class="invalid-feedback"></div>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-4 col-lg-2 col-form-label" for="input-11">Check on server</label>
				<div class="col-8 col-lg-10">
					<input type="text" class="form-control" id="input-11" name="username" placeholder="Username" data-remote="server/validator.php">
					<div class="invalid-feedback"></div>
					<small>Read official documentation for server-side implementation.</small>
				</div>
			</div>

		</div>


		<footer class="card-footer text-right">
			<button class="btn btn-primary" type="submit">Submit</button>
		</footer>


	</form>
</div>