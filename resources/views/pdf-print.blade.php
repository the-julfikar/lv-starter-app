<table>
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Passwd</th>
            <th scope="col">Email</th>
            <th scope="col">Dept.</th>
            <th scope="col">Address</th>
            <th scope="col">Jobs</th>
            <th scope="col">Sex</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $l)
            <tr>
                <th scope="row">{{ $l['id'] }}</th>
                <td>{{ $l['fullname'] }}</td>
                <td>{{ $l['passwd'] }}</td>
                <td>{{ $l['email'] }}</td>
                <td>{{ $l['dept'] }}</td>
                <td>{{ $l['address'] }}</td>
                <td>{{ $l['jobs'] }}</td>
                <td>{{ $l['sex'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>