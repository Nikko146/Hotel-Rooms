@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-8">
			<div class="card">
				<div class="card-header">
					<h2 style="margin-bottom: -58px;">List Categories</h2>

					<form action="" method="get" class="float-right">
						<div class="row">
							<div class="col-7">
								<input type="text" name="search" class="form-control" placeholder="Search for Categories ..." style="margin: 20px 0 0 10px;">
							</div>

							<input type="submit" value="Submit" class="btn btn-info" style="margin-top: 20px;">
							<a href="{{ url('categories') }}" style="text-decoration: none; margin: 20px 0 0 4px;" class="btn btn-secondary">Reset</a>
						</div>
					</form>

				</div>

				<div class="card-body">
					<table class="table">
						<tbody>
							<tr align="center">
								<th>No.</th>
								<th>Name</th>
								<th>Price</th>
							</tr>

							<tr align="center">
								<td>1</td>
								<td>VIP</td>
								<td>$3,000</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>		
		</div>

		<div class="col-4">
			<a href="" class="btn btn-dark float-right">Back to Room's List</a>
		</div>
	</div>
@endsection 