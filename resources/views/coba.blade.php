@extends('layouts.main')

@section('container')



<main>
    <h1>Halaman Coba</h1>
    {{-- @livewire('users-table-view') --}}
    <!-- Include the necessary libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>
                    <span class="editable" data-id="{{ $user->id }}" data-column="column_name" contenteditable>{{ $user->column_name }}</span>
                </td>
                <td>
                    <button class="save-button" data-id="{{ $user->id }}">Save</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<script>
$(document).ready(function() {
    // Handle save button click
    $('.save-button').click(function() {
        var id = $(this).data('id');
        var value = $(this).closest('tr').find('.editable').text();

        // Send an AJAX request to update the table row
        axios.patch('/table/' + id, {
            new_value: value
        })
        .then(function(response) {
            // Handle success response
            console.log(response.data);
        })
        .catch(function(error) {
            // Handle error response
            console.log(error);
        });
    });
});
</script>

      
</main>
 
 @endsection      