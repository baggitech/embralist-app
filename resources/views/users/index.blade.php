@extends('layouts.app')

@section('content')
    <div class="container pt-4 pt-sm-5 pb-5 mb-xxl-3">
      <div class="row pt-2 pt-sm-0 pt-lg-2 pb-2 pb-sm-3 pb-md-4 pb-lg-5">


        <!-- Account profile content -->
        <div class="col-lg-12">
          <h1 class="h2 pb-2 pb-lg-3">Usuários</h1>
          <!-- User listings -->
          <section class="pb-5 mb-md-3">


            <!-- Table with integrated search and sortable columns -->
            <div data-filter-list='{"searchClass": "table-search", "listClass": "table-list", "sortClass": "table-sort", "valueNames": ["order", "first-name", "last-name", "position", "phone"]}'>

            <!-- Search field -->
            <div class="position-relative mb-2" style="max-width: 18rem;">
                <i class="fi-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                <input type="search" class="table-search form-control form-icon-start" placeholder="Search table">
            </div>

            <!-- Table with sticky header and sortable columns -->
            <div class="table-responsive overflow-auto" style="height: 300px;">
                <table class="table">
                <thead class="position-sticky top-0">
                    <tr>
                    <th scope="col">
                        <button type="button" class="btn fs-base fw-semibold text-dark-emphasis table-sort p-0" data-sort="order">#</button>
                    </th>
                    <th scope="col">
                        <button type="button" class="btn fs-base fw-semibold text-dark-emphasis table-sort p-0" data-sort="name">Nome</button>
                    </th>
                    <th scope="col">
                        <button type="button" class="btn fs-base fw-semibold text-dark-emphasis table-sort p-0" data-sort="email">Email</button>
                    </th>
                    <th scope="col">
                        <button type="button" class="btn fs-base fw-semibold text-dark-emphasis table-sort p-0" data-sort="position">Position</button>
                    </th>
                    <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody class="table-list">

                @foreach ($users as $user)
                    <tr>
                    <th class="order" scope="row">{{ $user->id }}</th>
                    <td class="name">{{ $user->name }}</td>
                    <td class="email">{{ $user->email }}</td>
                    <td class="position"></td>
                    <td class="phone text-nowrap">
                    
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">Editar</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir este usuário?')">Excluir</button>
                        </form>
                    
                    </td>
                    </tr>
                @endforeach

                </tbody>
                </table>
            </div>
            </div>


          </section>
        </div>
      </div>
    </div>
@endsection