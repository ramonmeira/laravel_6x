@extends('admin.layouts.app')

@section('title','Gestão de Produtos')

@section('content')
	<h1>Mostrando os produtos</h1>

	@component('admin.components.card')
		@slot('title')
		    <h1>Título Card</h1>
		@endslot
	    Um card de exemplo
	@endcomponent

	<hr>

	@include('admin.includes.alerts',['content' => "Alerta de preço de produtos"])

	<hr>

	@if (isset($products))
		@foreach ($products as $product)
			<p class="
				@if ($loop->last) last 
				@elseif($loop->first) last
				@endif">{{ $product }}</p>
		@endforeach

	@endif

	@forelse ($teste3 as $t)
		<p>{{ $t }}</p>
	@empty
		<p>Não existem produtos cadastrados</p>
	@endforelse

	<hr>

	@if ($teste === '123')
		É igual
	@elseif($teste == 123)
		É igual a 123
	@else
		É diferene
	@endif

	@unless ($teste === '123')
		ashduj
	@else
		sdjkfhsdkjf
	@endunless

	@isset ($teste2)
	    <p> {{ $teste2 }} </p>
	@else
		<p>Não configurado</p>
	@endisset

	@empty ($teste3)
	    <p>Vazio...</p>
	@else

	@endempty

	@auth()
		<p>Autenticado</p>
	@else
		<p>Não autentificado</p>
	@endauth

	@guest()
		<p>Convidado</p>
	@endguest

	@switch($teste)
	    @case(1)
	        First case...
	        @break
	    @case(2)
	        2 case...
	        @break	
	    @default
	        Default case...
	@endswitch
	
@endsection


<style>
	.last {background-color: #CCC;}
</style>