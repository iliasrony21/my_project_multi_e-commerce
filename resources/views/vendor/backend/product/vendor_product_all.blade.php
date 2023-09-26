@extends('vendor.vendor_dashboard')
@section('vendor')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Vendor All Product</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Vendor All Product  <span class="badge rounded-pill bg-danger"> {{ count($products) }} </span> </li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
				<a href="{{ route('vendor.add.product') }}" class="btn btn-primary">Add Product</a> 				 
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Sl</th>
										<th>Image </th>
										<th>Product Name </th>
										<th>Price </th>
										<th>QTY </th>
										<th>Discount </th>
										<th>Status </th> 
										<th>Action</th> 
									</tr>
								</thead>
								<tbody>
								@foreach($products as $key => $item)		
									<tr>
										<td> {{ $key+1 }} </td>				
										<td> <img src="{{asset($item->product_thambnail)}}" style="width: 120px; height: 120px;" >  </td>
										<td>{{ $item->product_name }}</td>
										<td>{{ $item->selling_price }}</td>
										<td>{{ $item->product_qty }}</td>
										<td>
											@if($item->discount_price == NULL)
													<span class="badge rounded-pill bg-info">No Discount</span>
													@else
													@php
													$amount = $item->selling_price - $item->discount_price;
													$discount = ($amount/$item->selling_price) * 100;
													@endphp
												<span class="badge rounded-pill bg-danger"> {{ round($discount) }}%</span>
													@endif
										</td>
										<td>
											@if($item->status == 1)
											<span class="badge rounded-pill bg-success ">Active</span>
											@else
											<span class="badge rounded-pill bg-danger ">InActive</span>
											@endif
										</td>

										<td>
										<a href="" class="btn btn-success" title="Details"><i class="fa-regular fa-eye fa-beat fa-xs" style="--fa-primary-color: #ecfa1e; --fa-secondary-color: #ecfa1e;"></i></a>
										<a href="{{ route('vendor.edit.product',$item->id) }}" class="btn btn-warning " title="Edit Details"><i class="fa-regular fa-pen-to-square fa-beat fa-xs" style="color: #b01dcd;"></i></a>
										<a href="{{ route('vendor.delete.product',$item->id) }}" class="btn btn-danger " id="delete" title="Delete Product" ><i class="fa-regular fa-trash-can fa-bounce fa-xs" style="color: #17b2d9;"></i></a>
										@if($item->status == 1)
										<a href="{{ route('vendor.product.inactive',$item->id) }}" class="btn btn-info" title="Inactive"> <i class="fa-regular fa-thumbs-down fa-flip" style="color: #f31212;"></i> </a>
										@else
										<a href="{{ route('vendor.product.active',$item->id) }}" class="btn btn-info" title="Active"> <i class="fa-regular fa-thumbs-up fa-flip" style="color: #f31212;"></i> </a>
										@endif


										</td> 
									</tr>
								@endforeach

																																																														
								</tbody>
								<tfoot>
									<tr>
										<th>Sl</th>
										<th>Image </th>
										<th>Product Name </th>
										<th>Price </th>
										<th>QTY </th>
										<th>Discount </th>
										<th>Status </th> 
										<th>Action</th> 
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>

@endsection