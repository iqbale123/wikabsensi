@extends('dashboard.layouts.master')

@section('content')
    
@include('dashboard.partials.navbar')    

<div class="container mt-3">
    <a href="/dashboard/admin/rayon/create" class="btn bg-gradient-success mb-4">Buat Rayon</a>
    @if(session()->has('success'))
      <div class="alert alert-success font-weight-bold  text-white " role="alert">
        {{ session('success') }}
      </div>
    @endif
      <div class="card mb-4">
          <div class="table-responsive">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-3">Rayon</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-3">Pembimbing Rayon</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($rayons as $rayon)
                <tr>
                  <td>
                    <p class="text-xs font-weight-bold mb-0 ps-2">{{ $rayon->rayon }}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0 ps-2">{{ $rayon->pembimbing_rayon }}</p>
                  </td>
                  <td class="d-flex justify-content-center">
                    <a href="/dashboard/admin/rayon/{{ $rayon->id }}/edit" class="btn bg-gradient-info mx-2 my-2 font-weight-bold text-xs">
                      Edit
                    </a>
                    <form action="/dashboard/admin/rayon/{{ $rayon->id }}" method="post">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn bg-gradient-danger my-2 font-weight-bold text-xs">Hapus</button>
                    </form>
                  </td>
               </tr>
              @endforeach
              </tbody>
            </table>
          </div>
      </div>
      {!! $rayons->links() !!}
</div>  

@endsection