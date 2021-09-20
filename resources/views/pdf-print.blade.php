<style>
    table, th, td {
        padding: 5px;
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<!--
<img src="{{ asset("/imgs/ruet-hd.png") }}" width="90" height="80" alt="">
-->

<h1 style="text-align: center">Result of Employee</h1>

<h2 style="text-align: center">ICT Cell</h2>

<table style="margin-top: 20px; margin-left: auto; margin-right: auto;">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Passwd</th>
            <th>Email</th>
            <th>Dept.</th>
            <th>Address</th>
            <th>Jobs</th>
            <th>Sex</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $l)
            <tr>
                <th>{{ $l['id'] }}</th>
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


