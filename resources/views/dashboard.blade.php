@include('header')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container p-5">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">order No</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Tool Name</th>
            <th scope="col">Days</th>
            <th scope="col">Rental</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td>Otto</td>
            <td><button type="button" class="btn btn-outline-success">Settle</button></td>
          </tr>
        </tbody>
      </table>
</x-app-layout>
@include('footer')