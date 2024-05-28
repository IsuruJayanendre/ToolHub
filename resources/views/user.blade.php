@include('header')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    <div class="container p-5">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">User NIC</th>
            <th scope="col">User Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">User Type</th>
            <th scope="col">Password</th>
            <th scope="col">Registered At</th>
            <th scope="col">Action</th>          

          </tr>
        </thead>
        <tbody>
          @if(isset($users) && $users->count())
          @foreach ($users as $user)
          <tr>
            <td>{{$user->nic}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->userType}}</td>
            <td>********</td>
            <td>{{$user->created_at}}</td>
            <td>
                <button class="btn btn-outline-danger">
                  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                  </svg></button></td>
              
          </tr>
          @endforeach

          @else
          <p>No users found.</p>
      @endif

        </tbody>
      </table>
</x-app-layout>
@include('footer')