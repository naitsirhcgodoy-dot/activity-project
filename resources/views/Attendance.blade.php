<div class="attendance-section">
  @extends('layouts.app')

  @section('content')
 <div class="container">
     <h1> Attendance Records</h1>

    <table border="5" cellpadding="100">
        <thead>
            <tr>
             <th class="px-4 py-2">Student Name</th>
             <th class="px-4 py-2">Student ID</th>
             <th class="px-4 py-2">Time In</th>
             <th class="px-4 py-2">Time Out</th>
            </tr>
        </thead>
        <tbody>
            @foreach($attendances as $attendance)
                <tr>
                 <td class="border px-4 py-2">{{ $attendance->student_name }}</td>
                 <td class="border px-4 py-2">{{ $attendance->student_id }}</td>
                 <td class="border px-4 py-2">{{ $attendance->time_in }}</td>
                 <td class="border px-4 py-2">{{ $attendance->time_out }}</td>
                </tr>
            @endforeach
      </tbody>
    </table>
</div>
@endsection