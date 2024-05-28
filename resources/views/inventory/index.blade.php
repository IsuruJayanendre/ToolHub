@include('header')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inventory') }}
        </h2>
    </x-slot>
    <div class="container p-5">

      <div class="container text-center">
        <div class="row row-cols-4">
          <div class="col"></div>
          <div class="col"></div>
          <div class="col"></div>
          <div class="col">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
              Add New Item</button>
          </div>
        </div>
      </div>
      


      <!--model for insert-->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Item</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              
              <form action="{{ route('inv.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Tool Name:</label>
                  <input type="text" class="form-control" id="toolName" name="toolName">
                </div>
                
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Price pre Day(Rs.):</label>
                  <input type="text" class="form-control" id="price" name="price">
                </div>
    
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Catagory:</label>
                  <select class="form-select" aria-label="Default select example" name="catagory">
                    <option selected>-</option>
                    <option value="1">Drilling</option>
                    <option value="2">Cutting</option>
                    <option value="3">Sawing</option>
                    <option value="3">Grinding & Polishing</option>
                  </select>
                </div>
                
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Quantity:</label>
                  <input type="text" class="form-control" id="quantity" name="quantity">
                </div>

                <div class="mb-3">
                  <label for="image" class="col-form-label">Upload Image:</label><br>
                  <input type="file" name="image" id="Upload" required class="course form-control">
                </div>  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add Item</button>
            </form>
            </div>
          </div>
        </div>


        <script>
          // Initialization for ES Users
      import { Collapse, Ripple, initMDB } from "mdb-ui-kit";
      
      initMDB({ Collapse, Ripple });
      
      </script>
      </div>
    
      <br><br>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Tool Id</th>
            <th scope="col">Tool Name</th>
            <th scope="col">price per Day(Rs.)</th>
            <th scope="col">Catagory</th>
            <th scope="col">Quantity</th>
            <th scope="col">Image</th>
            <th scope="col">Added At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($inventry_news as $inventry_new)
          <tr>
            <td>{{$inventry_new->id}}</td>
            <td>{{$inventry_new->toolName}}</td>
            <td>Rs.{{$inventry_new->price}}/=</td>
            <td>{{$inventry_new->catagory}}</td>
            <td>{{$inventry_new->quantity}}</td>
            <td><img src="{{ asset('images/Inventory_new/' . $inventry_new->image) }}" width="80" height="80" alt="{{ $inventry_new->toolName }}">
            </td>
            <td>{{$inventry_new->created_at}}</td>
            <td>
              <!--delete-->
              <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#Edit" data-bs-whatever="@getbootstrap">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
              </svg>
              </button> &nbsp
                
              <!--delete-->
              <button type="button" class="btn btn-outline-danger">
                  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                </svg>
              </button>
            
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      
<!--model for edit-->
      <div class="modal fade" id="Edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Item Details</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Tool Id:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Tool Name:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Price pre Day(Rs.):</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
    
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Catagory:</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Select catagory</option>
                    <option value="1">Drilling</option>
                    <option value="2">Cutting</option>
                    <option value="3">Sawing</option>
                    <option value="3">Grinding & Polishing</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Upload Image:</label><br>
                  <input type="file" name="image">
                </div>
                
                
                
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Update</button>
            </div>
          </div>
        </div>
      </div>

</x-app-layout>

@include('footer')