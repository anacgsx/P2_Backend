@extends('layouts.app')

@section('title', 'Editar Categoria')

@section('content')
<h1 class="h4 mb-3">Editar Categoria</h1>

@if ($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('categories.update', $category) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" name="nome" value="{{ old('nome', $category->nome) }}" class="form-control" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Descrição</label>
    <textarea name="descricao" class="form-control" rows="4">{{ old('descricao', $category->descricao) }}</textarea>
  </div>

  <button class="btn btn-primary">Atualizar</button>
  <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
