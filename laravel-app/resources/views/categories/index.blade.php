@extends('layouts.app')

@section('title', 'Categorias')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h1 class="h4">Categorias</h1>
  <a href="{{ route('categories.create') }}" class="btn btn-primary">Criar Categoria</a>
</div>

<table class="table table-bordered bg-white">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Descrição</th>
      <th>Criado em</th>
      <th style="width: 180px">Ações</th>
    </tr>
  </thead>
  <tbody>
    @forelse($categories as $category)
      <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->nome }}</td>
        <td>{{ \Illuminate\Support\Str::limit($category->descricao, 80) }}</td>
        <td>{{ $category->created_at->format('d/m/Y H:i') }}</td>
        <td>
          <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-secondary">Editar</a>

          <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Confirmar exclusão?');">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger">Excluir</button>
          </form>
        </td>
      </tr>
    @empty
      <tr>
        <td colspan="5" class="text-center">Nenhuma categoria encontrada.</td>
      </tr>
    @endforelse
  </tbody>
</table>

{{ $categories->links() }}
@endsection
