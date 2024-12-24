@extends('template')

@section('content')
    <h2 id="page_name" class="fw-bold">Student</h2>
    <table id="student_tb">
        <thead>
            <tr>
                <th>LRN</th>
                <th>Name</th>
                <th>Level</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <script>
        $('#student_tb').DataTable({
            ajax: "{{ url('api/student/get-all/') }}",
            columns: [
                { data: null, 
                  render: function (data){
                    return (data.lrn != null) ? data.lrn : 'N/A';
                  }  
                },
                { data: 'name' },
                { data: 'level' },
                { data: null, 
                  render: function (data){
                    return (data.status == 1) ? 'Enrolled' : 'Not Enrolled';
                  }  
                },
                { data: null, 
                  render: function (data){
                    let button = createViewLink(data.id);
                    return button.prop('outerHTML');
                  }  
                },
            ]
        });

        function createViewLink(id){
            let link = "{{ url('student/profile?id=') }}" + id;

            let view = $('<a>')
                        .addClass('btn btn-primary')
                        .text('View')  
                        .attr('href', link)
                        .attr('role', 'button')      
                        .css('text-decoration', 'none'); 
                        
            return view;
        }
    </script>
@endsection