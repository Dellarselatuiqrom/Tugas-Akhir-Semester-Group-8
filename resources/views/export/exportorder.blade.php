<table class="table" style="border:1px solid">
    <thead>
        <tr>
            <th>Cart ID         : </th>
            <th>Nama Penerima   : </th>
            <th>Nomor Telepon   : </th>
            <th>Alamat          : </th>
            <th>Provinsi        : </th>
            <th>Kota            : </th>
            <th>Kecamatan       : </th>
            <th>Kelurahan       : </th>
            <th>Kode Pos        : </th>
        </tr>
    </thead>
    <tbody>
    </tbody>
    @foreach($order as $o)
        <tr>
            <td>{{$order->cart_id}}</td>
            <td>{{$o->nama_penerima}}</td>
            <td>{{$o->no_tlp}}</td>
            <td>{{$o->alamat}}</td>
            <td>{{$o->provinsi}}</td>
            <td>{{$o->kota}}</td>
            <td>{{$o->kecamatan}}</td>
            <td>{{$o->kelurahan}}</td>
            <td>{{$o->kodepos}}</td>
        </tr>
    </tbody>
<table>

