<h1>Cadastro</h1>

<x-alert/>

<form action="{{ route('supports.store') }}" method="POST">
    @include('admin.supports.partials.form')
</form>
