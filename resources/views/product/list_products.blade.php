<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@extends('user.master')

@section('title', 'Quan ly sản phẩm')
@section('tieude', 'Quan ly sản phẩm')
@section('content')
<a href="{{route('products.add')}}">Thêm danh muc</a>
<table border='1' class='table'>
	<thead>
		<th>ID</th>
		<th>Name</th>
		<th>Description</th>
		<th>Price</th>
		<th>Sale Percent</th>
		<th>Stocks</th>
		<th>Category</th>
		<th>Actions</th>
	</thead>
	<tbody>
		@foreach($products as $product)
		<tr>
			<td>{{$product->id}}</td>
			<td>{{$product->name}}</td>
			<td>{{$product->description}}</td>
			<td>{{$product->price}}</td>
			<td>{{$product->sale_percent}}</td>
			<td>{{$product->stocks}}</td>
			<td>
				@if(isset($product->category))
				{{$product->category->name}}
				@else
				<p style="font-style: italic;">(Không có danh mục)</p>
				@endif
			</td>
			<td>
				<a href="">Edit</a> &nbsp
				<a class="delete" href="">Delete</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<script>
	$(".delete").on("click", function() {
		return confirm("Bạn có muốn xóa không ?");
	});
</script>
@endsection