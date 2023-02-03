@extends('tampilan.dashboard')
@section('lala')


    
<div class="row justify-content-center mt-5">
    <div class="p-3 btn btn-outline-info text-light col-md-5 border-0">
        <main class="form-registration">
            <h1 class="h3 fw-normal text-center text-dark">Update pesanan jilbab</h1>
            <form action="{{ url('pesanan/'.$psn->id) }}" method="post" class="">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-floating">
                    <label for="Nama">Name </label>
                    <input type="text" class="form-control" name="name" placeholder="Nama" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="Email"> Quantity </label>
                    <input type="number" class="form-control " name="quantity" placeholder="Quantity" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="nomor">Perquantity</label>
                    <input type="number" class="form-control" name="perquantity" placeholder="perquantity" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="fakultas">/ color</label>
                     <select id="fakultas" name="colors_id" class="form-control">
                        <option value="1">Hitam</option> 
                        <option value="2">Mocca</option>
                        <option value="3">Milo</option> 
                        <option value="4">Ligth grey</option> 
                        <option value="5">Carramel</option>
                        <option value="6">Latte</option>
                        <option value="6">Dark milo</option>
                        <option value="6">Coklat</option>
                        <option value="6">Dark grey</option>
                        <option value="6">Deep purple</option>
                    </select>
                </div>
                <div class="form-floating">
                    <label for="fakultas">Brand</label>
                     <select id="fakultas" name="brands_id" class="form-control">
                        <option value="1">Bella sequere</option> 
                        <option value="2">Pasmina</option>
                        <option value="3">Sport</option> 
                    </select>
                </div>
                <button class="w-50 btn btn-outline-success text-dark mt-3" type="submit">Pesan</button>
            </form>
        
        </main>
    </div>
</div>
@endsection

 