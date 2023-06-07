@extends('layouts.main')

@section('container')
    <table id="editable-table">
        <thead>
            <tr>
                <th>Column 1</th>
                <th>Column 2</th>
                <!-- Add more column headers as needed -->
            </tr>
        </thead>
        <tbody>
            <!-- Populate the table with initial data -->
            @foreach($Users as $row)
                <tr>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <!-- Add more table cells as needed -->
                </tr>
            @endforeach
        </tbody>
    </table>

    <button id="save-button">Save</button>

    <script>
        // Add JavaScript code to make the table editable and handle the save button click

        // Wait for the DOM to be ready
        document.addEventListener('DOMContentLoaded', function() {
            const table = document.getElementById('editable-table');
            const saveButton = document.getElementById('save-button');

            // Enable editing for the table
            table.addEventListener('click', function(event) {
                const target = event.target;

                // Check if the clicked element is a table cell (td)
                if (target.tagName === 'TD') {
                    target.contentEditable = true;
                }
            });

            // Handle save button click
            saveButton.addEventListener('click', function() {
                // Get the updated table data
                const updatedRows = Array.from(table.querySelectorAll('tr')).slice(1); // Exclude the header row
                const updatedData = updatedRows.map(row => {
                    const cells = Array.from(row.querySelectorAll('td'));
                    return cells.map(cell => cell.textContent.trim());
                });

                // Send the updated data to the server
                fetch('{{ route('user.update') }}', {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ data: updatedData })
                })
                .then(response => {
                    if (response.ok) {
                        alert('Table data saved successfully');
                    } else {
                        alert('Failed to save table data');
                    }
                })
                .catch(error => {
                    alert('An error occurred while saving table data');
                    console.error(error);
                });
            });
        });
    </script>
@endsection
