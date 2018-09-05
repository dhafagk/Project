<h2>Data Kartu Keanggotaan (KTA)</h2>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Badan Usaha</th>
            <th>Domisili</th>
            <th>A1</th>
            <th>A2</th>
            <th>A3</th>
            <th>A4</th>
            <th>A5</th>
            <th>A6</th>
        </tr>
    </thead>
    <tbody>
    @php $no = 1 @endphp
    @foreach($kta as $user)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $user->nama_bu }}</td>
            <td>{{ $user->domisili }}</td>
            <td>{{ $user->a1 }}</td>
            <td>{{ $user->a2 }}</td>
            <td>{{ $user->a3 }}</td>
            <td>{{ $user->a4 }}</td>
            <td>{{ $user->a5 }}</td>
            <td>{{ $user->a6 }}</td>
        </tr>
    @endforeach
    </tbody>
</table>