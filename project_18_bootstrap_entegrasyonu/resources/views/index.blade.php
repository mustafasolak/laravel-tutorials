@extends('layouts.app')
@section('baslik')
    Bootstrap Entegrasyonu
@endsection

<div class="container">

    <form >
        <textarea name="text" class="ckeditor"></textarea>
    </form>

    

    {{-- <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Adı Soyadı</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row">
        {!! $users->links() !!}
    </div> --}}
</div>

 
