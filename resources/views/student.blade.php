<!DOCTYPE html>
<html>
   <head>
        <title>How to inline row editing using Laravel - codesolutionstuff.com</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/css/jquery-editable.css" rel="stylesheet"/>
        <script>$.fn.poshytip={defaults:null}</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/js/jquery-editable-poshytip.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>How to inline row editing using Laravel - codesolutionstuff.com</h1>
            <table class="table table-border data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>
                            <a href="" class="update_record" data-name="first_name" data-type="text" data-pk="{{ $student->id }}" data-title="Enter Firstname">{{ $student->first_name }}</a>
                        </td>
                        <td class="update_record" data-name="last_name" data-type="text" data-pk="{{ $student->id }}">
                          {{ $student->last_name }}
                        </td>
                        <td>
                            <a href="" data-name="age" data-type="text" data-pk="{{ $student->id }}" data-title="Enter Age">{{ $student->age }}</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
   </body>
    <script type="text/javascript">
        $.fn.editable.defaults.mode = 'inline';
    
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': '{{csrf_token()}}'
            }   
        });
    
        $('.update_record').editable({
            url: "{{ route('student.update') }}",
            type: 'text',
            name: 'first_name',
            pk: 1,
            title: 'Enter Field'
        });
    </script>
</html>