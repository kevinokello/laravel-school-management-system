@extends('layouts.dash')

@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
   <div class="content-body"><!-- Basic form layout section start -->
<section id="basic-form-layouts">
	<div class="row match-height">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
								<h4 class="form-section"><i class="icon-head"></i> Personal Info</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>

				</div>
				<div class="card-body collapse in">
					<div class="card-block">

						<form class="form">
							<div class="form-body">

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput1">First Name</label>
											<input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="fname">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput2">Last Name</label>
											<input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="lname">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput3">E-mail</label>
											<input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput4">Contact Number</label>
											<input type="text" id="projectinput4" class="form-control" placeholder="Phone" name="phone">
										</div>
									</div>
								</div>

								<h4 class="form-section"><i class="icon-clipboard4"></i> Requirements</h4>

								<div class="form-group">
									<label for="companyName">Company</label>
									<input type="text" id="companyName" class="form-control" placeholder="Company Name" name="company">
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput5">Interested in</label>
											<select id="projectinput5" name="interested" class="form-control">
												<option value="none" selected="" disabled="">Interested in</option>
												<option value="design">design</option>
												<option value="development">development</option>
												<option value="illustration">illustration</option>
												<option value="branding">branding</option>
												<option value="video">video</option>
											</select>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput6">Budget</label>
											<select id="projectinput6" name="budget" class="form-control">
												<option value="0" selected="" disabled="">Budget</option>
												<option value="less than 5000$">less than 5000$</option>
												<option value="5000$ - 10000$">5000$ - 10000$</option>
												<option value="10000$ - 20000$">10000$ - 20000$</option>
												<option value="more than 20000$">more than 20000$</option>
											</select>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label>Select File</label>
									<label id="projectinput7" class="file center-block">
										<input type="file" id="file">
										<span class="file-custom"></span>
									</label>
								</div>

								<div class="form-group">
									<label for="projectinput8">About Project</label>
									<textarea id="projectinput8" rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
								</div>
							</div>

							<div class="form-actions">
								<button type="button" class="btn btn-warning mr-1">
									<i class="icon-cross2"></i> Cancel
								</button>
								<button type="submit" class="btn btn-primary">
									<i class="icon-check2"></i> Save
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>

</section>
<!-- // Basic form layout section end -->
        </div></div></div>
@endsection
