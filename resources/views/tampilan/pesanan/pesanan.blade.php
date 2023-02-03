@extends('tampilan.dashboard')
@section('lala')
<center>
    
    <div class="row justify-content-center mt-4">
        <div class="p-1 text-warning">
            <font face="" size="7"><i>Toko Hasna</i></font>
        </div> 
    </div>

        {{-- orders --}}

        <div class="btn btn-dark m-3">
            <table class="table">
                <div class="row justify-content-center mt-4">
                    <div class="p-1 text-warning">
                        <font face="" size="4"><i>PESANAN</i></font>
                    </div> 
                </div>
                
                    <tr>
                        <th colspan="" class="text-info">Name</th>
                        <th colspan="" class="text-info">Quantity</th>
                        <th colspan="" class="text-info">Perquantity</th>
                        <th colspan="" class="text-info">Color</th>
                        <th colspan="" class="text-info">Brand</th>
                        <th colspan="" class="text-info">Harga</th>
                        <th colspan="" class="text-info">Perubahan</th>
                    </tr>
                @foreach ($psn as $key=>$value)
                    <tr>
                        {{-- terjual --}}
                        <td class="text-light">{{ $value->name }}</td>
                        <td class="text-light">{{ $value->quantity }}</td>
                        <td class="text-light">{{ $value->perquantity}}</td>
                        <td class="text-light">{{ $value->colors->name }}</td>
                        <td class="text-light">{{ $value->brands->name }}</td>
                        {{-- perubahan --}}
                        <td class="text-light">
                            @php
                                
                                $p = $value->quantity;
                                $au = $value->perquantity;
                                $tu = $p * $au;
                                // jumlah
                                echo $tu;
                            @endphp
                        </td>
                        <td><a href="{{ url('pesanan/'.$value->id.'/edit') }}" class="btn btn-light">Edit</a></td>
                        <td class="text-light">
                            <form action="{{ url('pesanan/'.$value->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="text-dark btn btn-light" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    
</center>
    
    
@endsection